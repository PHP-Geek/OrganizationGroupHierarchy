<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;
use DB;



class Group extends Model {

    protected static $groupIds = [];

    /**
     * foreign key on group user
     * @return type
     */
    public function groupUser() {
        return $this->hasMany(GroupUser::class, 'groupId')->join('users', 'users.id', '=', 'group_users.userId')->select('group_users.*', 'users.firstName', 'users.lastName', 'users.email');
    }

    /**
     * foreign key for group manager role
     * @return type
     */
    public function groupManager() {
        return $this->belongsTo(User::class, 'groupManagerId');
    }

    /**
     * Update groups data
     * @param type $id
     * @param type $groupUpdateArray
     * @return type
     */
    function updateGroupData($id, $groupUpdateArray) {
        return $this->where('id', $id)->update($groupUpdateArray);
    }

    public function children() {
        return $this->hasMany(Group::class, 'groupParentId');
    }

    /**
     * get the group manager groups
     * @return type
     */
    function getGroupManagerGroups() {
        $allGroups = [];
        $myGroups = $this->where('groupManagerId', Auth::user()->id)->where('companyId', Auth::user()->companyId)->get();
        foreach ($myGroups as $group) {
            $allGroups = array_merge($allGroups, $this->getChildsById($group->id));
        }
        sort($allGroups);
        return array_unique($allGroups);
    }

    /**
     * static function for child recursion
     * @param type $group
     * @return type
     */
    static function childRecur($group) {
        foreach ($group as $groupDetail) {
            array_push(self::$groupIds, $groupDetail->id);
            if (count($groupDetail->children) > 0) {
                self::childRecur($groupDetail->children);
            }
        }
        return self::$groupIds;
    }

    /**
     * get all the records except its own childs
     * @param type $id
     */
    function getChildsById($id) {
        $result = [];
        $group = Group::find($id);
        if (count($group->children) > 0) {
            $result = $this->childRecur($group->children);
        }
        array_push($result, $id);
        return $result;
    }

    /**
     * group datatable
     * @param type $request
     * @return type
     */
    function getGroupDatatable($request) {
        $data = $this->leftJoin('groups AS groups1', 'groups1.id', '=', 'groups.groupParentId')
                ->leftJoin('users AS groupManagers', 'groupManagers.id', '=', 'groups.groupManagerId')
                ->join('users', 'users.id', '=', 'groups.groupCreatedBy')
                ->where('groups.companyId', '=', Auth::user()->companyId);
        $data = $data->select('groups.*', 'groups1.groupName AS parentGroupName', 'users.firstName', DB::raw('CONCAT(groupManagers.firstName," ",groupManagers.lastName) AS groupManagerName'));
        //filtration for keyword
        if (isset($request->keyword) && $request->keyword != '') {
            $data = $data->where(function($query) use ($request) {
                $query->orWhere('groups.groupName', 'LIKE', '%' . $request->keyword . '%');
                $query->orWhere('groups1.groupName', 'LIKE', '%' . $request->keyword . '%');
                $query->orWhere('users.firstName', 'LIKE', '%' . $request->keyword . '%');
            });
        }
        //check the current user role
        if (Auth::check() && in_array('group-manager', array_column(Auth::user()->userRole->toArray(), 'roleSlug'))) {
            $data = $data->whereIn('groups.id', \Session::get('myGroups'));
        }
        $datacount = $data->count();
        if ($request->length == -1) {
            $dataArray = $data->get();
        } else {
            $dataArray = $data->skip($request->start)->take($request->length)->get();
        }
        return [$datacount, $dataArray];
    }

}

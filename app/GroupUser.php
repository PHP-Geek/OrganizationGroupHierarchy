<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupUser extends Model {

    //foreign key with group table with groupId
    function group() {
        return $this->belongsTo(Group::class, 'groupId');
    }

    /**
     * foreign key with user table on userId
     * @return type
     */
    function user() {
        return $this->belongsTo(User::class, 'userId');
    }

    /**
     * get the group users details by group id
     * @param type $groupId
     * @return type
     */
    function getGroupUsersByGroupId($groupId) {
        return $this->join('users', 'users.id', '=', 'group_users.userId')
                        ->join('user_roles', 'users.id', '=', 'user_roles.userId')
                        ->join('roles', 'roles.id', '=', 'user_roles.roleId')
                        ->where('group_users.groupId', $groupId)
                        ->where('group_users.status', '1')
                        ->select('users.firstName', 'users.lastName', 'users.email', 'roles.roleName')
                        ->get();
    }

}

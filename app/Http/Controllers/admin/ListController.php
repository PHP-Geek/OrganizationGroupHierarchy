<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Lists;
use Auth;
use DB;
use Illuminate\Http\Request;
use Validator;
use App\ProjectSession;

class ListController extends Controller
{
    public function __construct()
    {

    }

    /**
     * show all lists and make select for the session
     */
    public function sessionList(ProjectSession $session)
    {
        if(count($session) > 0 && $session->companyId != Auth::user()->companyId){
            return redirect(url('/admin/session/list'));
        }
        $data['sessionArray'] = $session;
        $data['listArray'] = Lists::leftJoin('list_users', 'list_users.listId', '=', 'lists.id')
            ->where([
                ['listStatus', '=', '1'],
                ['companyId', '=', Auth::user()->companyId],
            ])
            ->select('lists.*', DB::raw('COUNT(list_users.id) AS noOfUsers'))->groupBy('lists.id')->paginate(10);
        return view('admin.lists.sessionList')->with($data);
    }

    /**
     * create the new list
     * @param request
     * @return type
     */
    public function participants(Lists $list,ProjectSession $session)
    {
        $data['listArray'] = $list;
        $data['sessionArray'] = $session;
        return view('admin/lists.participants')->with($data);
    }

    /**
     * save the list details
     * @param $request
     */
    public function save(Request $request)
    {
        if ($request->method() == 'POST') {
            $rules['listName'] = 'required';
            $validator = Validator::make($request->all(), $rules);
            if (!$validator->fails()) {
                if($request->listId != null && $request->listId > 0){
                    $listObj = Lists::find($request->listId);
                }else{
                    if(Lists::where('listName',$request->listName)->where('companyId',Auth::user()->companyId)->count() > 0){
                        return response()->json(['code' => '0', 'message' => 'List name already exist']);
                    }
                    $listObj = new Lists();
                $listObj->listCreatedBy = Auth::user()->id;
                $listObj->companyId = Auth::user()->companyId;
                $listObj->listStatus = '1';
                }
                $listObj->listName = $request->listName;
                $listObj->listSlug = str_slug($request->listName);
                $listObj->save();
                if ($listObj->id > 0) {
                    return response()->json(['code' => '1', 'message' => 'Success']);
                }
            } else {
                return response()->json(['code' => '0', 'message' => $validator->errors()->first()]);
            }
        }
        return response()->json(['code' => '0', 'message' => 'Something went wrong']);
    }

}
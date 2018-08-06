<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;
use Auth;
use App\User;
use App\Group;
use App\Http\Controllers\CommonController;
use Validator;
use App\Activity;
use Hash;

class UserManagementController extends Controller {

    protected $activityObj;

    function __construct() {
	$this->activityObj = new Activity();
    }

    function demoGraphics() {
	return view('admin/userManagement/demoGraphics');
    }

    /**
     * get the user datatable
     * @param Request $request
     */
    function userDatatable(Request $request) {
	$userObj = new User();
	$data = $userObj->getCompanyUsers(Auth::user()->companyId, $request);
	return response()->json(["draw" => intval($request->draw), "recordsTotal" => $data[0], "recordsFiltered" => $data[0], "data" => $data[1]]);
    }

    /**
     * list of all the users
     * @return type
     */
    function userListing() {
	
	$data['userRoleArray'] = Role::where([['roleStatus', '=', '1'], ['roleHierarchy', '>', Auth::user()->userRole[0]->roleHierarchy]])->get();
	return view('admin/userManagement/userListing')->with($data);
    }

    /**
     * view the specified user
     * @param User $id
     */
    function viewUser(User $id) {
	$data['user'] = $id;
	if ($id->userRole[0]->roleHierarchy > Auth::user()->userRole[0]->roleHierarchy && $id->companyId == Auth::user()->companyId) {
	    return view('admin/userManagement/viewUser')->with($data);
	}
	return redirect('/admin/users');
    }

    /**
     * add user screen
     * @return type
     */
    function addUser(Request $request, User $id) {
	if (count($id->userRole) > 0 && ($id->userRole[0]->roleHierarchy <= Auth::user()->userRole[0]->roleHierarchy || $id->companyId != Auth::user()->companyId)) {
	    return $request->method() == 'POST' ? response()->json(['code' => '0', 'Something went wrong']) : redirect('/admin/users');
	}
	$data['userDetailArray'] = $id;
	$userId = 0;
	if (isset($id->id)) {
	    $userId = $id->id;
	}
	if ($id->id > 0) {
	    $userObj = new User();
	    $userObj = $userObj->getUserData($userId);
	    $data['userDetailArray'] = $userObj;
	} else {
	    $userObj = new User();
	}
	if ($request->method() == 'POST') {
	    if ($userId > 0) {
		$rules = [
		    'email' => 'required|unique:users,email,' . $userId,
		    'userName' => 'required|unique:users,userName' . $userId
		];
	    } else {
		$rules['password'] = 'required';
		$rules['confirmPassword'] = 'required|same:password';
	    }
	    $rules['firstName'] = 'required';
	    $rules['userName'] = 'required';
	    $rules['email'] = 'required';
	    $rules['lastName'] = 'required';
	    $rules['phone'] = 'required';

	    $validator = Validator::make($request->all(), $rules);
	    if (!$validator->fails()) {
		if ($userId == 0) {
		    $userId = $userObj->addUser($request);
		    //insert into profile table
		    $profileDetailObj = new \App\Profile();
		    $profileDetailObj->extraProperty1 = $request->input('extraProperty1');
		    $profileDetailObj->extraProperty2 = $request->input('extraProperty2');
		    $profileDetailObj->userId = $userId;
		    $profileDetailObj->save();
		    //insert the user roles
		    $userRole = new \App\UserRole();
		    $userRole->roleId = $request->roleId;
		    $userRole->userId = $userId;
		    $userRole->save();

		    return response()->json(['code' => '1', 'message' => 'User added successfully!!!']);
		} else {
		    $editUserArray = ['firstName' => $request->firstName,
			'userName' => $request->userName,
			'email' => $request->email,
			'lastName' => $request->lastName,
			'phone' => $request->phone,
		    ];
		    //update user data
		    $userObj->updateUserData($userId, $editUserArray);
		    \App\UserRole::where('userId', $userId)->update(['roleId' => $request->roleId]);

		    $editProfileArray = [
			'extraProperty1' => $request->extraProperty1,
			'extraProperty2' => $request->extraProperty2,
		    ];

		    \App\Profile::where('userId', $userId)->update($editProfileArray);

		    return response()->json(['code' => '1', 'message' => 'User updated successfully!!!']);
		}
	    } else {
		return response()->json(['code' => '-1', 'message' => 'Something went wrong', 'data_array' => $validator->errors()->all()]);
	    }
	    return response()->json(['code' => '0', 'message' => 'Error creating superadmin!!!']);
	}
	$data['userRoleArray'] = Role::where([['roleStatus', '=', '1'], ['roleHierarchy', '>', Auth::user()->userRole[0]->roleHierarchy]])->get();
	return view('admin/userManagement/add')->with($data);
    }

    /**
     * Add Group
     * @param Request $request
     * @param Group $id
     * @return type
     */
    function addGroup(Request $request, Group $group) {
	$data = [];
	if (count($group) > 0) {
	    $data['groupDetail'] = $group;
	}
	if ($request->method() == 'POST') {
	    $rules = [
		'groupName' => 'required',
		'groupDescription' => 'required',
	    ];
	    $validator = Validator::make($request->all(), $rules);
	    if (!$validator->fails()) {
		if (count($group) > 0) {
		    $addGroupObj = $group;
		} else {
		    $addGroupObj = new \App\Group();
		}
		$addGroupObj->groupName = $request->groupName;
		$addGroupObj->groupSlug = str_slug($request->groupName);
		$addGroupObj->groupDescription = $request->groupDescription;
		$addGroupObj->groupParentId = $request->groupParentId;
                $addGroupObj->groupManagerId = $request->groupManagerId;
		$addGroupObj->groupCreatedBy = Auth::user()->id;
		$addGroupObj->groupLastUpdatedBy = Auth::user()->id;
		$addGroupObj->companyId = Auth::user()->companyId;
		$addGroupObj->groupUpdatedOn = date('Y-m-d h:i:s');
		$addGroupObj->save();
		if ($addGroupObj->id > 0) {
		    \App\GroupUser::where('groupId', $addGroupObj->id)->delete();
		    if (isset($request->userId) && count($request->userId) > 0) {
			foreach ($request->userId as $userId) {
			    $addGroupUserObj = new \App\GroupUser();
			    $addGroupUserObj->groupId = $addGroupObj->id;
			    $addGroupUserObj->userId = $userId;
			    $addGroupUserObj->save();
			}
		    }
		    return response()->json(['code' => '1', 'message' => 'Success']);
		}
	    } else {
		return response()->json(['code' => '0', 'message' => $validator->errors()->all()]);
	    }
	    return response()->json(['code' => '0', 'message' => 'Something went wrong']);
	}
	if (count($group) > 0 && $group->id > 0) {
	    $groupObj = new Group();
	    $data['groupName'] = Group::whereNotIn('id', $groupObj->getChildsById($group->id))->get();
	} else {
	    $data['groupName'] = Group::where('groupStatus', '1')->get();
	}
	return view('admin/userManagement/addGroup')->with($data);
    }

    /**
     * group listing
     * @return type
     */
    function groups() {
	return view('admin/userManagement/viewGroup');
    }

    /**
     * get the user datatable
     * @param Request $request
     */
    function groupDatatable(Request $request) {
	$groupObj = new Group();
	$data = $groupObj->getGroupDatatable($request);
	return response()->json(["draw" => intval($request->draw), "recordsTotal" => $data[0], "recordsFiltered" => $data[0], "data" => $data[1]]);
    }

    /**
     * show the group hierarchy
     * @param Group $group
     */
    function groupHierarchy(Group $group) {
	$data['groupDetails'] = $group;
	return view('admin/userManagement/groupHierarchy')->with($data);
    }

    /**
     * get the group users
     * @param Group $group
     * @return type
     */
    function getGroupUser(Group $group) {
	$data = [];
	$groupUserObj = new \App\GroupUser();
	$groupUsers = $groupUserObj->getGroupUsersByGroupId($group->id);
	if (count($groupUsers) > 0) {
	    $data = $groupUsers;
	}
	return response()->json($data);
    }

    function addRole() {

	return view('admin/userManagement/addRole');
    }

    function assignPermission() {

	return view('admin/userManagement/assignPermission');
    }

    /**
     * Import csv ,xcls files
     * @param Request $request
     * @return type
     */
    function import(Request $request) {

	if ($request->method() == 'POST') {
	    $file = $request->file('csvfile');
	    if ($file != null) {
		$destination_path = public_path('/uploads/users');
		if (!is_dir($destination_path)) {
		    mkdir($destination_path, 0777, TRUE);
		}
		if (in_array($file->getClientOriginalExtension(), ['csv', 'xls'])) {
		    $fileName = $file->getClientOriginalName() . '_' . time() . '.' . $file->getClientOriginalExtension();
		    $file->move($destination_path, $fileName); //upload file to the upload directory
		    if (is_file($destination_path . '/' . $fileName)) {
			$uploadReport = $this->uploadUsers($destination_path . '/' . $fileName);

			if ($uploadReport == '1') {
			    unlink($destination_path . '/' . $fileName);
			    \Session::put('success', ' Users Uploaded Successfully!!!');
			    return redirect(url('/admin/user/import'));
			} else {
			    \Session::put('error', $uploadReport);
			}
		    } else {
			\Session::put('error', 'Error Uploading File!!!');
		    }
		} else {
		    \Session::put('error', 'Please upload csv , xls file format only!!!');
		}
	    } else {
		\Session::put('error', 'Please upload csv file!!!');
	    }
	}
	return view('admin/userManagement/import');
    }

    /**
     * Upload csv product file
     * @param type $file
     * @return string
     */
    function uploadUsers($file = '') {
	if ($file != '') {
	    $handle = fopen($file, 'r');
	    $UserData = [];
	    $column = fgetcsv($handle);
	    while (!feof($handle)) {
		$UserData[] = fgetcsv($handle);
	    }
	    $time_now = date('Y-m-d H:i:s');
	    //To check any empty field
	    foreach ($UserData as $key1 => $users) {
		if ($users != false) {
		    if ($users[0] == '' || $users[1] == '' || $users[2] == '' || $users[3] == '' || $users[4] == '' || $users[5] == '' || $users[6] == '' || $users[7] == '' || $users[8] == '') {
			return 'Please enter all required data at row' . " " . ($key1 + 1);
		    }
		    //	 validate Email

		    $email = User::where('email', $users[2])->first();
		    if (count($email) > 0) {

			return 'Email already exist at row' . " " . ($key1 + 1);
		    }
		    //Validate unique username
		    $username = User::where('userName', $users[4])->first();
		    if (count($username) > 0) {
			return 'Username already exist at row' . " " . ($key1 + 1);
		    }
		}
	    }
	    foreach ($UserData as $key1 => $users) {
		if ($users[0] != '' && $users[1] != '' && $users[2] != '' && $users[3] != '' && $users[4] != '' && $users[5] != '' && $users[6] != '' && $users[7] != '' && $users[8] != '') {
		    $user = new User();
		    //check roles 
		    $roleArray = \App\Role::select('roles.id')->where('roleName', $users[5])->first();


		    //insert User data
		    $user->companyId = Auth::user()->companyId;
		    $user->firstName = $users[0];
		    $user->lastName = $users[1];
		    $user->email = $users[2];
		    $user->phone = $users[3];
		    $user->userName = $users[4];
		    $user->password = Hash::make(md5($users[6]));
		    $user->userStatus = '1';
		    $user->activated = '1';
		    $user->created_at = $time_now;
		    $user->forceChangePassword = '1';
		    $user->save();
//		      insert profile data
		    $profileDetailObj = new \App\Profile();
		    $profileDetailObj->userId = $user->id;
		    $profileDetailObj->extraProperty1 = $users[7];
		    $profileDetailObj->extraProperty2 = $users[8];
		    $profileDetailObj->save();
		    //insert user role

		    $userRoleObj = new \App\UserRole;
		    $userRoleObj->roleId = $roleArray->id;
		    $userRoleObj->userId = $user->id;
		    ;
		    $userRoleObj->created_at = $time_now;
		    $userRoleObj->save();
		}
	    }
	    return '1';
	}
	return '0';
    }

}

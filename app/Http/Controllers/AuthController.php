<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\User;
use App\Company;
use App\UserRole;
use App\LOB;
use Mail;
use Hash;

class AuthController extends Controller {

    public function __construct() {
	
    }

    /**
     * signup screen
     * @return type
     */
    function signup(Request $request) {

	$data['lobs'] = LOB::get();
	if ($request->method() == 'POST') {
	    //validation for the controls
	    $rules = [
		'userName' => 'required|unique:users',
		'firstName' => 'required',
		'lastName' => 'required',
		'password' => 'required',
		'confirmPassword' => 'required',
		'companyName' => 'required',
		'phone' => 'required',
		'email' => 'required|unique:users',
		'tnc' => 'required'
	    ];
	    $messages = [
		'userName.unique' => 'Username already exist',
		'email.unique' => 'Email already exist'
	    ];
	    $validator = Validator::make($request->all(), $rules);
	    if (!$validator->fails()) {
		$tempUserObj = new \App\TempUser();
		$tempUserObj->userName = $request->userName;
		$tempUserObj->firstName = $request->firstName;
		$tempUserObj->lastName = $request->lastName;
		$tempUserObj->password = $request->password;
		$tempUserObj->email = $request->email;
		$tempUserObj->tnc = $request->tnc;
		$tempUserObj->phone = $request->phone;
		$tempUserObj->companyName = $request->companyName;
		$tempUserObj->companyLOB = $request->companyLOB;
		$tempUserObj->save();
		if ($tempUserObj->id > 0) {
		    \Session::put('StoredUserId', $tempUserObj->id);
		    return response()->json(['code' => '1', 'message' => 'Successful']);
		}
	    } else {
		return response()->json(['code' => '0', 'message' => $validator->errors()->all()]);
	    }
	    return response()->json(['code' => '0', 'message' => 'Something went wrong']);
	}
	return view('auth/signup')->with($data);
    }

    /**
     * save the user details
     * @param type $userId
     */
    private function saveUser($tempUserId) {
	if ($tempUserId > 0) {
	    $userObj = new User();
	    $tempUserDetails = \App\TempUser::find($tempUserId);
	    //check for unique email
	    if (count($userObj->getUserByUserName($tempUserDetails->userName)) > 0) {
		return 'Username already exists';
	    }
	    //check for unique email
	    if (count($userObj->getUserByUserName($tempUserDetails->email)) > 0) {
		return 'Email already exists';
	    }
	    $companyObj = new Company();
	    $companyId = $companyObj->addCompany($tempUserDetails);
	    $userId = $userObj->addUserAdmin($tempUserDetails, $companyId);
	    //insert into profile table
	    $profileDetail = new \App\Profile();
	    $profileDetail->userId = $userId;
	    $profileDetail->save();
	    //insert the user roles
	    $userRole = new \App\UserRole();
	    $userRole->roleId = '3';
	    $userRole->userId = $userId;
	    $userRole->save();
	    return $userId;
	}
	return 0;
    }

    /**
     * select package screen and check for the user
     * @param Request $request
     */
    function selectPackage(Request $request) {
	if (\Session::has('StoredUserId')) {
	    $tempUserId = \Session::get('StoredUserId'); //get the session value as user ID
	    $data['userDetailArray'] = \App\TempUser::find($tempUserId);
	    if (count($data['userDetailArray']) > 0) {
		$packageObj = new \App\Package(); //package class object
		$data['packageDetailsArrray'] = $packageObj->getAllPackages(); // get all packages
		return view('auth/selectPackage')->with($data);
	    }
	}
	return redirect('signup');
    }

    /**
     * save the package for user
     * @param Request $request
     * @return type
     */
    function savePackage(Request $request) {
	if ($request->method() == 'POST') {
	    if (\Session::has('StoredUserId')) { //check for session
		$rules = ['packageId' => 'required'];
		$validator = Validator::make($request->all(), $rules);
		if (!$validator->fails()) {
		    $userPackageObj = new \App\UserPackage();
		    //save the package details
		    $tempUserId = \Session::get('StoredUserId');
		    $userId = $this->saveUser($tempUserId);
		    if ($userId > 0) {
			if ($userPackageObj->add([
				    'userId' => $userId,
				    'packageId' => $request->packageId,
				    'userPackageStatus' => 0,
				    'created_at' => date('Y-m-d H:i:s'),
				    'updated_at' => date('Y-m-d H:i:s')
				]) > 0) {
			    \App\TempUser::where('id', $tempUserId)->delete();
//                            $userObj = new User();
//                            $userObj->updateUserData($userId, ['isPackageSelected' => '1']);
			    \Session::forget('StoredUserId');
			    return response()->json(['code' => '1', 'message' => 'Successful']);
			}
		    } else {
			return response()->json(['code' => '0', 'message' => $userId]);
		    }
		}
	    }
	}
	return response()->json(['code' => '0', 'message' => 'Something Went Wrong']);
    }

    /**
     * 
     * @param Request $request
     * @return type
     * @author Birendra Singh <birendra.singh@erginous.com>
     */
    function login(Request $request) {
	if (Auth::check()) {
	    return redirect('/home');
	}
	if ($request->method() == 'POST') {
	    $rules = ['login' => 'required', 'password' => 'required'];
	    $validator = Validator::make($request->all(), $rules);
	    if (!$validator->fails()) {
		$rememberToken = $request->remember == 'true' ? TRUE : FALSE;
		if (filter_var($request->input('login'), FILTER_VALIDATE_EMAIL)) {
		    $loginType = ['email' => $request->login, 'password' => $request->password, 'userStatus' => '1'];
		} else {
		    $loginType = ['userName' => $request->login, 'password' => $request->password, 'userStatus' => '1'];
		}
		//attempt for login
		if (Auth::attempt($loginType, $rememberToken)) {
		    Auth::login(Auth::user(), true);
		    //Edit login logs

		    $loginLogObj = new \App\LoginLog();
		    $loginLogObj->userId = Auth::user()->id;
		    $loginLogObj->loginInDateTime = date('Y-m-d H:i:s');
		    $loginLogObj->userAgent = \Request::header('user-agent');
		    $loginLogObj->loginIP = \Request::ip();
		    $loginLogObj->loginLogMode = 'web';
		    $loginLogObj->created_at = date('Y-m-d H:i:s');
		    $loginLogObj->save();

		    return response()->json(['code' => '1', 'message' => 'Login Successful']);
		} else {
		    return response()->json(['code' => '0', 'message' => 'You may have either entered invalid credentials OR account not activated yet.']);
		}
	    } else {
		return response()->json(['code' => '0', 'message' => $validator->errors()->all()]);
	    }
	    return response()->json(['code' => '0', 'message' => 'Something went wrong']);
	}
	return view('auth/login');
    }

    /**
     * Forgot password & sent mail by password link
     * @param Request $request
     * @return type
     */
    function forgotPassword(Request $request) {
	if ($request->method() == 'POST') {

	    $rules = ['email' => 'required'];
	    $validator = Validator::make($request->all(), $rules);
	    if (!$validator->fails()) {
		//Get user data by mail
		$userObj = \App\User::where('email', $request->email)->first();
		$hash = md5(date('Y-m-d H:i:s'));

		if (count($userObj) > 0) {
		    \App\User::where('id', $userObj->id)->update(array('hash' => $hash));
		    $emailDetailsArray = array(
			"email" => $userObj->email,
			"firstName" => $userObj->firstName,
			"lastName" => $userObj->lastName,
			"hash" => $hash,
			"id" => $userObj->id,
		    );
		    //Sent mail link to change password
		    Mail::send('email.forgotPassword', $emailDetailsArray, function ($message) use ($emailDetailsArray) {
			$message->from('info@uandi.com', 'VaDi');
			$message->subject('Forgot Password');
			$message->to($emailDetailsArray['email']);
		    });
		    return response()->json(['code' => '1', 'message' => 'Email has been sent with change password link']);
		}
		return response()->json(['code' => '0', 'message' => 'Email does not exist']);
	    }
	    return response()->json(['code' => '0', 'message' => $validator->errors()->all()]);
	}
	return view('auth/forgotPassword');
    }

    /**
     * Recover password
     * @param Request $request
     * @return type
     */
    function recover(Request $request) {

	$user = \App\User::where("id", "=", $request->get('id'))->/* Match getting user id and  security hash */
			where("hash", "=", $request->get('hash'))->first();

	if (count($user) > 0) {
	    if ($request->method() === 'POST') {
		/* password validations */
		$rules = array(
		    "newPassword" => "required",
		    "confirmPassword" => "required|same:newPassword",
		);
		$validator = Validator::make($request->all(), $rules);

		/* check validations */
		if (!$validator->fails()) {
		    $hash = md5(date('Y-m-d H:i:s'));

		    User::where("id", $user->id)->update(array(
			"password" => Hash::make(md5($request->newPassword)),
			"hash" => $hash,
			"updated_at" => date('Y-m-d H:i:s'),
		    ));
		    $passwordRecoverObj = new \App\PasswordReset();
		    $passwordRecoverObj->email = $user->email;
		    $passwordRecoverObj->token = $hash;
		    $passwordRecoverObj->created_at = date('Y-m-d H:i:s');
		    $passwordRecoverObj->save();

		    return response()->json(['code' => '1', 'message' => 'Password changed successfully']);
		} else {

		    return response()->json(['code' => '0', 'message' => 'Something went wrong']);
		}
	    }
	    return view('auth/recover');
	}
    }

}

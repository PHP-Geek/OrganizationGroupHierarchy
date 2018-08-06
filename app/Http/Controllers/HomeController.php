<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Group;
use \Session;

class HomeController extends Controller {

    function __construct() {
        $this->middleware('web');
    }

    /**
     * home screen pages and data to be shown for all users
     * @return type
     */
    function home() {
        if (Auth::check()) {

            if (Auth::check() && in_array('group-manager', array_column(Auth::user()->userRole->toArray(), 'roleSlug'))) {
                $groupObj = new Group();
                Session::put('myGroups', $groupObj->getGroupManagerGroups());
            }
            $userObj = new User();
            $data = ['activeCustomer' => $userObj->countNewCustomer()];
            return view(Auth::user()->userRole[0]->roleUrlPrefix . '/home')->with($data);
        }
        return redirect('/login');
    }

}

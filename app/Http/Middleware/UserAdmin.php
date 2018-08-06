<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class UserAdmin {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        if (!Auth::check()) {
            return $request->method() == 'POST' ? response()->json(['code' => '0', 'message' => 'Session Expired. Please refresh the page']) : redirect('/login');
        }
        $roles = Auth::user()->userRole;
        $roleArray = array_column($roles->toArray(), 'roleSlug');
        //check for system admin role
        if (!in_array('user-admin', $roleArray)) {
            return $request->method() == 'POST' ? response()->json(['code' => '0', 'message' => 'Not Authorized to access the page.']) : redirect('/home');
        }
        return $next($request);
    }

}

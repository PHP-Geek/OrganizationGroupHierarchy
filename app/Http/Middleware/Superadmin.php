<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Superadmin {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        if (!Auth::check()) {
            return redirect('/login');
        }
        $roles = Auth::user()->userRole;
        $roleArray = array_column($roles->toArray(), 'roleSlug');
        //check for system admin role
        if (!in_array('system-admin', $roleArray)) {
            return redirect('/home');
        }
        return $next($request);
    }

}

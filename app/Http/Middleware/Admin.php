<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && auth()->user()->role == 'admin') {
            return $next($request);
        }

        abort(401, 'Unauthorized');

        if (auth()->check() && auth()->user()->isAdmin()) {
            return $next($request);
        }

        // Redirect to home or show an error message
        return redirect('/')->with('error', 'Unauthorized access');
    
    }
        //if(Auth()->user()->role=='admin'){
           // return $next($request);
       // }
        //if(!Auth::guard('admin')->check()){
            //return redirect()->route('login_form')->with('error','Please login');
        //}
        //abort(401);


        //return $next($request);
    
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AlreadyLoggedIn
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
        if(Session()->has('loginId') && (url('login')==$request->url() || url('signup')==$request->url())){
            return redirect('/user/homepage');
        }
        return $next($request);
    }
}

// <?php

// namespace App\Http\Middleware;

// use Closure;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

// class AlreadyLoggedIn
// {
//     public function handle(Request $request, Closure $next)
//     {
//         if (Auth::check()) {
//             $user = Auth::user();

//             if ($user->role === 'admin') {
//                 return redirect()->route('admin.dashboard');
//             } elseif ($user->role === 'user') {
//                 return redirect()->route('user.homepage');
//             }
//         }

//         return $next($request);
//     }
// }

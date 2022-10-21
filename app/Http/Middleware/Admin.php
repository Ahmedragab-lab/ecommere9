<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
{

    public function handle(Request $request, Closure $next)
    {
        // if (auth()->check()) {
        //     if (auth()->user()->type == 'admin') {
        //         return $next($request);
        //     }else{
        //         return abort(401);
        //     }
        // }else{
        //     return redirect('login');
        // }

            if (auth()->user()->type == 'admin') {
                return $next($request);
            }else{
                session()->flush();
                return redirect('login');
            }

    }
}

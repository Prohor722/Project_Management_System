<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $role = $request->session()->get('role');

        if($role=="admin"){
            return $next($request);
        }

        $request->session()->flush();
        return redirect('/');
    }
}

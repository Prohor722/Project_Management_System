<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class GroupMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $role = $request->session()->get('role');

        if($role=="group"){
            return $next($request);
        }

        $request->session()->flush();
        return redirect('/');
    }
}

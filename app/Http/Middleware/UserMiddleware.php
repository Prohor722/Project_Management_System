<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $id = $request->session()->get('user_id');
        $token = $request->session()->get('access_token');

        if(Hash::check($id."prohor_banik", $token)){
            return $next($request);
        }

        $request->session()->flush();
        return redirect('/');
    }
}

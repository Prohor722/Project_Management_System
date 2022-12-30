<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Teacher;
use App\Models\Group;
use Illuminate\Http\Request;

class StatusChecker
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

        $id = $request->session()->get('user_id');
        $role = $request->session()->get('role');

        if($role == 'teacher'){
            $teacher = Teacher::where('t_id',$id)->first();
            if($teacher->status){
                return $next($request);
            }
        }
        else if($role == 'student'){
            $group = Group::where('group_id',$id)->first();
            if($group->group_status){
                return $next($request);
            }
        }

        return back();

    }
}

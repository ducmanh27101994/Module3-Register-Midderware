<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Support\Facades\Session;


class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $age = Carbon::parse($request->date)->age;
        if ($age<18){
            Session::flash('age-error','Chua du tuoi su dung');

            return back();
        }

        return $next($request);
    }


}

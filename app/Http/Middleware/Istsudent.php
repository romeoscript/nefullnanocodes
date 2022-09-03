<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Students;
use Illuminate\Support\Facades\Auth;

class Istsudent
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
       if (Auth::check()) {
        # code...
        $student = Students::where('email', Auth::user()->email)->first();
        if ($student != null) {
            # code...
            return $next($request);
        } else {
            # code...
            return redirect()->route('shop.home.index');
        }
       } else {
        # code...
        return redirect()->route('customer.session.index');
       }



        return $next($request);
    }
}

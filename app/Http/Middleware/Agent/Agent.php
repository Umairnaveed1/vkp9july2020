<?php

namespace App\Http\Middleware\Agent;

use Closure;
use Auth;


class Agent
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
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->is_admin == 1) {
            return redirect()->route('dashboard');
        }

        if (Auth::user()->is_admin == 0) {
            return redirect()->route('agents.home');
         }
    
        }
}

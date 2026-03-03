<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckIfBanned
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && auth()->user()->is_banned) {
            
            auth()->logout(); 
            
            return redirect('/')
                ->with('error', 'Votre compte a été banni.');
        }

        return $next($request);
    }
}

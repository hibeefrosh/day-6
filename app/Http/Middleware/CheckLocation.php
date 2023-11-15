<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckLocation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */


    public function handle($request, Closure $next, ...$allowedCountries)
    {
        $user = Auth::user();

        // Check if the user is authenticated and their country is allowed
        if ($user && in_array($user->country, $allowedCountries)) {
            return $next($request);
        }

        if (!$user) {
            return redirect('/login');
        }

        abort(403, 'Unauthorized action based on location.');
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    public function handle($request, Closure $next, ...$guards)
    {
        // Your custom authentication logic here
        if (!auth()->check()) {
            return redirect('/signin'); // Redirect to login page if not authenticated
        }

        return $next($request);
    }
}

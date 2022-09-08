<?php

namespace App\Http\Middleware;

use App\Models\User;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (User::exists()) {
            if (!$request->expectsJson()) {
                return route('login');
            }
        } else {
            if (!$request->expectsJson()) {
                return route('register');
            }
        }
    }
}

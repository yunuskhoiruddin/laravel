<?php

namespace App\Api\V1\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Http\Middleware\Authenticate as Middleware;

class RoleMiddleware extends Middleware
{
    protected $roles = [
        'admin',
        'service',
        'user',
        'member',
    ];
    protected function authenticate($request, array $guards)
    {
        if (empty($guards)) {
            $guards = [null];
        }

        foreach ($guards as $guard) {
            if ($this->auth->guard($guard)->check()) {
                return $this->auth->shouldUse($guard);
            }
        }

        $this->unauthenticated($request, $guards);
    }
    protected function redirectTo($request)
    {
        //
    }
}

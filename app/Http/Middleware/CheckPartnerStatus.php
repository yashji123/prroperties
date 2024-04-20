<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckPartnerStatus
{
    public function handle($request, Closure $next)
    {
        $isPartner = false;

        if (Auth::check() && Auth::user()->isPartner()) {
            $isPartner = true;
        }

        // Share $isPartner status with all views
        view()->share('isPartner', $isPartner);

        return $next($request);
    }
}

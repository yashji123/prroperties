<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectIfWww
{
    public function handle(Request $request, Closure $next)
    {
        if (str_contains($request->header('host'), 'www.')) {
            $newUrl = str_replace('www.', '', $request->fullUrl());
            return redirect()->to($newUrl, 301);
        }

        return $next($request);
    }
}

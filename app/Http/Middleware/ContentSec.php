<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Closure;
use Log;

class SecurityHeadersMiddleware
{
    /**
     * @throws Exception
     */
    public function handle(Request $request, Closure $next)
    {
        $nonce = base64_encode(random_bytes(22));

        $request->attributes->add(['csp_nonce' => $nonce]);

        $response = $next($request);

        if (!app()->environment('local')) {
            $response->headers->set('Content-Security-Policy', "script-src 'self' 'nonce-{$nonce}'; object-src 'none'; style-src 'self' fonts.googleapis.com");
        }

        return $response;
    }
}
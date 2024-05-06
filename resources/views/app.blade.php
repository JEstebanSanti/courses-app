<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>
        <meta property="csp-nonce" content="{{csp_nonce()}}">
        <!-- Fonts -->
        <link nonce="{{csp_nonce()}}" rel="preconnect" href="https://fonts.bunny.net">
        <link nonce="{{csp_nonce()}}"  href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"  rel="stylesheet" />

        <!-- Scripts -->
        @viteReactRefresh
        @vite(['resources/js/app.jsx', "resources/js/Pages/{$page['component']}.jsx"])
        @inertiaHead
        @routes(nonce: Vite::cspNonce())
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>

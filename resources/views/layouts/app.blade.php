<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        @vite('./resources/css/bootstrap.min.css')
        <meta name="theme-color" content="#712cf9">
        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }

            .b-example-divider {
                background-color: rgba(0, 0, 0, .1);
                border-width: 1px 0;
            }

            .b-example-vr {
                flex-shrink: 0;
                width: 1.5rem;
                height: 100vh;
            }

            .bi {
                vertical-align: -.125em;
                fill: currentColor;
            }

            .nav-scroller {
                position: relative;
                z-index: 2;
                height: 2.75rem;
                overflow-y: hidden;
            }

            .nav-scroller .nav {
                display: flex;
                flex-wrap: nowrap;
                padding-bottom: 1rem;
                margin-top: -1px;
                overflow-x: auto;
                text-align: center;
                white-space: nowrap;
                -webkit-overflow-scrolling: touch;
            }

            .message {
                width: 100%;
                border: 2px solid;
                border-radius: 10px;
                border-color: #333;
            }

            .fixed {
                left: 0;
                bottom: 0;
                width: 100%;
                height: 7em;
                text-align: center;
            }

            .div-content {
                margin-bottom: 0.5em;
            }

            .div-foot {
                height: 100%;
                background-color: #111;
            }

            .div-foot form {
                height: 100%;
            }

            .div-foot form .message {
                height: 50%;
            }

            .div-foot form button {
                margin-bottom: 1em;
            }

            .log {
                justify-content: center;
            }

        </style>

        <!-- Scripts -->
        @vite(['./resources/css/app.css', './resources/js/app.js'])
        @vite('./resources/css/cover.css')
    </head>

    <body class="d-flex h-100 text-center text-bg-dark">
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
            <main class="px-3">

            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        @include('layouts.navigation')
                    @else
                        @include('partials.navbar')
                    @endauth
                </div>
            @endif
            

            @yield('content')
            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            @include('partials.footer')
            </main>
        </div>
    </body>
</html>

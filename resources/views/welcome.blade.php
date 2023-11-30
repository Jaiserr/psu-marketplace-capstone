<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'PSU Marketplace') }}</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="{{ url('favicon.png') }}" rel="icon">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div>
            <header>
                <div class="top-0 right-0 left-0 z-[50]">
                    <div class=" flex justify-between items-center max-w-7xl mx-auto px-4  sm:px-6 md:justify-start md:space-x-10 lg:px-8">
                        <div class="flex justify-start items-center gap-2 lg:w-0 lg:flex-1">
                            <img src="{{ asset('logo.png') }}" alt="Logo" class="h-10" />
                        </div>
                        <div class="flex items-center justify-end md:flex-1 lg:w-0">
                            @if (Route::has('login'))
                            <div class=" py-6 text-right z-10">
                                @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="ml-8 whitespace-nowrap inline-flex items-center justify-center bg-gradient-to-r from-purple-600 to-indigo-600 bg-origin-border px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white hover:from-purple-700 hover:to-indigo-700">
                                Dashboard </a>
                                @else
                                <a href="{{ route('login') }}"
                                    class=" whitespace-nowrap inline-flex items-center justify-center bg-yellow-500 bg-origin-border px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white hover:from-yellow-700 hover:to-yellow-700">
                                Sign in </a>
                                @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="ml-4 whitespace-nowrap inline-flex items-center justify-center bg-blue-500 bg-origin-border px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white hover:from-purple-700 hover:to-indigo-700">
                                Sign up </a>
                                @endif
                                @endauth
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </header>
            <main>
                <!-- Hero section -->
                <div class="relative">
                    <div class="absolute inset-x-0 bottom-0 h-1/2"></div>
                    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                        <div class="relative shadow-xl sm:rounded-2xl sm:overflow-hidden">
                            <div class="absolute inset-0">
                                <img class="h-full w-full object-cover" src="{{ asset('psumarketplacebanner.png') }}"
                                    alt="pangasinan state university">
                                <div
                                    class="absolute inset-0 bg-gradient-to-r from-purple-600 to-indigo-600 mix-blend-multiply">
                                </div>
                            </div>
                            <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
                                <h1 class="text-center text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
                                    <span class="block text-white">Pangasinan State University Marketplace</span>
                                </h1>
                                <p class="mt-6 max-w-lg mx-auto text-center text-xl text-indigo-200 sm:max-w-3xl">"Elevate
                                    your university experience with our specialized marketplace platform. From textbooks to
                                    tech essentials, find everything you need for success in one convenient place. Simplify
                                    campus life and shop smart at our PSU Marketplace.".
                                </p>
                                <div class="mt-10 max-w-sm mx-auto sm:max-w-none sm:flex sm:justify-center">
                                    <a href="{{route('login')}}"
                                        class="flex items-center justify-center px-4 py-3 border border-transparent font-medium rounded-md shadow-sm text-indigo-700 bg-white hover:bg-indigo-700 hover:text-white sm:px-8">
                                    Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer>
                <div class="max-w-7xl mx-auto pb-8 px-4 overflow-hidden sm:px-6 lg:px-8">
                    <div class="mt-8 flex justify-center space-x-6">
                        <a href="https://www.facebook.com/profile.php?id=61553673545550&mibextid=vk8aRt" class="text-indigo-700 hover:text-indigo-700">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                    <p class="mt-8 text-center text-base text-indigo-700">&copy; 2023 Pangasinan State University Marketplace.
                    </p>
                </div>
            </footer>
        </div>
    </body>
</html>
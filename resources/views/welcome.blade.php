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
            {{-- <nav class="bg-transparent px-4 py-2.5 dark:bg-gray-800 dark:border-gray-700 fixed left-0 right-0 top-0 z-50">
                <div class="flex flex-wrap justify-between items-center">
                    <div class="flex justify-start items-center">
                        <a href="{{ url('/') }}" class="flex items-center justify-between mr-4">
                        <img
                            src="{{ asset('logo.png')}}"
                            class="mr-3 h-10"
                            alt="Flowbite Logo"
                            />
                        </a>
                    </div>
                    <div class="flex items-center lg:order-2">
                        @if (Route::has('login'))
                            <div class=" py-6 text-right z-10">
                                @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="ml-8 whitespace-nowrap inline-flex items-center justify-center bg-gradient-to-r from-purple-600 to-indigo-600 bg-origin-border px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white hover:from-purple-700 hover:to-indigo-700">
                                Dashboard </a>
                                @else
                                <a href="{{ route('login') }}"
                                    class=" whitespace-nowrap inline-flex items-center font-extrabold justify-centerbg-origin-border px-4 py-2 border border-transparent rounded-md text-lg text-dark">
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
            </nav> --}}
            <header>
                <nav class="bg-gradient-to-r from-blue-100 via-violet-200 to-purple-200 px-4 lg:px-6 py-2.5">
                    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                        <a href="{{ url('/') }}" class="flex items-center">
                            <img src="{{ asset('logo.png') }}" class="mr-2 h-6 sm:h-9" alt="Flowbite Logo" />
                            <span class="self-center text-xl font-semibold whitespace-nowrap text-gray-900">PSU Marketplace</span>
                        </a>
                        <div class="flex items-center lg:order-2">
                            @if (Route::has('login'))
                            <div class=" py-6 text-right z-10">
                                @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="ml-8 whitespace-nowrap inline-flex items-center justify-center bg-gradient-to-r from-purple-600 to-indigo-600 bg-origin-border px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white hover:from-purple-700 hover:to-indigo-700">
                                Marketplace</a>
                                @else
                                <a href="{{ route('login') }}" class="text-gray-800 dark:text-white font-extrabold rounded-lg text-lg px-1 py-2.5">Log in</a>
                                @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Sign Up</a>
                                @endif
                                @endauth
                            </div>
                            @endif
                            {{-- <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                                <span class="sr-only">Open main menu</span>
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button> --}}
                        </div>
                        {{-- <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                            <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                                <li>
                                    <a href="#" class="block py-2 pr-4 pl-3 text-white rounded bg-blue-700 lg:bg-transparent lg:text-blue-700 lg:p-0 dark:text-white" aria-current="page">Home</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Company</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Marketplace</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Features</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Team</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </nav>
            </header>
            {{-- <div class="flex items-center justify-start min-h-screen pr-60">
                <img src="{{ asset('hero.png')}}" alt="" class=""> <!-- Adjust the height as needed -->
            </div> 
            <div class="flex items-center justify-end min-h-screen pr-60">
                <img src="{{ asset('hero.png')}}" alt="" class=""> <!-- Adjust the height as needed -->
            </div>  --}}
            <section class="bg-gradient-to-r from-blue-100 via-violet-200 to-purple-200  dark:bg-gray-900 pt-28 min-h-screen">
                <div class="grid max-w-screen-xl px-4 mx-auto lg:gap-8 xl:gap-0 lg:grid-cols-12">
                    <div class="mr-auto place-self-center lg:col-span-7">
                        <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-white">PSU Marketplace</h1>
                        <p class="max-w-2xl mb-6 font-light text-gray-900 lg:mb-8 md:text-lg lg:text-xl">"Elevate
                            your university experience with our specialized marketplace platform. From textbooks to
                            tech essentials, find everything you need for success in one convenient place. Simplify
                            campus life and shop smart at our PSU Marketplace.".</p>
                        <a href="{{ route('login') }}" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                            Get started
                            <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                    <div class="lg:mt-0 lg:col-span-5 lg:flex order-first lg:order-last">
                        <img src="{{ asset('hero.png')}}" class="animate-bounce" alt="mockup">
                    </div>                
                </div>
            </section> 
    </body>
</html>

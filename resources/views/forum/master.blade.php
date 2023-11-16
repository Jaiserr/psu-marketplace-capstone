<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @if (isset($thread_title))
            {{ $thread_title }} —
        @endif
        @if (isset($category))
            {{ $category->title }} —
        @endif
        {{ trans('forum::general.home_title') }}
    </title>

    <!-- Tailwind CSS (https://tailwindcss.com/docs/installation/play-cdn) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Feather icons (https://github.com/feathericons/feather) -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

    <script src="//unpkg.com/alpinejs" defer></script>

    <!-- Vue (https://github.com/vuejs/vue) -->
    @if (config('app.debug'))
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    @else
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    @endif

    <!-- Axios (https://github.com/axios/axios) -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <!-- Pickr (https://github.com/Simonwep/pickr) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/classic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.min.js"></script>

    <!-- Sortable (https://github.com/SortableJS/Sortable) -->
    <script src="//cdn.jsdelivr.net/npm/sortablejs@1.10.1/Sortable.min.js"></script>
    <!-- Vue.Draggable (https://github.com/SortableJS/Vue.Draggable) -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/Vue.Draggable/2.23.2/vuedraggable.umd.min.js"></script>
</head>
<body class="bg-gray-100">
    {{-- <nav class="v-navbar bg-white shadow py-4">
        <div class="container mx-auto px-4 md:flex md:items-center md:gap-4">
            <div class="flex justify-between items-center">
                <a class="text-lg" href="{{ url(config('forum.web.router.prefix')) }}">Laravel Forum</a>
                <button class="navbar-toggler block md:hidden border rounded-md px-2 py-1" type="button" :class="{ collapsed: isCollapsed }" @click="isCollapsed = ! isCollapsed">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="navbar-toggler-icon w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div class="grow justify-between navbar-collapse" :class="{ 'flex flex-col': !isCollapsed, 'hidden md:flex': isCollapsed }">
                <ul class="flex flex-col md:flex-row gap-3 mb-4 md:mb-0">
                    <li>
                        <a class="text-gray-500" href="{{ url(config('forum.web.router.prefix')) }}">{{ trans('forum::general.index') }}</a>
                    </li>
                    <li>
                        <a class="text-gray-500" href="{{ route('forum.recent') }}">{{ trans('forum::threads.recent') }}</a>
                    </li>
                    @auth
                        <li>
                            <a class="text-gray-500" href="{{ route('forum.unread') }}">{{ trans('forum::threads.unread_updated') }}</a>
                        </li>
                    @endauth
                    @can ('moveCategories')
                        <li>
                            <a class="text-gray-500" href="{{ route('forum.category.manage') }}">{{ trans('forum::general.manage') }}</a>
                        </li>
                    @endcan
                </ul>
                <ul class="navbar-nav flex gap-4 flex-col md:flex-row">
                    @if (Auth::check())
                        <li class="nav-item dropdown relative">
                            <a class="dropdown-toggle text-gray-500 flex items-center gap-1" href="#" id="navbarDropdownMenuLink" @click="isUserDropdownCollapsed = ! isUserDropdownCollapsed">
                                {{ $username }}

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </a>
                            <div class="border absolute left-0 bg-white rounded-md w-44 divide-y" :class="{ hidden: isUserDropdownCollapsed }" aria-labelledby="navbarDropdownMenuLink">
                                <a class="block px-4 py-2" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Log out
                                </a>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/login') }}">Log in</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/register') }}">Register</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav> --}}
    <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="{{ url(config('forum.web.router.prefix')) }}">
                            <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                        </a>
                    </div>
    
                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link :href="url(config('forum.web.router.prefix'))" :active="request()->routeIs('forum.web.router.prefix')">
                            {{ trans('forum::general.index') }}
                        </x-nav-link>
                        <x-nav-link :href="route('forum.recent')" :active="request()->routeIs('forum.recent')">
                            {{ trans('forum::threads.recent') }}
                        </x-nav-link>
                        @auth
                        <x-nav-link :href="route('forum.unread')" :active="request()->routeIs('forum.unread')">
                            {{ trans('forum::threads.unread_updated') }}
                        </x-nav-link>
                        @endauth
                        @can ('moveCategories') 
                        <x-nav-link :href="route('forum.category.manage')" :active="request()->routeIs('forum.category.manage')">
                            {{ trans('forum::general.manage') }}
                        </x-nav-link>
                        @endcan
                    </div>
                </div>
    
                <!-- Settings Dropdown -->
                {{-- <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <div class="flex items-center gap-1">
                                <button type="button"
                                    class="bg-white rounded-full flex text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8 rounded-full"
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOcpeNCQ_ugTxUhfbrpc7qXfVMHOcXr-S2aagGtAU&s"
                                        alt="">
                                </button>
                                <button
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    <div>{{ Auth::user()->name }}</div>
    
                                    <div class="ms-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </div>
    
                        </x-slot>
    
                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>
    
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
    
                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div> --}}
                <div class="flex items-center justify-end md:flex-1 lg:w-0">
                    @if (Route::has('login'))
                    <div class=" p-6 text-right z-10">
                        @auth
                        <a href="{{ url('/dashboard') }}"
                            class="ml-8 whitespace-nowrap inline-flex items-center justify-center bg-gradient-to-r from-purple-600 to-indigo-600 bg-origin-border px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white hover:from-purple-700 hover:to-indigo-700">
                            Marketplace</a>
                        @else
                        <a href="{{ route('login') }}"
                            class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
                            Sign in </a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-8 whitespace-nowrap inline-flex items-center justify-center bg-gradient-to-r from-purple-600 to-indigo-600 bg-origin-border px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white hover:from-purple-700 hover:to-indigo-700">
                            Sign up </a>
                        @endif
                        @endauth
                    </div>
                    @endif
                </div>
    
                <!-- Hamburger -->
                <div class="-me-2 flex items-center sm:hidden">
                    <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    
        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="url(config('forum.web.router.prefix'))" :active="request()->routeIs('forum.web.router.prefix')">
                    {{ trans('forum::general.index') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('forum.recent')" :active="request()->routeIs('forum.recent')">
                    {{ trans('forum::threads.recent') }}
                </x-responsive-nav-link>
                @auth
                <x-responsive-nav-link :href="route('forum.unread')" :active="request()->routeIs('forum.unread')">
                    {{ trans('forum::threads.unread_updated') }}
                </x-responsive-nav-link>
                @endauth
                @can ('moveCategories')
                <x-responsive-nav-link :href="route('forum.category.manage')" :active="request()->routeIs('forum.category.manage')">
                    {{ trans('forum::general.manage') }}
                </x-responsive-nav-link>
                @endcan
            </div>
    
            <!-- Responsive Settings Options -->
            {{-- <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
    
                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>
    
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
    
                        <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div> --}}
        </div>
    </nav>

    <div id="main" class="container mx-auto p-4">
        {{-- @include('forum.partials.breadcrumbs') --}}
        @include('forum.partials.alerts')

        @yield('content')
    </div>

    <script>
    new Vue({
        el: '.v-navbar',
        name: 'Navbar',
        data: {
            isCollapsed: true,
            isUserDropdownCollapsed: true
        },
        methods: {
            onWindowClick (event) {
                const ignore = ['navbar-toggler', 'navbar-toggler-icon', 'dropdown-toggle'];
                if (ignore.some(className => event.target.classList.contains(className))) return;
                if (! this.isCollapsed) this.isCollapsed = true;
                if (! this.isUserDropdownCollapsed) this.isUserDropdownCollapsed = true;
            }
        },
        created: function () {
            window.addEventListener('click', this.onWindowClick);
        }
    });

    // const mask = document.querySelector('.mask');

    function findModal (key)
    {
        const modal = document.querySelector(`[data-modal=${key}]`);

        if (! modal) throw `Attempted to open modal '${key}' but no such modal found.`;

        return modal;
    }

    function openModal (modal)
    {
        setTimeout(function()
        {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }, 200);
    }

    document.querySelectorAll('[data-open-modal]').forEach(item =>
    {
        item.addEventListener('click', event =>
        {
            event.preventDefault();

            openModal(findModal(event.currentTarget.dataset.openModal));
        });
    });

    document.querySelectorAll('[data-close-modal]').forEach(modalClose =>
    {
        modalClose.addEventListener('click', event =>
        {
            event.preventDefault

            setTimeout(function()
            {
                modalClose.closest('[data-modal]').classList.remove('flex');
                modalClose.closest('[data-modal]').classList.add('hidden');
            }, 200);
        });
    });

    document.querySelectorAll('[data-dismiss]').forEach(item =>
    {
        item.addEventListener('click', event => event.currentTarget.parentElement.style.display = 'none');
    });

    document.addEventListener('DOMContentLoaded', event =>
    {
        const hash = window.location.hash.substr(1);
        if (hash.startsWith('modal='))
        {
            openModal(findModal(hash.replace('modal=','')));
        }

        feather.replace();

        const input = document.querySelector('input[name=color]');

        if (! input) return;

        const pickr = Pickr.create({
            el: '.pickr',
            theme: 'classic',
            default: input.value || null,

            swatches: [
                '{{ config('forum.web.default_category_color') }}',
                '#f44336',
                '#e91e63',
                '#9c27b0',
                '#673ab7',
                '#3f51b5',
                '#2196f3',
                '#03a9f4',
                '#00bcd4',
                '#009688',
                '#4caf50',
                '#8bc34a',
                '#cddc39',
                '#ffeb3b',
                '#ffc107'
            ],

            components: {
                preview: true,
                hue: true,
                interaction: {
                    input: true,
                    save: true
                }
            },

            strings: {
                save: 'Apply'
            }
        });

        pickr
            .on('save', instance => pickr.hide())
            .on('clear', instance =>
            {
                input.value = '';
                input.dispatchEvent(new Event('change'));
            })
            .on('cancel', instance =>
            {
                const selectedColor = instance
                    .getSelectedColor()
                    .toHEXA()
                    .toString();

                input.value = selectedColor;
                input.dispatchEvent(new Event('change'));
            })
            .on('change', (color, instance) =>
            {
                const selectedColor = color
                    .toHEXA()
                    .toString();

                input.value = selectedColor;
                input.dispatchEvent(new Event('change'));
            });
    });
    </script>
    @yield('footer')
</body>
</html>

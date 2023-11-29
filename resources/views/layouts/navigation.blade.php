<nav x-data="{ open: false }" class="bg-indigo-700 border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    @role('seller')
                    <x-nav-link :href="route('category-products')" :active="request()->routeIs('category-products')">
                        {{ __('Products') }}
                    </x-nav-link>
                    <x-nav-link :href="route('contact-us')" :active="request()->routeIs('contact-us')">
                        {{ __('Contact Us') }}
                    </x-nav-link>
                    <x-nav-link :href="route('about-us')" :active="request()->routeIs('about-us')">
                        {{ __('About Us') }}
                    </x-nav-link>
                    @endrole
                    @role('customer')
                    <x-nav-link :href="route('category-products')" :active="request()->routeIs('category-products')">
                        {{ __('Products') }}
                    </x-nav-link>
                    <x-nav-link :href="route('contact-us')" :active="request()->routeIs('contact-us')">
                        {{ __('Contact Us') }}
                    </x-nav-link>
                    <x-nav-link :href="route('about-us')" :active="request()->routeIs('about-us')">
                        {{ __('About Us') }}
                    </x-nav-link>
                    @endrole
                    @role('seller')
                    @auth
                    @if (auth()->user()->approved !== null && auth()->user()->approved !== "")
                    <x-nav-link :href="route('admin-products.index')" :active="request()->routeIs('admin-products.*')">
                        {{ __('Listing') }}
                    </x-nav-link>
                    @endif
                    @endauth
                    @endrole
                    @role('superadministrator')
                    <x-nav-link :href="route('sellers')" :active="request()->routeIs('sellers')">
                        {{ __('Sellers') }}
                    </x-nav-link>
                    <x-nav-link :href="route('customers')" :active="request()->routeIs('customers')">
                        {{ __('Customers') }}
                    </x-nav-link>
                    <x-nav-link :href="route('products')" :active="request()->routeIs('products')">
                        {{ __('Products') }}
                    </x-nav-link>
                    <x-nav-link :href="route('student-list')" :active="request()->routeIs('student-list')">
                        {{ __('Student List') }}
                    </x-nav-link>
                    @endrole
                </div>
            </div>

            @role('customer')
            <div class="flex-1 flex items-center justify-center my-7 px-2 sm-justify-center">
                <form action="{{ route('product.search') }}" method="GET">
                    @csrf
                    <label for="default-search"
                        class="mb-2 text-sm font-medium sr-only text-white">Search</label>
                    <div class="relative">
                            <button type="submit" class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="stroke-indigo-700 w-4 h-4 text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </button>
                        <input id="search" name="query"
                            class="block w-full text-indigo-700 p-4 ps-10 text-sm rounded-full bg-white placeholder-indigo-700"
                            placeholder="Search Items..." required>
                    </div>
                </form>
            </div>
            @endrole
            @role('seller')
            <div class="flex-1 flex items-center justify-center my-7 px-2 sm-justify-center">
                <form action="{{ route('product.search') }}" method="GET">
                    @csrf
                    <label for="default-search"
                        class="mb-2 text-sm font-medium sr-only text-white">Search</label>
                    <div class="relative">
                            <button type="submit" class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="stroke-indigo-700 w-4 h-4 text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </button>
                        <input id="search" name="query"
                            class="block w-full text-indigo-700 p-4 ps-10 text-sm rounded-full bg-white placeholder-indigo-700"
                            placeholder="Search Items..." required>
                    </div>
                </form>
            </div>
            @endrole
            @role('customer')
            <div class="flex-1 flex items-center justify-center px-2 lg:ml-6 lg:justify-end">
                <a class="mr-4" href="{{ route('wishlist.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         class="stroke-white w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
                </a>
                <a href="{{ route('messages') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        class="stroke-white w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                    </svg>
                </a>
            </div>
            @endrole
            @role('seller')
            <div class="flex-1 flex items-center justify-center px-2 lg:ml-6 lg:justify-end">
                <a class="mr-4" href="{{ route('wishlist.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         class="stroke-white w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
                </a>
                <a href="{{ route('messages') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        class="stroke-white w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                    </svg>
                </a>
            </div>
            @endrole

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <div class="flex items-center gap-1">
                            <button type="button"
                                class="bg-indigo-700 rounded-full flex text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                @if ( Auth::user()->image)
                                <img src="{{ asset('storage/' .  Auth::user()->image) }}" alt="Profile Image"
                                    class="h-8 w-8 rounded-full">
                                @else
                                <img class="h-8 w-8 rounded-full"
                                    src="{{ Auth::user()->image ? asset('storage/' . Auth::user()->image) : asset('profile-empty.png') }}"
                                    alt="">
                                @endif

                            </button>
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-indigo-700 hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>
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
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
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
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            @role('customer')
            <x-responsive-nav-link :href="route('category-products')" :active="request()->routeIs('category-products')">
                {{ __('Products') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('contact-us')" :active="request()->routeIs('contact-us')">
                {{ __('Contact Us') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('about-us')" :active="request()->routeIs('about-us')">
                {{ __('About Us') }}
            </x-responsive-nav-link>
            @endrole
            @role('seller')
            <x-responsive-nav-link :href="route('category-products')" :active="request()->routeIs('category-products')">
                {{ __('Products') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('contact-us')" :active="request()->routeIs('contact-us')">
                {{ __('Contact Us') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('about-us')" :active="request()->routeIs('about-us')">
                {{ __('About Us') }}
            </x-responsive-nav-link>
            @auth
            @if (auth()->user()->approved !== null && auth()->user()->approved !== "")
            <x-responsive-nav-link :href="route('admin-products.index')"
                :active="request()->routeIs('admin-products.*')">
                {{ __('Listing') }}
            </x-responsive-nav-link>
            @endif
            @endauth
            @endrole
            @role('superadministrator')
            <x-responsive-nav-link :href="route('sellers')" :active="request()->routeIs('sellers')">
                {{ __('Sellers') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('customers')" :active="request()->routeIs('customers')">
                {{ __('Customers') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('products')" :active="request()->routeIs('products')">
                {{ __('Products') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('student-list')" :active="request()->routeIs('student-list')">
                {{ __('Student List') }}
            </x-responsive-nav-link>
            @endrole
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-white">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-white">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')" class="text-white">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" class="text-white">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();" class="text-white">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
<nav x-data="{ open: false }" class="bg-indigo-700">
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
                    @role('seller')
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Home') }}
                    </x-nav-link>
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
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Home') }}
                    </x-nav-link>
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
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('sellers')" :active="request()->routeIs('sellers')">
                        {{ __('Sellers') }}
                    </x-nav-link>
                    <x-nav-link :href="route('customers')" :active="request()->routeIs('customers')">
                        {{ __('Customers') }}
                    </x-nav-link>
                    <x-nav-link :href="route('products')" :active="request()->routeIs('products')">
                        {{ __('Products') }}
                    </x-nav-link>
                    <x-nav-link :href="route('students.index')" :active="request()->routeIs('students.*')">
                        {{ __('Student List') }}
                    </x-nav-link>
                    <x-nav-link href="{{ url('forum') }}">
                        {{ __('Forum') }}
                    </x-nav-link>
                    @endrole
                </div>
            </div>

            @role('customer')
            <div class="flex-1 flex items-center justify-center my-7 px-2 sm-justify-center">
                <form action="{{ route('product.search') }}" method="GET">
                    @csrf
                    <label for="default-search" class="mb-2 text-sm font-medium sr-only text-white">Search</label>
                    <div class="relative">
                        <button type="submit"
                            class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
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
                    <label for="default-search" class="mb-2 text-sm font-medium sr-only text-white">Search</label>
                    <div class="relative">
                        <button type="submit"
                            class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
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
                {{-- <a class="mr-4" href="{{ route('wishlist.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        class="stroke-white w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
                </a> --}}
                <a href="{{ route('wishlist.index') }}" class="relative inline-flex items-center p-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 20">
                        <path d="M13 20a1 1 0 0 1-.64-.231L7 15.3l-5.36 4.469A1 1 0 0 1 0 19V2a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v17a1 1 0 0 1-1 1Z"/>
                      </svg>
                    <span class="sr-only">Notifications</span>
                    @if(auth()->check())
                    <div class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-yellow-500 rounded-full -top-2 -end-2">{{ auth()->user()->wishlists->count() }}</div>
                    @endif
                </a>
                {{-- <a href="{{ route('messages') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        class="stroke-white w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                    </svg>
                </a> --}}
                {{-- <a href="{{ route('messages') }}" class="relative inline-flex items-center p-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 18" fill="currentColor">
                        <path d="M18 4H16V9C16 10.0609 15.5786 11.0783 14.8284 11.8284C14.0783 12.5786 13.0609 13 12 13H9L6.846 14.615C7.17993 14.8628 7.58418 14.9977 8 15H11.667L15.4 17.8C15.5731 17.9298 15.7836 18 16 18C16.2652 18 16.5196 17.8946 16.7071 17.7071C16.8946 17.5196 17 17.2652 17 17V15H18C18.5304 15 19.0391 14.7893 19.4142 14.4142C19.7893 14.0391 20 13.5304 20 13V6C20 5.46957 19.7893 4.96086 19.4142 4.58579C19.0391 4.21071 18.5304 4 18 4Z" fill="currentColor"/>
                        <path d="M12 0H2C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2V9C0 9.53043 0.210714 10.0391 0.585786 10.4142C0.960859 10.7893 1.46957 11 2 11H3V13C3 13.1857 3.05171 13.3678 3.14935 13.5257C3.24698 13.6837 3.38668 13.8114 3.55279 13.8944C3.71889 13.9775 3.90484 14.0126 4.08981 13.996C4.27477 13.9793 4.45143 13.9114 4.6 13.8L8.333 11H12C12.5304 11 13.0391 10.7893 13.4142 10.4142C13.7893 10.0391 14 9.53043 14 9V2C14 1.46957 13.7893 0.960859 13.4142 0.585786C13.0391 0.210714 12.5304 0 12 0Z" fill="currentColor"/>
                        </svg>
                    <span class="sr-only">Notifications</span>
                    <div class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -end-2 dark:border-gray-900">20</div>
                </a> --}}
                <div class="flex items-center ml-4">
                    <x-dropdown align="right" width="80">
                        <x-slot name="trigger">
                            <div class="flex items-center gap-1">
                                <button type="button" class="relative inline-flex items-center p-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M15.133 10.632v-1.8a5.407 5.407 0 0 0-4.154-5.262.955.955 0 0 0 .021-.106V1.1a1 1 0 0 0-2 0v2.364a.944.944 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C4.867 13.018 3 13.614 3 14.807 3 15.4 3 16 3.538 16h12.924C17 16 17 15.4 17 14.807c0-1.193-1.867-1.789-1.867-4.175Zm-13.267-.8a1 1 0 0 1-1-1 9.424 9.424 0 0 1 2.517-6.39A1.001 1.001 0 1 1 4.854 3.8a7.431 7.431 0 0 0-1.988 5.037 1 1 0 0 1-1 .995Zm16.268 0a1 1 0 0 1-1-1A7.431 7.431 0 0 0 15.146 3.8a1 1 0 0 1 1.471-1.354 9.425 9.425 0 0 1 2.517 6.391 1 1 0 0 1-1 .995ZM6.823 17a3.453 3.453 0 0 0 6.354 0H6.823Z"/>
                                      </svg>
                                    <span class="sr-only">Notifications</span>
                                    @if ($notifications->count() > 0)
                                    <div class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-yellow-500 rounded-full -top-2 -end-2">{{ $notifications->count() }}</div>
                                    @endif
                                </button>
                            </div>

                        </x-slot>

                        <x-slot name="content">
                            @if ($notifications)
                            @foreach($notifications as $notification_approval)
                            <div class="alert alert-info px-4 py-2 text-center">
                                <span class="text-sm text-dark">
                                    {{ $notification_approval->message ?? null }}
                                </span>
                                <hr>
                            </div>
                            @endforeach
                            @endif

                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            @endrole
            @role('superadministrator')
            <div class="flex-1 flex items-center justify-center px-2 lg:ml-6 lg:justify-end">
                <x-dropdown align="right" width="80">
                    <x-slot name="trigger">
                        <div class="flex items-center gap-1">
                            <button type="button" class="relative inline-flex items-center p-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M15.133 10.632v-1.8a5.407 5.407 0 0 0-4.154-5.262.955.955 0 0 0 .021-.106V1.1a1 1 0 0 0-2 0v2.364a.944.944 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C4.867 13.018 3 13.614 3 14.807 3 15.4 3 16 3.538 16h12.924C17 16 17 15.4 17 14.807c0-1.193-1.867-1.789-1.867-4.175Zm-13.267-.8a1 1 0 0 1-1-1 9.424 9.424 0 0 1 2.517-6.39A1.001 1.001 0 1 1 4.854 3.8a7.431 7.431 0 0 0-1.988 5.037 1 1 0 0 1-1 .995Zm16.268 0a1 1 0 0 1-1-1A7.431 7.431 0 0 0 15.146 3.8a1 1 0 0 1 1.471-1.354 9.425 9.425 0 0 1 2.517 6.391 1 1 0 0 1-1 .995ZM6.823 17a3.453 3.453 0 0 0 6.354 0H6.823Z"/>
                                  </svg>
                                <span class="sr-only">Notifications</span>
                                @php
                        $totalNotifications = $notifications->count() + $newProductNotifications->count();
                    @endphp
                    @if ($totalNotifications > 0)
                        <div class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-yellow-500 rounded-full -top-2 -end-2">{{ $totalNotifications }}</div>
                    @endif
                            </button>
                        </div>

                    </x-slot>

                    <x-slot name="content">
                        @foreach(auth()->user()->unreadNotifications as $notification)
                        <div class="alert alert-info px-4 py-2">
                            <span class="text-sm">{{ $notification->data['message'] }} {{
                                $notification->created_at->diffForHumans()
                                }}</span>
                        </div>
                        @endforeach



                        @if ($newProductNotifications)
                        @foreach ($newProductNotifications as $newProductNotification)

                        <div class="alert alert-info px-4 py-2">
                            <span class="text-sm">
                                {{ $newProductNotification->seller_name }} {{ $newProductNotification->message }}
                            </span>
                        </div>
                        @endforeach
                        @endif
                    </x-slot>
                </x-dropdown>
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
            <x-responsive-nav-link href="{{ url('forum') }}">
                {{ __('Forum') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('students.index')" :active="request()->routeIs('students.*')">
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


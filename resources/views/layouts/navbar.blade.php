@role('seller')
<nav class="bg-indigo-50 shadow-lg px-4 py-2.5 dark:bg-gray-800 dark:border-gray-700 fixed left-0 right-0 top-0 z-50">
    <div class="flex flex-wrap justify-between items-center">
        <div class="flex justify-start items-center">
            <button
                data-drawer-target="drawer-navigation"
                data-drawer-toggle="drawer-navigation"
                aria-controls="drawer-navigation"
                class="p-2 mr-2 text-indigo-600 rounded-lg cursor-pointer md:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                >
                <svg
                    aria-hidden="true"
                    class="w-6 h-6"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                    <path
                        fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"
                        ></path>
                </svg>
                <svg
                    aria-hidden="true"
                    class="hidden w-6 h-6 text-indigo-600"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                    <path
                        fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"
                        ></path>
                </svg>
                <span class="sr-only">Toggle sidebar</span>
            </button>
            <a href="{{ url('/') }}" class="flex items-center justify-between mr-4">
            <img
                src="{{ asset('logo.png')}}"
                class="mr-3 h-8"
                alt="Flowbite Logo"
                />
                {{-- @role('superadministrator')
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Admin Dashboard</span>
                @endrole --}}
            </a>
            @role('seller')
            <form action="{{ route('product.search') }}" method="GET" class="hidden md:block md:pl-2">
                @csrf
                <label for="topbar-search" class="sr-only">Search</label>
                <div class="relative md:w-96">
                    <div
                        class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none"
                        >
                        <svg
                            class="w-5 h-5 text-indigo-600"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                            >
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                ></path>
                        </svg>
                    </div>
                    <input
                        type="text"
                        name="query"
                        id="search"
                        class="bg-gray-50 shadow-lg shadow-indigo-500/50 border border-indigo-600 text-gray-900 text-sm rounded-full focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Search"
                        />
                </div>
            </form>
            @endrole
        </div>
        <div class="flex items-center lg:order-2">
            @role('seller')
            <button
                type="button"
                data-drawer-toggle="drawer-navigation"
                aria-controls="drawer-navigation"
                class="p-2 mr-1 text-gray-500 rounded-lg md:hidden hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                >
                <span class="sr-only">Toggle search</span>
                <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path clip-rule="evenodd" fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"></path>
                </svg>
            </button>
            @endrole
            {{-- @role('customer')
            <button
                type="button"
                data-drawer-toggle="drawer-navigation"
                aria-controls="drawer-navigation"
                class="p-2 mr-1 text-gray-500 rounded-lg md:hidden hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                >
                <span class="sr-only">Toggle search</span>
                <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path clip-rule="evenodd" fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"></path>
                </svg>
            </button>
            @endrole --}}
            <!-- Notifications -->
            @role('seller')
            <button
                type="button"
                data-dropdown-toggle="notification-dropdown"
                class="relative p-2 mr-1 text-gray-500 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                >
                <span class="sr-only">View notifications</span>
                <!-- Bell icon -->
                <svg
                    aria-hidden="true"
                    class="w-6 h-6 text-indigo-600"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                    <path
                        d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"
                        ></path>
                </svg>
                @if ($notifications->count() > 0)
                <span class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-white bg-blue-500 rounded-full">
                    {{ $notifications->count() }}
                </span>
                @endif
            </button>
            <div
                class="hidden overflow-hidden shadow-lg rounded-lg z-50 my-4 max-w-sm text-base list-none bg-white divide-y divide-gray-100 dark:divide-gray-600 dark:bg-gray-700"
                id="notification-dropdown"
                >
                <div
                    class="block py-2 px-4 text-base font-medium text-center text-white bg-indigo-600 dark:bg-gray-600 dark:text-gray-300"
                    >
                    Notifications
                </div>
                <div class="max-h-80 overflow-y-auto">
                    @if ($notifications)
                    @foreach($notifications as $notification_approval)
                    <div
                        class="flex py-3 bg-indigo-50 px-4 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600"
                        >
                        <div class="flex-shrink-0">
                            
                            <svg class="w-6 h-6 text-indigo-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                              </svg>
                            
                        </div>
                        <div class="pl-3 w-full">
                            <div
                                class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400"
                                >
                                
                                <span class="font-semibold text-gray-900 dark:text-white"
                                    >{{ $notification_approval->message }} </span>
                            </div>
                        </div>     
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
            <a
                href="{{ route('wishlist.index') }}"
                type="button"
                class="relative p-2 mr-1 text-gray-500 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                >
                <span class="sr-only">View Save Items</span>
                <!-- Save icon -->
                <svg class="w-6 h-6 text-indigo-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 20">
                    <path d="M13 20a1 1 0 0 1-.64-.231L7 15.3l-5.36 4.469A1 1 0 0 1 0 19V2a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v17a1 1 0 0 1-1 1Z"/>
                </svg>
                @if(auth()->check())
                <span class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-white bg-blue-500 rounded-full">
                    {{ auth()->user()->wishlists->count() }}
                </span>
                @endif
            </a>
            @endrole
            {{-- @role('customer')
            <a
                href="{{ route('wishlist.index') }}"
                type="button"
                class="p-2 mr-1 text-gray-500 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                >
                <span class="sr-only">View Save Items</span>
                <!-- Save icon -->
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 20">
                    <path d="M13 20a1 1 0 0 1-.64-.231L7 15.3l-5.36 4.469A1 1 0 0 1 0 19V2a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v17a1 1 0 0 1-1 1Z"/>
                </svg>
            </a>
            @endrole --}}
            <!-- Dropdown menu -->
            {{-- @role('superadministrator')
            <button
                type="button"
                data-dropdown-toggle="notification-dropdown"
                class="relative p-2 mr-1 text-gray-500 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                >
                <span class="sr-only">View notifications</span>
                <!-- Bell icon -->
                <svg
                    aria-hidden="true"
                    class="w-6 h-6"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                    <path
                        d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"
                        ></path>
                </svg>
                @php
                $totalNotifications = $notifications->count() + $newProductNotifications->count();
                @endphp
                @if ($totalNotifications > 0)
                <span class="absolute top-0 right-0 inline-flex items-center justify-center px-1 py-1 text-xs font-bold leading-none text-white bg-yellow-500 rounded-full">
                    {{ $totalNotifications }}
                </span>
                @endif
            </button>
            <div
                class="hidden overflow-hidden rounded-lg z-50 my-4 max-w-sm text-base list-none bg-white divide-y divide-gray-100 shadow-lg dark:divide-gray-600 dark:bg-gray-700"
                id="notification-dropdown"
                >
                <div
                    class="block py-2 px-4 text-base font-medium text-center text-gray-700 bg-gray-50 dark:bg-gray-600 dark:text-gray-300"
                    >
                    Notifications
                </div>
                <div class="max-h-80 overflow-y-auto">
                    @foreach(auth()->user()->unreadNotifications as $notification)
                    <div
                        class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600"
                        >
                        <div class="flex-shrink-0">
                            
                            <svg class="w-6 h-6 text-blue-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 18">
                                <path d="M7 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm2 1H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                              </svg>
                            
                        </div>
                        <div class="pl-3 w-full">
                            <div
                                class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400"
                                >
                                
                                <span class="font-semibold text-gray-900 dark:text-white"
                                    >{{ $notification->data['message'] }} </span>
                            </div>
                            <div
                                class="text-xs font-medium text-primary-600 dark:text-primary-500"
                                >
                                {{
                                    $notification->created_at->diffForHumans()
                                    }}
                            </div>
                        </div>
                        
                    </div>@endforeach
                    @if ($newProductNotifications)
                    @foreach ($newProductNotifications as $newProductNotification)
                    <div
                        class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600"
                        >
                        <div class="flex-shrink-0">
                            <svg class="w-6 h-6 text-yellow-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                              </svg>
                        </div>
                        <div class="pl-3 w-full">
                            <div
                                class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400"
                                >
                                <span class="font-semibold text-gray-900 dark:text-white"
                                    >{{ $newProductNotification->seller_name }}</span
                                    >
                                <span class="font-medium text-gray-900 dark:text-white"
                                    >{{ $newProductNotification->message }}</span
                                    >
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
            @endrole --}}
            {{-- <!-- Apps -->
            <button
                type="button"
                data-dropdown-toggle="apps-dropdown"
                class="p-2 text-gray-500 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                >
                <span class="sr-only">View notifications</span>
                <!-- Icon -->
                <svg
                    class="w-6 h-6"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                    <path
                        d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"
                        ></path>
                </svg>
            </button>
            <!-- Dropdown menu -->
            <div
                class="hidden overflow-hidden z-50 my-4 max-w-sm text-base list-none bg-white rounded divide-y divide-gray-100 shadow-lg dark:bg-gray-700 dark:divide-gray-600"
                id="apps-dropdown"
                >
                <div
                    class="block py-2 px-4 text-base font-medium text-center text-gray-700 bg-gray-50 dark:bg-gray-600 dark:text-gray-300"
                    >
                    Apps
                </div>
                <div class="grid grid-cols-3 gap-4 p-4">
                    <a
                        href="#"
                        class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group"
                        >
                        <svg
                            aria-hidden="true"
                            class="mx-auto mb-1 w-7 h-7 text-gray-400 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                            >
                            <path
                                fill-rule="evenodd"
                                d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                clip-rule="evenodd"
                                ></path>
                        </svg>
                        <div class="text-sm text-gray-900 dark:text-white">Sales</div>
                    </a>
                    <a
                        href="#"
                        class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group"
                        >
                        <svg
                            aria-hidden="true"
                            class="mx-auto mb-1 w-7 h-7 text-gray-400 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                            >
                            <path
                                d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
                                ></path>
                        </svg>
                        <div class="text-sm text-gray-900 dark:text-white">Users</div>
                    </a>
                    <a
                        href="#"
                        class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group"
                        >
                        <svg
                            aria-hidden="true"
                            class="mx-auto mb-1 w-7 h-7 text-gray-400 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                            >
                            <path
                                fill-rule="evenodd"
                                d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z"
                                clip-rule="evenodd"
                                ></path>
                        </svg>
                        <div class="text-sm text-gray-900 dark:text-white">Inbox</div>
                    </a>
                    <a
                        href="#"
                        class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group"
                        >
                        <svg
                            aria-hidden="true"
                            class="mx-auto mb-1 w-7 h-7 text-gray-400 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                            >
                            <path
                                fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                clip-rule="evenodd"
                                ></path>
                        </svg>
                        <div class="text-sm text-gray-900 dark:text-white">
                            Profile
                        </div>
                    </a>
                    <a
                        href="#"
                        class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group"
                        >
                        <svg
                            aria-hidden="true"
                            class="mx-auto mb-1 w-7 h-7 text-gray-400 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                            >
                            <path
                                fill-rule="evenodd"
                                d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                clip-rule="evenodd"
                                ></path>
                        </svg>
                        <div class="text-sm text-gray-900 dark:text-white">
                            Settings
                        </div>
                    </a>
                    <a
                        href="#"
                        class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group"
                        >
                        <svg
                            aria-hidden="true"
                            class="mx-auto mb-1 w-7 h-7 text-gray-400 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                            >
                            <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z"></path>
                            <path
                                fill-rule="evenodd"
                                d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z"
                                clip-rule="evenodd"
                                ></path>
                        </svg>
                        <div class="text-sm text-gray-900 dark:text-white">
                            Products
                        </div>
                    </a>
                    <a
                        href="#"
                        class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group"
                        >
                        <svg
                            aria-hidden="true"
                            class="mx-auto mb-1 w-7 h-7 text-gray-400 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                            >
                            <path
                                d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"
                                ></path>
                            <path
                                fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
                                clip-rule="evenodd"
                                ></path>
                        </svg>
                        <div class="text-sm text-gray-900 dark:text-white">
                            Pricing
                        </div>
                    </a>
                    <a
                        href="#"
                        class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group"
                        >
                        <svg
                            aria-hidden="true"
                            class="mx-auto mb-1 w-7 h-7 text-gray-400 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                            >
                            <path
                                fill-rule="evenodd"
                                d="M5 2a2 2 0 00-2 2v14l3.5-2 3.5 2 3.5-2 3.5 2V4a2 2 0 00-2-2H5zm2.5 3a1.5 1.5 0 100 3 1.5 1.5 0 000-3zm6.207.293a1 1 0 00-1.414 0l-6 6a1 1 0 101.414 1.414l6-6a1 1 0 000-1.414zM12.5 10a1.5 1.5 0 100 3 1.5 1.5 0 000-3z"
                                clip-rule="evenodd"
                                ></path>
                        </svg>
                        <div class="text-sm text-gray-900 dark:text-white">
                            Billing
                        </div>
                    </a>
                    <a
                        href="#"
                        class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group"
                        >
                        <svg
                            aria-hidden="true"
                            class="mx-auto mb-1 w-7 h-7 text-gray-400 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                            >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"
                                ></path>
                        </svg>
                        <div class="text-sm text-gray-900 dark:text-white">
                            Logout
                        </div>
                    </a>
                </div>
            </div> --}}
            <button
                type="button"
                class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                id="user-menu-button"
                aria-expanded="false"
                data-dropdown-toggle="dropdown"
                >
                <span class="sr-only">Open user menu</span>
                @if ( Auth::user()->image)
                <img src="{{ asset('storage/' .  Auth::user()->image) }}" alt="user photoe"
                    class="h-8 w-8 rounded-full">
                @else
                <img class="h-8 w-8 rounded-full"
                    src="{{ Auth::user()->image ? asset('storage/' . Auth::user()->image) : asset('profile-empty.png') }}"
                    alt="user photo">
                @endif
            </button>
            <!-- Dropdown menu -->
            <div
                class="hidden z-50 my-4 w-56 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600"
                id="dropdown"
                >
                <div class="py-3 px-4">
                    <span
                        class="block text-sm font-semibold text-gray-900 dark:text-white"
                        >{{ Auth::user()->name }}</span
                        >
                    <span
                        class="block text-sm text-gray-900 truncate dark:text-white"
                        >{{ Auth::user()->email }}</span
                        >
                </div>
                <ul
                    class="py-1 text-gray-700 dark:text-gray-300"
                    aria-labelledby="dropdown"
                    >
                    <li>
                        <a
                            href="{{ route('profile.edit')}}"
                            class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white"
                            >Account settings</a
                            >
                    </li>
                </ul>
                <ul
                    class="py-1 text-gray-700 dark:text-gray-300"
                    aria-labelledby="dropdown"
                    >
                    {{-- 
                    <li>
                        <a
                            href="#"
                            class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                            >Sign out</a
                            >
                    </li>
                    --}}
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <li class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" :href="route('logout')" onclick="event.preventDefault();
                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </li>
                    </form>
                </ul>
            </div>
        </div>
    </div>
</nav>
@endrole
@role('customer')
<nav class="bg-indigo-50 shadow-lg px-4 py-2.5 dark:bg-gray-800 dark:border-gray-700 fixed left-0 right-0 top-0 z-50">
    <div class="flex flex-wrap justify-between items-center">
        <div class="flex justify-start items-center">
            <button
                data-drawer-target="drawer-navigation"
                data-drawer-toggle="drawer-navigation"
                aria-controls="drawer-navigation"
                class="p-2 mr-2 text-indigo-600 rounded-lg cursor-pointer md:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                >
                <svg
                    aria-hidden="true"
                    class="w-6 h-6"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                    <path
                        fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"
                        ></path>
                </svg>
                <svg
                    aria-hidden="true"
                    class="hidden w-6 h-6"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                    <path
                        fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"
                        ></path>
                </svg>
                <span class="sr-only">Toggle sidebar</span>
            </button>
            <a href="{{ url('/') }}" class="flex items-center justify-between mr-4">
            <img
                src="{{ asset('logo.png')}}"
                class="mr-3 h-8"
                alt="Flowbite Logo"
                />
                {{-- @role('superadministrator')
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Admin Dashboard</span>
                @endrole --}}
            </a>
            <form action="{{ route('product.search') }}" method="GET" class="hidden md:block md:pl-2">
                @csrf
                <label for="topbar-search" class="sr-only">Search</label>
                <div class="relative md:w-96">
                    <div
                        class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none"
                        >
                        <svg
                            class="w-5 h-5 text-indigo-600"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                            >
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                ></path>
                        </svg>
                    </div>
                    <input
                        type="text"
                        name="query"
                        id="search"
                        class="bg-gray-50 shadow-lg shadow-indigo-500/50 border border-indigo-600 text-gray-900 text-sm rounded-full focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Search"
                        />
                </div>
            </form>
        </div>
        <div class="flex items-center lg:order-2">
            <button
                type="button"
                data-drawer-toggle="drawer-navigation"
                aria-controls="drawer-navigation"
                class="p-2 mr-1 text-gray-500 rounded-lg md:hidden hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                >
                <span class="sr-only">Toggle search</span>
                <svg aria-hidden="true" class="w-6 h-6 text-indigo-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path clip-rule="evenodd" fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"></path>
                </svg>
            </button>

            {{-- @role('customer')
            <button
                type="button"
                data-drawer-toggle="drawer-navigation"
                aria-controls="drawer-navigation"
                class="p-2 mr-1 text-gray-500 rounded-lg md:hidden hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                >
                <span class="sr-only">Toggle search</span>
                <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path clip-rule="evenodd" fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"></path>
                </svg>
            </button>
            @endrole --}}
            <!-- Notifications -->
            <a
                href="{{ route('wishlist.index') }}"
                type="button"
                class="relative p-2 mr-1 text-gray-500 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                >
                <span class="sr-only">View Save Items</span>
                <!-- Save icon -->
                <svg class="w-6 h-6 text-indigo-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 20">
                    <path d="M13 20a1 1 0 0 1-.64-.231L7 15.3l-5.36 4.469A1 1 0 0 1 0 19V2a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v17a1 1 0 0 1-1 1Z"/>
                </svg>
                @if(auth()->check())
                <span class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-white bg-blue-500 rounded-full">
                    {{ auth()->user()->wishlists->count() }}
                </span>
                @endif
            </a>
            <button
                type="button"
                class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                id="user-menu-button"
                aria-expanded="false"
                data-dropdown-toggle="dropdown"
                >
                <span class="sr-only">Open user menu</span>
                @if ( Auth::user()->image)
                <img src="{{ asset('storage/' .  Auth::user()->image) }}" alt="user photoe"
                    class="h-8 w-8 rounded-full">
                @else
                <img class="h-8 w-8 rounded-full"
                    src="{{ Auth::user()->image ? asset('storage/' . Auth::user()->image) : asset('profile-empty.png') }}"
                    alt="user photo">
                @endif
            </button>
            <!-- Dropdown menu -->
            <div
                class="hidden z-50 my-4 w-56 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600"
                id="dropdown"
                >
                <div class="py-3 px-4">
                    <span
                        class="block text-sm font-semibold text-gray-900 dark:text-white"
                        >{{ Auth::user()->name }}</span
                        >
                    <span
                        class="block text-sm text-gray-900 truncate dark:text-white"
                        >{{ Auth::user()->email }}</span
                        >
                </div>
                <ul
                    class="py-1 text-gray-700 dark:text-gray-300"
                    aria-labelledby="dropdown"
                    >
                    <li>
                        <a
                            href="{{ route('profile.edit')}}"
                            class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white"
                            >Account settings</a
                            >
                    </li>
                </ul>
                <ul
                    class="py-1 text-gray-700 dark:text-gray-300"
                    aria-labelledby="dropdown"
                    >
                    {{-- 
                    <li>
                        <a
                            href="#"
                            class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                            >Sign out</a
                            >
                    </li>
                    --}}
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <li class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" :href="route('logout')" onclick="event.preventDefault();
                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </li>
                    </form>
                </ul>
            </div>
        </div>
    </div>
</nav>
@endrole

@role('superadministrator')
<nav class="bg-gray-800 shadow-lg px-4 py-2.5 dark:bg-gray-800 dark:border-gray-700 fixed left-0 right-0 top-0 z-50">
    <div class="flex flex-wrap justify-between items-center">
        <div class="flex justify-start items-center">
            <button
                data-drawer-target="drawer-navigation"
                data-drawer-toggle="drawer-navigation"
                aria-controls="drawer-navigation"
                class="p-2 mr-2 text-gray-600 rounded-lg cursor-pointer md:hidden hover:text-gray-900 hover:bg-gray-500 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                >
                <svg
                    aria-hidden="true"
                    class="w-6 h-6 text-white"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                    <path
                        fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"
                        ></path>
                </svg>
                <svg
                    aria-hidden="true"
                    class="hidden w-6 h-6"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                    <path
                        fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"
                        ></path>
                </svg>
                <span class="sr-only">Toggle sidebar</span>
            </button>
            <a href="{{ url('/') }}" class="flex items-center justify-between mr-4">
            <img
                src="{{ asset('logo.png')}}"
                class="mr-3 h-8"
                alt="Flowbite Logo"
                />
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Admin Dashboard</span>
            </a>
        </div>
        <div class="flex items-center lg:order-2">
            <!-- Dropdown menu -->
            <button
                type="button"
                data-dropdown-toggle="notification-dropdown"
                class="relative p-2 mr-1 text-gray-500 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                >
                <span class="sr-only">View notifications</span>
                <!-- Bell icon -->
                <svg
                    aria-hidden="true"
                    class="w-6 h-6 text-white"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                    <path
                        d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"
                        ></path>
                </svg>
                @php
                $totalNotifications = $notifications->count() + $newProductNotifications->count();
                @endphp
                @if ($totalNotifications > 0)
                <span class="absolute top-0 right-0 inline-flex items-center justify-center px-1 py-1 text-xs font-bold leading-none text-white bg-yellow-500 rounded-full">
                    {{ $totalNotifications }}
                </span>
                @endif
            </button>
            <div
                class="hidden overflow-hidden rounded-lg z-50 my-4 max-w-sm text-base list-none bg-white divide-y divide-gray-100 shadow-lg dark:divide-gray-600 dark:bg-gray-700"
                id="notification-dropdown"
                >
                <div
                    class="block py-2 px-4 text-base font-medium text-center text-gray-700 bg-gray-50 dark:bg-gray-600 dark:text-gray-300"
                    >
                    Notifications
                </div>
                <div class="max-h-80 overflow-y-auto">
                    @foreach(auth()->user()->unreadNotifications as $notification)
                    <div
                        class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600"
                        >
                        <div class="flex-shrink-0">
                            
                            <svg class="w-6 h-6 text-blue-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 18">
                                <path d="M7 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm2 1H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                              </svg>
                            
                        </div>
                        <div class="pl-3 w-full">
                            <div
                                class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400"
                                >
                                
                                <span class="font-semibold text-gray-900 dark:text-white"
                                    >{{ $notification->data['message'] }} </span>
                            </div>
                            <div
                                class="text-xs font-medium text-primary-600 dark:text-primary-500"
                                >
                                {{
                                    $notification->created_at->diffForHumans()
                                    }}
                            </div>
                        </div>
                        
                    </div>@endforeach
                    @if ($newProductNotifications)
                    @foreach ($newProductNotifications as $newProductNotification)
                    <div
                        class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600"
                        >
                        <div class="flex-shrink-0">
                            <svg class="w-6 h-6 text-yellow-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                              </svg>
                        </div>
                        <div class="pl-3 w-full">
                            <div
                                class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400"
                                >
                                <span class="font-semibold text-gray-900 dark:text-white"
                                    >{{ $newProductNotification->seller_name }}</span
                                    >
                                <span class="font-medium text-gray-900 dark:text-white"
                                    >{{ $newProductNotification->message }}</span
                                    >
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    {{-- <a
                        href="#"
                        class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600"
                        >
                        <div class="flex-shrink-0">
                            <img
                                class="w-11 h-11 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png"
                                alt="Joseph McFall avatar"
                                />
                            <div
                                class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 bg-red-600 rounded-full border border-white dark:border-gray-700"
                                >
                                <svg
                                    aria-hidden="true"
                                    class="w-3 h-3 text-white"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                    >
                                    <path
                                        fill-rule="evenodd"
                                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                        clip-rule="evenodd"
                                        ></path>
                                </svg>
                            </div>
                        </div>
                        <div class="pl-3 w-full">
                            <div
                                class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400"
                                >
                                <span class="font-semibold text-gray-900 dark:text-white"
                                    >Joseph Mcfall</span
                                    >
                                and
                                <span class="font-medium text-gray-900 dark:text-white"
                                    >141 others</span
                                    >
                                love your story. See it and view more stories.
                            </div>
                            <div
                                class="text-xs font-medium text-primary-600 dark:text-primary-500"
                                >
                                44 minutes ago
                            </div>
                        </div>
                    </a>
                    <a
                        href="#"
                        class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600"
                        >
                        <div class="flex-shrink-0">
                            <img
                                class="w-11 h-11 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png"
                                alt="Roberta Casas image"
                                />
                            <div
                                class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 bg-green-400 rounded-full border border-white dark:border-gray-700"
                                >
                                <svg
                                    aria-hidden="true"
                                    class="w-3 h-3 text-white"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                    >
                                    <path
                                        fill-rule="evenodd"
                                        d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z"
                                        clip-rule="evenodd"
                                        ></path>
                                </svg>
                            </div>
                        </div>
                        <div class="pl-3 w-full">
                            <div
                                class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400"
                                >
                                <span class="font-semibold text-gray-900 dark:text-white"
                                    >Leslie Livingston</span
                                    >
                                mentioned you in a comment:
                                <span
                                    class="font-medium text-primary-600 dark:text-primary-500"
                                    >@bonnie.green</span
                                    >
                                what do you say?
                            </div>
                            <div
                                class="text-xs font-medium text-primary-600 dark:text-primary-500"
                                >
                                1 hour ago
                            </div>
                        </div>
                    </a>
                    <a
                        href="#"
                        class="flex py-3 px-4 hover:bg-gray-100 dark:hover:bg-gray-600"
                        >
                        <div class="flex-shrink-0">
                            <img
                                class="w-11 h-11 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/robert-brown.png"
                                alt="Robert image"
                                />
                            <div
                                class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 bg-purple-500 rounded-full border border-white dark:border-gray-700"
                                >
                                <svg
                                    aria-hidden="true"
                                    class="w-3 h-3 text-white"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                    >
                                    <path
                                        d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"
                                        ></path>
                                </svg>
                            </div>
                        </div>
                        <div class="pl-3 w-full">
                            <div
                                class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400"
                                >
                                <span class="font-semibold text-gray-900 dark:text-white"
                                    >Robert Brown</span
                                    >
                                posted a new video: Glassmorphism - learn how to implement
                                the new design trend.
                            </div>
                            <div
                                class="text-xs font-medium text-primary-600 dark:text-primary-500"
                                >
                                3 hours ago
                            </div>
                        </div>
                    </a> --}}
                </div>
            </div>
            <button
                type="button"
                class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                id="user-menu-button"
                aria-expanded="false"
                data-dropdown-toggle="dropdown"
                >
                <span class="sr-only">Open user menu</span>
                @if ( Auth::user()->image)
                <img src="{{ asset('storage/' .  Auth::user()->image) }}" alt="user photoe"
                    class="h-8 w-8 rounded-full">
                @else
                <img class="h-8 w-8 rounded-full"
                    src="{{ Auth::user()->image ? asset('storage/' . Auth::user()->image) : asset('profile-empty.png') }}"
                    alt="user photo">
                @endif
            </button>
            <!-- Dropdown menu -->
            <div
                class="hidden z-50 my-4 w-56 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600"
                id="dropdown"
                >
                <div class="py-3 px-4">
                    <span
                        class="block text-sm font-semibold text-gray-900 dark:text-white"
                        >{{ Auth::user()->name }}</span
                        >
                    <span
                        class="block text-sm text-gray-900 truncate dark:text-white"
                        >{{ Auth::user()->email }}</span
                        >
                </div>
                <ul
                    class="py-1 text-gray-700 dark:text-gray-300"
                    aria-labelledby="dropdown"
                    >
                    <li>
                        <a
                            href="{{ route('profile.edit')}}"
                            class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white"
                            >Account settings</a
                            >
                    </li>
                </ul>
                <ul
                    class="py-1 text-gray-700 dark:text-gray-300"
                    aria-labelledby="dropdown"
                    >
                    {{-- 
                    <li>
                        <a
                            href="#"
                            class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                            >Sign out</a
                            >
                    </li>
                    --}}
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <li class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" :href="route('logout')" onclick="event.preventDefault();
                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </li>
                    </form>
                </ul>
            </div>
        </div>
    </div>
</nav>
@endrole
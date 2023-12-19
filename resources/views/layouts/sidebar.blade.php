@role('seller')
<aside class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition duration-700 ease-in-out -translate-x-full shadow-lg bg-white md:translate-x-0 dark:bg-gray-800"
    aria-label="Sidenav"
    id="drawer-navigation">
    <div class="overflow-y-auto py-5 px-3 h-full bg-indigo-50 dark:bg-gray-800">
        <form action="{{ route('product.search') }}" method="GET" class="md:hidden mb-2">
            <label for="sidebar-search" class="sr-only">Search</label>
            <div class="relative">
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
                    class="bg-gray-50 shadow-lg shadow-indigo-500/50 border border-indigo-600 text-gray-900 text-sm rounded-full focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Search"
                    />
            </div>
        </form>
        <ul class="space-y-2 mb-5 pb-5 border-b border-gray-200 dark:border-gray-700">
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                <svg
                        aria-hidden="true"                       
                        class="w-6 h-6 text-blue-900"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                <span class="ml-3">{{ __('Home') }}</span>
            </x-nav-link>
            @if (auth()->user()->approved !== null && auth()->user()->approved !== "")
            <x-nav-link :href="route('admin-products.index')" :active="request()->routeIs('admin-products.*')">
                <svg class="w-5 h-5 text-blue-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M17.876.517A1 1 0 0 0 17 0H3a1 1 0 0 0-.871.508C1.63 1.393 0 5.385 0 6.75a3.236 3.236 0 0 0 1 2.336V19a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-6h4v6a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V9.044a3.242 3.242 0 0 0 1-2.294c0-1.283-1.626-5.33-2.124-6.233ZM15.5 14.7a.8.8 0 0 1-.8.8h-2.4a.8.8 0 0 1-.8-.8v-2.4a.8.8 0 0 1 .8-.8h2.4a.8.8 0 0 1 .8.8v2.4ZM16.75 8a1.252 1.252 0 0 1-1.25-1.25 1 1 0 0 0-2 0 1.25 1.25 0 0 1-2.5 0 1 1 0 0 0-2 0 1.25 1.25 0 0 1-2.5 0 1 1 0 0 0-2 0A1.252 1.252 0 0 1 3.25 8 1.266 1.266 0 0 1 2 6.75C2.306 5.1 2.841 3.501 3.591 2H16.4A19.015 19.015 0 0 1 18 6.75 1.337 1.337 0 0 1 16.75 8Z"/>
                </svg>
                <span class="ml-3">{{ __('Listing') }}</span>
            </x-nav-link>
            @endif
            <li>
                <button
                    type="button"
                    class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-indigo-400 hover:text-white dark:hover:bg-gray-700"
                    aria-controls="categories"
                    data-collapse-toggle="categories"
                    >
                    <svg class="flex-shrink-0 w-5 h-5 text-blue-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
                    </svg>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap"
                        >Categories</span
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
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                            ></path>
                    </svg>
                </button>
                <ul id="categories" class="hidden py-2 space-y-2">
                    <li>
                        <a
                            href="{{ route('products.by.category', 'School Uniforms & Supplies') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-indigo-400 hover:text-white dark:text-white dark:hover:bg-gray-700"
                            >School Supplies and Uniforms</a
                            >
                    </li>
                    <li>
                        <a
                            href="{{ route('products.by.category', 'Mobile Phones & Gadgets') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-indigo-400 hover:text-white dark:text-white dark:hover:bg-gray-700"
                            >Mobile Phones & Gadgets</a
                            >
                    </li>
                    <li>
                        <a
                            href="{{ route('products.by.category', 'Men Fashion') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-indigo-400 hover:text-white dark:text-white dark:hover:bg-gray-700"
                            >Men's Fashion</a
                            >
                    </li>
                    <li>
                        <a
                            href="{{ route('products.by.category', 'Women Fashion') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-indigo-400 hover:text-white dark:text-white dark:hover:bg-gray-700"
                            >Women's Fashion</a
                            >
                    </li>
                    <li>
                        <a
                            href="{{ route('products.by.category', 'Computer & Techs') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-indigo-400 hover:text-white dark:text-white dark:hover:bg-gray-700"
                            >Computer & Techs</a
                            >
                    </li>
                    <li>
                        <a
                            href="{{ route('products.by.category', 'Food & Drinks') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-indigo-400 hover:text-white dark:text-white dark:hover:bg-gray-700"
                            >Food and Drinks</a
                            >
                    </li>
                    <li>
                        <a
                            href="{{ route('products.by.category', 'Home Appliances') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-indigo-400 hover:text-white dark:text-white dark:hover:bg-gray-700"
                            >Home Appliances</a
                            >
                    </li>
                    <li>
                        <a
                            href="{{ route('products.by.category', 'Musical Instruments') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-indigo-400 hover:text-white dark:text-white dark:hover:bg-gray-700"
                            >Musical Instruments</a
                            >
                    </li>
                    <li>
                        <a
                            href="{{ route('products.by.category', 'Sports Equipment') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-indigo-400 hover:text-white dark:text-white dark:hover:bg-gray-700"
                            >Sports Equipment</a
                            >
                    </li>
                    <li>
                        <a
                            href="{{ route('products.by.category', 'Toys & Games') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-indigo-400 hover:text-white dark:text-white dark:hover:bg-gray-700"
                            >Toys and Games</a
                            >
                    </li>
                    <li>
                        <a
                            href="{{ route('products.by.category', 'Furniture & Home Living') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-indigo-400 hover:text-white dark:text-white dark:hover:bg-gray-700"
                            >Furniture & Home Living</a
                            >
                    </li>
                    <li>
                        <a
                            href="{{ route('products.by.category', 'Vehicles & Components') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-indigo-400 hover:text-white dark:text-white dark:hover:bg-gray-700"
                            >Vehicles & Components</a
                            >
                    </li>
                </ul>
            </li>
            <x-nav-link :href="route('exchange')" :active="request()->routeIs('exchange')">
                <svg class="w-6 h-6 text-blue-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                    <path d="M17 9a1 1 0 0 0-1 1 6.994 6.994 0 0 1-11.89 5H7a1 1 0 0 0 0-2H2.236a1 1 0 0 0-.585.07c-.019.007-.037.011-.055.018-.018.007-.028.006-.04.014-.028.015-.044.042-.069.06A.984.984 0 0 0 1 14v5a1 1 0 1 0 2 0v-2.32A8.977 8.977 0 0 0 18 10a1 1 0 0 0-1-1ZM2 10a6.994 6.994 0 0 1 11.89-5H11a1 1 0 0 0 0 2h4.768a.992.992 0 0 0 .581-.07c.019-.007.037-.011.055-.018.018-.007.027-.006.04-.014.028-.015.044-.042.07-.06A.985.985 0 0 0 17 6V1a1 1 0 1 0-2 0v2.32A8.977 8.977 0 0 0 0 10a1 1 0 1 0 2 0Z"/>
                </svg>
                <span class="ml-3">{{ __('Academic Resource Exchange') }}</span>
            </x-nav-link>
            <li>
                <a
                    href="{{ url('forum' )}}"
                    class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg hover:bg-indigo-400 hover:text-white dark:hover:bg-gray-700 group"
                    >
                    <svg class="w-6 h-6 text-blue-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 19">
                        <path d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z"/>
                        <path d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z"/>
                    </svg>
                    <span class="ml-3">Forum</span>
                </a>
            </li>
        </ul>
        <div>
            <ul class="space-y-2">
                <x-nav-link :href="route('about-us')" :active="request()->routeIs('about-us')">
                    <svg class="w-6 h-6 text-blue-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="ml-3">{{ __('About Us') }}</span>
                </x-nav-link>
                <x-nav-link :href="route('contact-us')" :active="request()->routeIs('contact-us')">
                    <svg class="w-5 h-5 text-blue-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                        <path d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z"/>
                    </svg>
                    <span class="ml-3">{{ __('Contact Us') }}</span>
                </x-nav-link>
            </ul>    
        </div>
    </div>
    <div
        class="absolute bottom-20 p-4 left-0 justify-center space-x-4 w-full lg:flex bg-indigo-50"
        >
        <a
            href="#"
            class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-600"
            >
            <img class="w-10 h-10" src="{{asset('logo.png')}}" alt="">
        </a>
        <a
            href="#"
            class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-600"
            >
            <img class="w-11 h-11" src="{{asset('Pangasinan_State_University_logo.png')}}" alt="">
        </a>
    </div>
    <div class="absolute bottom-0 left-0 justify-center p-4 space-x-4 w-full lg:flex bg-indigo-50">
        <ul class="flex space-x-4 mt-4">
            <li>
                <a href="{{ url('privacy-policy')}}" class="underline text-sm text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                    Privacy Policy
                </a>
            </li>
            <li>
                <a href="{{ url('terms-and-conditions')}}" class="underline text-sm text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                    Terms and Conditions
                </a>
            </li>
        </ul>
    </div>
</aside>
@endrole

@role('customer')
<aside class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition duration-700 ease-in-out -translate-x-full shadow-lg bg-white md:translate-x-0 dark:bg-gray-800"
    aria-label="Sidenav"
    id="drawer-navigation">
    <div class="overflow-y-auto py-5 px-3 h-full bg-indigo-50 dark:bg-gray-800">
        <form action="{{ route('product.search') }}" method="GET" class="md:hidden mb-2">
            <label for="sidebar-search" class="sr-only">Search</label>
            <div class="relative">
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
                    class="bg-gray-50 shadow-lg shadow-indigo-500/50 border border-indigo-600 text-gray-900 text-sm rounded-full focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Search"
                    />
            </div>
        </form>
        <ul class="space-y-2 mb-5 pb-5 border-b border-gray-200 dark:border-gray-700">
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                <svg
                        aria-hidden="true"                       
                        class="w-6 h-6 text-blue-900"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                <span class="ml-3">{{ __('Home') }}</span>
            </x-nav-link>
            <li>
                <button
                    type="button"
                    class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-indigo-400 hover:text-white dark:hover:bg-gray-700"
                    aria-controls="categories"
                    data-collapse-toggle="categories"
                    >
                    <svg class="flex-shrink-0 w-5 h-5 text-blue-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
                    </svg>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap"
                        >Categories</span
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
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                            ></path>
                    </svg>
                </button>
                <ul id="categories" class="hidden py-2 space-y-2">
                    <li>
                        <a
                            href="{{ route('products.by.category', 'School Uniforms & Supplies') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-indigo-400 hover:text-white dark:text-white dark:hover:bg-gray-700"
                            >School Supplies and Uniforms</a
                            >
                    </li>
                    <li>
                        <a
                            href="{{ route('products.by.category', 'Mobile Phones & Gadgets') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-indigo-400 hover:text-white dark:text-white dark:hover:bg-gray-700"
                            >Mobile Phones & Gadgets</a
                            >
                    </li>
                    <li>
                        <a
                            href="{{ route('products.by.category', 'Men Fashion') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-indigo-400 hover:text-white dark:text-white dark:hover:bg-gray-700"
                            >Men's Fashion</a
                            >
                    </li>
                    <li>
                        <a
                            href="{{ route('products.by.category', 'Women Fashion') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-indigo-400 hover:text-white dark:text-white dark:hover:bg-gray-700"
                            >Women's Fashion</a
                            >
                    </li>
                    <li>
                        <a
                            href="{{ route('products.by.category', 'Computer & Techs') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-indigo-400 hover:text-white dark:text-white dark:hover:bg-gray-700"
                            >Computer & Techs</a
                            >
                    </li>
                    <li>
                        <a
                            href="{{ route('products.by.category', 'Food & Drinks') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-indigo-400 hover:text-white dark:text-white dark:hover:bg-gray-700"
                            >Food and Drinks</a
                            >
                    </li>
                    <li>
                        <a
                            href="{{ route('products.by.category', 'Home Appliances') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-indigo-400 hover:text-white dark:text-white dark:hover:bg-gray-700"
                            >Home Appliances</a
                            >
                    </li>
                    <li>
                        <a
                            href="{{ route('products.by.category', 'Musical Instruments') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-indigo-400 hover:text-white dark:text-white dark:hover:bg-gray-700"
                            >Musical Instruments</a
                            >
                    </li>
                    <li>
                        <a
                            href="{{ route('products.by.category', 'Sports Equipment') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-indigo-400 hover:text-white dark:text-white dark:hover:bg-gray-700"
                            >Sports Equipment</a
                            >
                    </li>
                    <li>
                        <a
                            href="{{ route('products.by.category', 'Toys & Games') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-indigo-400 hover:text-white dark:text-white dark:hover:bg-gray-700"
                            >Toys and Games</a
                            >
                    </li>
                    <li>
                        <a
                            href="{{ route('products.by.category', 'Furniture & Home Living') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-indigo-400 hover:text-white dark:text-white dark:hover:bg-gray-700"
                            >Furniture & Home Living</a
                            >
                    </li>
                    <li>
                        <a
                            href="{{ route('products.by.category', 'Vehicles & Components') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-indigo-400 hover:text-white dark:text-white dark:hover:bg-gray-700"
                            >Vehicles & Components</a
                            >
                    </li>
                </ul>
            </li>
            <x-nav-link :href="route('exchange')" :active="request()->routeIs('exchange')">
                <svg class="w-6 h-6 text-blue-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                    <path d="M17 9a1 1 0 0 0-1 1 6.994 6.994 0 0 1-11.89 5H7a1 1 0 0 0 0-2H2.236a1 1 0 0 0-.585.07c-.019.007-.037.011-.055.018-.018.007-.028.006-.04.014-.028.015-.044.042-.069.06A.984.984 0 0 0 1 14v5a1 1 0 1 0 2 0v-2.32A8.977 8.977 0 0 0 18 10a1 1 0 0 0-1-1ZM2 10a6.994 6.994 0 0 1 11.89-5H11a1 1 0 0 0 0 2h4.768a.992.992 0 0 0 .581-.07c.019-.007.037-.011.055-.018.018-.007.027-.006.04-.014.028-.015.044-.042.07-.06A.985.985 0 0 0 17 6V1a1 1 0 1 0-2 0v2.32A8.977 8.977 0 0 0 0 10a1 1 0 1 0 2 0Z"/>
                </svg>
                <span class="ml-3">{{ __('Academic Resource Exchange') }}</span>
            </x-nav-link>
            <li>
                <a
                    href="{{ url('forum' )}}"
                    class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg hover:bg-indigo-400 hover:text-white dark:hover:bg-gray-700 group"
                    >
                    <svg class="w-6 h-6 text-blue-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 19">
                        <path d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z"/>
                        <path d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z"/>
                    </svg>
                    <span class="ml-3">Forum</span>
                </a>
            </li>
        </ul>
        <div>
         <ul
            class="space-y-2">
            <x-nav-link :href="route('about-us')" :active="request()->routeIs('about-us')">
                <svg class="w-6 h-6 text-blue-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                  </svg>
                <span class="ml-3">{{ __('About Us') }}</span>
            </x-nav-link>
            <x-nav-link :href="route('contact-us')" :active="request()->routeIs('contact-us')">
                <svg class="w-5 h-5 text-blue-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                    <path d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z"/>
                </svg>
                <span class="ml-3">{{ __('Contact Us') }}</span>
            </x-nav-link>
        </ul>    
        </div>
    </div>
    <div
        class="absolute bottom-20 p-4 left-0 justify-center space-x-4 w-full lg:flex bg-indigo-50"
        >
        <a
            href="#"
            class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-600"
            >
            <img class="w-10 h-10" src="{{asset('logo.png')}}" alt="">
        </a>
        <a
            href="#"
            class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-600"
            >
            <img class="w-11 h-11" src="{{asset('Pangasinan_State_University_logo.png')}}" alt="">
        </a>
    </div>
    <div class="absolute bottom-0 left-0 justify-center p-4 space-x-4 w-full lg:flex bg-indigo-50">
        <ul class="flex space-x-4 mt-4">
            <li>
                <a href="{{ url('privacy-policy')}}" class="underline text-sm text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                    Privacy Policy
                </a>
            </li>
            <li>
                <a href="{{ url('terms-and-conditions')}}" class="underline text-sm text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                    Terms and Conditions
                </a>
            </li>
        </ul>
    </div>
</aside>
@endrole

@role('superadministrator')
<aside class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition duration-700 ease-in-out -translate-x-full shadow-lg bg-white md:translate-x-0 dark:bg-gray-800"
    aria-label="Sidenav"
    id="drawer-navigation">
    <div class="overflow-y-auto py-5 px-3 h-full bg-gray-800">
        <ul class="space-y-2 mb-5 pb-5 border-b border-gray-200 dark:border-gray-700">
            <li>
                <a
                    href="{{ url('dashboard' )}}"
                    class="flex items-center p-2 text-base font-medium rounded-lg text-white hover:bg-blue-700 dark:hover:bg-gray-700 group"
                    >
                    <svg
                        aria-hidden="true"
                        class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a
                    href="{{ url('sellers')}}"
                    class="flex items-center p-2 text-base font-medium rounded-lg text-white hover:bg-blue-700 dark:hover:bg-gray-700 group"
                    >
                    <svg class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                    </svg>
                    <span class="ml-3">Sellers</span>
                </a>
            </li>
            <li>
                <a
                    href="{{ url('customers')}}"
                    class="flex items-center p-2 text-base font-medium rounded-lg text-white hover:bg-blue-700 dark:hover:bg-gray-700 group"
                    >
                    <svg class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                    </svg>
                    <span class="ml-3">Customers</span>
                </a>
            </li>
            <li>
                <a
                    href="{{ url('products')}}"
                    class="flex items-center p-2 text-base font-medium rounded-lg text-white hover:bg-blue-700 dark:hover:bg-gray-700 group"
                    >
                    <svg class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                        <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                      </svg>
                    <span class="ml-3">Products</span>
                </a>
            </li>
            <li>
                <a
                    href="{{ url('students')}}"
                    class="flex items-center p-2 text-base font-medium rounded-lg text-white hover:bg-blue-700 dark:hover:bg-gray-700 group"
                    >
                    <svg class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                    </svg>
                    <span class="ml-3">Student List</span>
                </a>
            </li>
            <li>
                <a
                    href="{{ url('forum')}}"
                    class="flex items-center p-2 text-base font-medium rounded-lg text-white hover:bg-blue-700 dark:hover:bg-gray-700 group"
                    >
                    <svg
                        aria-hidden="true"
                        class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                    <span class="ml-3">Forum</span>
                </a>
            </li>
           
    </div>
    <div
        class="absolute bottom-0 left-0 justify-center p-4 space-x-4 w-full lg:flex bg-gray-800 z-20"
        >
        <a
            href="#"
            class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-600"
            >
            <img class="w-10 h-10" src="{{asset('logo.png')}}" alt="">
        </a>
        <a
            href="#"
            class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-600"
            >
            <img class="w-10 h-10" src="{{asset('Pangasinan_State_University_logo.png')}}" alt="">
        </a>
        {{-- <a
            href="#"
            data-tooltip-target="tooltip-settings"
            class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer dark:text-gray-400 dark:hover:text-white hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600"
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
                    d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                    clip-rule="evenodd"
                    ></path>
            </svg>
        </a>
        <div
            id="tooltip-settings"
            role="tooltip"
            class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip"
            >
            Settings page
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <button
            type="button"
            data-dropdown-toggle="language-dropdown"
            class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer dark:hover:text-white dark:text-gray-400 hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600"
            >
            <svg
                aria-hidden="true"
                class="h-5 w-5 rounded-full mt-0.5"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 0 3900 3900"
                >
                <path fill="#b22234" d="M0 0h7410v3900H0z" />
                <path
                    d="M0 450h7410m0 600H0m0 600h7410m0 600H0m0 600h7410m0 600H0"
                    stroke="#fff"
                    stroke-width="300"
                    />
                <path fill="#3c3b6e" d="M0 0h2964v2100H0z" />
                <g fill="#fff">
                    <g id="d">
                        <g id="c">
                            <g id="e">
                                <g id="b">
                                    <path
                                        id="a"
                                        d="M247 90l70.534 217.082-184.66-134.164h228.253L176.466 307.082z"
                                        />
                                    <use xlink:href="#a" y="420" />
                                    <use xlink:href="#a" y="840" />
                                    <use xlink:href="#a" y="1260" />
                                </g>
                                <use xlink:href="#a" y="1680" />
                            </g>
                            <use xlink:href="#b" x="247" y="210" />
                        </g>
                        <use xlink:href="#c" x="494" />
                    </g>
                    <use xlink:href="#d" x="988" />
                    <use xlink:href="#c" x="1976" />
                    <use xlink:href="#e" x="2470" />
                </g>
            </svg>
        </button>
        <!-- Dropdown -->
        <div
            class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700"
            id="language-dropdown"
            >
            <ul class="py-1" role="none">
                <li>
                    <a
                        href="#"
                        class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:text-white dark:text-gray-300 dark:hover:bg-gray-600"
                        role="menuitem"
                        >
                        <div class="inline-flex items-center">
                            <svg
                                aria-hidden="true"
                                class="h-3.5 w-3.5 rounded-full mr-2"
                                xmlns="http://www.w3.org/2000/svg"
                                id="flag-icon-css-us"
                                viewBox="0 0 512 512"
                                >
                                <g fill-rule="evenodd">
                                    <g stroke-width="1pt">
                                        <path
                                            fill="#bd3d44"
                                            d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                            transform="scale(3.9385)"
                                            />
                                        <path
                                            fill="#fff"
                                            d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                            transform="scale(3.9385)"
                                            />
                                    </g>
                                    <path
                                        fill="#192f5d"
                                        d="M0 0h98.8v70H0z"
                                        transform="scale(3.9385)"
                                        />
                                    <path
                                        fill="#fff"
                                        d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z"
                                        transform="scale(3.9385)"
                                        />
                                </g>
                            </svg>
                            English (US)
                        </div>
                    </a>
                </li>
                <li>
                    <a
                        href="#"
                        class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:text-white dark:hover:bg-gray-600"
                        role="menuitem"
                        >
                        <div class="inline-flex items-center">
                            <svg
                                aria-hidden="true"
                                class="h-3.5 w-3.5 rounded-full mr-2"
                                xmlns="http://www.w3.org/2000/svg"
                                id="flag-icon-css-de"
                                viewBox="0 0 512 512"
                                >
                                <path fill="#ffce00" d="M0 341.3h512V512H0z" />
                                <path d="M0 0h512v170.7H0z" />
                                <path fill="#d00" d="M0 170.7h512v170.6H0z" />
                            </svg>
                            Deutsch
                        </div>
                    </a>
                </li>
                <li>
                    <a
                        href="#"
                        class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:text-white dark:hover:bg-gray-600"
                        role="menuitem"
                        >
                        <div class="inline-flex items-center">
                            <svg
                                aria-hidden="true"
                                class="h-3.5 w-3.5 rounded-full mr-2"
                                xmlns="http://www.w3.org/2000/svg"
                                id="flag-icon-css-it"
                                viewBox="0 0 512 512"
                                >
                                <g fill-rule="evenodd" stroke-width="1pt">
                                    <path fill="#fff" d="M0 0h512v512H0z" />
                                    <path fill="#009246" d="M0 0h170.7v512H0z" />
                                    <path fill="#ce2b37" d="M341.3 0H512v512H341.3z" />
                                </g>
                            </svg>
                            Italiano
                        </div>
                    </a>
                </li>
                <li>
                    <a
                        href="#"
                        class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:text-white dark:text-gray-300 dark:hover:bg-gray-600"
                        role="menuitem"
                        >
                        <div class="inline-flex items-center">
                            <svg
                                aria-hidden="true"
                                class="h-3.5 w-3.5 rounded-full mr-2"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                id="flag-icon-css-cn"
                                viewBox="0 0 512 512"
                                >
                                <defs>
                                    <path
                                        id="a"
                                        fill="#ffde00"
                                        d="M1-.3L-.7.8 0-1 .6.8-1-.3z"
                                        />
                                </defs>
                                <path fill="#de2910" d="M0 0h512v512H0z" />
                                <use
                                    width="30"
                                    height="20"
                                    transform="matrix(76.8 0 0 76.8 128 128)"
                                    xlink:href="#a"
                                    />
                                <use
                                    width="30"
                                    height="20"
                                    transform="rotate(-121 142.6 -47) scale(25.5827)"
                                    xlink:href="#a"
                                    />
                                <use
                                    width="30"
                                    height="20"
                                    transform="rotate(-98.1 198 -82) scale(25.6)"
                                    xlink:href="#a"
                                    />
                                <use
                                    width="30"
                                    height="20"
                                    transform="rotate(-74 272.4 -114) scale(25.6137)"
                                    xlink:href="#a"
                                    />
                                <use
                                    width="30"
                                    height="20"
                                    transform="matrix(16 -19.968 19.968 16 256 230.4)"
                                    xlink:href="#a"
                                    />
                            </svg>
                            中文 (繁體)
                        </div>
                    </a>
                </li>
            </ul>
        </div> --}}
    </div>
</aside>
@endrole
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
        {{ trans('PSU Marketplace Forum::general.home_title') }}
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
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Sortable (https://github.com/SortableJS/Sortable) -->
    <script src="//cdn.jsdelivr.net/npm/sortablejs@1.10.1/Sortable.min.js"></script>
    <!-- Vue.Draggable (https://github.com/SortableJS/Vue.Draggable) -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/Vue.Draggable/2.23.2/vuedraggable.umd.min.js"></script>
</head>
<body class="bg-gray-100">
    {{-- <nav x-data="{ open: false }" class="bg-indigo-700 border-b border-gray-100">
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    
                    <div class="shrink-0 flex items-center">
                        <a href="{{ url(config('forum.web.router.prefix')) }}">
                            <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                        </a>
                    </div>
    
                  
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link :href="route('forum.recent')" :active="request()->routeIs('forum.recent')">
                            {{ trans('forum::threads.recent') }}
                        </x-nav-link>
                        
                        @role('superadministrator')
                        <x-nav-link :href="route('forum.category.manage')" :active="request()->routeIs('forum.category.manage')">
                            {{ trans('forum::general.manage') }}
                        </x-nav-link>
                        @endrole
                       
                    </div>
                </div>
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
                <x-responsive-nav-link :href="route('forum.recent')" :active="request()->routeIs('forum.recent')">
                    {{ trans('forum::threads.recent') }}
                </x-responsive-nav-link>
                @can ('moveCategories')
                <x-responsive-nav-link :href="route('forum.category.manage')" :active="request()->routeIs('forum.category.manage')">
                    {{ trans('forum::general.manage') }}
                </x-responsive-nav-link>
                @endcan
            </div>
        </div>
    </nav> --}}
    @include('layouts.navbar')
    @include('layouts.sidebar')
    <div class="p-4 md:ml-64 h-auto pt-20">
        {{-- @include('forum.partials.breadcrumbs') --}}
        @include('forum.partials.alerts')

        @yield('content')
    </div>
    <footer class="bg-indigo-700" aria-labelledby="footer-heading">
        <h2 id="footer-heading" class="sr-only">Footer</h2>
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
          <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            <div class="space-y-8 xl:col-span-1">
            <div class="flex space-x-6">
                <img class="h-16" src="{{ asset('Pangasinan_State_University_logo.png')}}" alt="Company name"><x-application-logo class="block h-16 w-auto fill-current text-gray-800" />
            </div>
              <p class="text-white text-base">PSU Marketplace</p>
              <div class="flex space-x-6">
                <a href="https://www.facebook.com/profile.php?id=61553673545550&mibextid=vk8aRt" class="text-white hover:text-white">
                  <span class="sr-only">Facebook</span>
                  <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                  </svg>
                </a>
              </div>
            </div>
            <div class="mt-12 grid grid-cols-2 gap-8 xl:mt-0 xl:col-span-2">
              <div class="md:grid md:grid-cols-2 md:gap-8">
                <div>
                  <h3 class="text-sm font-semibold text-white tracking-wider uppercase">Marketplace</h3>
                  <ul role="list" class="mt-4 space-y-4">
                    <li>
                      <a href="{{ url('dashboard') }}" class="text-base text-white hover:text-white"> Home </a>
                    </li>
                    <li>
                      <a href="{{ url('category-products') }}" class="text-base text-white hover:text-white"> Products </a>
                    </li>
                    <li>
                      <a href="{{ url('contact-us') }}" class="text-base text-white hover:text-white"> Contacts </a>
                    </li>
                    <li>
                      <a href="{{ url('about-us') }}" class="text-base text-white hover:text-white"> About </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="md:grid md:grid-cols-2 md:gap-8">
                <div>
                    <h3 class="text-sm font-semibold text-white tracking-wider uppercase">Legal</h3>
                    <ul role="list" class="mt-4 space-y-4">
                      <li>
                        <a href="{{ url('privacy-policy')}}" class="text-base text-white hover:text-white"> Privacy Policy </a>
                      </li>
        
                      <li>
                        <a href="{{ url('terms-and-conditions') }}" class="text-base text-white hover:text-white"> Terms and Conditions</a>
                      </li>
                    </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-12 border-t border-white pt-8">
            <p class="text-base text-white xl:text-center">&copy; 2023 Pangasinan State University Marketplace. All rights reserved.</p>
          </div>
        </div>
    </footer>

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
</body>
</html>

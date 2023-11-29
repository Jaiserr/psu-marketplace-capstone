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
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Sortable (https://github.com/SortableJS/Sortable) -->
    <script src="//cdn.jsdelivr.net/npm/sortablejs@1.10.1/Sortable.min.js"></script>
    <!-- Vue.Draggable (https://github.com/SortableJS/Vue.Draggable) -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/Vue.Draggable/2.23.2/vuedraggable.umd.min.js"></script>
</head>
<body class="bg-gray-100">
    <nav x-data="{ open: false }" class="bg-indigo-700 border-b border-gray-100">
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
                        <x-nav-link :href="route('forum.recent')" :active="request()->routeIs('forum.recent')">
                            {{ trans('forum::threads.recent') }}
                        </x-nav-link>
                        {{-- @can ('moveCategories')  --}}
                        @role('superadministrator')
                        <x-nav-link :href="route('forum.category.manage')" :active="request()->routeIs('forum.category.manage')">
                            {{ trans('forum::general.manage') }}
                        </x-nav-link>
                        @endrole
                        {{-- @endcan --}}
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
    <footer class="bg-indigo-700" aria-labelledby="footer-heading">
        <h2 id="footer-heading" class="sr-only">Footer</h2>
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
          <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            <div class="space-y-8 xl:col-span-1">
            <div class="flex space-x-6">
                <img class="h-16" src="{{ asset('Pangasinan_State_University_logo.png')}}" alt="Company name"><x-application-logo class="block h-16 w-auto fill-current text-gray-800" />
            </div>
              <p class="text-white text-base">Making the world a better place through constructing elegant hierarchies.</p>
              <div class="flex space-x-6">
                <a href="https://www.facebook.com/profile.php?id=61553673545550&mibextid=vk8aRt" class="text-white hover:text-white">
                  <span class="sr-only">Facebook</span>
                  <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                  </svg>
                </a>
      
                <a href="#" class="text-white hover:text-white">
                  <span class="sr-only">Instagram</span>
                  <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                  </svg>
                </a>
      
                <a href="#" class="text-white hover:text-white">
                  <span class="sr-only">Twitter</span>
                  <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
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
                        <a href="{{ url('privacy-policy')}}" class="text-base text-white hover:text-white"> Privacy Policy</a>
                      </li>
        
                      <li>
                        <a href="{{ url('terms-and-conditions')}}" class="text-base text-white hover:text-white"> Terms and Conditions </a>
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

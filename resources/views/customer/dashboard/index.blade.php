<x-app-layout>

    <div class="bg-white">
        <div class="max-w-2xl pt-10 mx-auto px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
            {{-- <form action="{{ route('product.search') }}" method="GET">
                @csrf
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search"
                        class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:border-gray-400 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search Items..." required>
                    <button type="submit"
                        class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </form> --}}

            <form action="{{ route('product.search') }}" method="GET">
                @csrf
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input id="search" name="query"
                        class="block w-full text-white p-4 ps-10 text-sm  border border-gray-300 rounded-lg bg-blue-600 focus:ring-blue-500 focus:border-blue-500 "
                        placeholder="Search Items..." required>
                    <button type="submit"
                        class="text-white absolute end-2.5 bottom-2.5 bg-yellow-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 ">Search</button>
                </div>
            </form>

        </div>
        <header class="relative overflow-hidden">


            <!-- Hero section -->
            <div class="pt-16 pb-80 sm:pt-24 sm:pb-40 lg:pt-40 lg:pb-48">

                <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 sm:static">
                    <div class="sm:max-w-lg">
                        <h1 class="text-4xl font font-extrabold tracking-tight text-gray-900 sm:text-6xl">PSU
                            Marketplace</h1>
                        <p class="mt-4 text-xl text-gray-500">Explore, connect, and shop seamlessly in our vibrant
                            digital
                            community</p>
                    </div>
                    <div>
                        <div class="mt-10">
                            <!-- Decorative image grid -->
                            <div aria-hidden="true"
                                class="pointer-events-none lg:absolute lg:inset-y-0 lg:max-w-7xl lg:mx-auto lg:w-full">
                                <div
                                    class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                                    <div class="flex items-center space-x-6 lg:space-x-8">
                                        <div class="flex-shrink-0 grid grid-cols-1 gap-y-6 lg:gap-y-8">
                                            <div
                                                class="w-44 h-64 rounded-lg overflow-hidden sm:opacity-0 lg:opacity-100">
                                                <img src="{{ asset('hero/1.jpg')}}" alt=""
                                                    class="w-full h-full object-center object-cover">
                                            </div>
                                            <div class="w-44 h-64 rounded-lg overflow-hidden">
                                                <img src="{{ asset('hero/2.jpg')}}" alt=""
                                                    class="w-full h-full object-center object-cover">
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0 grid grid-cols-1 gap-y-6 lg:gap-y-8">
                                            <div class="w-44 h-64 rounded-lg overflow-hidden">
                                                <img src="{{ asset('hero/3.jpg')}}" alt=""
                                                    class="w-full h-full object-center object-cover">
                                            </div>
                                            <div class="w-44 h-64 rounded-lg overflow-hidden">
                                                <img src="{{ asset('hero/4.jpg')}}" alt=""
                                                    class="w-full h-full object-center object-cover">
                                            </div>
                                            <div class="w-44 h-64 rounded-lg overflow-hidden">
                                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-05.jpg"
                                                    alt="" class="w-full h-full object-center object-cover">
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0 grid grid-cols-1 gap-y-6 lg:gap-y-8">
                                            <div class="w-44 h-64 rounded-lg overflow-hidden">
                                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-06.jpg"
                                                    alt="" class="w-full h-full object-center object-cover">
                                            </div>
                                            <div class="w-44 h-64 rounded-lg overflow-hidden">
                                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-07.jpg"
                                                    alt="" class="w-full h-full object-center object-cover">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="{{ url('category-products') }}"
                                class="inline-block text-center bg-indigo-600 border border-transparent rounded-md py-3 px-8 font-medium text-white hover:bg-indigo-700">Shop
                                Categories</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <div class="bg-white">
                <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
                    <div class="mb-4 sm:flex sm:items-center sm:justify-between lg:px-8 xl:px-0">
                        <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Our Categories</h2>
                        <a href="{{ url('category-products') }}"
                            class="hidden text-sm font-semibold text-indigo-600 hover:text-indigo-500 sm:block">Browse
                            all categories and products<span aria-hidden="true"> &rarr;</span></a>
                    </div>
                    <ul role="list"
                        class="grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-4 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
                        <a href="{{ route('products.by.category', 'School Uniforms and Supplies') }}">
                            <li class="relative">
                                <div
                                    class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
                                    <img src="{{ asset('category/school.png')}}" alt=""
                                        class="w-full h-full object-center object-cover">
                                    <button type="button" class="absolute inset-0 focus:outline-none">
                                        <span class="sr-only">View details for IMG_4985.HEIC</span>
                                    </button>
                                </div>
                                <p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">
                                    School Uniforms and Supplies</p>
                            </li>
                        </a>
                        <a href="{{ route('products.by.category', 'Computer & Techs') }}">
                            <li class="relative">
                                <div
                                    class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
                                    <img src="{{ asset('category/computer.jpg') }}" alt=""
                                        class="w-full h-full object-center object-cover">
                                    <button type="button" class="absolute inset-0 focus:outline-none">
                                        <span class="sr-only">View details for IMG_4985.HEIC</span>
                                    </button>
                                </div>
                                <p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">
                                    Computer & Techs</p>
                            </li>
                        </a>
                        <a href="{{ route('products.by.category', 'Food and Drinks') }}">
                            <li class="relative">
                                <div
                                    class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
                                    <img src="{{ asset('category/food.jpg') }}" alt=""
                                        class="w-full h-full object-center object-cover">
                                    <button type="button" class="absolute inset-0 focus:outline-none">
                                        <span class="sr-only">View details for IMG_4985.HEIC</span>
                                    </button>
                                </div>
                                <p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">
                                    Food and Drinks</p>
                            </li>
                        </a>
                        <a href="{{ route('products.by.category', 'Mobile Phones & Gadgets') }}">
                            <li class="relative">
                                <div
                                    class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
                                    <img src="{{ asset('category/mobile.jpg') }}" alt=""
                                        class="w-full h-full object-center object-cover">
                                    <button type="button" class="absolute inset-0 focus:outline-none">
                                        <span class="sr-only">View details for IMG_4985.HEIC</span>
                                    </button>
                                </div>
                                <p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">
                                    Mobile Phones & Gadgets</p>
                            </li>
                        </a>
                        <a href="{{ route('products.by.category', 'Women\'s Fashion') }}">
                            <li class="relative">
                                <div
                                    class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
                                    <img src="{{ asset('category/womens.jpg')}}" alt=""
                                        class="w-full h-full object-center object-cover">
                                    <button type="button" class="absolute inset-0 focus:outline-none">
                                        <span class="sr-only">View details for IMG_4985.HEIC</span>
                                    </button>
                                </div>
                                <p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">
                                    Women's Fashion</p>
                            </li>
                        </a>
                        <a href="{{ route('products.by.category', 'Men\'s Fashion') }}">
                            <li class="relative">
                                <div
                                    class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
                                    <img src="{{ asset('category/mens.jpg')}}" alt=""
                                        class="w-full h-full object-center object-cover">
                                    <button type="button" class="absolute inset-0 focus:outline-none">
                                        <span class="sr-only">View details for IMG_4985.HEIC</span>
                                    </button>
                                </div>
                                <p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">
                                    Men's Fashion</p>
                            </li>
                        </a>
                        <a href="{{ route('products.by.category', 'Musical Instruments') }}">
                            <li class="relative">
                                <div
                                    class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
                                    <img src="{{ asset('category/instruments.jpg')}}" alt=""
                                        class="w-full h-full object-center object-cover">
                                    <button type="button" class="absolute inset-0 focus:outline-none">
                                        <span class="sr-only">View details for IMG_4985.HEIC</span>
                                    </button>
                                </div>
                                <p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">
                                    Musical Instruments</p>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>


            <!-- Featured section -->
            <section aria-labelledby="cause-heading">
                <div class="relative bg-gray-800 py-32 px-6 sm:py-40 sm:px-12 lg:px-16">
                    <div class="absolute inset-0 overflow-hidden">
                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-feature-section-full-width.jpg"
                            alt="" class="w-full h-full object-center object-cover">
                    </div>
                    <div aria-hidden="true" class="absolute inset-0 bg-gray-900 bg-opacity-50"></div>
                    <div class="relative max-w-3xl mx-auto flex flex-col items-center text-center">
                        <h2 id="cause-heading" class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">PSU
                            Marketplace Community Forum</h2>
                        <p class="mt-3 text-xl text-white">"Join our marketplace community forum for insights,
                            networking, and updates. Connect with
                            peers and stay informed."</p>
                        <a href="{{ url('forum') }}"
                            class="mt-8 w-full block bg-white border border-transparent rounded-md py-3 px-8 text-base font-medium text-gray-900 hover:bg-gray-100 sm:w-auto">Join
                            now</a>
                    </div>
                </div>
            </section>

            <!-- Favorites section -->


            <div class="bg-white">
                <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
                    <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Newly Added Products</h2>

                    <div class="mt-8 grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
                        @foreach ($products as $product)
                        @php
                        $imagePathsArray = explode('|', $product->images);
                        @endphp
                        <div>
                            <div class="relative">
                                <a href="{{ route('product.details', $product->id) }}">
                                    <div class="relative w-full h-72 rounded-lg overflow-hidden">

                                        <img src="{{ asset('storage/' . $imagePathsArray[0]) }}"
                                            alt="Front of zip tote bag with white canvas, black canvas straps and handle, and black zipper pulls."
                                            class="w-full h-full object-center object-cover">

                                    </div>
                                </a>
                                <div class="relative mt-4">
                                    <a href="{{ route('product.details', $product->id) }}">
                                        <h3 class="text-sm font-medium text-gray-900">{{ $product->product_name }}</h3>

                                    </a>
                                    <p class="mt-1 text-sm text-gray-500">{{ $product->condition }}</p>
                                    <span
                                        class="mr-3 uppercase text-xs {{ $product->availability === 'Available' ? 'text-green-500' : 'text-red-500' }}">{{
                                        $product->availability }}</span>
                                </div>
                                <div
                                    class="absolute top-0 inset-x-0 h-72 rounded-lg p-4 flex items-end justify-end overflow-hidden">
                                    <div aria-hidden="true"
                                        class="absolute inset-x-0 bottom-0 h-36 bg-gradient-to-t from-black opacity-50">
                                    </div>
                                    <p class="relative text-lg font-semibold text-white">₱{{ $product->price }}</p>
                                </div>
                            </div>
                            <div class="mt-6">
                                @if ($product->availability === "Available")
                                <form class="z-[100]" action="{{ route('wishlist.add', $product) }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="w-full px-4 py-2 text-base font-bold text-white uppercase bg-blue-400 border border-blue-400 rounded focus:outline-none focus:border-blue-700 hover:bg-blue-600">
                                        Add to wishlist
                                    </button>
                                </form>
                                @else
                                <button
                                    class="w-full px-4 py-2 text-base font-bold text-white uppercase bg-red-400 border border-red-400 rounded focus:outline-none focus:border-red-700 hover:bg-red-600">
                                    Product Sold
                                </button>
                            </div>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
    </div>

    <!-- CTA section -->
    <section aria-labelledby="sale-heading">
        <div class="pt-32 overflow-hidden sm:pt-14">
            <div class="bg-indigo-700">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="relative pt-48 pb-16 sm:pb-24">
                        <div>
                            <h2 id="sale-heading" class="text-4xl font-extrabold tracking-tight text-white md:text-5xl">
                                "Explore, shop, elevate.
                            </h2>
                            <div class="mt-6 text-base">
                                <a href="{{ url('category-products') }}" class="font-semibold text-white">Shop now<span
                                        aria-hidden="true"> &rarr;</span></a>
                            </div>
                        </div>

                        <div class="absolute -top-32 left-1/2 transform -translate-x-1/2 sm:top-6 sm:translate-x-0">
                            <div class="ml-24 flex space-x-6 min-w-max sm:ml-3 lg:space-x-8">
                                <div class="flex space-x-6 sm:flex-col sm:space-x-0 sm:space-y-6 lg:space-y-8">
                                    <div class="flex-shrink-0">
                                        <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72"
                                            src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-01.jpg"
                                            alt="">
                                    </div>

                                    <div class="mt-6 flex-shrink-0 sm:mt-0">
                                        <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72"
                                            src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-02.jpg"
                                            alt="">
                                    </div>
                                </div>
                                <div
                                    class="flex space-x-6 sm:-mt-20 sm:flex-col sm:space-x-0 sm:space-y-6 lg:space-y-8">
                                    <div class="flex-shrink-0">
                                        <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72"
                                            src="https://tailwindui.com/img/ecommerce-images/home-page-03-favorite-01.jpg"
                                            alt="">
                                    </div>

                                    <div class="mt-6 flex-shrink-0 sm:mt-0">
                                        <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72"
                                            src="https://tailwindui.com/img/ecommerce-images/home-page-03-favorite-02.jpg"
                                            alt="">
                                    </div>
                                </div>
                                <div class="flex space-x-6 sm:flex-col sm:space-x-0 sm:space-y-6 lg:space-y-8">
                                    <div class="flex-shrink-0">
                                        <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72"
                                            src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-01.jpg"
                                            alt="">
                                    </div>

                                    <div class="mt-6 flex-shrink-0 sm:mt-0">
                                        <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72"
                                            src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-02.jpg"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>


    </div>
</x-app-layout>
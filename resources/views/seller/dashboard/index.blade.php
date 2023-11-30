<x-app-layout>
    <div class="bg-white">

        <header class="relative overflow-hidden mt-5">
            <div class="relative">
                <div class="absolute inset-x-0 bottom-0 h-1/2"></div>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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
                                <a href="{{route('category-products')}}" class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-indigo-700 bg-white hover:bg-indigo-700 hover:text-white sm:px-8">Shop Now</a>                          
                            </div>
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
                    </ul>
                </div>
            </div>

            <section aria-labelledby="cause-heading">
                <div class="relative bg-gray-800 py-32 px-6 sm:py-40 sm:px-12 lg:px-16">
                    <div class="absolute inset-0 overflow-hidden">
                        <img src="{{ asset('forum.png') }}"
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
                            class="mt-8 w-full block border border-transparent rounded-md py-3 px-8 text-base font-medium text-indigo-700 bg-white hover:bg-indigo-700 hover:text-white sm:w-auto">Join
                            now</a>
                    </div>
                </div>
            </section>

            <div class="bg-white">
                <div class="py-16 sm:py-24 lg:max-w-7xl lg:mx-auto lg:px-8">
                    <div class="px-4 flex items-center justify-between sm:px-6 lg:px-0">
                        <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Newly added products</h2>
                        <a href="#" class="hidden sm:block text-sm font-semibold text-indigo-600 hover:text-indigo-500">See everything<span aria-hidden="true"> &rarr;</span></a>
                    </div>
                    <div class="mt-8 relative">
                        <div class="relative w-full pb-6 -mb-6 overflow-x-auto">
                            <ul role="list" class="mx-4 inline-flex space-x-8 sm:mx-6 lg:mx-0 lg:space-x-0 lg:grid lg:grid-cols-4 lg:gap-x-8">
                                @foreach ($products as $product)
                                @php
                                $imagePathsArray = explode('|', $product->images);
                                @endphp
                                <li class="w-64 mb-8 inline-flex flex-col text-center lg:w-auto">
                                    <a href="{{ route('product.details', $product->id) }}">
                                        <div class="group relative">
                                            <div class="relative w-full h-72 rounded-lg overflow-hidden">
                                                <img src="{{ asset('storage/' . $imagePathsArray[0]) }}" class="w-full h-full object-center object-cover group-hover:opacity-75">
                                            </div>
                                            <div class="absolute m-2 top-0 right-0 bg-white p-2 rounded">
                                                <span class="text-xs font-bold {{ $product->availability === 'Available' ? 'text-green-500' : 'text-red-500' }}">{{$product->availability }}</span>
                                            </div>
                                            <div class="mt-6">
                                                <p class="text-xs text-gray-500">{{$product->category }}</p>
                                                <h3 class="mt-1 font-semibold text-gray-900">
                                                    <a href="{{ route('product.details', $product->id) }}">
                                                    <span class="absolute inset-0"></span>
                                                    {{ $product->product_name }}
                                                    </a>
                                                </h3>
                                                <p class="mt-1 text-gray-900">₱{{ $product->price }}</p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="mt-6">
                                        @if ($product->availability === "Available")
                                        <form class="z-[100]" action="{{ route('wishlist.add', $product) }}" method="POST">
                                            @csrf
                                            <button type="submit"
                                                class="w-full px-4 py-2 text-xs font-normal text-white bg-blue-400 border border-blue-400 rounded focus:outline-none focus:border-blue-700 hover:bg-blue-600">
                                                Save product
                                            </button>
                                        </form>
                                        @else
                                        <button
                                            class="w-full px-4 py-2 text-xs font-normal text-white bg-blue-400 border border-blue-400 rounded focus:outline-none focus:border-blue-700 hover:bg-blue-600">
                                            Product already sold
                                        </button>
                                        @endif
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        <section aria-labelledby="sale-heading">
            <div class="pt-32 overflow-hidden sm:pt-14">
                <div class="bg-yellow-400">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="relative pt-48 pb-16 sm:pb-24">
                            <div>
                                <h2 id="sale-heading" class="text-3xl font-extrabold tracking-tight text-white md:text-3xl">
                                    "Academic Resource Exchange".
                                </h2>
                                <div class="mt-6 text-base">
                                    <a href="{{ route('products.by.category', 'School Uniforms and Supplies') }}" class="font-semibold text-white">See Products<span
                                            aria-hidden="true"> &rarr;</span></a>
                                </div>
                            </div>

                            <div class="absolute -top-32 left-1/2 transform -translate-x-1/2 sm:top-6 sm:translate-x-0">
                                <div class="ml-24 flex space-x-6 min-w-max sm:ml-3 lg:space-x-8">
                                    <div class="flex space-x-6 sm:flex-col sm:space-x-0 sm:space-y-6 lg:space-y-8">
                                        <div class="flex-shrink-0">
                                            <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72"
                                                src="{{ asset('end-section/book2.jpg')}}"
                                                alt="">
                                        </div>

                                        <div class="mt-6 flex-shrink-0 sm:mt-0">
                                            <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72"
                                            src="{{ asset('end-section/book4.jpg')}}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div
                                        class="flex space-x-6 sm:-mt-20 sm:flex-col sm:space-x-0 sm:space-y-6 lg:space-y-8">
                                        <div class="flex-shrink-0">
                                            <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72"
                                            src="{{ asset('end-section/book3.jpg')}}"
                                                alt="">
                                        </div>

                                        <div class="mt-6 flex-shrink-0 sm:mt-0">
                                            <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72"
                                            src="{{ asset('end-section/book4.jpg')}}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="flex space-x-6 sm:flex-col sm:space-x-0 sm:space-y-6 lg:space-y-8">
                                        <div class="flex-shrink-0">
                                            <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72"
                                            src="{{ asset('end-section/book1.jpg')}}"                                            
                                            alt="">
                                        </div>

                                        <div class="mt-6 flex-shrink-0 sm:mt-0">
                                            <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72"
                                            src="{{ asset('end-section/book1.jpg')}}"                                            
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

    </div>
</x-app-layout>
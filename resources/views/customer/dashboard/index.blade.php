<x-app-layout>
    <div class="py-12">
        <div class="relative mb-12 px-4">
            <div class="absolute inset-x-0 bottom-0"></div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="relative shadow-xl sm:rounded-2xl sm:overflow-hidden">
                    <div class="absolute inset-0">
                        <img class="h-full w-full object-cover" src="{{ asset('psumarketplacebanner.png') }}"
                            alt="pangasinan state university">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-purple-600 to-indigo-600  mix-blend-multiply">
                        </div>
                    </div>
                    <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
                        <h1 class="text-center text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
                            <span class="block text-white">Explore, connect, and shop seamlessly in our vibrant digital
                                community</span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>




        <div>
            <!-- Add this code to your view file -->
            <a class="px-4 py-2 bg-indigo-700 rounded mx-4 mt-4 inline-block text-white"
                href="{{ route('products.by.category', 'Men\'s Fashion') }}">Men's Fashion</a>
            <a class="px-4 py-2 bg-indigo-700 rounded mx-4 mt-4 inline-block text-white"
                href="{{ route('products.by.category', 'Women\'s Fashion') }}">Women's Fashion</a>
            <a class="px-4 py-2 bg-indigo-700 rounded mx-4 mt-4 inline-block text-white"
                href="{{ route('products.by.category', 'Mobile Phones & Gadgets') }}">Mobile Phones &
                Gadgets</a>
            <a class="px-4 py-2 bg-indigo-700 rounded mx-4 mt-4 inline-block text-white"
                href="{{ route('products.by.category', 'Computer & Techs') }}">Computer & Techs</a>
            <a class="px-4 py-2 bg-indigo-700 rounded mx-4 mt-4 inline-block text-white"
                href="{{ route('products.by.category', 'School Uniforms and Supplies') }}">School Uniforms
                and Supplies</a>
            <a class="px-4 py-2 bg-indigo-700 rounded mx-4 mt-4 inline-block text-white"
                href="{{ route('products.by.category', 'Food and Drinks') }}">Food and Drinks</a>
            <a class="px-4 py-2 bg-indigo-700 rounded mx-4 mt-4 inline-block text-white"
                href="{{ route('products.by.category', 'Musical Instruments') }}">Musical Instruments</a>

        </div>



        <div class="">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="max-w-2xl px-4 mx-auto sm:py-24 lg:py-32 lg:max-w-none">
                    <div class="text-center pb-10">
                        <h1 class="font-bold text-4xl mb-4">Categories</h1>
                    </div>
                    <h2 class="text-2xl font-extrabold text-gray-900">Collections</h2>

                    <div class="mt-6 space-y-12 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-x-6">
                        <div class="group relative">
                            <div
                                class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                                <img src="{{ asset('category/school.png')}}"
                                    alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                                    class="w-full h-full object-center object-cover">
                            </div>
                            <h3 class="mt-6 text-base font-semibold text-gray-900">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    School Supplies and Uniforms
                                </a>
                            </h3>
                        </div>

                        <div class="group relative">
                            <div
                                class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                                <img src="{{ asset('category/food.jpg') }}"
                                    alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant."
                                    class="w-full h-full object-center object-cover">
                            </div>
                            <h3 class="mt-6 text-base font-semibold text-gray-900">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Food and Drinks
                                </a>
                            </h3>
                        </div>

                        <div class="group relative">
                            <div
                                class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                                <img src="{{ asset('category/computer.jpg') }}"
                                    alt="Collection of four insulated travel bottles on wooden shelf."
                                    class="w-full h-full object-center object-cover">
                            </div>
                            <h3 class="mt-6 text-base font-semibold text-gray-900">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Computer and Technologies
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="text-center p-10">
                <h1 class="font-bold text-4xl mb-4">Products</h1>
            </div>

            <div class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-10 lg:grid-cols-3 lg:gap-x-8">
                @foreach ($products as $product)
                @php
                $imagePathsArray = explode('|', $product->images);
                @endphp
                <div class=" relative bg-white border border-gray-200 rounded-lg flex flex-col overflow-hidden">
                    <div class="aspect-w-3 aspect-h-4 bg-gray-200 sm:aspect-none sm:h-96">
                        <a href="{{ route('product.details', $product->id) }}"><img
                                src="{{ asset('storage/' . $imagePathsArray[0]) }}"
                                alt="Eight shirts arranged on table in black, olive, grey, blue, white, red, mustard, and green."
                                class="w-full h-full object-center object-cover sm:w-full sm:h-full"></a>
                    </div>
                    <div class="flex-1 p-4 space-y-2 flex flex-col">
                        <h3 class="text-sm font-bold text-gray-900">
                            <a href="{{ route('product.details', $product->id) }}">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                {{ $product->product_name }}
                            </a>
                        </h3>
                        <span
                            class="mr-3 uppercase text-xs {{ $product->availability === 'Available' ? 'text-green-500' : 'text-red-500' }}">{{
                            $product->availability }}</span>

                        <p class="text-sm text-gray-500">{{ $product->category }}</p>
                        <div class="flex-1 flex flex-col justify-end">

                            {{-- <p class="text-sm text-gray-500">{{ $product->category }}</p> --}}
                            <p class="text-base font-medium text-gray-900">₱{{ $product->price }}</p>
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
                                Sold
                            </button>
                            @endif
                        </div>

                    </div>
                </div>
                @endforeach
                <!-- More products... -->
            </div>
        </div>





        <div class="max-w-2xl px-4 mx-auto py-16 sm:py-24 sm:px-6 lg:max-w-7xl">
            <div class="relative rounded-lg overflow-hidden lg:h-96">
                <div class="absolute inset-0">
                    <img src="https://tailwindui.com/img/ecommerce-images/category-page-01-featured-collection.jpg"
                        alt="" class="w-full h-full object-center object-cover">
                </div>
                <div aria-hidden="true" class="relative w-full h-96 lg:hidden"></div>
                <div aria-hidden="true" class="relative w-full h-32 lg:hidden"></div>
                <div
                    class="absolute inset-x-0 bottom-0 bg-black bg-opacity-75 p-6 rounded-bl-lg rounded-br-lg backdrop-filter backdrop-blur sm:flex sm:items-center sm:justify-between lg:inset-y-0 lg:inset-x-auto lg:w-96 lg:rounded-tl-lg lg:rounded-br-none lg:flex-col lg:items-start">
                    <div>
                        <h2 class="text-xl font-bold text-white">Community Forum</h2>
                        <p class="mt-1 text-sm text-gray-300">
                            "Join our marketplace community forum for insights, networking, and updates. Connect with
                            peers and stay informed."</p>
                    </div>
                    <a href="{{ url('forum') }}"
                        class="mt-6 flex-shrink-0 flex bg-white bg-opacity-0 py-3 px-4 border border-white border-opacity-25 rounded-md items-center justify-center text-base font-medium text-white hover:bg-opacity-10 sm:mt-0 sm:ml-8 lg:ml-0 lg:w-full">Join
                        Now</a>
                </div>
            </div>
        </div>

    </div>
    </div>
    <hr>
    <footer class="bg-white" aria-labelledby="footer-heading">
        <h2 id="footer-heading" class="sr-only">Footer</h2>
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
            <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                <div class="grid grid-cols-2 gap-8 xl:col-span-2">
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Solutions</h3>
                            <ul role="list" class="mt-4 space-y-4">
                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Marketing </a>
                                </li>

                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Analytics </a>
                                </li>

                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Commerce </a>
                                </li>

                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Insights </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-12 md:mt-0">
                            <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Support</h3>
                            <ul role="list" class="mt-4 space-y-4">
                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Pricing </a>
                                </li>

                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Documentation </a>
                                </li>

                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Guides </a>
                                </li>

                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> API Status </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Company</h3>
                            <ul role="list" class="mt-4 space-y-4">
                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> About </a>
                                </li>

                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Blog </a>
                                </li>

                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Jobs </a>
                                </li>

                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Press </a>
                                </li>

                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Partners </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-12 md:mt-0">
                            <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Legal</h3>
                            <ul role="list" class="mt-4 space-y-4">
                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Claim </a>
                                </li>

                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Privacy </a>
                                </li>

                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Terms </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mt-8 xl:mt-0">
                    <p class="mt-8 text-base text-gray-400 md:mt-0 md:order-1">&copy; 2020 Workflow, Inc. All rights
                        reserved.</p>
                </div>
            </div>
            <div class="mt-8 border-t border-gray-200 pt-8 md:flex md:items-center md:justify-between">
                <div class="flex space-x-6 md:order-2">
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>

                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>

                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Twitter</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>

                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">GitHub</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>

                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Dribbble</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
                <p class="mt-8 text-base text-gray-400 md:mt-0 md:order-1">&copy; 2020 Workflow, Inc. All rights
                    reserved.</p>
            </div>
        </div>
    </footer>
</x-app-layout>
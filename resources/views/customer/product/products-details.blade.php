<x-app-layout>
    <div class="">
        <div class="relative mb-12 px-4">
            <div class="bg-white">
                <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8">
                    <div class="lg:max-w-lg lg:self-end">
                        <nav aria-label="Breadcrumb">
                            <ol role="list" class="flex items-center space-x-2">
                                <li>
                                    <div class="flex items-center text-sm">
                                        <a href="#" class="font-medium text-gray-500 hover:text-gray-900">{{ $product->category }}  </a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                        <div class="mt-4">
                            <h1 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl"></h1>
                        </div>
                        <section aria-labelledby="information-heading" class="mt-4">
                            <h2 id="information-heading" class="sr-only">Product information</h2>
                            <div class="flex items-center">
                                <p class="text-lg text-gray-900 sm:text-xl">₱{{ $product->price }}</p>
                                <div class="ml-4 pl-4 border-l border-gray-300">
                                    <h2 class="sr-only">Reviews</h2>
                                    <div class="flex items-center">
                                        <p class="ml-2 text-sm text-gray-500">{{ $product->condition }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 space-y-6">
                                <p class="text-base text-gray-500">{{ $product->details }}</p>
                            </div>
                            <div class="mt-6 flex items-center">
                                <p class="flex text-sm text-gray-700 space-x-2">
                                    @if($product->availability == 'Available')
                                    <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>{{ $product->availability }}</span>
                                    @elseif($product->availability == 'Sold')
                                    <svg class="flex-shrink-0 h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>{{ $product->availability }}</span>
                                    @endif                         
                                </p>
                            </div>
                        </section>
                    </div>
                    <div class="mt-10 lg:mt-0 lg:col-start-2 lg:row-span-2 lg:self-center">
                        <div class="w-full mb-8 md:mb-0">
                            <div class="sticky top-0 z-50 overflow-hidden">
                                @php
                                $imagePathsArray = explode('|', $product->images);
                                @endphp
                                <div class="flex flex-wrap md:flex ">
                                    @foreach ($imagePathsArray as $image)
                                    <div class="w-full md:w-1/2 p-2">
                                        <a href="#" class="block border rounded-md">
                                        <img src="{{ asset('storage/' . $image) }}" alt="" class="object-cover w-full h-[17rem]">
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10 lg:max-w-lg lg:col-start-1 lg:row-start-2 lg:self-start">
                        <section aria-labelledby="options-heading">
                            <h2 id="options-heading" class="sr-only">Product options</h2>
                            <form>
                                <div class="sm:flex sm:justify-between">
                                </div>
                                <div class="mt-4">
                                    <div class="group inline-flex text-sm text-gray-500 hover:text-gray-700">
                                        <span class="group inline-flex text-sm text-gray-500 hover:text-gray-700">Buy this item?</span>
                                    </div>
                                </div>
                                <div class="mt-10">
                                    <a href="{{ route('messages.create', $product) }}" class="w-full bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500">Message Seller</a>
                                </div>
                                <div class="mt-6 text-center">
                                    <a href="{{ route('seller-profile.show',$product->user->id ) }}" class="group inline-flex text-base font-medium">
                                        <svg class="flex-shrink-0 mr-2 h-6 w-6 text-gray-500 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <span class="text-gray-500 hover:text-gray-700">{{ $product->user->name }}</span>
                                    </a>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer aria-labelledby="footer-heading" class="bg-white">
        <h2 id="footer-heading" class="sr-only">Footer</h2>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="py-20 xl:grid xl:grid-cols-3 xl:gap-8">
                <div class="grid grid-cols-2 gap-8 xl:col-span-2">
                    <div class="space-y-16 md:space-y-0 md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm font-medium text-gray-900">Shop</h3>
                            <ul role="list" class="mt-6 space-y-6">
                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600"> Bags </a>
                                </li>
                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600"> Tees </a>
                                </li>
                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600"> Objects </a>
                                </li>
                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600"> Home Goods </a>
                                </li>
                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600"> Accessories </a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-900">Company</h3>
                            <ul role="list" class="mt-6 space-y-6">
                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600"> Who we are </a>
                                </li>
                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600"> Sustainability </a>
                                </li>
                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600"> Press </a>
                                </li>
                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600"> Careers </a>
                                </li>
                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600"> Terms &amp; Conditions </a>
                                </li>
                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600"> Privacy </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="space-y-16 md:space-y-0 md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm font-medium text-gray-900">Account</h3>
                            <ul role="list" class="mt-6 space-y-6">
                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600"> Manage Account </a>
                                </li>
                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600"> Returns &amp; Exchanges </a>
                                </li>
                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600"> Redeem a Gift Card </a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-900">Connect</h3>
                            <ul role="list" class="mt-6 space-y-6">
                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600"> Contact Us </a>
                                </li>
                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600"> Twitter </a>
                                </li>
                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600"> Instagram </a>
                                </li>
                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600"> Pinterest </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mt-16 md:mt-16 xl:mt-0">
                    <h3 class="text-sm font-medium text-gray-900">Sign up for our newsletter</h3>
                    <p class="mt-6 text-sm text-gray-500">The latest deals and savings, sent to your inbox weekly.</p>
                    <form class="mt-2 flex sm:max-w-md">
                        <label for="email-address" class="sr-only">Email address</label>
                        <input id="email-address" type="text" autocomplete="email" required class="appearance-none min-w-0 w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-4 text-base text-indigo-500 placeholder-gray-500 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                        <div class="ml-4 flex-shrink-0">
                            <button type="submit" class="w-full bg-indigo-600 border border-transparent rounded-md shadow-sm py-2 px-4 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Sign up</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="border-t border-gray-200 py-10">
                <p class="text-sm text-gray-500">Copyright &copy; 2021 Clothing Company Inc.</p>
            </div>
        </div>
    </footer>
</x-app-layout>
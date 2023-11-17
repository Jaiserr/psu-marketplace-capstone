<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex gap-2 items-center justify-between">
                <h2 class="text-lg">Available Products</h2>
                <div class="relative">
                    <div class="ml-4 flow-root lg:ml-6">
                        <a href="#" class="group -m-2 flex items-center p-2">
                            <svg class="h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                            </svg>
                            <a class="block" href="{{ route('wishlist.index') }}">Wishlist</a>
                            <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">
                                {{ $wishlistItemsCount }}
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <section class="flex items-center mt-10">
                <div class="p-4 mx-auto ">
                    <div class="grid grid-cols-1 gap-4 lg:gap-4 sm:gap-4 sm:grid-cols-2 lg:grid-cols-4">
                        @foreach ($products as $product)
                        @php
                        $imagePathsArray = explode('|', $product->images);
                        @endphp

                        <div class="overflow-hidden border  rounded shadow-lg">
                            <a href="#" class="relative block h-64 overflow-hidden">
                                <img class="object-cover w-full h-full transition-all hover:scale-110"
                                    src="{{ asset('storage/' . $imagePathsArray[0]) }}" alt="">
                            </a>
                            <div class="relative  z-20 p-8 -mt-14 ">
                                <span
                                    class="inline-block px-4 py-2 mb-3 text-base font-bold text-white bg-blue-500 rounded">
                                    ₱{{ $product->price }}
                                </span>
                                <h2 class="mb-2 text-xl font-bold text-black">
                                    {{ $product->product_name }}
                                </h2>
                                <p>
                                    {{ $product->details }}
                                </p>
                                <p class="mb-4">
                                    Seller: {{ $product->user->name }}
                                </p>

                                <form action="{{ route('wishlist.add', $product) }}" method="POST">
                                    @csrf
                                    <button
                                        class="w-full px-4 py-2 text-base font-bold text-white uppercase bg-blue-500 border border-blue-500 rounded focus:outline-none focus:border-blue-700 hover:bg-blue-600">
                                        Add to wishlist
                                    </button>
                                </form>

                                <a href="{{ route('messages.create', $product) }}"
                                    class="transform active:scale-[.98] mt-2 flex w-full items-center justify-center rounded-md border border-transparent bg-[#DE3151] py-3 px-8 text-base font-medium text-white hover:bg-[#d22544] focus:outline-none focus:ring-2 focus:ring-[#DE3151] focus:ring-offset-2">
                                    Message
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-app-layout>
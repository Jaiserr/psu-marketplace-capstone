<x-app-layout>
    <div class="bg-white">
        <div class="max-w-2xl mx-auto pt-16 pb-24 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <h1 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Wishlist</h1>
            <form class="mt-12 lg:grid lg:grid-cols-12 lg:gap-x-12 lg:items-start xl:gap-x-16">
                <section aria-labelledby="cart-heading" class="lg:col-span-12">
                    <h2 id="cart-heading" class="sr-only">Items in your shopping cart</h2>
                    <ul role="list" class="border-t border-b border-gray-200 divide-y divide-gray-200">
                        @if($wishlistItems->isEmpty())
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <h2 class="text-4xl font-extrabold tracking-tight text-gray-900">No Wishlist Items</h2>
                        </div>
                        @else
                        @foreach($wishlistItems as $wishlistItem)
                        @php
                        $imagePathsArray = explode('|', $wishlistItem->product->images);
                        @endphp
                        <li class="flex py-6 sm:py-10">
                            <div class="flex-shrink-0">
                                <img src="{{ asset('storage/' . $imagePathsArray[0]) }}" alt="Front of men&#039;s Basic Tee in sienna." class="w-24 h-24 rounded-md object-center object-cover sm:w-48 sm:h-48">
                            </div>
                            <div class="ml-4 flex-1 flex flex-col justify-between sm:ml-6">
                                <div class="relative pr-9 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:pr-0">
                                    <div>
                                        <div class="flex justify-between">
                                            <h3 class="text-sm">
                                                <a href="#" class="font-medium text-gray-700 hover:text-gray-800"> {{ $wishlistItem->product->product_name }} </a>
                                            </h3>
                                        </div>
                                        <div class="mt-1 flex text-sm">
                                            <p class="text-gray-500">{{ $wishlistItem->product->category }}</p>
                                            <p class="ml-4 pl-4 border-l border-gray-200 text-gray-500">{{ $wishlistItem->product->condition }}</p>
                                        </div>
                                        <p class="mt-1 text-sm font-medium text-gray-900">₱{{ $wishlistItem->product->price }}</p>
                                    </div>
                                    <div class="mt-4 sm:mt-0 sm:pr-9">
                                        <div class="absolute top-0 right-0">
                                            <button type="button" class="-m-2 p-2 inline-flex text-gray-400 hover:text-gray-500">
                                                <span class="sr-only">Remove</span>
                                                <!-- Heroicon name: solid/x -->
                                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-4 flex text-sm text-gray-700 space-x-2">
                                    @if($wishlistItem->product->availability == 'Available')
                                    <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>{{ $wishlistItem->product->availability }}</span>
                                    @elseif($wishlistItem->product->availability == 'Sold')
                                    <svg class="flex-shrink-0 h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>{{ $wishlistItem->product->availability }}</span>
                                    @endif  
                                </p>
                            </div>
                        </li>
                        @endforeach
                        @endif
                    </ul>
                </section>
            </form>
        </div>
    </div>
</x-app-layout>
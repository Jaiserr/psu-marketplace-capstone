{{-- <div x-show="activeTab === 'tab1'" class="py-4">
    <div class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-10 lg:grid-cols-3 lg:gap-x-8">
        @foreach ($seller->products as $product)
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
</div> --}}
<div x-show="activeTab === 'tab1'" class="bg-white">
    <div class="py-8 lg:max-w-7xl lg:mx-auto">
        <div class="px-4 flex items-center justify-between sm:px-6 lg:px-0">
            <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Seller Listing</h2>
        </div>
        <div class="mt-8 relative">
            <div class="relative w-full pb-6 -mb-6 overflow-x-auto">
                <ul role="list" class="mx-4 inline-flex space-x-8 sm:mx-6 lg:mx-0 lg:space-x-0 lg:grid lg:grid-cols-4 lg:gap-x-8">
                    @foreach ($seller->products as $product)
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
                                    Add to wishlist
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
        <div class="mt-12 flex px-4 sm:hidden">
            <a href="#" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">See everything<span aria-hidden="true"> &rarr;</span></a>
        </div>
    </div>
</div>
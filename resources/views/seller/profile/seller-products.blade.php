<div x-show="activeTab === 'tab3'" class="py-4">
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
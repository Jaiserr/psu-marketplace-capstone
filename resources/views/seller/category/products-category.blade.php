<x-app-layout>
    <div class="bg-white">
        <div class="max-w-2xl mx-auto px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
          <h2 class="text-xl font-bold text-gray-900">Customers also bought</h2>
      
          <div class="mt-8 grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
            @forelse ($products as $product)
                @php
                $imagePathsArray = explode('|', $product->images);
                @endphp
            <div>
              <div class="relative">
                <div class="relative w-full h-72 rounded-lg overflow-hidden">
                  <a href="{{ route('product.details', $product->id) }}">
                    <img src="{{ asset('storage/' . $imagePathsArray[0]) }}" alt="Front of zip tote bag with white canvas, black canvas straps and handle, and black zipper pulls." class="w-full h-full object-center object-cover">
                  </a>
                </div>
                <div class="relative mt-4">
                  <a href="{{ route('product.details', $product->id) }}">
                  <h3 class="text-sm font-medium text-gray-900">{{ $product->product_name }}</h3>

                  </a>
                  <p class="mt-1 text-sm text-gray-500">{{ $product->condition }}</p>
                  <span
                        class="mr-3 uppercase text-xs {{ $product->availability === 'Available' ? 'text-green-500' : 'text-red-500' }}">{{
                        $product->availability }}</span>
                </div>
                <div class="absolute top-0 inset-x-0 h-72 rounded-lg p-4 flex items-end justify-end overflow-hidden">
                  <div aria-hidden="true" class="absolute inset-x-0 bottom-0 h-36 bg-gradient-to-t from-black opacity-50"></div>
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
          @endif                  </div>
            </div>
            @empty
                no products listed
                @endforelse
          </div>
        </div>
    </div>
    {{-- <div class="bg-white">
        <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
            
          <h2 class="text-xl font-bold text-gray-900">Category Items</h2>
      
          <div class="mt-8 grid grid-cols-2 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
            @forelse ($products as $product)
                @php
                $imagePathsArray = explode('|', $product->images);
                @endphp
            <div>
                
              <div class="relative">
                
                <div class="relative w-full h-72 rounded-lg overflow-hidden">
                    <a href="">
                        <img src="{{ asset('storage/' . $imagePathsArray[0]) }}" alt="Front of zip tote bag with white canvas, black canvas straps and handle, and black zipper pulls." class="w-full h-full object-center object-cover">              
                    </a>
                </div>
                <div class="relative mt-4">
                  <h3 class="text-sm font-medium text-gray-900">{{ $product->product_name }}</h3>
                  <p class="mt-1 text-sm text-gray-500">{{ $product->condition }}</p>
                  <span
                        class="mr-3 uppercase text-xs {{ $product->availability === 'Available' ? 'text-green-500' : 'text-red-500' }}">{{
                        $product->availability }}</span>
                </div>
                <div class="absolute top-0 inset-x-0 h-72 rounded-lg p-4 flex items-end justify-end overflow-hidden">
                  <div aria-hidden="true" class="absolute inset-x-0 bottom-0 h-36 bg-gradient-to-t from-black opacity-50"></div>
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
                                class="w-full px-4 py-2 text-base font-bold text-white uppercase bg-blue-400 border border-blue-400 rounded focus:outline-none focus:border-blue-700 hover:bg-blue-600">
                                Product Sold
                        </button>
              </div>
              @endif
              
            </div>
            @empty
                no products listed
                @endforelse
            
      
            <!-- More products... -->
          </div>
        </div>
    </div> --}}
</x-app-layout>
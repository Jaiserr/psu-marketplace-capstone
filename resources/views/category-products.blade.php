<x-app-layout>
    <nav class="flex pl-5 pt-5 lg:max-w-7xl lg:mx-auto lg:px-8" aria-label="Breadcrumb">
        <ol role="list" class="bg-white rounded-md shadow px-6 flex space-x-4">
          <li class="flex">
            <div class="flex items-center">
              <a href="{{ url('/dashboard') }}" class="text-gray-400 hover:text-gray-500">
                <!-- Heroicon name: solid/home -->
                <svg class="flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                </svg>
                <span class="sr-only">Home</span>
              </a>
            </div>
          </li>
      
          <li class="flex">
            <div class="flex items-center">
              <svg class="flex-shrink-0 w-6 h-full text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
              </svg>
              <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Products</a>
            </div>
          </li>
        </ol>
    </nav>
    <div class="bg-white">
        @foreach ($productsByCategory as $category => $products)
        <div class="py-10 sm:py-10 lg:max-w-7xl lg:mx-auto lg:px-8">
            <div class="px-4 flex items-center justify-between sm:px-6 lg:px-0">
                <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">{{ $category }}</h2>
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
        </div>
        @endforeach
    </div>
    {{-- <div class="bg-white">
        @foreach ($productsByCategory as $category => $products)
        <div class="max-w-2xl mx-auto py-16 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <h2 class="text-xl font-bold text-gray-900">{{ $category }}</h2>
            <a href="{{ url('category-products') }}" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500 sm:block">Browse all products<span aria-hidden="true"> &rarr;</span></a>
            <div class="mt-8 grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
                @foreach ($products as $product)
                @php
                $imagePathsArray = explode('|', $product->images);
                @endphp
                <div>
                    <div class="relative">
                        <div class="relative w-full h-72 rounded-lg overflow-hidden">
                            <img src="{{ asset('storage/' . $imagePathsArray[0]) }}" alt="Front of zip tote bag with white canvas, black canvas straps and handle, and black zipper pulls." class="w-full h-full object-center object-cover">
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
                        <button class="w-full px-4 py-2 text-base font-bold text-white uppercase bg-red-400 border border-red-400 rounded focus:outline-none focus:border-red-700 hover:bg-red-600">
                        Product Sold
                        </button>
                        @endif
                    </div>
                </div>
                @endforeach
                <!-- More products... -->
            </div>
        </div>
        @endforeach  
    </div> --}}
</x-app-layout>
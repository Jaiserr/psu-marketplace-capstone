<x-app-layout>
  {{-- <div class="bg-white">
    <div class="py-16 sm:py-24 lg:max-w-7xl lg:mx-auto lg:px-8">
        <div class="px-4 flex items-center justify-between sm:px-6 lg:px-0">
            <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Products</h2>
        </div>
        <div class="mt-8 relative">
            <div class="relative w-full pb-6 -mb-6 overflow-x-auto">
                <ul role="list" class="mx-4 inline-flex space-x-8 sm:mx-6 lg:mx-0 lg:space-x-0 lg:grid lg:grid-cols-4 lg:gap-x-8">
                    @forelse ($products as $product)
                    @php
                    $imagePathsArray = explode('|', $product->images);
                    @endphp
                    <li class="w-64 mb-8 inline-flex flex-col text-center lg:w-auto">
                        <a href="{{ route('product.details', $product->id) }}">
                            <div class="relative w-full h-72 rounded-lg overflow-hidden">
                                <div class="w-full bg-gray-200 rounded-md overflow-hidden aspect-w-1 aspect-h-1">
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
                        @empty
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                          <h2 class="text-4xl font-extrabold tracking-tight text-gray-900">No Added Products</h2>
                        </div>
                    </li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
  </div> --}}
  <div class="bg-white">
    <div class="py-16 sm:py-24 lg:max-w-7xl lg:mx-auto lg:px-8">
        <div class="px-4 flex items-center justify-between sm:px-6 lg:px-0">
            <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Products</h2>
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
</x-app-layout>
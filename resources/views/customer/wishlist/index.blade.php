<x-app-layout>
    <div class="py-12">
        {{-- <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($wishlistItems->isEmpty())
            <p>Your wishlist is empty.</p>
            @else
            <ul>
                @foreach($wishlistItems as $wishlistItem)
                <li>{{ $wishlistItem->product->product_name }} - {{ $wishlistItem->product->price }}</li>
                @endforeach
            </ul>
            @endif
        </div> --}}
        <!--
  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
        <div class="bg-white">
            <div class="mx-auto max-w-2xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                <h2 class="text-2xl font-bold tracking-tight text-gray-900">Your wishlist</h2>
                <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                    @if($wishlistItems->isEmpty())
                    <p>Your wishlist is empty.</p>
                    @else
                    @foreach($wishlistItems as $wishlistItem)
                    @php
                    $imagePathsArray = explode('|', $wishlistItem->product->images);
                    @endphp
                    <div class="group relative">
                        <div
                            class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                            <img src="{{ asset('storage/' . $imagePathsArray[0]) }}"
                                alt="Front of men&#039;s Basic Tee in black."
                                class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        {{ $wishlistItem->product->product_name }}
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">Seller: {{ $wishlistItem->product->user->name }}
                                </p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">
                                ₱{{ $wishlistItem->product->price }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
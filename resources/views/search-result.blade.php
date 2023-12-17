<x-app-layout>
    <div class="bg-white">
        <div class="overflow-hidden mb-4 border-b border-gray-200">
            <div class="pl-2">
                <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Search Results for "<strong class="text-blue-500">{{ $query }}</strong>"</h2>
            </div>      
            <div class="grid grid-cols-2 sm:mx-0 md:grid-cols-3 lg:grid-cols-6">
                @foreach ($results as $product)
                @php
                $imagePathsArray = explode('|', $product->images);
                @endphp
                <div class="group relative p-2">
                    
                  <div class="relative w-full h-72 rounded-lg overflow-hidden bg-gray-200 aspect-w-1 aspect-h-1 group-hover:opacity-75">
                    <a href="{{ route('product.details', $product->id) }}">
                    <img src="{{ asset('storage/' . $imagePathsArray[0]) }}" alt="TODO" class="w-full h-full object-center object-cover">
                    </a>
                  </div>
                  <div class="pt-5 text-start">
                    <div class="flex justify-between">
                    <h3 class="text-sm font-medium text-gray-900">
                      <a href="{{ route('product.details', $product->id) }}">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        {{ $product->product_name }}
                      </a>
                    </h3>
                    <form action="{{ route('wishlist.add', $product) }}"
                    method="POST">
                    @csrf
                    <button type="submit">
                    <svg class="w-6 h-6 text-yellow-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 20">
                        <path d="M13 20a1 1 0 0 1-.64-.231L7 15.3l-5.36 4.469A1 1 0 0 1 0 19V2a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v17a1 1 0 0 1-1 1Z"/>
                    </svg>
                    </button>
                    </form>
                    </div>
                    
                    <div class="flex flex-col items-start">
                      <p class="text-sm text-gray-500">{{ $product->condition }}</p>
                    </div>
                    <p class="text-base font-medium text-gray-900">₱{{ $product->price }}</p>
                  </div>
                </div>
                @endforeach
              </div>
        </div>
    </div>
</x-app-layout>
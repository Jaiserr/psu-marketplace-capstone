<x-app-layout>
    <div class="bg-transparent">
        <div class="overflow-hidden mb-8 border-b border-gray-200">
            <div class="px-2 flex justify-between bg-gradient-to-r from-blue-100 via-violet-200 to-purple-200 shadow-lg py-3 rounded-full mb-2">
                <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">{{ $category }}</h2>
            </div>
          <div class="grid grid-cols-2 sm:mx-0 md:grid-cols-3 lg:grid-cols-6">
            @foreach ($products as $product)
            @php
            $imagePathsArray = explode('|', $product->images);
            @endphp
            <div class="group relative p-2">
                
              <div class="relative shadow-lg shadow-indigo-500/50 w-full h-72 rounded-lg overflow-hidden bg-gray-200 aspect-w-1 aspect-h-1 group-hover:opacity-75">
                <a href="{{ route('product.details', $product->id) }}">
                <img src="{{ asset('storage/' . $imagePathsArray[0]) }}" alt="TODO" class="w-full h-full object-center object-cover">
                </a>
              </div>
              <div class="pt-5 text-start">
                <h3 class="text-sm font-medium text-gray-900">
                  <a href="{{ route('product.details', $product->id) }}">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    {{ $product->product_name }}
                  </a>
                </h3>
                <div class="flex flex-col items-start">
                    <p class="text-sm text-gray-500">{{ $product->category }}</p>
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
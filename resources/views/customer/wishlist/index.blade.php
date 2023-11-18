<x-app-layout>
        <div class="bg-white">
            <div class="max-w-4xl mx-auto py-10 px-4 sm:py-24 sm:px-6 lg:px-8">
              <h1 class="text-3xl font-extrabold tracking-tight text-gray-900">Shopping Cart</h1>
          
              
                <div class="mt-12">
                  <h2 class="sr-only">Items in your shopping cart</h2>
          
                  <ul role="list" class="border-t border-b border-gray-200 divide-y divide-gray-200">
                    @if($wishlistItems->isEmpty())
                    <p>Your wishlist is empty.</p>
                    @else
                    @foreach($wishlistItems as $wishlistItem)
                    @php
                    $imagePathsArray = explode('|', $wishlistItem->product->images);
                    @endphp
                    <li class="flex py-6 sm:py-10">
                      <div class="flex-shrink-0">
                        <img src="{{ asset('storage/' . $imagePathsArray[0]) }}" alt="Insulated bottle with white base and black snap lid." class="w-24 h-24 rounded-lg object-center object-cover sm:w-32 sm:h-32">
                      </div>
          
                      <div class="relative ml-4 flex-1 flex flex-col justify-between sm:ml-6">
                        <div>
                          <div class="flex justify-between sm:grid sm:grid-cols-2">
                            <div class="pr-6">
                              <h3 class="text-sm">
                                <a href="#" class="font-medium text-gray-700 hover:text-gray-800"> {{ $wishlistItem->product->product_name }} </a>
                              </h3>
                              <p class="mt-1 text-sm text-gray-500">{{ $wishlistItem->product->condition }}</p>
                            </div>
          
                            <p class="text-sm font-medium text-gray-900 text-right">₱{{ $wishlistItem->product->price }}</p>
                          </div>
          
                          <div class="mt-4 flex items-center sm:block sm:absolute sm:top-0 sm:left-1/2 sm:mt-0">
                            <button type="button" class="ml-4 text-sm font-medium text-indigo-600 hover:text-indigo-500 sm:ml-0 sm:mt-3">
                              <span>Remove</span>
                            </button>
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
                    <!-- More products... -->
                  </ul>
                </div>
          
                <!-- Order summary -->
                
              </form>
            </div>
          </div>


</x-app-layout>
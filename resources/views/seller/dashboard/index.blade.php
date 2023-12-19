<x-app-layout>
    <div class="bg-transparent">
        <div class="overflow-hidden mb-8 border-b border-gray-200">
            <div class="px-2 flex justify-between bg-gradient-to-r from-blue-100 via-violet-200 to-purple-200 shadow-lg py-3 rounded-full mb-2">
                <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Newly Added Items</h2>
            </div>
          <div class="grid grid-cols-2 sm:mx-0 md:grid-cols-3 lg:grid-cols-6">
            @foreach ($products as $product)
            @php
            $imagePathsArray = explode('|', $product->images);
            @endphp
            <div class="group relative p-2">
                
              <div class="relative w-full shadow-lg shadow-indigo-500/50 h-72 rounded-lg overflow-hidden bg-gray-200 aspect-w-1 aspect-h-1 group-hover:opacity-75">
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
                        <p class="text-sm text-gray-900">{{ $product->category }}</p>
                    </div>
                    <div class="flex flex-col items-start">
                        <p class="text-sm text-gray-900">{{ $product->condition }}</p>
                    </div>
                    <p class="text-base font-medium text-gray-900">₱{{ $product->price }}</p>
                </div>
            </div>
            @endforeach
          </div>
        </div>
    </div>
    <div class="bg-transparent">
        <div class="overflow-hidden mb-8 border-b border-gray-200">
            <div class="px-2 flex justify-between bg-gradient-to-r from-blue-100 via-violet-200 to-purple-200 shadow-lg py-3 rounded-full mb-2">
              <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Academic Resource Exchange Items</h2>
              <a href="{{ url('academic-resource-exchange-products')}}"><h2 class="text-md underline font-medium tracking-tight text-blue-600">See All</h2></a>
            </div>    
            <div class="grid grid-cols-2 sm:mx-0 md:grid-cols-3 lg:grid-cols-6">
                @foreach ($productsExchange as $product)
                @php
                $imagePathsArray = explode('|', $product->images);
                @endphp
                <div class="group relative p-2">            
                    <div class="relative w-full h-72 rounded-lg shadow-lg shadow-indigo-500/50 overflow-hidden bg-gray-200 aspect-w-1 aspect-h-1 group-hover:opacity-75">
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
                            <p class="text-sm text-gray-500">{{ $product->condition }}</p>
                        </div>
                        <p class="text-base font-medium text-gray-900">₱{{ $product->price }}</p>
                    </div>
                </div>
                @endforeach
              </div>
        </div>
    </div>
    <div class="bg-transparent">
        <div class="overflow-hidden mb-8 border-b border-gray-200">
            <div class="px-2 flex justify-between bg-gradient-to-r from-blue-100 via-violet-200 to-purple-200 shadow-lg py-3 rounded-full mb-2">
              <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">School Uniforms & Supplies</h2>
              <a href="{{ route('products.by.category', 'School Uniforms & Supplies') }}"><h2 class="text-md underline font-medium tracking-tight text-blue-600">See All</h2></a>
          </div>     
            <div class="grid grid-cols-2 sm:mx-0 md:grid-cols-3 lg:grid-cols-6">
                @foreach ($productsSchool as $product)
                @php
                $imagePathsArray = explode('|', $product->images);
                @endphp
                <div class="group relative p-2">
                    
                  <div class="relative w-full h-72 rounded-lg shadow-lg shadow-indigo-500/50 overflow-hidden bg-gray-200 aspect-w-1 aspect-h-1 group-hover:opacity-75">
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
                      <p class="text-sm text-gray-500">{{ $product->condition }}</p>
                    </div>
                    <p class="text-base font-medium text-gray-900">₱{{ $product->price }}</p>
                  </div>
                </div>
                @endforeach
              </div>
        </div>
    </div>
    <div class="bg-transparent">
        <div class="overflow-hidden mb-8 border-b border-gray-200">
            <div class="px-2 flex justify-between bg-gradient-to-r from-blue-100 via-violet-200 to-purple-200 shadow-lg py-3 rounded-full mb-2">
              <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Mobile Phones & Gadgets</h2>
              <a href="{{ route('products.by.category', 'Mobile Phones & Gadgets') }}"><h2 class="text-md underline font-medium tracking-tight text-blue-600">See All</h2></a>
            </div>     
            <div class="grid grid-cols-2 sm:mx-0 md:grid-cols-3 lg:grid-cols-6">
                @foreach ($productsMobile as $product)
                @php
                $imagePathsArray = explode('|', $product->images);
                @endphp
                <div class="group relative p-2">
                    
                  <div class="relative w-full h-72 rounded-lg shadow-lg shadow-indigo-500/50 overflow-hidden bg-gray-200 aspect-w-1 aspect-h-1 group-hover:opacity-75">
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
                      <p class="text-sm text-gray-500">{{ $product->condition }}</p>
                    </div>
                    <p class="text-base font-medium text-gray-900">₱{{ $product->price }}</p>
                  </div>
                </div>
                @endforeach
              </div>
        </div>
    </div>
    <div class="bg-transparent">
        <div class="overflow-hidden mb-8 border-b border-gray-200">
            <div class="px-2 flex justify-between bg-gradient-to-r from-blue-100 via-violet-200 to-purple-200 shadow-lg py-3 rounded-full mb-2">
              <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Men's Fashion</h2>
              <a href="{{ route('products.by.category', 'Men Fashion') }}"><h2 class="text-md underline font-medium tracking-tight text-blue-600">See All</h2></a>
            </div>  
            <div class="grid grid-cols-2 sm:mx-0 md:grid-cols-3 lg:grid-cols-6">
                @foreach ($productsMen as $product)
                @php
                $imagePathsArray = explode('|', $product->images);
                @endphp
                <div class="group relative p-2">
                    
                  <div class="relative w-full h-72 rounded-lg shadow-lg shadow-indigo-500/50 overflow-hidden bg-gray-200 aspect-w-1 aspect-h-1 group-hover:opacity-75">
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
                      <p class="text-sm text-gray-500">{{ $product->condition }}</p>
                    </div>
                    <p class="text-base font-medium text-gray-900">₱{{ $product->price }}</p>
                  </div>
                </div>
                @endforeach
              </div>
        </div>
    </div>
    <div class="bg-transparent">
        <div class="overflow-hidden mb-8 border-b border-gray-200">
            <div class="px-2 flex justify-between bg-gradient-to-r from-blue-100 via-violet-200 to-purple-200 shadow-lg py-3 rounded-full mb-2">
              <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Women's Fashion</h2>
              <a href="{{ route('products.by.category', 'Women Fashion') }}"><h2 class="text-md underline font-medium tracking-tight text-blue-600">See All</h2></a>
            </div>     
            <div class="grid grid-cols-2 sm:mx-0 md:grid-cols-3 lg:grid-cols-6">
                @foreach ($productsWomen as $product)
                @php
                $imagePathsArray = explode('|', $product->images);
                @endphp
                <div class="group relative p-2">
                    
                  <div class="relative w-full h-72 rounded-lg shadow-lg shadow-indigo-500/50 overflow-hidden bg-gray-200 aspect-w-1 aspect-h-1 group-hover:opacity-75">
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
                      <p class="text-sm text-gray-500">{{ $product->condition }}</p>
                    </div>
                    <p class="text-base font-medium text-gray-900">₱{{ $product->price }}</p>
                  </div>
                </div>
                @endforeach
              </div>
        </div>
    </div>
    <div class="bg-transparent">
        <div class="overflow-hidden mb-8 border-b border-gray-200">  
            <div class="px-2 flex justify-between bg-gradient-to-r from-blue-100 via-violet-200 to-purple-200 shadow-lg py-3 rounded-full mb-2">
              <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Computer & Techs</h2>
              <a href="{{ route('products.by.category', 'Computer & Techs') }}"><h2 class="text-md underline font-medium tracking-tight text-blue-600">See All</h2></a>
            </div>   
            <div class="grid grid-cols-2 sm:mx-0 md:grid-cols-3 lg:grid-cols-6">
                @foreach ($productsComputer as $product)
                @php
                $imagePathsArray = explode('|', $product->images);
                @endphp
                <div class="group relative p-2">
                    
                  <div class="relative w-full h-72 rounded-lg shadow-lg shadow-indigo-500/50 overflow-hidden bg-gray-200 aspect-w-1 aspect-h-1 group-hover:opacity-75">
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
                      <p class="text-sm text-gray-500">{{ $product->condition }}</p>
                    </div>
                    <p class="text-base font-medium text-gray-900">₱{{ $product->price }}</p>
                  </div>
                </div>
                @endforeach
              </div>
        </div>
    </div>
    <div class="bg-transparent">
        <div class="overflow-hidden mb-8 border-b border-gray-200">
            <div class="px-2 flex justify-between bg-gradient-to-r from-blue-100 via-violet-200 to-purple-200 shadow-lg py-3 rounded-full mb-2">
              <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Food & Drinks</h2>
              <a href="{{ route('products.by.category', 'Food & Drinks') }}"><h2 class="text-md underline font-medium tracking-tight text-blue-600">See All</h2></a>
            </div>    
            <div class="grid grid-cols-2 sm:mx-0 md:grid-cols-3 lg:grid-cols-6">
                @foreach ($productsFood as $product)
                @php
                $imagePathsArray = explode('|', $product->images);
                @endphp
                <div class="group relative p-2">
                    
                  <div class="relative w-full h-72 rounded-lg shadow-lg shadow-indigo-500/50 overflow-hidden bg-gray-200 aspect-w-1 aspect-h-1 group-hover:opacity-75">
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
                      <p class="text-sm text-gray-500">{{ $product->condition }}</p>
                    </div>
                    <p class="text-base font-medium text-gray-900">₱{{ $product->price }}</p>
                  </div>
                </div>
                @endforeach
              </div>
        </div>
    </div>
    <div class="bg-transparent">
        <div class="overflow-hidden mb-8 border-b border-gray-200">
            <div class="px-2 flex justify-between bg-gradient-to-r from-blue-100 via-violet-200 to-purple-200 shadow-lg py-3 rounded-full mb-2">
              <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Home Appliances</h2>
              <a href="{{ route('products.by.category', 'Home Appliances') }}"><h2 class="text-md underline font-medium tracking-tight text-blue-600">See All</h2></a>
            </div>    
            <div class="grid grid-cols-2 sm:mx-0 md:grid-cols-3 lg:grid-cols-6">
                @foreach ($productsHome as $product)
                @php
                $imagePathsArray = explode('|', $product->images);
                @endphp
                <div class="group relative p-2">
                    
                  <div class="relative w-full h-72 rounded-lg shadow-lg shadow-indigo-500/50 overflow-hidden bg-gray-200 aspect-w-1 aspect-h-1 group-hover:opacity-75">
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
                      <p class="text-sm text-gray-500">{{ $product->condition }}</p>
                    </div>
                    <p class="text-base font-medium text-gray-900">₱{{ $product->price }}</p>
                  </div>
                </div>
                @endforeach
              </div>
        </div>
    </div>
    <div class="bg-transparent">
        <div class="overflow-hidden mb-8 border-b border-gray-200">
            <div class="px-2 flex justify-between bg-gradient-to-r from-blue-100 via-violet-200 to-purple-200 shadow-lg py-3 rounded-full mb-2">
              <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Musical Instruments</h2>
              <a href="{{ route('products.by.category', 'Musical Instruments') }}"><h2 class="text-md underline font-medium tracking-tight text-blue-600">See All</h2></a>
            </div>    
            <div class="grid grid-cols-2 sm:mx-0 md:grid-cols-3 lg:grid-cols-6">
                @foreach ($productsMusical as $product)
                @php
                $imagePathsArray = explode('|', $product->images);
                @endphp
                <div class="group relative p-2">
                    
                  <div class="relative w-full h-72 rounded-lg shadow-lg shadow-indigo-500/50 overflow-hidden bg-gray-200 aspect-w-1 aspect-h-1 group-hover:opacity-75">
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
                      <p class="text-sm text-gray-500">{{ $product->condition }}</p>
                    </div>
                    <p class="text-base font-medium text-gray-900">₱{{ $product->price }}</p>
                  </div>
                </div>
                @endforeach
              </div>
        </div>
    </div>
    <div class="bg-transparent">
        <div class="overflow-hidden mb-8 border-b border-gray-200">  
            <div class="px-2 flex justify-between bg-gradient-to-r from-blue-100 via-violet-200 to-purple-200 shadow-lg py-3 rounded-full mb-2">
              <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Sports Equipment</h2>
              <a href="{{ route('products.by.category', 'Sports Equipment') }}"><h2 class="text-md underline font-medium tracking-tight text-blue-600">See All</h2></a>
            </div>   
            <div class="grid grid-cols-2 sm:mx-0 md:grid-cols-3 lg:grid-cols-6">
                @foreach ($productsSports as $product)
                @php
                $imagePathsArray = explode('|', $product->images);
                @endphp
                <div class="group relative p-2">
                    
                  <div class="relative w-full h-72 rounded-lg shadow-lg shadow-indigo-500/50 overflow-hidden bg-gray-200 aspect-w-1 aspect-h-1 group-hover:opacity-75">
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
                      <p class="text-sm text-gray-500">{{ $product->condition }}</p>
                    </div>
                    <p class="text-base font-medium text-gray-900">₱{{ $product->price }}</p>
                  </div>
                </div>
                @endforeach
              </div>
        </div>
    </div>
    <div class="bg-transparent">
        <div class="overflow-hidden mb-8 border-b border-gray-200">
            <div class="px-2 flex justify-between bg-gradient-to-r from-blue-100 via-violet-200 to-purple-200 shadow-lg py-3 rounded-full mb-2">
              <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Toys & Games</h2>
              <a href="{{ route('products.by.category', 'Toys & Games') }}"><h2 class="text-md underline font-medium tracking-tight text-blue-600">See All</h2></a>
            </div>    
            <div class="grid grid-cols-2 sm:mx-0 md:grid-cols-3 lg:grid-cols-6">
                @foreach ($productsToys as $product)
                @php
                $imagePathsArray = explode('|', $product->images);
                @endphp
                <div class="group relative p-2">
                    
                  <div class="relative w-full h-72 rounded-lg shadow-lg shadow-indigo-500/50 overflow-hidden bg-gray-200 aspect-w-1 aspect-h-1 group-hover:opacity-75">
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
                      <p class="text-sm text-gray-500">{{ $product->condition }}</p>
                    </div>
                    <p class="text-base font-medium text-gray-900">₱{{ $product->price }}</p>
                  </div>
                </div>
                @endforeach
              </div>
        </div>
    </div>
    <div class="bg-transparent">
        <div class="overflow-hidden mb-8 border-b border-gray-200">
            <div class="px-2 flex justify-between bg-gradient-to-r from-blue-100 via-violet-200 to-purple-200 shadow-lg py-3 rounded-full mb-2">
              <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Furniture & Home Living</h2>
              <a href="{{ route('products.by.category', 'Furniture & Home Living') }}"><h2 class="text-md underline font-medium tracking-tight text-blue-600">See All</h2></a>
            </div>     
            <div class="grid grid-cols-2 sm:mx-0 md:grid-cols-3 lg:grid-cols-6">
                @foreach ($productsFurniture as $product)
                @php
                $imagePathsArray = explode('|', $product->images);
                @endphp
                <div class="group relative p-2">
                    
                  <div class="relative w-full h-72 rounded-lg shadow-lg shadow-indigo-500/50 overflow-hidden bg-gray-200 aspect-w-1 aspect-h-1 group-hover:opacity-75">
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
                      <p class="text-sm text-gray-500">{{ $product->condition }}</p>
                    </div>
                    <p class="text-base font-medium text-gray-900">₱{{ $product->price }}</p>
                  </div>
                </div>
                @endforeach
              </div>
        </div>
    </div>
    <div class="bg-transparent">
        <div class="overflow-hidden mb-8 border-b border-gray-200"> 
            <div class="px-2 flex justify-between bg-gradient-to-r from-blue-100 via-violet-200 to-purple-200 shadow-lg py-3 rounded-full mb-2">
              <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Vehicles & Components</h2>
              <a href="{{ route('products.by.category', 'Vehicles & Components') }}"><h2 class="text-md underline font-medium tracking-tight text-blue-600">See All</h2></a>
            </div>   
            <div class="grid grid-cols-2 sm:mx-0 md:grid-cols-3 lg:grid-cols-6">
                @foreach ($productsVehicles as $product)
                @php
                $imagePathsArray = explode('|', $product->images);
                @endphp
                <div class="group relative p-2">
                    
                  <div class="relative w-full h-72 rounded-lg shadow-lg shadow-indigo-500/50 overflow-hidden bg-gray-200 aspect-w-1 aspect-h-1 group-hover:opacity-75">
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
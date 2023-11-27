<x-app-layout>
    {{-- <div class="">
        <div class="relative mb-12 px-4">
            <div class="bg-white">
                <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8">
                    <!-- Product details -->
                    <div class="lg:max-w-lg lg:self-end">
                        <nav aria-label="Breadcrumb">
                            <ol role="list" class="flex items-center space-x-2">
                                <li>
                                    <div class="flex items-center text-sm">
                                        <a href="#" class="font-medium text-gray-500 hover:text-gray-900">{{ $product->category }}  </a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                        <div class="mt-4">
                            <h1 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">{{ $product->product_name }}</h1>
                        </div>
                        <section aria-labelledby="information-heading" class="mt-4">
                            <h2 id="information-heading" class="sr-only">Product information</h2>
                            <div class="flex items-center">
                                <p class="text-lg text-gray-900 sm:text-xl">₱{{ $product->price }}</p>
                                <div class="ml-4 pl-4 border-l border-gray-300">
                                    <h2 class="sr-only">Reviews</h2>
                                    <div class="flex items-center">
                                        <p class="ml-2 text-sm text-gray-500">{{ $product->condition }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 space-y-6">
                                <p class="text-base text-gray-500">{{ $product->details }}</p>
                            </div>
                            <div class="mt-6 flex items-center">
                                <!-- Heroicon name: solid/check -->
                                <p class="flex text-sm text-gray-700 space-x-2">
                                    @if($product->availability == 'Available')
                                    <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>{{ $product->availability }}</span>
                                    @elseif($product->availability == 'Sold')
                                    <svg class="flex-shrink-0 h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>{{ $product->availability }}</span>
                                    @endif                         
                                </p>
                            </div>
                        </section>
                    </div>
                    <!-- Product image -->
                    <div class="mt-10 lg:mt-0 lg:col-start-2 lg:row-span-2 lg:self-center">
                        <div class="w-full mb-8 md:mb-0">
                            <div class="sticky top-0 z-50 overflow-hidden">
                                @php
                                $imagePathsArray = explode('|', $product->images);
                                @endphp
                                <div class="flex flex-wrap md:flex ">
                                    @foreach ($imagePathsArray as $image)
                                    <div class="w-full md:w-1/2 p-2">
                                        <a href="#" class="block border rounded-md">
                                        <img src="{{ asset('storage/' . $image) }}" alt="" class="object-cover w-full h-[17rem]">
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product form -->
                    <div class="mt-10 lg:max-w-lg lg:col-start-1 lg:row-start-2 lg:self-start">
                        <section aria-labelledby="options-heading">
                            <h2 id="options-heading" class="sr-only">Product options</h2>
                            <form>
                                <div class="sm:flex sm:justify-between">
                                </div>
                                <div class="mt-4">
                                    <div class="group inline-flex text-sm text-gray-500 hover:text-gray-700">
                                        <span class="group inline-flex text-sm text-gray-500 hover:text-gray-700">Buy this item?</span>
                                    </div>
                                </div>
                                <div class="mt-10">
                                    <a href="{{ route('messages.create', $product) }}" class="w-full bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500">Message Seller</a>
                                </div>
                                <div class="mt-6 text-center">
                                    <a href="{{ route('seller-profile.show',$product->user->id ) }}" class="group inline-flex text-base font-medium">
                                        <!-- Heroicon name: outline/shield-check -->
                                        <svg class="flex-shrink-0 mr-2 h-6 w-6 text-gray-500 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <span class="text-gray-500 hover:text-gray-700">{{ $product->user->name }}</span>
                                    </a>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
        <div class="bg-white">
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
                      <a href="{{ route('category-products') }}" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Categories</a>
                    </div>
                  </li>
                  <li class="flex">
                    <div class="flex items-center">
                      <svg class="flex-shrink-0 w-6 h-full text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
                      </svg>
                      <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Product</a>
                    </div>
                  </li>
                </ol>
            </nav>
            <div class="max-w-2xl mx-auto py-8 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-x-8 lg:items-start">
                <!-- Image gallery -->
                <div class="flex flex-col-reverse">
                <!-- Image selector -->
                    @php
                    $imagePathsArray = explode('|', $product->images);
                    @endphp
                
                    <div class="carousel-container">
                        <div class="carousel-wrapper">
                            @foreach ($imagePathsArray as $image)
                                <div class="carousel-slide">
                                    <img src="{{ asset('storage/' . $image) }}" alt="Angled front view with bag zipped and handles upright." class="rounded-lg object-cover w-full h-[35rem]">
                                </div>
                            @endforeach
                        </div>
                        <div class="flex justify-between mt-5">
                            <button onclick="changeSlide(-1)" class="bg-blue-400 hover:bg-blue-600 text-white font-bold py-2 px-16 rounded-lg">
                            Prev
                            </button>
                            <button onclick="changeSlide(1)" class="bg-blue-400 hover:bg-blue-600 text-white font-bold py-2 px-16 rounded-lg">
                            Next
                            </button>
                        </div>              
                    </div>
                </div>
        
                <!-- Product info -->
                
                <div class="mt-10 px-4 sm:px-0 sm:mt-16 lg:mt-0">
                    <h3 class="text-sm text-gray-600">{{ $product->category }}</h3>
                <h1 class="text-3xl font-extrabold tracking-tight text-gray-900">{{ $product->product_name }}</h1>
        
                <div class="mt-3">
                    <h2 class="sr-only">Product information</h2>
                    <p class="text-3xl text-gray-900">₱{{ $product->price }}</p>
                </div>

                <div class="mt-3">
                    <!-- Heroicon name: solid/check -->
                    <p class="flex text-sm text-gray-700 space-x-2">
                        @if($product->availability == 'Available')
                        <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>{{ $product->availability }}</span>
                        @elseif($product->availability == 'Sold')
                        <svg class="flex-shrink-0 h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>{{ $product->availability }}</span>
                        @endif                         
                    </p>
                </div>
        
                <div class="mt-6">        
                    <div class="text-base text-gray-700 space-y-2">
                    <h3 class="text-sm text-gray-600">Condition</h3>
                    <p>{{ $product->condition }}</p>
                    </div>
                </div>

                <div class="mt-6">        
                    <div class="text-base text-gray-700 space-y-2">
                    <h3 class="text-sm text-gray-600">Description</h3>
                    <p>{{ $product->description }}</p>
                    </div>
                </div>
        
                {{-- <form class="mt-6">
                    <!-- Colors -->
                    <div>
                    <h3 class="text-sm text-gray-600">Color</h3>
        
                    <fieldset class="mt-2">
                        <legend class="sr-only">Choose a color</legend>
                        <div class="flex items-center space-x-3">
                        <!--
                            Active and Checked: "ring ring-offset-1"
                            Not Active and Checked: "ring-2"
                        -->
                        <label class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-700">
                            <input type="radio" name="color-choice" value="Washed Black" class="sr-only" aria-labelledby="color-choice-0-label">
                            <p id="color-choice-0-label" class="sr-only">Washed Black</p>
                            <span aria-hidden="true" class="h-8 w-8 bg-gray-700 border border-black border-opacity-10 rounded-full"></span>
                        </label>
        
                        <!--
                            Active and Checked: "ring ring-offset-1"
                            Not Active and Checked: "ring-2"
                        -->
                        <label class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-400">
                            <input type="radio" name="color-choice" value="White" class="sr-only" aria-labelledby="color-choice-1-label">
                            <p id="color-choice-1-label" class="sr-only">White</p>
                            <span aria-hidden="true" class="h-8 w-8 bg-white border border-black border-opacity-10 rounded-full"></span>
                        </label>
        
                        <!--
                            Active and Checked: "ring ring-offset-1"
                            Not Active and Checked: "ring-2"
                        -->
                        <label class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-500">
                            <input type="radio" name="color-choice" value="Washed Gray" class="sr-only" aria-labelledby="color-choice-2-label">
                            <p id="color-choice-2-label" class="sr-only">Washed Gray</p>
                            <span aria-hidden="true" class="h-8 w-8 bg-gray-500 border border-black border-opacity-10 rounded-full"></span>
                        </label>
                        </div>
                    </fieldset>
                    </div>
        
                    <div class="mt-10 flex sm:flex-col1">
                    <button type="submit" class="max-w-xs flex-1 bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500 sm:w-full">Add to bag</button>
        
                    <button type="button" class="ml-4 py-3 px-3 rounded-md flex items-center justify-center text-gray-400 hover:bg-gray-100 hover:text-gray-500">
                        <!-- Heroicon name: outline/heart -->
                        <svg class="h-6 w-6 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                        <span class="sr-only">Add to favorites</span>
                    </button>
                    </div>
                </form> --}}
        
                <section aria-labelledby="details-heading" class="mt-12">
                    <h2 id="details-heading" class="sr-only">Additional details</h2>
        
                    <div class="divide-y divide-gray-200">
                    <div>
                        
                        <h3 class="mb-3">
                            <span class="text-gray-900 text-sm font-medium"> Meet the seller </span>
                            <span class="ml-6 flex items-center"></span>
                        </h3>
                        <div class="pb-6 prose prose-sm" id="disclosure-1">
                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                <div class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                  <div class="flex-shrink-0">
                                    <img class="h-10 w-10 rounded-full" src="{{ $product->user->image ? asset('storage/' . $product->user->image) : asset('profile-empty.png') }}" alt="">
                                  </div>
                                  <div class="flex-1 min-w-0">
                                    <a href="{{ route('seller-profile.show',$product->user->id ) }}" class="focus:outline-none">
                                      <span class="absolute inset-0" aria-hidden="true"></span>
                                      <p class="text-sm font-medium text-gray-900">{{ $product->user->name }}</p>
                                      <p class="text-sm text-gray-500 truncate">{{ $product->user->email }}</p>
                                    </a>
                                  </div>
                                </div>
                                <div class="relative rounded-lg border border-gray-300 bg-blue-400 px-6 py-5 shadow-sm mx-auto flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                    <div class="flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-white">
                                            <path fill-rule="evenodd" d="M4.804 21.644A6.707 6.707 0 006 21.75a6.721 6.721 0 003.583-1.029c.774.182 1.584.279 2.417.279 5.322 0 9.75-3.97 9.75-9 0-5.03-4.428-9-9.75-9s-9.75 3.97-9.75 9c0 2.409 1.025 4.587 2.674 6.192.232.226.277.428.254.543a3.73 3.73 0 01-.814 1.686.75.75 0 00.44 1.223zM8.25 10.875a1.125 1.125 0 100 2.25 1.125 1.125 0 000-2.25zM10.875 12a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0zm4.875-1.125a1.125 1.125 0 100 2.25 1.125 1.125 0 000-2.25z" clip-rule="evenodd" />
                                        </svg>  
                                    </div>
                                    <div class="flex-1 min-w-0">
                                      <a href="{{ route('messages.create', $product) }}" class="focus:outline-none">
                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                        <p class="text-sm font-medium text-white">Make an offer</p>
                                      </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
        
                    <!-- More sections... -->
                    </div>
                </section>
                </div>
            </div>
            </div>
        </div>
        
</x-app-layout>

<script>
    var currentSlide = 0;
    showSlides(currentSlide);

    function changeSlide(n) {
        showSlides(currentSlide += n);
    }

    function showSlides(n) {
        var slides = document.getElementsByClassName("carousel-slide");

        if (n >= slides.length) {
            currentSlide = 0;
        } else if (n < 0) {
            currentSlide = slides.length - 1;
        } else {
            currentSlide = n;
        }

        for (var i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        slides[currentSlide].style.display = "block";
    }
</script>
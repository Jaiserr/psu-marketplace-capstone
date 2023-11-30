<x-app-layout>
    <div class="bg-white">
        <nav class="flex pl-5 pt-5 lg:max-w-7xl lg:mx-auto lg:px-8" aria-label="Breadcrumb">
            <ol role="list" class="bg-white rounded-md shadow px-6 flex space-x-4">
                <li class="flex">
                    <div class="flex items-center">
                        <a href="{{ url('/dashboard') }}" class="text-gray-400 hover:text-gray-500">
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
                <div class="flex flex-col-reverse">
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
                <div class="mt-10 px-4 sm:px-0 sm:mt-16 lg:mt-0">
                    <h3 class="text-sm text-gray-600">{{ $product->category }}</h3>
                <h1 class="text-3xl font-extrabold tracking-tight text-gray-900">{{ $product->product_name }}</h1>       
                <div class="mt-3">
                    <h2 class="sr-only">Product information</h2>
                    <p class="text-3xl text-gray-900">₱{{ $product->price }}</p>
                </div>
                <div class="mt-3">
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
                        <p>{{ $product->details }}</p>
                    </div>
                </div>       
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
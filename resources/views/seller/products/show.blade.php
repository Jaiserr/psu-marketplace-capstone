<x-app-layout>
    <div class="bg-white lg:my-16">
        <div class="max-w-2xl mx-auto lg:max-w-7xl">
            <div class="lg:grid lg:grid-cols-2 lg:gap-x-8 lg:items-start">
                <div class="flex flex-col-reverse relative mb-4">
                    @php
                    $imagePathsArray = explode('|', $product->images);
                    @endphp
                
                    <div class="carousel-container relative">
                        <div class="carousel-wrapper">
                            @foreach ($imagePathsArray as $image)
                                <div class="carousel-slide relative">
                                    <img src="{{ asset('storage/' . $image) }}" alt="Angled front view with bag zipped and handles upright." class="rounded-lg object-cover w-full h-[35rem]">
                                </div>
                            @endforeach
                        </div>
                        <div class="absolute top-1/2 left-5 transform -translate-y-1/2">
                            <button onclick="changeSlide(-1)">
                                <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 10 16">
                                    <path d="M8.766.566A2 2 0 0 0 6.586 1L1 6.586a2 2 0 0 0 0 2.828L6.586 15A2 2 0 0 0 10 13.586V2.414A2 2 0 0 0 8.766.566Z"/>
                                </svg>
                            </button>
                        </div>
                        <div class="absolute top-1/2 right-5 transform -translate-y-1/2">
                            <button onclick="changeSlide(1)">
                                <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 10 16">
                                    <path d="M3.414 1A2 2 0 0 0 0 2.414v11.172A2 2 0 0 0 3.414 15L9 9.414a2 2 0 0 0 0-2.828L3.414 1Z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg px-4 py-6 sm:mt-16 lg:mt-0">
                    <div class="flex justify-between">
                       <h1 class="text-3xl font-extrabold tracking-tight text-gray-900">{{ $product->product_name }}</h1>
                        <form action="{{ route('wishlist.add', $product) }}"
                        method="POST">
                        @csrf
                        <button type="submit">
                        <svg class="w-10 h-10 text-blue-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 20">
                            <path d="M13 20a1 1 0 0 1-.64-.231L7 15.3l-5.36 4.469A1 1 0 0 1 0 19V2a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v17a1 1 0 0 1-1 1Z"/>
                        </svg>
                        </button>
                        </form> 
                    </div>
                    
                        <h3 class="text-sm text-dark-900">{{ $product->category }}</h3>    
                    <div class="mt-3">
                        <h2 class="sr-only">Product information</h2>
                        <p class="text-3xl text-dark-900">₱{{ $product->price }}</p>
                    </div>
                    <div class="mt-3">
                        <p class="flex text-sm text-dark-900 space-x-2">
                            @if($product->availability == 'Available')
                                <svg class="flex-shrink-0 h-5 w-5 text-violet-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
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
                        <div class="text-base text-dark-900 space-y-2">
                            <h3 class="text-sm text-dark-900">Condition</h3>
                            <p>{{ $product->condition }}</p>
                        </div>
                    </div>
                    <div class="mt-6">        
                        <div class="text-base text-dark-900 space-y-2">
                            <h3 class="text-sm text-dark-900">Description</h3>
                            <p>{{ $product->details }}</p>
                        </div>
                    </div>       
                    <section aria-labelledby="details-heading" class="mt-12">
                        <h2 id="details-heading" class="sr-only">Additional details</h2>        
                        <div class="divide-y divide-gray-200">
                            <div>                        
                                <h3 class="mb-3">
                                    <span class="text-dark-900 text-sm font-medium"> Meet the seller </span>
                                    <span class="ml-6 flex items-center"></span>
                                </h3>
                                <div class="pb-6 prose prose-sm" id="disclosure-1">
                                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                        <div class="relative rounded-lg border shadow-lg border-gray-300 bg-blue-900 px-6 py-5 flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                            <div class="flex-shrink-0">
                                                <img class="h-10 w-10 rounded-full" src="{{ $product->user->image ? asset('storage/' . $product->user->image) : asset('profile-empty.png') }}" alt="">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <a href="{{ route('seller-profile.show',$product->user->id ) }}" class="focus:outline-none">
                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                <p class="text-sm font-medium text-white">{{ $product->user->name }}</p>
                                                <p class="text-sm text-white truncate">{{ $product->user->email }}</p>
                                                </a>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="{{ route('messages.create', $product) }}" class="focus:outline-none">
                                                <svg class="w-16 h-16 text-indigo-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M20 3H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h2v4a1 1 0 0 0 1.707.707L12.414 16H20a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2ZM7.5 11a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Zm4.5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Zm4.5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Z"/>
                                                  </svg> 
                                            </a>
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
</script>>
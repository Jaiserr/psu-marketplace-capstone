<x-app-layout>
    <div class="bg-white">
        <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
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
                        <p>{{ $product->description }}</p>
                    </div>
                </div>

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
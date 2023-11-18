<x-app-layout>

    <div class="bg-white">
        
      
        <header class="relative overflow-hidden">
          
      
          <!-- Hero section -->
          <div class="pt-16 pb-80 sm:pt-24 sm:pb-40 lg:pt-40 lg:pb-48">
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 sm:static">
              <div class="sm:max-w-lg">
                <h1 class="text-4xl font font-extrabold tracking-tight text-gray-900 sm:text-6xl">PSU Marketplace</h1>
                <p class="mt-4 text-xl text-gray-500">Explore, connect, and shop seamlessly in our vibrant digital
                  community</p>
              </div>
              <div>
                <div class="mt-10">
                  <!-- Decorative image grid -->
                  <div aria-hidden="true" class="pointer-events-none lg:absolute lg:inset-y-0 lg:max-w-7xl lg:mx-auto lg:w-full">
                    <div class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                      <div class="flex items-center space-x-6 lg:space-x-8">
                        <div class="flex-shrink-0 grid grid-cols-1 gap-y-6 lg:gap-y-8">
                          <div class="w-44 h-64 rounded-lg overflow-hidden sm:opacity-0 lg:opacity-100">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-01.jpg" alt="" class="w-full h-full object-center object-cover">
                          </div>
                          <div class="w-44 h-64 rounded-lg overflow-hidden">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-02.jpg" alt="" class="w-full h-full object-center object-cover">
                          </div>
                        </div>
                        <div class="flex-shrink-0 grid grid-cols-1 gap-y-6 lg:gap-y-8">
                          <div class="w-44 h-64 rounded-lg overflow-hidden">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-03.jpg" alt="" class="w-full h-full object-center object-cover">
                          </div>
                          <div class="w-44 h-64 rounded-lg overflow-hidden">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-04.jpg" alt="" class="w-full h-full object-center object-cover">
                          </div>
                          <div class="w-44 h-64 rounded-lg overflow-hidden">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-05.jpg" alt="" class="w-full h-full object-center object-cover">
                          </div>
                        </div>
                        <div class="flex-shrink-0 grid grid-cols-1 gap-y-6 lg:gap-y-8">
                          <div class="w-44 h-64 rounded-lg overflow-hidden">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-06.jpg" alt="" class="w-full h-full object-center object-cover">
                          </div>
                          <div class="w-44 h-64 rounded-lg overflow-hidden">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-07.jpg" alt="" class="w-full h-full object-center object-cover">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
      
                  <a href="#" class="inline-block text-center bg-indigo-600 border border-transparent rounded-md py-3 px-8 font-medium text-white hover:bg-indigo-700">Shop Categories</a>
                </div>
              </div>
            </div>
          </div>
        </header>
        
        <main>
            <div class="bg-white">
                <div class="py-16 sm:py-24 xl:max-w-7xl xl:mx-auto xl:px-8">
                  <div class="px-4 sm:px-6 sm:flex sm:items-center sm:justify-between lg:px-8 xl:px-0">
                    <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Our Categories</h2>
                    <a href="#" class="hidden text-sm font-semibold text-indigo-600 hover:text-indigo-500 sm:block">Browse all categories<span aria-hidden="true"> &rarr;</span></a>
                  </div>
              
                  <div class="mt-4 flow-root">
                    <div class="-my-2">
                      <div class="box-content py-2 relative h-80 overflow-x-auto xl:overflow-visible">
                        <div class="absolute min-w-screen-xl px-4 flex space-x-8 sm:px-6 lg:px-8 xl:relative xl:px-0 xl:space-x-0 xl:grid xl:grid-cols-5 xl:gap-x-8">
                          <a href="{{ route('products.by.category', 'School Uniforms and Supplies') }}" class="relative w-56 h-80 rounded-lg p-6 flex flex-col overflow-hidden hover:opacity-75 xl:w-auto">
                            <span aria-hidden="true" class="absolute inset-0">
                              <img src="{{ asset('category/school.png')}}" alt="" class="w-full h-full object-center object-cover">
                            </span>
                            <span aria-hidden="true" class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                            <span class="relative mt-auto text-center text-xl font-bold text-white">School Uniforms and Supplies</span>
                          </a>
              
                          <a href="{{ route('products.by.category', 'Computer & Techs') }}" class="relative w-56 h-80 rounded-lg p-6 flex flex-col overflow-hidden hover:opacity-75 xl:w-auto">
                            <span aria-hidden="true" class="absolute inset-0">
                              <img src="{{ asset('category/computer.jpg') }}" alt="" class="w-full h-full object-center object-cover">
                            </span>
                            <span aria-hidden="true" class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                            <span class="relative mt-auto text-center text-xl font-bold text-white">Computer and Technologies</span>
                          </a>
              
                          <a href="{{ route('products.by.category', 'Food and Drinks') }}" class="relative w-56 h-80 rounded-lg p-6 flex flex-col overflow-hidden hover:opacity-75 xl:w-auto">
                            <span aria-hidden="true" class="absolute inset-0">
                              <img src="{{ asset('category/food.jpg') }}" alt="" class="w-full h-full object-center object-cover">
                            </span>
                            <span aria-hidden="true" class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                            <span class="relative mt-auto text-center text-xl font-bold text-white">Food and Drinks</span>
                          </a>
              
                          <a href="{{ route('products.by.category', 'Mobile Phones & Gadgets') }}" class="relative w-56 h-80 rounded-lg p-6 flex flex-col overflow-hidden hover:opacity-75 xl:w-auto">
                            <span aria-hidden="true" class="absolute inset-0">
                              <img src="{{ asset('category/mobile.jpg') }}" alt="" class="w-full h-full object-center object-cover">
                            </span>
                            <span aria-hidden="true" class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                            <span class="relative mt-auto text-center text-xl font-bold text-white">Mobile Phones & Gadgets</span>
                          </a>
              
                          <a href="#" class="relative w-56 h-80 rounded-lg p-6 flex flex-col overflow-hidden hover:opacity-75 xl:w-auto">
                            <span aria-hidden="true" class="absolute inset-0">
                              <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-category-03.jpg" alt="" class="w-full h-full object-center object-cover">
                            </span>
                            <span aria-hidden="true" class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                            <span class="relative mt-auto text-center text-xl font-bold text-white">Sale</span>
                          </a>
                          
                        </div>
                      </div>
                    </div>
                  </div>
              
                  <div class="mt-6 px-4 sm:hidden">
                    <a href="#" class="block text-sm font-semibold text-indigo-600 hover:text-indigo-500">Browse all categories<span aria-hidden="true"> &rarr;</span></a>
                  </div>
                </div>
            </div>

      
          <!-- Featured section -->
          <section aria-labelledby="cause-heading">
            <div class="relative bg-gray-800 py-32 px-6 sm:py-40 sm:px-12 lg:px-16">
              <div class="absolute inset-0 overflow-hidden">
                <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-feature-section-full-width.jpg" alt="" class="w-full h-full object-center object-cover">
              </div>
              <div aria-hidden="true" class="absolute inset-0 bg-gray-900 bg-opacity-50"></div>
              <div class="relative max-w-3xl mx-auto flex flex-col items-center text-center">
                <h2 id="cause-heading" class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">PSU Marketplace Community Forum</h2>
                <p class="mt-3 text-xl text-white">"Join our marketplace community forum for insights, networking, and updates. Connect with
                  peers and stay informed."</p>
                <a href="{{ url('forum') }}" class="mt-8 w-full block bg-white border border-transparent rounded-md py-3 px-8 text-base font-medium text-gray-900 hover:bg-gray-100 sm:w-auto">Join now</a>
              </div>
            </div>
          </section>
      
          <!-- Favorites section -->
          
          
          <div class="bg-white">
            <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
              <h2 class="text-xl font-bold text-gray-900">Customers also bought</h2>
          
              <div class="mt-8 grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
                @foreach ($products as $product)
                    @php
                    $imagePathsArray = explode('|', $product->images);
                    @endphp
                <div>
                  <div class="relative">
                    <div class="relative w-full h-72 rounded-lg overflow-hidden">
                      <a href="{{ route('product.details', $product->id) }}">
                        <img src="{{ asset('storage/' . $imagePathsArray[0]) }}" alt="Front of zip tote bag with white canvas, black canvas straps and handle, and black zipper pulls." class="w-full h-full object-center object-cover">
                      </a>
                    </div>
                    <div class="relative mt-4">
                      <a href="{{ route('product.details', $product->id) }}">
                      <h3 class="text-sm font-medium text-gray-900">{{ $product->product_name }}</h3>

                      </a>
                      <p class="mt-1 text-sm text-gray-500">{{ $product->condition }}</p>
                      <span
                            class="mr-3 uppercase text-xs {{ $product->availability === 'Available' ? 'text-green-500' : 'text-red-500' }}">{{
                            $product->availability }}</span>
                    </div>
                    <div class="absolute top-0 inset-x-0 h-72 rounded-lg p-4 flex items-end justify-end overflow-hidden">
                      <div aria-hidden="true" class="absolute inset-x-0 bottom-0 h-36 bg-gradient-to-t from-black opacity-50"></div>
                      <p class="relative text-lg font-semibold text-white">₱{{ $product->price }}</p>
                    </div>
                  </div>
                  <div class="mt-6">
                    @if ($product->availability === "Available")
                    <form class="z-[100]" action="{{ route('wishlist.add', $product) }}" method="POST">
                        @csrf
                        <button type="submit"
                                class="w-full px-4 py-2 text-base font-bold text-white uppercase bg-blue-400 border border-blue-400 rounded focus:outline-none focus:border-blue-700 hover:bg-blue-600">
                                Add to wishlist
                        </button>
                </form>
                @else
                <button
                                class="w-full px-4 py-2 text-base font-bold text-white uppercase bg-red-400 border border-red-400 rounded focus:outline-none focus:border-red-700 hover:bg-red-600">
                                Product Sold
                        </button>
              </div>
              @endif                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
      
          <!-- CTA section -->
          <section aria-labelledby="sale-heading">
            <div class="pt-32 overflow-hidden sm:pt-14">
              <div class="bg-gray-800">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                  <div class="relative pt-48 pb-16 sm:pb-24">
                    <div>
                      <h2 id="sale-heading" class="text-4xl font-extrabold tracking-tight text-white md:text-5xl">
                        Final Stock.
                        <br>
                        Up to 50% off.
                      </h2>
                      <div class="mt-6 text-base">
                        <a href="#" class="font-semibold text-white">Shop the sale<span aria-hidden="true"> &rarr;</span></a>
                      </div>
                    </div>
      
                    <div class="absolute -top-32 left-1/2 transform -translate-x-1/2 sm:top-6 sm:translate-x-0">
                      <div class="ml-24 flex space-x-6 min-w-max sm:ml-3 lg:space-x-8">
                        <div class="flex space-x-6 sm:flex-col sm:space-x-0 sm:space-y-6 lg:space-y-8">
                          <div class="flex-shrink-0">
                            <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72" src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-01.jpg" alt="">
                          </div>
      
                          <div class="mt-6 flex-shrink-0 sm:mt-0">
                            <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72" src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-02.jpg" alt="">
                          </div>
                        </div>
                        <div class="flex space-x-6 sm:-mt-20 sm:flex-col sm:space-x-0 sm:space-y-6 lg:space-y-8">
                          <div class="flex-shrink-0">
                            <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72" src="https://tailwindui.com/img/ecommerce-images/home-page-03-favorite-01.jpg" alt="">
                          </div>
      
                          <div class="mt-6 flex-shrink-0 sm:mt-0">
                            <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72" src="https://tailwindui.com/img/ecommerce-images/home-page-03-favorite-02.jpg" alt="">
                          </div>
                        </div>
                        <div class="flex space-x-6 sm:flex-col sm:space-x-0 sm:space-y-6 lg:space-y-8">
                          <div class="flex-shrink-0">
                            <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72" src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-01.jpg" alt="">
                          </div>
      
                          <div class="mt-6 flex-shrink-0 sm:mt-0">
                            <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72" src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-02.jpg" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </main>
      
        <footer aria-labelledby="footer-heading" class="bg-white">
          <h2 id="footer-heading" class="sr-only">Footer</h2>
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="py-20 xl:grid xl:grid-cols-3 xl:gap-8">
              <div class="grid grid-cols-2 gap-8 xl:col-span-2">
                <div class="space-y-16 md:space-y-0 md:grid md:grid-cols-2 md:gap-8">
                  <div>
                    <h3 class="text-sm font-medium text-gray-900">Shop</h3>
                    <ul role="list" class="mt-6 space-y-6">
                      <li class="text-sm">
                        <a href="#" class="text-gray-500 hover:text-gray-600"> Bags </a>
                      </li>
      
                      <li class="text-sm">
                        <a href="#" class="text-gray-500 hover:text-gray-600"> Tees </a>
                      </li>
      
                      <li class="text-sm">
                        <a href="#" class="text-gray-500 hover:text-gray-600"> Objects </a>
                      </li>
      
                      <li class="text-sm">
                        <a href="#" class="text-gray-500 hover:text-gray-600"> Home Goods </a>
                      </li>
      
                      <li class="text-sm">
                        <a href="#" class="text-gray-500 hover:text-gray-600"> Accessories </a>
                      </li>
                    </ul>
                  </div>
                  <div>
                    <h3 class="text-sm font-medium text-gray-900">Company</h3>
                    <ul role="list" class="mt-6 space-y-6">
                      <li class="text-sm">
                        <a href="#" class="text-gray-500 hover:text-gray-600"> Who we are </a>
                      </li>
      
                      <li class="text-sm">
                        <a href="#" class="text-gray-500 hover:text-gray-600"> Sustainability </a>
                      </li>
      
                      <li class="text-sm">
                        <a href="#" class="text-gray-500 hover:text-gray-600"> Press </a>
                      </li>
      
                      <li class="text-sm">
                        <a href="#" class="text-gray-500 hover:text-gray-600"> Careers </a>
                      </li>
      
                      <li class="text-sm">
                        <a href="#" class="text-gray-500 hover:text-gray-600"> Terms &amp; Conditions </a>
                      </li>
      
                      <li class="text-sm">
                        <a href="#" class="text-gray-500 hover:text-gray-600"> Privacy </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="space-y-16 md:space-y-0 md:grid md:grid-cols-2 md:gap-8">
                  <div>
                    <h3 class="text-sm font-medium text-gray-900">Account</h3>
                    <ul role="list" class="mt-6 space-y-6">
                      <li class="text-sm">
                        <a href="#" class="text-gray-500 hover:text-gray-600"> Manage Account </a>
                      </li>
      
                      <li class="text-sm">
                        <a href="#" class="text-gray-500 hover:text-gray-600"> Returns &amp; Exchanges </a>
                      </li>
      
                      <li class="text-sm">
                        <a href="#" class="text-gray-500 hover:text-gray-600"> Redeem a Gift Card </a>
                      </li>
                    </ul>
                  </div>
                  <div>
                    <h3 class="text-sm font-medium text-gray-900">Connect</h3>
                    <ul role="list" class="mt-6 space-y-6">
                      <li class="text-sm">
                        <a href="#" class="text-gray-500 hover:text-gray-600"> Contact Us </a>
                      </li>
      
                      <li class="text-sm">
                        <a href="#" class="text-gray-500 hover:text-gray-600"> Twitter </a>
                      </li>
      
                      <li class="text-sm">
                        <a href="#" class="text-gray-500 hover:text-gray-600"> Instagram </a>
                      </li>
      
                      <li class="text-sm">
                        <a href="#" class="text-gray-500 hover:text-gray-600"> Pinterest </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="mt-16 md:mt-16 xl:mt-0">
                <h3 class="text-sm font-medium text-gray-900">Sign up for our newsletter</h3>
                <p class="mt-6 text-sm text-gray-500">The latest deals and savings, sent to your inbox weekly.</p>
                <form class="mt-2 flex sm:max-w-md">
                  <label for="email-address" class="sr-only">Email address</label>
                  <input id="email-address" type="text" autocomplete="email" required class="appearance-none min-w-0 w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-4 text-base text-indigo-500 placeholder-gray-500 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                  <div class="ml-4 flex-shrink-0">
                    <button type="submit" class="w-full bg-indigo-600 border border-transparent rounded-md shadow-sm py-2 px-4 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Sign up</button>
                  </div>
                </form>
              </div>
            </div>
      
            <div class="border-t border-gray-200 py-10">
              <p class="text-sm text-gray-500">Copyright &copy; 2021 Clothing Company Inc.</p>
            </div>
          </div>
        </footer>
      </div>    

    <div class="py-12">
        <div class="relative mb-12 px-4">
            <div class="absolute inset-x-0 bottom-0"></div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="relative shadow-xl sm:rounded-2xl sm:overflow-hidden">
                    <div class="absolute inset-0">
                        <img class="h-full w-full object-cover" src="{{ asset('psumarketplacebanner.png') }}"
                            alt="pangasinan state university">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-purple-600 to-indigo-600  mix-blend-multiply">
                        </div>
                    </div>
                    <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
                        <h1 class="text-center text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
                            <span class="block text-white">Explore, connect, and shop seamlessly in our vibrant digital
                                community</span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        




        <div>
            <!-- Add this code to your view file -->
            <a class="px-4 py-2 bg-indigo-700 rounded mx-4 mt-4 inline-block text-white"
                href="{{ route('products.by.category', 'Men\'s Fashion') }}">Men's Fashion</a>
            <a class="px-4 py-2 bg-indigo-700 rounded mx-4 mt-4 inline-block text-white"
                href="{{ route('products.by.category', 'Women\'s Fashion') }}">Women's Fashion</a>
            <a class="px-4 py-2 bg-indigo-700 rounded mx-4 mt-4 inline-block text-white"
                href="{{ route('products.by.category', 'Mobile Phones & Gadgets') }}">Mobile Phones &
                Gadgets</a>
            <a class="px-4 py-2 bg-indigo-700 rounded mx-4 mt-4 inline-block text-white"
                href="{{ route('products.by.category', 'Computer & Techs') }}">Computer & Techs</a>
            <a class="px-4 py-2 bg-indigo-700 rounded mx-4 mt-4 inline-block text-white"
                href="{{ route('products.by.category', 'School Uniforms and Supplies') }}">School Uniforms
                and Supplies</a>
            <a class="px-4 py-2 bg-indigo-700 rounded mx-4 mt-4 inline-block text-white"
                href="{{ route('products.by.category', 'Food and Drinks') }}">Food and Drinks</a>
            <a class="px-4 py-2 bg-indigo-700 rounded mx-4 mt-4 inline-block text-white"
                href="{{ route('products.by.category', 'Musical Instruments') }}">Musical Instruments</a>

        </div>
</x-app-layout>
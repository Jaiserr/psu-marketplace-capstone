<x-app-layout>
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
              <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">About us</a>
            </div>
          </li>
        </ol>
    </nav>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <section class="bg-indigo-700">
                    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                        <h1 class="text-center text-4xl font-bold tracking-tight sm:text-5xl lg:text-6xl mx-auto mb-8">
                            <span class="block text-white">About Us</span>
                        </h1>
                        <p class="lg:mb-16 font-light text-center text-white sm:text-xl">Welcome to PSU Marketplace, where online shopping becomes an immersive experience. Rooted in a passion for [industry or products], our platform is more than a marketplace; it's a digital journey designed to elevate your shopping experience. With a vision to [mission/goal], we prioritize quality in every curated item, spanning from trendy fashion to cutting-edge tech. Our customer-centric approach ensures a seamless and delightful experience, from user-friendly interfaces to efficient customer support. What sets us apart is not just the products we offer but how we offer them—exclusive deals, personalized recommendations, and a commitment to staying ahead with tech-driven innovation. PSU Marketplace is more than a marketplace; it's a community. Join us on a virtual shopping odyssey where every click opens the door to endless possibilities. Shop smart, shop with us.</p> 
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
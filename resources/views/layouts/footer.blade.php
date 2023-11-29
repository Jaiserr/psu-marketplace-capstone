<footer class="bg-indigo-700" aria-labelledby="footer-heading">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
      <div class="xl:grid xl:grid-cols-3 xl:gap-8">
        <div class="space-y-8 xl:col-span-1">
        <div class="flex space-x-6">
            <img class="h-16" src="{{ asset('Pangasinan_State_University_logo.png')}}" alt="Company name"><x-application-logo class="block h-16 w-auto fill-current text-gray-800" />
        </div>
          <p class="text-white text-base">PSU Marketplace</p>
          <div class="flex space-x-6">
            <a href="https://www.facebook.com/profile.php?id=61553673545550&mibextid=vk8aRt" class="text-white hover:text-white">
              <span class="sr-only">Facebook</span>
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
              </svg>
            </a>
          </div>
        </div>
        <div class="mt-12 grid grid-cols-2 gap-8 xl:mt-0 xl:col-span-2">
          <div class="md:grid md:grid-cols-2 md:gap-8">
            <div>
              <h3 class="text-sm font-semibold text-white tracking-wider uppercase">Marketplace</h3>
              <ul role="list" class="mt-4 space-y-4">
                <li>
                  <a href="{{ url('dashboard') }}" class="text-base text-white hover:text-white"> Home </a>
                </li>
                <li>
                  <a href="{{ url('category-products') }}" class="text-base text-white hover:text-white"> Products </a>
                </li>
                <li>
                  <a href="{{ url('contact-us') }}" class="text-base text-white hover:text-white"> Contacts </a>
                </li>
                <li>
                  <a href="{{ url('about-us') }}" class="text-base text-white hover:text-white"> About </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="md:grid md:grid-cols-2 md:gap-8">
            <div>
                <h3 class="text-sm font-semibold text-white tracking-wider uppercase">Legal</h3>
                <ul role="list" class="mt-4 space-y-4">
                  <li>
                    <a href="{{ url('privacy-policy')}}" class="text-base text-white hover:text-white"> Privacy Policy </a>
                  </li>
    
                  <li>
                    <a href="{{ url('terms-and-conditions') }}" class="text-base text-white hover:text-white"> Terms and Conditions</a>
                  </li>
                </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-12 border-t border-white pt-8">
        <p class="text-base text-white xl:text-center">&copy; 2023 Pangasinan State University Marketplace. All rights reserved.</p>
      </div>
    </div>
</footer>
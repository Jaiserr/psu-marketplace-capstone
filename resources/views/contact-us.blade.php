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
              <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Contact us</a>
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
                            <span class="block text-white">Contact Us</span>
                        </h1>                      
                        <p class="lg:mb-16 font-light text-center text-white sm:text-xl">Got a technical issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.</p>
                        <div class="grid grid-cols-1 gap-12 mt-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 mb-8">
                            <div class="p-4 rounded-lg bg-white md:p-6 shadow-md">
                                <span class="inline-block p-3 text-blue-500 rounded-lg bg-blue-100/80">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                    </svg>
                                </span>
                
                                <h2 class="mt-4 text-base font-medium text-gray-800">Email us on</h2>
                                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Speak to our friendly team.</p>
                                <p class="mt-2 text-xs text-blue-500 dark:text-blue-400">psuaccmarketplace@gmail.com</p>
                            </div>

                            <div class="p-4 rounded-lg bg-white md:p-6 shadow-md">
                                <span class="inline-block p-3 text-blue-500 rounded-lg bg-blue-100/80">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                    </svg>
                                </span>
                                
                                <h2 class="mt-4 text-base font-medium text-gray-800">Visit us</h2>
                                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Visit our office HQ..</p>
                                <p class="mt-2 text-xs text-blue-500 dark:text-blue-400">Pangasinan State University, Alaminos City Campus</p>
                            </div>
                
                            <div class="p-4 rounded-lg bg-white md:p-6 shadow-md">
                                <span class="inline-block p-3 text-blue-500 rounded-lg bg-blue-100/80">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                    </svg>
                                </span>
                                
                                <h2 class="mt-4 text-base font-medium text-gray-800">Call us</h2>
                                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Mon-Fri from 8am to 5pm.</p>
                                <p class="mt-2 text-xs text-blue-500 dark:text-blue-400">+1 (555) 000-0000</p>
                            </div>
                        </div>  
                        <form action="{{ url('contact-us') }}" class="space-y-8" method="POST">
                            @csrf
                            <div class="shadow-md">
                                <label for="name" class="block mb-2 text-sm font-medium text-white">Name</label>
                                <input name="name" type="name" id="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Your name" required>
                            </div>
                            <div class="shadow-md">
                                <label for="email" class="block mb-2 text-sm font-medium text-white">Your email</label>
                                <input name="email" type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="john@gmail.com" required>
                            </div>
                            <div class="shadow-md">
                                <label for="subject" class="block mb-2 text-sm font-medium text-white">Subject</label>
                                <input name="subject" type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Let us know how we can help you" required>
                            </div>
                            <div class="sm:col-span-2 shadow-md">
                                <label for="message" class="block mb-2 text-sm font-medium text-white">Your message</label>
                                <textarea name="message" id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Leave a comment..."></textarea>
                            </div>
                            <button type="submit"
                            class="inline-block px-6 py-2.5 bg-blue-500  text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-600 hover:shadow-lg ">Submit</button>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
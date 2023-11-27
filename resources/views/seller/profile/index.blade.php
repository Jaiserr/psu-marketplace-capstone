<x-app-layout>
    <div class="py-4">
        <div class="max-w-7xl mx-auto px-3 lg:px-8">
            <div class="h-full flex">
                <div class="flex flex-col min-w-0 flex-1 overflow-hidden">
                    <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2">
                        <li class="col-span-1 flex flex-col text-center border bg-white rounded-lg shadow divide-y divide-gray-200 mb-2">
                          <div class="flex-1 flex flex-col p-8">
                            <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-full" src="{{ $seller->image ? asset('storage/' . $seller->image) : asset('profile-empty.png') }}" alt="">
                            <h3 class="mt-6 text-gray-900 text-sm font-medium">{{ $seller->name }}</h3>
                            <dl class="mt-1 flex-grow flex flex-col justify-between">
                              <dt class="sr-only">Title</dt>
                              <dd class="text-gray-500 text-sm">{{ $seller->email }}</dd>
                            </dl>
                          </div>
                          <div>
                            <div class="-mt-px flex divide-x divide-gray-900">
                              <div class="w-0 flex-1 flex">
                                <a href="mailto:janecooper@example.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                                  <!-- Heroicon name: solid/mail -->
                                  <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                  </svg>
                                  <span class="ml-3">Email</span>
                                </a>
                              </div>
                              {{-- <div class="-ml-px w-0 flex-1 flex">
                                <a href="tel:+1-202-555-0170" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                                  <!-- Heroicon name: solid/phone -->
                                  <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                  </svg>
                                  <span class="ml-3">Call</span>
                                </a>
                              </div> --}}
                            </div>
                          </div>
                        </li>
                        <li class="col-span-1 flex flex-col text-start border bg-white rounded-lg shadow divide-y divide-gray-200 mb-2">
                            <div class="flex-1 flex flex-col p-8">
                                <h3 class="text-gray-500 text-sm font-bold">Seller Details:</h3>
                                <div class="mt-6 text-start group inline-flex text-base font-medium">                            
                                        <!-- Heroicon name: outline/shield-check -->
                                        <svg class="flex-shrink-0 mr-2 h-6 w-6 text-gray-500 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <span class="text-gray-500 hover:text-gray-700">{{ $seller->name }}</span>
                                </div>
                                <div class="mt-6 text-start group inline-flex text-base font-medium">                            
                                    <svg class="flex-shrink-0 mr-2 h-6 w-6 text-gray-500 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" />
                                    </svg>  
                                    <span class="text-gray-500 hover:text-gray-700">{{ $seller->email }}</span>
                                </div>
                                <div class="mt-6 text-start group inline-flex text-base font-medium">                            
                                    <svg class="flex-shrink-0 mr-2 h-6 w-6 text-gray-500 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                    </svg> 
                                    <span class="text-gray-500 hover:text-gray-700">{{ $seller->campus_role ?? "Data Not Provided"}}</span>
                                </div>
                                <div class="mt-6 text-start group inline-flex text-base font-medium">                            
                                    <svg class="flex-shrink-0 mr-2 h-6 w-6 text-gray-500 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
                                    </svg>
                                    <span class="text-gray-500 hover:text-gray-700">{{ $seller->id_number ?? "Data Not Provided"}}</span>
                                </div>
                                <div class="mt-6 text-start group inline-flex text-base font-medium">                            
                                    <svg class="flex-shrink-0 mr-2 h-6 w-6 text-gray-500 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                    </svg>
                                    <span class="text-gray-500 hover:text-gray-700">{{ $seller->phone_number ?? "Data Not Provided"}}</span>
                                </div>
                                <div class="mt-6 text-start group inline-flex text-base font-medium">                            
                                    <svg class="flex-shrink-0 mr-2 h-6 w-6 text-gray-500 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                    </svg>
                                    <span class="text-gray-500 hover:text-gray-700">{{ $seller->address ?? "Data Not Provided"}}</span>
                                </div>
                            </div>
                            {{-- <div>
                              <div class="-mt-px flex divide-x divide-gray-200">
                                <div class="w-0 flex-1 flex">
                                  <a href="mailto:janecooper@example.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                                    <!-- Heroicon name: solid/mail -->
                                    <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                      <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                      <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                    </svg>
                                    <span class="ml-3">Email</span>
                                  </a>
                                </div>
                                <div class="-ml-px w-0 flex-1 flex">
                                  <a href="tel:+1-202-555-0170" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                                    <!-- Heroicon name: solid/phone -->
                                    <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                      <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                    </svg>
                                    <span class="ml-3">Call</span>
                                  </a>
                                </div>
                              </div>
                            </div> --}}
                          </li>
                        <!-- More people... -->
                    </ul>
                    <div class="flex-1 relative z-0 flex overflow-hidden">
                        <main class="flex-1 relative z-0  overflow-y-auto focus:outline-none xl:order-last rounded">
                            <article x-data="{ activeTab: 'tab1' }">
                                {{-- <div>
                                    <div>
                                        <img class="h-32 w-full bg-slate-950 object-cover lg:h-48"
                                            src="https://future.appliedhe.com/upload/photos/2020/11/TPedpP3sNtazJQlPwwpC_11_198fab1333a90b7d7e5ae3bb68a083e1_cover.jpg"
                                            alt="Destination Name">
                                    </div>
                                    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                                        <div class="-mt-12 sm:-mt-16 sm:flex sm:items-end sm:space-x-5">
                                            <div class="flex">
                                                <img class="h-24 w-24 bg-slate-950 rounded-full ring-4 ring-white sm:h-32 sm:w-32"
                                                    src="{{ Auth::user()->image ? asset('storage/' . Auth::user()->image) : asset('profile-empty.png') }}"
                                                    alt="">
                                            </div>
                                            <div
                                                class="mt-6 sm:flex-1 sm:min-w-0 sm:flex sm:items-center sm:justify-end sm:space-x-6 sm:pb-1">
                                                <div class="sm:hidden 2xl:block mt-6 min-w-0 flex-1">
                                                    <h1 class="text-2xl font-bold text-gray-900 truncate">
                                                        {{ $seller->name }}
                                                    </h1>
                                                </div>
                                                <div
                                                    class="mt-6 flex flex-col justify-stretch space-y-3 sm:flex-row sm:space-y-0 sm:space-x-4">
                                                    <a href="mailto:{{ $seller->email }}"
                                                        class="inline-flex justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">
                                                        <!-- Heroicon name: solid/mail -->
                                                        <svg class="-ml-1 mr-2 h-5 w-5 text-gray-400"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path
                                                                d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                                            <path
                                                                d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                                        </svg>
                                                        <span>Message</span>
                                                    </a>
                                                    <div>
                                                        <button @click="showModal = true"
                                                            class="inline-flex w-full justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">

                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor"
                                                                class="-ml-1 mr-2 h-5 w-5 text-gray-400">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                                            </svg>


                                                            <span>Review Seller</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hidden sm:block 2xl:hidden mt-6 min-w-0 flex-1">
                                            <h1 class="text-2xl font-bold text-gray-900 truncate">
                                                {{ $seller->name }}
                                            </h1>
                                        </div>
                                    </div>
                                </div> --}}

                                <!-- Tabs -->
                                <div class="mt-6 mb-3 sm:mt-2 2xl:mt-5 shadow bg-gray-100">
                                    <div class="border-gray-200">
                                        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                                            <nav class="-mb-px flex justify-center space-x-8" aria-label="Tabs">

                                                <a href="#" @click="activeTab = 'tab1'"
                                                    :class="{ 'border-b-2 border-blue-500': activeTab === 'tab1' }"
                                                    class=" border-blue-500 py-4 text-gray-900" aria-current="page">
                                                    Products
                                                </a>
                                                <a href="#" @click="activeTab = 'tab2'"
                                                    :class="{ 'border-b-2 border-blue-500': activeTab === 'tab2' }"
                                                    class=" border-blue-500 py-4 text-gray-900" aria-current="page">
                                                    Reviews
                                                </a>
                                                {{-- <a href="#" @click="activeTab = 'tab3'"
                                                    :class="{ 'border-b-2 border-blue-500': activeTab === 'tab3' }"
                                                    class=" border-blue-500 py-4 text-gray-900" aria-current="page">
                                                    Products
                                                </a> --}}
                                            </nav>
                                        </div>
                                    </div>
                                </div>


                                
                                    {{-- @include('seller.profile.review-form') --}}

                                    {{-- @include('seller.profile.seller-information') --}}
                                    @include('seller.profile.review')
                                    @include('seller.profile.seller-products')

                               

                            </article>
                        </main>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

</x-app-layout>
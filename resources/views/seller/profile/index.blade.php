<x-app-layout>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="h-full flex">
                <div class="flex flex-col min-w-0 flex-1 overflow-hidden">
                    <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2">
                        <li class="col-span-1 flex flex-col text-center bg-gray-100 rounded-lg shadow divide-y divide-gray-200 mb-2">
                          <div class="flex-1 flex flex-col p-8">
                            <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-full" src="{{ Auth::user()->image ? asset('storage/' . Auth::user()->image) : asset('profile-empty.png') }}" alt="">
                            <h3 class="mt-6 text-gray-900 text-sm font-medium">{{ $seller->name }}</h3>
                            <dl class="mt-1 flex-grow flex flex-col justify-between">
                              <dt class="sr-only">Title</dt>
                              <dd class="text-gray-500 text-sm">{{ $seller->email }}</dd>
                              <dt class="sr-only">Role</dt>
                              <dd class="mt-3">
                                <span class="px-2 py-1 text-green-800 text-xs font-medium bg-green-100 rounded-full">{{ $seller->campus_role }}</span>
                              </dd>
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
                        <li class="col-span-1 flex flex-col text-start bg-white rounded-lg shadow divide-y divide-gray-200 mb-2">
                            <div class="flex-1 flex flex-col p-8">
                                <h3 class="text-gray-500 text-sm font-bold">Seller Details:</h3>
                                <h3 class="mt-6 text-gray-900 text-sm font-medium">{{ $seller->name }}</h3>                             
                                <h3 class="mt-6 text-gray-900 text-sm font-medium">{{ $seller->email }}</h3>
                                <h3 class="mt-6 text-gray-900 text-sm font-medium">{{ $seller->campus_role ?? "Data Not Provided"}}</h3>
                                <h3 class="mt-6 text-gray-900 text-sm font-medium">{{ $seller->id_number ?? "Data Not Provided"}}</h3>
                                <h3 class="mt-6 text-gray-900 text-sm font-medium">{{ $seller->phone_number ?? "Data Not Provided"}}</h3>
                                <h3 class="mt-6 text-gray-900 text-sm font-medium">{{ $seller->address ?? "Data Not Provided"}}</h3>
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
                            <article x-data="{ activeTab: 'tab1', showModal: false }">
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


                                
                                    @include('seller.profile.review-form')

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
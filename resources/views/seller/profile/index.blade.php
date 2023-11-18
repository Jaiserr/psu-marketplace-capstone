<x-app-layout>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="h-full flex">
                <div class="flex flex-col min-w-0 flex-1 overflow-hidden">
                    

                    <div class="flex-1 relative z-0 flex overflow-hidden">
                        <main class="flex-1 relative z-0  overflow-y-auto focus:outline-none xl:order-last">
                            <article x-data="{ activeTab: 'tab1', showModal: false }">
                                <div>
                                    <div>
                                        <img class="h-32 w-full bg-slate-950 object-cover lg:h-48"
                                            src="https://future.appliedhe.com/upload/photos/2020/11/TPedpP3sNtazJQlPwwpC_11_198fab1333a90b7d7e5ae3bb68a083e1_cover.jpg"
                                            alt="Destination Name">
                                    </div>
                                    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                                        <div class="-mt-12 sm:-mt-16 sm:flex sm:items-end sm:space-x-5">
                                            <div class="flex">
                                                <img class="h-24 w-24 bg-slate-950 rounded-full ring-4 ring-white sm:h-32 sm:w-32"
                                                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Default_pfp.svg/2048px-Default_pfp.svg.png"
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
                                </div>

                                <!-- Tabs -->
                                <div class="mt-6 sm:mt-2 2xl:mt-5">
                                    <div class="border-b border-gray-200">
                                        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                                            <nav class="-mb-px flex space-x-8" aria-label="Tabs">

                                                <a href="#" @click="activeTab = 'tab1'"
                                                    :class="{ 'border-b-2 border-blue-500': activeTab === 'tab1' }"
                                                    class=" border-pink-500 py-4 text-gray-900" aria-current="page">
                                                    Profile
                                                </a>
                                                <a href="#" @click="activeTab = 'tab2'"
                                                    :class="{ 'border-b-2 border-blue-500': activeTab === 'tab2' }"
                                                    class=" border-pink-500 py-4 text-gray-900" aria-current="page">
                                                    Reviews
                                                </a>
                                                <a href="#" @click="activeTab = 'tab3'"
                                                    :class="{ 'border-b-2 border-blue-500': activeTab === 'tab3' }"
                                                    class=" border-pink-500 py-4 text-gray-900" aria-current="page">
                                                    Products
                                                </a>
                                            </nav>
                                        </div>
                                    </div>
                                </div>


                                <div class="px-16">
                                    @include('seller.profile.review-form')

                                    @include('seller.profile.seller-information')
                                    @include('seller.profile.review')
                                    @include('seller.profile.seller-products')

                                </div>

                            </article>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
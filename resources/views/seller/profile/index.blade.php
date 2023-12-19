<x-app-layout>
            <div class="h-full flex">
                <div class="flex flex-col min-w-0 flex-1 overflow-hidden">
                    <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2">
                        <li
                            class="col-span-1 flex flex-col text-center border bg-white rounded-lg shadow divide-y divide-gray-200 mb-2">
                            <div class="flex-1 flex flex-col p-8">
                                <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-full"
                                    src="{{ $seller->image ? asset('storage/' . $seller->image) : asset('profile-empty.png') }}"
                                    alt="">
                                <h3 class="mt-6 text-gray-900 text-sm font-medium">{{ $seller->name }}</h3>
                                <dl class="mt-1 flex-grow flex flex-col justify-between">
                                    <dt class="sr-only">Title</dt>
                                    <dd class="text-gray-500 text-sm">{{ $seller->email }}</dd>
                                </dl>
                            </div>
                            <div>
                                <div class="-mt-px flex divide-x divide-gray-900">
                                    <div class="w-0 flex-1 flex">
                                        <a href="mailto:janecooper@example.com"
                                            class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                                            <!-- Heroicon name: solid/mail -->
                                            <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                            </svg>
                                            <span class="ml-3">Email</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li
                            class="col-span-1 flex flex-col text-start border bg-white rounded-lg shadow divide-y divide-gray-200 mb-2">
                            <div class="flex-1 flex flex-col p-8">
                                <h3 class="text-gray-500 text-sm font-bold">Seller Details:</h3>
                                <div class="mt-6 text-start group inline-flex text-base font-medium">
                                    <svg class="flex-shrink-0 mr-2 h-6 w-6 text-gray-500 group-hover:text-gray-500"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <span class="text-gray-500 hover:text-gray-700">{{ $seller->name }}</span>
                                </div>
                                <div class="mt-6 text-start group inline-flex text-base font-medium">
                                    <svg class="flex-shrink-0 mr-2 h-6 w-6 text-gray-500 group-hover:text-gray-500"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round"
                                            d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" />
                                    </svg>
                                    <span class="text-gray-500 hover:text-gray-700">{{ $seller->email }}</span>
                                </div>
                                <div class="mt-6 text-start group inline-flex text-base font-medium">
                                    <svg class="flex-shrink-0 mr-2 h-6 w-6 text-gray-500 group-hover:text-gray-500"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                    </svg>
                                    <span class="text-gray-500 hover:text-gray-700">{{ $seller->campus_role ?? "Data Not
                                        Provided"}}</span>
                                </div>
                                <div class="mt-6 text-start group inline-flex text-base font-medium">
                                    <svg class="flex-shrink-0 mr-2 h-6 w-6 text-gray-500 group-hover:text-gray-500"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
                                    </svg>
                                    <span class="text-gray-500 hover:text-gray-700">{{ $seller->id_number ?? "Data Not
                                        Provided"}}</span>
                                </div>
                                <div class="mt-6 text-start group inline-flex text-base font-medium">
                                    <svg class="flex-shrink-0 mr-2 h-6 w-6 text-gray-500 group-hover:text-gray-500"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                    </svg>
                                    <span class="text-gray-500 hover:text-gray-700">{{ $seller->phone_number ?? "Data
                                        Not Provided"}}</span>
                                </div>
                                <div class="mt-6 text-start group inline-flex text-base font-medium">
                                    <svg class="flex-shrink-0 mr-2 h-6 w-6 text-gray-500 group-hover:text-gray-500"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                    </svg>
                                    <span class="text-gray-500 hover:text-gray-700">{{ $seller->address ?? "Data Not
                                        Provided"}}</span>
                                </div>
                            </div>
                        </li>
                        <!-- More people... -->
                    </ul>
                    <div class="flex-1 relative z-0 flex overflow-hidden">
                        <main class="flex-1 relative z-0  overflow-y-auto focus:outline-none xl:order-last rounded">
                            <article x-data="{ activeTab: 'tab1' }">
                                <!-- Tabs -->
                                <div class="mt-6 mb-8 sm:mt-2 2xl:mt-5 shadow bg-blue-900 rounded-lg  ">
                                    <div class="border-gray-200">
                                        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                                            <nav class="-mb-px flex justify-center space-x-8" aria-label="Tabs">

                                                <a href="#" @click="activeTab = 'tab1'"
                                                    :class="{ 'border-b-2 border-white': activeTab === 'tab1' }"
                                                    class=" border-white py-4 text-white" aria-current="page">
                                                    Items
                                                </a>
                                                <a href="#" @click="activeTab = 'tab2'"
                                                    :class="{ 'border-b-2 border-white': activeTab === 'tab2' }"
                                                    class=" border-white py-4 text-white" aria-current="page">
                                                    Reviews
                                                </a>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-black" x-show="activeTab === 'tab2'"
                                    class=" inset-0 z-50 overflow-auto bg-black bg-opacity-50 flex items-center justify-center">
                                    <form action="{{ route('reviews.store') }}" method="POST">
                                        @csrf
                                        <div
                                            class="bg-white text-black p-8 max-w-6xl  mx-4 sm:mx-auto rounded shadow-lg">
                                            <!-- Modal Content -->
                                            <div>
                                                <h1 class="text-2xl font-bold mb-4">Review {{ $seller->name }}</h1>
                                                <p>Kindly take a moment to share your valuable feedback and rate your
                                                    experience with the seller</p>
                                            </div>
                                            <div class="mt-4">
                                                <p>Rating</p>
                                                <input type="hidden" name="profile_id" value="{{$seller->id }}">
                                                <div class="mt-1">
                                                    <div class="flex items-center">
                                                        <p class="star-rating">
                                                            <i class="my-star-rating rating-star-1 cursor-pointer"
                                                                data-rating="1"></i>
                                                            <i class="my-star-rating rating-star-2 cursor-pointer"
                                                                data-rating="2"></i>
                                                            <i class="my-star-rating rating-star-3 cursor-pointer"
                                                                data-rating="3"></i>
                                                            <i class="my-star-rating rating-star-4 cursor-pointer"
                                                                data-rating="4"></i>
                                                            <i class="my-star-rating rating-star-5 cursor-pointer"
                                                                data-rating="5"></i>
                                                        </p>
                                                    </div>

                                                    <input name="rating" class="hidden" type="number" readonly
                                                        id="output_rating" value="0">
                                                </div>
                                            </div>

                                            <div class="mt-4 ">
                                                <label for="review"
                                                    class="block text-sm font-medium text-gray-700">Review</label>
                                                <div
                                                    class="border mt-1 border-gray-300 rounded-lg shadow-sm overflow-hidden focus-within:border-indigo-500 focus-within:ring-1 focus-within:ring-indigo-500">
                                                    <textarea rows="5" name="review" id="review"
                                                        class="block w-full py-3 border-0 resize-none focus:ring-0 sm:text-sm"
                                                        placeholder="Add your review..." required></textarea>
                                                    <x-input-error :messages="$errors->get('review')" class="mt-2" />
                                                    <!-- Spacer element to match the height of the toolbar -->
                                                    <div class="py-2" aria-hidden="true">
                                                        <!-- Matches height of button in toolbar (1px border + 36px content height) -->
                                                        <div class="py-px">
                                                            <div class="h-9"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal Footer -->
                                            <div class="mt-4 flex gap-2 justify-end">
                                                <button type="submit"
                                                    class="bg-indigo-700 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded">
                                                    Submit
                                                </button>
                                            </div>
                                        </div>

                                    </form>
                                </div>

                                @include('seller.profile.review')
                                @include('seller.profile.seller-products')



                            </article>
                        </main>
                    </div>
                </div>

            </div>
</x-app-layout>




<style>
    /*set the default color of the stars*/
    .star-rating {
        color: #bebebe;
        font-size: 2em;
    }

    /*create the star*/
    .my-star-rating::before {
        content: "\002605";
    }

    /*remove the default style (italic) of the star*/
    .my-star-rating {
        font-style: unset !important;
    }

    /*set active star color*/
    .is-active {
        color: #fb8900;
    }

    /*set color on hover*/
    .my-star-rating:not(.is-active):hover {
        color: #fb8900;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function(){
    (function(){
        let sr = document.querySelectorAll('.my-star-rating');
        let i = 0;

        document.querySelector('#output_rating').value = 0;
        //loop through stars
        while (i < sr.length){
            //attach click event
            sr[i].addEventListener('click', function(){
                //current star
                let cs = parseInt(this.getAttribute("data-rating"));
                //output current clicked star value
                document.querySelector('#output_rating').value = cs;
                /*our first loop to set the class on preceding star elements*/
                let pre = cs; //set the current star value
                //loop through and set the active class on preceding stars
                while(1 <= pre){
                    //check if the classlist contains the active class, if not, add the class
                    if(!document.querySelector('.rating-star-'+pre).classList.contains('is-active')){
                        document.querySelector('.rating-star-'+pre).classList.add('is-active');
                    }
                    //decrement our current index
                    --pre;
                }//end of first loop

                /*our second loop to unset the class on succeeding star elements*/
                //loop through and unset the active class, skipping the current star
                let succ = cs+1;
                while(5 >= succ){
                    //check if the classlist contains the active class, if yes, remove the class
                    if(document.querySelector('.rating-star-'+succ).classList.contains('is-active')){
                        document.querySelector('.rating-star-'+succ).classList.remove('is-active');
                    }
                    //increment current index
                    ++succ;
                }

            })//end of click event
            i++;
        }//end of while loop
    })();//end of function
})
</script>
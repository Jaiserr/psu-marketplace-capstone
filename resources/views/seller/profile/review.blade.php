
<div x-show="activeTab === 'tab2'" class="bg-white">
        <div class="px-4 flex items-center justify-between sm:px-6 lg:px-0">
            <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Recent Reviews</h2>
        </div>
        @foreach ($reviews as $review)
        <div class="mt-6 pb-10 border-t border-b border-gray-200 divide-y divide-gray-200 space-y-10">
            <div class="pt-10 lg:grid lg:grid-cols-12 lg:gap-x-8">
                <div
                    class="lg:col-start-5 lg:col-span-8 xl:col-start-4 xl:col-span-9 xl:grid xl:grid-cols-3 xl:gap-x-8 xl:items-start">
                    <div class="flex items-center xl:col-span-1">
                        <div class="flex items-center">
                            @include('seller.profile.rating-star')
                        </div>
                        <p class="ml-3 text-sm text-gray-700">
                            {{ $review->rating }}<span class="sr-only"> out of 5 stars</span></p>
                    </div>

                    <div class="mt-4 lg:mt-6 xl:mt-0 xl:col-span-2">
                        <div class="space-y-6 text-sm text-gray-500">
                            <p>
                                {{ $review->review }}

                            </p>

                        </div>
                    </div>
                </div>

                <div
                    class="mt-6 flex items-center text-sm lg:mt-0 lg:col-start-1 lg:col-span-4 lg:row-start-1 lg:flex-col lg:items-start xl:col-span-3">
                    <p class="font-medium text-gray-900">
                        {{ $review->user->name }}

                    </p>
                    <time datetime="2021-01-06"
                        class="ml-4 border-l border-gray-200 pl-4 text-gray-500 lg:ml-0 lg:mt-2 lg:border-0 lg:pl-0">
                        {{ $review->created_at->diffForHumans() }}
                    </time>
                </div>
            </div>

            <!-- More reviews... -->
        </div>
        @endforeach
</div>

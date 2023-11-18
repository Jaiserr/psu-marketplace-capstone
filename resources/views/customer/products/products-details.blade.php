<x-app-layout>
    <div class="py-12">
        <div class="relative mb-12 px-4">


            <section class="overflow-hidden bg-indigo-700 py-11 text-white rounded-lg">
                <div class="flex max-w-6xl px-4 py-4 mx-auto lg:py-8 md:px-6">
                    <div class="w-full px-4">
                        <div>
                            <div class="mb-8 ">
                                <div>
                                    <h2 class="max-w-xl mb-2 text-2xl font-bold md:text-4xl">
                                        {{ $product->product_name }}
                                    </h2>
                                    <button
                                        class="px-4 py-2 mb-2 mr-4 bg-yellow-600 text-sm text-white font-semibold border rounded-md hover:border-blue-400">
                                        {{ $product->category }}
                                    </button>
                                </div>
                                <p class="inline-block mb-6 text-4xl font-bold ">
                                    <span>₱{{ $product->price }}</span>
                                </p>
                                @if ($product->details)
                                <p class="max-w-md text-gray-50">
                                    {{ $product->details }}
                                </p>
                                @endif
                                <p>Seller: {{ $product->user->name }}</p>
                            </div>

                            <div class="mb-8">
                                <div>
                                    <div class="flex flex-wrap -mx-2 -mb-2">
                                        <button
                                            class="px-4 py-2 mb-2 mr-4 bg-indigo-950 text-white font-semibold border rounded-md hover:border-blue-400">
                                            {{ $product->availability }}
                                        </button>
                                        <button
                                            class="px-4 py-2 mb-2 mr-4 bg-indigo-900 text-white font-semibold border rounded-md hover:border-blue-400">
                                            {{ $product->condition }}
                                        </button>
                                    </div>
                                    {{-- message code --}}
                                    <a href="{{ route('messages.create', $product) }}"
                                        class="transform active:scale-[.98] mt-2 flex w-full items-center justify-center rounded-md border border-transparent bg-[#DE3151] py-3 px-8 text-base font-medium text-white hover:bg-[#d22544] focus:outline-none focus:ring-2 focus:ring-[#DE3151] focus:ring-offset-2">
                                        Message
                                    </a>
                                    {{-- seller profile --}}
                                    <a href="{{ route('seller-profile.show',$product->user->id ) }}"
                                        class="transform active:scale-[.98] mt-2 flex w-full items-center justify-center rounded-md border border-transparent bg-[#DE3151] py-3 px-8 text-base font-medium text-white hover:bg-[#d22544] focus:outline-none focus:ring-2 focus:ring-[#DE3151] focus:ring-offset-2">
                                        Seller Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full mb-8 md:mb-0">
                        <div class="sticky top-0 z-50 overflow-hidden">
                            @php
                            $imagePathsArray = explode('|', $product->images);
                            @endphp
                            <div class="flex-wrap hidden md:flex ">
                                @foreach ($imagePathsArray as $image)

                                <div class="w-1/2 p-2">
                                    <a href="#" class="block border rounded-md border-blue-300 hover:border-blue-300">
                                        <img src="{{ asset('storage/' . $image) }}" alt=""
                                            class="object-cover w-full h-[17rem]">
                                    </a>
                                </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-app-layout>
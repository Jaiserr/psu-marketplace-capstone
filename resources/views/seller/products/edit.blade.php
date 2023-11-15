<x-app-layout>
    <div class="mx-auto px-4 sm:px-6">
        <section class="bg-gray-100 py-10">
            <div class="px-4 mx-auto ">
                <div class="p-8 px-4 bg-indigo-700 rounded-lg">
                    <div class="grid grid-cols-1 lg:grid-cols-1 gap-6">
                        <div>
                            <form action="{{ route('admin-products.update', $product) }}" method="POST"
                                enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="px-4 mb-6">
                                    <label for="product_name" class="block mb-2 text-sm font-medium text-white"> Product
                                        Name</label>
                                    <input id="product_name" value="{{ old('product_name', $product->product_name) }}"
                                        class="block w-full px-4 py-3 mb-2 text-sm placeholder-gray-500 bg-white border rounded "
                                        type="text" name="product_name" placeholder="Enter product name">
                                    <x-input-error :messages="$errors->get('product_name')" class="mt-2" />
                                </div>
                                <div class="flex flex-wrap items-center">
                                    <div class="w-full px-4 mb-6 lg:w-2/4">
                                        <label for="category" class="block mb-2 text-sm font-medium text-white">
                                            Category
                                        </label>
                                        <div class="relative">
                                            <select
                                                class="block w-full px-4 py-3 mb-2 text-sm placeholder-gray-500 bg-white border rounded appearance-none"
                                                name="category" id="category">
                                                <option value="" disabled selected>Select</option>
                                                <option {{ old('category', $product->category) === "Men's Fashion" ?
                                                    'selected' : '' }}
                                                    value="Men's Fashion">Men's Fashion</option>
                                                <option {{ old('category', $product->category) === "Women's Fashion" ?
                                                    'selected' : '' }}
                                                    value="Women's Fashion">Women's Fashion</option>
                                                <option value="Mobile Phones & Gadgets" {{ old('category', $product->
                                                    category) === "Mobile Phones & Gadgets" ? 'selected' : '' }}>Mobile
                                                    Phones & Gadgets</option>
                                                <option {{ old('category', $product->category) === "Computer & Techs" ?
                                                    'selected' : '' }}
                                                    value="Computer & Techs">Computer & Techs</option>
                                                <option value="School Uniforms and Supplies" {{ old('category',
                                                    $product->category) === "School Uniforms and Supplies" ?
                                                    'selected' : '' }}
                                                    >School Uniforms and
                                                    Supplies</option>
                                                <option {{ old('category', $product->category) === "Food and Drinks" ?
                                                    'selected' : '' }}
                                                    value="Food and Drinks">Food and Drinks</option>
                                                <option {{ old('category', $product->category) === "Musical Instruments"
                                                    ?
                                                    'selected' : '' }}
                                                    value="Musical Instruments">Musical Instruments</option>
                                            </select>
                                            <div
                                                class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-500 pointer-events-none">
                                                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <x-input-error :messages="$errors->get('category')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="w-full px-4 mb-6 lg:w-2/4">
                                        <label for="condition" class="block mb-2 text-sm font-medium text-white">
                                            Condition
                                        </label>
                                        <div class="relative">
                                            <select id="condition"
                                                class="block w-full px-4 py-3 mb-2 text-sm placeholder-gray-500 bg-white border rounded appearance-none"
                                                name="condition">
                                                <option value="" disabled selected>Select</option>
                                                <option {{ old('condition', $product->condition) === "New"
                                                    ?
                                                    'selected' : '' }}
                                                    value="New">New</option>
                                                <option {{ old('condition', $product->condition) === "Used (Like new)"
                                                    ?
                                                    'selected' : '' }}
                                                    value="Used (Like new)">Used (Like new)</option>
                                                <option {{ old('condition', $product->condition) === "Used (Good)"
                                                    ?
                                                    'selected' : '' }}
                                                    value="Used (Good)">Used (Good)</option>
                                                <option {{ old('condition', $product->condition) === "Used (Fair)"
                                                    ?
                                                    'selected' : '' }}
                                                    value="Used (Fair)">Used (Fair)</option>
                                            </select>
                                            <div
                                                class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-500 pointer-events-none">
                                                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <x-input-error :messages="$errors->get('condition')" class="mt-2" />
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-wrap items-center">
                                    <div class="w-full px-4 mb-6 lg:w-2/4">
                                        <label for="price" class="block mb-2 text-sm font-medium text-white"> Product
                                            Price</label>
                                        <input value="{{ old('price', $product->price) }}"
                                            class="block w-full px-4 py-3 mb-2 text-sm placeholder-gray-500 bg-white border rounded "
                                            type="number" name="price" id="price" placeholder="Enter product price">
                                        <x-input-error :messages="$errors->get('price')" class="mt-2" />
                                    </div>
                                    <div class="w-full px-4 mb-6 lg:w-2/4">
                                        <label for="availability" class="block mb-2 text-sm font-medium text-white">
                                            Availability
                                        </label>
                                        <div class="relative">
                                            <select id="availability"
                                                class="block w-full px-4 py-3 mb-2 text-sm placeholder-gray-500 bg-white border rounded appearance-none"
                                                name="availability">
                                                <option value="" disabled selected>Select</option>
                                                <option {{ old('availability', $product->availability) === "Available"
                                                    ?
                                                    'selected' : '' }}
                                                    value="Available">Available</option>
                                                <option {{ old('availability', $product->availability) === "Sold"
                                                    ?
                                                    'selected' : '' }}
                                                    value="Sold">Sold</option>
                                            </select>
                                            <div
                                                class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-500 pointer-events-none">
                                                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <x-input-error :messages="$errors->get('availability')" class="mt-2" />
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 mb-6">
                                    <label for="images" class="block mb-2 text-sm font-medium text-white"
                                        for="file_input">Upload
                                        file</label>
                                    <input value="{{ old('images[]', $product->images) }}" name="images[]" multiple
                                        accept="image/*" id="images"
                                        class="block w-full text-sm text-gray-600 border border-gray-200 rounded cursor-pointer file:hover:bg-gray-200 file:border-solid file:border-0 file:cursor-pointer  file:mr-5 file:px-5 file:py-3 bg-gray-50   file:border-r file:border-gray-300 file:bg-gray-100 "
                                        type="file">
                                    <x-input-error :messages="$errors->get('images')" class="mt-2" />
                                </div>
                                <div class="px-4 ">
                                    <div class="flex ">
                                        <button type="submit"
                                            class="inline-block px-6 py-2.5 bg-blue-500  text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-600 hover:shadow-lg ">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
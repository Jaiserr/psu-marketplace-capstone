<x-app-layout>
    {{-- <div class="mx-auto px-4 sm:px-6">
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
                                                <option value="School Uniforms & Supplies" {{ old('category',
                                                    $product->category) === "School Uniforms & Supplies" ?
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
                                                <option {{ old('category', $product->category) === "Home Appliances" ?
                                                    'selected' : '' }} value="Home Appliances">Home Appliances</option>
                                                <option {{ old('category', $product->category) === "Sports Equipment" ?
                                                    'selected' : '' }} value="Sports Equipment">Sports Equipment</option>
                                                <option {{ old('category', $product->category) === "Toys & Games" ?
                                                    'selected' : '' }} value="Toys & Games">Toys & Games</option>
                                                <option {{ old('category', $product->category) === "Furniture & Home Living" ?
                                                    'selected' : '' }} value="Furniture & Home Living">Furniture & Home Living</option>
                                                <option {{ old('category', $product->category) === "Vehicles & Components" ?
                                                    'selected' : '' }} value="Vehicles & Components">Vehicles & Components</option>
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
                                    <div class="w-full px-4 mb-6 lg:w-2/4">
                                        <label for="exchange" class="block mb-2 text-sm font-medium text-white">
                                            List as Academic Resource Exchange
                                        </label>
                                        <div class="relative">
                                            <select id="exchange"
                                                class="block w-full px-4 py-3 mb-2 text-sm placeholder-gray-500 bg-white border rounded appearance-none"
                                                name="exchange">
                                                <option value="" disabled selected>Select</option>
                                                <option {{ old('exchange', $product->exchange) === "Yes"
                                                    ?
                                                    'selected' : '' }}
                                                    value="Yes">Yes</option>
                                                <option {{ old('exchange', $product->exchange) === "No"
                                                    ?
                                                    'selected' : '' }}
                                                    value="No">No</option>
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
                                <div class=" mb-6">
                                    <div class="flex flex-wrap">
                                        <div class="w-full">
                                            <label for="details" class="text-sm ml-3 font-semibold text-white">
                                                Details
                                            </label>
                                        </div>
                                        <div class="w-full p-3">
                                            <textarea rows="4" id="details" name="details"
                                                placeholder="Enter the details of the product" required
                                                class="block w-full px-4 py-4 leading-tight placeholder-gray-400 border rounded ">{{ old('details', $product->details) }}</textarea>
                                        </div>
                                    </div>

                                    <x-input-error :messages="$errors->get('details')" class="mt-2" />
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
    </div> --}}
    <div class="relative p-4 bg-white rounded-lg shadow-lg dark:bg-gray-800 sm:p-5">
        <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                Updated Item
            </h3>
        </div>
        <form action="{{ route('admin-products.update', $product) }}" method="POST"
        enctype="multipart/form-data">
        @method('PUT')
        @csrf
            <div class="grid gap-4 mb-4 sm:grid-cols-2">
                <div>
                    <label for="product_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Item Name</label>
                    <input type="text" name="product_name" id="product_name" value="{{ old('product_name', $product->product_name) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Enter Item Name">
                    <x-input-error :messages="$errors->get('product_name')" class="mt-2" />
                </div>
                <div>
                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                    <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="" disabled selected>Select</option>
                        <option {{ old('category', $product->category) === "Men Fashion" ?
                            'selected' : '' }}
                            value="Men Fashion">Men Fashion</option>
                        <option {{ old('category', $product->category) === "Women Fashion" ?
                            'selected' : '' }}
                            value="Women Fashion">Women Fashion</option>
                        <option value="Mobile Phones & Gadgets" {{ old('category', $product->
                            category) === "Mobile Phones & Gadgets" ? 'selected' : '' }}>Mobile
                            Phones & Gadgets</option>
                        <option {{ old('category', $product->category) === "Computer & Techs" ?
                            'selected' : '' }}
                            value="Computer & Techs">Computer & Techs</option>
                        <option value="School Uniforms & Supplies" {{ old('category',
                            $product->category) === "School Uniforms & Supplies" ?
                            'selected' : '' }}
                            >School Uniforms and
                            Supplies</option>
                        <option {{ old('category', $product->category) === "Food & Drinks" ?
                            'selected' : '' }}
                            value="Food & Drinks">Food & Drinks</option>
                        <option {{ old('category', $product->category) === "Musical Instruments"
                            ?
                            'selected' : '' }}
                            value="Musical Instruments">Musical Instruments</option>
                        <option {{ old('category', $product->category) === "Home Appliances" ?
                            'selected' : '' }} value="Home Appliances">Home Appliances</option>
                        <option {{ old('category', $product->category) === "Sports Equipment" ?
                            'selected' : '' }} value="Sports Equipment">Sports Equipment</option>
                        <option {{ old('category', $product->category) === "Toys & Games" ?
                            'selected' : '' }} value="Toys & Games">Toys & Games</option>
                        <option {{ old('category', $product->category) === "Furniture & Home Living" ?
                            'selected' : '' }} value="Furniture & Home Living">Furniture & Home Living</option>
                        <option {{ old('category', $product->category) === "Vehicles & Components" ?
                            'selected' : '' }} value="Vehicles & Components">Vehicles & Components</option>
                    </select>
                    <x-input-error :messages="$errors->get('category')" class="mt-2" />
                </div>
                <div>
                    <label for="condition" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Condition</label>
                    <select id="condition" name="condition" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
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
                    <x-input-error :messages="$errors->get('condition')" class="mt-2" />
                </div>
                <div>
                    <label for="exchange" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">List as Academic Resource Exchange</label>
                    <select id="exchange" name="exchange" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="" disabled selected>Select</option>
                        <option {{ old('exchange', $product->exchange) === "Yes"
                            ?
                            'selected' : '' }}
                            value="Yes">Yes</option>
                        <option {{ old('exchange', $product->exchange) === "No"
                            ?
                            'selected' : '' }}
                            value="No">No</option>
                    </select>
                    <x-input-error :messages="$errors->get('exchange')" class="mt-2" />
                </div>
                <div>
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                    <input value="{{ old('price', $product->price) }}" type="number" name="price" id="price" value="Google" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Enter Item Price">
                    <x-input-error :messages="$errors->get('price')" class="mt-2" />
                </div>
                <div>
                    <label for="availability" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Availability</label>
                    <select id="availability" name="availability" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
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
                    <x-input-error :messages="$errors->get('availability')" class="mt-2" />
                </div>
                <div class="sm:col-span-2">
                    <label for="images" for="file_input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Item Image</label>
                    <input type="file" value="{{ old('images[]', $product->images) }}" name="images[]" id="images" multiple accept="image/*" value="{{ old('product_name') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Enter Item Name">
                </div>
                <div class="sm:col-span-2">
                    <label for="details" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <textarea id="details" name="details" rows="5" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Write a description...">{{ old('details', $product->details) }}</textarea>                    
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <button type="submit" class="flex items-center justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-5 h-5 mr-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path d="M12.687 14.408a3.01 3.01 0 0 1-1.533.821l-3.566.713a3 3 0 0 1-3.53-3.53l.713-3.566a3.01 3.01 0 0 1 .821-1.533L10.905 2H2.167A2.169 2.169 0 0 0 0 4.167v11.666A2.169 2.169 0 0 0 2.167 18h11.666A2.169 2.169 0 0 0 16 15.833V11.1l-3.313 3.308Zm5.53-9.065.546-.546a2.518 2.518 0 0 0 0-3.56 2.576 2.576 0 0 0-3.559 0l-.547.547 3.56 3.56Z"/>
                        <path d="M13.243 3.2 7.359 9.081a.5.5 0 0 0-.136.256L6.51 12.9a.5.5 0 0 0 .59.59l3.566-.713a.5.5 0 0 0 .255-.136L16.8 6.757 13.243 3.2Z"/>
                    </svg>
                    Update
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
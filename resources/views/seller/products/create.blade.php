<x-app-layout>
    {{-- <div class="mx-auto px-4 sm:px-6">
        <section class="bg-gray-100 py-10">
            <div class="px-4 mx-auto ">
                <div class="p-8 px-4 bg-indigo-700 rounded-lg">
                    <div class="grid grid-cols-1 lg:grid-cols-1 gap-6">
                        <div>
                            <form action="{{ route('admin-products.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="px-4 mb-6">
                                    <label for="product_name" class="block mb-2 text-sm font-medium text-white"> Product
                                        Name</label>
                                    <input id="product_name" value="{{ old('product_name') }}"
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
                                                <option value="Men Fashion">Men's Fashion</option>
                                                <option value="Women Fashion">Women's Fashion</option>
                                                <option value="Mobile Phones & Gadgets">Mobile Phones & Gadgets</option>
                                                <option value="Computer & Techs">Computer & Techs</option>
                                                <option value="School Uniforms & Supplies">School Uniforms and
                                                    Supplies</option>
                                                <option value="Food & Drinks">Food and Drinks</option>
                                                <option value="Musical Instruments">Musical Instruments</option>
                                                <option value="Home Appliances">Home Appliances</option>
                                                <option value="Sports Equipment">Sports Equipment</option>
                                                <option value="Toys & Games">Toys and Games</option>
                                                <option value="Furniture & Home Living">Furniture & Home Living</option>
                                                <option value="Vehicles & Components">Vehicles & Components</option>
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
                                                <option value="New">New</option>
                                                <option value="Used (Like new)">Used (Like new)</option>
                                                <option value="Used (Good)">Used (Good)</option>
                                                <option value="Used (Fair)">Used (Fair)</option>
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
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
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
                                            <x-input-error :messages="$errors->get('exchange')" class="mt-2" />
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-wrap items-center">
                                    <div class="w-full px-4 mb-6 lg:w-2/4">
                                        <label for="price" class="block mb-2 text-sm font-medium text-white"> Product
                                            Price</label>
                                        <input value="{{ old('price') }}"
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
                                                <option value="Available">Available</option>
                                                <option value="Sold">Sold</option>
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
                                    <input value="{{ old('images[]') }}" name="images[]" multiple accept="image/*"
                                        id="images"
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
                                                class="block w-full px-4 py-4 leading-tight placeholder-gray-400 border rounded ">{{ old('details') }}</textarea>
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
                Add Item
            </h3>
        </div>
        <form action="{{ route('admin-products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="grid gap-4 mb-4 sm:grid-cols-2">
                <div>
                    <label for="product_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Item Name</label>
                    <input type="text" name="product_name" id="product_name" value="{{ old('product_name') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Enter Item Name">
                </div>
                <div>
                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                    <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="" disabled selected>Select</option>
                        <option value="Men Fashion">Men's Fashion</option>
                        <option value="Women Fashion">Women's Fashion</option>
                        <option value="Mobile Phones & Gadgets">Mobile Phones & Gadgets</option>
                        <option value="Computer & Techs">Computer & Techs</option>
                        <option value="School Uniforms & Supplies">School Uniforms and
                            Supplies</option>
                        <option value="Food & Drinks">Food and Drinks</option>
                        <option value="Musical Instruments">Musical Instruments</option>
                        <option value="Home Appliances">Home Appliances</option>
                        <option value="Sports Equipment">Sports Equipment</option>
                        <option value="Toys & Games">Toys and Games</option>
                        <option value="Furniture & Home Living">Furniture & Home Living</option>
                        <option value="Vehicles & Components">Vehicles & Components</option>
                    </select>
                </div>
                <div>
                    <label for="condition" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Condition</label>
                    <select id="condition" name="condition" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="" disabled selected>Select</option>
                        <option value="New">New</option>
                        <option value="Used (Like new)">Used (Like new)</option>
                        <option value="Used (Good)">Used (Good)</option>
                        <option value="Used (Fair)">Used (Fair)</option>
                    </select>
                </div>
                <div>
                    <label for="exchange" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">List as Academic Resource Exchange</label>
                    <select id="exchange" name="exchange" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="" disabled selected>Select</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div>
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                    <input value="{{ old('price') }}" type="number" name="price" id="price" value="Google" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Enter Item Price">
                </div>
                <div>
                    <label for="availability" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Availability</label>
                    <select id="availability" name="availability" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="" disabled selected>Select</option>
                        <option value="Available">Available</option>
                        <option value="Sold">Sold</option>
                    </select>
                </div>
                <div class="sm:col-span-2">
                    <label for="images" for="file_input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Item Image</label>
                    <input type="file" value="{{ old('images[]') }}" name="images[]" id="images" multiple accept="image/*" value="{{ old('product_name') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Enter Item Name">
                </div>
                <div class="sm:col-span-2">
                    <label for="details" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <textarea id="details" name="details" rows="5" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Write a description..."></textarea>                    
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <button type="submit" class="flex items-center justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                    </svg>
                    Add Item
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
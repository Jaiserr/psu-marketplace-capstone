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
              <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Listing</a>
            </div>
          </li>
        </ol>
    </nav>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="rounded-md bg-yellow-50 p-4 mb-5">
                <div class="flex">
                  <div class="flex-shrink-0">
                    <!-- Heroicon name: solid/exclamation -->
                    <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                  </div>
                  <div class="ml-3">
                    <h3 class="text-sm font-medium text-yellow-800">Attention needed</h3>
                    <div class="mt-2 text-sm text-yellow-700">
                      <p>For each product that can be sold, it is required to pay 15% from the income of the sold item. Commission can be paid at our main office located at <strong>Pangasinan State University Alaminos City Campus in Bolaney, Alaminos City, Pangasinan</strong>. 
                        <strong>We expect your loyalty</strong>.</p>
                    </div>
                  </div>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div class="min-w-0 flex-1">
                    <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                        Products
                    </h2>
                </div>
                <div class="mt-5 flex gap-2 lg:mt-0">
                    <a href="{{ route('admin-products.create') }}"
                        class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Add Products
                    </a>
                </div>
            </div>

            <div class="mt-4">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-white uppercase  bg-indigo-700">
                            <tr>
                                <th scope="col" class="px-16 py-3">
                                    <span class="sr-only">Image</span>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Product Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Condition
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Price
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Category
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Availability
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($products as $product)
                            @php
                            $imagePathsArray = explode('|', $product->images);
                            @endphp

                            <tr class="bg-white border-b  hover:bg-gray-50 ">
                                <td class="p-4">
                                    <img src="{{ asset('storage/' . $imagePathsArray[0]) }}"
                                        class="w-16  max-w-full max-h-full" alt="{{ $product->product_name }}">
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900 ">
                                    {{ $product->product_name }}
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900 ">
                                    {{ $product->condition }}
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900 ">
                                    {{ $product->price }}
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900 ">
                                    {{ $product->category }}
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900 ">
                                    {{ $product->availability }}
                                </td>
                                <td class="px-6 py-4  gap-2 items-center">
                                    <a href="{{ route('admin-products.edit', $product) }}"
                                        class="font-medium text-indigo-900 dark:text-indigo-900 hover:underline">
                                        Edit
                                    </a>
                                    {{-- <form class="inline" method="POST"
                                        action="{{ route('admin-products.destroy', $product) }}">
                                        @csrf
                                        @method('delete')
                                        <button class="ml-4 font-medium text-red-600 dark:text-red-500 hover:underline">
                                            Remove
                                        </button>
                                    </form> --}}
                                    <a href="{{ route('admin-products.show', $product) }}"
                                        class="ml-4 font-medium text-blue-600  hover:underline">More</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
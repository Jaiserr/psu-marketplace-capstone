<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
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
                                    <form class="inline" method="POST"
                                        action="{{ route('admin-products.destroy', $product) }}">
                                        @csrf
                                        @method('delete')
                                        <button class="ml-4 font-medium text-red-600 dark:text-red-500 hover:underline">
                                            Remove
                                        </button>
                                    </form>
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
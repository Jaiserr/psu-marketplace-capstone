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
                            <tr class="bg-white border-b  hover:bg-gray-50 ">
                                <td class="p-4">
                                    <img src="data:image/jpeg;base64,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"
                                        class="w-16  max-w-full max-h-full" alt="Apple iMac">
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900 ">
                                    iMac 27"
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900 ">
                                    iMac 27"
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900 ">
                                    $2499
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900 ">
                                    $2499
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900 ">
                                    $2499
                                </td>
                                <td class="px-6 py-4  gap-2 items-center">
                                    <a href="" class="font-medium text-indigo-900 dark:text-indigo-900 hover:underline">
                                        Edit
                                    </a>
                                    <a href="#"
                                        class="ml-4 font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a>
                                    <a href="#" class="ml-4 font-medium text-blue-600  hover:underline">More</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
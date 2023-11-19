<div class="flex items-center mt-10 justify-between">
    <div class="min-w-0 flex-1">
        <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
            Products
        </h2>
    </div>
</div>


<div class="mt-4">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-white uppercase  bg-indigo-700">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Product Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Seller
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr class="bg-white border-b  hover:bg-gray-50 ">
                    <td class="px-6 py-4 font-semibold text-gray-900 ">
                        {{ $product->product_name }}
                    </td>
                    <td class="px-6 py-4 font-semibold text-gray-900 ">
                        {{ $product->category }}
                    </td>
                    <td class="px-6 py-4 font-semibold text-gray-900 ">
                        {{ $product->price }}
                    </td>
                    <td class="px-6 py-4 font-semibold text-gray-900 ">
                        {{ $product->user->name }}
                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
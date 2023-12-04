<div class="flex items-center mt-10 justify-between">
    <div class="min-w-0 flex-1">
        <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
            Newly Added Products
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
                        Availabilty
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Seller
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
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
                        {{ $product->availability }}
                    </td>
                    <td class="px-6 py-4 font-semibold text-gray-900 ">
                        {{ $product->user->name }}
                    </td>
                    <td class="px-6 py-4 font-semibold text-gray-900 ">
                        @if ($product->approved !== "1")
                        <form action="{{ route('approve-product') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="hidden" name="name" value="{{ $product->name }}">
                            <button
                                class="px-3 py-1.5 hover:bg-indigo-800 bg-indigo-700 rounded text-white">
                                Approve
                            </button>
                        </form>
                        @else
                        <form action="{{ route('block-product') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="hidden" name="name" value="{{ $product->name }}">
                            <button class="px-3 py-1.5 hover:bg-red-800 bg-red-700 rounded text-white">
                                Block
                            </button>
                        </form>
                        @endif  
                    </td>
                    <td class="px-6 py-4 font-semibold text-gray-900 ">
                        <a href="{{ route('admin-products.edit', $product) }}"
                            class="font-medium text-indigo-900 dark:text-indigo-900 hover:underline">
                            Edit
                        </a>
                        <form class="inline" method="POST" action="{{ route('admin-products.destroy', $product) }}">
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
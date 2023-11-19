<div class="flex items-center mt-10 justify-between">
    <div class="min-w-0 flex-1">
        <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
            Registered Customers
        </h2>
    </div>
</div>


<div class="mt-4">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-white uppercase  bg-indigo-700">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email Address
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Phone Number
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Address
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                <tr class="bg-white border-b  hover:bg-gray-50 ">
                    <td class="px-6 py-4 font-semibold text-gray-900 ">
                        {{ $customer->name }}
                    </td>
                    <td class="px-6 py-4 font-semibold text-gray-900 ">
                        {{ $customer->email }}
                    </td>
                    <td class="px-6 py-4 font-semibold text-gray-900 ">
                        {{ $customer->phone_number }}
                    </td>
                    <td class="px-6 py-4 font-semibold text-gray-900 ">
                        {{ $customer->address }}
                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
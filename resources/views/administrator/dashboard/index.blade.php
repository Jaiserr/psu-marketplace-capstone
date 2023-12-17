<x-app-layout>
    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div>
                <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="relative bg-white pt-5 px-4 pb-12 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden">
                        <dt>
                            <div class="absolute bg-indigo-500 rounded-md p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" class="stroke-white w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                </svg>
                            </div>
                            <p class="ml-16 text-sm font-medium text-gray-500 truncate">Total Registered Sellers</p>
                        </dt>
                        <dd class="ml-16 pb-6 flex items-baseline sm:pb-7">
                            <p class="text-2xl font-semibold text-gray-900">{{ $sellersCount }}</p>
                        </dd>
                    </div>
                    <div class="relative bg-white pt-5 px-4 pb-12 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden">
                        <dt>
                            <div class="absolute bg-indigo-500 rounded-md p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" class="stroke-white w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                </svg>
                            </div>
                            <p class="ml-16 text-sm font-medium text-gray-500 truncate">Total Products</p>
                        </dt>
                        <dd class="ml-16 pb-6 flex items-baseline sm:pb-7">
                            <p class="text-2xl font-semibold text-gray-900">{{ $productsCount }}</p>
                        </dd>
                    </div>
                    <div class="relative bg-white pt-5 px-4 pb-12 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden">
                        <dt>
                            <div class="absolute bg-indigo-500 rounded-md p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" class="stroke-white w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>
                            </div>
                            <p class="ml-16 text-sm font-medium text-gray-500 truncate">Total Registered Customers</p>
                        </dt>
                        <dd class="ml-16 pb-6 flex items-baseline sm:pb-7">
                            <p class="text-2xl font-semibold text-gray-900">{{ $customersCount }}</p>
                        </dd>
                    </div>
                </dl>
            </div>
            <div class="flex mt-10 items-center justify-between">
                <div class="min-w-0 flex-1">
                    <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                        Newly Registered Sellers
                    </h2>
                </div>
            </div>
            <div class="mt-4">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-white uppercase  bg-indigo-700">
                            <tr>
                                <th scope="col" class="px-6 py-3">

                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Email Address
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    ID Number
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Address
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
                            @foreach ($sellers as $seller)
                            <tr class="bg-white border-b  hover:bg-gray-50 ">
                                <td class="px-6 py-4 font-semibold text-gray-900 ">
                                    <a href="{{ $seller->image ? asset('storage/' . $seller->image) : asset('profile-empty.png') }}"
                                        target="_blank" rel="noopener noreferrer">
                                        <img class="h-12 w-12 rounded-full"
                                            src="{{ $seller->image ? asset('storage/' . $seller->image) : asset('profile-empty.png') }}"
                                            alt="">
                                    </a>
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900 ">
                                    {{ $seller->name }}
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900 ">
                                    {{ $seller->email }}
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900 ">
                                    {{ $seller->id_number }}
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900 ">
                                    {{ $seller->address }}
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900 ">
                                    @if ($seller->approved === "1")
                                    Approved
                                    @else
                                    Not Approved
                                    @endif
                                </td>
                                <td class="px-6 py-4  flex gap-2 items-center">
                                    @if ($seller->approved !== "1")
                                    <form action="{{ route('approve-seller') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $seller->id }}">
                                        <input type="hidden" name="name" value="{{ $seller->name }}">
                                        <input type="hidden" name="email" value="{{ $seller->email }}">
                                        <button
                                            class="px-3 py-1.5 hover:bg-indigo-800 bg-indigo-700 rounded text-white">
                                            Approve
                                        </button>
                                    </form>
                                    @else
                                    <form action="{{ route('block-seller') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $seller->id }}">
                                        <input type="hidden" name="name" value="{{ $seller->name }}">
                                        <input type="hidden" name="email" value="{{ $seller->email }}">
                                        <button class="px-3 py-1.5 hover:bg-red-800 bg-red-700 rounded text-white">
                                            Block
                                        </button>
                                    </form>
                                    @endif
                                    <a href="{{ route('seller-profile.show', $seller) }}"
                                        class="ml-4 font-medium text-indigo-600 dark:text-indigo-500 hover:underline">
                                        More
                                    </a>
                                    <a href="{{ route('sales.show', $seller->id) }}"
                                        class="ml-4 font-medium text-indigo-600 dark:text-indigo-500 hover:underline">
                                        View Sales
                                    </a>
                                    <form class="inline" method="POST" action="{{ route('delete-seller', $seller) }}">
                                        @csrf
                                        @method('delete')
                                        <button class="ml-4 font-medium text-red-600 dark:text-red-500 hover:underline">
                                            Delete User
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @include('administrator.dashboard.customer-table')
            @include('administrator.dashboard.products-table')
        </div>
    </div> --}}
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
            <div class="flex items-center p-16 rounded-md shadow dark:bg-gray-800 bg-gray-50">
                <div class="mr-4">
                    <span
                        class="inline-block p-4 mr-2 text-blue-600 bg-blue-100 rounded-full dark:text-gray-400 dark:bg-gray-700">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                        </svg>
                    </span>
                </div>
                <div>
                    <p class="mb-2 text-gray-700 dark:text-gray-400">Total Registered Sellers</p>
                    <h2 class="text-2xl font-bold text-gray-700 dark:text-gray-400">
                        {{$sellersCount}}</h2>
                </div>
            </div>
            <div class="flex items-center p-16 rounded-md shadow dark:bg-gray-800 bg-gray-50">
                <div class="mr-4">
                    <span
                        class="inline-block p-4 mr-2 text-blue-600 bg-blue-100 rounded-full dark:text-gray-400 dark:bg-gray-700">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                        </svg>
                    </span>
                </div>
                <div>
                    <p class="mb-2 text-gray-700 dark:text-gray-400">Total Registered Sellers</p>
                    <h2 class="text-2xl font-bold text-gray-700 dark:text-gray-400">
                        {{$sellersCount}}</h2>
                </div>
            </div>
            <div class="flex items-center p-16 rounded-md shadow dark:bg-gray-800 bg-gray-50">
                <div class="mr-4">
                    <span
                        class="inline-block p-4 mr-2 text-blue-600 bg-blue-100 rounded-full dark:text-gray-400 dark:bg-gray-700">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                        </svg>
                    </span>
                </div>
                <div>
                    <p class="mb-2 text-gray-700 dark:text-gray-400">Total Registered Sellers</p>
                    <h2 class="text-2xl font-bold text-gray-700 dark:text-gray-400">
                        {{$sellersCount}}</h2>
                </div>
            </div>
            <div class="flex items-center p-16 rounded-md shadow dark:bg-gray-800 bg-gray-50">
                <div class="mr-4">
                    <span
                        class="inline-block p-4 mr-2 text-blue-600 bg-blue-100 rounded-full dark:text-gray-400 dark:bg-gray-700">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                            <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                          </svg>
                    </span>
                </div>
                <div>
                    <p class="mb-2 text-gray-700 dark:text-gray-400">Total Products</p>
                    <h2 class="text-2xl font-bold text-gray-700 dark:text-gray-400">
                        {{$productsCount}}</h2>
                </div>
            </div>
            <div class="flex items-center p-16 rounded-md shadow dark:bg-gray-800 bg-gray-50">
                <div class="mr-4">
                    <span
                        class="inline-block p-4 mr-2 text-blue-600 bg-blue-100 rounded-full dark:text-gray-400 dark:bg-gray-700">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                            <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                          </svg>
                    </span>
                </div>
                <div>
                    <p class="mb-2 text-gray-700 dark:text-gray-400">Total Products</p>
                    <h2 class="text-2xl font-bold text-gray-700 dark:text-gray-400">
                        {{$productsCount}}</h2>
                </div>
            </div>
            <div class="flex items-center p-16 rounded-md shadow dark:bg-gray-800 bg-gray-50">
                <div class="mr-4">
                    <span
                        class="inline-block p-4 mr-2 text-blue-600 bg-blue-100 rounded-full dark:text-gray-400 dark:bg-gray-700">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                            <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                          </svg>
                    </span>
                </div>
                <div>
                    <p class="mb-2 text-gray-700 dark:text-gray-400">Total Products</p>
                    <h2 class="text-2xl font-bold text-gray-700 dark:text-gray-400">
                        {{$productsCount}}</h2>
                </div>
            </div>
            <div class="flex items-center p-16 rounded-md shadow dark:bg-gray-800 bg-gray-50">
                <div class="mr-4">
                    <span
                        class="inline-block p-4 mr-2 text-blue-600 bg-blue-100 rounded-full dark:text-gray-400 dark:bg-gray-700">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                          </svg>
                    </span>
                </div>
                <div>
                    <p class="mb-2 text-gray-700 dark:text-gray-400">Total Registered Customer</p>
                    <h2 class="text-2xl font-bold text-gray-700 dark:text-gray-400">
                        {{$customersCount}}</h2>
                </div>
            </div>
        </div>
</x-app-layout>
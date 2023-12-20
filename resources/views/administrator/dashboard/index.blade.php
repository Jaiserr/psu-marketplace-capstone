<x-app-layout>
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
            <div class="flex items-center p-16 rounded-md shadow-lg bg-gradient-to-r from-cyan-500 to-blue-500">
                <div class="mr-4">
                    <span
                        class="inline-block p-4 mr-2 text-blue-600 bg-blue-600 rounded-full dark:text-gray-400 dark:bg-gray-700">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                        </svg>
                    </span>
                </div>
                <div>
                    <h4 class="mb-2 text-3xl font-bold text-white">Total Registered Sellers</h4>
                    <h2 class="text-4xl font-extrabold text-white">
                        {{$sellersCount}}</h2>
                </div>
            </div>
            <div class="flex items-center p-16 rounded-md shadow-lg bg-gradient-to-r from-amber-300 to-red-300">
                <div class="mr-4">
                    <span
                        class="inline-block p-4 mr-2 text-blue-600 bg-yellow-600 rounded-full dark:text-gray-400 dark:bg-gray-700">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                        </svg>
                    </span>
                </div>
                <div>
                    <h4 class="mb-2 text-3xl font-bold text-white">Approved Sellers</h4>
                    <h2 class="text-4xl font-extrabold text-white">
                        {{$sellersApproved}}</h2>
                </div>
            </div>
            <div class="flex items-center p-16 rounded-md shadow-lg bg-gradient-to-r from-violet-500 to-pink-500">
                <div class="mr-4">
                    <span
                        class="inline-block p-4 mr-2 text-blue-600 bg-pink-600 rounded-full dark:text-gray-400 dark:bg-gray-700">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                        </svg>
                    </span>
                </div>
                <div>
                    <h4 class="mb-2 text-3xl font-bold text-white">Not Approve Sellers</h4>
                    <h2 class="text-4xl font-extrabold text-white">
                        {{$sellersPending}}</h2>
                </div>
            </div>
            <div class="flex items-center p-16 rounded-md shadow-lg bg-gradient-to-r from-indigo-500 to-violet-500">
                <div class="mr-4">
                    <span
                        class="inline-block p-4 mr-2 text-blue-600 bg-violet-800 rounded-full dark:text-gray-400 dark:bg-gray-700">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                            <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                          </svg>
                    </span>
                </div>
                <div>
                    <h4 class="mb-2 text-3xl font-bold text-white">Total Products</h4>
                    <h2 class="text-4xl font-extrabold text-white">
                        {{$productsCount}}</h2>
                </div>
            </div>
            <div class="flex items-center p-16 rounded-md shadow-lg bg-gradient-to-r from-cyan-500 to-blue-500">
                <div class="mr-4">
                    <span
                        class="inline-block p-4 mr-2 text-blue-600 bg-blue-600 rounded-full dark:text-gray-400 dark:bg-gray-700">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                            <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                          </svg>
                    </span>
                </div>
                <div>
                    <h4 class="mb-2 text-3xl font-bold text-white">Approved Products</h4>
                    <h2 class="text-4xl font-extrabold text-white">
                        {{$productsApproved}}</h2>
                </div>
            </div>
            <div class="flex items-center p-16 rounded-md shadow-lg bg-gradient-to-r from-emerald-500 to-cyan-500">
                <div class="mr-4">
                    <span
                        class="inline-block p-4 mr-2 text-blue-600 bg-green-800 rounded-full dark:text-gray-400 dark:bg-gray-700">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                            <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                          </svg>
                    </span>
                </div>
                <div>
                    <h4 class="mb-2 text-3xl font-bold text-white">Not Approve Products</h4>
                    <h2 class="text-4xl font-extrabold text-white">
                        {{$productsPending}}</h2>
                </div>
            </div>
            <div class="flex items-center p-16 rounded-md shadow-lg bg-gradient-to-r from-violet-500 to-pink-500">
                <div class="mr-4">
                    <span
                        class="inline-block p-4 mr-2 text-blue-600 bg-pink-600 rounded-full dark:text-gray-400 dark:bg-gray-700">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                            <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                        </svg>
                    </span>
                </div>
                <div>
                    <h4 class="mb-2 text-3xl font-bold text-white">Available Products</h4>
                    <h2 class="text-4xl font-extrabold text-white">
                        {{$productsAvailable}}</h2>
                </div>
            </div>
            <div class="flex items-center p-16 rounded-md shadow-lg bg-gradient-to-r from-indigo-500 to-violet-500">
                <div class="mr-4">
                    <span
                        class="inline-block p-4 mr-2 text-blue-600 bg-violet-800 rounded-full dark:text-gray-400 dark:bg-gray-700">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                            <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                        </svg>
                    </span>
                </div>
                <div>
                    <h4 class="mb-2 text-3xl font-bold text-white">Sold Products</h4>
                    <h2 class="text-4xl font-extrabold text-white">
                        {{$productsSold}}</h2>
                </div>
            </div>
            <div class="flex items-center p-16 rounded-md shadow-lg bg-gradient-to-r from-amber-300 to-red-300">
                <div class="mr-4">
                    <span
                        class="inline-block p-4 mr-2 text-blue-600 bg-yellow-600 rounded-full dark:text-gray-400 dark:bg-gray-700">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                          </svg>
                    </span>
                </div>
                <div>
                    <h4 class="mb-2 text-3xl font-bold text-white">Total Registered Customers</h4>
                    <h2 class="text-4xl font-extrabold text-white">
                        {{$customersCount}}</h2>
                </div>
            </div>
        </div>
</x-app-layout>
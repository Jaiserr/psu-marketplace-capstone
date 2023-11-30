<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex mt-10 items-center justify-between">
                <div class="min-w-0 flex-1">
                    <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                        Registered Sellers
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
        </div>
    </div>
</x-app-layout>
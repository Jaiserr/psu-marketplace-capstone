<x-app-layout>
    <nav class="flex pl-5 pt-5 lg:max-w-7xl lg:mx-auto lg:px-8" aria-label="Breadcrumb">
        <ol role="list" class="bg-white rounded-md shadow px-6 flex space-x-4">
            <li class="flex">
                <div class="flex items-center">
                    <a href="{{ url('/dashboard') }}" class="text-gray-400 hover:text-gray-500">
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
                    <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Messages</a>
                </div>
            </li>
        </ol>
    </nav>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Messages') }}
        </h2>
    </x-slot>
    <div class="py-10">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Messages</h1>
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if ($message = Session::get('success'))
                    <div class="w-full px-5 py-4 mb-5 bg-green-100 border-l-4 border-green-500">
                        {{ $message }}
                    </div>
                    @endif
                    <div class="grid grid-cols-12 gap-x-4">
                        <div class="col-span-12">
                            <table class="min-w-full leading-normal">
                                <thead class="border-b bg-gray-50">
                                    <th
                                        class="px-3 py-3 text-xs font-normal text-left text-gray-500 uppercase align-middle">
                                        Sender
                                    </th>
                                    <th
                                        class="px-3 py-3 text-xs font-normal text-left text-gray-500 uppercase align-middle">
                                        Subject
                                    </th>
                                    <th
                                        class="px-3 py-3 text-xs font-normal text-left text-gray-500 uppercase align-middle">
                                    </th>
                                </thead>
                                <tbody>
                                    @each('messenger.partials.thread', $threads, 'thread',
                                    'messenger.partials.no-threads')
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
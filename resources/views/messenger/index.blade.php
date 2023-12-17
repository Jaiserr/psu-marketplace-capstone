<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Messages') }}
        </h2>
    </x-slot>
        
            <h1 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl mb-2">Messages</h1>
            <div class="overflow-hidden shadow-lg rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if ($message = Session::get('success'))
                    <div class="w-full px-5 py-4 mb-5 bg-green-100 border-l-4 border-green-500">
                        {{ $message }}
                    </div>
                    @endif
                    <div class="grid grid-cols-12 gap-x-4">
                        <div class="col-span-12 rounded">
                            <table class="min-w-full leading-normal">
                                <thead class="bg-gray-50">
                                    <th
                                        class="px-3 py-3 text-xs font-normal text-left text-gray-500 uppercase align-middle rounded-l">
                                        Sender
                                    </th>
                                    <th
                                        class="px-3 py-3 text-xs font-normal text-left text-gray-500 uppercase align-middle">
                                        Subject
                                    </th>
                                    <th
                                        class="px-3 py-3 text-xs font-normal text-left text-gray-500 uppercase align-middle rounded-r">
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
      
</x-app-layout>
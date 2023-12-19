<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ $thread->subject }}
        </h2>
    </x-slot>
    <div class="">
        <div class="">
            <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Message</h2>
            <div class="overflow-hidden bg-white shadow-lg rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="col-md-6">
                        <div class="space-y-4">
                            @foreach ($thread->messages as $message)
                            <div class="px-4 py-2 leading-relaxed border rounded-lg sm:px-6 sm:py-4">
                                <strong>{{ $message->user->name }}</strong>
                                <span class="text-xs text-gray-400">{{ $message->created_at->diffForHumans() }}
                                </span>
                                <p class="text-sm">
                                    {{ $message->body }}
                                </p>
                            </div>
                            @endforeach
                        </div>
                        <form action="{{ route('messages.update', $thread) }}" method="post">
                            @csrf
                            @method('PUT')
                            <!-- Message Form Input -->
                            {{-- <div class="mt-4">
                                <x-input-label for="message" :value="__('Reply message')" />
                                <textarea name="message" rows="1"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ old('message') }}</textarea>
                            </div> --}}
                            <!-- Submit Form Input -->
                            <div class="mt-4 flex justify-end">
                                <textarea name="message" rows="1"
                                    class="block w-full mr-4 mt-1 border-indigo-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ old('message') }}</textarea>
                                <x-primary-button>Send
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" data-slot="icon" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                                    </svg>
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
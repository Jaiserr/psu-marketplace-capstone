<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Create new message') }}
        </h2>
    </x-slot>
            <div class="overflow-hidden bg-white shadow-lg rounded-lg p-3">
                <div class="bg-white">
                    <form action="{{ route('messages.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="col-md-6">
                            <!-- Subject Form Input -->
                            <div>
                                <x-input-label for="subject" :value="__('Subject')" />
                                <x-text-input id="subject" class="block w-full mt-1" type="text" name="subject"
                                    :value="old('subject')" />
                            </div>

                            <!-- Recipients list -->
                            <div class="mt-4">
                                <x-input-label for="recipient" :value="__('Recipient')" />
                                <select name="recipient"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    {{-- @foreach ($users as $user) --}}
                                    <option value="{{ $product->user_id }}">{{ $product->user->name }}</option>
                                    {{-- @endforeach --}}
                                </select>
                            </div>

                            <!-- Message Form Input -->
                            <div class="mt-4">
                                <x-input-label for="message" :value="__('Message')" />
                                <textarea name="message" rows="1"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ old('message') }}</textarea>
                            </div>

                            <!-- Submit Form Input -->
                            <div class="mt-4">
                                <x-primary-button class="bg-indigo-600 hover:bg-indigo-800">   
                                    Send
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" data-slot="icon" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                                      </svg></x-primary-button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
</x-app-layout>
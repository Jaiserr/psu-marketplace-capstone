<tr class="{{ $thread->isUnread(Auth::id()) ? 'font-bold' : '' }}">
    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">        
            <a href="{{ route('messages.show', $thread) }}" class="block hover:bg-gray-50">
              <div class="flex items-center px-4 py-4 sm:px-6">
                <div class="min-w-0 flex-1 flex items-center">
                  <div class="flex-shrink-0">
                    <img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  </div>
                  <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4">
                    <div>
                      <p class="text-sm font-medium text-indigo-600 truncate">{{ $thread->creator()->name }}</p>
                      <p class="mt-2 flex items-center text-sm text-gray-500">
                        <!-- Heroicon name: solid/mail -->
                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                          <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                        </svg>
                        <span class="truncate">{{ $thread->creator()->email}}</span>
                      </p>
                    </div>
                    <div class="hidden md:block">
                      <div>
                        <p class="mt-2 flex items-center text-sm text-gray-500">
                          {{ $thread->subject }}
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <!-- Heroicon name: solid/chevron-right -->
                  <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                  </svg>
                </div>
              </div>
            </a>
       
    </td>
    {{-- <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
        <a class="hover:underline" href="{{ route('messages.show', $thread) }}">{{ $thread->subject }}</a>
    </td> --}}
    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
        <form action="{{ route('messages.destroy', $thread) }}" method="POST">
            @csrf
            @method('DELETE')

            <x-primary-button>Delete</x-primary-button>
        </form>
    </td>
</tr>
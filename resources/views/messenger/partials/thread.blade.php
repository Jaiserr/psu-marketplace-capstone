<tr class="{{ $thread->isUnread(Auth::id()) ? 'font-bold' : '' }}">
    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
        <a class="hover:underline" href="{{ route('messages.show', $thread) }}">{{ $thread->creator()->name ?? null }}</a>
    </td>
    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
        <a class="hover:underline" href="{{ route('messages.show', $thread) }}">{{ $thread->subject }}</a>
    </td>
    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
        <form action="{{ route('messages.destroy', $thread) }}" method="POST">
            @csrf
            @method('DELETE')

            <x-primary-button>Delete</x-primary-button>
        </form>
    </td>
</tr>
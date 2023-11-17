@extends ('forum.master', ['thread' => null, 'breadcrumbs_append' => [trans('forum::threads.unread_updated')]])

{{-- @section ('content')
    <div id="new-posts">
        <div class="py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between">
                    <div class="min-w-0 flex-1">
                        <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                            {{ trans('forum::threads.unread_updated') }}
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        @if (! $threads->isEmpty())
            <div class="">
                @foreach ($threads as $thread)
                    @include ('forum.thread.partials.list')
                @endforeach
            </div>
        @else
            <div class="bg-white shadow rounded text-gray-500 text-center py-4">
                {{ trans('forum::threads.none_found') }}
            </div>
        @endif
    </div>

    @if (! $threads->isEmpty())
        @can ('markThreadsAsRead')
            <div class="flex justify-center mt-4">
                <x-forum.button class="px-5 flex items-center gap-2" data-open-modal="mark-as-read">
                    <i data-feather="book"></i> {{ trans('forum::general.mark_read') }}
                </x-forum.button>
            </div>

            @include ('forum.thread.modals.mark-as-read')
        @endcan
    @endif
@stop --}}

@extends ('forum.master', ['thread' => null, 'breadcrumbs_append' => [trans('forum::threads.unread_updated')]])

@section ('content')
    <div id="new-posts">
        <h2 class="text-3xl text-medium my-4">{{ trans('forum::threads.unread_updated') }}</h2>

        @if (! $threads->isEmpty())
            <div class="">
                @foreach ($threads as $thread)
                    @include ('forum.thread.partials.list')
                @endforeach
            </div>
        @else
            <div class="bg-white shadow rounded text-gray-500 text-center py-4">
                {{ trans('forum::threads.none_found') }}
            </div>
        @endif
    </div>

    @if (! $threads->isEmpty())
        @can ('markThreadsAsRead')
            <div class="flex justify-center mt-4">
                <x-forum.button class="px-5 flex items-center gap-2" data-open-modal="mark-as-read">
                    <i data-feather="book"></i> {{ trans('forum::general.mark_read') }}
                </x-forum.button>
            </div>

            @include ('forum.thread.modals.mark-as-read')
        @endcan
    @endif
@stop


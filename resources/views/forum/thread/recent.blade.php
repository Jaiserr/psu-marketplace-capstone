@extends ('forum.master', ['thread' => null, 'breadcrumbs_append' => [trans('forum::threads.recent')]])

@section ('content')
    <div id="new-posts">
        <div class="mt-6">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between">
                    <div class="min-w-0 flex-1">
                        <h2 class="mb-3 text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                            {{ trans('forum::threads.recent') }}
                        </h2>
                    </div>
                </div>
                @if (! $threads->isEmpty())
                    <div class="my-3">
                        @foreach ($threads as $thread)
                            @include ('forum.thread.partials.list')
                        @endforeach
                    </div>
                @else
                    <div class="bg-gradient-to-r from-sky-500 to-indigo-500 my-3">
                        <div class="card-body text-center text-muted">
                            {{ trans('forum::threads.none_found') }}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@stop

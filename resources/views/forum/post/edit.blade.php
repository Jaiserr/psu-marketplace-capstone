@extends ('forum.master', ['breadcrumbs_append' => [trans('forum::posts.edit')]])

@section ('content')
    <div id="edit-post">
        <div class="py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between">
                    <div class="min-w-0 flex-1">
                        <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                            {{ trans('forum::posts.edit') }} ({{ $thread->title }})
                        </h2>
                    </div>
                </div>
                <hr class="mb-4">

                @if ($post->parent)
                    <h3>{{ trans('forum::general.response_to', ['item' => $post->parent->authorName]) }}...</h3>

                    @include ('forum.post.partials.list', ['post' => $post->parent, 'single' => true])
                @endif

                <form method="POST" action="{{ Forum::route('post.update', $post) }}">
                    @csrf
                    @method('PATCH')

                    <div class="mb-3">
                        <x-forum.textarea name="content" class="w-full">{{ old('content') !== null ? old('content') : $post->content }}</x-forum.textarea>
                    </div>

                    <div class="flex items-center gap-4 justify-end">
                        <a href="{{ URL::previous() }}" class="underline text-blue-500">{{ trans('forum::general.cancel') }}</a>
                        <x-forum.button type="submit">{{ trans('forum::general.save') }}</x-forum.button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

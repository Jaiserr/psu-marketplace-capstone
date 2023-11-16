@extends ('forum.master', ['breadcrumbs_append' => [trans('forum::general.new_reply')]])

@section ('content')
    <div id="create-post">
        <div class="py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between">
                    <div class="min-w-0 flex-1">
                        <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                            {{ trans('forum::general.new_reply') }} ({{ $thread->title }})
                        </h2>
                    </div>
                </div>
                @if ($post !== null && !$post->trashed())
                    <p>{{ trans('forum::general.replying_to', ['item' => $post->authorName]) }}:</p>

                    @include ('forum.post.partials.quote')
                @endif

                <hr class="my-4" />

                <form method="POST" action="{{ Forum::route('post.store', $thread) }}">
                    {!! csrf_field() !!}
                    @if ($post !== null)
                        <input type="hidden" name="post" value="{{ $post->id }}">
                    @endif

                    <div class="mb-3">
                        <x-forum.textarea name="content" class="w-full">{{ old('content') }}</x-forum.textarea>
                    </div>

                    <div class="flex justify-end items-center gap-4">
                        <a href="{{ URL::previous() }}" class="text-blue-500 underline">{{ trans('forum::general.cancel') }}</a>
                        <x-forum.button type="submit" class="">{{ trans('forum::general.reply') }}</x-forum.button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

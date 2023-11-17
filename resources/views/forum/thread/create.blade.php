@extends ('forum.master', ['breadcrumbs_append' => [trans('forum::threads.new_thread')]])

@section ('content')
    <div class="py-12" id="create-thread">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <div class="min-w-0 flex-1">
                    <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                        {{ trans('forum::threads.new_thread') }}({{ $category->title }})
                    </h2>
                </div>
            </div>
            <form method="POST" action="{{ Forum::route('thread.store', $category) }}">
                @csrf
    
                <div class="mb-3">
                    <x-forum.label for="title">{{ trans('forum::general.title') }}</x-forum.label>
                    <x-forum.input type="text" name="title" value="{{ old('title') }}" class="w-full" />
                </div>
    
                <div class="mb-3">
                    <x-forum.textarea name="content" class="w-full">{{ old('content') }}</x-forum.textarea>
                </div>
    
                <div class="text-end">
                    <x-forum.button-link href="{{ URL::previous() }}" class="bg-gray-500">{{ trans('forum::general.cancel') }}</x-forum.button-link>
                    <x-forum.button type="submit">{{ trans('forum::general.create') }}</x-forum.button>
                </div>
            </form>
        </div>
    </div>
@stop

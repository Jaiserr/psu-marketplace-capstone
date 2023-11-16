{{-- $category is passed as NULL to the master layout view to prevent it from showing in the breadcrumbs --}}
@extends ('forum.master', ['category' => null])

@section ('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <div class="min-w-0 flex-1">
                    <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                        {{ trans('forum::general.index') }}
                    </h2>
                </div>
                @can ('createCategories')
                    <x-forum.button type="button" data-open-modal="create-category">
                        {{ trans('forum::categories.create') }}
                    </x-forum.button>

                    @include ('forum.category.modals.create')
                @endcan
            </div>
            @foreach ($categories as $category)
                @include ('forum.category.partials.list', ['titleClass' => 'lead'])
            @endforeach
        </div>
    </div>
@stop

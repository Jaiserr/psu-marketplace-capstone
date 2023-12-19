{{-- $category is passed as NULL to the master layout view to prevent it from showing in the breadcrumbs --}}
@extends ('forum.master', ['category' => null])

@section ('content')
    <div class="">
        <div class="relative mb-6">
            <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gray-100"></div>
            <div class="">
                <div class="relative shadow-xl sm:rounded-2xl sm:overflow-hidden">
                    <div class="absolute inset-0">
                        <img class="h-full w-full object-cover"
                            src="{{ asset('forum.png') }}"
                            alt="pangasinan state university">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-purple-300 to-indigo-200 mix-blend-multiply">
                        </div>
                    </div>
                    <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
                        <h1 class="text-center text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
                            <span class="block text-white">Community Forum</span>
                        </h1>
                        <p class="mt-6 max-w-lg mx-auto text-center text-xl text-white sm:max-w-3xl">"Join our vibrant PSU Marketplace Community Forum, your hub for sharing expertise, navigating challenges, and celebrating successes in the dynamic world of online business. Connect with fellow entrepreneurs, exchange valuable insights, and thrive together in the ever-evolving landscape of marketplace."</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <div class="min-w-0 flex-1">
                    <h2 class="mb-3 text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                        {{ trans('forum::general.index') }}
                    </h2>
                </div>
                @role('superadministrator')
                <div>
                    <a href="{{ route('forum.category.manage')}}"
                                    class="ml-8 whitespace-nowrap inline-flex items-center justify-center bg-gradient-to-r from-purple-600 to-indigo-600 bg-origin-border px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white hover:from-purple-700 hover:to-indigo-700">
                                    Manage
                    </a>
                </div>
                @endrole
            </div>
            @foreach ($categories as $category)
                @include ('forum.category.partials.list', ['titleClass' => 'lead'])
            @endforeach
        </div>
    </div>
@stop

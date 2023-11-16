<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                @if (auth()->user()->approved == null || auth()->user()->approved == "")
                <div class="p-6 bg-red-600 text-white">
                    {{ __("You are not verified to sell products. Please kindly wait for verification or contact the
                    admin for assistance.") }}
                </div>

                @else
                <div class="p-6 bg-indigo-600 text-white">
                    {{ __("You're logged in seller!") }}
                </div>

                @endif


            </div>
        </div>
    </div>
</x-app-layout>
<x-guest-layout>
    <div class="flex">
        <!-- Left Section -->
        <div class="flex-1 hidden sm:block backdrop-blur-xl bg-white/30 py-5">
            <div class="flex justify-start items-center pl-5 pt-6">
                <h2 class="text-5xl font-extrabold text-yellow-600">Pangasinan State University</h2>
            </div>
            <div class="flex justify-start items-center pl-5 py-6">
                <h2 class="text-4xl font-bold text-white">Alaminos City Campus</h2>
            </div>
            <div class="flex justify-start items-center pl-5 pt-6">
                <h2 class="text-xl font-bold text-white">Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.</h2>
            </div>
            <!-- Add more content for the left section as needed -->
        </div>
        <!-- Right Section (Login Form) -->
        <div class="flex-1 px-4 py-20 bg-white">
            <div class="flex justify-center pb-6">
               <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>
            <div class="flex justify-center text-center pb-6">
                <h1 class="text-3xl font-semibold">Verify your email adress</h1>
            </div>
            <div class="lg:hidden text-center mb-4 font-medium text-sm text-gray-900">
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            </div>
            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-indigo-600">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif

            <div class="mt-4 flex items-center justify-center">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div>
                        <x-primary-button>
                            {{ __('Resend Verification Email') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
            <div class="mt-4 flex items-center justify-center">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="underline text-sm text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </div> 
</x-guest-layout>

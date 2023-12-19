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
                <h2 class="text-xl font-bold text-white">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</h2>
            </div>
            <!-- Add more content for the left section as needed -->
        </div>
        <!-- Right Section (Login Form) -->
        <div class="flex-1 px-4 py-3 bg-white">
            <div class="flex justify-center pb-6">
               <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>
            <div class="flex justify-center text-center pb-6">
                <h1 class="text-3xl font-semibold">Forgot your password</h1>
            </div>
            <div class="lg:hidden text-center mb-4 text-sm text-gray-900">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="text-center mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="flex items-center justify-center mt-4">
                    <x-primary-button>
                        {{ __('Email Password Reset Link') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>

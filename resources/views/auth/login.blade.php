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
                <h2 class="text-xl font-bold text-white">"Welcome to the University Marketplace! Your gateway to a vibrant community where students connect, buy, and sell. Explore a world of academic resources, textbooks, and unique finds tailored to your university experience. Join us in fostering a collaborative and dynamic marketplace. Let the exchange begin!"</h2>
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
                <h1 class="text-3xl font-semibold">Sign in your account</h1>
            </div>
            <div class="flex justify-center text-center pb-6">
                <h1 class="text-sm">Don't have account yet? <a href="{{ route('register') }}" class="text-indigo-600 font-medium">Sign up </a></h1>
            </div>
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="w-full">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label class="white font-semibold" for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="user@gmail.com"/>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label class="white font-semibold" for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="mt-4 flex justify-between">
                    <div>
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                            <span class="ms-2 text-sm white">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                    <div class="flex text-right">
                        @if (Route::has('password.request'))
                        <a class="text-sm text-indigo-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                    </div>
                    
                </div>

                <div class="flex items-center justify-center mt-4">
                    <x-primary-button class="ms-3 px-6">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>

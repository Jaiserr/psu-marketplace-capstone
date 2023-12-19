<x-guest-layout>
    <div class="flex">
        <!-- Left Section -->
        <div class="flex-1 hidden sm:block backdrop-blur-xl bg-white/30 py-5">
            <div class="flex justify-center mt-10">
                <a href="/">
                 <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                 </a>
             </div>
            <div class="flex justify-start items-center pl-5 pt-6">
                <h2 class="text-5xl text-center font-extrabold text-yellow-600">Pangasinan State University Marketplace</h2>
            </div>
            <div class="pl-5 py-6">
                <h2 class="text-4xl text-center font-bold text-indigo-600">Alaminos City Campus</h2>
            </div>
            <!-- Add more content for the left section as needed -->
        </div>
        <!-- Right Section (Login Form) -->
        <div class="flex-1 px-4 py-3 bg-white">
            <div class="lg:hidden flex justify-center pb-6">
               <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>
            <div class="flex justify-center text-center pb-6">
                <h1 class="text-3xl font-semibold">Reset your password</h1>
            </div>
            <form method="POST" action="{{ route('password.store') }}">
                @csrf

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                        type="password"
                                        name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-center mt-4">
                    <x-primary-button>
                        {{ __('Reset Password') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>

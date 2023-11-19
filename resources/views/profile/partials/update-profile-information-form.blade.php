<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)"
                required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>


        @role('seller')
        <div>
            <x-input-label for="id_number" :value="__('Id Number')" />
            <x-text-input id="id_number" name="id_number" type="text" class="mt-1 block w-full"
                :value="old('id_number', $user->id_number)" required autofocus autocomplete="id_number" />
            <x-input-error class="mt-2" :messages="$errors->get('id_number')" />

            <div class="mt-4">
                <x-input-label for="campus_role" :value="__('Campus Role')" />
                <select name="campus_role" id="campus_role"
                    class="border-gray-300 mt-1 focus:border-indigo-500 w-full focus:ring-indigo-500 rounded-md shadow-sm">
                    <option value="faculty" {{ old('campus_role')==='faculty' ? 'selected' : '' }}>Faculty</option>
                    <option value="student" {{ old('campus_role')==='student' ? 'selected' : '' }}>Student</option>
                </select>
            </div>
        </div>
        @endrole

        <x-input-label class="mt-4" for="phone_number" :value="__('Phone Number')" />
        <x-text-input id="phone_number" name="phone_number" type="text" class="mt-1 block w-full"
            :value="old('id_number', $user->phone_number)" required autofocus autocomplete="phone_number" />
        <x-input-error class="mt-2" :messages="$errors->get('phone_number')" />

        <x-input-label class="mt-4" for="address" :value="__('Address')" />
        <x-text-input id="address" name="address" type="text" class="mt-1 block w-full"
            :value="old('address', $user->address)" required autofocus autocomplete="address" />
        <x-input-error class="mt-2" :messages="$errors->get('address')" />

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"
                :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div>
                <p class="text-sm mt-2 text-gray-800">
                    {{ __('Your email address is unverified.') }}

                    <button form="send-verification"
                        class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if (session('status') === 'verification-link-sent')
                <p class="mt-2 font-medium text-sm text-green-600">
                    {{ __('A new verification link has been sent to your email address.') }}
                </p>
                @endif
            </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
<x-guest-layout>
    <form x-data="{ role: '{{ old('role_id', 'customer') }}' }" method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label class="text-white" for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label class="text-white" for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label class="text-white" for="role_id" :value="__('Register as:')" />
            <select x-model="role" name="role_id" id="role_id"
                class="border-gray-300 mt-1 focus:border-indigo-500 w-full focus:ring-indigo-500 rounded-md shadow-sm">
                <option value="seller">Seller</option>
                <option value="customer">Customer</option>
            </select>
        </div>
        <div x-show="role === 'customer'" class="mt-4">
            <x-input-label class="text-white" for="customer_address" :value="__('Address (Barangay)')" />
            {{-- <x-text-input id="customer_address" class="block mt-1 w-full" type="text" name="customer_address" :value="old('address')" /> --}}
            <select name="customer_address" id="customer_address"
                class="border-gray-300 mt-1 focus:border-indigo-500 w-full focus:ring-indigo-500 rounded-md shadow-sm">
                <option value="Alos">Alos</option>
                <option value="Amandiego">Amandiego</option>
                <option value="Amangbangan">Amangbangan</option>
                <option value="Balangobong">Balangobong</option>
                <option value="Balayang">Balayang</option>
                <option value="Baleyadaan">Baleyadaan</option>
                <option value="Bisocol">Bisocol</option>
                <option value="Bolaney">Bolaney</option>
                <option value="Bued">Bued</option>
                <option value="Cabatuan">Cabatuan</option>
                <option value="Cayucay">Cayucay</option>
                <option value="Dulacac">Dulacac</option>
                <option value="Inerangan">Inerangan</option>
                <option value="Landoc">Landoc</option>
                <option value="Linmansangan">Linmansangan</option>
                <option value="Lucap">Lucap</option>
                <option value="Maawi">Maawi</option>
                <option value="Macatiw">Macatiw</option>
                <option value="Magsaysay">Magsaysay</option>
                <option value="Mona">Mona</option>
                <option value="Palamis">Palamis</option>
                <option value="Pandan">Pandan</option>
                <option value="Pangapisan">Pangapisan</option>
                <option value="Poblacion">Poblacion</option>
                <option value="Pocal-pocal">Pocal-pocal</option>
                <option value="Pogo">Pogo</option>
                <option value="Polo">Polo</option>
                <option value="Quibuar">Quibuar</option>
                <option value="Sabangan">Sabangan</option>
                <option value="San Antonio">San Antonio</option>
                <option value="San Jose">San Jose</option>
                <option value="San Roque">San Roque</option>
                <option value="San Vicente">San Vicente</option>
                <option value="Sta Maria">Sta Maria</option>
                <option value="Tanaytay">Tanaytay</option>
                <option value="Tangcarang">Tangcarang</option>
                <option value="Tawin-tawin">Tawin-tawin</option>
                <option value="Telbang">Telbang</option>
                <option value="Victoria">Victoria</option>
            </select>
        </div>

        <!-- Additional Inputs for Seller -->
        <div x-show="role === 'seller'" class="mt-4">
            <!-- ID Number -->
            <div class="mt-4">
                <x-input-label class="text-white" for="id_number" :value="__('ID Number')" />
                <x-text-input id="id_number" class="block mt-1 w-full" type="text" name="id_number"
                    :value="old('id_number')" />
                <x-input-error :messages="$errors->get('id_number')" class="mt-2" />
            </div>

            <!-- Campus Role -->
            <div class="mt-4">
                <x-input-label class="text-white" for="campus_role" :value="__('Campus Role')" />
                <select name="campus_role" id="campus_role"
                    class="border-gray-300 mt-1 focus:border-indigo-500 w-full focus:ring-indigo-500 rounded-md shadow-sm">
                    <option value="faculty">Faculty</option>
                    <option value="student">Student</option>
                </select>
            </div>

            <div class="mt-4">
                <x-input-label class="text-white" for="address" :value="__('Address')" />
                <x-text-input id="address" class="block mt-1 w-full" type="text" name="address"
                    :value="old('address')" />
                <x-input-error :messages="$errors->get('address')" class="mt-2" />
            </div>
        </div>

        <!-- Phone Number -->
        <div class="mt-4">
            <x-input-label class="text-white" for="phone_number" :value="__('Phone Number')" />
            <x-text-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number"
                :value="old('phone_number')" />
            <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label class="text-white" for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label class="text-white" for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mt-4">
            <fieldset>
                <div class="mt-6 space-y-6">
                    <div class="relative flex gap-x-3">
                        <div class="flex h-6 items-center">
                            <input id="comments" name="comments" type="checkbox" required
                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        </div>
                        <div class="text-sm leading-6">
                            <label for="comments" class="font-medium "> <span class="text-white">Read Our</span>
                                @include("auth.terms-and-service")
                                @include("auth.privacy-policy")
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-white hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
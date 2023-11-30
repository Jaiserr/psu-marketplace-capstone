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

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="image" :value="__('Profile Image')" />
            <x-text-input id="image" name="image" type="file" class="mt-1 block w-full"
                :value="old('image', $user->image)" autofocus autocomplete="image" />
            <x-input-error class="mt-2" :messages="$errors->get('image')" />

            @if ($user->image)
            <img src="{{ asset('storage/' . $user->image) }}" alt="Profile Image" class="mt-2"
                style="max-width: 200px;">
            @endif
        </div>

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

            <x-input-label class="mt-4" for="address" :value="__('Address')" />
            <x-text-input id="address" name="address" type="text" class="mt-1 block w-full"
                :value="old('address', $user->address)" required autofocus autocomplete="address" />
            <x-input-error class="mt-2" :messages="$errors->get('address')" />    
        </div>
        @endrole

        <x-input-label class="mt-4" for="phone_number" :value="__('Phone Number')" />
        <x-text-input id="phone_number" name="phone_number" type="text" class="mt-1 block w-full"
            :value="old('id_number', $user->phone_number)" required autofocus autocomplete="phone_number" />
        <x-input-error class="mt-2" :messages="$errors->get('phone_number')" />
        
        @role('customer')
            <div class="mt-4">
                <x-input-label for="customer_address" :value="__('Address')" />
                <select name="customer_address" id="customer_address"
                    class="border-gray-300 mt-1 focus:border-indigo-500 w-full focus:ring-indigo-500 rounded-md shadow-sm">
                    <option value="Alos" {{ old('customer_address')==='Alos' ? 'selected' : '' }}>Alos</option>
                    <option value="Amandiego" {{ old('customer_address')==='Amandiego' ? 'selected' : '' }}>Amandiego</option>
                    <option value="Amangbangan" {{ old('customer_address')==='Amangbangan' ? 'selected' : '' }}>Amangbangan</option>
                    <option value="Balangobong" {{ old('customer_address')==='Balangobong' ? 'selected' : '' }}>Balangobong</option>
                    <option value="Balayang" {{ old('customer_address')==='Balayang' ? 'selected' : '' }}>Balayang</option>
                    <option value="Baleyadaan" {{ old('customer_address')==='Baleyadaan' ? 'selected' : '' }}>Baleyadaan</option>
                    <option value="Bisocol" {{ old('customer_address')==='Bisocol' ? 'selected' : '' }}>Bisocol</option>
                    <option value="Bolaney" {{ old('customer_address')==='Bolaney' ? 'selected' : '' }}>Bolaney</option>
                    <option value="Bued" {{ old('customer_address')==='Bued' ? 'selected' : '' }}>Bued</option>
                    <option value="Cabatuan" {{ old('customer_address')==='Cabatuan' ? 'selected' : '' }}>Cabatuan</option>
                    <option value="Cayucay" {{ old('customer_address')==='Cayucay' ? 'selected' : '' }}>Cayucay</option>
                    <option value="Dulacac" {{ old('customer_address')==='Dulacac' ? 'selected' : '' }}>Dulacac</option>
                    <option value="Inerangan" {{ old('customer_address')==='Inerangan' ? 'selected' : '' }}>Inerangan</option>
                    <option value="Landoc" {{ old('customer_address')==='Landoc' ? 'selected' : '' }}>Landoc</option>
                    <option value="Linmansangan" {{ old('customer_address')==='Linmansangan' ? 'selected' : '' }}>Linmansangan</option>
                    <option value="Lucap" {{ old('customer_address')==='Lucap' ? 'selected' : '' }}>Lucap</option>
                    <option value="Maawi" {{ old('customer_address')==='Maawi' ? 'selected' : '' }}>Maawi</option>
                    <option value="Macatiw" {{ old('customer_address')==='Macatiw' ? 'selected' : '' }}>Macatiw</option>
                    <option value="Magsaysay" {{ old('customer_address')==='Magsaysay' ? 'selected' : '' }}>Magsaysay</option>
                    <option value="Mona" {{ old('customer_address')==='Mona' ? 'selected' : '' }}>Mona</option>
                    <option value="Palamis" {{ old('customer_address')==='Palamis' ? 'selected' : '' }}>Palamis</option>
                    <option value="Pandan" {{ old('customer_address')==='Pandan' ? 'selected' : '' }}>Pandan</option>
                    <option value="Pangapisan" {{ old('customer_address')==='Pangapisan' ? 'selected' : '' }}>Pangapisan</option>
                    <option value="Poblacion" {{ old('customer_address')==='Poblacion' ? 'selected' : '' }}>Poblacion</option>
                    <option value="Pocal-pocal" {{ old('customer_address')==='Pocal-pocal' ? 'selected' : '' }}>Pocal-pocal</option>
                    <option value="Pogo" {{ old('customer_address')==='Pogo' ? 'selected' : '' }}>Pogo</option>
                    <option value="Polo" {{ old('customer_address')==='Polo' ? 'selected' : '' }}>Polo</option>
                    <option value="Quibuar" {{ old('customer_address')==='Quibuar' ? 'selected' : '' }}>Quibuar</option>
                    <option value="Sabangan" {{ old('customer_address')==='Sabangan' ? 'selected' : '' }}>Sabangan</option>
                    <option value="San Antonio" {{ old('customer_address')==='San Antonio' ? 'selected' : '' }}>San Antonio</option>
                    <option value="San Jose" {{ old('customer_address')==='San Jose' ? 'selected' : '' }}>San Jose</option>
                    <option value="San Roque" {{ old('customer_address')==='San Roque' ? 'selected' : '' }}>San Roque</option>
                    <option value="San Vicente" {{ old('customer_address')==='San Vicente' ? 'selected' : '' }}>San Vicente</option>
                    <option value="Sta Maria" {{ old('customer_address')==='Sta Maria' ? 'selected' : '' }}>Sta Maria</option>
                    <option value="Tanaytay" {{ old('customer_address')==='Tanaytay' ? 'selected' : '' }}>Tanaytay</option>
                    <option value="Tangcarang" {{ old('customer_address')==='Tangcarang' ? 'selected' : '' }}>Tangcarang</option>
                    <option value="Tawin-tawin" {{ old('customer_address')==='Tawin-tawin' ? 'selected' : '' }}>Tawin-tawin</option>
                    <option value="Telbang" {{ old('customer_address')==='Telbang' ? 'selected' : '' }}>Telbang</option>
                    <option value="Victoria" {{ old('customer_address')==='Victoria' ? 'selected' : '' }}>Victoria</option>
                </select>
            </div>        
        @endrole

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"
                :value="old('email', $user->email)" required autocomplete="username" readonly />
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
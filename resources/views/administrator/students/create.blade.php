<x-app-layout>
    <div class="mx-auto px-4 sm:px-6">
        <section class="bg-gray-100 py-10">
            <div class="px-4 mx-auto ">
                <div class="p-8 px-4 bg-indigo-700 rounded-lg">
                    <div class="grid grid-cols-1 lg:grid-cols-1 gap-6">
                        <div>
                            <form action="{{ route('students.store')}}" method="POST">
                                @csrf
                                <div class="flex flex-wrap items-center">
                                    <div class="w-full px-4 mb-6 lg:w-2/4">
                                        <label for="name" class="block mb-2 text-sm font-medium text-white">Student Name</label>
                                        <input value="{{ old('name') }}"
                                            class="block w-full px-4 py-3 mb-2 text-sm placeholder-gray-500 bg-white border rounded "
                                            type="text" name="name" id="name" placeholder="Enter Student Name">
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>
                                    <div class="w-full px-4 mb-6 lg:w-2/4">
                                        <label for="id_number" class="block mb-2 text-sm font-medium text-white">ID Number</label>
                                        <input value="{{ old('id_number') }}"
                                            class="block w-full px-4 py-3 mb-2 text-sm placeholder-gray-500 bg-white border rounded "
                                            type="text" name="id_number" id="id_number" placeholder="Enter Student ID Number">
                                        <x-input-error :messages="$errors->get('id_number')" class="mt-2" />
                                    </div>                           
                                </div>                                

                                <div class="flex flex-wrap items-center">
                                    <div class="w-full px-4 mb-6 lg:w-2/4">
                                        <label for="address" class="block mb-2 text-sm font-medium text-white">Address</label>
                                        <input value="{{ old('address') }}"
                                            class="block w-full px-4 py-3 mb-2 text-sm placeholder-gray-500 bg-white border rounded "
                                            type="text" name="address" id="address" placeholder="Enter Student Address">
                                        <x-input-error :messages="$errors->get('address')" class="mt-2" />
                                    </div>
                                    <div class="w-full px-4 mb-6 lg:w-2/4">
                                        <label for="birthdate" class="block mb-2 text-sm font-medium text-white">Birthdate</label>
                                        <input value="{{ old('birthdate') }}"
                                            class="block w-full px-4 py-3 mb-2 text-sm placeholder-gray-500 bg-white border rounded "
                                            type="date" name="birthdate" id="birthdate" placeholder="Enter product birthdate">
                                        <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
                                    </div>                           
                                </div>
                                <div class="px-4 ">
                                    <div class="flex ">
                                        <button type="submit"
                                            class="inline-block px-6 py-2.5 bg-blue-500  text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-600 hover:shadow-lg ">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
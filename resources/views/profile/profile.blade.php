<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-auth-validation-errors />


                    <form method="POST" action="{{ route('create') }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="grid grid-cols-2 gap-6">
                            <div class="grid grid-rows-2 gap-6">
                                <div>
                                    <x-label for="first_name" :value="__('First Name')" />
                                    <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                                        autofocus />
                                </div>
                                <div>
                                    <x-label for="last_name" :value="__('Last Name')" />
                                    <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name"
                                        autofocus />
                                </div>
                                <div class="grid grid-rows-2 gap-6">
                                    <div>
                                        <x-label for="state" :value="__('State')" />
                                        <x-input id="state" class="block mt-1 w-full" type="text"
                                            name="state" />



                                    </div>


                                    <div>
                                        <x-label for="state" :value="__('Date of Birth')" />
                                        <x-input id="state" class="block mt-1 w-full" type="text"
                                            name="date_of_birth" />



                                    </div>

                                </div>
                            </div>
                            <div class="grid grid-rows-2 gap-6">
                                <div>
                                    <x-label for="email" :value="__('Email')" />
                                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" />
                                </div>
                                <div>
                                    <x-label for="phone_number" :value="__('Phone Number')" />
                                    <x-input id="phone_number" class="block mt-1 w-full" type="text"
                                        name="phone_number" />
                                </div>
                                <div>
                                    <x-label for="zip_code" :value="__('Zip Code')" />
                                    <x-input id="zip_code" class="block mt-1 w-full" type="text" name="zip_code" />
                                </div>
                            </div>

                        </div>




                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-3">
                                {{ __('Submit') }}
                            </x-button>
                        </div>
                    </form>


                </div>

            </div>

        </div>
    </div>
    </div>
    </div>
</x-app-layout>

<x-app-layout>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


                <!-- <div class="max-w-sm rounded-lg shadow-lg bg-yellow-400 border overflow-hidden mb-5">
                    <div class="px-6 py-4 border-b bg-gray-300">
                        <h1 class="text-xl font-bold text-gray-800 mb-2">Card Title</h1>
                    </div>                    
                    <div class="px-6 py-4">
                    <p class="text-gray-600 text-base">
                        This is the body content of the card. You can use this space to describe your content, add details, or provide context.
                    </p>
                    </div>

                </div>

                <hr>

                <x-special-box title="Ini Special Box">
                    <ol>
                        <li>Satu</li>
                        <li>Satu</li>
                        <li>Satu</li>
                    </ol>
                </x-special-box>

                <x-special-box title="Kotak Kedua">
                    <textarea name="" id="" rows="5">
                        COntent dalam textare
                    </textarea>
                </x-special-box>

                <x-special-box title="My Select">

                <x-my-select 
                    name="dropdown"
                    id="dropdown"
                    :options="[
                        'satu' => 'pilihan 1',
                        'dua' => 'pilihan 2',
                        'tiga' => 'pilihan 3',
                    ]"
                />

                </x-special-box>    -->

        <form method="POST" action="{{ route('user.store') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

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

        <div class="flex items-center justify-end mt-4">


            <x-primary-button class="ms-4">
                {{ __('Save') }}
            </x-primary-button>
        </div>
    </form>



                </div>
            </div>
        </div>
    </div>



</x-app-layout>

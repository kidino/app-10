<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form action="{{ route('user.update', $user->id) }}" method="post">
                        @csrf 
                        @method('PUT')

    <!-- Name Field -->
    <div class="mb-5">
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input 
            id="name" 
            name="name" 
            type="text" 
            :value="old('name', $user->name)" 
            class="block mt-1 w-full" 
            required 
            autofocus 
        />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Email Field -->
    <div class="mb-5">
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input 
            id="email" 
            name="email" 
            type="email" 
            :value="old('email', $user->email)" 
            class="block mt-1 w-full" 
            required 
        />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Password Field -->
    <div class="mb-5">
        <x-input-label for="password" :value="__('Password')" />
        <x-text-input 
            id="password" 
            name="password" 
            type="password" 
            class="block mt-1 w-full" 
        />
        <p class="text-sm text-gray-500 mt-1">{{ __('Leave blank if you do not want to change the password.') }}</p>
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Roles Field -->
    <div class="mb-5">

        <x-input-label for="roles" :value="__('Roles')" />


        @php 
            $user_roles = $user->roles->pluck('id')->toArray();
            print_r($user_roles)
        @endphp 

        @foreach ($roles as $role)

            <div>
                <input type="checkbox" name="roles[]" 
                id="role_{{ $role->id }}"
                value="{{ $role->id}}"
                @checked( in_array($role->id, $user_roles) )
                /> {{ $role->name }}
            </div> 
        
        @endforeach


    </div>

    <!-- Submit Button -->
    <div class="flex justify-end">
        <x-primary-button>
            {{ __('Update User') }}
        </x-primary-button>
    </div>

                    </form>

                </div>
            </div>
        </div>
    </div>



</x-app-layout>

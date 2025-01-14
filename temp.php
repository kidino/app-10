
    <!-- start here -->
    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Name Field -->
        <div class="mb-4">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input 
                id="name" 
                class="block mt-1 w-full" 
                type="text" 
                name="name" 
                :value="old('name', $user->name)" 
                required 
                autofocus 
            />
            @error('name')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Email Field -->
        <div class="mb-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input
                id="email" 
                class="block mt-1 w-full" 
                type="email" 
                name="email" 
                :value="old('email', $user->email)" 
                required 
            />
            @error('email')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password Field -->
        <div class="mb-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input 
                id="password" 
                class="block mt-1 w-full" 
                type="password" 
                name="password" 
            />
            <p class="text-sm text-gray-500 mt-1">{{ __('Leave blank if you do not want to change the password.') }}</p>
            @error('password')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end">
            <x-primary-button class="ml-3">
                {{ __('Update User') }}
            </x-primary-button>
        </div>
    </form>



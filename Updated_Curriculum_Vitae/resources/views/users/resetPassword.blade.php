<x-layout>
    <x-card>
        <form method="POST" action="{{ route('updatePassword', ['user' => $user]) }}" class="space-y-4">
            @csrf
            @method('PUT')

            <!-- Password field -->
            <div class="flex flex-col">
                <label for="password" class="text-sm font-medium text-gray-700">{{ __('New Password') }}</label>
                <input 
                    id="password" 
                    type="password" 
                    name="password" 
                    required 
                    autocomplete="new-password" 
                    class="border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 px-3 py-2"
                >
                @error('password')
                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                @enderror
            </div>

            <!-- Confirm password field -->
            <div class="flex flex-col">
                <label for="password_confirmation" class="text-sm font-medium text-gray-700">{{ __('Confirm Password') }}</label>
                <input 
                    id="password_confirmation" 
                    type="password" 
                    name="password_confirmation" 
                    required 
                    autocomplete="new-password" 
                    class="border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 px-3 py-2"
                >
                @error('password_confirmation')
                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit button -->
            <div class="flex justify-end">
                <button 
                    type="submit" 
                    class="bg-indigo-600 text-white font-medium py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                >
                    {{ __('Reset Password') }}
                </button>
            </div>
        </form>
    </x-card>
</x-layout>

<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                {{ __('forgot_password.forgot_password') }}
            </h2>
        </header>

        <form method="POST" action="{{ route('sendPasswordResetLink') }}">
            @csrf

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">{{ __('forgot_password.email_label') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email" 
                    placeholder="{{ __('forgot_password.email') }}" value="" />

                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    {{ __('forgot_password.send_password_reset_link') }}
                </button>

                <a href="{{ url()->previous() }}" class="text-black ml-4">{{ __('edit_entry.default.back') }}</a>
            </div>
        </form>
    </x-card>
</x-layout>

<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                {{ __('login.login') }}
            </h2>
            <p class="mb-4">{{ __('login.login_to_update_cv') }}</p>
        </header>

        <form method="POST" action="{{ route('loginUser') }}">
            @csrf
            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">{{ __('login.email') }}</label>
                <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}" />
                
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password" class="inline-block text-lg mb-2">
                    {{ __('login.password') }}
                </label>
                <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password" value="{{old('password')}}" />

                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    {{ __('login.login_button') }}
                </button>
            </div>

            <div class="mt-8">
                <p>
                    {{ __('login.no_account_yet') }}
                    <a href="{{ route('register') }}" class="text-laravel">{{ __('login.register') }}</a>
                </p>
            </div>

            <div class="mt-4">
                <p>
                    {{ __('login.forgot_password') }}
                    <a href="{{ route('forgotPassword') }}" class="text-laravel">{{ __('login.reset_password') }}</a>
                </p>
            </div>
        </form>
    </x-card>
</x-layout>

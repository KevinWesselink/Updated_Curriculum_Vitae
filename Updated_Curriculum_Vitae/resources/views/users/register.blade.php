<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                {{ __('register.register') }}
            </h2>
            <p class="mb-4">{{ __('register.create_account_to_use_website') }}</p>
        </header>

        <form method="POST" action="/users">
            @csrf
            <!-- Username Field -->
            <div class="mb-6">
                <label for="userName" class="inline-block text-lg mb-2">{{ __('register.user_name') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="userName" value="{{ old('userName') }}" />
                @error('userName')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- First Name and Last Name -->
            <div class="mb-6 grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="firstName" class="inline-block text-lg mb-2">{{ __('register.first_name') }}</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="firstName" value="{{ old('firstName') }}" />
                    @error('firstName')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="lastName" class="inline-block text-lg mb-2">{{ __('register.last_name') }}</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="lastName" value="{{ old('lastName') }}" />
                    @error('lastName')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Sex Field -->
            <div class="mb-6">
                <label for="sex" class="inline-block text-lg mb-2">{{ __('register.sex') }}</label>
                <select class="border border-gray-200 rounded p-2 w-full" name="sex" value="{{ old('sex') }}">
                    <option selected disabled>{{ __('register.choose_a_sex') }}</option>
                    <option {{ old('sex') == "male" ? "selected" : "" }} value="male">{{ __('register.male') }}</option>
                    <option {{ old('sex') == "female" ? "selected" : "" }} value="female">{{ __('register.female') }}</option>
                    <option {{ old('sex') == "preferNotToSay" ? "selected" : "" }} value="preferNotToSay">{{ __('register.prefer_not_to_say') }}</option>
                </select>                
                @error('sex')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Telephone Number and Address -->
            <div class="mb-6 grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="telephoneNumber" class="inline-block text-lg mb-2">{{ __('register.telephone_number') }}</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="telephoneNumber" value="{{ old('telephoneNumber') }}" />
                    @error('telephoneNumber')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="address" class="inline-block text-lg mb-2">{{ __('register.address') }}</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="address" value="{{ old('address') }}" />
                    @error('address')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Postal Code and City -->
            <div class="mb-6 grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="postalCode" class="inline-block text-lg mb-2">{{ __('register.postal_code') }}</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="postalCode" value="{{ old('postalCode') }}" />
                    @error('postalCode')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="city" class="inline-block text-lg mb-2">{{ __('register.city') }}</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="city" value="{{ old('city') }}" />
                    @error('city')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            {{-- Country --}}
            <div class="mb-6">
                <label for="country" class="inline-block text-lg mb-2">{{ __('register.country') }}</label>
                <select class="border border-gray-200 rounded p-2 w-full" name="country">
                    <option selected disabled>{{ __('register.choose_a_country') }}</option>
                    @foreach($countries as $country)
                    <option {{ old('country') == $country->countryName ? "selected" : "" }} value="{{ $country->countryName }}">{{ __('countries.' . $country->countryName) }}</option>
                    @endforeach
                </select>
                @error('country')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Date of Birth and Current Profession -->
            <div class="mb-6 grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="dateOfBirth" class="inline-block text-lg mb-2">{{ __('register.date_of_birth') }}</label>
                    <input type="date" class="border border-gray-200 rounded p-2 w-full" name="dateOfBirth" value="{{ old('dateOfBirth') }}" />
                    @error('dateOfBirth')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="currentProfession" class="inline-block text-lg mb-2">{{ __('register.current_profession') }}</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="currentProfession" value="{{ old('currentProfession') }}" />
                    @error('currentProfession')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Email -->
            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">{{ __('register.email') }}</label>
                <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{ old('email') }}" />
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password and Confirm Password -->
            <div class="mb-6 grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="password" class="inline-block text-lg mb-2">{{ __('register.password') }}</label>
                    <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password" />
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="password_confirmation" class="inline-block text-lg mb-2">{{ __('register.repeat_password') }}</label>
                    <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password_confirmation" />
                    @error('password_confirmation')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="mb-6">
                <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    {{ __('register.create_account') }}
                </button>
            </div>

            <div class="mt-8 text-center">
                <p>
                    {{ __('register.already_have_account') }}
                    <a href="/login" class="text-laravel">{{ __('register.login') }}</a>
                </p>
            </div>
        </form>
    </x-card>
</x-layout>

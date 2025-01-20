<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                {{ __('register.edit_account') }}
            </h2>
            <p class="mb-4">{{ __('register.update_account_details') }}</p>
        </header>

        <form method="POST" action="{{ route('updateUser', $user->id) }}">
            @csrf
            @method('PUT')

            <!-- Username Field -->
            <div class="mb-6">
                <label for="userName" class="inline-block text-lg mb-2">{{ __('register.user_name') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="userName" value="{{ $user->userName }}" />
                @error('userName')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- First Name and Last Name -->
            <div class="mb-6 grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="firstName" class="inline-block text-lg mb-2">{{ __('register.first_name') }}</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="firstName" value="{{ $user->firstName }}" />
                    @error('firstName')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="lastName" class="inline-block text-lg mb-2">{{ __('register.last_name') }}</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="lastName" value="{{ $user->lastName }}" />
                    @error('lastName')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Sex Field -->
            <div class="mb-6">
                <label for="sex" class="inline-block text-lg mb-2">{{ __('register.sex') }}</label>
                <select class="border border-gray-200 rounded p-2 w-full" name="sex">
                    <option disabled>{{ __('register.choose_a_sex') }}</option>
                    <option {{ $user->sex == "male" ? "selected" : "" }} value="male">{{ __('register.male') }}</option>
                    <option {{ $user->sex == "female" ? "selected" : "" }} value="female">{{ __('register.female') }}</option>
                    <option {{ $user->sex == "preferNotToSay" ? "selected" : "" }} value="preferNotToSay">{{ __('register.prefer_not_to_say') }}</option>
                </select>
                @error('sex')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Telephone Number and Address -->
            <div class="mb-6 grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="telephoneNumber" class="inline-block text-lg mb-2">{{ __('register.telephone_number') }}</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="telephoneNumber" value="{{ $user->telephoneNumber }}" />
                    @error('telephoneNumber')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="address" class="inline-block text-lg mb-2">{{ __('register.address') }}</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="address" value="{{ $user->address }}" />
                    @error('address')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Postal Code and City -->
            <div class="mb-6 grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="postalCode" class="inline-block text-lg mb-2">{{ __('register.postal_code') }}</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="postalCode" value="{{ $user->postalCode }}" />
                    @error('postalCode')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="city" class="inline-block text-lg mb-2">{{ __('register.city') }}</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="city" value="{{ $user->city }}" />
                    @error('city')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Country -->
            <div class="mb-6">
                <label for="country" class="inline-block text-lg mb-2">{{ __('register.country') }}</label>
                <select class="border border-gray-200 rounded p-2 w-full" name="country">
                    <option disabled>{{ __('register.choose_a_country') }}</option>
                    @foreach($countries as $country)
                        <option {{ $user->country == $country->countryName ? "selected" : "" }} value="{{ $country->countryName }}">{{ __('countries.' . $country->countryName) }}</option>
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
                    <input type="date" class="border border-gray-200 rounded p-2 w-full" name="dateOfBirth" value="{{ $user->dateOfBirth }}" />
                    @error('dateOfBirth')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="currentProfession" class="inline-block text-lg mb-2">{{ __('register.current_profession') }}</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="currentProfession" value="{{ $user->currentProfession }}" />
                    @error('currentProfession')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="mb-6">
                <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    {{ __('register.update_account') }}
                </button>

                <a href="{{ url()->previous() }}" class="text-black ml-4">{{ __('edit_entry.default.back') }}</a>
            </div>
        </form>
    </x-card>
</x-layout>

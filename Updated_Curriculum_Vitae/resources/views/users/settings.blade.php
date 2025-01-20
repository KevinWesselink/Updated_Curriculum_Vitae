<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                {{ __('settings.title') }}
            </h2>
            <p class="mb-4">{{ __('settings.description') }}</p>
        </header>

        <form method="POST" action="{{ route('updateSettings') }}">
            @csrf
            @method('PUT')

            <!-- Notifications Setting -->
            <div class="mb-6">
                <label for="notifications" class="inline-block text-lg mb-2">{{ __('settings.notifications') }}</label>
                <select class="border border-gray-200 rounded p-2 w-full" name="notifications">
                    <option value="1" {{ old('notifications', auth()->user()->notifications) == 1 ? 'selected' : '' }}>
                        {{ __('settings.enabled') }}
                    </option>
                    <option value="0" {{ old('notifications', auth()->user()->notifications) == 0 ? 'selected' : '' }}>
                        {{ __('settings.disabled') }}
                    </option>
                </select>
                @error('notifications')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email Notifications Setting -->
            <div class="mb-6">
                <label for="email_notifications" class="inline-block text-lg mb-2">{{ __('settings.email_notifications') }}</label>
                <select class="border border-gray-200 rounded p-2 w-full" name="email_notifications">
                    <option value="1" {{ old('email_notifications', auth()->user()->email_notifications) == 1 ? 'selected' : '' }}>
                        {{ __('settings.enabled') }}
                    </option>
                    <option value="0" {{ old('email_notifications', auth()->user()->email_notifications) == 0 ? 'selected' : '' }}>
                        {{ __('settings.disabled') }}
                    </option>
                </select>
                @error('email_notifications')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Profile Privacy Setting -->
            <div class="mb-6">
                <label for="profile_visibility" class="inline-block text-lg mb-2">{{ __('settings.profile_visibility') }}</label>
                <select class="border border-gray-200 rounded p-2 w-full" name="profile_visibility">
                    <option value="public" {{ old('profile_visibility', auth()->user()->profile_visibility) == 'public' ? 'selected' : '' }}>
                        {{ __('settings.public') }}
                    </option>
                    <option value="private" {{ old('profile_visibility', auth()->user()->profile_visibility) == 'private' ? 'selected' : '' }}>
                        {{ __('settings.private') }}
                    </option>
                </select>
                @error('profile_visibility')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Save Changes Button -->
            <div class="mb-6">
                <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:laravel_hover">
                    {{ __('settings.save_changes') }}
                </button>
            </div>
        </form>

        <div class="mt-8 text-center">
            <p>
                {{ __('settings.manage_account') }}
                <a href="/user/{{ auth()->user()->id }}/edit" class="text-laravel">{{ __('settings.view_profile') }}</a>
            </p>
        </div>
    </x-card>
</x-layout>

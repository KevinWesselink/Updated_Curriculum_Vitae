<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                {{ __('edit_entry.programming.edit_programming_general') }}
            </h2>
            <p class="mb-4">{{ __('edit_entry.programming.edit_this_programming') }}: {{ $programming->languageName }}</p>
        </header>

        <form method="POST" action="/programming/{{ $programming->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="languageName" class="inline-block text-lg mb-2">{{ __('edit_entry.programming.language_name') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="languageName"
                placeholder="{{ __('edit_entry.programming.language_name_placeholder') }}" value="{{ $programming->languageName }}" />

                @error('languageName')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="experienceLevel" class="inline-block text-lg mb-2">{{ __('edit_entry.programming.experience_level') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="experienceLevel"
                    placeholder="{{ __('edit_entry.programming.experience_level_placeholder') }}" value="{{ $programming->experienceLevel }}" />

                @error('experienceLevel')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="smallExplanation1" class="inline-block text-lg mb-2">{{ __('edit_entry.programming.small_explanation') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="smallExplanation1"
                    placeholder="{{ __('edit_entry.programming.small_explanation_placeholder') }}" value="{{ $programming->smallExplanation1 }}" />

                @error('smallExplanation1')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="smallExplanation2" class="inline-block text-lg mb-2">{{ __('edit_entry.programming.small_explanation') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="smallExplanation2"
                    placeholder="{{ __('edit_entry.programming.small_explanation_placeholder') }}" value="{{ $programming->smallExplanation2 }}" />

                @error('smallExplanation2')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="smallExplanation3" class="inline-block text-lg mb-2">{{ __('edit_entry.programming.small_explanation') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="smallExplanation3"
                    placeholder="{{ __('edit_entry.programming.small_explanation_placeholder') }}" value="{{ $programming->smallExplanation3 }}" />

                @error('smallExplanation3')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="smallExplanation4" class="inline-block text-lg mb-2">{{ __('edit_entry.programming.small_explanation') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="smallExplanation4"
                    placeholder="{{ __('edit_entry.programming.small_explanation_placeholder') }}" value="{{ $programming->smallExplanation4 }}" />

                @error('smallExplanation4')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="smallExplanation5" class="inline-block text-lg mb-2">{{ __('edit_entry.programming.small_explanation') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="smallExplanation5"
                    placeholder="{{ __('edit_entry.programming.small_explanation_placeholder') }}" value="{{ $programming->smallExplanation5 }}" />

                @error('smallExplanation5')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="startedWith" class="inline-block text-lg mb-2">{{ __('edit_entry.programming.started_with') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="startedWith"
                    placeholder="{{ __('edit_entry.programming.started_with_placeholder') }}" value="{{ $programming->startedWith }}" />

                @error('startedWith')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="workedWithUntil" class="inline-block text-lg mb-2">{{ __('edit_entry.programming.worked_with_until') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="workedWithUntil"
                    placeholder="{{ __('edit_entry.programming.worked_with_until_placeholder') }}" value="{{ $programming->workedWithUntil }}" />

                @error('workedWithUntil')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    {{ __('edit_entry.programming.edit_programming') }}
                </button>

                <a href="{{ url()->previous() }}" class="text-black ml-4">{{ __('edit_entry.default.back') }}</a>
            </div>
        </form>
    </x-card>
</x-layout>

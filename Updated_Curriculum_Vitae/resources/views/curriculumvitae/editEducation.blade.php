<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                {{ __('edit_entry.education.edit_education_general') }}
            </h2>
            <p class="mb-4">{{ __('edit_entry.education.edit_this_education') }}: {{ $education->schoolName }}</p>
        </header>

        <form method="POST" action="{{ route('updateEducation', $education->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="schoolName" class="inline-block text-lg mb-2">{{ __('edit_entry.education.school_name') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="schoolName"
                value="{{ $education->schoolName }}" />

                @error('schoolName')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="educationName" class="inline-block text-lg mb-2">{{ __('edit_entry.education.education_name') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="educationName"
                    placeholder="{{ __('edit_entry.education.education_name_placeholder') }}" value="{{ $education->educationName }}" />

                @error('educationName')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="smallExplanation1" class="inline-block text-lg mb-2">{{ __('edit_entry.education.small_explanation') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="smallExplanation1"
                    placeholder="{{ __('edit_entry.education.small_explanation_placeholder') }}" value="{{ $education->smallExplanation1 }}" />

                @error('smallExplanation1')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="smallExplanation2" class="inline-block text-lg mb-2">{{ __('edit_entry.education.small_explanation') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="smallExplanation2"
                    placeholder="{{ __('edit_entry.education.small_explanation_placeholder') }}" value="{{ $education->smallExplanation2 }}" />

                @error('smallExplanation2')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="smallExplanation3" class="inline-block text-lg mb-2">{{ __('edit_entry.education.small_explanation') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="smallExplanation3"
                    placeholder="{{ __('edit_entry.education.small_explanation_placeholder') }}" value="{{ $education->smallExplanation3 }}" />

                @error('smallExplanation3')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="smallExplanation4" class="inline-block text-lg mb-2">{{ __('edit_entry.education.small_explanation') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="smallExplanation4"
                    placeholder="{{ __('edit_entry.education.small_explanation_placeholder') }}" value="{{ $education->smallExplanation4 }}" />

                @error('smallExplanation4')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="smallExplanation5" class="inline-block text-lg mb-2">{{ __('edit_entry.education.small_explanation') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="smallExplanation5"
                    placeholder="{{ __('edit_entry.education.small_explanation_placeholder') }}" value="{{ $education->smallExplanation5 }}" />

                @error('smallExplanation5')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="yearsFollowed" class="inline-block text-lg mb-2">{{ __('edit_entry.education.years_followed') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="yearsFollowed"
                    placeholder="{{ __('edit_entry.education.years_followed_placeholder') }}" value="{{ $education->yearsFollowed }}" />

                @error('yearsFollowed')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="status" class="inline-block text-lg mb-2">{{ __('edit_entry.education.education_status') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="status"
                    placeholder="{{ __('edit_entry.education.education_status_placeholder') }}" value="{{ $education->status }}" />

                @error('status')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="schoolLocation" class="inline-block text-lg mb-2">{{ __('edit_entry.education.school_location') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="schoolLocation"
                    placeholder="{{ __('edit_entry.education.school_location_placeholder') }}" value="{{ $education->schoolLocation }}" />

                @error('schoolLocation')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    {{ __('edit_entry.education.edit_education') }}
                </button>

                <a href="{{ url()->previous() }}" class="text-black ml-4">{{ __('edit_entry.default.back') }}</a>
            </div>
        </form>
    </x-card>
</x-layout>

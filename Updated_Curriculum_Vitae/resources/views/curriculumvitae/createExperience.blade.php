<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                {{ __('add_entry.experience.create_experience') }}
            </h2>
            <p class="mb-4">{{ __('add_entry.experience.add_experience') }}</p>
        </header>

        <form method="POST" action="/experiences" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="companyName" class="inline-block text-lg mb-2">{{ __('add_entry.experience.company_name') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="companyName"
                value="{{ old('companyName') }}" />

                @error('companyName')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="jobTitle" class="inline-block text-lg mb-2">{{ __('add_entry.experience.job_title') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="jobTitle"
                    placeholder="{{ __('add_entry.experience.job_title_placeholder') }}" value="{{ old('jobTitle') }}" />

                @error('jobTitle')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="smallExplanation1" class="inline-block text-lg mb-2">{{ __('add_entry.experience.small_explanation') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="smallExplanation1"
                    placeholder="{{ __('add_entry.experience.small_explanation_placeholder') }}" value="{{ old('smallExplanation1') }}" />

                @error('smallExplanation1')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="smallExplanation2" class="inline-block text-lg mb-2">{{ __('add_entry.experience.small_explanation') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="smallExplanation2"
                    placeholder="{{ __('add_entry.experience.small_explanation_placeholder') }}" value="{{ old('smallExplanation2') }}" />

                @error('smallExplanation2')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="smallExplanation3" class="inline-block text-lg mb-2">{{ __('add_entry.experience.small_explanation') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="smallExplanation3"
                    placeholder="{{ __('add_entry.experience.small_explanation_placeholder') }}" value="{{ old('smallExplanation3') }}" />

                @error('smallExplanation3')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="smallExplanation4" class="inline-block text-lg mb-2">{{ __('add_entry.experience.small_explanation') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="smallExplanation4"
                    placeholder="{{ __('add_entry.experience.small_explanation_placeholder') }}" value="{{ old('smallExplanation4') }}" />

                @error('smallExplanation4')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="smallExplanation5" class="inline-block text-lg mb-2">{{ __('add_entry.experience.small_explanation') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="smallExplanation5"
                    placeholder="{{ __('add_entry.experience.small_explanation_placeholder') }}" value="{{ old('smallExplanation5') }}" />

                @error('smallExplanation5')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="yearsWorked" class="inline-block text-lg mb-2">{{ __('add_entry.experience.years_worked') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="yearsWorked"
                    placeholder="{{ __('add_entry.experience.years_worked_placeholder') }}" value="{{ old('yearsWorked') }}" />

                @error('yearsWorked')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="companyLocation" class="inline-block text-lg mb-2">{{ __('add_entry.experience.company_location') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="companyLocation"
                    placeholder="{{ __('add_entry.experience.company_location_placeholder') }}" value="{{ old('companyLocation') }}" />

                @error('companyLocation')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    {{ __('add_entry.experience.create_new_experience') }}
                </button>

                <a href="/" class="text-black ml-4"> {{ __('add_entry.default.back') }} </a>
            </div>
        </form>
    </x-card>
</x-layout>
  
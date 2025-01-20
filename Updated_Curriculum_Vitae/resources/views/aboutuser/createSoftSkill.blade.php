<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                {{ __('add_entry.soft_skill.create_soft_skill') }}
            </h2>
            <p class="mb-4">{{ __('add_entry.soft_skill.add_soft_skill') }}</p>
        </header>

        <form method="POST" action="{{ route('storeSoftSkill') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="skillName" class="inline-block text-lg mb-2">{{ __('add_entry.soft_skill.skill_name') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="skillName"
                placeholder="{{ __('add_entry.soft_skill.skill_name_placeholder') }}" value="{{ old('skillName') }}" />

                @error('skillName')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="experienceLevel" class="inline-block text-lg mb-2">{{ __('add_entry.soft_skill.experience_level') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="experienceLevel"
                    placeholder="{{ __('add_entry.soft_skill.experience_level_placeholder') }}" value="{{ old('experienceLevel') }}" />

                @error('experienceLevel')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="smallExplanation1" class="inline-block text-lg mb-2">{{ __('add_entry.soft_skill.small_explanation') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="smallExplanation1"
                    placeholder="{{ __('add_entry.soft_skill.small_explanation_placeholder') }}" value="{{ old('smallExplanation1') }}" />

                @error('smallExplanation1')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="smallExplanation2" class="inline-block text-lg mb-2">{{ __('add_entry.soft_skill.small_explanation') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="smallExplanation2"
                    placeholder="{{ __('add_entry.soft_skill.small_explanation_placeholder') }}" value="{{ old('smallExplanation2') }}" />

                @error('smallExplanation2')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="smallExplanation3" class="inline-block text-lg mb-2">{{ __('add_entry.soft_skill.small_explanation') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="smallExplanation3"
                    placeholder="{{ __('add_entry.soft_skill.small_explanation_placeholder') }}" value="{{ old('smallExplanation3') }}" />

                @error('smallExplanation3')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="smallExplanation4" class="inline-block text-lg mb-2">{{ __('add_entry.soft_skill.small_explanation') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="smallExplanation4"
                    placeholder="{{ __('add_entry.soft_skill.small_explanation_placeholder') }}" value="{{ old('smallExplanation4') }}" />

                @error('smallExplanation4')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="smallExplanation5" class="inline-block text-lg mb-2">{{ __('add_entry.soft_skill.small_explanation') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="smallExplanation5"
                    placeholder="{{ __('add_entry.soft_skill.small_explanation_placeholder') }}" value="{{ old('smallExplanation5') }}" />

                @error('smallExplanation5')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="startedWith" class="inline-block text-lg mb-2">{{ __('add_entry.soft_skill.started_with') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="startedWith"
                    placeholder="{{ __('add_entry.soft_skill.started_with_placeholder') }}" value="{{ old('startedWith') }}" />

                @error('startedWith')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="workedWithUntil" class="inline-block text-lg mb-2">{{ __('add_entry.soft_skill.worked_with_until') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="workedWithUntil"
                    placeholder="{{ __('add_entry.soft_skill.worked_with_until_placeholder') }}" value="{{ old('workedWithUntil') }}" />

                @error('workedWithUntil')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    {{ __('add_entry.soft_skill.create_new_soft_skill') }}
                </button>

                <a href="{{ route('choice') }}" class="text-black ml-4"> {{ __('add_entry.default.back') }} </a>
            </div>
        </form>
    </x-card>
</x-layout>

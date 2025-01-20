<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                {{ __('add_entry.project.edit_project_general') }}
            </h2>
            <p class="mb-4">{{ __('add_entry.project.edit_this_project') }}</p>
        </header>

        <form method="POST" action="{{ route('updateProject', $project->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="projectName" class="inline-block text-lg mb-2">{{ __('add_entry.project.project_name') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="projectName"
                placeholder="{{ __('add_entry.project.project_name_placeholder') }}" value="{{ $project->projectName }}" />

                @error('projectName')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="projectDescription" class="inline-block text-lg mb-2">{{ __('add_entry.project.project_description') }}</label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="projectDescription" 
                placeholder="{{ __('add_entry.project.project_description_placeholder') }}">{{ $project->projectDescription }}</textarea>

                @error('projectDescription')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="projectLink" class="inline-block text-lg mb-2">{{ __('add_entry.project.project_link') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="projectLink"
                placeholder="{{ __('add_entry.project.project_link_placeholder') }}" value="{{ $project->projectLink }}" />

                @error('projectLink')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="projectImage" class="inline-block text-lg mb-2">{{ __('add_entry.project.project_image') }}</label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="projectImage" />

                @error('projectImage')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="projectStartDate" class="inline-block text-lg mb-2">{{ __('add_entry.project.project_startdate') }}</label>
                <input type="date" class="border border-gray-200 rounded p-2 w-full" name="projectStartDate"
                value="{{ $project->projectStartDate }}" />

                @error('projectStartDate')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="projectEndDate" class="inline-block text-lg mb-2">{{ __('add_entry.project.project_enddate') }}</label>
                <input type="date" class="border border-gray-200 rounded p-2 w-full" name="projectEndDate"
                value="{{ $project->projectEndDate }}" />

                @error('projectEndDate')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="projectRole" class="inline-block text-lg mb-2">{{ __('add_entry.project.project_role') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="projectRole"
                placeholder="{{ __('add_entry.project.project_role_placeholder') }}" value="{{ $project->projectRole }}" />

                @error('projectRole')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="projectType" class="inline-block text-lg mb-2">{{ __('add_entry.project.project_type') }}</label>
                <select class="border border-gray-200 rounded p-2 w-full" name="projectType">
                    <option disabled {{ old('projectType') ? '' : 'selected' }}>{{ __('add_entry.project.choose_project_type') }}</option>
                    <option value="personal" {{ old('projectType') == 'personal' ? 'selected' : '' }}>
                        {{ __('add_entry.project.personal') }}
                    </option>
                    <option value="group" {{ old('projectType') == 'group' ? 'selected' : '' }}>
                        {{ __('add_entry.project.group') }}
                    </option>
                    <option value="open_source" {{ old('projectType') == 'open_source' ? 'selected' : '' }}>
                        {{ __('add_entry.project.open_source') }}
                    </option>
                    <option value="professional" {{ old('projectType') == 'professional' ? 'selected' : '' }}>
                        {{ __('add_entry.project.professional') }}
                    </option>
                </select>

                @error('projectType')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="projectTechnologies" class="inline-block text-lg mb-2">{{ __('add_entry.project.project_technologies') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="projectTechnologies"
                placeholder="{{ __('add_entry.project.project_technologies_placeholder') }}" value="{{ $project->projectTechnologies }}" />

                @error('projectTechnologies')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="projectTeamSize" class="inline-block text-lg mb-2">{{ __('add_entry.project.project_teamsize') }}</label>
                <input type="number" class="border border-gray-200 rounded p-2 w-full" name="projectTeamSize"
                min="0" placeholder="{{ __('add_entry.project.project_teamsize_placeholder') }}" value="{{ $project->projectTeamSize }}" />

                @error('projectTeamSize')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="projectClient" class="inline-block text-lg mb-2">{{ __('add_entry.project.project_client') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="projectClient"
                placeholder="{{ __('add_entry.project.project_client_placeholder') }}" value="{{ $project->projectClient }}" />

                @error('projectClient')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="projectLocation" class="inline-block text-lg mb-2">{{ __('add_entry.project.project_location') }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="projectLocation"
                placeholder="{{ __('add_entry.project.project_location_placeholder') }}" value="{{ $project->projectLocation }}" />

                @error('projectLocation')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="projectStatus" class="inline-block text-lg mb-2">{{ __('add_entry.project.project_status') }}</label>
                <select class="border border-gray-200 rounded p-2 w-full" name="projectStatus">
                    <option disabled {{ old('projectStatus') ? '' : 'selected' }}>{{ __('add_entry.project.choose_project_status') }}</option>
                    <option value="completed" {{ old('projectStatus') == 'completed' ? 'selected' : '' }}>
                        {{ __('add_entry.project.completed') }}
                    </option>
                    <option value="in_progress" {{ old('projectStatus') == 'in_progress' ? 'selected' : '' }}>
                        {{ __('add_entry.project.in_progress') }}
                    </option>
                    <option value="on_hold" {{ old('projectStatus') == 'on_hold' ? 'selected' : '' }}>
                        {{ __('add_entry.project.on_hold') }}
                    </option>
                    <option value="not_started" {{ old('projectStatus') == 'not_started' ? 'selected' : '' }}>
                        {{ __('add_entry.project.not_started') }}
                    </option>
                    <option value="abandoned" {{ old('projectStatus') == 'abandoned' ? 'selected' : '' }}>
                        {{ __('add_entry.project.abandoned') }}
                    </option>
                </select>

                @error('projectStatus')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    {{ __('add_entry.project.create_new_project') }}
                </button>

                <a href="{{ url()->previous() }}" class="text-black ml-4"> {{ __('add_entry.default.back') }} </a>
            </div>
        </form>
    </x-card>
</x-layout>
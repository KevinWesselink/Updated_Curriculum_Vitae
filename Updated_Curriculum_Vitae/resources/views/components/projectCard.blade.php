@props(['project'])

<x-card class="p-6 shadow-lg rounded-lg bg-white border border-gray-200">
    <div class="flex items-center">
        <div class="flex-1">
            <h3 class="text-2xl font-semibold text-laravel mb-2">
                <a href="{{ route('showProject', $project->id) }}" class="hover:text-laravel-dark transition-all duration-300">
                    {{ $project->projectName }}
                </a>
            </h3>
            <div class="text-sm font-medium text-gray-500 mb-4">
                {{ __('add_entry.project.project_status') }}: <span class="text-gray-900">{{ __('add_entry.project.' . $project->projectStatus) }}</span>
            </div>
            <div class="text-sm font-medium text-gray-500 mb-4">
                {{ __('add_entry.project.project_client') }}: <span class="text-gray-900">{{ $project->projectClient }}</span>
            </div>
            <div class="text-sm font-medium text-gray-500">
                {{  __('add_entry.project.project_location') }}: 
                <span class="text-gray-900">
                    <i class="fa-solid fa-location-dot text-laravel mr-2"></i>
                    {{ $project->projectLocation }}
                </span>
            </div>
        </div>
        <div class="ml-4 flex-shrink-0">
            <a href="{{ route('showProject', $project->id) }}" 
               class="px-4 py-2 bg-laravel text-white rounded-md hover:bg-laravel-dark transition-all duration-300 text-sm">
                {{ __('add_entry.project.view_project') }}
            </a>
        </div>
    </div>
</x-card>

@props(['education'])

<x-card class="p-6 shadow-lg rounded-lg bg-white border border-gray-200">
    <div class="flex items-center">
        <div class="flex-1">
            <h3 class="text-2xl font-semibold text-laravel mb-2">
                <a href="/education/{{ $education->id }}" class="hover:text-laravel-dark transition-all duration-300">
                    {{ $education->schoolName }}
                </a>
            </h3>
            <div class="text-sm font-medium text-gray-500 mb-4">
                {{ __('add_entry.education.education_name') }}: <span class="text-gray-900">{{ $education->educationName }}</span>
            </div>
            <div class="text-sm font-medium text-gray-500 mb-4">
                {{ __('add_entry.education.years_followed') }}: <span class="text-gray-900">{{ $education->yearsFollowed }}</span>
            </div>
            <div class="text-sm font-medium text-gray-500 mb-4">
                {{ __('add_entry.education.education_status') }}: <span class="text-gray-900">{{ $education->status }}</span>
            </div>
            <div class="text-sm font-medium text-gray-500">
                {{  __('add_entry.education.school_location') }}: 
                <span class="text-gray-900">
                    <i class="fa-solid fa-location-dot text-laravel mr-2"></i>
                    {{ $education->schoolLocation }}
                </span>
            </div>
        </div>
        <div class="ml-4 flex-shrink-0">
            <a href="/education/{{ $education->id }}" 
               class="px-4 py-2 bg-laravel text-white rounded-md hover:bg-laravel-dark transition-all duration-300 text-sm">
                {{ __('add_entry.education.view_education') }}
            </a>
        </div>
    </div>
</x-card>


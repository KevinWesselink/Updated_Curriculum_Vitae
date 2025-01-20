@props(['experience'])

<x-card class="p-6 shadow-lg rounded-lg bg-white border border-gray-200">
    <div class="flex items-center">
        <div class="flex-1">
            <h3 class="text-2xl font-semibold text-laravel mb-2">
                <a href="/experience/{{ $experience->id }}" class="hover:text-laravel-dark transition-all duration-300">
                    {{ $experience->companyName }}
                </a>
            </h3>
            <div class="text-sm font-medium text-gray-500 mb-4">
                {{ __('add_entry.experience.job_title') }}: <span class="text-gray-900">{{ $experience->jobTitle }}</span>
            </div>
            <div class="text-sm font-medium text-gray-500 mb-4">
                {{ __('add_entry.experience.years_worked') }}: <span class="text-gray-900">{{ $experience->yearsWorked }}</span>
            </div>
            <div class="text-sm font-medium text-gray-500">
                {{  __('add_entry.experience.company_location') }}: 
                <span class="text-gray-900">
                    <i class="fa-solid fa-location-dot text-laravel mr-2"></i>
                    {{ $experience->companyLocation }}
                </span>
            </div>
        </div>
        <div class="ml-4 flex-shrink-0">
            <a href="/experience/{{ $experience->id }}" 
               class="px-4 py-2 bg-laravel text-white rounded-md hover:bg-laravel-dark transition-all duration-300 text-sm">
                {{ __('add_entry.experience.view_experience') }}
            </a>
        </div>
    </div>
</x-card>


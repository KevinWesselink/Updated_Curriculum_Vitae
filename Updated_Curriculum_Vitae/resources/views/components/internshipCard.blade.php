@props(['internship'])

<x-card class="p-6 shadow-lg rounded-lg bg-white border border-gray-200">
    <div class="flex items-center">
        <div class="flex-1">
            <h3 class="text-2xl font-semibold text-laravel mb-2">
                <a href="{{ route('showInternship', $internship->id) }}" class="hover:text-laravel-dark transition-all duration-300">
                    {{ $internship->functionName }} {{ __('add_entry.internship.at') }} {{ $internship->companyName }}
                </a>
            </h3>
            <div class="text-sm font-medium text-gray-500 mb-4">
                {{ __('add_entry.internship.dates') }}: <span class="text-gray-900">
                    {{ $internship->internshipStartedAt }} {{ __('add_entry.internship.through') }} {{ $internship->internshipEndedAt }}
                </span>
            </div>
            <div class="text-sm font-medium text-gray-500 mb-4">
                {{ __('add_entry.internship.final_assessment') }}: <span class="text-gray-900">{{ __('add_entry.internship.' . $internship->finalAssessment) }}</span>
            </div>
            <div class="text-sm font-medium text-gray-500">
                {{  __('add_entry.internship.company_location') }}: 
                <span class="text-gray-900">
                    <i class="fa-solid fa-location-dot text-laravel mr-2"></i>
                    {{ $internship->companyLocation }}
                </span>
            </div>
        </div>
        <div class="ml-4 flex-shrink-0">
            <a href="{{  route('showInternship', $internship->id) }}" 
               class="px-4 py-2 bg-laravel text-white rounded-md hover:bg-laravel-dark transition-all duration-300 text-sm">
                {{ __('add_entry.internship.view_internship') }}
            </a>
        </div>
    </div>
</x-card>


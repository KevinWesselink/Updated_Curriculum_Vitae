@props(['course'])

<x-card class="p-6 shadow-lg rounded-lg bg-white border border-gray-200">
    <div class="flex items-center">
        <div class="flex-1">
            <h3 class="text-2xl font-semibold text-laravel mb-2">
                <a href="{{ route('showCourse', $course->id) }}" class="hover:text-laravel-dark transition-all duration-300">
                    {{ $course->courseName }}
                </a>
            </h3>
            <div class="text-sm font-medium text-gray-500 mb-4">
                {{ __('add_entry.course.educator_name') }}: <span class="text-gray-900">{{ $course->educatorName }}</span>
            </div>
            <div class="text-sm font-medium text-gray-500 mb-4">
                {{ __('add_entry.course.validity_earned') }}: <span class="text-gray-900">{{ $course->validityEarned }}</span>
            </div>
            <div class="text-sm font-medium text-gray-500 mb-4">
                {{ __('add_entry.course.valid_until') }}: <span class="text-gray-900">{{ $course->validUntil }}</span>
            </div>
            <div class="text-sm font-medium text-gray-500">
                {{  __('add_entry.course.certification_location') }}: 
                <span class="text-gray-900">
                    <i class="fa-solid fa-location-dot text-laravel mr-2"></i>
                    {{ $course->certificationLocation }}
                </span>
            </div>
        </div>
        <div class="ml-4 flex-shrink-0">
            <a href="{{ route('showCourse', $course->id) }}" 
               class="px-4 py-2 bg-laravel text-white rounded-md hover:bg-laravel-dark transition-all duration-300 text-sm">
                {{ __('add_entry.course.view_course') }}
            </a>
        </div>
    </div>
</x-card>


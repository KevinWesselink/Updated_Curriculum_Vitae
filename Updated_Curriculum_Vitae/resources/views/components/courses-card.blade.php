@props(['courses'])

<x-card>
    <div class="flex">
        <div>
            <h3 class="text-2xl">
                <a href="/courses/{{ $courses->id }}">{{ $courses->courseName }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $courses->educatorName }}</div>
            <div class="text-xl font-bold mb-4">{{ $courses->validityEarned }}</div>
            <div class="text-xl font-bold mb-4">{{ $courses->validUntil }}</div>
            <div class="text-lg mt-4">
                <i class="fa-solid-fa-location-dot">{{ $courses->certificationLocation }}</i>
            </div>
        </div>
    </div>
</x-card>

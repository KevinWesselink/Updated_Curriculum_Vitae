@props(['education'])

<x-card>
    <div class="flex">
        <div>
            <h3 class="text-2xl">
                <a href="/education/{{ $education->id }}">{{ $education->schoolName }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $education->educationName }}</div>
            <div class="text-xl font-bold">{{ $education->yearsFollowed }}</div>
            <div class="text-xl font-bold mb-4">Status: {{ $education->status }}</div>
            <div class="text-lg mt-4">
                <i class="fa-solid-fa-location-dot">{{ $education->schoolLocation }}</i>
            </div>
        </div>
    </div>
</x-card>

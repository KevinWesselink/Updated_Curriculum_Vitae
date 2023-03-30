@props(['experience'])

<x-card>
    <div class="flex">
        <div>
            <h3 class="text-2xl">
                <a href="/experience/{{ $experience->id }}">{{ $experience->companyName }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $experience->jobTitle }}</div>
            <div class="text-xl font-bold mb-4">{{ $experience->yearsWorked }}</div>
            <div class="text-lg mt-4">
                <i class="fa-solid-fa-location-dot">{{ $experience->companyLocation }}</i>
            </div>
        </div>
    </div>
</x-card>

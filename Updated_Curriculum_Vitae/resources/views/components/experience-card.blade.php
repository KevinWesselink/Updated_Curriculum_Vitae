@props(['Experience'])

<x-card>
    <div class="flex">
        <div>
            <h3 class="text-2xl">
                <a href="/experience/{{ $Experience->id }}">{{ $Experience->companyName }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $Experience->jobTitle }}</div>
            <div class="text-xl font-bold mb-4">{{ $Experience->yearsWorked }}</div>
            <div class="text-lg mt-4">
                <i class="fa-solid-fa-location-dot">{{ $Experience->companyLocation }}</i>
            </div>
        </div>
    </div>
</x-card>

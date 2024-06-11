@props(['internships'])

<x-card>
    <div class="flex">
        <div>
            <h3 class="text-2xl">
                <a href="/internships/{{ $internships->id }}">{{ $internships->functionName }} bij {{ $internships->companyName }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $internships->internshipStartedAt }} tot en met {{ $internships->internshipEndedAt }}</div>
            <div class="text-xl font-bold mb-4">{{ $internships->finalAssessment }}</div>
            <div class="text-lg mt-4">
                <i class="fa-solid-fa-location-dot">{{ $internships->companyLocation }}</i>
            </div>
        </div>
    </div>
</x-card>

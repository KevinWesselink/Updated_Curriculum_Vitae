<x-layout>
    @include('partials._hero')
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 max-4">
        <h1 class="text-xl p-2 font-bold col-span-2">{{ __('index.experiences') }}</h1>
        @unless($experiences->count() == 0)
            @foreach ($experiences as $experience)
                <x-experienceCard :experience="$experience" />
            @endforeach
        @else
            <p>{{ __('index.experiences_not_found') }}</p>
        @endunless

        <h1 class="text-xl p-2 font-bold col-span-2">{{ __('index.education') }}</h1>
        @unless($educations->count() == 0)
            @foreach ($educations as $education)
                <x-educationCard :education="$education" />
            @endforeach
        @else
            <p>{{ __('index.education_not_found') }}</p>
        @endunless

        <h1 class="text-xl p-2 font-bold col-span-2">{{ __('index.courses') }}</h1>
        @unless($courses->count() == 0)
            @foreach ($courses as $course)
                <x-courseCard :course="$course" />
            @endforeach
        @else
            <p>{{ __('index.courses_not_found') }}</p>
        @endunless

        <h1 class="text-xl p-2 font-bold col-span-2">{{ __('index.internships') }}</h1>
        @unless($internships->count() == 0)
            @foreach ($internships as $internship)
                <x-internshipCard :internship="$internship" />
            @endforeach
        @else
            <p>{{ __('index.internships_not_found') }}</p>
        @endunless

        <h1 class="text-xl p-2 font-bold col-span-2">{{ __('index.projects') }}</h1>
        @unless($projects->count() == 0)
            @foreach ($projects as $project)
                <x-projectCard :project="$project" />
            @endforeach
        @else
            <p>{{ __('index.projects_not_found') }}</p>
        @endunless
    </div>
</x-layout>

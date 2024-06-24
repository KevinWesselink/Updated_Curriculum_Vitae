<x-layout>
    @include('partials._hero')
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 max-4">
        <h1 class="text-xl p-2 font-bold col-span-2">{{ __('index.experiences') }}</h1>
        @unless($experience->count() == 0)
            @foreach ($experience as $experience)
                <x-experience-card :experience="$experience" />
            @endforeach
        @else
            <p>{{ __('index.experiences_not_found') }}</p>
        @endunless

        <h1 class="text-xl p-2 font-bold col-span-2">{{ __('index.education') }}</h1>
        @unless($education->count() == 0)
            @foreach ($education as $education)
                <x-education-card :education="$education" />
            @endforeach
        @else
            <p>{{ __('index.education_not_found') }}</p>
        @endunless

        <h1 class="text-xl p-2 font-bold col-span-2">{{ __('index.courses') }}</h1>
        @unless($courses->count() == 0)
            @foreach ($courses as $courses)
                <x-courses-card :courses="$courses" />
            @endforeach
        @else
            <p>{{ __('index.courses_not_found') }}</p>
        @endunless

        <h1 class="text-xl p-2 font-bold col-span-2">{{ __('index.internships') }}</h1>
        @unless($internships->count() == 0)
            @foreach ($internships as $internships)
                <x-internships-card :internships="$internships" />
            @endforeach
        @else
            <p>{{ __('index.internships_not_found') }}</p>
        @endunless
    </div>
</x-layout>

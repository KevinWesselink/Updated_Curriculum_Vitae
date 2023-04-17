<x-layout>
    @include('partials._hero')
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 max-4">
        <h1 class="text-xl p-2 font-bold col-span-2">Werkervaringen</h1>
        @unless($Experience->count() == 0)
            @foreach ($Experience as $Experience)
                <x-experience-card :experience="$Experience" />
            @endforeach
        @else
            <p>Geen werkervaringen gevonden.</p>
        @endunless

        <h1 class="text-xl p-2 font-bold col-span-2">Opleidingen</h1>
        @unless($Education->count() == 0)
            @foreach ($Education as $Education)
                <x-education-card :education="$Education" />
            @endforeach
        @else
            <p>Geen opleidingen gevonden.</p>
        @endunless

        <h1 class="text-xl p-2 font-bold col-span-2">Cursussen</h1>
        @unless($Courses->count() == 0)
            @foreach ($Courses as $Courses)
                <x-courses-card :courses="$Courses" />
            @endforeach
        @else
            <p>Geen cursussen gevonden.</p>
        @endunless
    </div>
</x-layout>

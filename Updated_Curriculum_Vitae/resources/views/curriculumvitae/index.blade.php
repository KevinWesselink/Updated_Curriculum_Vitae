<x-layout>
    @include('partials._hero')
    @include('partials._search')
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 max-4">

        @unless(count($Experience) == 0)

            @foreach ($Experience as $Experience)
                {{-- <x-listing-card :listing="$listing" /> --}}
            @endforeach
        @else
            <p>Geen werkervaringen gevonden.</p>
        @endunless

        @unless(count($Education) == 0)

            @foreach ($Education as $Education)
                {{-- <x-listing-card :listing="$listing" /> --}}
            @endforeach
        @else
            <p>Geen opleidingen gevonden.</p>
        @endunless

        @unless(count($Courses) == 0)

            @foreach ($Courses as $Courses)
                {{-- <x-listing-card :listing="$listing" /> --}}
            @endforeach
        @else
            <p>Geen cursussen gevonden.</p>
        @endunless

    </div>

    {{-- <div class="mt-6 p-4">
        {{ $listings->links() }}
    </div> --}}
</x-layout>

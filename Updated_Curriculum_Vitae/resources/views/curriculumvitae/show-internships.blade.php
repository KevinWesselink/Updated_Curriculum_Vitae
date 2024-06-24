<x-layout>

    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Terug
    </a>
    <div class="mx-4">
        <x-card class="p-10">
            <div class="flex flex-col items-center justify-center text-center">
                <h3 class="text-2xl mb-2">{{ $internships->functionName }} bij {{ $internships->companyName }}</h3>
                <div class="text-xl font-bold mb-4">{{ $internships->internshipStartedAt }} tot en met {{ $internships->internshipEndedAt }}</div>
                <div class="text-xl font-bold mb-4">{{ $internships->finalAssessment }}</div>
                <div class="text-xl font-bold mb-4">{{ $internships->companyLocation }}</div>

                <div class="text-lg my-4">
                    <i class="fa-solid fa-location-dot"></i> {{ $internships->certificationLocation }}
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        Wat heb ik er geleerd of gedaan?
                    </h3>
                    <p class="text-l">{{ $internships->smallExplanation1 }}</p>
                    <p class="text-l">{{ $internships->smallExplanation2 }}</p>
                    <p class="text-l">{{ $internships->smallExplanation3 }}</p>
                    <p class="text-l">{{ $internships->smallExplanation4 }}</p>
                    <p class="text-l">{{ $internships->smallExplanation5 }}</p>
                </div>
            </div>
        </x-card>

        <x-card class="mt-4 p-2 flex space-x-6">
            <a href="/internships/{{ $internships->id }}/edit">
                <i class="fa-solid fa-pencil"></i>Pas aan
            </a>

            <form method="POST" action="/internships/{{ $internships->id }}/delete">
                @csrf
                @method('DELETE')
                <button class="text-red-500"><i class="fa-solid fa-trash"></i>
                    Verwijder</button>
            </form>
        </x-card>
    </div>
</x-layout>

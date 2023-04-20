<x-layout>

    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Terug
    </a>
    <div class="mx-4">
        <x-card class="p-10">
            <div class="flex flex-col items-center justify-center text-center">
                <h3 class="text-2xl mb-2">{{ $experience->companyName }}</h3>
                <div class="text-xl font-bold mb-4">{{ $experience->jobTitle }}</div>
                <div class="text-xl font-bold mb-4">{{ $experience->yearsWorked }}</div>

                <div class="text-lg my-4">
                    <i class="fa-solid fa-location-dot"></i> {{ $experience->companyLocation }}
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        Wat heb ik er geleerd of gedaan?
                    </h3>
                    <p class="text-l">{{ $experience->smallExplanation1 }}</p>
                    <p class="text-l">{{ $experience->smallExplanation2 }}</p>
                    <p class="text-l">{{ $experience->smallExplanation3 }}</p>
                    <p class="text-l">{{ $experience->smallExplanation4 }}</p>
                    <p class="text-l">{{ $experience->smallExplanation5 }}</p>
                </div>
            </div>
        </x-card>

        <x-card class="mt-4 p-2 flex space-x-6">
            <a href="/experience/{{ $experience->id }}/edit">
                <i class="fa-solid fa-pencil"></i>Pas aan
            </a>

            <form method="POST" action="/experience/{{ $experience->id }}">
                @csrf
                @method('DELETE')
                <button class="text-red-500"><i class="fa-solid fa-trash"></i>
                    Verwijder</button>
            </form>
        </x-card>
    </div>
</x-layout>

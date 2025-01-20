<x-layout>

    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> {{ __('show_entry.back') }}
    </a>
    <div class="mx-4">
        <x-card class="p-10">
            <div class="flex flex-col items-center justify-center text-center">
                <h3 class="text-2xl mb-2">{{ $internship->functionName }} bij {{ $internship->companyName }}</h3>
                <div class="text-xl font-bold mb-4">{{ $internship->internshipStartedAt }} tot en met {{ $internship->internshipEndedAt }}</div>
                <div class="text-xl font-bold mb-4">{{ $internship->finalAssessment }}</div>
                <div class="text-xl font-bold mb-4">{{ $internship->companyLocation }}</div>

                <div class="text-lg my-4">
                    <i class="fa-solid fa-location-dot"></i> {{ $internship->certificationLocation }}
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        {{ __('show_entry.learn_or_do') }}
                    </h3>
                    <p class="text-l">{{ $internship->smallExplanation1 }}</p>
                    <p class="text-l">{{ $internship->smallExplanation2 }}</p>
                    <p class="text-l">{{ $internship->smallExplanation3 }}</p>
                    <p class="text-l">{{ $internship->smallExplanation4 }}</p>
                    <p class="text-l">{{ $internship->smallExplanation5 }}</p>
                </div>
            </div>
        </x-card>

        <x-card class="mt-4 p-2 flex space-x-6">
            <a href="{{ route('editInternship', $internship->id) }}" class="text-laravel">
                <i class="fa-solid fa-pencil"></i>{{ __('show_entry.edit') }}
            </a>

            <form method="POST" action="{{ route('destroyInternship', $internship->id) }}">
                @csrf
                @method('DELETE')
                <button class="text-red-500"><i class="fa-solid fa-trash"></i>
                    {{ __('show_entry.delete') }}</button>
            </form>
        </x-card>
    </div>
</x-layout>

<x-layout>

    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Terug
    </a>
    <div class="mx-4">
        <x-card class="p-10">
            <div class="flex flex-col items-center justify-center text-center">
                <h3 class="text-2xl mb-2">{{ $courses->educatorName }}</h3>
                <div class="text-xl font-bold mb-4">{{ $courses->courseName }}</div>
                <div class="text-xl font-bold mb-4">{{ $courses->validityEarned }}</div>
                <div class="text-xl font-bold mb-4">{{ $courses->validityUntil }}</div>

                <div class="text-lg my-4">
                    <i class="fa-solid fa-location-dot"></i> {{ $courses->certificationLocation }}
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        Wat heb ik er geleerd?
                    </h3>
                </div>
            </div>
        </x-card>
    </div>
</x-layout>

<x-layout>

    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Terug
    </a>
    <div class="mx-4">
        <x-card class="p-10">
            <div class="flex flex-col items-center justify-center text-center">
                <h3 class="text-2xl mb-2">{{ $education->schoolName }}</h3>
                <div class="text-xl font-bold mb-4">{{ $education->educationName }}</div>
                <div class="text-xl font-bold mb-4">{{ $education->yearsFollowed }}</div>
                <div class="text-xl font-bold mb-4">Status: {{ $education->status }}</div>

                <div class="text-lg my-4">
                    <i class="fa-solid fa-location-dot"></i> {{ $education->schoolLocation }}
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

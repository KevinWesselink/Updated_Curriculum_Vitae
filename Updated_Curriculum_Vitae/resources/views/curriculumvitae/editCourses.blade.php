<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Wijzig Cursus
            </h2>
            <p class="mb-4">Wijzig: {{ $courses->courseName }}</p>
        </header>

        <form method="POST" action="/courses/{{ $courses->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="educatorName" class="inline-block text-lg mb-2">Naam van opleider</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="educatorName"
                value="{{ $courses->educatorName }}" />

                @error('educatorName')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="courseName" class="inline-block text-lg mb-2">Naam van cursus</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="courseName"
                    placeholder="Bijvoorbeeld: Scrum, Agile" value="{{ $courses->courseName }}" />

                @error('courseName')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="smallExplanation1" class="inline-block text-lg mb-2">Kleine uitleg</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="smallExplanation1"
                    placeholder="Bijvoorbeeld: Ik heb leren samenwerken" value="{{ $courses->smallExplanation1 }}" />

                @error('smallExplanation1')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="smallExplanation2" class="inline-block text-lg mb-2">Kleine uitleg</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="smallExplanation2"
                    placeholder="Bijvoorbeeld: Ik heb leren samenwerken" value="{{ $courses->smallExplanation2 }}" />

                @error('smallExplanation2')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="smallExplanation3" class="inline-block text-lg mb-2">Kleine uitleg</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="smallExplanation3"
                    placeholder="Bijvoorbeeld: Ik heb leren samenwerken" value="{{ $courses->smallExplanation3 }}" />

                @error('smallExplanation3')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="smallExplanation4" class="inline-block text-lg mb-2">Kleine uitleg</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="smallExplanation4"
                    placeholder="Bijvoorbeeld: Ik heb leren samenwerken" value="{{ $courses->smallExplanation4 }}" />

                @error('smallExplanation4')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="smallExplanation5" class="inline-block text-lg mb-2">Kleine uitleg</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="smallExplanation5"
                    placeholder="Bijvoorbeeld: Ik heb leren samenwerken" value="{{ $courses->smallExplanation5 }}" />

                @error('smallExplanation5')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="validityEarned" class="inline-block text-lg mb-2">Geldig sinds</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="validityEarned"
                    placeholder="Bijvoorbeeld: 1 oktober 2022" value="{{ $courses->validityEarned }}" />

                @error('validityEarned')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="validUntil" class="inline-block text-lg mb-2">Geldig tot</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="validUntil"
                    placeholder="Bijvoorbeeld: 1 oktober 2023, altijd geldig" value="{{ $courses->validUntil }}" />

                @error('validUntil')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="certificationLocation" class="inline-block text-lg mb-2">Locatie</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="certificationLocation"
                    placeholder="Bijvoorbeeld: Deventer" value="{{ $courses->certificationLocation }}" />

                @error('certificationLocation')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Pas cursus aan
                </button>

                <a href="{{ url()->previous() }}" class="text-black ml-4"> Terug </a>
            </div>
        </form>
    </x-card>
</x-layout>

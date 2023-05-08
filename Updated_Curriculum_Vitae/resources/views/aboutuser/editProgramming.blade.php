<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Wijzig programmeerervaring
            </h2>
            <p class="mb-4">Wijzig: {{ $programming->languageName }}</p>
        </header>

        <form method="POST" action="/programming/{{ $programming->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="languageName" class="inline-block text-lg mb-2">Naam van programmeertaal</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="languageName"
                placeholder="Bijvoorbeeld: Java, Javascript, PHP" value="{{ $programming->languageName }}" />

                @error('languageName')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="experienceLevel" class="inline-block text-lg mb-2">Hoeveelheid ervaring</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="experienceLevel"
                    placeholder="Bijvoorbeeld: Onder Basis, Basis, Junior, Medior, Senior" value="{{ $programming->experienceLevel }}" />

                @error('experienceLevel')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="smallExplanation1" class="inline-block text-lg mb-2">Kleine uitleg</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="smallExplanation1"
                    placeholder="Bijvoorbeeld: Ik heb leren samenwerken" value="{{ $programming->smallExplanation1 }}" />

                @error('smallExplanation1')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="smallExplanation2" class="inline-block text-lg mb-2">Kleine uitleg</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="smallExplanation2"
                    placeholder="Bijvoorbeeld: Ik heb leren samenwerken" value="{{ $programming->smallExplanation2 }}" />

                @error('smallExplanation2')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="smallExplanation3" class="inline-block text-lg mb-2">Kleine uitleg</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="smallExplanation3"
                    placeholder="Bijvoorbeeld: Ik heb leren samenwerken" value="{{ $programming->smallExplanation3 }}" />

                @error('smallExplanation3')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="smallExplanation4" class="inline-block text-lg mb-2">Kleine uitleg</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="smallExplanation4"
                    placeholder="Bijvoorbeeld: Ik heb leren samenwerken" value="{{ $programming->smallExplanation4 }}" />

                @error('smallExplanation4')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="smallExplanation5" class="inline-block text-lg mb-2">Kleine uitleg</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="smallExplanation5"
                    placeholder="Bijvoorbeeld: Ik heb leren samenwerken" value="{{ $programming->smallExplanation5 }}" />

                @error('smallExplanation5')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="startedWith" class="inline-block text-lg mb-2">Mee begonnen</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="startedWith"
                    placeholder="Bijvoorbeeld: Augustus 2020" value="{{ $programming->startedWith }}" />

                @error('startedWith')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="workedWithUntil" class="inline-block text-lg mb-2">Geëindigd met</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="workedWithUntil"
                    placeholder="Bijvoorbeeld: Juni 2022" value="{{ $programming->workedWithUntil }}" />

                @error('workedWithUntil')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Pas programmeerervaring aan
                </button>

                <a href="/" class="text-black ml-4"> Terug </a>
            </div>
        </form>
    </x-card>
</x-layout>

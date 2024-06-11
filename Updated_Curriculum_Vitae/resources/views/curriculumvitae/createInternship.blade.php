<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Maak een stage aan
            </h2>
            <p class="mb-4">Voeg een stage toe aan je cv</p>
        </header>

        <form method="POST" action="/internships" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="companyName" class="inline-block text-lg mb-2">Bedrijfsnaam</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="companyName"
                value="{{ old('companyName') }}" />

                @error('companyName')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="functionName" class="inline-block text-lg mb-2">Functie titel</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="functionName"
                    placeholder="Bijvoorbeeld: Senior Laravel Developer" value="{{ old('functionName') }}" />

                @error('functionName')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="smallExplanation1" class="inline-block text-lg mb-2">Kleine uitleg</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="smallExplanation1"
                    placeholder="Bijvoorbeeld: Ik heb leren samenwerken" value="{{ old('smallExplanation1') }}" />

                @error('smallExplanation1')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="smallExplanation2" class="inline-block text-lg mb-2">Kleine uitleg</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="smallExplanation2"
                    placeholder="Bijvoorbeeld: Ik heb leren samenwerken" value="{{ old('smallExplanation2') }}" />

                @error('smallExplanation2')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="smallExplanation3" class="inline-block text-lg mb-2">Kleine uitleg</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="smallExplanation3"
                    placeholder="Bijvoorbeeld: Ik heb leren samenwerken" value="{{ old('smallExplanation3') }}" />

                @error('smallExplanation3')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="smallExplanation4" class="inline-block text-lg mb-2">Kleine uitleg</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="smallExplanation4"
                    placeholder="Bijvoorbeeld: Ik heb leren samenwerken" value="{{ old('smallExplanation4') }}" />

                @error('smallExplanation4')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="smallExplanation5" class="inline-block text-lg mb-2">Kleine uitleg</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="smallExplanation5"
                    placeholder="Bijvoorbeeld: Ik heb leren samenwerken" value="{{ old('smallExplanation5') }}" />

                @error('smallExplanation5')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="internshipStartedAt" class="inline-block text-lg mb-2">Stage begon op</label>
                <input type="date" class="border border-gray-200 rounded p-2 w-full" name="internshipStartedAt"
                    value="{{ old('internshipStartedAt') }}" />

                @error('internshipStartedAt')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="internshipEndedAt" class="inline-block text-lg mb-2">Stage eindigde op</label>
                <input type="date" class="border border-gray-200 rounded p-2 w-full" name="internshipEndedAt"
                    value="{{ old('internshipEndedAt') }}" />

                @error('internshipEndedAt')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="finalAssessment" class="inline-block text-lg mb-2">Eindbeoordeling stage</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="finalAssessment"
                    placeholder="Bijvoorbeeld: Goed, voldoende, matig, onvoldoende" value="{{ old('finalAssessment') }}" />

                @error('finalAssessment')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="companyLocation" class="inline-block text-lg mb-2">Locatie</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="companyLocation"
                    placeholder="Bijvoorbeeld: Deventer" value="{{ old('companyLocation') }}" />

                @error('companyLocation')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Creëer Stage
                </button>

                <a href="/" class="text-black ml-4"> Terug </a>
            </div>
        </form>
    </x-card>
</x-layout>
  
<x-layout>
    <x-card class="p-6 bg-white rounded-lg shadow-md">
        <div class="grid">
            <span class="text-2xl justify-self-center pb-2">Zoek een gebruiker</span>
        </div>
        <form action="{{ route('search') }}" method="GET" class="mb-4">
            <div class="flex items-center space-x-2">
                <input type="text" name="query" placeholder="Zoek..." class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <button type="submit" class="p-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
                    Zoek
                </button>
            </div>
        </form>

        <table class="min-w-full bg-white border border-gray-200 rounded-md">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-3 text-left border-b">id</th>
                    <th class="p-3 text-left border-b">Voornaam</th>
                    <th class="p-3 text-left border-b">Achternaam</th>
                    <th class="p-3 text-left border-b">Woonplaats</th>
                    <th class="p-3 text-left border-b">Beroep</th>
                </tr>
            </thead>
        
            <tbody>
                @if ($users->isNotEmpty())
                    @foreach ($users as $user)
                        <tr class="hover:bg-gray-100">
                            <td class="p-3 border-b">
                                <a href="/about/user/{{$user->id}}" class="text-black-100 hover:text-laravel hover:underline">
                                    {{ $user->id }}
                                </a>
                            </td>
                            <td class="p-3 border-b">
                                <a href="/about/user/{{$user->id}}" class="text-black-100 hover:text-laravel hover:underline">
                                    {{ $user->firstName }}
                                </a>
                            </td>
                            <td class="p-3 border-b">
                                <a href="/about/user/{{$user->id}}" class="text-black-100 hover:text-laravel hover:underline">
                                    {{ $user->lastName }}
                                </a>
                            </td>
                            <td class="p-3 border-b">
                                <a href="/about/user/{{$user->id}}" class="text-black-100 hover:text-laravel hover:underline">
                                    {{ $user->city }}
                                </a>
                            </td>
                            <td class="p-3 border-b">
                                <a href="/about/user/{{$user->id}}" class="text-black-100 hover:text-laravel hover:underline">
                                    {{ $user->currentProfession }}
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4" class="p-3 text-center text-gray-500">Er zijn geen zoekresultaten gevonden!</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </x-card>
</x-layout>

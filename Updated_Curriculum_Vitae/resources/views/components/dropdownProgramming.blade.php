@props(['programming'])

<!-- component -->
<section class="flex items-center">
    <details class="group inline-flex items-center rounded-md bg-white text-base font-medium hover:text-teal-900">
      <summary class="list-none outline-none cursor-pointer focus:underline focus:text-teal-600 font-semibold group-open:before:rotate-90 before:origin-center relative before:w-[18px] before:h-[18px] before:transition-transform before:duration-200 before:-left-1 before:top-2/4 before:-translate-y-2/4 before:absolute before:bg-no-repeat before:bg-[length:18px_18px] before:bg-center before:bg-[url('data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20class%3D%22h-6%20w-6%22%20fill%3D%22none%22%20viewBox%3D%220%200%2024%2024%22%20stroke%3D%22currentColor%22%20stroke-width%3D%222%22%3E%0A%20%20%3Cpath%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%20d%3D%22M9%205l7%207-7%207%22%20%2F%3E%0A%3C%2Fsvg%3E')]">
        <div class="text-teal-600 pl-8">{{ $programming->languageName }}</div>
        <div class="text-gray-500 text-xs pl-8">{{ $programming->startedWith }} - {{ $programming->workedWithUntil }}</div>
      </summary>
  
      <hr class="my-2 scale-x-110"/>
  
      <div class="text-sm -mt-2 pl-8 p-2 bg-gray-100 text-gray-700">
        <h3>{{ $programming->languageName }}</h3>
        <div>{{ $programming->experienceLevel }}</div>
        <div>{{ $programming->startedWith }} - {{ $programming->workedWithUntil }}</div>

        @auth
        <div>
            <a href="/programming/{{ $programming->id }}/edit">
                <i class="fa-solid fa-pencil pr-2"></i>Pas aan
            </a>

            <form method="POST" action="/programming/{{ $programming->id }}/delete">
                @csrf
                @method('DELETE')
                <button class="text-red-500"><i class="fa-solid fa-trash pr-2"></i>
                    Verwijder</button>
            </form>
        </div>
        @endauth
      </div>
    </details>
  </section>
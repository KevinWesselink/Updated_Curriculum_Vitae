@props(['softskills'])

<!-- component -->
<!-- This is an example component -->
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<div class='flex items-center'>
    <nav class="hidden space-x-1 md:flex">
        <div class="relative" x-data="{ open: false }">
            <button @click="open = ! open" type="button"
                class="group inline-flex items-center rounded-md bg-white text-base font-medium hover:text-teal-900"
                aria-expanded="false">
                <span>
                    <div class="text-teal-600">{{ $softskills->skillName }}</div>
                    <div class="text-gray-500 text-xs p-1">{{ $softskills->startedWith }} - {{ $softskills->workedWithUntil }}</div>
                </span>
                <svg :class="{ 'rotate-180 duration-300': open, 'duration-300': !open }"
                    class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                        clip-rule="evenodd" />
                </svg>
            </button>

            <div x-show="open" x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-90"
                class="absolute left-1/2 z-full mt-3 w-screen max-w-md -translate-x-1/2 transform px-2 sm:px-0">

                <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                    <div class="relative grid gap-6 bg-white px-2 py-2 sm:gap-2 sm:p-2">
                        <h3 class="text-2xl">{{ $softskills->skillName }}</h3>
                        <div class="text-m font-bold">{{ $softskills->experienceLevel }}</div>
                        <div class="text-m font-bold">{{ $softskills->startedWith }} - {{ $softskills->workedWithUntil }}</div>
                    </div>

                    @auth
                    <div class="relative grid gap-6 bg-white px-2 py-2 sm:gap-2 sm:p-2">
                        <a href="/softskills/{{ $softskills->id }}/edit">
                            <i class="fa-solid fa-pencil"></i>Pas aan
                        </a>
            
                        <form method="POST" action="/softskills/{{ $softskills->id }}">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500"><i class="fa-solid fa-trash"></i>
                                Verwijder</button>
                        </form>
                    </div>
                    @endauth
                </div>
            </div>
        </div>    
    </nav>
</div>

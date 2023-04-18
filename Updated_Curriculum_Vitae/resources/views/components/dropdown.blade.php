<!-- component -->
<!-- This is an example component -->
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<div class='flex items-center justify-center min-h-screen'>
    <nav class="hidden -mt-32 space-x-10 md:flex">
        <div class="relative" x-data="{ open: false }">
            <button @click="open = ! open" type="button"
                class="text-gray-500 group p-4 inline-flex items-center rounded-md bg-white text-base font-medium hover:text-gray-900"
                aria-expanded="false">
                <span>Options</span>
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
                    <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                        <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">

                            <svg class="h-6 w-6 flex-shrink-0 text-template-secondary"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
                            </svg>

                            <div class="ml-4">
                                <p class="text-base font-medium text-gray-900">Enterprise</p>
                                <p class="mt-1 text-sm text-gray-500">Enterprise options.</p>
                            </div>
                        </a>

                        <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                            <svg class="h-6 w-6 flex-shrink-0 text-template-secondary"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0120.25 6v12A2.25 2.25 0 0118 20.25H6A2.25 2.25 0 013.75 18V6A2.25 2.25 0 016 3.75h1.5m9 0h-9" />
                            </svg>
                            <div class="ml-4">
                                <p class="text-base font-medium text-gray-900">Books</p>
                                <p class="mt-1 text-sm text-gray-500">All books</p>
                            </div>
                        </a>

                        <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                            <svg class="h-6 w-6 flex-shrink-0 text-template-secondary"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>

                            <div class="ml-4">
                                <p class="text-base font-medium text-gray-900">Users</p>
                                <p class="mt-1 text-sm text-gray-500">All Users</p>
                            </div>
                        </a>
                    </div>
                    <div class="bg-gray-50 px-5 py-5 sm:px-8 sm:py-8">
                        <div>
                            <h3 class="text-base font-medium text-gray-500">More</h3>
                            <ul role="list" class="mt-4 space-y-4">
                                <li class="truncate text-base">
                                    <a href="#" class="font-medium text-gray-900 hover:text-gray-700">More
                                        Options</a>
                                </li>

                                <li class="truncate text-base">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>

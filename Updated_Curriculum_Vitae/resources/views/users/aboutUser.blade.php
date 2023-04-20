<x-layout>
    <x-card>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>



        <div class="bg-gray-100">
            <div class="w-full text-white bg-laravel">
                <div
                    class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                    <div class="p-4 flex flex-row items-center justify-between">
                        <p
                            class="text-lg font-semibold tracking-widest uppercase rounded-lg focus:outline-none focus:shadow-outline">
                            Personalia
                        </p>
                    </div>
                </div>
            </div>

            <div class="container mx-auto my-5 p-5">
                <div class="md:flex no-wrap md:-mx-2 ">
                    <!-- Left Side -->
                    <div class="w-full md:w-3/12 md:mx-2">
                        <!-- Profile Card -->
                        <div class="bg-white p-3 border-t-4 border-laravel">
                            <div class="image overflow-hidden">
                                <img class="h-auto w-full mx-auto" src="/images/FotoKevin.jpg"
                                    alt="Foto van Kevin Wesselink">
                            </div>
                            <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">Kevin Wesselink</h1>
                            <h3 class="text-gray-600 font-lg text-semibold leading-6">Student Software Development</h3>
                            <p class="text-sm text-gray-500 hover:text-gray-600 leading-6">Student software development
                                aan het Deltion College te Zwolle.
                                Voormalig student Software Developer aan de Hogeschool Utrecht te Amersfoort.
                            </p>
                            <ul
                                class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                                <li class="flex items-center py-3">
                                    <span>Status</span>
                                    <span class="ml-auto"><span
                                            class="bg-green-500 py-1 px-2 rounded text-white text-sm">Actief</span></span>
                                </li>
                                <li class="flex items-center py-3">
                                    <span>Website bestaat sinds:</span>
                                    <span class="ml-auto">13 april 2023</span>
                                </li>
                            </ul>
                        </div>
                        <!-- End of profile card -->
                    </div>
                    <!-- Right Side -->
                    <div class="w-full md:w-9/12 mx-2 h-64">
                        <!-- Profile tab -->
                        <!-- About Section -->
                        <div class="bg-white p-3 shadow-sm rounded-sm">
                            <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                                <span clas="text-green-500">
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </span>
                                <span class="tracking-wide">Over</span>
                            </div>
                            <div class="text-gray-700">
                                <div class="grid md:grid-cols-2 text-sm">
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Voornaam</div>
                                        <div class="px-4 py-2">Kevin</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Achternaam</div>
                                        <div class="px-4 py-2">Wesselink</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Geslacht</div>
                                        <div class="px-4 py-2">Man</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Telefoonnummer</div>
                                        <div class="px-4 py-2">+31 06 31073764</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Adres</div>
                                        <div class="px-4 py-2">Meiberg 25</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Postcode</div>
                                        <div class="px-4 py-2">8111 CC Heeten</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Email</div>
                                        <div class="px-4 py-2">
                                            <a class="text-blue-800"
                                                href="mailto:kevinwes11@gmail.com">kevinwes11@gmail.com</a>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Geboortedatum</div>
                                        <div class="px-4 py-2">21 januari 2001</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of about section -->

                        <div class="my-4"></div>

                        <!-- Experience and education -->
                        <div class="bg-white p-3 shadow-sm rounded-sm">

                            <div class="grid grid-cols-2">
                                <div>
                                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                        <i class="fa-solid fa-book"></i>
                                        <span class="tracking-wide">Programmeer Ervaring</span>
                                    </div>
                                    <ul class="list-inside space-y-2">
                                        <li>
                                            {{-- <div class="text-teal-600">Java</div>
                                            <div class="text-gray-500 text-xs">Augustus 2020 - Februari 2022</div> --}}
                                            <x-dropdownJava></x-dropdownJava>
                                        </li>
                                        <li>
                                            <div class="text-teal-600">PHP</div>
                                            <div class="text-gray-500 text-xs">September 2022 - Heden</div>
                                        </li>
                                        <li>
                                            <div class="text-teal-600">JavaScript</div>
                                            <div class="text-gray-500 text-xs">November 2022 - Heden</div>
                                        </li>
                                        <li>
                                            <div class="text-teal-600">HTML/CSS</div>
                                            <div class="text-gray-500 text-xs">Augustus 2022 - Heden</div>
                                        </li>
                                        <li>
                                            <div class="text-teal-600">React</div>
                                            <div class="text-gray-500 text-xs">Februari 2022 - Juni 2022</div>
                                        </li>
                                        <li>
                                            <div class="text-teal-600">Laravel</div>
                                            <div class="text-gray-500 text-xs">Februari 2021 - Juni 2021</div>
                                            <div class="text-gray-500 text-xs">Maart 2023 - Heden</div>
                                        </li>
                                        <li>
                                            <div class="text-teal-600">Tailwind</div>
                                            <div class="text-gray-500 text-xs">Februari 2021 - Juni 2021</div>
                                            <div class="text-gray-500 text-xs">Maart 2023 - Heden</div>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                        <i class="fa-solid fa-book"></i>
                                        <span class="tracking-wide">Andere Ervaring</span>
                                    </div>
                                    <ul class="list-inside space-y-2">
                                        <li>
                                            <div class="text-teal-600">Agile/Scrum</div>
                                            <div class="text-gray-500 text-xs">Augustus 2020 - Juni 2022</div>
                                            <div class="text-gray-500 text-xs">Oktober 2022 - November 2022</div>
                                        </li>
                                        <li>
                                            <div class="text-teal-600">Klantcontact</div>
                                            <div class="text-gray-500 text-xs">November 2020 - Juni 2021</div>
                                            <div class="text-gray-500 text-xs">November 2021 - Juni 2022</div>
                                        </li>
                                        <li>
                                            <div class="text-teal-600">Samenwerken</div>
                                            <div class="text-gray-500 text-xs">November 2020 - Juni 2021</div>
                                            <div class="text-gray-500 text-xs">November 2021 - Juni 2022</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End of Experience and education grid -->
                        </div>
                        <!-- End of profile tab -->
                    </div>
                </div>
            </div>
        </div>
    </x-card>
</x-layout>

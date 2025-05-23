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
                <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">{{ $user->firstName  }} {{  $user->lastName }}</h1>
                <h3 class="text-gray-600 font-lg text-semibold leading-6">{{ $user->currentProfession }}</h3>
                <p class="text-sm text-gray-500 hover:text-gray-600 leading-6">
                    Student software development aan het Deltion College te Zwolle.
                    Voormalig student Software Developer aan de Hogeschool Utrecht te Amersfoort.
                </p>
                <ul
                    class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                    <li class="flex items-center py-3">
                        <span>Status</span>
                        <span class="ml-auto"><span
                                class="bg-green-500 py-1 px-2 rounded text-white text-sm">{{ __('about_user.active') }}</span></span>
                    </li>
                    <li class="flex items-center py-3">
                        <span>{{ __('about_user.website_since') }}</span>
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
                    <span class="tracking-wide">{{ __('about_user.about') }}</span>
                </div>
                <div class="text-gray-700">
                    <div class="grid md:grid-cols-2 text-sm">
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">{{ __('about_user.first_name') }}</div>
                            <div class="px-4 py-2">{{ $user->firstName }}</div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">{{ __('about_user.last_name') }}</div>
                            <div class="px-4 py-2">{{ $user->lastName }}</div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">{{ __('about_user.sex') }}</div>
                            <div class="px-4 py-2">{{ __('about_user.' . $user->sex) }}</div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">{{ __('about_user.telephone_number') }}</div>
                            <div class="px-4 py-2">{{ $user->telephoneNumber }}</div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">{{ __('about_user.address') }}</div>
                            <div class="px-4 py-2">{{ $user->address }}</div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">{{ __('about_user.postal_code') }}</div>
                            <div class="px-4 py-2">{{ $user->postalCode }} {{ $user->city }}</div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">{{ __('about_user.email') }}</div>
                            <div class="px-4 py-2">
                                <a class="text-blue-800"
                                    href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                            </div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">{{ __('about_user.date_of_birth') }}</div>
                            <div class="px-4 py-2">{{ date('d-m-Y', strtotime($user->dateOfBirth)) }}</div>
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
                            <span class="tracking-wide">{{ __('about_user.programming') }}</span>
                        </div>
                        @unless ($programming->count() == 0)
                            @foreach ($programming as $programming)
                                <ul class="list-inside space-y-2">
                                    <li>
                                        <x-dropdownProgramming :programming="$programming" />
                                    </li>
                                </ul>
                            @endforeach
                        @else
                            <p>{{ __('about_user.no_programming_found') }}</p>
                        @endunless
                    </div>
                    <div>
                        <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                            <i class="fa-solid fa-book"></i>
                            <span class="tracking-wide">{{ __('about_user.soft_skills') }}</span>
                        </div>
                        @unless ($softSkills->count() == 0)
                            @foreach ($softSkills as $softSkill)
                                <ul class="list-inside space-y-2">
                                    <li>
                                        <x-dropdownSoftSkill :softSkill="$softSkill" />
                                    </li>
                                </ul>
                            @endforeach
                        @else
                            <p>{{ __('about_user.no_soft_skills_found') }}</p>
                        @endunless
                    </div>
                </div>
                <!-- End of Experience and education grid -->
            </div>
            <!-- End of profile tab -->
        </div>
    </div>
</div>
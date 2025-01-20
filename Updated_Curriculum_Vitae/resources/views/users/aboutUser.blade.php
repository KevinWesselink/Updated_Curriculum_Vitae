<x-layout>
    <x-card>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

        <div class="bg-gray-100">
            <div class="w-full text-white bg-laravel">
                <div
                    class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                    <div class="p-4 flex flex-row items-center justify-between">
                        <p class="text-lg font-semibold tracking-widest uppercase rounded-lg focus:outline-none focus:shadow-outline">
                            {{ __('about_user.personalia') }}
                        </p>
                    </div>
                </div>
            </div>

            @if ($user->profile_visibility == 'public' || auth()->user()->id == $user->id)
                @include('partials.profileDetails', ['user' => $user, 'programming' => $programming, 'softSkills' => $softSkills])

            @elseif ($user->profile_visibility == 'private')
                @if (isset($requestStatus))
                    @if ($requestStatus === 'approved')
                        @include('partials.profileDetails', ['user' => $user, 'programming' => $programming, 'softSkills' => $softSkills])
                    @elseif ($requestStatus === 'pending')
                        <x-card>
                            <div class="text-center bg-yellow-100 border border-yellow-300 text-yellow-600 p-8 rounded-lg shadow-lg">
                                <div class="text-6xl mb-4">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <p class="text-xl font-semibold">{{ __('about_user.access_requested_message') }}</p>
                            </div>
                        </x-card>
                    @elseif ($requestStatus === 'rejected')
                        <x-card>
                            <div class="text-center bg-red-100 border border-red-300 text-red-600 p-8 rounded-lg shadow-lg">
                                <div class="text-6xl mb-4">
                                    <i class="fas fa-ban"></i>
                                </div>
                                <p class="text-xl font-semibold">{{ __('about_user.access_rejected_message') }}</p>
                                <br>
                                <a href="{{ route('requestAccess', $user->id) }}" class="bg-laravel text-white rounded py-2 px-4 hover:laravel_hover">
                                    {{ __('about_user.request_access_button') }}
                                </a>
                            </div>
                        </x-card>
                    @endif
                @else
                    <x-card>
                        <div class="text-center bg-blue-100 border border-blue-300 text-blue-600 p-8 rounded-lg shadow-lg">
                            <div class="text-6xl mb-4">
                                <i class="fas fa-question-circle"></i>
                            </div>
                            <p class="text-xl font-semibold">{{ __('about_user.request_access_message') }}</p>
                            <br>
                            <a href="{{ route('requestAccess', $user->id) }}" class="bg-laravel text-white rounded py-2 px-4 hover:laravel_hover">
                                {{ __('about_user.request_access_button') }}
                            </a>
                        </div>
                    </x-card>
                @endif
            @endif
        </div>
    </x-card>
</x-layout>

<x-layout>
    <div class="container mx-auto mt-12">
        <h1 class="text-2xl font-bold text-center mb-8 text-gray-800">
            {{ __('choice.manage_sections') }}
        </h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <x-card class="p-6 shadow-lg rounded-lg hover:shadow-xl transition-all duration-300">
                <a href="{{ route('createExperience') }}" class="flex items-center justify-center bg-laravel text-white py-3 px-6 rounded-md text-center hover:bg-laravel-dark transition-all duration-300">
                    <i class="fas fa-briefcase mr-3"></i> {{ __('choice.add_experience') }}
                </a>
            </x-card>

            <x-card class="p-6 shadow-lg rounded-lg hover:shadow-xl transition-all duration-300">
                <a href="{{ route('createEducation') }}" class="flex items-center justify-center bg-laravel text-white py-3 px-6 rounded-md text-center hover:bg-laravel-dark transition-all duration-300">
                    <i class="fas fa-graduation-cap mr-3"></i> {{ __('choice.add_education') }}
                </a>
            </x-card>

            <x-card class="p-6 shadow-lg rounded-lg hover:shadow-xl transition-all duration-300">
                <a href="{{ route('createCourse') }}" class="flex items-center justify-center bg-laravel text-white py-3 px-6 rounded-md text-center hover:bg-laravel-dark transition-all duration-300">
                    <i class="fas fa-book mr-3"></i> {{ __('choice.add_course') }}
                </a>
            </x-card>

            <x-card class="p-6 shadow-lg rounded-lg hover:shadow-xl transition-all duration-300">
                <a href="{{ route('createInternship') }}" class="flex items-center justify-center bg-laravel text-white py-3 px-6 rounded-md text-center hover:bg-laravel-dark transition-all duration-300">
                    <i class="fas fa-user-tie mr-3"></i> {{ __('choice.add_internship') }}
                </a>
            </x-card>

            <x-card class="p-6 shadow-lg rounded-lg hover:shadow-xl transition-all duration-300">
                <a href="{{ route('createProgramming') }}" class="flex items-center justify-center bg-laravel text-white py-3 px-6 rounded-md text-center hover:bg-laravel-dark transition-all duration-300">
                    <i class="fas fa-code mr-3"></i> {{ __('choice.add_programming') }}
                </a>
            </x-card>

            <x-card class="p-6 shadow-lg rounded-lg hover:shadow-xl transition-all duration-300">
                <a href="{{ route('createSoftSkill') }}" class="flex items-center justify-center bg-laravel text-white py-3 px-6 rounded-md text-center hover:bg-laravel-dark transition-all duration-300">
                    <i class="fas fa-lightbulb mr-3"></i> {{ __('choice.add_soft_skill') }}
                </a>
            </x-card>

            <x-card class="p-6 shadow-lg rounded-lg hover:shadow-xl transition-all duration-300">
                <a href="{{ route('createProject') }}" class="flex items-center justify-center bg-laravel text-white py-3 px-6 rounded-md text-center hover:bg-laravel-dark transition-all duration-300">
                    <i class="fas fa-project-diagram mr-3"></i> {{ __('choice.add_project') }}
                </a>
            </x-card>
        </div>
    </div>
</x-layout>
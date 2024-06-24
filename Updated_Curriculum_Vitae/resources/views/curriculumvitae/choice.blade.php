<x-layout>
    <div class="container mx-auto mt-12 space-y-6">
        <x-card class="p-6 max-w-lg mx-auto shadow-lg rounded-lg">
            <a href="/create/experience" class="block bg-laravel text-white py-3 px-6 rounded-md text-center hover:bg-laravel-dark transition-all duration-300">
                {{ __('choice.add_experience') }}
            </a>
        </x-card>

        <x-card class="p-6 max-w-lg mx-auto shadow-lg rounded-lg">
            <a href="/create/education" class="block bg-laravel text-white py-3 px-6 rounded-md text-center hover:bg-laravel-dark transition-all duration-300">
                {{ __('choice.add_education') }}
            </a>
        </x-card>

        <x-card class="p-6 max-w-lg mx-auto shadow-lg rounded-lg">
            <a href="/create/courses" class="block bg-laravel text-white py-3 px-6 rounded-md text-center hover:bg-laravel-dark transition-all duration-300">
                {{ __('choice.add_course') }}
            </a>
        </x-card>

        <x-card class="p-6 max-w-lg mx-auto shadow-lg rounded-lg">
            <a href="/create/internships" class="block bg-laravel text-white py-3 px-6 rounded-md text-center hover:bg-laravel-dark transition-all duration-300">
                {{ __('choice.add_internship') }}
            </a>
        </x-card>

        <x-card class="p-6 max-w-lg mx-auto shadow-lg rounded-lg">
            <a href="/create/programming" class="block bg-laravel text-white py-3 px-6 rounded-md text-center hover:bg-laravel-dark transition-all duration-300">
                {{ __('choice.add_programming') }}
            </a>
        </x-card>

        <x-card class="p-6 max-w-lg mx-auto shadow-lg rounded-lg">
            <a href="/create/softSkills" class="block bg-laravel text-white py-3 px-6 rounded-md text-center hover:bg-laravel-dark transition-all duration-300">
                {{ __('choice.add_soft_skill') }}
            </a>
        </x-card>
    </div>
</x-layout>

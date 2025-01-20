<x-layout>

    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> {{ __('show_entry.back') }}
    </a>
    <div class="mx-4">
        <x-card class="p-10">
            <div class="flex flex-col items-center justify-center text-center">
                <div class="flex flex-col items-center justify-center text-center">
                    <h3 class="text-2xl mb-2">{{ $project->projectName }}</h3>
                    <div class="text-xl font-bold mb-4">{{ $project->projectDescription }}</div>
                    <div class="text-xl font-bold mb-4">{{ $project->projectLink }}</div>
                    {{-- Project image --}}
                    <div class="text-xl font-bold mb-4">
                        {{ $project->projectStartDate }}</div>
                        {{ $project->projectEndDate }}
                        {{ $project->projectRole }}
                        {{ $project->projectType }}
                        {{ $project->projectTechnologies }}
                        {{ $project->projectTeamSize }}
                        {{ $project->projectClient }}
                        {{ $project->projectStatus }}
                    </div>
    
                    <div class="text-lg my-4">
                        <i class="fa-solid fa-location-dot"></i> {{ $project->projectLocation }}
                    </div>
                </div>
            </div>
        </x-card>

        <x-card class="mt-4 p-2 flex space-x-6">
            <a href="{{ route('editProject', $project->id) }}">
                <i class="fa-solid fa-pencil"></i>{{ __('show_entry.edit') }}
            </a>

            <form method="POST" action="{{ route('destroyProject', $project->id) }}">
                @csrf
                @method('DELETE')
                <button class="text-red-500"><i class="fa-solid fa-trash"></i>
                    {{ __('show_entry.delete') }}</button>
            </form>
        </x-card>
    </div>
</x-layout>

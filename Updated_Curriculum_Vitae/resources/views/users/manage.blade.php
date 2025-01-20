<x-layout>
    <x-card>
        <div class="mb-4">
            <a href="{{ route('aboutUser', $userId) }}" class="bg-laravel hover:bg-laravel_hover px-2 py-1 ml-2">GA NAAR JE EIGEN PAGINA</a>
            <a href="{{ route('editUser', $userId) }}" class="bg-green-300 hover:bg-green-400 px-2 py-1">GEBRUIKER AANPASSEN</a>
            <a href="{{ route('manageProfileAccess', $userId) }}" class="bg-laravel hover:bg-laravel_hover px-2 py-1 ml-2"> MANAGE PROFILE ACCESS</a>
        </div>
        <table class="min-w-full bg-white border border-gray-200 rounded-md mb-4">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-3 text-left border-b">{{ __('manage.type') }}</th>
                    <th class="p-3 text-left border-b">{{ __('manage.name') }}</th>
                    <th class="p-3 text-left border-b">{{ __('manage.institution') }}</th>
                    <th class="p-3 text-left border-b">{{ __('manage.year') }}</th>
                    <th></th>
                </tr>
            </thead>
        
            <tbody>
                @if ($educations->isNotEmpty())
                    @foreach ($educations as $education)
                        <tr class="hover:bg-gray-100">
                            <td class="p-3 border-b">
                                {{ __('manage.education') }}
                            </td>
                            <td class="p-3 border-b">
                                {{ $education->educationName }}
                            </td>
                            <td class="p-3 border-b">
                                {{ $education->schoolName }}
                            </td>
                            <td class="p-3 border-b">
                                {{ $education->yearsFollowed }}
                            </td>
                            <td class="flex p-3 border-b gap-1">
                                <a href="{{ route('editEducation', $education->id) }}" class="bg-green-300 hover:bg-green-400 px-2 py-1">{{ __('manage.edit') }}</a>
                                <form method="POST" action="{{ route('destroyEducation', $education->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-300 hover:bg-red-400 px-2 py-1">
                                        {{ __('manage.delete') }}
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4" class="p-3 text-center text-gray-500">{{ __('manage.education_not_found') }}</td>
                    </tr>
                @endif

                @if ($experiences->isNotEmpty())
                @foreach ($experiences as $experience)
                    <tr class="hover:bg-gray-100">
                        <td class="p-3 border-b">
                            {{ __('manage.experience') }}
                        </td>
                        <td class="p-3 border-b">
                            {{ $experience->jobTitle }}
                        </td>
                        <td class="p-3 border-b">
                            {{ $experience->companyName }}
                        </td>
                        <td class="p-3 border-b">
                            {{ $experience->yearsWorked }}
                        </td>
                        <td class="flex p-3 border-b gap-1">
                            <a href="{{ route('editExperience', $experience->id) }}" class="bg-green-300 hover:bg-green-400 px-2 py-1">{{ __('manage.edit') }}</a>
                            <form method="POST" action="{{ route('destroyExperience', $experience->id) }}">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-300 hover:bg-red-400 px-2 py-1">
                                    {{ __('manage.delete') }}
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                @else
                    <tr>
                        <td colspan="4" class="p-3 text-center text-gray-500">{{ __('manage.experiences_not_found') }}</td>
                    </tr>
                @endif

                @if ($courses->isNotEmpty())
                @foreach ($courses as $course)
                    <tr class="hover:bg-gray-100">
                        <td class="p-3 border-b">
                            {{ __('manage.course') }}
                        </td>
                        <td class="p-3 border-b">
                            {{ $course->courseName }}
                        </td>
                        <td class="p-3 border-b">
                            {{ $course->educatorName }}
                        </td>
                        <td class="p-3 border-b">
                            {{ $course->validityEarned }} tot {{ $course->validUntil }}
                        </td>
                        <td class="flex p-3 border-b gap-1">
                            <a href="{{ route('editCourse', $course->id) }}" class="bg-green-300 hover:bg-green-400 px-2 py-1">{{ __('manage.edit') }}</a>
                            <form method="POST" action="{{ route('destroyCourse', $course->id) }}">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-300 hover:bg-red-400 px-2 py-1">
                                    {{ __('manage.delete') }}
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                @else
                    <tr>
                        <td colspan="4" class="p-3 text-center text-gray-500">{{ __('manage.courses_not_found') }}</td>
                    </tr>
                @endif

                @if ($internships->isNotEmpty())
                @foreach ($internships as $internship)
                    <tr class="hover:bg-gray-100">
                        <td class="p-3 border-b">
                            {{ __('manage.internship') }}
                        </td>
                        <td class="p-3 border-b">
                            {{ $internship->functionName }}
                        </td>
                        <td class="p-3 border-b">
                            {{ $internship->companyName }}
                        </td>
                        <td class="p-3 border-b">
                            {{ $internship->internshipStartedAt }} tot {{ $internship->internshipEndedAt }}
                        </td>
                        <td class="flex p-3 border-b gap-1">
                            <a href="{{ route('editInternship', $internship->id) }}" class="bg-green-300 hover:bg-green-400 px-2 py-1">{{ __('manage.edit') }}</a>
                            <form method="POST" action="{{  route('destroyInternship', $internship->id) }}">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-300 hover:bg-red-400 px-2 py-1">
                                    {{ __('manage.delete') }}
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                @else
                    <tr>
                        <td colspan="4" class="p-3 text-center text-gray-500">{{ __('manage.internships_not_found') }}</td>
                    </tr>
                @endif

                @if ($projects->isNotEmpty())
                @foreach ($projects as $project)
                    <tr class="hover:bg-gray-100">
                        <td class="p-3 border-b">
                            {{ __('manage.project') }}
                        </td>
                        <td class="p-3 border-b">
                            {{ $project->projectName }}
                        </td>
                        <td class="p-3 border-b">
                            {{ $project->projectRole }}
                        </td>
                        <td class="p-3 border-b">
                            {{ $project->projectStartDate }} tot {{ $project->projectEndDate }}
                        </td>
                        <td class="flex p-3 border-b gap-1">
                            <a href="{{ route('editProject', $project->id) }}" class="bg-green-300 hover:bg-green-400 px-2 py-1">{{ __('manage.edit') }}</a>
                            <form method="POST" action="{{  route('destroyProject', $project->id) }}">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-300 hover:bg-red-400 px-2 py-1">
                                    {{ __('manage.delete') }}
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                @else
                    <tr>
                        <td colspan="4" class="p-3 text-center text-gray-500">{{ __('manage.internships_not_found') }}</td>
                    </tr>
                @endif
            </tbody>
        </table>
        
        <table class="min-w-full bg-white border border-gray-200 rounded-md">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-3 text-left border-b">{{ __('manage.type') }}</th>
                    <th class="p-3 text-left border-b">{{ __('manage.name') }}</th>
                    <th class="p-3 text-left border-b">{{ __('manage.level') }}</th>
                    <th class="p-3 text-left border-b">{{ __('manage.year') }}</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @if ($programming->isNotEmpty())
                @foreach ($programming as $programming)
                    <tr class="hover:bg-gray-100">
                        <td class="p-3 border-b">
                            {{ __('manage.programming') }}
                        </td>
                        <td class="p-3 border-b">
                            {{ $programming->languageName }}
                        </td>
                        <td class="p-3 border-b">
                            {{ $programming->experienceLevel }}
                        </td>
                        <td class="p-3 border-b">
                            {{ $programming->startedWith }} tot {{ $programming->workedWithUntil }}
                        </td>
                        <td class="flex p-3 border-b gap-1">
                            <a href="{{ route('editProgramming', $programming->id) }}" class="bg-green-300 hover:bg-green-400 px-2 py-1">{{ __('manage.edit') }}</a>
                            <form method="POST" action="{{ route('destroyProgramming', $programming->id) }}">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-300 hover:bg-red-400 px-2 py-1">
                                    {{ __('manage.delete') }}
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                @else
                    <tr>
                        <td colspan="4" class="p-3 text-center text-gray-500">{{ __('manage.programming_not_found') }}</td>
                    </tr>
                @endif

                @if ($softSkills->isNotEmpty())
                @foreach ($softSkills as $softSkill)
                    <tr class="hover:bg-gray-100">
                        <td class="p-3 border-b">
                            {{ __('manage.soft_skill') }}
                        </td>
                        <td class="p-3 border-b">
                            {{ $softSkill->skillName }}
                        </td>
                        <td class="p-3 border-b">
                            {{ $softSkill->experienceLevel }}
                        </td>
                        <td class="p-3 border-b">
                            {{ $softSkill->startedWith }} tot {{ $softSkill->workedWithUntil }}
                        </td>
                        <td class="flex p-3 border-b gap-1">
                            <a href="{{ route('editSoftSkill', $softSkill->id) }}" class="bg-green-300 hover:bg-green-400 px-2 py-1">{{ __('manage.edit') }}</a>
                            <form method="POST" action="{{ route('destroySoftSkill', $softSkill->id) }}">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-300 hover:bg-red-400 px-2 py-1">
                                    {{ __('manage.delete') }}
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="4" class="p-3 text-center text-gray-500">{{ __('manage.soft_skill_not_found') }}</td>
                </tr>
                @endif
            </tbody>
        </table>    
    </x-card>
</x-layout>
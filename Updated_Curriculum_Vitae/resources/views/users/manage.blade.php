<x-layout>
    <x-card>
        <table class="min-w-full bg-white border border-gray-200 rounded-md">
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
                                <a href="/education/{{ $education->id }}/edit" class="bg-green-300 hover:bg-green-400 px-2 py-1">{{ __('manage.edit') }}</a>
                                <form method="POST" action="/education/{{ $education->id }}/delete">
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
                            <a href="/experience/{{ $experience->id }}/edit" class="bg-green-300 hover:bg-green-400 px-2 py-1">{{ __('manage.edit') }}</a>
                            <form method="POST" action="/experience/{{ $experience->id }}/delete">
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
                            <a href="/courses/{{ $course->id }}/edit" class="bg-green-300 hover:bg-green-400 px-2 py-1">{{ __('manage.edit') }}</a>
                            <form method="POST" action="/courses/{{ $course->id }}/delete">
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
                            <a href="/internships/{{ $internship->id }}/edit" class="bg-green-300 hover:bg-green-400 px-2 py-1">{{ __('manage.edit') }}</a>
                            <form method="POST" action="/internships/{{ $internship->id }}/delete">
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
                            <a href="/education/{{ $programming->id }}/edit" class="bg-green-300 hover:bg-green-400 px-2 py-1">{{ __('manage.edit') }}</a>
                            <form method="POST" action="/education/{{ $education->id }}/delete">
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
                            <a href="/softskills/{{ $softSkill->id }}/edit" class="bg-green-300 hover:bg-green-400 px-2 py-1">{{ __('manage.edit') }}</a>
                            <form method="POST" action="/softskills/{{ $softSkill->id }}/delete">
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
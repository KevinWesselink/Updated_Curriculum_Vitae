<x-layout>
    <x-card>
        <div class="container mx-auto my-5">
            <h1 class="text-2xl font-bold mb-5">{{ __('manage_profile_access.requests_and_invites') }}</h1>
        
            <div class="overflow-x-auto">
                <table class="table-auto w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border border-gray-300 px-4 py-2">{{ __('manage_profile_access.user') }}</th>
                            <th class="border border-gray-300 px-4 py-2">{{ __('manage_profile_access.request_date') }}</th>
                            <th class="border border-gray-300 px-4 py-2">{{ __('manage_profile_access.status') }}</th>
                            <th class="border border-gray-300 px-4 py-2">{{ __('manage_profile_access.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($profileAccessRequests as $request)
                            <tr>
                                <td class="border border-gray-300 px-4 py-2 text-center">{{ $request->requester->userName }}</td>
                                <td class="border border-gray-300 px-4 py-2 text-center">{{ $request->created_at->format('d-m-Y H:i') }}</td>
                                <td class="border border-gray-300 px-4 py-2 text-center  
                                    @if ($request->status === 'pending') bg-blue-100 text-blue-700
                                    @elseif ($request->status === 'approved') bg-green-100 text-green-700
                                    @elseif ($request->status === 'rejected') bg-red-100 text-red-700
                                    @endif
                                ">
                                    {{ __('manage_profile_access.' . $request->status) }}
                                </td>
                                <td class="border border-gray-300 px-4 py-2 text-center">
                                    <form action="{{ route('profile.access.approve', $request->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        @if ($request->status === 'pending')
                                            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                                                {{ __('manage_profile_access.approve') }}
                                            </button>
                                        @elseif ($request->status === 'rejected')
                                            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                                                {{ __('manage_profile_access.grant_access') }}
                                            </button>
                                        @endif
                                    </form>
                                    <form action="{{ route('profile.access.reject', $request->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        @if ($request->status === 'pending')
                                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                                                {{ __('manage_profile_access.reject') }}
                                            </button>
                                        @elseif ($request->status === 'approved')
                                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                                                {{ __('manage_profile_access.revoke_access') }}
                                            </button>
                                        @endif
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center border border-gray-300 px-4 py-2">{{ __('manage_profile_access.no_requests_found') }}</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </x-card>
</x-layout>
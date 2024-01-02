<x-layout>
    <h1 class="mb-4 text-3xl font-bold text-slate-600">Edit profile: <span class="text-sky-700">{{ $profile->name }}</span></h1>
    <x-profile-form action="{{ route('profiles.update', ['profile' => $profile ]) }}" :profile="$profile" />
</x-layout>

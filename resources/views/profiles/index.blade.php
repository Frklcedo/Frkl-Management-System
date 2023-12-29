<x-layout>
    <div class="grid grid-cols-profiles auto-rows-fr gap-4">
        @foreach( $profiles as $profile )
        <a href="{{ route( 'profiles.show', [ 'profile' => $profile ] ) }}" class="p-8 bg-white shadow rounded-2xl min-h-48">
            <h2 class="font-bold text-2xl text-slate-600 mb-2">{{ $profile->name }}</h2>
            <div>
                {{ $profile->description }}
            </div>
        </a>
        @endforeach
        <div class="p-8 border-8 border-dashed border-slate-600 rounded-2xl min-h-48 grid place-items-center overflow-hidden">
            <a href="{{ route('profiles.create') }}" class="flex flex-col items-center gap-2 transition-transform hover:-translate-y-2 duration-300">
                <div class="h-28 w-28 bg-white rounded-full shadow-sm grid place-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-2/3 h-2/3">
                        <path stroke-linecap="" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </div>
                <p class="text-slate-600 text-2xl font-medium">Add profile</p>
            </a>
        </div>
    </div>
</x-layout>

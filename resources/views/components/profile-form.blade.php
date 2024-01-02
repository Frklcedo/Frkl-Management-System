<div>
    <form class="grid gap-4" method="POST" {{ $attributes }}>
        @csrf
        @isset($profile)
        @method('PUT')
        @endisset
        <div class="grid gap-2">
            <label for="name" class="text-slate-600 font-medium text-sm">Name</label>
            <x-text-input type="text" name="name" id="name" placeholder="Profile name" value="{{ $profile->name ?? old('name') }}" />
            @error('name')
            <p class="text-red-500">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="grid gap-2">
            <label for="description" class="text-slate-600 font-medium text-sm">Description</label>
            <textarea class="border-0 ring-slate-600 ring-2 focus:ring-2 focus:ring-sky-700 transition-colors rounded-lg" id="description" name="description" cols="30" rows="10" placeholder="Description">{{ $profile->description ?? old('description') }}</textarea>
            @error('textarea')
            <p class="text-red-500">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="grid">
            <x-button type="submit">
                @isset($profile)
                Edit
                @else
                Create
                @endisset
            </x-button>
        </div>
    </form>
</div>

<x-layout>
    <h1 class="mb-4 text-3xl font-bold text-slate-600">Create new profile</h1>
    <form class="grid gap-4" action="{{ route('profiles.store') }}" method="POST">
        @csrf
        <div class="grid gap-2">
            <label for="name" class="text-slate-600 font-medium text-sm">Name</label>
            <x-text-input type="text" name="name" id="name" placeholder="Profile name" />
        </div>
        <div class="grid gap-2">
            <label for="description" class="text-slate-600 font-medium text-sm">Description</label>
            <textarea class="border-0 ring-slate-600 ring-2 focus:ring-2 focus:ring-sky-700 transition-colors rounded-lg" id="description" name="description" cols="30" rows="10" placeholder="Description"></textarea>
        </div>
        <div class="grid">
            <x-button type="submit">
                Create
            </x-button>
        </div>
    </form>
</x-layout>

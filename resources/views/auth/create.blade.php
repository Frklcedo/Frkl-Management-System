<x-layout>
    <h1 class="mb-4 text-3xl font-bold text-slate-600">Login</h1>
    <form class="grid gap-4" action="{{ route('auth.store') }}" method="POST">
        @csrf
        <div class="grid gap-2">
            <label for="email" class="text-slate-600 font-medium text-sm">E-mail</label>
            <x-text-input type="email" name="email" id="email" placeholder="E-mail" />
        </div>
        <div class="grid gap-2">
            <label for="password" class="text-slate-600 font-medium text-sm">E-mail</label>
            <x-text-input type="password" name="password" id="password" placeholder="Password" />
        </div>
        <div class="grid">
            <x-button type="submit">
                Login
            </x-button>
        </div>
    </form>
</x-layout>

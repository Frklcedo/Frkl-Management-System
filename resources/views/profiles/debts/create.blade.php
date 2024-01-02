<x-layout>
    <h1 class="mb-4 text-3xl font-bold text-slate-600">Create new debt</h1>
    <form class="grid gap-4" action="{{ route('profiles.debts.store', ['profile' => $profile ]) }}">
        <div class="grid grid-cols-2 gap-4">
            <div class="grid gap-2">
                <label for="name" class="text-slate-600 text-sm">Debt name</label>
                <x-text-input class="min-w-0" type="text" name="name" value="{{ old('name') }}" />
            </div>
            <div class="grid gap-2">
                <label for="date" class="text-slate-600 text-sm">Debt date</label>
                <x-text-input class="min-w-0" type="date" name="date" value="{{ old('date') }}" />
            </div>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <div class="grid gap-2">
                <label for="installment_value" class="text-slate-600 text-sm">Installment value</label>
                <x-text-input class="min-w-0" type="number" name="installment_value" value="{{ old('installment_value') }}" />
            </div>
            <div class="grid gap-2">
                <label for="installment_quantity" class="text-slate-600 text-sm">Installment quantity</label>
                <x-text-input class="min-w-0" type="number" name="installment_quantity" value="{{ old('installment_quantity') }}" />
            </div>
            <div class="grid gap-2">
                <label for="total" class="text-slate-600 text-sm">Total value</label>
                <x-text-input class="min-w-0" type="number" name="total" value="{{ old('total') }}" />
            </div>
        </div>
        <div class="my-4 flex justify-end">
            <x-button type="submit">
                Create new debt
            </x-button>
        </div>
    </form>
</x-layout>

<x-layout>
    <h1 class="mb-4 text-3xl font-medium text-slate-600">Profile: <span class="font-bold text-sky-700">{{ $profile->name }}</span></h1>

    <div class="text-sm text-slate-600 mb-8">
        {{ $profile->description }}
    </div>

    <div class="grid gap-12">
        <div class="flex items-center justify-between">
            <p>
                Add new debt
            </p>
            <a href="{{ route('profiles.debts.create', ['profile' => $profile]) }}">
                <x-button>New debt</x-button>
            </a>
        </div>
        <table class="table">
            <caption class="hidden">Table of debts</caption>
            <thead class="text-sm bg-white">
                <tr>
                    <th>Date</th>
                    <th>Debt</th>
                    <th>Value</th>
                    <th>Current installment</th>
                    <th>Total installments</th>
                    <th>Total Value</th>
                    <th>Status</th>
                    <th>Charges</th>
                    <th>Final Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <div class="flex items-center justify-between py-4">
            <a href="{{ route('profiles.edit', [ 'profile' => $profile ]) }}">
                <x-button class="bg-green-600 ring-green-600 hover:text-green-600" type="submit">Edit profile</x-button>
            </a>
            <form action="{{ route('profiles.destroy', [ 'profile' => $profile ]) }}" method="post" class="flex items-center justify-center">
                @csrf
                @method('DELETE')
                <x-button class="bg-red-600 ring-red-600 hover:text-red-600" type="submit">Delete profile</x-button>
            </form>
        </div>
    </div>

</x-layout>

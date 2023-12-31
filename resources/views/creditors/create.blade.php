<x-layout>
    <h1 class="mb-4 text-3xl font-bold text-slate-600">Create new creditor</h1>
    <form class="grid gap-4" action="{{ route('creditors.store') }}" method="POST">
        @csrf
        <div class="grid gap-2">
            <label for="name" class="text-slate-600 font-medium text-sm">Name</label>
            <x-text-input type="text" name="name" id="name" placeholder="Profile name" />
            @error('name')
            <p class="text-red-500">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="grid gap-2">
            <label for="observations" class="text-slate-600 font-medium text-sm">Observations</label>
            <x-textarea placeholder="Observations" name="observations">
            </x-textarea>
            @error('observations')
            <p class="text-red-500">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="grid gap-2">
            <label for="payment_methods" class="text-slate-600 font-medium text-sm">Payment Methods</label>
            <div class="grid gap-2" x-data="{ payment_methods: [] }">
                <template x-for="payment_method, index in payment_methods" :key="index">
                    <div class="flex gap-2">
                        <div class="grid gap-1 grow">
                            <x-text-input type="text" ::name="'payment_method[' + index + '][method]'" placeholder="Method" x-model="payment_method.method" :noid="true" />
                        </div>
                        <div class="grid gap-1 grow">
                            <x-text-input type="text" ::name="'payment_method[' + index + '][content]'" placeholder="Content" x-model="payment_method.content" :noid="true" />
                        </div>
                        <x-button class="px-3" type="button" @click="payment_methods = payment_methods.filter((method, i) => i !== index)">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </x-button>
                    </div>
                </template>
                <x-button type="button" class="flex items-center gap-1 justify-center" @click="payment_methods.push({ method: 'method', content: 'content'})">
                    Add new payment method
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </x-button>
            </div>
        </div>
        <div class="grid">
            <x-button type="submit">
                Create
            </x-button>
        </div>
    </form>
</x-layout>

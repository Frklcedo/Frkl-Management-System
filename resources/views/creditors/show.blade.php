<x-layout>
    <div>
        <h1 class="mb-2 text-3xl font-medium text-slate-600">Profile: <span class="font-bold text-sky-700">{{ $creditor->name }}</span></h1>
        <div class="text-slate-600 text-sm mb-4">
            {{ nl2br( $creditor->observations ) }}
        </div>
        <h2 class="mb-4 font-bold text-xl text-slate-600">Payment methods</h2>
        <div class="text-slate-600">
            <ul>
                @foreach($creditor->paymentMethods as $paymentMethod)
                <li>
                    <span class="font-bold">{{ $paymentMethod->method  }}:</span> <span class="text-sky-700 font-medium">{{ $paymentMethod->content  }}</span>
                </li>
                @endforeach
            </ul>

        </div>

    </div>
</x-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rented cars list') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('printAll') }}">Print</a>

                    @foreach ($invoices as $invoice)
                        <div class="flex items-center justify-between">
                            <div class="flex-1 min-w-0">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">
                                    {{ __('Invoice') }}
                                </h3>
                                <p class="mt-1 text-sm leading-5 text-gray-500">
                                    {{ __('Invoice number: ') }} {{ $invoice->id }}
                                </p>
                                @if ($invoice->invoiceLines != null)
                                    @foreach ($invoice->invoiceLines as $line)
                                        <p class="mt-1 text-sm leading-5 text-gray-500">
                                            {{ __('Car brand: ') }} {{ $line->car->brand }}
                                        </p>
                                        <p class="mt-1 text-sm leading-5 text-gray-500">
                                            {{ __('Car model: ') }} {{ $line->car->model }}
                                        </p>
                                        <p class="mt-1 text-sm leading-5 text-gray-500">
                                            {{ __('Car license plate: ') }} {{ $line->car->license_plate }}
                                        </p>
                                        <p class="mt-1 text-sm leading-5 text-gray-500">
                                            {{ __('start date: ') }} {{ $line->start_date }}
                                        </p>
                                        <p class="mt-1 text-sm leading-5 text-gray-500">
                                            {{ __('end date: ') }} {{ $line->end_date }}
                                        </p>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
</x-app-layout>

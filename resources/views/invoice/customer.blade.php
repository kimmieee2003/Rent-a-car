<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Invoice for ') }} {{ $car->brand }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('print', ['carId' => $car->id, 'InvoiceId' => $invoice->id, 'InvoiceLineId' => $invoiceLine->id]) }}">Print</a>

                    <div class="flex items-center justify-between">
                        <div class="flex-1 min-w-0">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                {{ __('Invoice') }}
                            </h3>
                            <p class="mt-1 text-sm leading-5 text-gray-500">
                                {{ __('Invoice number: ') }} {{ $invoice->id }}
                            </p>
                            <p class="mt-1 text-sm leading-5 text-gray-500">
                                {{ __('Car brand: ') }} {{ $car->brand }}
                            </p>
                            <p class="mt-1 text-sm leading-5 text-gray-500">
                                {{ __('Car model: ') }} {{ $car->model }}
                            </p>
                            <p class="mt-1 text-sm leading-5 text-gray-500">
                                {{ __('Car license plate: ') }} {{ $car->license_plate }}
                            </p>
                            <p class="mt-1 text-sm leading-5 text-gray-500">
                                {{ __('start date: ') }} {{ $invoiceLine->start_date }}
                            </p>
                            <p class="mt-1 text-sm leading-5 text-gray-500">
                                {{ __('end date: ') }} {{ $invoiceLine->end_date }}
                            </p>
                        </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>
                        Informatie: Rent-a-car:
                    </p>
                    <p>
                        Locatie: Aalsmeer
                    </p>
                    <p>
                        Telefoon: 06-12345678
                    </p>
                    <div class="flex flex-row">
                        <img src="{{ asset('img/auto1.jpg') }}" alt="car" width="20%" height="20%" >
                        <img src="{{ asset('img/auto2.jpg') }}" alt="car" width="20%" height="20%">
                        <img src="{{ asset('img/auto3.jpg') }}" alt="car" width="20%" height="20%">
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

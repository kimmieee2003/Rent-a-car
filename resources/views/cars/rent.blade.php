<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rent this ') }} {{ $car->brand }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('rentRequest') }}" method="POST" class="flex flex-col">
                        @csrf

                        <input type="hidden" name="car_id" value="{{ $car->id }}">
                        <input type="hidden" name="employee_id" value="1">
                        <input type="hidden" name="customer_id" value="{{ Auth::user()->id }}">

                        <label for="start_date">start date</label>
                        <input type="date" id="start_date" name="start_date">

                        <label for="end_date">end date</label>
                        <input type="date" id="end_date" name="end_date">
                        <div class="md:w-1/2 px-3">
                            <input type="submit" name="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

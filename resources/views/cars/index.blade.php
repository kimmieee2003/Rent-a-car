<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cars') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('cars.create') }}">Create new car</a>
                    <table>
                        <thead>
                            <tr class="border border-gray-300">
                                <th style="width: 150px">License plate</th>
                                <th style="width: 150px">Brand</th>
                                <th style="width: 150px">Model</th>
                                <th style="width: 150px">Price per day</th>
                                <th style="width: 150px" colspan="3">Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($cars as $car)
                                <tr class="border border-gray-300">
                                    <td class="text-center" style="width: 150px">{{ $car->license_plate }}</td>
                                    <td class="text-center" style="width: 150px">{{ $car->brand }}</td>
                                    <td class="text-center" style="width: 150px">{{ $car->model }}</td>
                                    <td class="text-center" style="width: 150px">€{{ $car->day_price }}</td>
                                    <td>
                                        <a href="{{ route('cars.edit', $car->id) }}">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('cars.show', $car->id) }}">Show</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('cars.destroy', $car->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

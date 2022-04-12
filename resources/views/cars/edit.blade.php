<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update car') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('cars.update', $car->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="-mx-3 md:flex mb-6">
                            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="license_plate">
                                    {{ __('license_plate') }}
                                </label>
                                <input placeholder="{{ $car->license_plate }}" value="{{ $car->license_plate }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="license_plate" type="text" name="license_plate">
                                @error('license_plate')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="brand">
                                    {{ __('Brand') }}
                                </label>
                                <input placeholder="{{ $car->brand }}" value="{{ $car->brand }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="brand" type="text" name="brand">
                                @error('brand')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="model">
                                    {{ __('Model') }}
                                </label>
                                <input placeholder="{{ $car->model }}" value="{{ $car->model }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="model" type="text" name="model">
                                @error('model')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="price">
                                    {{ __('Price €') }}
                                </label>
                                <input placeholder="{{ $car->day_price }}" value="{{ $car->day_price }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="price" type="number" step="0.01" name="price">
                                @error('price')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="md:w-1/2 px-3">
                                <input type="submit" name="submit">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

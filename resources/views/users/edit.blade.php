<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Account') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('users.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="-mx-3 md:flex mb-6">
                            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                                    {{ __('Name') }}
                                </label>
                                <input placeholder="{{ $user->name }}" value="{{ $user->name }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="name" type="text" name="name">
                                @error('name')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                                    {{ __('Email') }}
                                </label>
                                <input placeholder="{{ $user->email }}" value="{{ $user->email }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="email" name="email">
                                @error('email')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                                    {{ __('Password') }}
                                </label>
                                <input placeholder="{{ $user->password }}" value="{{ $user->password }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="password" type="password" name="password">
                                @error('password')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="first_letters">
                                    {{ __('First letter') }}
                                </label>
                                <input placeholder="{{ $user->first_letters }}" value="{{ $user->first_letters }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="first_letters" type="text" name="first_letters">
                                @error('first_letters')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="prefixes">
                                    {{ __('Prefixes') }}
                                </label>
                                <input placeholder="{{ $user->prefixes }}" value="{{ $user->prefixes }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="prefixes" type="text" step="0.01" name="prefixes">
                                @error('prefixes')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="prefixes">
                                    {{ __('Last Name') }}
                                </label>
                                <input placeholder="{{ $user->last_name }}" value="{{ $user->last_name }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="last_name" type="text" step="0.01" name="last_name">
                                @error('last_name')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="prefixes">
                                    {{ __('Address') }}
                                </label>
                                <input placeholder="{{ $user->address }}" value="{{ $user->address }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="address" type="text" step="0.01" name="address">
                                @error('address')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="prefixes">
                                    {{ __('Zip code') }}
                                </label>
                                <input placeholder="{{ $user->zip_code }}" value="{{ $user->zip_code }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="zip_code" type="text" step="0.01" name="zip_code">
                                @error('zip_code')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="prefixes">
                                    {{ __('City') }}
                                </label>
                                <input placeholder="{{ $user->city }}" value="{{ $user->city }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="city" type="text" step="0.01" name="city">
                                @error('city')
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

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table style="width: 100%">
                        <thead>
                        <tr class="border border-gray-300">
                            <th style="width: 350px">Name</th>
                            <th style="width: 350px">First letter</th>
                            <th style="width: 350px">Email</th>
                            <th style="width: 350px">Prefixes</th>
                            <th style="width: 350px">Last name</th>
                            <th style="width: 350px">Address</th>
                            <th style="width: 350px">Zip code</th>
                            <th style="width: 350px">City</th>
                            <th style="width: 350px" colspan="3">Actions</th>
                        </tr>
                        </thead>

{{--                        <tbody>--}}
{{--                        --}}
{{--                        @foreach ($users as $user)--}}
{{--                            <tr class="border border-gray-300" >--}}
{{--                                <td class="text-center" style="width: 350px">{{ $user->name }}</td>--}}
{{--                                <td class="text-center" style="width: 350px">{{ $user->first_letters }}</td>--}}
{{--                                <td class="text-center" style="width: 350px">{{ $user->email }}</td>--}}
{{--                                <td class="text-center" style="width: 350px">{{ $user->prefixes }}</td>--}}
{{--                                <td class="text-center" style="width: 350px">{{ $user->Last_name }}</td>--}}
{{--                                <td class="text-center" style="width: 350px">{{ $user->address }}</td>--}}
{{--                                <td class="text-center" style="width: 350px">{{ $user->zip_code }}</td>--}}
{{--                                <td class="text-center" style="width: 350px">{{ $user->city }}</td>--}}
{{--                                <td>--}}
{{--                                    <a href="{{ route('users.edit', $user->id) }}">Edit</a>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <a href="{{ route('users.show', $user->id) }}">Show</a>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">--}}
{{--                                        @csrf--}}
{{--                                        @method('DELETE')--}}
{{--                                        <button type="submit">Delete</button>--}}
{{--                                    </form>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                        @endforeach--}}
{{--                        </tbody>--}}


{{--                        //if the user is logged in show the user's data--}}
                        @if(Auth::check())
                            <tbody>
                            <tr class="border border-gray-300" >
                                <td class="text-center" style="width: 350px">{{ Auth::user()->name }}</td>
                                <td class="text-center" style="width: 350px">{{ Auth::user()->first_letters }}</td>
                                <td class="text-center" style="width: 350px">{{ Auth::user()->email }}</td>
                                <td class="text-center" style="width: 350px">{{ Auth::user()->prefixes }}</td>
                                <td class="text-center" style="width: 350px">{{ Auth::user()->last_name }}</td>
                                <td class="text-center" style="width: 350px">{{ Auth::user()->address }}</td>
                                <td class="text-center" style="width: 350px">{{ Auth::user()->zip_code }}</td>
                                <td class="text-center" style="width: 350px">{{ Auth::user()->city }}</td>
                                <td class="text-center" style="width: 150px">
                                    <a href="{{ route('users.edit', Auth::user()->id) }}">Edit</a>
                                </td>
{{--                                <td>--}}
{{--                                    <a href="{{ route('users.show', Auth::user()->id) }}">Show</a>--}}
{{--                                </td>--}}
                                <td class="text-center" style="width: 150px">
                                    <form action="{{ route('users.destroy', Auth::user()->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            </tbody>
                            @endif

                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

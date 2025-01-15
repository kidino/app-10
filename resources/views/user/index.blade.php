<x-app-layout>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                <!-- resources/views/alert.blade.php -->
                @if (session('success'))
                    <div class="p-4 mb-4 text-green-800 bg-green-200 rounded" role="alert">
                        {{ session('success') }}
                    </div>
                @endif                

<a href="{{ route('user.create') }}"
class="mb-5 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
>Add New User</a>


<form action="{{ route('user.index') }}" method="GET" class="flex mb-3">

    <x-text-input
        name="s" 
        :value="$request->s"
    />

    <x-primary-button type="submit">Search</x-primary-button>

</form>

<table class="w-full border-collapse border border-gray-300 shadow-lg mb-3">
    <thead class="bg-gray-200">
        <tr>
            <th class="px-4 py-2 border border-gray-300 text-left text-sm font-medium text-gray-600">ID</th>
            <th class="px-4 py-2 border border-gray-300 text-left text-sm font-medium text-gray-600">NAME</th>
            <th class="px-4 py-2 border border-gray-300 text-left text-sm font-medium text-gray-600">EMAIL</th>
            <th class="px-4 py-2 border border-gray-300 text-left text-sm font-medium text-gray-600">ACTION</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $u)
        <tr class="odd:bg-white even:bg-gray-100 hover:bg-gray-50">
            <td class="px-4 py-2 border border-gray-300 text-sm text-gray-800">{{ $u->id }}</td>
            <td class="px-4 py-2 border border-gray-300 text-sm text-gray-800">{{ $u->name }}</td>
            <td class="px-4 py-2 border border-gray-300 text-sm text-gray-800">{{ $u->email }}</td>
            <td class="px-4 py-2 border border-gray-300 text-sm text-blue-500">
                <a href="{{ route('user.edit', $u->id) }}" class="hover:underline">EDIT</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $users->appends(['s' => $request->s])->links() }}

                </div>
            </div>
        </div>
    </div>



</x-app-layout>

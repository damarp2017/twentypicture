<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
            <div class="bg-green-500 text-white overflow-hidden shadow-sm rounded-lg p-4 mb-5">
                {{ session('success') }}
            </div>
            @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h4 class="text-xl mb-2">All Messages</h4>
                    <table class="table-fixed border-collapse border border-green-800">
                        <thead>
                            <tr>
                                <th class="w-1/12 border border-green-600 p-2">ID</th>
                                <th class="w-1/12 border border-green-600 p-2">Name</th>
                                <th class="w-1/12 border border-green-600 p-2">Phone</th>
                                <th class="w-7/12 border border-green-600 p-2">Message</th>
                                <th class="w-1/12 border border-green-600 p-2">Date</th>
                                <th class="w-1/12 border border-green-600 p-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($messages as $message)
                            <tr>
                                <td class="border border-green-600 p-2 text-center">{{ $message->id }}</td>
                                <td class="border border-green-600 p-2">{{ $message->name }}</td>
                                <td class="border border-green-600 p-2">{{ $message->phone }}</td>
                                <td class="border border-green-600 p-2">{{ $message->message }}</td>
                                <td class="border border-green-600 p-2">{{ $message->created_at->diffForHumans() }}</td>
                                <td class="border border-green-600 p-2">
                                    <x-button-red onclick="location.href='{{ route('message.destroy', $message) }}'">
                                        <small>Remove</small></x-button-red>
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
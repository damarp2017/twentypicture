<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('New Category') }}
                </h2>
            </div>
        </div>
    </x-slot>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ($errors->any())
            <div class="text-white bg-red-500 overflow-hidden shadow-sm sm:rounded-lg p-4 mb-4 w-full">
                @foreach ($errors->all() as $error)
                <div>{{$error}}</div>
                @endforeach
            </div>
            @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('category.store') }}" method="post">
                        @csrf
                        <div class="my-6">
                            <x-label for="title" :value="__('Title')" />
                            <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')"
                                required autofocus />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-3">
                                {{ __('Create') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
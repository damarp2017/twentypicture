<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Service') }}
                </h2>
            </div>
            <div>
                <x-button onclick="location.href='{{ route('service.create') }}'" style="margin-top: -1rem">Create
                </x-button>
            </div>
        </div>
    </x-slot>
    <div class="py-4">
        @if (session('success'))
        <div class="bg-green-500 text-white overflow-hidden shadow-sm rounded-lg p-4 md:mx-6 mx-4 mb-4">
            {{ session('success') }}
        </div>
        @endif
        <div class="flex flex-wrap px-4 lg:px-4">
            @if ($services->count() > 0)
            @foreach ($services as $service)
            <div class="my-2 md:px-2 w-full md:w-1/2 lg:my-4 lg:px-2 lg:w-1/3">
                <article class="overflow-hidden rounded-lg shadow-lg">
                    @if (App::environment('heroku'))
                    <img alt="Placeholder" class="block h-auto w-full" src="{{ $service->image }}">
                    @else
                    <img alt="Placeholder" class="block h-auto w-full" src="{{ url(Storage::url($service->image)) }}">
                    @endif
                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <h1 class="text-lg">
                            {{ $service->title }}
                        </h1>
                        <p class="text-grey-darker text-sm">
                            {{ $service->created_at->diffForHumans() }}
                        </p>
                    </header>
                    <footer class="flex items-center justify-end leading-none p-2 md:p-4">
                        <x-button-red onclick="location.href='{{ route('service.destroy', $service) }}'">
                            <small>Remove</small>
                        </x-button-red>
                    </footer>
                </article>
            </div>
            @endforeach
            @else
            <h2 class="text-red-500 px-2 lg:px-2">Data is empty yet. You may create it first.</h2>
            @endif
        </div>
    </div>
</x-app-layout>
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Portfolio') }}
                </h2>
            </div>
            <div>
                <x-button onclick="location.href='{{ route('portfolio.create') }}'" style="margin-top: -1rem">Create
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
        <h1 class="px-6 lg:px-6 text-2xl">All Portfolios <sup>({{ $portfolios->count() }} Photos)</sup></h1>
        <div class="flex flex-wrap px-4 lg:px-4">
            @if ($portfolios->count() > 0)
            @foreach ($portfolios as $portfolio)
            <div class="my-2 md:px-2 w-full md:w-1/2 lg:my-4 lg:px-2 lg:w-1/3">
                <article class="overflow-hidden rounded-lg shadow-lg">
                    @if (App::environment('heroku'))
                    <img alt="Placeholder" class="block h-auto w-full" src="{{ $portfolio->image }}">
                    @else
                    <img alt="Placeholder" class="block h-auto w-full" src="{{ url(Storage::url($portfolio->image)) }}">
                    @endif
                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <h1 class="text-lg">
                            {{ $portfolio->title }}
                        </h1>
                        <p class="text-grey-darker text-sm">
                            {{ $portfolio->created_at->diffForHumans() }}
                        </p>
                    </header>
                    <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                        {{-- <x-button-yellow><small>Edit</small></x-button-yellow> --}}
                        <p class="text-grey-darker text-xs">
                            Category: <span class="text-green-500">{{ $portfolio->category->title }}</span>
                        </p>
                        <x-button-red onclick="location.href='{{ route('portfolio.destroy', $portfolio) }}'">
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
        @foreach ($categories as $category)
        <hr class="mx-6 my-8 border-gray-400">
        <h1 class="px-6 lg:px-6 text-2xl">{{ $category->title }} <sup>({{ $category->portfolios->count() }}
                Photos)</sup>
        </h1>
        <div class="flex flex-wrap px-4 lg:px-4">
            @if ($category->portfolios->count())
            @foreach ($category->portfolios as $portfolio)
            <div class="my-2 md:px-2 w-full md:w-1/2 lg:my-4 lg:px-2 lg:w-1/3">
                <article class="overflow-hidden rounded-lg shadow-lg">
                    @if (App::environment('heroku'))
                    <img alt="Placeholder" class="block h-auto w-full" src="{{ $portfolio->image }}">
                    @else
                    <img alt="Placeholder" class="block h-auto w-full" src="{{ url(Storage::url($portfolio->image)) }}">
                    @endif
                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <h1 class="text-lg">
                            {{ $portfolio->title }}
                        </h1>
                        <p class="text-grey-darker text-sm">
                            {{ $portfolio->created_at->diffForHumans() }}
                        </p>
                    </header>
                    <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                        {{-- <x-button-yellow><small>Edit</small></x-button-yellow> --}}
                        <p class="text-grey-darker text-xs">
                            Category: <span class="text-green-500">{{ $portfolio->category->title }}</span>
                        </p>
                        <x-button-red onclick="location.href='{{ route('portfolio.destroy', $portfolio) }}'">
                            <small>Remove</small>
                        </x-button-red>
                    </footer>
                </article>
            </div>
            @endforeach
            @else
            <h2 class="text-red-500 px-2 lg:px-2">Data is empty on this category yet. You may create it first.</h2>
            @endif
        </div>
        @endforeach
    </div>
</x-app-layout>
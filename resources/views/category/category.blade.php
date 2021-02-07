<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Category') }}
                </h2>
            </div>
            <div>
                <x-button onclick="location.href='{{ route('category.create') }}'" style="margin-top: -1rem">Create
                </x-button>
            </div>
        </div>
    </x-slot>

    <div class="py-4">
        @if (session('success'))
        <div class="bg-green-500 text-white overflow-hidden shadow-sm rounded-lg p-4 md:mx-6 mx-4">
            {{ session('success') }}
        </div>
        @endif
        <div class="md:mx-6 mx-6 mt-2">
            <p class="text-blue-500 text-xs">*Note: You can't remove the category which have any of photos</p>
        </div>
        <div class="flex flex-wrap px-4 lg:px-4">
            @if ($categories->count() > 0)
            @foreach ($categories as $category)
            <div class="my-2 md:px-4 w-full md:w-1/2 lg:my-4 lg:px-2 lg:w-1/3">
                <article class="overflow-hidden bg-white rounded-lg shadow-lg">
                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <h1 class="text-2xl">
                            {{ $category->title }}
                        </h1>
                        <p class="text-grey-darker text-sm">
                            {{ $category->portfolios->count() }} Photos
                        </p>
                    </header>
                    <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                        <x-button-yellow onclick="location.href='{{ route('category.edit', $category) }}'">
                            <small>Edit</small>
                        </x-button-yellow>
                        @if ($category->portfolios->count() > 0)

                        @else
                        <x-button-red onclick="location.href='{{ route('category.destroy', $category) }}'">
                            <small>Remove</small>
                        </x-button-red>
                        @endif
                    </footer>
                </article>
            </div>
            @endforeach
            @else
            <h2 class="text-red-500 mx-2 my-2">Data is empty yet. You may create it first.</h2>
            @endif
        </div>
    </div>
</x-app-layout>
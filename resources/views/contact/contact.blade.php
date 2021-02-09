<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Contact') }}
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
            @if (session('success'))
            <div class="text-white bg-green-500 overflow-hidden shadow-sm sm:rounded-lg p-4 mb-4 w-full">
                {{ session('success') }}
            </div>
            @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('contact.update') }}" method="post">
                        @csrf
                        <div class="my-6">
                            <x-label for="whatsapp" :value="__('Whatsapp')" />
                            <small class="text-xs text-blue-500">*note: harus diawali dengan 62 bukan 0</small>
                            <x-input id="whatsapp" class="block mt-1 w-full" type="text" name="whatsapp"
                                :value="old('whatsapp', $contact->whatsapp)" required autofocus
                                placeholder="62 8xx xxxx xxxx" />
                        </div>
                        <div class="my-6">
                            <x-label for="instagram" :value="__('Instagram')" />
                            <small class="text-xs text-blue-500">*note: masukan hanya username instagram saja</small>
                            <x-input id="instagram" class="block mt-1 w-full" type="text" name="instagram"
                                :value="old('instagram', $contact->instagram)" required autofocus
                                placeholder="Enter username only" />
                        </div>
                        <div class="my-6">
                            <x-label for="email" :value="__('Email')" />
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email', $contact->email)" required autofocus
                                placeholder="Enter email address" />
                        </div>
                        <div class="my-6">
                            <x-label for="address" :value="__('Address')" />
                            <x-input id="address" class="block mt-1 w-full" type="text" name="address"
                                :value="old('address', $contact->address)" required autofocus
                                placeholder="Enter address" />
                        </div>
                        <div class="my-6">
                            <x-label for="map_url" :value="__('Google Maps Url')" />
                            <small class="text-xs text-blue-500">*note: masukan url dari google map dari alamat twenty
                                picture</small>
                            <textarea name="map_url" id="map_url"
                                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                placeholder="Enter Google Map Url" rows="5"
                                style="resize: none">{{ old('map_url', $contact->map_url) }}</textarea>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-3">
                                {{ __('Update') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
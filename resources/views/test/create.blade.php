<x-app-layout>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">

            <!-- Logo -->
            <div>
                <a href="{{ route('dashboard') }}">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

                <!-- Create Form -->
                <form action="{{ route('test.store') }}" method="post">
                    @csrf

                    <!-- Title Field -->
                    <x-text-input class="block mt-1 w-full p-2 border border-gray-300" type="text" name="title"
                        placeholder="title" value="{{ old('title') }}"/>

                    <!-- Title Error Message -->
                    <x-input-error :messages="$errors->get('Title')" class="mt-2" />
                    <hr>

                    <!-- Content Field -->
                    <textarea name="content" placeholder="Content" class="block w-full p-2 border rounded border-gray-300 mt-4">{{ old('content') }}</textarea>
                    <!-- Content Error Message -->
                    <x-input-error :messages="$errors->get('content')" class="mt-2" />


                    <!-- Show Field -->
                    <hr class="mt-5">
                    <div class="inline-flex mt-2 mb-2">
                        <x-input-label for="show" :value="__('Show Data')" class="mr-5" />
                        <x-text-input type="radio" name="show" id="show" value="1" />
                    </div>
                    <br>

                    <!-- Hide Field -->
                    <div class="inline-flex mt-2 mb-2">
                        <x-input-label for="hide" class="mr-6" :value="__('Hide Data')" />
                        <x-text-input type="radio" name="show" id="hide" value="0" />
                    </div>

                    <!-- Show Or Hide Error -->
                    <x-input-error :messages="$errors->get('show')" class="mb-2" />
                    <hr>

                    <!-- Status Field -->
                    <x-input-label for="status"
                        class=" text-lg block  font-medium text-gray-700 mt-2 mb-2">Status</x-input-label>
                    <select name="status" id="status"
                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="enable">Enable</option>
                        <option value="disable">Disable</option>
                    </select>
                    <hr>

                    <div class="flex mt-4 justify-between">
                        <!-- Create Button -->
                        <x-primary-button>
                            {{ __('Create') }}
                        </x-primary-button>

                        <!-- See All Test Button -->
                        <span
                            class="px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            <a href="{{ route('test.index') }}">{{ __('See All Tests') }}</a>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </body>
</x-app-layout>














{{-- <x-guest-layout> --}}
{{-- @extends('index')
    @section('content') --}}
{{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900"> --}}

{{-- @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif --}}
{{-- <form action="{{ route('test.store') }}" method="post"> --}}
{{-- @csrf --}}
{{-- Name Field --}}
{{-- <input type="text" name="name" placeholder="name""> --}}

{{-- <x-text-input class="block mt-1 w-full p-2 border border-gray-300" type="text" name="name" required autofocus
                autocomplete="username" /> --}}
{{-- Name Error Message --}}
{{-- @error('name')
                <div>
                    <p>{{ $message }}</p>
                </div>
            @enderror
            <hr> --}}
{{-- Content Field --}}
{{-- <textarea name="content" placeholder="Content">{{ old('content') }}</textarea> --}}
{{-- Content Error Message --}}
{{-- @error('content')
                <div>
                    </p>{{ $message }}</p>
                </div>
            @enderror
            <hr> --}}
{{-- Show Field --}}
{{-- <label for="show">Show Data</label>
            <input type="radio" name="show" id="show" value="1">

            <hr> --}}
{{-- Hide Field --}}
{{-- <label for="hide">Hide Data</label>
            <input type="radio" name="show" id="hide" value="0">
            <hr> --}}
{{-- Status Field --}}
{{-- <label for="status">Status</label>
            <select name="status" id="status">
                <option value="enable">Enable</option>
                <option value="disable">Disable</option>
            </select>
            <hr>
            <x-primary-button class="ml-3">
                {{ __('Create') }}
            </x-primary-button> --}}
{{-- <input type="submit" class="bg-blue-400" value="Create"> --}}
{{-- </form> --}}

{{-- @endsection --}}
{{-- Push CSS --}}
{{-- @push('css')
    <style>
        h1 {
            font-style: italic
        }
    </style>
@endpush --}}
{{-- </x-guest-layout> --}}

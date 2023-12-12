<x-app-layout>

    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">

            <!-- Logo -->

            <div>
                <a href="{{ route('dashboard') }}">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <!-- Edit a Test -->
            <h1 class=" text-3xl mt-3 text-gray-500">Edit a Test</h1>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <!-- Edit Form -->
                <form action="{{ route('test.update', ['test' => $test->id]) }}" method="post">
                    @csrf
                    @method('PUT')

                    <!-- Title Field -->
                    <x-text-input type="text" class="block mt-1 w-full p-2 border border-gray-300" name="title"
                        placeholder="Title" value="{{ $test->title }}" />
                    <!-- Title Error Message -->
                    <x-input-error :messages="$errors->get('title')" class="my-2" />
                    <hr>

                    <!-- Content Field -->
                    <textarea name="content" class="block w-full p-2 border rounded border-gray-300 mt-4" placeholder="Content">{{ $test->content }}</textarea>
                    <!-- Content Error Message -->
                    <x-input-error :messages="$errors->get('content')" class="my-2" />
                    <hr>

                    <!-- Show Field -->
                    <div class="inline-flex mt-2 mb-2">
                        <x-input-label for="show" :value="__('Show Data')" class="mr-5" />
                        <input type="radio" name="show" id="show" value="1" @checked($test->show == 1)>
                    </div>
                    <br>

                    <!-- Hide Field -->
                    <div class="inline-flex mt-2 mb-2">
                        <x-input-label for="hide" class="mr-6" :value="__('Hide Data')" />
                        <input type="radio" name="show" id="hide" value="0" @checked($test->show == 0)>
                    </div>


                    <!-- Show Or Hide Error -->
                    <x-input-error :messages="$errors->get('show')" class="my-2" />
                    <hr>

                    <!-- Status Field -->
                    <x-input-label for="status" class=" text-lg block  font-medium text-gray-700 mt-2 mb-2"
                        :value="__('Status')" />
                    <select name="status" id="status"
                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="enable" @selected($test->status == 'enable')>Enable</option>
                        <option value="disable" @selected($test->status == 'disable')>Disable</option>
                    </select>
                    <hr>

                    <div class="flex mt-4 justify-between">
                        <!-- Update Button -->
                        <x-primary-button class="">
                            {{ __('Update') }}
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

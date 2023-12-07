<x-app-layout>

    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <!-- Logo -->
            <div class="mb-8">
                <a href="{{ route('dashboard') }}">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>
            <div
                class="bg-gray-200 shadow-lg rounded px-8 pt-4 pb-8 mb-4 flex flex-col h-50 w-96 items-center text-gray-900">
                <p class="mb-2">Id = <span class="font-semibold">{{ $test->id }}</span></p>
                <p class="mb-2">Title = <span class="font-semibold">{{ $test->title }}</span></p>
                <p class="mb-2">Content = <span class="font-semibold">{{ $test->content }}</span></p>
                <p class="mb-2">Created_at = <span class="font-semibold">{{ $test->created_at }}</span></p>
                <p>Updated_at = <span class="font-semibold">{{ $test->updated_at }}</span></p>

                <div class="flex justify-between space-x-4 mt-5">
                    <!-- See All Test Button -->
                    <span
                        class="px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
                        <a href="{{ route('test.index') }}">{{ __('See All Tests') }}</a>
                    </span>

                    <!-- Edit -->
                    <a href="{{ $test->id }}/edit"
                        class="px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">Edit</a>

                    <!-- Delete -->
                    <form method="POST" action="{{ route('test.destroy', ['test' => $test->id]) }}">
                        @csrf
                        @method('delete')
                        <x-danger-button>
                            {{ __('delete') }}
                        </x-danger-button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</x-app-layout>

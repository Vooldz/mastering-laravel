@extends('index')
@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-3xl font-bold text-gray-500 flex justify-center">
                        Welcome To The Test Index Page
                    </h1>
                    <div class=" flex justify-between mt-7">

                        <!-- Create -->
                        <h3
                            class="px-4 py-2 bg-gray-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-600 transition">
                            <a href="test/create">
                                Create
                            </a>
                        </h3>

                        <!-- With Out Trashed -->
                        <h3
                            class="px-4 py-2 bg-gray-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-600 transition">
                            <a href="test/">
                                With Out Trash</a>
                        </h3>

                        <!-- Only Trashed -->
                        <h3
                            class="px-4 py-2 bg-gray-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-600 transition">
                            <a href="test?trashed=onlyTrashed">
                                Only Trashed</a>
                        </h3>

                        <!-- With Trashed -->
                        <h3
                            class="px-4 py-2 bg-gray-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-600 transition">
                            <a href="test?trashed=withTrashed">
                                With Trash</a>
                        </h3>
                    </div>

                    <!-- Showing Data Table -->
                    <table class=" table-auto w-full mt-6 divide-y divide-gray-500">
                        <thead class="bg-gray-400 border border-gray-500">
                            <tr>
                                <th class="px-4 py-2 border border-gray-500">Title</th>
                                <th class="px-4 py-2 border border-gray-500">Content</th>
                                <th class="px-4 py-2 border border-gray-500">Status</th>
                                <th class="px-4 py-2 border border-gray-500">Show</th>
                                <th class="px-4 py-2 border border-gray-500">Created</th>
                                <th class="px-4 py-2 border border-gray-500">Updated</th>
                                @if (request('trashed') == 'onlyTrashed' || request('trashed') == 'withTrashed')
                                    <th class="px-4 py-2 border border-gray-500">Deleted</th>
                                @endif
                                <th class="px-4 py-2 border border-gray-500">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-500">
                            <!-- Send The Data To data.blade.php -->
                            @each('test.data', $test, 'data', 'test.empty_data')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

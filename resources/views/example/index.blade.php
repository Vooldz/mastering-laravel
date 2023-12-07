@extends('index')
@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-3xl font-bold text-gray-500 flex justify-center">
                        Welcome To The Examples Index Page
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
                            <a href="example">
                                With Out Trash</a>
                        </h3>

                        <!-- Only Trashed -->
                        <h3
                            class="px-4 py-2 bg-gray-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-600 transition">
                            <a href="example?trashed=onlyTrashed">
                                Only Trashed</a>
                        </h3>

                        <!-- With Trashed -->
                        <h3
                            class="px-4 py-2 bg-gray-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-600 transition">
                            <a href="example?trashed=withTrashed">
                                With Trash</a>
                        </h3>
                    </div>

                    <!-- Showing Data Table -->
                    <table class=" table-auto w-full mt-6 divide-y divide-gray-500">
                        <thead class="bg-gray-400">
                            <tr>
                                <th class="px-4 py-2">Title</th>
                                <th class="px-4 py-2">Content</th>
                                <th class="px-4 py-2">Status</th>
                                <th class="px-4 py-2">Show</th>
                                <th class="px-4 py-2">Created</th>
                                <th class="px-4 py-2">Updated</th>
                                @if (request('trashed') == 'onlyTrashed' || request('trashed') == 'withTrashed')
                                    <th class="px-4 py-2">Deleted</th>
                                @endif
                                <th class="px-4 py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-500">

                            <!-- Send The Data To data.blade.php -->
                            @each('example.data', $example, 'data', 'example.empty_data')

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


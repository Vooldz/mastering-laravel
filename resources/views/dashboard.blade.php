<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="border bg-gray-300 h-30 m-5">
                        <p class="flex justify-center text-2xl m-4">
                            Click The Test Button To Check All My Test Content
                        </p>
                        <div class="flex justify-center">
                            <div
                            class="py-2 px-4 mb-3 bg-gray-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-600 transition">
                                <a href="/laravel-10/public/test">
                                    <h1>See All Tests</h1>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="border bg-gray-300 h-30 m-5">
                        <p class="flex justify-center text-2xl m-4">
                            Click The Example Button To Check All My Example Content
                        </p>
                        <div class="flex justify-center">
                            <div
                                class="px-4 py-2 mb-3 bg-gray-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-600 transition ">
                                <a href="/laravel-10/public/example">
                                    See All Examples
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    @foreach ($data as $item)
        <div class="flex items-center justify-center">
            <div class="w-full bg-gray-200 border mb-2 mt-8 mx-2">
                <p class="bg-gray-400 py-3 px-1">Name: {{ $item->name1 }}</p>
                <p class="py-1 px-1 my-2">Text: {{ $item->name2 }}</p>
                <hr class="border border-solid">
            </div>
        </div>
    @endforeach

</x-app-layout>

{{-- <x-app-layout>
    <div class="flex justify-center items-center h-screen">
        <div class="w-full lg:w-1/2 bg-white border rounded-lg shadow-md p-6">
            @foreach ($data as $item)
                <div class="border-b border-gray-200 py-4">
                    <p class="bg-gray-400 p-2 rounded">Name: {{ $item->name1 }}</p>
                    <p class="mt-2">Text: {{ $item->name2 }}</p>
                    <hr class="my-4 border border-solid">
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout> --}}

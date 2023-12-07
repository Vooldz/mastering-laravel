
<?php $deleted = $data->deleted_at > 1971 ? 'deleted' : 'not deleted'; ?>
<tr class="text-black">
    <td class="px-4 py-2">{{ $data->title }}</td>
    <td class="px-4 py-2">{{ $data->content }}</td>
    <td class="px-4 py-2">{{ $data->status }}</td>
    <td class="px-4 py-2">{{ $data->show == 1 ? 'Show' : 'Hide' }}</td>
    <td class="px-4 py-2">{{ $data->created_at }}</td>
    <td class="px-4 py-2">{{ $data->updated_at }}</td>
    @if (request('trashed') == 'onlyTrashed' || request('trashed') == 'withTrashed')
        <td class="px-4 py-2">{{ $data->deleted_at > 1971 ? $data->deleted_at : 'Not Deleted' }}</td>
    @endif


    <td class="px-4 py-2 space-x-2">
        <!-- If Not Deleted Show The Delete, Edit And Show Button -->

        @if ($deleted == 'not deleted')
        <!-- Edit -->
        @if (request('trashed') != 'withTrashed')
        <a href="example/{{ $data->id }}/edit"
            class="px-4 py-2 bg-gray-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-600 transition">Edit</a>
        @endif

            <!-- Show -->
            <a href="example/{{ $data->id }}"
                class="px-4 py-2 bg-gray-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-600 transition">Show</a>
            <!-- Delete -->
            <form method="POST" action="{{ route('example.destroy', ['example' => $data->id]) }}" class="inline-block">
                @csrf
                @method('delete')
                <x-danger-button>
                    {{ __('delete') }}
                </x-danger-button>
            </form>
        @endif

        <!-- Force Delete -->
        <form method="POST" action="{{ route('example.force', ['example' => $data->id]) }}" class="inline-block">
            @csrf
            @method('delete')

            <x-danger-button>
                {{ __('Force Delete') }}
            </x-danger-button>
        </form>

        <!-- If Deleted Show The Restore Button -->
        @if ($deleted == 'deleted')
            <!-- Restore -->
            <form method="POST" action="{{ route('example.restore', ['example' => $data->id]) }}" class=" inline-block">
                @csrf
                <input type="submit" value="Restore"
                    class="bg-green-600 text-white px-2 py-1 rounded hover:bg-green-500 cursor-pointer">
            </form>
        @endif
    </td>
</tr>


<x-list title="Avaliação" :paginationData="$objects" :useDeleteModal="false">
    <x-table>
        <x-slot:head>
            <x-table.head.row>
                <x-table.head.col class="w-max">Avaliador</x-table.head.col>
                <x-table.head.col class="w-max">Participante</x-table.head.col>
                <x-table.head.col class="w-max">Submissão</x-table.head.col>
                <x-table.head.col class="w-40 text-center">Status</x-table.head.col>
                <x-table.head.col class="w-40 text-center">Nota</x-table.head.col>
                <x-table.head.col class="w-40 text-center">Arquivo</x-table.head.col>
                <x-table.head.col class="w-40 text-right">Ações</x-table.head.col>
            </x-table.head.row>
        </x-slot:head>
        <x-slot:body>
            @forelse ($objects as $object)
                <x-table.body.row>
                    <x-table.body.col class="font-medium text-slate-700 dark:text-navy-100 lg:px-5">
                        {{ $object->user->name }}
                    </x-table.body.col>
                    
                    <x-table.body.col class="font-medium text-slate-700 dark:text-navy-100 lg:px-5">{{ $object->submission->user->name }}</x-table.body.col>

                    <x-table.body.col class="font-medium text-slate-700 dark:text-navy-100 lg:px-5">
                        {{ $object->submission->title }}
                    </x-table.body.col>


                    <x-table.body.col class="font-medium text-slate-700 dark:text-navy-100 lg:px-5 text-center">
                        @if ($object->status == 'AA' || $object->status == 'EA')
                            <i class="fa-solid fa-circle-exclamation text-warning"></i>
                        @elseif ($object->status == 'AV' || $object->status == 'AP' || $object->status == 'AC')
                            <i class="fa-regular fa-circle-check text-success"></i>
                        @else
                            <i class="fa-solid fa-ban text-error"></i>
                        @endif
                        {{ $getStatus[$object->status] }}
                    </x-table.body.col>

                    <x-table.body.col class="font-medium text-slate-700 dark:text-navy-100 lg:px-5 text-center">
                        {{ number_format($object->average, 2) }}
                    </x-table.body.col>

                    <x-table.body.col class="w-40 text-center">
                        @if ($object->submission->file_new)
                            <a href="{{ Storage::url($object->submission->file_new) }}" target="_blank"
                                class="text-blue-500">
                                <i class="fa-solid fa-external-link fa-lg"></i>
                            </a>
                        @else
                            <a href="{{ Storage::url($object->submission->file) }}" target="_blank"
                                class="text-blue-500">
                                <i class="fa-solid fa-external-link fa-lg"></i>
                            </a>
                        @endif
                    </x-table.body.col>

                    <x-table.body.col class="w-40 text-right">
                        <x-dropdown align="right" width="w-40">
                            <x-slot:trigger>
                                <button
                                    class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <i class="fa-solid fa-ellipsis fa-lg"></i>
                                </button>
                            </x-slot:trigger>
                            <x-slot:content>
                                @can('read_avaliantions')
                                    <x-dropdown-link href="{{ route('dashboard/avaliation/edit', $object->id) }}"
                                        class="flex cursor-pointer items-center gap-2">
                                        <i class="fa-solid fa-star"></i>
                                        <span> Avaliar</span>
                                    </x-dropdown-link>
                                @endcan
                            </x-slot:content>
                        </x-dropdown>
                    </x-table.body.col>
                </x-table.body.row>
            @empty
                <x-table.body.empty />
            @endforelse
        </x-slot:body>
    </x-table>
</x-list>

<x-list title="Eventos" :paginationData="$objects" :useDeleteModal="false">
    @can('write_events')
        <x-slot:headerActions>
            <x-link.primary class="px-4" wire:click="$dispatch('addNew')">
                <x-fas-circle-plus class="w-5 mr-1" />
                Novo Evento
            </x-link.primary>

        </x-slot:headerActions>
    @endcan

    <x-table>
        <x-slot:head>
            <x-table.head.row>
                <x-table.head.col class="w-20">#</x-table.head.col>
                <x-table.head.col class="w-max">Nome</x-table.head.col>
                <x-table.head.col class="w-40">Cadastro</x-table.head.col>
                <x-table.head.col class="w-40">Status</x-table.head.col>
                <x-table.head.col class="w-40 text-right">Ações</x-table.head.col>
            </x-table.head.row>
        </x-slot:head>
        <x-slot:body>
            @forelse ($objects as $object)
                <x-table.body.row>

                    <x-table.body.col class="w-20">{{ $object->id }}</x-table.body.col>

                    <x-table.body.col class="font-medium text-slate-700 dark:text-navy-100 lg:px-5">
                        {{ $object->name }}
                    </x-table.body.col>

                    <x-table.body.col> @date($object->created_at) </x-table.body.col>

                    <x-table.body.col class="{{ $object->active ? 'text-success' : 'text-error ' }}">
                        @if ($object->active)
                            <i class="fa-regular fa-circle-check"></i>
                        @else
                            <i class="fa-solid fa-ban"></i>
                        @endif
                        {{ $object->active ? 'Ativo' : 'Inativo' }}
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
                                @can('write_events')
                                    <x-dropdown-link wire:click="$dispatch('editObject', { id: '{{ $object->id }}' })"
                                        class="flex cursor-pointer items-center gap-2">
                                        <i class="fa-solid fa-pencil"></i>
                                        <span> Editar</span>
                                    </x-dropdown-link>
                                    <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                                    <x-dropdown-link wire:click="toDelete('{{ $object->id }}')"
                                        class="flex cursor-pointer items-center gap-2">
                                        <i class="fa-regular fa-trash-can text-error"></i>
                                        <span class="text-error"> Excluir</span>
                                    </x-dropdown-link>
                                @endcan
                            </x-slot:content>
                        </x-dropdown>
                    </x-table.body.col>
                </x-table.body.row>
            @empty
                <x-table.body.empty colspan="4" />
            @endforelse
        </x-slot:body>
    </x-table>
    <livewire:event.event-modal />
</x-list>

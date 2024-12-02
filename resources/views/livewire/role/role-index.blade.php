<x-list title="Tipos de Usuários" :paginationData="$roles" deleteTitle="Excluir Tipo de Usuário"
    deleteContent="Você tem certeza que deseja excluir esse Tipo de Usuário?">
    @can('write_roles')
        <x-slot:headerActions>
            <x-link.primary href="{{ route('settings/roles/create') }}"><x-fas-circle-plus class="mr-1 w-5" /> Novo Tipo de
                Usuário</x-link.primary>
        </x-slot:headerActions>
    @endcan

    <x-table>
        <x-slot:head>
            <x-table.head.row>
                <x-table.head.col class="w-40">#</x-table.head.col>
                <x-table.head.col class="w-max">Nome</x-table.head.col>
                <x-table.head.col class="w-40 text-right">Ações</x-table.head.col>
            </x-table.head.row>
        </x-slot:head>
        <x-slot:body>
            @forelse ($roles as $role)
                <x-table.body.row>
                    <x-table.body.col class="w-40">{{ $role->id }}</x-table.body.col>
                    <x-table.body.col class="font-medium text-slate-700 dark:text-navy-100 lg:px-5">
                        <a href="{{ route('settings/roles/show', $role->uuid) }}">
                            {{ $role->name }}
                        </a>
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
                                <x-dropdown-link href="{{ route('settings/roles/show', $role->uuid) }}"
                                    class="flex cursor-pointer items-center gap-2">
                                    <i class="fa-regular fa-eye"></i>
                                    <span> Visualizar</span>
                                </x-dropdown-link>
                                @can('write_roles')
                                    <x-dropdown-link href="{{ route('settings/roles/edit', $role->uuid) }}"
                                        class="flex cursor-pointer items-center gap-2">
                                        <i class="fa-solid fa-pencil"></i>
                                        <span> Editar</span>
                                    </x-dropdown-link>
                                    <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                                    <x-dropdown-link wire:click="toConfirmDeletion({{ $role->id }})"
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
                <x-table.body.empty />
            @endforelse
        </x-slot:body>
    </x-table>
</x-list>

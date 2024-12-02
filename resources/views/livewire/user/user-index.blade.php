<x-list title="Usuários" :paginationData="$users" deleteTitle="Excluir Usuário"
    deleteContent="Você tem certeza que deseja excluir esse Usuário?">
    @can('write_users')
        <x-slot:headerActions>
            <x-link.primary href="{{ route('settings/users/create') }}"><x-fas-circle-plus class="mr-1 w-5" /> Novo
                Usuário</x-link.primary>
        </x-slot:headerActions>
    @endcan

    <x-table>
        <x-slot:head>
            <x-table.head.row>
                <x-table.head.col class="w-max">Usuário</x-table.head.col>
                <x-table.head.col class="w-max">CPF</x-table.head.col>
                <x-table.head.col class="w-max">E-mail</x-table.head.col>
                <x-table.head.col class="w-max">Instituição</x-table.head.col>
                <x-table.head.col class="w-40">Status</x-table.head.col>
                <x-table.head.col class="w-40 text-right">Ações</x-table.head.col>
            </x-table.head.row>
        </x-slot:head>
        <x-slot:body>
            @forelse ($users as $user)
                <x-table.body.row>
                    <x-table.body.col class="font-medium text-slate-700 dark:text-navy-100 lg:px-5">
                        <a href="{{ route('settings/users/edit', $user->id) }}">
                            {{ $user->name }}
                        </a>
                    </x-table.body.col>
                    <x-table.body.col class="font-medium text-slate-700 dark:text-navy-100 lg:px-5">
                        @cpfcnpj($user->cpf)
                    </x-table.body.col>
                    <x-table.body.col>
                        {{ $user->email }}
                    </x-table.body.col>
                    <x-table.body.col class="font-medium text-slate-700 dark:text-navy-100 lg:px-5">
                        {{ $getType[$user->type] }}
                    </x-table.body.col>

                    <x-table.body.col class="{{ $user->active ? 'text-success' : 'text-error ' }}">
                        @if ($user->active)
                            <i class="fa-regular fa-circle-check"></i>
                        @else
                            <i class="fa-solid fa-ban"></i>
                        @endif
                        {{ $user->getActiveInString() }}
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
                                @can('write_users')
                                    <x-dropdown-link href="{{ route('settings/users/edit', $user->id) }}"
                                        class="flex cursor-pointer items-center gap-2">
                                        <i class="fa-solid fa-pencil"></i>
                                        <span> Editar</span>
                                    </x-dropdown-link>
                                    <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                                    @if ($user->active)
                                        <x-dropdown-link wire:click="deactivateUser({{ $user->id }})"
                                            class="flex cursor-pointer items-center gap-2">
                                            <i class="fa-solid fa-ban text-error"></i>
                                            <span class="text-error"> Desativar</span>
                                        </x-dropdown-link>
                                    @else
                                        <x-dropdown-link wire:click="activateUser({{ $user->id }})"
                                            class="flex cursor-pointer items-center gap-2">
                                            <i class="fa-regular fa-circle-check text-success"></i>
                                            <span class="text-success"> Ativar</span>
                                        </x-dropdown-link>
                                    @endif
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

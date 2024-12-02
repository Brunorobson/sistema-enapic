<x-list title="Submissões" :paginationData="$objects" :useDeleteModal="false" :searchAction="false">
    @if (auth()->user()->hasRole(5))
        <x-slot:headerActions>
            <x-link.primary href="{{ route('dashboard/submission/create') }}" class="px-4"
                wire:click="$dispatch('addNew')">
                <x-fas-circle-plus class="mr-1 w-5" />
                Nova Submissão
            </x-link.primary>

        </x-slot:headerActions>
    @endif
    @if (!auth()->user()->hasRole(6))
        <x-table>
            <x-slot:head>
                <x-table.head.row>
                    <x-table.head.col class="w-max">Participante</x-table.head.col>
                    <x-table.head.col class="w-max">Título</x-table.head.col>
                    <x-table.head.col class="w-max">Eixo</x-table.head.col>
                    <x-table.head.col class="w-40">Status</x-table.head.col>
                    <x-table.head.col class="w-max">Cadastro</x-table.head.col>
                    <x-table.head.col class="w-40 text-right">Ações</x-table.head.col>
                </x-table.head.row>
            </x-slot:head>
            <x-slot:body>
                @forelse ($objects as $object)
                    <x-table.body.row>

                        <x-table.body.col class="w-20">{{ $object->user->name }}</x-table.body.col>

                        <x-table.body.col class="font-medium text-slate-700 dark:text-navy-100 lg:px-5">
                            {{ $object->title }}
                        </x-table.body.col>

                        <x-table.body.col class="w-20">
                            @if ($object->axle_id == 1)
                                EIXO 1
                            @elseif($object->axle_id == 2)
                                EIXO 2
                            @elseif($object->axle_id == 3)
                                EIXO 3
                            @endif
                        </x-table.body.col>

                        <x-table.body.col class="font-medium text-slate-700 dark:text-navy-100 lg:px-5">
                            @if ($object->status == 'AA' || $object->status == 'EA')
                                <i class="fa-solid fa-circle-exclamation text-warning"></i>
                            @elseif ($object->status == 'AV' || $object->status == 'AP' || $object->status == 'AC')
                                <i class="fa-regular fa-circle-check text-success"></i>
                            @else
                                <i class="fa-solid fa-ban text-error"></i>
                            @endif
                            {{ $getStatus[$object->status] }}
                        </x-table.body.col>



                        <x-table.body.col class="w-20">@date($object->created_at) </x-table.body.col>

                        <x-table.body.col class="w-40 text-right">
                            <x-dropdown align="right" width="w-40">
                                <x-slot:trigger>
                                    <button
                                        class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                        <i class="fa-solid fa-ellipsis fa-lg"></i>
                                    </button>
                                </x-slot:trigger>
                                <x-slot:content>
                                    @can('write_submissions')
                                        @if (!auth()->user()->hasRole(5) || ($object->status == 'AC' && !$object->file_new))
                                            @if ($object->status == 'AC' && auth()->user()->hasRole(5))
                                                <x-dropdown-link
                                                    href="{{ route('dashboard/submission/edit', $object->id) }}"
                                                    class="flex cursor-pointer items-center gap-2">
                                                    <i class="fa-solid fa-upload"></i>
                                                    <span> Submeter Correção</span>
                                                </x-dropdown-link>
                                            @else
                                                <x-dropdown-link
                                                    href="{{ route('dashboard/submission/edit', $object->id) }}"
                                                    class="flex cursor-pointer items-center gap-2">
                                                    <i class="fa-solid fa-pencil"></i>
                                                    <span>
                                                        Editar</span>
                                            @endif
                                            </x-dropdown-link>
                                        @else
                                            <x-dropdown-link href="{{ route('dashboard/submission/show', $object->id) }}"
                                                class="flex cursor-pointer items-center gap-2">
                                                <i class="fa-solid fa-eye"></i>
                                                <span> Visualizar</span>
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
    @else
    <x-form.card 
    titleClasses="text-xl font-bold text-slate-700 flex items-center"
    contentClasses="mt-4 text-sm text-slate-600 dark:text-navy-100"
    headerClasses="flex items-center space-x-2 p-4"
    actionClasses="hidden"
    class="flex items-center bg-transparent"> <!-- Remover cor do fundo -->
    <div class="flex flex-col items-center">
        <!-- Ícone de importância -->
        <i class="fa-solid fa-triangle-exclamation mb-2 text-3xl text-red-500"></i>

        <!-- Título e conteúdo -->
        <h3 class="mb-2 text-xl font-bold text-slate-700">Inscrição Pendente</h3>
        <p class="text-sm text-slate-600 dark:text-navy-100">
            Sua inscrição ainda não foi confirmada. Por favor, aguarde até que sua inscrição seja verificada e
            confirmada.
        </p>
    </div>
</x-form.card>






    @endif


</x-list>

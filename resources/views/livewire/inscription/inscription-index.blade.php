<x-list title="{{ !auth()->user()->hasRole(5) ? 'Inscrições' : 'Minha Inscrição' }}" :paginationData="$objects" :useDeleteModal="false">
    <x-table>
        <x-slot:head>
            <x-table.head.row>
                <x-table.head.col class="w-max">Perfil</x-table.head.col>
                <x-table.head.col class="w-max">Participante</x-table.head.col>
                <x-table.head.col class="w-max">CPF</x-table.head.col>
                <x-table.head.col class="w-max">Evento</x-table.head.col>
                <x-table.head.col class="w-max">Status</x-table.head.col>
                <x-table.head.col class="w-max">Cadastro</x-table.head.col>
                @can('write_inscriptions')
                    <x-table.head.col class="w-40 text-right">Ações</x-table.head.col>
                @endcan
            </x-table.head.row>
        </x-slot:head>
        <x-slot:body>
            @forelse ($objects as $object)
                <x-table.body.row>

                    <x-table.body.col class="font-medium text-slate-700 dark:text-navy-100 lg:px-5">
                        @foreach ($object->user->roles as $role)
                            @if ($role->id == 6)
                                <i class="fa-solid fa-circle-exclamation text-warning"></i>
                                {{ $role->name }}
                            @elseif ($role->id == 5)
                                <i class="fa-regular fa-circle-check text-success"></i>
                                {{ $role->name }}
                            @elseif ($role->id == 4)
                                <i class="fa-solid fa-user-check text-primary"></i>
                                <!-- Ícone de Avaliador com check -->
                                {{ $role->name }}
                            @else
                                {{ $role->name }}
                            @endif
                        @endforeach
                    </x-table.body.col>

                    <x-table.body.col>{{ $object->user->name }}</x-table.body.col>

                    <x-table.body.col class="w-20 font-medium text-slate-700 dark:text-navy-100 lg:px-5">
                        @cpfcnpj($object->user->cpf)
                    </x-table.body.col>

                    <x-table.body.col class="w-20">{{ $object->event->name }}</x-table.body.col>

                    <x-table.body.col class="font-medium text-slate-700 dark:text-navy-100 lg:px-5">
                        @if ($object->status == 'P')
                            <i class="fa-solid fa-circle-exclamation text-warning"></i>
                        @elseif ($object->status == 'I')
                            <i class="fa-regular fa-circle-check text-success"></i>
                        @else
                            <i class="fa-solid fa-ban text-error"></i>
                        @endif
                        {{ $getStatus[$object->status] }}
                    </x-table.body.col>

                    <x-table.body.col class="w-20"> @date($object->created_at) </x-table.body.col>
                    @can('write_inscriptions')
                        <x-table.body.col class="w-40 text-right">
                            <x-dropdown align="right" width="w-40">
                                <x-slot:trigger>
                                    <button
                                        class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                        <i class="fa-solid fa-ellipsis fa-lg"></i>
                                    </button>
                                </x-slot:trigger>
                                <x-slot:content>
                                    <x-dropdown-link wire:click="toConfirmInscription({{ $object->id }})"
                                        class="flex cursor-pointer items-center gap-2">
                                        <i class="fa-regular fa-circle-check"></i>
                                        <span>Confirmar Inscrição</span>
                                    </x-dropdown-link>
                                    <x-dropdown-link wire:click="toConfirmEvaluator({{ $object->id }})"
                                        class="flex cursor-pointer items-center gap-2">
                                        <i class="fa-solid fa-user-check"></i>
                                        <span>Tornar Avaliador</span>
                                    </x-dropdown-link>
                                    <x-dropdown-link wire:click="$dispatch('editObject', { id: '{{ $object->id }}' })"
                                        class="flex cursor-pointer items-center gap-2">
                                        <i class="fa-solid fa-pencil"></i>
                                        <span> Editar</span>
                                    </x-dropdown-link>
                                </x-slot:content>
                            </x-dropdown>
                        </x-table.body.col>
                    @endcan
                </x-table.body.row>
            @empty
                <x-table.body.empty />
            @endforelse
        </x-slot:body>
    </x-table>
    @include('livewire.inscription.partial.show-modal-evaluator')
    <livewire:inscription.inscription-modal />
</x-list>

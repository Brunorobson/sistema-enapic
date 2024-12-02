@props([
    'title',
    'paginationData',
    'useDeleteModal' => true,
    'deleteTitle' => 'Excluir Item',
    'deleteContent' => 'Você tem certeza que deseja excluir esse Item?',
    'searchAction' => null,
    'printAction' => null,
])

<main class="main-content w-full px-[var(--margin-x)] pb-8">
    @if (auth()->user()->id !== 6)
        @isset($title)
            <x-slot:title>
                {{ $title }}
            </x-slot:title>
            <div class="flex items-center space-x-4 py-5 lg:py-6">
                <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
                    {{ $title }}
                </h2>
            </div>
        @endisset

        <div x-data="{ isFilterExpanded: false }">
            <div class="flex items-center justify-between">
                @isset($headerActions)
                    {{ $headerActions }}
                @else
                    <div></div>
                @endisset

                <div class="flex h-10 items-center justify-stretch">
                    <div class="flex items-center" x-data="{ isInputActive: false }">
                        <label class="block">
                            <input x-effect="isInputActive === true && $nextTick(() => { $el.focus()});"
                                :class="isInputActive ? 'w-32 lg:w-48' : 'w-0'"
                                class="form-input m-0 !border-none bg-transparent p-0 px-1 text-right !ring-0 transition-all duration-100 placeholder:text-slate-500 dark:placeholder:text-navy-200"
                                placeholder="Pesquise aqui..." type="text" wire:model.live="filter" />
                        </label>
                        <!--$wire.resetPage(); -->
                        <button x-tooltip="'Limpar'" x-show="isInputActive"
                            x-on:click="$wire.filter = ''; isInputActive = false;"
                            class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <i class="fa-regular fa-circle-xmark"></i>
                        </button>
                        <button x-tooltip="'Pesquisar'" @click="isInputActive = !isInputActive"
                            class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                        @isset($filterFields)
                            <button x-tooltip="'Mais Filtros'" @click="isFilterExpanded = !isFilterExpanded"
                                class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                <i class="fa-solid fa-filter"></i>
                            </button>
                        @endisset
                    </div>
                </div>
            </div>
            @isset($filterFields)
                <div x-show="isFilterExpanded" x-collapse class="card">
                    <div class="p-3">
                        {{ $filterFields }}
                        <div class="mt-4 space-x-1 text-right">
                            <button @click="isFilterExpanded = ! isFilterExpanded; $wire.clearFilters();"
                                class="btn border border-slate-300 font-medium text-slate-700 hover:bg-slate-300/20 active:bg-slate-300/25 dark:text-navy-100 dark:hover:bg-navy-300/20 dark:active:bg-navy-300/25">
                                cancelar
                            </button>
                            @if ($printAction)
                                <button @click="$wire.{{ $printAction }}();"
                                    class="btn bg-secondary font-medium text-white hover:bg-secondary-focus focus:bg-secondary-focus active:bg-secondary-focus/90">
                                    Imprimir
                                </button>
                            @endif
                            @if ($searchAction)
                                <button @click="isFilterExpanded = ! isFilterExpanded; $wire.{{ $searchAction }}();"
                                    class="btn bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                    Aplicar
                                </button>
                            @else
                                <button @click="isFilterExpanded = ! isFilterExpanded; $wire.$refresh();"
                                    class="btn bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                    Aplicar
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            @endisset
        </div>
    @endif

    <div class="card mt-3">
        <div class="is-scrollbar-hidden min-w-full">
            {{ $slot }}
        </div>
        <div>
            @if (isset($filters))
                {!! $paginationData->appends($filters)->links() !!}
            @else
                {!! $paginationData->links() !!}
            @endif
        </div>
    </div>

    @if ($useDeleteModal)
        <!-- BEGIN: Delete Confirmation Modal -->
        <x-confirmation-modal wire:model.live="showModalDelete" maxWidth="md">
            <x-slot name="title">
                {{ $deleteTitle }}
            </x-slot>

            <x-slot name="content">
                {{ $deleteContent }}
            </x-slot>

            <x-slot name="footer">
                <x-link.default class="min-w-[7rem]" wire:click="$toggle('showModalDelete')"
                    wire:loading.attr="disabled">
                    Cancelar
                </x-link.default>

                <x-link.error class="ml-3 min-w-[7rem]" wire:click="onDestroy" wire:loading.attr="disabled">
                    Excluir
                </x-link.error>
            </x-slot>
        </x-confirmation-modal>
        <!-- END: Delete Confirmation Modal -->
    @endif
</main>

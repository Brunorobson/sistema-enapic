<x-app-layout title="Index" is-header-blur="true" isSidebarOpen="true">
    <x-slot name="title">
        Index
    </x-slot>
    <!-- Main Content Wrapper -->
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="mt-4 grid grid-cols-1 gap-4 sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
            @if (auth()->user()->isSupport() || auth()->user()->isAdmin() || auth()->user()->isCommission())
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-4 lg:gap-6">
                    <a href="{{ route('dashboard/inscriptions') }}">
                        <div class="card flex-row justify-between p-4 hover:bg-slate-50">
                            <div>
                                <p class="text-xs+ uppercase">Inscrições Ativas</p>
                                <div class="mt-8 flex items-baseline space-x-1">
                                    <p class="text-2xl font-semibold text-slate-700 dark:text-navy-100">
                                        {{ $inscriptionAction }}
                                    </p>
                                </div>
                            </div>
                            <div class="mask is-squircle flex h-10 w-10 items-center justify-center bg-warning/10">
                                <i class="fa-solid fa-user-check text-xl text-success"></i>
                            </div>
                            <div class="absolute bottom-0 right-0 overflow-hidden rounded-lg">
                                <i
                                    class="fa-solid fa-user-check translate-x-1/4 translate-y-1/4 text-5xl opacity-15"></i>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('dashboard/inscriptions') }}">
                        <div class="card flex-row justify-between p-4 hover:bg-slate-50 relative">
                            <div>
                                <p class="text-xs+ uppercase">Inscritos Pendentes</p>
                                <div class="mt-8 flex items-baseline space-x-1">
                                    <p class="text-2xl font-semibold text-slate-700 dark:text-navy-100">
                                        {{ $inscriptionPending }}
                                    </p>
                                </div>
                            </div>
                            <div class="mask is-squircle flex h-10 w-10 items-center justify-center bg-info/10">
                                <i class="fa-solid fa-user text-xl text-info"></i>
                            </div>
                            <div class="absolute bottom-0 right-0 overflow-hidden rounded-lg">
                                <i class="fa-solid fa-user translate-x-1/4 translate-y-1/4 text-5xl opacity-15"></i>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('dashboard/submissions') }}">
                        <div class="card flex-row justify-between p-4 hover:bg-slate-50 relative">
                            <div>
                                <p class="text-xs+ uppercase">Submissões</p>
                                <div class="mt-8 flex items-baseline space-x-1">
                                    <p class="text-2xl font-semibold text-slate-700 dark:text-navy-100">
                                        {{ $submissionsCount }}
                                    </p>
                                </div>
                            </div>
                            <div class="mask is-squircle flex h-10 w-10 items-center justify-center bg-success/10">
                                <i class="fa-solid fa-file-upload text-xl text-success"></i>
                            </div>
                            <div class="absolute bottom-0 right-0 overflow-hidden rounded-lg">
                                <i
                                    class="fa-solid fa-file-upload translate-x-1/4 translate-y-1/4 text-5xl opacity-15"></i>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('dashboard/avaliations') }}">
                        <div class="card flex-row justify-between p-4 hover:bg-slate-50 relative">
                            <div>
                                <p class="text-xs+ uppercase">Avaliações Concluidas</p>
                                <div class="mt-8 flex items-baseline space-x-1">
                                    <p class="text-2xl font-semibold text-slate-700 dark:text-navy-100">
                                        {{ $AvaliationsCompleted }}
                                    </p>
                                </div>
                            </div>
                            <div class="mask is-squircle flex h-10 w-10 items-center justify-center bg-warning/10">
                                <i class="fa-solid fa-star text-xl text-success"></i>
                            </div>
                            <div class="absolute bottom-0 right-0 overflow-hidden rounded-lg">
                                <i class="fa-solid fa-star translate-x-1/4 translate-y-1/4 text-5xl opacity-15"></i>
                            </div>
                        </div>
                    </a>
                </div>
            @else
                @if (auth()->user()->hasRole(6) || auth()->user()->hasRole(5))
                    <div>
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-2 lg:gap-6 mt-4">
                            @if (auth()->user()->hasRole(5))
                                <a href="{{ route('dashboard/submissions') }}">
                                    <div class="card flex-row justify-between p-4 hover:bg-slate-50 relative">
                                        <div>
                                            <p class="text-xs+ uppercase">Minhas Submissões</p>
                                            <div class="mt-8 flex items-baseline space-x-1">
                                                <p class="text-lg font-semibold text-slate-700 dark:text-navy-100">
                                                    @if ($submissionsCountUser == 0)
                                                        Faça a sua primeira Submissão!
                                                    @else
                                                        {{ $submissionsCountUser }}
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                        <div
                                            class="mask is-squircle flex h-10 w-10 items-center justify-center bg-success/10">
                                            <i class="fa-solid fa-file-upload text-xl text-success"></i>
                                        </div>
                                        <div class="absolute bottom-0 right-0 overflow-hidden rounded-lg">
                                            <i
                                                class="fa-solid fa-file-upload translate-x-1/4 translate-y-1/4 text-5xl opacity-15"></i>
                                        </div>
                                    </div>
                                </a>
                            @endif
                            <a href="{{ route('dashboard/inscriptions') }}">
                                <div class="card flex-row justify-between p-4 hover:bg-slate-50 relative">
                                    <div>
                                        <p class="text-xs+ uppercase">Status da Inscrição</p>
                                        <div class="mt-8 flex items-baseline space-x-1">
                                            <p class="text-2xl font-semibold text-slate-700 dark:text-navy-100">
                                                @if ($inscription)
                                                    @if ($inscription->status == 'P')
                                                        <i class="fa-solid fa-circle-exclamation text-warning"></i>
                                                    @elseif ($inscription->status == 'I')
                                                        <i class="fa-regular fa-circle-check text-success"></i>
                                                    @else
                                                        <i class="fa-solid fa-ban text-error"></i>
                                                    @endif
                                                    <p class="text-lg font-semibold text-slate-700 dark:text-navy-100">
                                                        {{ $statusOptions[$inscription->status] }}
                                                    </p>
                                                @else
                                                    <p class="text-lg font-semibold text-slate-700 dark:text-navy-100">
                                                        Não inscrito
                                                    </p>
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mask is-squircle flex h-10 w-10 items-center justify-center bg-info/10">
                                        <i class="fa-solid fa-user-check text-xl text-info"></i>
                                    </div>
                                    <div class="absolute bottom-0 right-0 overflow-hidden rounded-lg">
                                        <i
                                            class="fa-solid fa-user-check translate-x-1/4 translate-y-1/4 text-5xl opacity-15"></i>
                                    </div>
                                </div>
                            </a>

                @endif
                @if (auth()->user()->hasRole(4))
                    <div>
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-2 lg:gap-6 mt-4">
                            <a href="{{ route('dashboard/avaliations') }}">
                                <div class="card flex-row justify-between p-4 hover:bg-slate-50 relative">
                                    <div>
                                        <p class="text-xs+ uppercase">Minhas Avaliações</p>
                                        <div class="mt-8 flex items-baseline space-x-1">
                                            <p class="text-lg font-semibold text-slate-700 dark:text-navy-100">
                                                @if ($avaliationsCountUser == 0)
                                                    Você ainda não possui avaliações
                                                @else
                                                    {{ $avaliationsCountUser }}
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                    <div
                                        class="mask is-squircle flex h-10 w-10 items-center justify-center bg-warning/10">
                                        <i class="fa-solid fa-star text-xl text-success"></i>
                                    </div>
                                    <div class="absolute bottom-0 right-0 overflow-hidden rounded-lg">
                                        <i
                                            class="fa-solid fa-star translate-x-1/4 translate-y-1/4 text-5xl opacity-15"></i>
                                    </div>
                                </div>
                            </a>
                @endif
        </div>
        </div>
        @endif
        </div>
    </main>
</x-app-layout>

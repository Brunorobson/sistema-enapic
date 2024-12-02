<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}
        @isset($title)
            - {{ $title }}
        @endisset
    </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
    <script>
        /**
         * THIS SCRIPT REQUIRED FOR PREVENT FLICKERING IN SOME BROWSERS
         */
        localStorage.getItem("_x_darkMode_on") === "true" &&
            document.documentElement.classList.add("dark");
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

    @isset($head)
        {{ $head }}
    @endisset

</head>

<body x-data x-bind="$store.global.documentBody"
    class="is-sidebar-open @isset($headerSticky) {{ $headerSticky === 'false' ? 'is-header-not-sticky' : '' }} @endisset">

    <!-- App preloader-->
    <x-app-preloader></x-app-preloader>

    <!-- Page Wrapper -->
    <div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900" x-cloak>
        <!-- Sidebar -->
        <div class="sidebar print:hidden">
            <!-- Main Sidebar -->
            <x-app-partials.main-sidebar></x-app-partials.main-sidebar>

            <!-- Sidebar Panel -->
            <x-app-partials.sidebar-panel></x-app-partials.sidebar-panel>
        </div>

        <!-- App Header -->
        <x-app-partials.header></x-app-partials.header>

        <!-- Mobile Searchbar -->
        <x-app-partials.mobile-searchbar></x-app-partials.mobile-searchbar>

        {{ $slot }}

    </div>

    <x-notification />

    <!-- This is a place for Alpine.js Teleport feature @see https://alpinejs.dev/directives/teleport -->
    <div id="x-teleport-target"></div>

    @isset($script)
        {{ $script }}
    @endisset

    @stack('modals')

    @livewireScriptConfig

    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('app::notify', (event) => {
                Swal.fire({
                    title: event[0].title ?? 'Sucesso',
                    text: event[0].text ?? 'Registro Salvo com Sucesso!',
                    icon: event[0].type ?? 'Success'
                });
            });

            Livewire.on('app::confirm', (event) => {
                let action = event[0].action ?? 'onDelete';
                Swal.fire({
                    title: event[0].title ?? 'Deletar Registro',
                    text: event[0].text ?? 'Deseja excluir esse registro?',
                    icon: 'warning',
                    showCancelButton: true,
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.dispatch(action);
                    }
                });
            });
        });
    </script>
</body>

</html>

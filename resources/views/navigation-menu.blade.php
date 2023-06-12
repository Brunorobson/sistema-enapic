<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                @if(Auth::check())
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                            Início
                        </x-nav-link>
                    </div>

                    @can('write_avaliantions')
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link href="{{ route('cadastro-avaliador') }}" :active="request()->routeIs('avaliador')">
                            Cadastrar Avaliador
                        </x-nav-link>
                    </div>
                    @endcan

                    @can('read_avaliantions')
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link href="{{ route('avaliadores') }}" :active="request()->routeIs('avaliadores')">
                            Avaliadores
                        </x-nav-link>
                    </div>
                    @endcan

                    @can('write_inscriptions')
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link href="{{ route('evento') }}" :active="request()->routeIs('evento')">
                            Cadastrar Eventos
                        </x-nav-link>
                    </div>
                    @endcan

                    @can('read_inscriptions')
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link href="{{ route('eventos') }}" :active="request()->routeIs('minha-inscricao')">
                            Eventos
                        </x-nav-link>
                    </div>
                    @endcan

                    @can('write_submissions')
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link href="{{ route('submissoes') }}" :active="request()->routeIs('submissoes')">
                            Submissões
                        </x-nav-link>
                    </div>
                    @endcan

                    @can('read_submissions')
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link href="{{ route('minha-submissao') }}" :active="request()->routeIs('minha-submissao')">
                            Minhas Submissões
                        </x-nav-link>
                    </div>
                    @endcan

                @else

                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                            Home
                        </x-nav-link>
                    </div>

                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link href="{{ route('event') }}" :active="request()->routeIs('event')">
                            O Evento
                        </x-nav-link>
                    </div>

                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link href="{{ route('inscription') }}" :active="request()->routeIs('inscription')">
                            Inscrição
                        </x-nav-link>
                    </div>
                @endif

            </div>



                <!-- Settings Dropdown -->
                @if(Auth::check())
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <div class="ml-3 relative">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                        <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                    </button>
                                @else
                                    <span class="inline-flex rounded-md">
                                        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                            {{ Auth::user()->name }}

                                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </span>
                                @endif
                            </x-slot>

                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Gerenciar conta') }}
                                </div>

                                <x-dropdown-link href="{{ route('profile.show') }}">
                                    {{ __('Perfil') }}
                                </x-dropdown-link>

                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </x-dropdown-link>
                                @endif

                                <div class="border-t border-gray-100"></div>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf

                                    <x-dropdown-link href="{{ route('logout') }}"
                                            @click.prevent="$root.submit();">
                                        {{ __('Sair') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                </div>
                @else

                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
                            Fazer Login
                        </x-nav-link>
                    </div>

                @endif



            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            @if(Auth::check())
                <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    Início
                </x-responsive-nav-link>

                <x-responsive-nav-link href="{{ route('minha-inscricao') }}" :active="request()->routeIs('minha-inscricao')">
                    Minha Inscrição
                </x-responsive-nav-link>

                <x-responsive-nav-link href="{{ route('submissoes') }}" :active="request()->routeIs('submissoes')">
                    Submissões
                </x-responsive-nav-link>

            @else
                <x-responsive-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                    Principal
                </x-responsive-nav-link>

                <x-responsive-nav-link href="{{ route('evento') }}" :active="request()->routeIs('evento')">
                    O evento
                </x-responsive-nav-link>

                <x-responsive-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
                    Fazer Login
                </x-responsive-nav-link>
            @endif

        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            @if(Auth::check())
                <div class="flex items-center px-4">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <div class="shrink-0 mr-3">
                            <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        </div>
                    @endif

                    <div>
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                </div>

                <div class="mt-3 space-y-1">
                    <!-- Account Management -->
                    <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                        {{ __('Perfil') }}
                    </x-responsive-nav-link>

                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                            {{ __('API Tokens') }}
                        </x-responsive-nav-link>
                    @endif

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf

                        <x-responsive-nav-link href="{{ route('logout') }}"
                                    @click.prevent="$root.submit();">
                            {{ __('Sair') }}
                        </x-responsive-nav-link>
                    </form>

                </div>
            @endif
        </div>
    </div>
</nav>

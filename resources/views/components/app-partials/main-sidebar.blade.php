<div class="main-sidebar">
    <div
        class="flex h-full w-full flex-col items-center border-r border-slate-150 bg-slate-150 dark:border-navy-700 dark:bg-navy-800">
        <!-- Application Logo -->
        <div class="flex pt-4">
            <a href="/">
                <img class="h-11 w-11 transition-transform duration-500 ease-in-out hover:rotate-[360deg]"
                    src="{{ asset('images/app-logo.png') }}" alt="logo" />
            </a>
        </div>

        <!--<div class="flex pt-4">
            <a href="/">
                <img class="h-11 w-11 transition-transform duration-500 ease-in-out dark:hidden"
                    src="{{ asset('images/app-logo.svg') }}" alt="logo" />

                <img class="hidden h-11 w-11 transition-transform duration-500 ease-in-out dark:block"
                src="{{ asset('images/app-logo-white.svg') }}" alt="logo" />
            </a>
        </div>-->

        <!-- Main Sections Links -->
        <div class="is-scrollbar-hidden flex grow flex-col space-y-4 overflow-y-auto pt-6">
            @foreach ($mainSidebar as $key => $item)
                <a href="{{ route($item['default_route']) }}"
                    class="{{ $routePrefix === $item['route_name'] ? 'text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-navy-600 bg-primary/10 dark:text-accent-light dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90' : 'hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25' }} flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200"
                    x-tooltip.placement.right="'{{ $item['title'] }}'">
                    @include('components.icon.' . $item['icon'])
                </a>
            @endforeach
        </div>

        <!-- Bottom Links -->
        <div class="flex flex-col items-center space-y-3 py-3">
            <!-- Profile -->
            <div x-data="{ showPop: false }" @click.outside="showPop = false" class="flex">
                <button @click="showPop = !showPop" class="avatar h-12 w-12">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <img class="h-12 w-12 border-spacing-2 rounded-full border-2 border-solid border-slate-400 object-cover dark:border-white"
                            src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    @else
                        <img class="h-12 w-12 rounded-full" src="{{ asset('images/100x100.png') }}" alt="avatar" />
                    @endif
                </button>
                <div x-show="showPop" class="fixed bottom-1 z-[1000] translate-x-14">
                    <div class="w-64 rounded-lg border border-slate-150 bg-white shadow-soft dark:border-navy-600 dark:bg-navy-700"
                        x-transition:enter="opacity-0 duration-200 ease-out text-slate-500 dark:text-navy-200"
                        x-transition:leave="opacity-100 ease-in" x-transition:leave-end="translate(0)">
                        <div class="flex items-center space-x-4 rounded-t-lg bg-slate-100 px-4 py-5 dark:bg-navy-800">
                            <div class="avatar h-14 w-14">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <img class="h-12 w-12 rounded-full object-cover"
                                        src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                @else
                                    <img class="h-12 w-12 rounded-full" src="{{ asset('images/100x100.png') }}"
                                        alt="avatar" />
                                @endif
                            </div>
                            <div>
                                <a href="#"
                                    class="text-base font-medium text-slate-700 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">
                                    {{ Auth::user()->name }}
                                </a>
                                <p class="text-xs text-slate-400 dark:text-navy-300">
                                    {{ Auth::user()->email }}
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col pb-5 pt-2">
                            <a href="{{ route('settings/profile') }}"
                                class="group flex items-center space-x-3 px-4 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-navy-600 dark:focus:bg-navy-600">
                                <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-warning text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>

                                <div>
                                    <h2
                                        class="font-medium text-slate-700 transition-colors group-hover:text-primary group-focus:text-primary dark:text-navy-100 dark:group-hover:text-accent-light dark:group-focus:text-accent-light">
                                        {{ __('Profile') }}
                                    </h2>
                                    <div class="line-clamp-1 text-xs text-slate-400 dark:text-navy-300">
                                        {{ __('Configurar seu perfil') }}
                                    </div>
                                </div>
                            </a>

                            <div class="mt-3 px-4">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <input id="user_id" name="user_id" class="hidden" value="{{ Auth::user()->id }}">
                                    <button type="submit"
                                        class="btn h-9 w-full space-x-2 bg-primary text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                        </svg>
                                        <span>{{ __('Log Out') }}</span>
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

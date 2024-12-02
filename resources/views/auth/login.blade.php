<x-guest-layout title="Login">
    <div class="fixed top-0 hidden p-6 lg:block lg:px-12">
        <a href="#" class="flex items-center space-x-2">
            <img class="h-12 w-12" src="{{ asset('images/app-logo.svg') }}" alt="logo" />
            <p class="dark:text-navy-100 text-xl font-semibold uppercase text-slate-700">
                {{ config('app.name') }}
            </p>
        </a>
    </div>
    <div class="hidden w-full place-items-center bg-slate-100 dark:bg-slate-800 lg:grid">
        <div class="w-full max-w-lg p-6">
            <img class="w-full" x-show="!$store.global.isDarkModeEnabled"
                src="{{ asset('images/illustrations/dashboard-check.svg') }}" alt="image" />
            <img class="w-full" x-show="$store.global.isDarkModeEnabled"
                src="{{ asset('images/illustrations/dashboard-check-dark.svg') }}" alt="image" />
        </div>
    </div>
    <main class="flex w-full flex-col items-center bg-white dark:bg-navy-700 lg:max-w-md">
        <div class="flex w-full max-w-sm grow flex-col justify-center p-5">
            <div class="mb-8 text-center">
                <img class="mx-auto h-16 w-16 lg:hidden" src="{{ asset('images/app-logo.svg') }}" alt="logo" />
                <div class="mt-4">
                    <h2 class="text-2xl font-semibold text-slate-600 dark:text-navy-100">
                        Bem Vindo
                    </h2>
                    <p class="text-slate-400 dark:text-navy-300">
                        Faça login para continuar
                    </p>
                </div>
            </div>
            @if (session('status'))
                <div class="mb-4 text-sm font-medium text-green-600 dark:text-green-400">
                    {{ session('status') }}
                </div>
            @endif
            <form class="mt-8" action="{{ route('login') }}" method="POST">
                @csrf
                <div>
                    <x-label class="block">
                        <span class="font-normal text-slate-500 dark:text-navy-300">{{ __('Email') }}:</span>
                        <span class="relative mt-1.5 flex">
                            <x-input id="email" class="peer pl-9" type="email" name="email" :value="old('email')"
                                required autofocus autocomplete="username" placeholder="{{ __('Email') }}" />
                            <span
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-colors duration-200"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </span>
                        </span>
                    </x-label>
                    @error('email')
                        <span class="text-tiny+ text-error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-4">
                    <x-label class="block">
                        <span class="font-normal text-slate-500 dark:text-navy-300">{{ __('Password') }}:</span>
                        <span class="relative mt-1.5 flex">
                            <x-input id="password" class="peer pl-9" placeholder="{{ __('Password') }}"
                                type="password" name="password" :value="old('password')" required
                                autocomplete="current-password" />
                            <span
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-colors duration-200"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </span>
                        </span>
                    </x-label>
                    @error('password')
                        <span class="text-tiny+ text-error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mt-4 flex items-center justify-between space-x-2">
                    <x-label for="remember_me" class="inline-flex items-center space-x-2">
                        <x-input.checkbox id="remember_me" name="remember" />
                        <span class="line-clamp-1">{{ __('Remember me') }}</span>
                    </x-label>

                    @if (Route::has('password.request'))
                        <a class="line-clamp-1 text-xs text-slate-400 transition-colors hover:text-slate-800 focus:text-slate-800 dark:text-navy-300 dark:hover:text-navy-100 dark:focus:text-navy-100"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
                <x-button.primary class="mt-10 w-full">
                    {{ __('Log in') }}
                </x-button.primary>
                @if (Route::has('register'))
                    <div class="mt-4 text-center text-xs+">
                        <p class="line-clamp-1">
                            <span>Não tem Conta?</span>

                            <a class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                                href="{{ route('register') }}">Criar Conta</a>
                        </p>
                    </div>
                @endif
            </form>
        </div>
    </main>
</x-guest-layout>

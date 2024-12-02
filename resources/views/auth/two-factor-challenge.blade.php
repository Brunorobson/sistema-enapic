<x-guest-layout title="Login v1">
    <main class="grid w-full grow grid-cols-1 place-items-center">
        <div class="w-full max-w-[30rem] p-4 sm:px-5">
            <div class="text-center">
                <img class="mx-auto h-16 w-16" src="{{ asset('images/app-logo.svg') }}" alt="logo" />
                <div class="mt-4">
                    <h2 class="dark:text-navy-100 text-2xl font-semibold text-slate-600">
                        Entrar
                    </h2>
                    <p class="dark:text-navy-300 text-slate-400">
                        Digite o Código de Autenticação
                    </p>
                </div>
            </div>
            <div class="card mt-5 rounded-lg p-5 lg:p-7">
                <div x-data="{ recovery: false }">
                    <div class="dark:text-navy-300 mb-4 text-sm text-slate-500" x-show="! recovery">
                        {{ __('Please confirm access to your account by entering the authentication code provided by your authenticator application.') }}
                    </div>

                    <div class="dark:text-navy-300 mb-4 text-sm text-slate-500" x-cloak x-show="recovery">
                        {{ __('Please confirm access to your account by entering one of your emergency recovery codes.') }}
                    </div>

                    <x-validation-errors class="mb-4" />

                    <form method="POST" action="{{ route('two-factor.login') }}">
                        @csrf

                        <div class="mt-4" x-show="! recovery">
                            <div>
                                <x-label class="block">
                                    <span
                                        class="dark:text-navy-300 font-normal text-slate-500">{{ __('Code') }}:</span>
                                    <span class="relative mt-1.5 flex">
                                        <x-input id="code" class="peer pl-9 focus:z-10"
                                            placeholder="{{ __('Code') }}" type="text" inputmode="numeric"
                                            name="code" autofocus x-ref="code" autocomplete="one-time-code" />
                                        <span
                                            class="peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-5 w-5 transition-colors duration-200" fill="none"
                                                viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor"
                                                className="w-6 h-6">
                                                <path strokeLinecap="round" strokeLinejoin="round"
                                                    d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
                                            </svg>

                                        </span>
                                    </span>
                                </x-label>
                                @error('code')
                                    <span class="text-tiny+ text-error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-4" x-cloak x-show="recovery">
                            <div>
                                <x-label class="block">
                                    <span
                                        class="dark:text-navy-300 font-normal text-slate-500">{{ __('Recovery Code') }}:</span>
                                    <span class="relative mt-1.5 flex">
                                        <x-input id="recovery_code" class="peer pl-9 focus:z-10"
                                            placeholder="{{ __('Recovery Code') }}" type="text" name="recovery_code"
                                            x-ref="recovery_code" autocomplete="one-time-code" />
                                        <span
                                            class="peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-5 w-5 transition-colors duration-200" fill="none"
                                                viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor"
                                                className="w-6 h-6">
                                                <path strokeLinecap="round" strokeLinejoin="round"
                                                    d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
                                            </svg>
                                        </span>
                                    </span>
                                </x-label>
                                @error('crecovery_codeode')
                                    <span class="text-tiny+ text-error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-4 flex items-center justify-end">
                            <button type="button"
                                class="cursor-pointer rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:text-gray-400 dark:hover:text-gray-100 dark:focus:ring-offset-gray-800"
                                x-show="! recovery"
                                x-on:click="
                                        recovery = true;
                                        $nextTick(() => { $refs.recovery_code.focus() })
                                    ">
                                {{ __('Use a recovery code') }}
                            </button>

                            <button type="button"
                                class="cursor-pointer rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:text-gray-400 dark:hover:text-gray-100 dark:focus:ring-offset-gray-800"
                                x-cloak x-show="recovery"
                                x-on:click="
                                        recovery = false;
                                        $nextTick(() => { $refs.code.focus() })
                                    ">
                                {{ __('Use an authentication code') }}
                            </button>

                            <x-button.primary class="ml-4">
                                {{ __('Log in') }}
                            </x-button.primary>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</x-guest-layout>

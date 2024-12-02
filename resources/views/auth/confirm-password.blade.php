<x-guest-layout title="Login v1">
    <main class="grid w-full grow grid-cols-1 place-items-center">
        <div class="w-full max-w-[30rem] p-4 sm:px-5">
            <div class="text-center">
                <img class="mx-auto h-16 w-16" src="{{ asset('images/app-logo.svg') }}" alt="logo" />
                <div class="mt-4">
                    <h2 class="dark:text-navy-100 text-2xl font-semibold text-slate-600">
                        Confirmação de Senha
                    </h2>
                    <p class="dark:text-navy-300 text-slate-400">
                        Confirme sua Senha Antes de Continuar
                    </p>
                </div>
            </div>
            <div class="card mt-5 rounded-lg p-5 lg:p-7">
                <div class="dark:text-navy-300 mb-4 text-sm text-slate-500">
                    {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                </div>

                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf

                    <div>
                        <x-label class="block">
                            <span class="dark:text-navy-300 font-normal text-slate-500">{{ __('Password') }}:</span>
                            <span class="relative mt-1.5 flex">
                                <x-input id="password" class="peer pl-9" placeholder="{{ __('Password') }}"
                                    type="password" name="password" :value="old('password')" required
                                    autocomplete="current-password" />
                                <span
                                    class="peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5 transition-colors duration-200" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
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

                    <div class="flex items-center justify-end">
                        <x-button.primary class="mt-10 w-full">
                            {{ __('Confirm') }}
                        </x-button.primary>
                    </div>
                </form>
            </div>
        </div>
    </main>
</x-guest-layout>

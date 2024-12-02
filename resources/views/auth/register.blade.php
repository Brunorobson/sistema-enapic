<x-base-layout title="Register">
    <main class="grid w-full grow grid-cols-1 place-items-center bg-slate-100">
        <div class="card mt-5 flex w-full max-w-3xl grow flex-col justify-center rounded-lg p-5 lg:p-7">
            <div class="text-center">
                <img class="mx-auto h-16 w-16 lg:hidden" src="{{ asset('images/app-logo.svg') }}" alt="logo" />
                <div class="mt-4">
                    <h2 class="text-2xl font-semibold text-slate-600 dark:text-navy-100">
                        Bem Vindo ao {{ config('app.name') }}
                    </h2>
                    <p class="text-slate-400 dark:text-navy-300">
                        Por favor, inscreva-se para continuar
                    </p>
                </div>
            </div>

            <form class="mt-4" action="{{ route('register-user') }}" method="POST">
                @csrf
                <div class="space-y-4">
                    <div>
                        <x-label class="block">
                            <span class="font-normal text-slate-500 dark:text-navy-300">{{ 'Qual a sua instituição?' }}:</span>
                            <div class="mt-2">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="type" value="UB" wire:model="type"
                                        onclick="document.getElementById('institution').style.display='none';" required checked>
                                    <span class="ml-2">Unibalsas</span>
                                </label>
                                <label class="ml-4 inline-flex items-center">
                                    <input type="radio" name="type" value="PE" wire:model="type"
                                        onclick="document.getElementById('institution').style.display='block';" required>
                                    <span class="ml-2">Outra</span>
                                </label>
                            </div>
                        </x-label>                        
                        @error('type')
                            <span class="text-tiny+ text-error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <x-label class="block" id="institution" style="display: none;">
                            <span
                                class="font-normal text-slate-500 dark:text-navy-300">{{ 'Nome da Instituição' }}:</span>
                            <span class="relative mt-1.5 flex">
                                <x-input id="institution" class="peer pl-9" type="text" name="institution"
                                    wire:model="institution" :value="old('institution')" autofocus autocomplete="institution"
                                    placeholder="{{ 'Nome da Instituição' }}" />
                                <span
                                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                    <i class="fas fa-university"></i>
                                </span>
                            </span>
                        </x-label>
                        @error('institution')
                            <span class="text-tiny+ text-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div class="flex flex-col gap-1.5">
                            <x-label class="block">
                                <span
                                    class="font-normal text-slate-500 dark:text-navy-300">{{ 'Nome Completo' }}:</span>
                                <span class="relative mt-1.5 flex">
                                    <x-input id="name" class="peer pl-9" type="text" name="name"
                                        :value="old('name')" required autofocus autocomplete="name"
                                        placeholder="{{ 'Nome Completo' }}" />
                                    <span
                                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5 transition-colors duration-200" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                            </path>
                                        </svg>
                                    </span>
                                </span>
                            </x-label>
                            @error('name')
                                <span class="text-tiny+ text-error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <x-label class="block">
                                <span class="font-normal text-slate-500 dark:text-navy-300">{{ __('CPF') }}:</span>
                                <span class="relative mt-1.5 flex">
                                    <x-input
                                        x-input-mask="{
                                    numericOnly:true,
                                    delimiters: ['.', '.', '-'],
                                    blocks: [3, 3, 3, 2],
                                }"
                                        id="cpf" class="peer pl-9" placeholder="{{ __('CPF') }}"
                                        type="cpf" name="cpf" :value="old('cpf')" required
                                        autocomplete="username" />
                                    <span
                                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5 transition-colors duration-200" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                            </path>
                                        </svg>
                                    </span>
                                </span>
                            </x-label>
                            @error('cpf')
                                <span class="text-tiny+ text-error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <x-label class="block">
                            <span class="font-normal text-slate-500 dark:text-navy-300">{{ __('Email') }}:</span>
                            <span class="relative mt-1.5 flex">
                                <x-input id="email" class="peer pl-9" placeholder="{{ __('Email') }}"
                                    type="email" name="email" :value="old('email')" required autocomplete="username" />
                                <span
                                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5 transition-colors duration-200" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
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
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div class="flex flex-col gap-1.5">
                            <x-label class="block">
                                <span
                                    class="font-normal text-slate-500 dark:text-navy-300">{{ __('Password') }}:</span>
                                <span class="relative mt-1.5 flex">
                                    <x-input id="password" class="peer pl-9" placeholder="{{ __('Password') }}"
                                        type="password" name="password" required autocomplete="new-password" />
                                    <span
                                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
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
                        <div class="flex flex-col gap-1.5">
                            <x-label class="block">
                                <span
                                    class="font-normal text-slate-500 dark:text-navy-300">{{ __('Confirm Password') }}:</span>
                                <span class="relative mt-1.5 flex">
                                    <x-input id="password_confirmation" class="peer pl-9"
                                        placeholder="{{ __('Confirm Password') }}" type="password"
                                        name="password_confirmation" required autocomplete="new-password" />
                                    <span
                                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5 transition-colors duration-200" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                        </svg>
                                    </span>
                                </span>
                            </x-label>
                            @error('password_confirmation')
                                <span class="text-tiny+ text-error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-label for="terms">
                                <div class="flex items-center">
                                    <x-input.checkbox name="terms" id="terms" required />

                                    <div class="my-5 ml-2 text-xs text-slate-400 dark:text-navy-300">
                                        <div style="display: flex; align-items: center; flex-wrap: nowrap; gap: 4px;">
                                            {!! __('Eu concordo com os :terms_of_service e :privacy_policy', [
                                                'terms_of_service' =>
                                                    '<a target="_blank" href="' .
                                                    route('terms.show') .
                                                    '" class="underline text-xs dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md  focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">' .
                                                    'Termos de Serviço' .
                                                    '</a>',
                                                'privacy_policy' =>
                                                    '<a target="_blank" href="' .
                                                    route('policy.show') .
                                                    '" class="underline text-xs dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">' .
                                                    'Política de Privacidade' .
                                                    '</a>',
                                            ]) !!}
                                        </div>
                                    </div>
                                </div>
                            </x-label>
                        </div>
                    @endif
                </div>
                <x-button.primary type="submit" class="mt-10 w-full">
                    {{ __('Register') }}
                </x-button.primary>
            </form>
            <div class="mt-4 text-center text-xs+">
                <p class="line-clamp-1">
                    <span>{{ __('Already registered?') }}</span>
                    <a class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                        href="{{ route('login') }}">{{ __('Log in') }}</a>
                </p>
            </div>
        </div>
    </main>
</x-base-layout>

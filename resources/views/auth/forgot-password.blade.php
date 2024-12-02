<x-guest-layout title="Login v1">
    <main class="grid w-full grow grid-cols-1 place-items-center">
        <div class="w-full max-w-[30rem] p-4 sm:px-5">
            <div class="text-center">
                <img class="mx-auto h-16 w-16" src="{{ asset('images/app-logo.svg') }}" alt="logo" />
                <div class="mt-4">
                    <h2 class="dark:text-navy-100 text-2xl font-semibold text-slate-600">
                        Recuperação de Senha
                    </h2>
                    <p class="dark:text-navy-300 text-slate-400">
                        Recupere sua senha através do e-mail
                    </p>
                </div>
            </div>
            <div class="card mt-5 rounded-lg p-5 lg:p-7">
                <div class="dark:text-navy-300 mb-4 text-sm text-slate-500">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>

                @if (session('status'))
                    <div class="mb-4 text-sm font-medium text-green-600 dark:text-green-400">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div>
                        <x-label class="block">
                            <span class="dark:text-navy-300 font-normal text-slate-500">{{ __('Email') }}:</span>
                            <span class="relative mt-1.5 flex">
                                <x-input id="email" class="peer pl-9 focus:z-10" placeholder="{{ __('Email') }}"
                                    type="email" name="email" :value="old('email')" required autofocus
                                    autocomplete="username" />
                                <span
                                    class="peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400">
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

                    <div class="flex items-center justify-end">
                        <x-button.primary class="mt-10 w-full">
                            {{ __('Email Password Reset Link') }}
                        </x-button.primary>
                    </div>
                </form>
            </div>
        </div>
    </main>
</x-guest-layout>

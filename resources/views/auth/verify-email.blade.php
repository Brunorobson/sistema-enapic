<x-guest-layout title="Login v1">
    <main class="grid w-full grow grid-cols-1 place-items-center">
        <div class="w-full max-w-[32rem] p-4 sm:px-5">
            <div class="text-center">
                <img class="mx-auto h-16 w-16" src="{{ asset('images/app-logo.svg') }}" alt="logo" />
                <div class="mt-4">
                    <h2 class="text-2xl font-semibold text-slate-600 dark:text-navy-100">
                        Verificação de E-mail
                    </h2>
                    <p class="text-slate-400 dark:text-navy-300">
                        Verifique seu e-mail para continuar
                    </p>
                </div>
            </div>
            <div class="card mt-5 rounded-lg p-5 lg:p-7">
                <div class="mb-4 text-sm text-slate-500 dark:text-navy-300">
                    {{ __('Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                </div>

                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 text-sm font-medium text-green-600 dark:text-green-400">
                        {{ __('A new verification link has been sent to the email address you provided in your profile settings.') }}
                    </div>
                @endif

                <div class="mt-4 flex items-center justify-between">
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf

                        <div>
                            <x-button.primary type="submit" class="w-full">
                                {{ __('Resend Verification Email') }}
                            </x-button.primary>
                        </div>
                    </form>

                    <div>
                        <a href="{{ route('profile.show') }}"
                            class="rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:text-gray-400 dark:hover:text-gray-100 dark:focus:ring-offset-gray-800">
                            {{ __('Edit Profile') }}</a>

                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <input id="user_id" name="user_id" class="hidden" value="{{ Auth::user()->id }}">
                            <button type="submit"
                                class="ml-2 rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:text-gray-400 dark:hover:text-gray-100 dark:focus:ring-offset-gray-800">
                                {{ __('Log Out') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-guest-layout>

<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">


                <div class="bg-white my-5 w-full flex flex-col space-y-4 md:flex-row md:space-x-4 md:space-y-0 p-4">
                    <main class="md:w-3/5 lg:w-3/5 p-2">

                        <x-validation-errors class="mb-4" />

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mt-4">
                                <p class="font-bold">FORMULÁRIO DE INSCRIÇÃO</p>
                                <p class="font-light text-xs">Preencha todos os campos obrigatórios. (*)</p>
                            </div>

                            <div class="mt-4">
                                <x-label for="name" value="{{ __('Nome') }}" />
                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            </div>

                            <div class="mt-4">
                                <x-label for="cpf" value="{{ __('CPF') }}" />
                                <x-input id="cpf" class="block mt-1 w-full" type="text" placeholder="Só números" maxlength="11" name="cpf" :value="old('cpf')" required autocomplete="no"/>
                            </div>

                            <div class="mt-4">
                                <x-label for="email" value="{{ __('E-mail') }}" />
                                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                            </div>

                            <div class="mt-4">
                                <x-label for="password" value="{{ __('Senha') }}" />
                                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                            </div>

                            <div class="mt-4">
                                <x-label for="password_confirmation" value="{{ __('Confirme a senha') }}" />
                                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                            </div>

                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mt-4">
                                    <x-label for="terms">
                                        <div class="flex items-center">
                                            <x-checkbox name="terms" id="terms"/>

                                            <div class="ml-2">
                                                {!! __('Concordo com a Política de Privacidade', [
                                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                ]) !!}
                                            </div>
                                        </div>
                                    </x-label>
                                </div>
                            @endif

                            <div class="flex items-center justify-end mt-4">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>

                                <x-button class="ml-4">
                                    {{ __('Cadastre-se') }}
                                </x-button>
                            </div>
                        </form>


                    </main>
                    <aside class="md:w-2/5 lg:w-2/5 p-2">
                        <div class="shadow-xl p-2">
                            <p class="font-bold py-3">Local do evento</p>
                            <p class="font-light text-base">UNIBALSAS - Faculdade de Balsas</p>
                            <p class="font-light text-base">BR 230 - Km 05, Balsas-MA, CEP: 65800-000</p>
                        </div>
                        <div class="shadow-xl p-2 mt-6">
                            <p class="font-bold py-3">Dúvidas?</p>
                            <p class="font-light text-base">Entre em contato conosco pelo email</p>
                            <p class="font-light text-base">enapic@unibalsas.edu.br</p>
                        </div>

                    </aside>
                </div>



            </div>
        </div>
    <div>



</x-app-layout>

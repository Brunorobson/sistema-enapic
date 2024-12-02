<x-form title="Novo Usuário">
    <x-form.card>

        <x-form.row cols="12">
            <x-form.field span="4" label="Foto">
                <!-- Profile Photo -->
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div x-data="{ photoName: null, photoPreview: null }">
                        <!-- Profile Photo File Input -->
                        <input type="file" class="hidden" wire:model.live="photo" x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                        <!-- Current Profile Photo -->
                        <div class="mt-2" x-show="! photoPreview">
                            <img class="h-20 w-20 rounded-full object-cover" alt="Foto de Perfil"
                                src="/images/placeholders/user.svg">
                        </div>

                        <!-- New Profile Photo Preview -->
                        <div class="mt-2" x-show="photoPreview" style="display: none;">
                            <span class="block h-20 w-20 rounded-full bg-cover bg-center bg-no-repeat"
                                x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                            </span>
                        </div>

                        <x-button.secondary class="mr-2 mt-2" type="button" x-on:click.prevent="$refs.photo.click()">
                            {{ __('Select A New Photo') }}
                        </x-button.secondary>

                        <x-button.secondary x-show="photoPreview" type="button" class="mt-2"
                            x-on:click="photoPreview = null; $wire.set('photo', null)">
                            {{ __('Remove Photo') }}
                        </x-button.secondary>


                        <x-input.error for="photo" class="mt-2" />
                    </div>
                @endif
            </x-form.field>
        </x-form.row>

        <x-form.row cols="3">
            <x-form.field label="Nome">
                <x-input type="text" wire:model.live="name" autocomplete="name" />
                <x-input.error for="name" class="mt-2" />
            </x-form.field>

            <x-form.field label="CPF">
                <x-input
                    x-input-mask="{
                        numericOnly:true,
                        delimiters: ['.', '.', '-'],
                        blocks: [3, 3, 3, 2],
                    }"
                    type="cpf" wire:model.live="cpf" />
                <x-input.error for="cpf" class="mt-2" />
            </x-form.field>


            <x-form.field label="E-mail">
                <x-input wire:model.live="email" autocomplete="username" />
                <x-input.error for="email" class="mt-2" />
            </x-form.field>
        </x-form.row>

        <x-form.row cols="2">
            <x-form.field label="Nova Senha">
                <x-input.password wire:model.live="password" autocomplete="new-password" />
                <x-input.error for="password" class="mt-2" />
            </x-form.field>

            <x-form.field label="Confirmação de Senha">
                <x-input.password wire:model.live="password_confirmation" autocomplete="new-password" />
                <x-input.error for="password_confirmation" class="mt-2" />
            </x-form.field>
        </x-form.row>

        <x-form.row>
            <x-form.field wire:ignore label="Funções">
                {{-- <x-input.multiselect id="selectedRoles" :options="$roles" wire:model.live="selectedRoles" /> --}}
                <select x-init="$el._tom = new Tom($el), {
                    plugins: {
                        'clear_button': {
                            'title': 'Remove all selected options',
                        }
                    },
                    persist: false,
                    create: true
                }" class="mt-1.5 w-full" multiple placeholder="Selecione..."
                    autocomplete="off" id="selectedRoles" wire:model.live="selectedRoles">
                    @foreach ($roles as $key => $role)
                        <option value="{{ $key }}" {{ in_array($key, $selectedRoles) ? 'selected' : '' }}>
                            {{ $role }}
                        </option>
                    @endforeach
                </select>
            </x-form.field>
        </x-form.row>
        <x-input.error for="selectedRoles" class="mt-2" />

        <x-slot:actions>
            <x-link.default href="{{ route('settings/users') }}">Cancelar</x-link.default>
            <x-button.primary><x-fas-save class="mr-1 w-5" /> SALVAR</x-button.primary>
        </x-slot:actions>
    </x-form.card>
</x-form>

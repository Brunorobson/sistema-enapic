<x-form title="Edição Tipo de Usuário">
    <x-slot:headerActions>
        <div class="flex justify-center space-x-2">
            <x-link.default href="{{ route('settings/roles') }}">Cancelar</x-link.default>
            <x-button.primary><x-fas-save class="mr-1 w-4" /> Salvar</x-button.primary>
        </div>
    </x-slot:headerActions>
    <x-form.card>
        <x-label class="block">
            <span>Nome</span>
            <span class="relative mt-1.5 flex">
                <x-input id="name" placeholder="Nome" type="text" wire:model="name" />
            </span>
        </x-label>
        <x-input.error for="name" />

        <div class="my-4 h-px bg-slate-200 dark:bg-navy-500"></div>
        <h3 class="mb-1 mt-4 text-base font-medium text-slate-600 dark:text-navy-100">
            Permissões
        </h3>
        <x-input.error for="permissions" />

        <div id="module-permissions" name="module-permissions" class="mt-4" x-data="{ colorful: true }">

            @foreach ($modules as $mindex => $module)
                <div class="mb-4 grid grid-cols-12 gap-6 rounded border p-3"
                    :class="{ 'bg-white': !colorful, 'bg-slate-100': colorful }" x-effect="colorful= !colorful">
                    <div class="col-span-12 flex gap-2 py-2 lg:col-span-4 2xl:col-span-3">
                        <div class="font-medium">{{ $module->name }}</div>
                    </div>
                    <div class="col-span-12 flex justify-start gap-2 lg:col-span-8 lg:justify-end 2xl:col-span-9">
                        @foreach ($module->permissions as $pindex => $permission)
                            <label class="inline-flex items-center space-x-2">
                                <input wire:model="permissions" value="{{ $permission->id }}"
                                    class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-accent dark:checked:before:bg-white"
                                    type="checkbox" />
                                <span>{{ $permission->name }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>
            @endforeach

        </div>

        <x-slot:actions>
            <x-link.default href="{{ route('settings/roles') }}">Cancelar</x-link.default>
            <x-button.primary><x-fas-save class="mr-1 w-4" /> Salvar</x-button.primary>
        </x-slot:actions>
    </x-form.card>
</x-form>

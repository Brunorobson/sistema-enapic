<x-modal id="event-modal" maxWidth="2xl" wire:model.live="showModal">
    <x-form.card title="Eventos">

        <x-form.row cols="3">
            <x-form.field span="2" label="Titulo do evento">
                <x-input wire:model="form.name" :value="old('form.name')" />
                <x-input.error for="form.name" class="mt-2" />
            </x-form.field>

            <x-form.field span="1" label="Ativo">
                <div class="mt-3 inline-flex items-center space-x-2">
                    <x-input.switch wire:model="form.active" />
                    <p class="line-clamp-1">Sim</p>
                </div>
            </x-form.field>
        </x-form.row>

        <x-form.row cols="1">
            <x-form.field span="2" label="Descrição do evento">
                <x-input wire:model="form.description" :value="old('form.description')" />
                <x-input.error for="form.description" class="mt-2" />
            </x-form.field>
        </x-form.row>
        <x-slot:actions>
            <x-link.default wire:click="$set('showModal', false)" wire:loading.attr="disabled">Cancelar</x-link.default>
            <x-link.primary wire:click="store" wire:loading.attr="disabled"><x-fas-save class="mr-1 w-4" />
                Salvar</x-link.primary>
        </x-slot:actions>
    </x-form.card>
</x-modal>

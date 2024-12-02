<x-modal id="inscription-modal" maxWidth="2xl" wire:model.live="showModal">
    <x-form.card title="Inscrição">

        <x-form.row cols="1">
            <x-form.field span="1" label="Participante">
                <x-input value="{{ $form->getUserName($form->user_id) }}" disabled />
                <x-input.error for="form.user_id" class="mt-2" />
            </x-form.field>
        </x-form.row>

        <x-form.row cols="2">
            <x-form.field span="1" label="Evento *">
                <x-input.select :options="$form->listEvents" wire:model="form.event_id"
                    selectedOption="{{ old('form.event_id') ?? '' }}" />
                <x-input.error for="form.event_id" class="mt-2" />
            </x-form.field>

            <x-form.field span="1" label="Status *">
                <x-input.select :options="$form->statusOptions" wire:model="form.status"
                    selectedOption="{{ old('form.status') ?? '' }}" />
                <x-input.error for="form.status" class="mt-2" />
            </x-form.field>
        </x-form.row>

        <x-slot:actions>
            <x-link.default wire:click="$set('showModal', false)" wire:loading.attr="disabled">Cancelar</x-link.default>
            <x-link.primary wire:click="store" wire:loading.attr="disabled">
                <x-fas-save class="mr-1 w-4" /> Salvar
            </x-link.primary>
        </x-slot:actions>
    </x-form.card>
</x-modal>

<!-- BEGIN: Avaliador Confirmation Modal -->
<x-confirmation-modal wire:model.live="showModalEvaluator" maxWidth="md">
    <x-slot name="title">
        Tornar Avaliador
    </x-slot>

    <x-slot name="content">
        Você tem certeza que deseja tornar essa pessoa um Avaliador?
    </x-slot>

    <x-slot name="footer">
        <x-link.default class="min-w-[7rem]" wire:click="$toggle('showModalEvaluator')" wire:loading.attr="disabled">
            Cancelar
        </x-link.default>

        <x-link.error class="ml-3 min-w-[7rem]" wire:click="confirmEvaluator" wire:loading.attr="disabled">
            Confirmar
        </x-link.error>
    </x-slot>
</x-confirmation-modal>
<!-- END: Avaliador Confirmation Modal -->

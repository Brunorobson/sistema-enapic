<x-form title="Avaliação" enctype="multipart/form-data">
    <div class="mb-8">
        <x-form.card>
            <x-form.row cols="5">
                <x-form.field span="1" label="Avaliador">
                    <x-input wire:model="form.user_name" disabled />
                    <x-input.error for="form.user_id" class="mt-2" />
                </x-form.field>

                <x-form.field span="1" label="Título Submissão">
                    <x-input wire:model="form.submission_title" disabled />
                    <x-input.error for="form.submission_id" class="mt-2" />
                </x-form.field>

                <x-form.field span="1" label="Nota">
                    <x-input placeholder="" :value="$form->average" disabled />
                </x-form.field>

                <x-form.field label="Status">
                    <x-input.select :options="$form->statusOptions" placeholder wire:model="form.status"
                        selectedOption="old('form.status') ?? ''" />
                    <x-input.error for="form.status" class="mt-2" />
                </x-form.field>

                <x-form.field span="1" label="Visualizar Submissão">
                    @if ($form->file_new)
                        <a href="{{ Storage::url($form->file_new) }}" target="_blank" class="ml-2 text-blue-500">
                            <i class="fa-solid fa-external-link fa-lg"></i>
                        </a>
                    @else
                        <a href="{{ Storage::url($form->file) }}" target="_blank" class="ml-2 text-blue-500">
                            <i class="fa-solid fa-external-link fa-lg"></i>
                        </a>
                    @endif
                </x-form.field>
            </x-form.row>
        </x-form.card>
    </div>

    <p class="ml-4 mb-2">
        Por favor, atribua uma nota de 0 a 5 para cada critério avaliado.
    </p>

    <div>
        <x-input.error for="form.items" class="my-2 text-lg" />
        <x-table>
            <x-slot name="head">
                <x-table.head.row>
                    <x-table.head.col class="w-max">Critério</x-table.head.col>
                    <x-table.head.col class="w-40">Nota</x-table.head.col>
                </x-table.head.row>
            </x-slot>
            <x-slot name="body">
                @forelse ($this->form->criterias as $criteria)
                    <x-table.body.row>
                        <x-table.body.col class="font-medium text-slate-700 dark:text-navy-100 lg:px-5">
                            {{ $criteria['name'] }}
                        </x-table.body.col>
                        <x-table.body.col class="w-20">
                            <x-input type="number" wire:model.defer="form.items.{{ $criteria['id'] }}" />
                            <x-input.error for="form.items.{{ $criteria['id'] }}" class="mt-2" />
                        </x-table.body.col>
                    </x-table.body.row>
                @empty
                    <x-table.body.empty />
                @endforelse
            </x-slot>


        </x-table>

        <x-form.card title="OBSERVAÇÕES" class="mt-5">
            <x-slot:headerActions>
            </x-slot:headerActions>
            <x-form.row>
                <x-form.field label="">
                    <x-input.textarea wire:model="form.comment" :value="old('form.comment')" />
                    <x-input.error for="form.comment" class="mt-2" />
                </x-form.field>
            </x-form.row>
        </x-form.card>
    </div>
    <x-slot name="actions">
        <x-link.default href="{{ route('dashboard/avaliations') }}">Cancelar</x-link.default>
        <x-button.primary><x-fas-save class="mr-1 w-5" /> Salvar</x-button.primary>
    </x-slot>
</x-form>

<x-form title="{{ !auth()->user()->hasRole(5) ? 'Submissões' : 'Minhas Submissões' }}" wire:submit.prevent="store"
    enctype="multipart/form-data">

    <x-form.card>
        <div class="flex flex-col-reverse xl:flex-row">
            <div class="mt-6 flex-1 xl:mt-0">
                <x-form.row cols="2">
                    <x-form.field label="Evento *">
                        <x-input.select :options="$form->events" wire:model.defer="form.event_id"
                            selectedOption="{{ old('form.event_id', $form->event_id) }}" disabled />
                        <x-input.error for="form.event_id" class="mt-2" />
                    </x-form.field>

                    <x-form.field label="Eixo *">
                        <x-input.select :options="$form->axles" placeholder wire:model="form.axle_id"
                            selectedOption="{{ old('form.axle_id') ?? '' }}" disabled />
                        <x-input.error for="form.axle_id" class="mt-2" />
                    </x-form.field>
                </x-form.row>

                <x-form.row>
                    @if (!auth()->user()->hasRole(5))
                        <x-form.field label="Título *">
                            <x-input type="text" wire:model="form.title" :value="old('form.title')" disabled />
                            <x-input.error for="form.title" class="mt-2" />
                        </x-form.field>
                    @else
                        @if ($form->object->title)
                            <x-form.field label="Título *">
                                <x-input type="text" wire:model="form.title" :value="old('form.title')" disabled />
                                <x-input.error for="form.title" class="mt-2" />
                            </x-form.field>
                        @else
                            <x-form.field label="Título *">
                                <x-input type="text" wire:model="form.title" :value="old('form.title')" />
                                <x-input.error for="form.title" class="mt-2" />
                            </x-form.field>
                        @endif

                    @endif
                </x-form.row>

                <x-form.row>
                    @if (!auth()->user()->hasRole(5))
                        <x-form.field label="Resumo *">
                            <x-input.textarea rows="4" placeholder="Digite aqui..." wire:model="form.resume"
                                :value="old('form.resume')" disabled />
                            <x-input.error for="form.resume" class="mt-2" />
                        </x-form.field>
                    @else
                        @if ($form->object->title)
                            <x-form.field label="Resumo *">
                                <x-input.textarea rows="4" placeholder="Digite aqui..." wire:model="form.resume"
                                    :value="old('form.resume')" disabled />
                                <x-input.error for="form.resume" class="mt-2" />
                            </x-form.field>
                        @else
                            <x-form.field label="Resumo *">
                                <x-input.textarea rows="4" placeholder="Digite aqui..." wire:model="form.resume"
                                    :value="old('form.resume')" />
                                <x-input.error for="form.resume" class="mt-2" />
                            </x-form.field>
                        @endif
                    @endif
                </x-form.row>

                <x-form.row cols="2">
                    @if (!$form->object->file_new)
                        <x-form.field label="Arquivo PDF">
                            <a href="{{ Storage::url($form->object->file) }}" target="_blank"
                                class="text-blue-500 ml-2 ">
                                <i class="fa-solid fa-external-link fa-lg"></i>
                            </a>
                        </x-form.field>
                    @else
                        @if ($status == 'AC')
                            <x-form.field label="Arquivo PDF com Alterações">
                                <a href="{{ Storage::url($form->object->file_new) }}" target="_blank"
                                    class="text-blue-500 ml-2 w-40 text-center">
                                    <i class="fa-solid fa-external-link fa-lg"></i>
                                </a>
                            </x-form.field>
                        @endif

                    @endif
                </x-form.row>

                @if (!auth()->user()->hasRole(5))
                    <x-form.row cols="2">
                        <x-form.field wire:ignore label="Avaliadores">
                            <livewire:components.input-select :options="$form->selected_avaliations" wire:model="form.avaliation"
                                :multiple="true" placeholder="Selecione" :key="implode('_', array_keys($form->selected_avaliations))" />
                            <x-input.error for="form.avaliation" class="mt-2" />
                        </x-form.field>

                        <x-form.field label="Status">
                            <x-input.select :options="$form->statusOptions" placeholder wire:model="form.status"
                                selectedOption="old('form.status') ?? ''" />
                            <x-input.error for="form.status" class="mt-2" />
                        </x-form.field>
                    </x-form.row>
                @endif

            </div>
        </div>
    </x-form.card>
    @if ($status == 'AP' || $status == 'AC' || $status == 'RE')
        <x-form.card title="OBSERVAÇÕES" class="mt-5">
            <x-slot:headerActions>
            </x-slot:headerActions>
            @foreach ($form->object->avaliations as $avaliation)
                @if (!empty($avaliation->comment))
                    <div class="mb-4">
                        <h4 class="font-semibold">{{ $avaliation->user->name }}</h4>
                        <textarea class="text-gray-700 whitespace-pre-wrap w-full rounded-lg p-2 bg-gray-100"
                            style="border: none; outline: none;" rows="4" disabled>{{ $avaliation->comment }}</textarea>

                    </div>
                @endif
            @endforeach
        </x-form.card>

    @endif

    <x-slot name="actions">
        <x-link.default href="{{ route('dashboard/submissions') }}">Voltar</x-link.default>
        @if (!auth()->user()->hasRole(5))
            <x-link.default href="{{ route('dashboard/submission/edit', $object->id) }}">Editar</x-link.default>
        @endif

    </x-slot>

</x-form>

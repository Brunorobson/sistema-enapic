<x-form title="{{ $role->name }}">
    <x-slot:headerActions>
        <div class="flex justify-center space-x-2">
            <x-link.default href="{{ route('settings/roles') }}">Cancelar</x-link.default>
            <x-link.primary href="{{ route('settings/roles/edit', $role->uuid) }}">Editar</x-link.primary>
        </div>
    </x-slot:headerActions>
    <x-form.card>
        <x-slot:title>Permissões</x-slot:title>


        <div id="module-permissions" name="module-permissions" class="mt-4">

            @foreach ($modules as $mindex => $module)
                <div class="mb-4 grid grid-cols-12 gap-6 rounded border p-3">
                    <div class="col-span-12 flex gap-2 py-2 lg:col-span-4 2xl:col-span-3">
                        <div class="font-medium">{{ $module->name }}</div>
                    </div>
                    <div class="col-span-12 flex justify-start gap-4 lg:col-span-8 lg:justify-end 2xl:col-span-9">
                        @foreach ($module->permissions as $pindex => $permission)
                            <label class="inline-flex items-center space-x-2">
                                <span>{{ $permission->name }}</span>
                                @if (in_array($permission->id, $permissions))
                                    <i class="fa-solid fa-check text-success"></i>
                                @else
                                    <i class="fa-solid fa-xmark text-error"></i>
                                @endif
                            </label>
                        @endforeach
                    </div>
                </div>
            @endforeach

        </div>

        <x-slot:actions>
            <x-link.default href="{{ route('settings/roles') }}">Cancelar</x-link.default>
            <x-link.primary href="{{ route('settings/roles/edit', $role->uuid) }}">Editar</x-link.primary>
        </x-slot:actions>
    </x-form.card>
</x-form>

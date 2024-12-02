<div wire:ignore>
    <select class="z-[200] w-full" @disabled($disabled) placeholder="{{ $placeholder }}"
        {{ $multiple ? 'multiple' : '' }} autocomplete="off" x-data="{}" x-init="$nextTick(() => {
            let selectChoices = new Choices($el, {
                removeItems: true,
                removeItemButton: $wire.multiple,
                allowHTML: true,
                duplicateItemsAllowed: false,
                placeholder: true,
                placeholderValue: $wire.placeholder,
                itemSelectText: 'Clique para selecionar',
                noResultsText: 'Nenhum resultado encontrado',
                noChoicesText: 'Vazio',
            });
        
            let selected = $wire.getSelected();
            selected.then((items) => {
                console.log(items);
                if (Array.isArray(items)) {
                    items.forEach(function(select) {
                        selectChoices.setChoiceByValue((select).toString());
                    });
                } else {
                    selectChoices.setChoiceByValue(items);
                }
            });
        
            $el.addEventListener(
                'change',
                function(event) {
                    @this.$set('value', selectChoices.getValue(true));
                },
                false,
            );
        })">
        @if ($placeholder and !$multiple)
            <option value="">{{ $placeholder }}</option>
        @endif

        @foreach ($options as $key => $option)
            <option value="{{ $key }}">{{ $option }}</option>
        @endforeach
    </select>
</div>

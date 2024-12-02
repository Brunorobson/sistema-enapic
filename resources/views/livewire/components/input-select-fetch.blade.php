<div wire:ignore>
    <select class="z-[200] w-full" @disabled($disabled) placeholder="{{ $placeholder }}" autocomplete="off"
        x-data="{}" x-init="$nextTick(() => {
            let selectChoices = new Choices($el, {
                removeItems: true,
                removeItemButton: false,
                allowHTML: false,
                duplicateItemsAllowed: false,
                placeholder: true,
                placeholderValue: $wire.placeholder,
                searchPlaceholderValue: 'Digite para pesquisar...',
                itemSelectText: 'Clique para selecionar',
                noResultsText: 'Nenhum resultado encontrado.',
                noChoicesText: 'Nenhuma opção encontrada para a pesquisa.',
            });
        
            let url = window.location.origin + '/' + '{{ $route }}';
            let params = {{ json_encode($params) }};
            var urlSearchParams = '';
            if (!_.isEmpty(params)) {
                urlSearchParams = '&' + new URLSearchParams(params).toString();
            }
        
            let selected = $wire.getSelected();
            selected.then((items) => {
                console.log(items);
                if (items) {
                    fetch(url + '?id=' + encodeURIComponent(items) + urlSearchParams)
                        .then(response => response.json())
                        .then(function(data) {
                            selectChoices.setChoices(data, '{{ $valueField }}', '{{ $labelField }}', true);
                            selectChoices.setChoiceByValue(items);
                        });
                }
            });
        
            $el.addEventListener(
                'change',
                function(event) {
                    @this.$set('value', selectChoices.getValue(true));
                },
                false,
            );
        
            $el.addEventListener(
                'search',
                async function(event) {
                        if (event.detail.value) {
                            let response = await fetch(url + '?search=' + event.detail.value + urlSearchParams);
                            let data = await response.json();
        
                            selectChoices.setChoices(data, '{{ $valueField }}', '{{ $labelField }}', true);
                        }
                    },
                    false,
            );
        })">
        <option value="">{{ $placeholder }}</option>
    </select>
</div>

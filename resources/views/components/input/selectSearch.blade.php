{{-- 
    string route: route to access end-point of reseach items
    array? params: custom filters created on end-point, sended on query of route
    string? placeholder: if true add default (not pass values necessary, only add attribute) value else add custom text
    boolean disabled: disables the field
    int maxItems: default 1, if greater than 1 the multiple selection function activates
 --}}
@props(['route', 'params' => null, 'palceholder' => true, 'disabled' => false, 'maxItems' => 1])

@php
    $defaultPlaceholder = '';
    if ($palceholder) {
        $defaultPlaceholder = 'Selecione';
        if (!is_bool($palceholder)) {
            $defaultPlaceholder = $palceholder;
        }
    }
@endphp

<input {{ $attributes }} class="w-full" x-data="{
    selected: @entangle($attributes->wire('model')),
    defaultPlaceholder: '{{ $defaultPlaceholder }}',
    defaultMaxItems: {{ $maxItems }},
    getSelected(el, selected) {
        if (selected) {
            let url = window.location.origin + '/select/' + '{{ $route }}' + '?id=' + encodeURIComponent(selected);
            fetch(url)
                .then(response => response.json())
                .then(json => {
                    el.addOption(json);
                    el.addItem(selected);
                }).catch(() => {});
        }
    },
    search(query, callback) {
        let url = window.location.origin + '/select/' + '{{ $route }}' + '?search=' + encodeURIComponent(query);
        let params = {{ json_encode($params) }};
        if (!_.isEmpty(params)) {
            url += '&' + new URLSearchParams(params).toString();
        }
        fetch(url)
            .then(response => response.json())
            .then(json => {
                callback(json);
            }).catch(() => {
                callback();
            });
    },
    selectedData: {},
}" x-init="$el._x_tom = new Tom($el, {
        plugins: (defaultMaxItems > 1) ? {
            'clear_button': {
                'title': 'Remover Todos',
            },
            'remove_button': {
                'title': 'Remover Item',
            }
        } : {
            'clear_button': {
                'title': 'Remover Todos',
            }
        },
        persist: false,
        create: false,
        valueField: 'value',
        labelField: 'text',
        searchField: ['text'],
        maxItems: defaultMaxItems,
        placeholder: defaultPlaceholder,

        // minimum query length
        shouldLoad: function(query) {
            return query.length > 1;
        },

        onInitialize: function() {
            this.clear();
            this.clearOptions();
        },

        // fetch remote data
        load: search,

        onChange: function(value) {
            selectedData = this.options[value];
        },

        // custom rendering function for options
        render: {
            no_results: function(data, escape) {
                return `<div class='no-results'>Nenhum resultado encontrado</div>`;
            },
            option: function(item, escape) {
                return `<div class='d-flex py-2'>
                    <div class='mb-1'>
                        <span class='h5'>
                            ${escape(item.text)}    
                        </span>
                    </div>
                </div>`;
            },
        },

    }),
    getSelected($el._x_tom, selected);" type="text"
    @disabled($disabled) />

{{-- selectData saves a full item returned from end-point and can be accessed from the view
    with x-effect function and a local data variable --}}
{{-- Example of use selectedData --}}
{{-- 
<x-form.row x-data="{item: ''}">
    
    <x-form.field label="Empresa">
        <div wire:ignore>
            <x-input.selectSearch wire:model="form.company_id" route="person"
                x-effect="item = selectedData; $refs.formAge.value = item?.birth;" :params="['attribute' => 2]"
                palceholder />
        </div>
        <x-input.error for="form.company_id" class="mt-2" />
    </x-form.field>

    <x-form.field label="Idade">
        <x-input x-ref="formAge" wire:model="form.age" :value="old('form.age')" />
        <x-input.error for="form.age" class="mt-2" />
    </x-form.field>
</x-form.row> 
--}}

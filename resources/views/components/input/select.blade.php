@props(['options', 'placeholder' => false, 'disabled' => false])

@php
    $default = false;
    if ($placeholder) {
        $default = 'Selecione';
        if (!is_bool($placeholder)) {
            $default = $placeholder;
        }
    }
@endphp
<select {{ $attributes }}
    {{ $attributes->merge(['class' => 'form-select w-full rounded-lg border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary disabled:pointer-events-none disabled:select-none disabled:border-none disabled:bg-zinc-100 dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent dark:disabled:bg-navy-600']) }}
    @disabled($disabled)>
    @if ($default)
        <option value>{{ $default }}</option>
    @endif
    @foreach ($options as $key => $value)
        <option value={{ $key }}>
            {{ $value }}
        </option>
    @endforeach
</select>

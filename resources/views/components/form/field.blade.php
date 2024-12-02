@props(['span' => 1, 'label', 'labelClasses' => ''])

@php
    $class = 'flex flex-col gap-1.5 mt-3';
    if ($span > 1) {
        $class .= ' sm:col-span-' . $span;
    }
@endphp

<label {{ $attributes->merge(['class' => $class]) }}>
    <span class="{{ $labelClasses }} font-medium text-slate-600 dark:text-navy-100">{{ $label }}</span>
    {{ $slot }}
</label>

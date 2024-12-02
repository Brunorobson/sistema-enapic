@props(['cols' => 1])
@php
    $class = '';
    if ($cols > 1) {
        $class = "form-row-$cols";
    }
@endphp

<div {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</div>

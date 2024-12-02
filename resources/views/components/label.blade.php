@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm dark:text-navy-300 text-slate-500']) }}>
    {{ $value ?? $slot }}
</label>

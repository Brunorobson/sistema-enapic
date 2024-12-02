@props(['disabled' => false, 'type' => 'text'])

<input {{ $disabled ? 'disabled' : '' }} type={{ $type }} {!! $attributes->merge([
    'class' =>
        'form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent disabled:pointer-events-none disabled:select-none disabled:border-none disabled:bg-zinc-100 dark:disabled:bg-navy-600',
]) !!}>

@props(['disabled' => false, 'rows' => 5])
<textarea rows="{{ $rows }}" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'form-textarea w-full rounded-lg border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent disabled:pointer-events-none disabled:select-none disabled:border-none disabled:bg-zinc-100 dark:disabled:bg-navy-600',
]) !!}></textarea>

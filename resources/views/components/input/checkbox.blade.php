@props(['disabled' => false, 'checked' => 'false'])

<input {{ $disabled ? 'disabled' : '' }} type="checkbox" {!! $attributes->merge([
    'class' =>
        'form-checkbox is-basic h-5 w-5 rounded border-slate-400/70 
        checked:bg-primary checked:border-primary 
        hover:border-primary 
        focus:ring-primary focus:border-primary
        disabled:pointer-events-none disabled:opacity-60 disabled:border-slate-300 
        dark:border-navy-400 dark:checked:bg-accent dark:checked:border-accent dark:hover:border-accent 
        dark:focus:border-accent dark:disabled:border-navy-450',
]) !!} @checked($checked)>

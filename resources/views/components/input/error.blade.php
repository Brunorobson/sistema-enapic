@props(['for'])

@error($for)
    <p {{ $attributes->merge(['class' => 'text-tiny+ text-error mt-1']) }}>{{ $message }}</p>
@enderror

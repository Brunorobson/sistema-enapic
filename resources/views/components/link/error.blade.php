<a
    {{ $attributes->merge(['class' => 'btn bg-error font-medium text-white hover:bg-error-focus focus:bg-error-focus active:bg-error-focus/90 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</a>

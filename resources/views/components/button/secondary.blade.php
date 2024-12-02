<button
    {{ $attributes->merge(['type' => 'button', 'class' => 'btn bg-secondary font-medium text-white hover:bg-secondary-focus focus:bg-secondary-focus active:bg-secondary-focus/90 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

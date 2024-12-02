<main {{ $attributes->merge(['class' => 'main-content w-full px-[var(--margin-x)] pb-8']) }}>
    @isset($title)
        <x-slot:title>
            {{ $title }}
        </x-slot:title>
    @endisset
    <form wire:submit="store">
        @csrf
        <div class="flex flex-col items-center justify-between space-y-4 py-5 sm:flex-row sm:space-y-0 lg:py-6">
            @isset($title)
                <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
                    {{ $title }}
                </h2>
            @endisset
            @isset($headerActions)
                <div class="flex justify-center space-x-2">
                    {{ $headerActions }}
                </div>
            @endisset
        </div>

        <div class="mt-4">
            {{ $slot }}
            @isset($actions)
                <div class="mt-5 flex justify-end space-x-2">
                    {{ $actions }}
                </div>
            @endisset
        </div>
    </form>
</main>

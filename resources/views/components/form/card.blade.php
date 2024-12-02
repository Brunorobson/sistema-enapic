@props([
    'headerClasses' => '',
    'title' => '',
    'titleClasses' => '',
    'headerActions' => '',
    'headerActionsClasses' => '',
    'contentClasses' => '',
    'actions' => '',
    'actionClasses' => '',
])
<div {{ $attributes->merge(['class' => 'card']) }}>
    @if ($title or $headerActions)
        <div
            class="{{ $headerClasses }} {{ $title ? 'sm:justify-between' : 'sm:justify-end' }} flex flex-col items-center space-y-4 border-b border-slate-200 p-4 dark:border-navy-500 sm:flex-row sm:space-y-0 sm:px-5">
            @if ($title)
                <h2 class="{{ $titleClasses }} text-lg font-medium tracking-wide text-slate-700 dark:text-navy-100">
                    {{ $title }}
                </h2>
            @endif

            @if ($headerActions)
                <div class="{{ $headerActionsClasses }} flex justify-center space-x-2">
                    {{ $headerActions }}
                </div>
            @endif
        </div>
    @endif
    <div class="{{ $contentClasses }} p-4 sm:p-5">
        {{ $slot }}
    </div>

    @if ($actions)
        <div
            class="{{ $actionClasses }} mt-5 flex flex-row items-center justify-center space-x-4 border-t border-slate-200 p-4 dark:border-navy-500 sm:justify-end sm:px-5">
            {{ $actions }}
        </div>
    @endif
</div>

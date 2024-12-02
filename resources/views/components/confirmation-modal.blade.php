@props(['id' => null, 'maxWidth' => null])

<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="bg-white px-4 py-6 dark:bg-gray-800 sm:px-5">
        <div class="pt-10 pb-4 text-center">
            <div class="h-18 w-18 mx-auto flex shrink-0 items-center justify-center rounded-full bg-red-100">
                <svg class="h-12 w-12 text-red-600 dark:text-red-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                </svg>
            </div>
            <div class="mt-4 px-4 sm:px-12">
                <h3 class="dark:text-navy-50 text-lg text-slate-800">
                    {{ $title }}
                </h3>
                <p class="dark:text-navy-200 mt-1 text-slate-500">
                    {{ $content }}
                </p>
            </div>
        </div>
    </div>
    <div class="dark:bg-navy-500 mt-8 h-px bg-slate-200"></div>
    <div class="flex flex-row justify-center px-6 py-4">
        {{ $footer }}
    </div>
</x-modal>

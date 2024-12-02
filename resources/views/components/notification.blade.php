@if (session()->has('status') || session()->has('success') || session()->has('warning') || session()->has('danger'))
    @php
        $icon = '';
        $title = 'Sucesso';
        $message = 'Registro Salvo';
        if (session()->has('status') || session()->has('success')) {
            $icon = 'fa-solid fa-circle-check text-success fa-2xl';
            $title = session('title') ?? 'Sucesso';
            $message = session('status') ?? session('success');
        } elseif (session()->has('warning')) {
            $icon = 'fa-solid fa-triangle-exclamation text-warning fa-2xl';
            $title = session('title') ?? 'Atenção';
            $message = session('warning');
        } else {
            $icon = 'fa-solid fa-circle-xmark text-error fa-2xl';
            $title = session('title') ?? 'Erro';
            $message = session('danger');
        }
    @endphp
    <div x-data="{ show: true }" x-init="setTimeout(() => { show = false }, 4000)" x-show="show" x-transition.scale.origin.top
        class="absolute top-20 right-5 z-[100]">
        <div class="dark:bg-navy-600 flex max-w-xs overflow-hidden rounded-lg bg-slate-200 p-2 font-normal">
            <div class="flex items-center p-2">
                <i class="{{ $icon }}"></i>
            </div>
            <div class="flex items-start justify-between space-x-2">
                <div class="m-auto">
                    <h5 class="text-navy-600 dark:text-navy-100 line-clamp-1 font-medium tracking-wide lg:text-base">
                        {{ $title }}
                    </h5>
                    <p class="text-navy-400 dark:text-navy-100">{{ $message }}</p>
                </div>
                <button @click="show = false"
                    class="btn text-navy-400 hover:bg-navy-600/20 focus:bg-navy-600/20 active:bg-navy-600/25 h-7 w-7 rounded-full p-0 dark:text-white dark:hover:bg-white/20 dark:focus:bg-white/20 dark:active:bg-white/25">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
@endif

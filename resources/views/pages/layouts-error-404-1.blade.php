<x-base-layout title="Error 404 v1">
    <main
        :style="$store.global.isDarkModeEnabled ? { backgroundImage: `url('{{asset('images/illustrations/ufo-bg-dark.svg')}}` } :
        { backgroundImage: `url('{{asset('images/illustrations/ufo-bg.svg')}}` }"
        class="grid w-full grow grid-cols-1 place-items-center bg-center">
        <div class="max-w-[26rem] text-center">
            <div class="w-full">
                <img class="w-full" x-show="!$store.global.isDarkModeEnabled" src="{{asset('images/illustrations/ufo.svg')}}"
                    alt="image" />
                <img class="w-full" x-show="$store.global.isDarkModeEnabled" src="{{asset('images/illustrations/ufo-dark.svg')}}"
                    alt="image" />
            </div>
            <p class="pt-4 text-7xl font-bold text-primary dark:text-accent">
                404
            </p>
            <p class="pt-4 text-xl font-semibold text-slate-800 dark:text-navy-50">
                Oops. This Page Not Found.
            </p>
            <p class="pt-2 text-slate-500 dark:text-navy-200">
                This page you are looking not available
            </p>

            <button
                class="btn mt-8 h-11 bg-primary text-base font-medium text-white hover:bg-primary-focus hover:shadow-lg hover:shadow-primary/50 focus:bg-primary-focus focus:shadow-lg focus:shadow-primary/50 active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:hover:shadow-accent/50 dark:focus:bg-accent-focus dark:focus:shadow-accent/50 dark:active:bg-accent/90">
                Back To Home
            </button>
        </div>
    </main>
</x-base-layout>

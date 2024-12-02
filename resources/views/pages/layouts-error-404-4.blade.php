<x-app-layout title="Error 404 v4" is-header-blur="true">
    <main class="main-content w-full place-content-center px-[var(--margin-x)]">
        <div class="flex flex-col items-center p-6 text-center">
            <div class="w-full max-w-xs">
                <img class="w-full" x-show="!$store.global.isDarkModeEnabled" src="{{asset('images/illustrations/error-404.svg')}}"
                    alt="image" />
                <img class="w-full" x-show="$store.global.isDarkModeEnabled"
                    src="{{asset('images/illustrations/error-404-dark.svg')}}" alt="image" />
            </div>
            <p class="pt-4 text-xl font-semibold text-slate-800 dark:text-navy-50">
                Oops. This Page Not Found.
            </p>
            <p class="pt-2 text-slate-500 dark:text-navy-200">
                This page you are looking not available. Please back to home
            </p>
            <button
                class="btn mt-8 h-11 bg-primary text-base font-medium text-white hover:bg-primary-focus hover:shadow-lg hover:shadow-primary/50 focus:bg-primary-focus focus:shadow-lg focus:shadow-primary/50 active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:hover:shadow-accent/50 dark:focus:bg-accent-focus dark:focus:shadow-accent/50 dark:active:bg-accent/90">
                Back To Home
            </button>
        </div>
    </main>
</x-app-layout>

<x-app-layout title="Onboarding 1" is-header-blur="true">
<main
        class="main-content w-full place-items-center px-[var(--margin-x)] pb-12"
      >
        <div class="py-5 text-center lg:py-6">
          <p class="text-sm uppercase">Are you new here?</p>
          <h3
            class="mt-1 text-xl font-semibold text-slate-600 dark:text-navy-100"
          >
            Welcome. Where do you like to Start?
          </h3>
        </div>
        <div
          class="grid max-w-4xl grid-cols-1 gap-4 sm:grid-cols-3 sm:gap-5 lg:gap-6"
        >
          <div class="card">
            <div class="flex justify-center p-5">
              <img
                class="w-9/12"
               src="{{asset('images/illustrations/creativedesign.svg')}}"
                alt="image"
              />
            </div>
            <div class="px-4 pb-8 text-center sm:px-5">
              <h4
                class="text-lg font-semibold text-slate-700 dark:text-navy-100"
              >
                Creative Design
              </h4>
              <p class="pt-3">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Doloribus eius in qui!
              </p>
              <button
                class="btn mt-8 bg-primary font-medium text-white shadow-lg shadow-primary/50 hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:shadow-accent/50 dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
              >
                Start Design
              </button>
            </div>
          </div>
          <div class="card">
            <div class="flex justify-center p-5">
              <img
                class="w-9/12"
               src="{{asset('images/illustrations/responsive.svg')}}"
                alt="image"
              />
            </div>
            <div class="px-4 pb-8 text-center sm:px-5">
              <h4
                class="text-lg font-semibold text-slate-700 dark:text-navy-100"
              >
                Fully Responsive
              </h4>
              <p class="pt-3">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea
                ipsam odio totam?
              </p>
              <button
                class="btn mt-8 bg-primary font-medium text-white shadow-lg shadow-primary/50 hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:shadow-accent/50 dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
              >
                Start Design
              </button>
            </div>
          </div>
          <div class="card">
            <div class="flex justify-center p-5">
              <img
                class="w-9/12"
               src="{{asset('images/illustrations/performance.svg')}}"
                alt="image"
              />
            </div>
            <div class="px-4 pb-8 text-center sm:px-5">
              <h4
                class="text-lg font-semibold text-slate-700 dark:text-navy-100"
              >
                Performance
              </h4>
              <p class="pt-3">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum
                necessitatibus quas sit.
              </p>
              <button
                class="btn mt-8 bg-primary font-medium text-white shadow-lg shadow-primary/50 hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:shadow-accent/50 dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
              >
                Start Design
              </button>
            </div>
          </div>
        </div>
      </main>
</x-app-layout>

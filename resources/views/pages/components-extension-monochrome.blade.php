<x-app-layout title="Monochrome Mode" is-sidebar-open="true" is-header-blur="true">
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
          <h2
            class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl"
          >
            Monochrome Mode
          </h2>
          <div class="hidden h-full py-1 sm:flex">
            <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
          </div>
          <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
            <li class="flex items-center space-x-2">
              <a
                class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                href="#"
                >Components</a
              >
              <svg
                x-ignore
                xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 5l7 7-7 7"
                />
              </svg>
            </li>
            <li>Monochrome Mode</li>
          </ul>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
          <!--  Monochrome Mode  -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base"
              >
                Monochrome Mode
              </h2>
              <label class="inline-flex items-center space-x-2">
                <span class="text-xs text-slate-400 dark:text-navy-300"
                  >Code</span
                >
                <input
                  @change="helpers.toggleCode"
                  class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-accent dark:checked:before:bg-white"
                  type="checkbox"
                />
              </label>
            </div>
            <div class="max-w-xl">
              <p>
                Monochromatic UI/UX design may look simpler. Monochrome mode can
                be used if the network is offline.
              </p>
              <div class="inline-space mt-5 flex flex-wrap">
                <div
                  class="h-16 w-16 rounded-lg bg-primary dark:bg-accent"
                ></div>
                <div class="h-16 w-16 rounded-lg bg-secondary"></div>
                <div class="h-16 w-16 rounded-lg bg-info"></div>
                <div class="h-16 w-16 rounded-lg bg-success"></div>
                <div class="h-16 w-16 rounded-lg bg-warning"></div>
                <div class="h-16 w-16 rounded-lg bg-error"></div>
              </div>
              <label class="mt-4 flex items-center space-x-2">
                <input
                  x-model="$store.global.isMonochromeModeEnabled"
                  class="form-switch h-5 w-10 rounded-lg bg-slate-300 before:rounded-md before:bg-slate-50 checked:bg-slate-500 checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-navy-400 dark:checked:before:bg-white"
                  type="checkbox"
                />
                <span> Toggle Monochrome Mode</span>
              </label>
            </div>
            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;label class=&quot;flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      x-model=&quot;$store.global.isMonochromeModeEnabled&quot;&#13;&#10;      class=&quot;form-switch h-5 w-10 rounded-lg bg-slate-300 before:rounded-md before:bg-slate-50 checked:bg-slate-500 checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-navy-400 dark:checked:before:bg-white&quot;&#13;&#10;      type=&quot;checkbox&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;span&gt; Toggle Monochrome Mode&lt;/span&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;                </code>
              </pre>
            </div>
          </div>
        </div>
      </main>
</x-app-layout>

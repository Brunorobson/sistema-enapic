<x-app-layout title="Mask Element" is-sidebar-open="true" is-header-blur="true">
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
          <h2
            class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl"
          >
            Mask
          </h2>
          <div class="hidden h-full py-1 sm:flex">
            <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
          </div>
          <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
            <li class="flex items-center space-x-2">
              <a
                class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                href="#"
                >Elements</a
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
            <li>Mask</li>
          </ul>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
          <!-- Squircle Mask -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base"
              >
                Squircle Mask
              </h2>
              <label class="flex items-center space-x-2">
                <span class="text-xs text-slate-400 dark:text-navy-300">Code</span>
                <input
                  @change="helpers.toggleCode"
                  class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-accent dark:checked:before:bg-white"
                  type="checkbox"
                />
              </label>
            </div>
            <div>
              <p class="max-w-2xl">
                Mask crops the content of the element to common shapes. The mask
                can crop the shape of squircle. Check out code for detail of
                usage.
              </p>
              <div class="mt-4">
                <div class="avatar h-36 w-36">
                  <img
                    class="mask is-squircle"
                    src="{{asset('images/100x100.png')}}"
                    alt="avatar"
                  />
                </div>
              </div>
            </div>
            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;div class=&quot;avatar h-36 w-36&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;mask is-squircle&quot;&#13;&#10;      src=&quot;images/100x100.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;</code>
              </pre>
            </div>
          </div>

          <!-- Reuleaux Triangle Mask -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base"
              >
                Reuleaux Triangle Mask
              </h2>
              <label class="flex items-center space-x-2">
                <span class="text-xs text-slate-400 dark:text-navy-300">Code</span>
                <input
                  @change="helpers.toggleCode"
                  class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-accent dark:checked:before:bg-white"
                  type="checkbox"
                />
              </label>
            </div>
            <div>
              <p class="max-w-2xl">
                Mask crops the content of the element to common shapes. The mask
                can crop the shape of reuleaux triangle. Check out code for
                detail of usage.
              </p>
              <div class="mt-4">
                <div class="avatar h-36 w-36">
                  <img
                    class="mask is-reuleaux-triangle"
                    src="{{asset('images/100x100.png')}}"
                    alt="avatar"
                  />
                </div>
              </div>
            </div>
            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;div class=&quot;avatar h-36 w-36&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;mask is-reuleaux-triangle&quot;&#13;&#10;      src=&quot;images/100x100.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;</code>
              </pre>
            </div>
          </div>

          <!-- Diamond Mask -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base"
              >
                Diamond Mask
              </h2>
              <label class="flex items-center space-x-2">
                <span class="text-xs text-slate-400 dark:text-navy-300">Code</span>
                <input
                  @change="helpers.toggleCode"
                  class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-accent dark:checked:before:bg-white"
                  type="checkbox"
                />
              </label>
            </div>
            <div>
              <p class="max-w-2xl">
                Mask crops the content of the element to common shapes. The mask
                can crop the shape of diamond. Check out code for detail of
                usage.
              </p>
              <div class="mt-4">
                <div class="avatar h-36 w-36">
                  <img
                    class="mask is-diamond"
                    src="{{asset('images/100x100.png')}}"
                    alt="avatar"
                  />
                </div>
              </div>
            </div>
            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;div class=&quot;avatar h-36 w-36&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;mask is-diamond&quot;&#13;&#10;      src=&quot;images/100x100.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;</code>
              </pre>
            </div>
          </div>

          <!-- Hexagon Mask -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base"
              >
                Hexagon Mask
              </h2>
              <label class="flex items-center space-x-2">
                <span class="text-xs text-slate-400 dark:text-navy-300">Code</span>
                <input
                  @change="helpers.toggleCode"
                  class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-accent dark:checked:before:bg-white"
                  type="checkbox"
                />
              </label>
            </div>
            <div>
              <p class="max-w-2xl">
                Mask crops the content of the element to common shapes. The mask
                can crop the shape of hexagon. Check out code for detail of
                usage.
              </p>
              <div class="inline-space mt-4">
                <div class="avatar h-36 w-36">
                  <img
                    class="mask is-hexagon"
                    src="{{asset('images/100x100.png')}}"
                    alt="avatar"
                  />
                </div>
                <div class="avatar h-36 w-36">
                  <img
                    class="mask is-hexagon-2"
                    src="{{asset('images/100x100.png')}}"
                    alt="avatar"
                  />
                </div>
              </div>
            </div>
            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;div class=&quot;avatar h-36 w-36&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;mask is-hexagon&quot;&#13;&#10;      src=&quot;images/100x100.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;  &lt;div class=&quot;avatar h-36 w-36&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;mask is-hexagon-2&quot;&#13;&#10;      src=&quot;images/100x100.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;</code>
              </pre>
            </div>
          </div>

          <!-- Octagon Mask -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base"
              >
                Octagon Mask
              </h2>
              <label class="flex items-center space-x-2">
                <span class="text-xs text-slate-400 dark:text-navy-300">Code</span>
                <input
                  @change="helpers.toggleCode"
                  class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-accent dark:checked:before:bg-white"
                  type="checkbox"
                />
              </label>
            </div>
            <div>
              <p class="max-w-2xl">
                Mask crops the content of the element to common shapes. The mask
                can crop the shape of octagon. Check out code for detail of
                usage.
              </p>
              <div class="mt-4">
                <div class="avatar h-36 w-36">
                  <img
                    class="mask is-octagon"
                    src="{{asset('images/100x100.png')}}"
                    alt="avatar"
                  />
                </div>
              </div>
            </div>
            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;div class=&quot;avatar h-36 w-36&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;mask is-octagon&quot;&#13;&#10;      src=&quot;images/100x100.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;</code>
              </pre>
            </div>
          </div>

          <!-- Star Mask -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base"
              >
                Star Mask
              </h2>
              <label class="flex items-center space-x-2">
                <span class="text-xs text-slate-400 dark:text-navy-300">Code</span>
                <input
                  @change="helpers.toggleCode"
                  class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-accent dark:checked:before:bg-white"
                  type="checkbox"
                />
              </label>
            </div>
            <div>
              <p class="max-w-2xl">
                Mask crops the content of the element to common shapes. The mask
                can crop the shape of star. Check out code for detail of usage.
              </p>
              <div class="inline-space mt-4">
                <div class="avatar h-36 w-36">
                  <img
                    class="mask is-star"
                    src="{{asset('images/100x100.png')}}"
                    alt="avatar"
                  />
                </div>
                <div class="avatar h-36 w-36">
                  <img
                    class="mask is-star-2"
                    src="{{asset('images/100x100.png')}}"
                    alt="avatar"
                  />
                </div>
              </div>
            </div>
            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;div class=&quot;avatar h-36 w-36&quot;&gt;&#13;&#10;    &lt;img class=&quot;mask is-star&quot; src=&quot;images/100x100.png&quot; alt=&quot;avatar&quot; /&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;  &lt;div class=&quot;avatar h-36 w-36&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;mask is-star-2&quot;&#13;&#10;      src=&quot;images/100x100.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;</code>
              </pre>
            </div>
          </div>

          <!-- Heart Mask -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base"
              >
                Heart Mask
              </h2>
              <label class="flex items-center space-x-2">
                <span class="text-xs text-slate-400 dark:text-navy-300">Code</span>
                <input
                  @change="helpers.toggleCode"
                  class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-accent dark:checked:before:bg-white"
                  type="checkbox"
                />
              </label>
            </div>
            <div>
              <p class="max-w-2xl">
                Mask crops the content of the element to common shapes. The mask
                can crop the shape of heart. Check out code for detail of usage.
              </p>
              <div class="mt-4">
                <div class="avatar h-36 w-36">
                  <img
                    class="mask is-heart"
                    src="{{asset('images/100x100.png')}}"
                    alt="avatar"
                  />
                </div>
              </div>
            </div>
            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;div class=&quot;avatar h-36 w-36&quot;&gt;&#13;&#10;    &lt;img class=&quot;mask is-heart&quot; src=&quot;images/100x100.png&quot; alt=&quot;avatar&quot; /&gt;&#13;&#10;  &lt;/div&gt;</code>
              </pre>
            </div>
          </div>
        </div>
      </main>
</x-app-layout>

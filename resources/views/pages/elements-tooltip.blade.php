<x-app-layout title="Tooltip Element" is-sidebar-open="true" is-header-blur="true">
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
          <h2
            class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl"
          >
            Tooltip
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
            <li>Tooltip</li>
          </ul>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
          <!-- Basic Tooltip -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base"
              >
                Basic Tooltip
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
                A tooltip is often used to specify extra information about
                something when the user moves the mouse pointer over an element.
                Check out code for detail of usage.
              </p>
              <div class="inline-space mt-5 flex flex-wrap">
                <button
                  x-tooltip="'Default'"
                  class="btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                >
                  Default
                </button>
                <button
                  x-tooltip.light="'Light'"
                  class="btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80"
                >
                  Light
                </button>
                <button
                  x-tooltip.primary="'Primary'"
                  class="btn bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                >
                  Primary
                </button>
                <button
                  x-tooltip.secondary="'Secondary'"
                  class="btn bg-secondary font-medium text-white hover:bg-secondary-focus focus:bg-secondary-focus active:bg-secondary-focus/90"
                >
                  Secondary
                </button>
                <button
                  x-tooltip.info="'Info'"
                  class="btn bg-info font-medium text-white hover:bg-info-focus focus:bg-info-focus active:bg-info-focus/90"
                >
                  Info
                </button>
                <button
                  x-tooltip.success="'Success'"
                  class="btn bg-success font-medium text-white hover:bg-success-focus focus:bg-success-focus active:bg-success-focus/90"
                >
                  Success
                </button>
                <button
                  x-tooltip.warning="'Warning'"
                  class="btn bg-warning font-medium text-white hover:bg-warning-focus focus:bg-warning-focus active:bg-warning-focus/90"
                >
                  Warning
                </button>
                <button
                  x-tooltip.error="'Error'"
                  class="btn bg-error font-medium text-white hover:bg-error-focus focus:bg-error-focus active:bg-error-focus/90"
                >
                  Error
                </button>
              </div>
            </div>

            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;button&#13;&#10;    x-tooltip=&quot;&apos;Default&apos;&quot;&#13;&#10;    class=&quot;btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90&quot;&#13;&#10;  &gt;&#13;&#10;    Default&#13;&#10;  &lt;/button&gt;&#13;&#10;  &lt;button&#13;&#10;    x-tooltip.light=&quot;&apos;Light&apos;&quot;&#13;&#10;    class=&quot;btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80&quot;&#13;&#10;  &gt;&#13;&#10;    Light&#13;&#10;  &lt;/button&gt;&#13;&#10;  &lt;button&#13;&#10;    x-tooltip.primary=&quot;&apos;Primary&apos;&quot;&#13;&#10;    class=&quot;btn bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90&quot;&#13;&#10;  &gt;&#13;&#10;    Primary&#13;&#10;  &lt;/button&gt;&#13;&#10;  &lt;button&#13;&#10;    x-tooltip.secondary=&quot;&apos;Secondary&apos;&quot;&#13;&#10;    class=&quot;btn bg-secondary font-medium text-white hover:bg-secondary-focus focus:bg-secondary-focus active:bg-secondary-focus/90&quot;&#13;&#10;  &gt;&#13;&#10;    Secondary&#13;&#10;  &lt;/button&gt;&#13;&#10;  &lt;button&#13;&#10;    x-tooltip.info=&quot;&apos;Info&apos;&quot;&#13;&#10;    class=&quot;btn bg-info font-medium text-white hover:bg-info-focus focus:bg-info-focus active:bg-info-focus/90&quot;&#13;&#10;  &gt;&#13;&#10;    Info&#13;&#10;  &lt;/button&gt;&#13;&#10;  &lt;button&#13;&#10;    x-tooltip.success=&quot;&apos;Success&apos;&quot;&#13;&#10;    class=&quot;btn bg-success font-medium text-white hover:bg-success-focus focus:bg-success-focus active:bg-success-focus/90&quot;&#13;&#10;  &gt;&#13;&#10;    Success&#13;&#10;  &lt;/button&gt;&#13;&#10;  &lt;button&#13;&#10;    x-tooltip.warning=&quot;&apos;Warning&apos;&quot;&#13;&#10;    class=&quot;btn bg-warning font-medium text-white hover:bg-warning-focus focus:bg-warning-focus active:bg-warning-focus/90&quot;&#13;&#10;  &gt;&#13;&#10;    Warning&#13;&#10;  &lt;/button&gt;&#13;&#10;  &lt;button&#13;&#10;    x-tooltip.error=&quot;&apos;Error&apos;&quot;&#13;&#10;    class=&quot;btn bg-error font-medium text-white hover:bg-error-focus focus:bg-error-focus active:bg-error-focus/90&quot;&#13;&#10;  &gt;&#13;&#10;    Error&#13;&#10;  &lt;/button&gt;</code>
              </pre>
            </div>
          </div>

          <!-- Tooltip Position -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base"
              >
                Tooltip Position
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
                Tooltip can be placed in four base ways in relation to the
                reference element. Check out code for detail of usage.
              </p>
              <div class="inline-space mt-5 flex flex-wrap">
                <div
                  class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3"
                >
                  <button
                    x-tooltip.placement.top.success="'Top'"
                    class="btn border border-primary font-medium text-primary hover:bg-primary hover:text-white focus:bg-primary focus:text-white active:bg-primary/90 dark:border-accent dark:text-accent-light dark:hover:bg-accent dark:hover:text-white dark:focus:bg-accent dark:focus:text-white dark:active:bg-accent/90"
                  >
                    Top
                  </button>
                  <button
                    x-tooltip.placement.top-start.success="'Top Start'"
                    class="btn border border-primary font-medium text-primary hover:bg-primary hover:text-white focus:bg-primary focus:text-white active:bg-primary/90 dark:border-accent dark:text-accent-light dark:hover:bg-accent dark:hover:text-white dark:focus:bg-accent dark:focus:text-white dark:active:bg-accent/90"
                  >
                    Top Start
                  </button>
                  <button
                    x-tooltip.placement.top-end.success="'Top End'"
                    class="btn border border-primary font-medium text-primary hover:bg-primary hover:text-white focus:bg-primary focus:text-white active:bg-primary/90 dark:border-accent dark:text-accent-light dark:hover:bg-accent dark:hover:text-white dark:focus:bg-accent dark:focus:text-white dark:active:bg-accent/90"
                  >
                    Top End
                  </button>
                  <button
                    x-tooltip.placement.right.success="'Right'"
                    class="btn border border-primary font-medium text-primary hover:bg-primary hover:text-white focus:bg-primary focus:text-white active:bg-primary/90 dark:border-accent dark:text-accent-light dark:hover:bg-accent dark:hover:text-white dark:focus:bg-accent dark:focus:text-white dark:active:bg-accent/90"
                  >
                    Right
                  </button>
                  <button
                    x-tooltip.placement.right-end.success="'Right End'"
                    class="btn border border-primary font-medium text-primary hover:bg-primary hover:text-white focus:bg-primary focus:text-white active:bg-primary/90 dark:border-accent dark:text-accent-light dark:hover:bg-accent dark:hover:text-white dark:focus:bg-accent dark:focus:text-white dark:active:bg-accent/90"
                  >
                    Right End
                  </button>
                  <button
                    x-tooltip.placement.right-start.success="'Right Start'"
                    class="btn border border-primary font-medium text-primary hover:bg-primary hover:text-white focus:bg-primary focus:text-white active:bg-primary/90 dark:border-accent dark:text-accent-light dark:hover:bg-accent dark:hover:text-white dark:focus:bg-accent dark:focus:text-white dark:active:bg-accent/90"
                  >
                    Right Start
                  </button>
                  <button
                    x-tooltip.placement.bottom.success="'Bottom'"
                    class="btn border border-primary font-medium text-primary hover:bg-primary hover:text-white focus:bg-primary focus:text-white active:bg-primary/90 dark:border-accent dark:text-accent-light dark:hover:bg-accent dark:hover:text-white dark:focus:bg-accent dark:focus:text-white dark:active:bg-accent/90"
                  >
                    Bottom
                  </button>
                  <button
                    x-tooltip.placement.bottom-start.success="'Bottom Start'"
                    class="btn border border-primary font-medium text-primary hover:bg-primary hover:text-white focus:bg-primary focus:text-white active:bg-primary/90 dark:border-accent dark:text-accent-light dark:hover:bg-accent dark:hover:text-white dark:focus:bg-accent dark:focus:text-white dark:active:bg-accent/90"
                  >
                    Bottom Start
                  </button>
                  <button
                    x-tooltip.placement.bottom-end.success="'Bottom End'"
                    class="btn border border-primary font-medium text-primary hover:bg-primary hover:text-white focus:bg-primary focus:text-white active:bg-primary/90 dark:border-accent dark:text-accent-light dark:hover:bg-accent dark:hover:text-white dark:focus:bg-accent dark:focus:text-white dark:active:bg-accent/90"
                  >
                    Bottom End
                  </button>
                  <button
                    x-tooltip.placement.left.success="'Left'"
                    class="btn border border-primary font-medium text-primary hover:bg-primary hover:text-white focus:bg-primary focus:text-white active:bg-primary/90 dark:border-accent dark:text-accent-light dark:hover:bg-accent dark:hover:text-white dark:focus:bg-accent dark:focus:text-white dark:active:bg-accent/90"
                  >
                    Left
                  </button>
                  <button
                    x-tooltip.placement.left-start.success="'Left Start'"
                    class="btn border border-primary font-medium text-primary hover:bg-primary hover:text-white focus:bg-primary focus:text-white active:bg-primary/90 dark:border-accent dark:text-accent-light dark:hover:bg-accent dark:hover:text-white dark:focus:bg-accent dark:focus:text-white dark:active:bg-accent/90"
                  >
                    Left Start
                  </button>
                  <button
                    x-tooltip.placement.left-end.success="'Left End'"
                    class="btn border border-primary font-medium text-primary hover:bg-primary hover:text-white focus:bg-primary focus:text-white active:bg-primary/90 dark:border-accent dark:text-accent-light dark:hover:bg-accent dark:hover:text-white dark:focus:bg-accent dark:focus:text-white dark:active:bg-accent/90"
                  >
                    Left End
                  </button>
                </div>
              </div>
            </div>

            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;div class=&quot;grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3&quot;&gt;&#13;&#10;    &lt;button&#13;&#10;      x-tooltip.placement.top.success=&quot;&apos;Top&apos;&quot;&#13;&#10;      class=&quot;btn border border-primary font-medium text-primary hover:bg-primary hover:text-white focus:bg-primary focus:text-white active:bg-primary/90 dark:border-accent dark:text-accent-light dark:hover:bg-accent dark:hover:text-white dark:focus:bg-accent dark:focus:text-white dark:active:bg-accent/90&quot;&#13;&#10;    &gt;&#13;&#10;      Top&#13;&#10;    &lt;/button&gt;&#13;&#10;    &lt;button&#13;&#10;      x-tooltip.placement.top-start.success=&quot;&apos;Top Start&apos;&quot;&#13;&#10;      class=&quot;btn border border-primary font-medium text-primary hover:bg-primary hover:text-white focus:bg-primary focus:text-white active:bg-primary/90 dark:border-accent dark:text-accent-light dark:hover:bg-accent dark:hover:text-white dark:focus:bg-accent dark:focus:text-white dark:active:bg-accent/90&quot;&#13;&#10;    &gt;&#13;&#10;      Top Start&#13;&#10;    &lt;/button&gt;&#13;&#10;    &lt;button&#13;&#10;      x-tooltip.placement.top-end.success=&quot;&apos;Top End&apos;&quot;&#13;&#10;      class=&quot;btn border border-primary font-medium text-primary hover:bg-primary hover:text-white focus:bg-primary focus:text-white active:bg-primary/90 dark:border-accent dark:text-accent-light dark:hover:bg-accent dark:hover:text-white dark:focus:bg-accent dark:focus:text-white dark:active:bg-accent/90&quot;&#13;&#10;    &gt;&#13;&#10;      Top End&#13;&#10;    &lt;/button&gt;&#13;&#10;    &lt;button&#13;&#10;      x-tooltip.placement.right.success=&quot;&apos;Right&apos;&quot;&#13;&#10;      class=&quot;btn border border-primary font-medium text-primary hover:bg-primary hover:text-white focus:bg-primary focus:text-white active:bg-primary/90 dark:border-accent dark:text-accent-light dark:hover:bg-accent dark:hover:text-white dark:focus:bg-accent dark:focus:text-white dark:active:bg-accent/90&quot;&#13;&#10;    &gt;&#13;&#10;      Right&#13;&#10;    &lt;/button&gt;&#13;&#10;    &lt;button&#13;&#10;      x-tooltip.placement.right-end.success=&quot;&apos;Right End&apos;&quot;&#13;&#10;      class=&quot;btn border border-primary font-medium text-primary hover:bg-primary hover:text-white focus:bg-primary focus:text-white active:bg-primary/90 dark:border-accent dark:text-accent-light dark:hover:bg-accent dark:hover:text-white dark:focus:bg-accent dark:focus:text-white dark:active:bg-accent/90&quot;&#13;&#10;    &gt;&#13;&#10;      Right End&#13;&#10;    &lt;/button&gt;&#13;&#10;    &lt;button&#13;&#10;      x-tooltip.placement.right-start.success=&quot;&apos;Right Start&apos;&quot;&#13;&#10;      class=&quot;btn border border-primary font-medium text-primary hover:bg-primary hover:text-white focus:bg-primary focus:text-white active:bg-primary/90 dark:border-accent dark:text-accent-light dark:hover:bg-accent dark:hover:text-white dark:focus:bg-accent dark:focus:text-white dark:active:bg-accent/90&quot;&#13;&#10;    &gt;&#13;&#10;      Right Start&#13;&#10;    &lt;/button&gt;&#13;&#10;    &lt;button&#13;&#10;      x-tooltip.placement.bottom.success=&quot;&apos;Bottom&apos;&quot;&#13;&#10;      class=&quot;btn border border-primary font-medium text-primary hover:bg-primary hover:text-white focus:bg-primary focus:text-white active:bg-primary/90 dark:border-accent dark:text-accent-light dark:hover:bg-accent dark:hover:text-white dark:focus:bg-accent dark:focus:text-white dark:active:bg-accent/90&quot;&#13;&#10;    &gt;&#13;&#10;      Bottom&#13;&#10;    &lt;/button&gt;&#13;&#10;    &lt;button&#13;&#10;      x-tooltip.placement.bottom-start.success=&quot;&apos;Bottom Start&apos;&quot;&#13;&#10;      class=&quot;btn border border-primary font-medium text-primary hover:bg-primary hover:text-white focus:bg-primary focus:text-white active:bg-primary/90 dark:border-accent dark:text-accent-light dark:hover:bg-accent dark:hover:text-white dark:focus:bg-accent dark:focus:text-white dark:active:bg-accent/90&quot;&#13;&#10;    &gt;&#13;&#10;      Bottom Start&#13;&#10;    &lt;/button&gt;&#13;&#10;    &lt;button&#13;&#10;      x-tooltip.placement.bottom-end.success=&quot;&apos;Bottom End&apos;&quot;&#13;&#10;      class=&quot;btn border border-primary font-medium text-primary hover:bg-primary hover:text-white focus:bg-primary focus:text-white active:bg-primary/90 dark:border-accent dark:text-accent-light dark:hover:bg-accent dark:hover:text-white dark:focus:bg-accent dark:focus:text-white dark:active:bg-accent/90&quot;&#13;&#10;    &gt;&#13;&#10;      Bottom End&#13;&#10;    &lt;/button&gt;&#13;&#10;    &lt;button&#13;&#10;      x-tooltip.placement.left.success=&quot;&apos;Left&apos;&quot;&#13;&#10;      class=&quot;btn border border-primary font-medium text-primary hover:bg-primary hover:text-white focus:bg-primary focus:text-white active:bg-primary/90 dark:border-accent dark:text-accent-light dark:hover:bg-accent dark:hover:text-white dark:focus:bg-accent dark:focus:text-white dark:active:bg-accent/90&quot;&#13;&#10;    &gt;&#13;&#10;      Left&#13;&#10;    &lt;/button&gt;&#13;&#10;    &lt;button&#13;&#10;      x-tooltip.placement.left-start.success=&quot;&apos;Left Start&apos;&quot;&#13;&#10;      class=&quot;btn border border-primary font-medium text-primary hover:bg-primary hover:text-white focus:bg-primary focus:text-white active:bg-primary/90 dark:border-accent dark:text-accent-light dark:hover:bg-accent dark:hover:text-white dark:focus:bg-accent dark:focus:text-white dark:active:bg-accent/90&quot;&#13;&#10;    &gt;&#13;&#10;      Left Start&#13;&#10;    &lt;/button&gt;&#13;&#10;    &lt;button&#13;&#10;      x-tooltip.placement.left-end.success=&quot;&apos;Left End&apos;&quot;&#13;&#10;      class=&quot;btn border border-primary font-medium text-primary hover:bg-primary hover:text-white focus:bg-primary focus:text-white active:bg-primary/90 dark:border-accent dark:text-accent-light dark:hover:bg-accent dark:hover:text-white dark:focus:bg-accent dark:focus:text-white dark:active:bg-accent/90&quot;&#13;&#10;    &gt;&#13;&#10;      Left End&#13;&#10;    &lt;/button&gt;&#13;&#10;  &lt;/div&gt;</code>
              </pre>
            </div>
          </div>

          <!-- Tooltip Delay, Duration -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base"
              >
                Tooltip Delay, Duration
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
                Tooltip can delay hiding or showing after a trigger. Check out
                code for detail of usage.
              </p>
              <div class="inline-space mt-5 flex flex-wrap">
                <button
                  class="btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                  x-tooltip.delay.500="'Debounce 500 millisecond'"
                >
                  Delay
                </button>
                <button
                  class="btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                  x-tooltip.duration.1000="'Duration 1 second animate tooltip'"
                >
                  Duration
                </button>
              </div>
            </div>

            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;button&#13;&#10;    class=&quot;btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90&quot;&#13;&#10;    x-tooltip.delay.500=&quot;&apos;Debounce 500 millisecond&apos;&quot;&#13;&#10;  &gt;&#13;&#10;    Delay&#13;&#10;  &lt;/button&gt;&#13;&#10;  &lt;button&#13;&#10;    class=&quot;btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90&quot;&#13;&#10;    x-tooltip.duration.1000=&quot;&apos;Duration 1 second animate tooltip&apos;&quot;&#13;&#10;  &gt;&#13;&#10;    Duration&#13;&#10;  &lt;/button&gt;&#13;&#10;</code>
              </pre>
            </div>
          </div>

          <!-- Tooltip Trigger -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base"
              >
                Tooltip Trigger
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
                Tooltip can be triggered by a variety of different events,
                including click, focus, or any other even. Check out code for
                detail of usage.
              </p>
              <div class="inline-space mt-5 flex flex-wrap">
                <button
                  class="btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                  x-tooltip.on.mouseenter="'Hover me'"
                >
                  Hover
                </button>
                <button
                  class="btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                  x-tooltip.on.click="'Click me'"
                >
                  Click
                </button>
                <button
                  class="btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                  x-tooltip.on.focusin="'Focus me'"
                >
                  Focus
                </button>
              </div>
            </div>

            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;button&#13;&#10;    class=&quot;btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90&quot;&#13;&#10;    x-tooltip.on.mouseenter=&quot;&apos;Hover me&apos;&quot;&#13;&#10;  &gt;&#13;&#10;    Hover&#13;&#10;  &lt;/button&gt;&#13;&#10;  &lt;button&#13;&#10;    class=&quot;btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90&quot;&#13;&#10;    x-tooltip.on.click=&quot;&apos;Click me&apos;&quot;&#13;&#10;  &gt;&#13;&#10;    Click&#13;&#10;  &lt;/button&gt;&#13;&#10;  &lt;button&#13;&#10;    class=&quot;btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90&quot;&#13;&#10;    x-tooltip.on.focusin=&quot;&apos;Focus me&apos;&quot;&#13;&#10;  &gt;&#13;&#10;    Focus&#13;&#10;  &lt;/button&gt;&#13;&#10;</code>
              </pre>
            </div>
          </div>

          <!-- Follow Cursor -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base"
              >
                Follow Cursor
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
                Tooltip can follow the mouse cursor and abide by a certain axis.
                Additionally, the tooltip can follow the cursor until it shows,
                at which point it will stop following. Check out code for detail
                of usage.
              </p>
              <div class="inline-space mt-5 flex flex-wrap">
                <button
                  class="btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                  x-tooltip.cursor="'Follow Cursor'"
                >
                  Cursor
                </button>
                <button
                  class="btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                  x-tooltip.cursor.x="'Follow Cursor horizontal'"
                >
                  Horizontal
                </button>
                <button
                  class="btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                  x-tooltip.cursor.y="'Follow Cursor Vertical'"
                >
                  Vertical
                </button>
                <button
                  class="btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                  x-tooltip.on.click.cursor.initial="'Follow Cursor initial'"
                >
                  Click me
                </button>
              </div>
            </div>

            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;button&#13;&#10;    class=&quot;btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90&quot;&#13;&#10;    x-tooltip.cursor=&quot;&apos;Follow Cursor&apos;&quot;&#13;&#10;  &gt;&#13;&#10;    Cursor&#13;&#10;  &lt;/button&gt;&#13;&#10;  &lt;button&#13;&#10;    class=&quot;btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90&quot;&#13;&#10;    x-tooltip.cursor.x=&quot;&apos;Follow Cursor horizontal&apos;&quot;&#13;&#10;  &gt;&#13;&#10;    Horizontal&#13;&#10;  &lt;/button&gt;&#13;&#10;  &lt;button&#13;&#10;    class=&quot;btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90&quot;&#13;&#10;    x-tooltip.cursor.y=&quot;&apos;Follow Cursor Vertical&apos;&quot;&#13;&#10;  &gt;&#13;&#10;    Vertical&#13;&#10;  &lt;/button&gt;&#13;&#10;  &lt;button&#13;&#10;    class=&quot;btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90&quot;&#13;&#10;    x-tooltip.cursor.initial=&quot;&apos;Follow Cursor initial&apos;&quot;&#13;&#10;  &gt;&#13;&#10;    Initial&#13;&#10;  &lt;/button&gt;&#13;&#10;</code>
              </pre>
            </div>
          </div>

          <!-- HTML Content Tooltip -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base"
              >
                HTML Content Tooltip
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
                Tooltip tippy can contain HTML. Check out code for detail of
                usage.
              </p>
              <div class="inline-space mt-5 flex flex-wrap">
                <button
                  class="btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                  x-tooltip.content.interactive="'#content1'"
                >
                  Content
                </button>

                <template id="content1">
                  <div
                    class="flex space-x-3 rounded-lg bg-slate-150 p-3 dark:bg-navy-500"
                  >
                    <div class="avatar">
                      <img
                        class="rounded-full"
                        src="{{asset('images/100x100.png')}}"
                        alt="image"
                      />
                    </div>
                    <div>
                      <p class="font-medium text-slate-700 dark:text-navy-100">
                        John Doe
                      </p>
                      <p class="text-xs text-slate-500 dark:text-navy-200">
                        Product Manager
                      </p>
                    </div>
                  </div>
                </template>
              </div>
            </div>

            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;button&#13;&#10;    class=&quot;btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90&quot;&#13;&#10;    x-tooltip.interactive.content=&quot;&apos;#content1&apos;&quot;&#13;&#10;  &gt;&#13;&#10;    Content&#13;&#10;  &lt;/button&gt;&#13;&#10;&#13;&#10;  &lt;template id=&quot;content1&quot;&gt;&#13;&#10;    &lt;div class=&quot;flex space-x-3 rounded-lg bg-slate-150 p-3 dark:bg-navy-500&quot;&gt;&#13;&#10;      &lt;div class=&quot;avatar&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;rounded-full&quot;&#13;&#10;          src=&quot;{{asset('images/100x100.png')}}&quot;&#13;&#10;          alt=&quot;image&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div&gt;&#13;&#10;        &lt;p class=&quot;font-medium text-slate-700 dark:text-navy-100&quot;&gt;John Doe&lt;/p&gt;&#13;&#10;        &lt;p class=&quot;text-xs text-slate-500 dark:text-navy-200&quot;&gt;Product Manager&lt;/p&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/template&gt;</code>
              </pre>
            </div>
          </div>
        </div>
      </main>
</x-app-layout>

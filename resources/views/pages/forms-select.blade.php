<x-app-layout title="Form Select" is-sidebar-open="true" is-header-blur="true">
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
          <h2
            class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl"
          >
            Select
          </h2>
          <div class="hidden h-full py-1 sm:flex">
            <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
          </div>
          <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
            <li class="flex items-center space-x-2">
              <a
                class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                href="#"
                >Forms</a
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
            <li>Select</li>
          </ul>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
          <!-- Basic Select -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base"
              >
                Basic Select
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

            <div class="max-w-xl">
              <p>
                The <code class="inline-code">&lt;select&gt;</code> HTML element
                represents a control that provides a menu of options. Check out
                code for detail of usage.
              </p>
              <div class="mt-5">
                <label class="block">
                  <span>What type of event is it?</span>
                  <select
                    class="form-select mt-1.5 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent"
                  >
                    <option>Corporate event</option>
                    <option>Wedding</option>
                    <option>Birthday</option>
                    <option>Other</option>
                  </select>
                </label>
              </div>
            </div>

            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;label class=&quot;block&quot;&gt;&#13;&#10;    &lt;span&gt;What type of event is it?&lt;/span&gt;&#13;&#10;    &lt;select&#13;&#10;      class=&quot;form-select mt-1.5 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent&quot;&#13;&#10;    &gt;&#13;&#10;      &lt;option&gt;Corporate event&lt;/option&gt;&#13;&#10;      &lt;option&gt;Wedding&lt;/option&gt;&#13;&#10;      &lt;option&gt;Birthday&lt;/option&gt;&#13;&#10;      &lt;option&gt;Other&lt;/option&gt;&#13;&#10;    &lt;/select&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;</code>
              </pre>
            </div>
          </div>

          <!-- Rounded Select -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base"
              >
                Rounded Select
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

            <div class="max-w-xl">
              <p>
                Select can have a rounded shape. To do this, you should use the
                <code class="inline-code">rounded-full</code> utility. Check out
                code for detail of usage.
              </p>
              <div class="mt-5">
                <label class="block">
                  <span>What type of event is it?</span>
                  <select
                    class="form-select mt-1.5 w-full rounded-full border border-slate-300 bg-white px-4 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent"
                  >
                    <option>Corporate event</option>
                    <option>Wedding</option>
                    <option>Birthday</option>
                    <option>Other</option>
                  </select>
                </label>
              </div>
            </div>

            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;label class=&quot;block&quot;&gt;&#13;&#10;    &lt;span&gt;What type of event is it?&lt;/span&gt;&#13;&#10;    &lt;select&#13;&#10;      class=&quot;form-select mt-1.5 w-full rounded-full border border-slate-300 bg-white px-4 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent&quot;&#13;&#10;    &gt;&#13;&#10;      &lt;option&gt;Corporate event&lt;/option&gt;&#13;&#10;      &lt;option&gt;Wedding&lt;/option&gt;&#13;&#10;      &lt;option&gt;Birthday&lt;/option&gt;&#13;&#10;      &lt;option&gt;Other&lt;/option&gt;&#13;&#10;    &lt;/select&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;</code>
              </pre>
            </div>
          </div>

          <!-- Filled Select -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base"
              >
                Filled Select
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

            <div class="max-w-xl">
              <p>
                The select component can be filled. Check out code for detail of
                usage.
              </p>
              <div class="mt-5">
                <label class="block">
                  <span>What type of event is it?</span>
                  <select
                    class="form-select mt-1.5 w-full rounded-lg bg-slate-150 px-3 py-2 ring-primary/50 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                  >
                    <option>Corporate event</option>
                    <option>Wedding</option>
                    <option>Birthday</option>
                    <option>Other</option>
                  </select>
                </label>
              </div>
            </div>

            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;label class=&quot;block&quot;&gt;&#13;&#10;    &lt;span&gt;What type of event is it?&lt;/span&gt;&#13;&#10;    &lt;select&#13;&#10;      class=&quot;form-select mt-1.5 w-full rounded-lg bg-slate-150 px-3 py-2 ring-primary/50 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:hover:bg-navy-900 dark:focus:bg-navy-900&quot;&#13;&#10;    &gt;&#13;&#10;      &lt;option&gt;Corporate event&lt;/option&gt;&#13;&#10;      &lt;option&gt;Wedding&lt;/option&gt;&#13;&#10;      &lt;option&gt;Birthday&lt;/option&gt;&#13;&#10;      &lt;option&gt;Other&lt;/option&gt;&#13;&#10;    &lt;/select&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;</code>
              </pre>
            </div>
          </div>

          <!-- Select Size -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base"
              >
                Select Size
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

            <div class="max-w-xl">
              <p>
                Select component can have various sizes. Check out code for
                detail of usage.
              </p>
              <div class="mt-5 space-y-4">
                <label class="block">
                  <span>What type of event is it?</span>
                  <select
                    class="form-select mt-1 h-8 w-full rounded-lg border border-slate-300 bg-white px-2.5 text-xs+ hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent"
                  >
                    <option>Corporate event</option>
                    <option>Wedding</option>
                    <option>Birthday</option>
                    <option>Other</option>
                  </select>
                </label>
                <label class="block">
                  <span>What type of event is it?</span>
                  <select
                    class="form-select mt-1.5 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent"
                  >
                    <option>Corporate event</option>
                    <option>Wedding</option>
                    <option>Birthday</option>
                    <option>Other</option>
                  </select>
                </label>
                <label class="block">
                  <span>What type of event is it?</span>
                  <select
                    class="form-select mt-1 h-12 w-full rounded-lg border border-slate-300 bg-white px-2.5 text-base hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent"
                  >
                    <option>Corporate event</option>
                    <option>Wedding</option>
                    <option>Birthday</option>
                    <option>Other</option>
                  </select>
                </label>
              </div>
            </div>

            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;label class=&quot;block&quot;&gt;&#13;&#10;    &lt;span&gt;What type of event is it?&lt;/span&gt;&#13;&#10;    &lt;select&#13;&#10;      class=&quot;form-select mt-1 h-8 w-full rounded-lg border border-slate-300 bg-white px-2.5 text-xs+ hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent&quot;&#13;&#10;    &gt;&#13;&#10;      &lt;option&gt;Corporate event&lt;/option&gt;&#13;&#10;      &lt;option&gt;Wedding&lt;/option&gt;&#13;&#10;      &lt;option&gt;Birthday&lt;/option&gt;&#13;&#10;      &lt;option&gt;Other&lt;/option&gt;&#13;&#10;    &lt;/select&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label class=&quot;block&quot;&gt;&#13;&#10;    &lt;span&gt;What type of event is it?&lt;/span&gt;&#13;&#10;    &lt;select&#13;&#10;      class=&quot;form-select mt-1.5 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent&quot;&#13;&#10;    &gt;&#13;&#10;      &lt;option&gt;Corporate event&lt;/option&gt;&#13;&#10;      &lt;option&gt;Wedding&lt;/option&gt;&#13;&#10;      &lt;option&gt;Birthday&lt;/option&gt;&#13;&#10;      &lt;option&gt;Other&lt;/option&gt;&#13;&#10;    &lt;/select&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label class=&quot;block&quot;&gt;&#13;&#10;    &lt;span&gt;What type of event is it?&lt;/span&gt;&#13;&#10;    &lt;select&#13;&#10;      class=&quot;form-select mt-1 h-12 w-full rounded-lg border border-slate-300 bg-white px-2.5 text-base hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent&quot;&#13;&#10;    &gt;&#13;&#10;      &lt;option&gt;Corporate event&lt;/option&gt;&#13;&#10;      &lt;option&gt;Wedding&lt;/option&gt;&#13;&#10;      &lt;option&gt;Birthday&lt;/option&gt;&#13;&#10;      &lt;option&gt;Other&lt;/option&gt;&#13;&#10;    &lt;/select&gt;&#13;&#10;  &lt;/label&gt;  &#13;&#10;</code>
              </pre>
            </div>
          </div>

          <!-- Disabled Select -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base"
              >
                Disabled Select
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

            <div class="max-w-xl">
              <p>
                The selcet component have their own style when disabled.. Check
                out code for detail of usage.
              </p>
              <div class="mt-5">
                <label class="block">
                  <span>What type of event is it?</span>
                  <select
                    disabled
                    class="form-select mt-1.5 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary disabled:pointer-events-none disabled:select-none disabled:border-none disabled:bg-zinc-100 dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent dark:disabled:bg-navy-600"
                  >
                    <option>Corporate event</option>
                    <option>Wedding</option>
                    <option>Birthday</option>
                    <option>Other</option>
                  </select>
                </label>
              </div>
            </div>

            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;label class=&quot;block&quot;&gt;&#13;&#10;    &lt;span&gt;What type of event is it?&lt;/span&gt;&#13;&#10;    &lt;select&#13;&#10;      disabled&#13;&#10;      class=&quot;form-select mt-1.5 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary disabled:pointer-events-none disabled:select-none disabled:border-none disabled:bg-zinc-100 dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent dark:disabled:bg-navy-600&quot;&#13;&#10;    &gt;&#13;&#10;      &lt;option&gt;Corporate event&lt;/option&gt;&#13;&#10;      &lt;option&gt;Wedding&lt;/option&gt;&#13;&#10;      &lt;option&gt;Birthday&lt;/option&gt;&#13;&#10;      &lt;option&gt;Other&lt;/option&gt;&#13;&#10;    &lt;/select&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;</code>
              </pre>
            </div>
          </div>

          <!-- Multipie Select -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base"
              >
                Multipie Select
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

            <div class="max-w-xl">
              <p>
                The <code class="inline-code">multiple</code> attribute
                indicates that multiple options can be selected in the list.
                Check out code for detail of usage.
              </p>
              <div class="mt-5">
                <label class="block">
                  <span>What type of event is it?</span>
                  <select
                    multiple
                    class="form-multiselect mt-1.5 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent"
                  >
                    <option>Corporate event</option>
                    <option selected>Wedding</option>
                    <option>Birthday</option>
                    <option>Other</option>
                  </select>
                </label>
              </div>
            </div>

            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;label class=&quot;block&quot;&gt;&#13;&#10;    &lt;span&gt;What type of event is it?&lt;/span&gt;&#13;&#10;    &lt;select&#13;&#10;      multiple&#13;&#10;      class=&quot;form-multiselect mt-1.5 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent&quot;&#13;&#10;    &gt;&#13;&#10;      &lt;option&gt;Corporate event&lt;/option&gt;&#13;&#10;      &lt;option selected&gt;Wedding&lt;/option&gt;&#13;&#10;      &lt;option&gt;Birthday&lt;/option&gt;&#13;&#10;      &lt;option&gt;Other&lt;/option&gt;&#13;&#10;    &lt;/select&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;</code>
              </pre>
            </div>
          </div>

          <!-- Select Model 
          @see https://alpinejs.dev/directives/model#select-inputs
          -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base"
              >
                Select Model
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

            <div class="max-w-xl">
              <p>
                Model allows you to bind the value of an input element to data
                Check out code for detail of usage.
              </p>
              <div x-data="{selectedItem:'item_1'}" class="mt-5">
                <label class="block">
                  <span>What type of event is it?</span>
                  <select
                    x-model="selectedItem"
                    class="form-select mt-1.5 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent"
                  >
                    <option value="item_1">Corporate event</option>
                    <option value="item_2">Wedding</option>
                    <option value="item_3">Birthday</option>
                    <option value="item_4">Other</option>
                  </select>
                </label>
                <p class="mt-2">Value: <span x-text="selectedItem"></span></p>
              </div>
            </div>

            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &#60;div x-data=&#34;{selectedItem:&#39;item_1&#39;}&#34;&#62;&#13;&#10;    &#60;label class=&#34;block&#34;&#62;&#13;&#10;      &#60;span&#62;What type of event is it?&#60;/span&#62;&#13;&#10;      &#60;select&#13;&#10;        x-model=&#34;selectedItem&#34;&#13;&#10;        class=&#34;form-select mt-1.5 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent&#34;&#13;&#10;      &#62;&#13;&#10;        &#60;option value=&#34;item_1&#34;&#62;Corporate event&#60;/option&#62;&#13;&#10;        &#60;option value=&#34;item_2&#34;&#62;Wedding&#60;/option&#62;&#13;&#10;        &#60;option value=&#34;item_3&#34;&#62;Birthday&#60;/option&#62;&#13;&#10;        &#60;option value=&#34;item_4&#34;&#62;Other&#60;/option&#62;&#13;&#10;      &#60;/select&#62;&#13;&#10;    &#60;/label&#62;&#13;&#10;    &#60;p class=&#34;mt-2&#34;&#62;Value: &#60;span x-text=&#34;selectedItem&#34;&#62;&#60;/span&#62;&#60;/p&#62;&#13;&#10;  &#60;/div&#62;&#13;&#10;
                </code>
              </pre>
            </div>
          </div>

          <!-- Multipie Select Model 
          @see https://alpinejs.dev/directives/model#multiple-select
          -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base"
              >
                Multipie Select Model
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

            <div class="max-w-xl">
              <p>
                Model allows you to bind the value of an input element to data
                Check out code for detail of usage.
              </p>
              <div x-data="{selectedItem:'item_1'}" class="mt-5">
                <label class="block">
                  <span>What type of event is it?</span>
                  <select
                    multiple
                    x-model="selectedItem"
                    class="form-multiselect mt-1.5 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent"
                  >
                    <option value="item_1">Corporate event</option>
                    <option value="item_2">Wedding</option>
                    <option value="item_3">Birthday</option>
                    <option value="item_4">Other</option>
                  </select>
                </label>
                <p class="mt-2">Value: <span x-text="selectedItem"></span></p>
              </div>
            </div>

            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;label class=&quot;block&quot;&gt;&#13;&#10;    &lt;span&gt;What type of event is it?&lt;/span&gt;&#13;&#10;    &lt;select&#13;&#10;      multiple&#13;&#10;      x-model=&quot;selectedItem&quot;&#13;&#10;      class=&quot;form-multiselect mt-1.5 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent&quot;&#13;&#10;    &gt;&#13;&#10;      &lt;option value=&quot;item_1&quot;&gt;Corporate event&lt;/option&gt;&#13;&#10;      &lt;option value=&quot;item_2&quot;&gt;Wedding&lt;/option&gt;&#13;&#10;      &lt;option value=&quot;item_3&quot;&gt;Birthday&lt;/option&gt;&#13;&#10;      &lt;option value=&quot;item_4&quot;&gt;Other&lt;/option&gt;&#13;&#10;    &lt;/select&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;p class=&quot;mt-1&quot;&gt;Value: &lt;span x-text=&quot;selectedItem&quot;&gt;&lt;/span&gt;&lt;/p&gt;&#13;&#10;</code>
              </pre>
            </div>
          </div>
        </div>
      </main>
</x-app-layout>

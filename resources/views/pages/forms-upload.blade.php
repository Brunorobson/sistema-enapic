<x-app-layout title="Form Upload" is-sidebar-open="true" is-header-blur="true">
    <!-- Main Content Wrapper -->
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
            <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
                Input File
            </h2>
            <div class="hidden h-full py-1 sm:flex">
                <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
            </div>
            <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
                <li class="flex items-center space-x-2">
                    <a class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                        href="#">Forms</a>
                    <svg x-ignore xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </li>
                <li>Input File</li>
            </ul>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
            <!-- Input File -->
            <div class="card px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Input File
                    </h2>
                    <label class="flex items-center space-x-2">
                        <span class="text-xs text-slate-400 dark:text-navy-300">Code</span>
                        <input @change="helpers.toggleCode"
                            class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-accent dark:checked:before:bg-white"
                            type="checkbox" />
                    </label>
                </div>
                <div class="max-w-xl">
                    <p>
                        Input elements with type
                        <code class="inline-code">"file"</code> let the user choose one
                        or more files from their device storage. Once chosen, the files
                        can be uploaded to a server using form submission.
                    </p>
                    <div class="inline-space mt-5 flex flex-wrap">
                        <label
                            class="btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                            <input tabindex="-1" type="file"
                                class="pointer-events-none absolute inset-0 h-full w-full opacity-0" />
                            <span class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                </svg>
                                <span>Choose File</span>
                            </span>
                        </label>
                        <label
                            class="btn relative bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                            <input tabindex="-1" type="file"
                                class="pointer-events-none absolute inset-0 h-full w-full opacity-0" />
                            <span class="flex items-center space-x-2">
                                <i class="fa-solid fa-cloud-arrow-up text-base"></i>
                                <span>Choose File</span>
                            </span>
                        </label>
                        <label
                            class="btn border border-slate-300 font-medium text-slate-600 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-100 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
                            <input tabindex="-1" type="file"
                                class="pointer-events-none absolute inset-0 h-full w-full opacity-0" />
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                        </label>
                        <label
                            class="btn h-9 w-9 rounded-full bg-info p-0 font-medium text-white hover:bg-info-focus hover:shadow-lg hover:shadow-info/50 focus:bg-info-focus active:bg-info-focus/90">
                            <input tabindex="-1" type="file"
                                class="pointer-events-none absolute inset-0 h-full w-full opacity-0" />
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                            </svg>
                        </label>
                    </div>
                </div>
                <div class="code-wrapper hidden pt-4">
                    <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
              <code class="language-html" x-ignore>
&lt;label&#13;&#10;    class=&quot;btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90&quot;&#13;&#10;  &gt;&#13;&#10;    &lt;input&#13;&#10;      tabindex=&quot;-1&quot;&#13;&#10;      type=&quot;file&quot;&#13;&#10;      class=&quot;pointer-events-none absolute inset-0 h-full w-full opacity-0&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;div class=&quot;flex items-center space-x-2&quot;&gt;&#13;&#10;      &lt;svg&#13;&#10;        xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;        class=&quot;h-5 w-5&quot;&#13;&#10;        fill=&quot;none&quot;&#13;&#10;        viewBox=&quot;0 0 24 24&quot;&#13;&#10;        stroke=&quot;currentColor&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;path&#13;&#10;          stroke-linecap=&quot;round&quot;&#13;&#10;          stroke-linejoin=&quot;round&quot;&#13;&#10;          stroke-width=&quot;2&quot;&#13;&#10;          d=&quot;M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/svg&gt;&#13;&#10;      &lt;span&gt;Choose File&lt;/span&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label&#13;&#10;    class=&quot;btn relative bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90&quot;&#13;&#10;  &gt;&#13;&#10;    &lt;input&#13;&#10;      tabindex=&quot;-1&quot;&#13;&#10;      type=&quot;file&quot;&#13;&#10;      class=&quot;pointer-events-none absolute inset-0 h-full w-full opacity-0&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;div class=&quot;flex items-center space-x-2&quot;&gt;&#13;&#10;      &lt;i class=&quot;fa-solid fa-cloud-arrow-up text-base&quot;&gt;&lt;/i&gt;&#13;&#10;      &lt;span&gt;Choose File&lt;/span&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label&#13;&#10;    class=&quot;btn border border-slate-300 font-medium text-slate-600 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-100 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90&quot;&#13;&#10;  &gt;&#13;&#10;    &lt;input&#13;&#10;      tabindex=&quot;-1&quot;&#13;&#10;      type=&quot;file&quot;&#13;&#10;      class=&quot;pointer-events-none absolute inset-0 h-full w-full opacity-0&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;svg&#13;&#10;      xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;      class=&quot;h-5 w-5&quot;&#13;&#10;      fill=&quot;none&quot;&#13;&#10;      viewBox=&quot;0 0 24 24&quot;&#13;&#10;      stroke=&quot;currentColor&quot;&#13;&#10;    &gt;&#13;&#10;      &lt;path&#13;&#10;        stroke-linecap=&quot;round&quot;&#13;&#10;        stroke-linejoin=&quot;round&quot;&#13;&#10;        stroke-width=&quot;2&quot;&#13;&#10;        d=&quot;M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12&quot;&#13;&#10;      /&gt;&#13;&#10;    &lt;/svg&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label&#13;&#10;    class=&quot;btn h-9 w-9 rounded-full bg-info p-0 font-medium text-white hover:bg-info-focus hover:shadow-lg hover:shadow-info/50 focus:bg-info-focus active:bg-info-focus/90&quot;&#13;&#10;  &gt;&#13;&#10;    &lt;input&#13;&#10;      tabindex=&quot;-1&quot;&#13;&#10;      type=&quot;file&quot;&#13;&#10;      class=&quot;pointer-events-none absolute inset-0 h-full w-full opacity-0&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;svg&#13;&#10;      xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;      class=&quot;h-5 w-5&quot;&#13;&#10;      fill=&quot;none&quot;&#13;&#10;      viewBox=&quot;0 0 24 24&quot;&#13;&#10;      stroke=&quot;currentColor&quot;&#13;&#10;    &gt;&#13;&#10;      &lt;path&#13;&#10;        stroke-linecap=&quot;round&quot;&#13;&#10;        stroke-linejoin=&quot;round&quot;&#13;&#10;        stroke-width=&quot;2&quot;&#13;&#10;        d=&quot;M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12&quot;&#13;&#10;      /&gt;&#13;&#10;    &lt;/svg&gt;&#13;&#10;  &lt;/label&gt;
              </code>
            </pre>
                </div>
            </div>

            <!-- Basic Filepond -->
            <div class="card px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Basic Filepond
                    </h2>
                    <label class="flex items-center space-x-2">
                        <span class="text-xs text-slate-400 dark:text-navy-300">Code</span>
                        <input @change="helpers.toggleCode"
                            class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-accent dark:checked:before:bg-white"
                            type="checkbox" />
                    </label>
                </div>
                <div class="max-w-xl">
                    <p>
                        Filepond a JavaScript library that can upload anything you throw
                        at it, optimizes images for faster uploads, and offers a great,
                        accessible, silky smooth user experience. You can check the
                        plugin documentation on
                        <a class="font-normal text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                            href="https://github.com/pqina/filepond">Github.</a>
                    </p>
                    <div class="mt-5">
                        <div class="filepond fp-bordered">
                            <input type="file" x-init="$el._x_filepond = FilePond.create($el)" multiple />
                        </div>
                    </div>
                </div>
                <div class="code-wrapper hidden pt-4">
                    <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
              <code class="language-html" x-ignore>
&lt;div class=&quot;filepond fp-bordered&quot;&gt;&#13;&#10;    &lt;input type=&quot;file&quot;  x-init="$el._x_filepond = FilePond.create($el)" multiple /&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;</code>
            </pre>
                </div>
            </div>

            <!-- Filled Filepond -->
            <div class="card px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Filled Filepond
                    </h2>
                    <label class="flex items-center space-x-2">
                        <span class="text-xs text-slate-400 dark:text-navy-300">Code</span>
                        <input @change="helpers.toggleCode"
                            class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-accent dark:checked:before:bg-white"
                            type="checkbox" />
                    </label>
                </div>
                <div class="max-w-xl">
                    <p>
                        Filepond a JavaScript library that can upload anything you throw
                        at it, optimizes images for faster uploads, and offers a great,
                        accessible, silky smooth user experience. You can check the
                        plugin documentation on
                        <a class="font-normal text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                            href="https://github.com/pqina/filepond">Github.</a>
                    </p>
                    <div class="mt-5">
                        <div class="filepond fp-bg-filled">
                            <input type="file" x-init="$el._x_filepond = FilePond.create($el)" multiple />
                        </div>
                    </div>
                </div>
                <div class="code-wrapper hidden pt-4">
                    <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
              <code class="language-html" x-ignore>
&lt;div class=&quot;filepond fp-bg-filled&quot;&gt;&#13;&#10;    &lt;input type=&quot;file&quot;  x-init="$el._x_filepond = FilePond.create($el)" multiple /&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;</code>
            </pre>
                </div>
            </div>

            <!-- Filled & Bordered -->
            <div class="card px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Filled & Bordered
                    </h2>
                    <label class="flex items-center space-x-2">
                        <span class="text-xs text-slate-400 dark:text-navy-300">Code</span>
                        <input @change="helpers.toggleCode"
                            class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-accent dark:checked:before:bg-white"
                            type="checkbox" />
                    </label>
                </div>
                <div class="max-w-xl">
                    <p>
                        Filepond a JavaScript library that can upload anything you throw
                        at it, optimizes images for faster uploads, and offers a great,
                        accessible, silky smooth user experience. You can check the
                        plugin documentation on
                        <a class="font-normal text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                            href="https://github.com/pqina/filepond">Github.</a>
                    </p>
                    <div class="mt-5">
                        <div class="filepond fp-bordered fp-bg-filled">
                            <input type="file" x-init="$el._x_filepond = FilePond.create($el)" multiple />
                        </div>
                    </div>
                </div>
                <div class="code-wrapper hidden pt-4">
                    <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
              <code class="language-html" x-ignore>
&lt;div class=&quot;filepond fp-bordered fp-bg-filled&quot;&gt;&#13;&#10;    &lt;input type=&quot;file&quot;  x-init="$el._x_filepond = FilePond.create($el)" multiple /&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;</code>
            </pre>
                </div>
            </div>

            <!-- Two Grid -->
            <div class="card px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Two Grid
                    </h2>
                    <label class="flex items-center space-x-2">
                        <span class="text-xs text-slate-400 dark:text-navy-300">Code</span>
                        <input @change="helpers.toggleCode"
                            class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-accent dark:checked:before:bg-white"
                            type="checkbox" />
                    </label>
                </div>
                <div class="max-w-xl">
                    <p>
                        Filepond a JavaScript library that can upload anything you throw
                        at it, optimizes images for faster uploads, and offers a great,
                        accessible, silky smooth user experience. You can check the
                        plugin documentation on
                        <a class="font-normal text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                            href="https://github.com/pqina/filepond">Github.</a>
                    </p>
                    <div class="mt-5">
                        <div class="filepond fp-grid fp-bordered [--fp-grid:2]">
                            <input type="file" x-init="$el._x_filepond = FilePond.create($el)" multiple />
                        </div>
                    </div>
                </div>
                <div class="code-wrapper hidden pt-4">
                    <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
              <code class="language-html" x-ignore>
&#60;div class=&#34;filepond fp-grid fp-bordered [--fp-grid:2]&#34;&#62;&#13;&#10;    &#60;input type=&#34;file&#34;  x-init="$el._x_filepond = FilePond.create($el)" multiple /&#62;&#13;&#10;  &#60;/div&#62;&#13;&#10;
              </code>
            </pre>
                </div>
            </div>

            <!-- Three Grid -->
            <div class="card px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Three Grid
                    </h2>
                    <label class="flex items-center space-x-2">
                        <span class="text-xs text-slate-400 dark:text-navy-300">Code</span>
                        <input @change="helpers.toggleCode"
                            class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-accent dark:checked:before:bg-white"
                            type="checkbox" />
                    </label>
                </div>
                <div class="max-w-xl">
                    <p>
                        Filepond a JavaScript library that can upload anything you throw
                        at it, optimizes images for faster uploads, and offers a great,
                        accessible, silky smooth user experience. You can check the
                        plugin documentation on
                        <a class="font-normal text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                            href="https://github.com/pqina/filepond">Github.</a>
                    </p>
                    <div class="mt-5">
                        <div class="filepond fp-grid fp-bordered [--fp-grid:3]">
                            <input type="file" x-init="$el._x_filepond = FilePond.create($el)" multiple />
                        </div>
                    </div>
                </div>
                <div class="code-wrapper hidden pt-4">
                    <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
              <code class="language-html" x-ignore>
&#60;div class=&#34;filepond fp-grid fp-bordered [--fp-grid:3]&#34;&#62;&#13;&#10;    &#60;input type=&#34;file&#34;  x-init="$el._x_filepond = FilePond.create($el)" multiple /&#62;&#13;&#10;  &#60;/div&#62;&#13;&#10;
              </code>
            </pre>
                </div>
            </div>

            <!-- Four Grid -->
            <div class="card px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Four Grid
                    </h2>
                    <label class="flex items-center space-x-2">
                        <span class="text-xs text-slate-400 dark:text-navy-300">Code</span>
                        <input @change="helpers.toggleCode"
                            class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-accent dark:checked:before:bg-white"
                            type="checkbox" />
                    </label>
                </div>
                <div class="max-w-xl">
                    <p>
                        Filepond a JavaScript library that can upload anything you throw
                        at it, optimizes images for faster uploads, and offers a great,
                        accessible, silky smooth user experience. You can check the
                        plugin documentation on
                        <a class="font-normal text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                            href="https://github.com/pqina/filepond">Github.</a>
                    </p>
                    <div class="mt-5">
                        <div class="filepond fp-grid fp-bordered [--fp-grid:4]">
                            <input type="file" x-init="$el._x_filepond = FilePond.create($el)" multiple />
                        </div>
                    </div>
                </div>
                <div class="code-wrapper hidden pt-4">
                    <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
              <code class="language-html" x-ignore>
&#60;div class=&#34;filepond fp-grid fp-bordered [--fp-grid:4]&#34;&#62;&#13;&#10;    &#60;input type=&#34;file&#34;  x-init="$el._x_filepond = FilePond.create($el)" multiple /&#62;&#13;&#10;  &#60;/div&#62;&#13;&#10;
              </code>
            </pre>
                </div>
            </div>

            <!-- Circle Filepond -->
            <div class="card px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Circle Filepond
                    </h2>
                    <label class="flex items-center space-x-2">
                        <span class="text-xs text-slate-400 dark:text-navy-300">Code</span>
                        <input @change="helpers.toggleCode"
                            class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-accent dark:checked:before:bg-white"
                            type="checkbox" />
                    </label>
                </div>
                <div class="max-w-xl">
                    <p>
                        Filepond a JavaScript library that can upload anything you throw
                        at it, optimizes images for faster uploads, and offers a great,
                        accessible, silky smooth user experience. You can check the
                        plugin documentation on
                        <a class="font-normal text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                            href="https://github.com/pqina/filepond">Github.</a>
                    </p>
                    <div class="inline-space mt-5 flex flex-wrap items-end">
                        <div class="filepond fp-bordered label-icon w-28">
                            <input type="file" x-init="$el._x_filepond = FilePond.create($el, {
                                stylePanelAspectRatio: '1:1',
                                stylePanelLayout: 'compact circle',
                                labelIdle: `<svg xmlns='http://www.w3.org/2000/svg' class='h-8 w-8' fill='none' viewBox='0 0 24 24' stroke='currentColor'>
                                                  <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12'/>
                                                </svg>`
                            })"
                                accept="image/png, image/jpeg, image/gif" />
                        </div>
                        <div class="filepond fp-bordered label-icon w-24">
                            <input type="file" x-init="$el._x_filepond = FilePond.create($el, {
                                stylePanelAspectRatio: '1:1',
                                stylePanelLayout: 'compact circle',
                                labelIdle: `<svg xmlns='http://www.w3.org/2000/svg' class='h-8 w-8' fill='none' viewBox='0 0 24 24' stroke='currentColor'>
                                                  <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12'/>
                                                </svg>`
                            })"
                                accept="image/png, image/jpeg, image/gif" />
                        </div>
                        <div class="filepond fp-bg-filled label-icon w-20">
                            <input type="file" x-init="$el._x_filepond = FilePond.create($el, {
                                stylePanelAspectRatio: '1:1',
                                stylePanelLayout: 'compact circle',
                                labelIdle: `<svg xmlns='http://www.w3.org/2000/svg' class='h-8 w-8' fill='none' viewBox='0 0 24 24' stroke='currentColor'>
                                                  <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12'/>
                                                </svg>`
                            })"
                                accept="image/png, image/jpeg, image/gif" />
                        </div>
                    </div>
                </div>
                <div class="code-wrapper hidden pt-4">
                    <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
              <code class="language-html" x-ignore>
&lt;div class=&quot;filepond fp-bordered label-icon w-28&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      type=&quot;file&quot;&#13;&#10;      x-init=&quot;$el._x_filepond = FilePond.create($el,{&#13;&#10;            stylePanelAspectRatio: &apos;1:1&apos;,&#13;&#10;            stylePanelLayout: &apos;compact circle&apos;,&#13;&#10;            labelIdle: `&lt;svg xmlns=&apos;http://www.w3.org/2000/svg&apos; class=&apos;h-8 w-8&apos; fill=&apos;none&apos; viewBox=&apos;0 0 24 24&apos; stroke=&apos;currentColor&apos;&gt;&#13;&#10;              &lt;path stroke-linecap=&apos;round&apos; stroke-linejoin=&apos;round&apos; stroke-width=&apos;2&apos; d=&apos;M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12&apos;/&gt;&#13;&#10;            &lt;/svg&gt;`&#13;&#10;          })&quot;&#13;&#10;      accept=&quot;image/png, image/jpeg, image/gif&quot;&#13;&#10;    /&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;  &lt;div class=&quot;filepond fp-bordered label-icon w-24&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      type=&quot;file&quot;&#13;&#10;      x-init=&quot;$el._x_filepond = FilePond.create($el,{&#13;&#10;            stylePanelAspectRatio: &apos;1:1&apos;,&#13;&#10;            stylePanelLayout: &apos;compact circle&apos;,&#13;&#10;            labelIdle: `&lt;svg xmlns=&apos;http://www.w3.org/2000/svg&apos; class=&apos;h-8 w-8&apos; fill=&apos;none&apos; viewBox=&apos;0 0 24 24&apos; stroke=&apos;currentColor&apos;&gt;&#13;&#10;              &lt;path stroke-linecap=&apos;round&apos; stroke-linejoin=&apos;round&apos; stroke-width=&apos;2&apos; d=&apos;M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12&apos;/&gt;&#13;&#10;            &lt;/svg&gt;`&#13;&#10;          })&quot;&#13;&#10;      accept=&quot;image/png, image/jpeg, image/gif&quot;&#13;&#10;    /&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;  &lt;div class=&quot;filepond fp-bg-filled label-icon w-20&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      type=&quot;file&quot;&#13;&#10;      x-init=&quot;$el._x_filepond = FilePond.create($el,{&#13;&#10;            stylePanelAspectRatio: &apos;1:1&apos;,&#13;&#10;            stylePanelLayout: &apos;compact circle&apos;,&#13;&#10;            labelIdle: `&lt;svg xmlns=&apos;http://www.w3.org/2000/svg&apos; class=&apos;h-8 w-8&apos; fill=&apos;none&apos; viewBox=&apos;0 0 24 24&apos; stroke=&apos;currentColor&apos;&gt;&#13;&#10;              &lt;path stroke-linecap=&apos;round&apos; stroke-linejoin=&apos;round&apos; stroke-width=&apos;2&apos; d=&apos;M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12&apos;/&gt;&#13;&#10;            &lt;/svg&gt;`&#13;&#10;          })&quot;&#13;&#10;      accept=&quot;image/png, image/jpeg, image/gif&quot;&#13;&#10;    /&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;                </code>
            </pre>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>

<x-app-layout title="Modal Component" is-sidebar-open="true" is-header-blur="true">
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
            <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
                Modal
            </h2>
            <div class="hidden h-full py-1 sm:flex">
                <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
            </div>
            <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
                <li class="flex items-center space-x-2">
                    <a class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                        href="#">Components</a>
                    <svg x-ignore xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </li>
                <li>Modal</li>
            </ul>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
            <!-- Basic Modal -->
            <div class="card px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Basic Modal
                    </h2>
                    <label class="inline-flex items-center space-x-2">
                        <span class="text-xs text-slate-400 dark:text-navy-300">Code</span>
                        <input @change="helpers.toggleCode"
                            class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-accent dark:checked:before:bg-white"
                            type="checkbox" />
                    </label>
                </div>
                <div>
                    <p class="max-w-xl">
                        The Modal component inform users about a specific task and may
                        contain critical information, require decisions, or involve
                        multiple tasks.
                    </p>
                    <div class="mt-5" x-data="{ showModal: false }">
                        <button @click="showModal = true"
                            class="btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                            Basic Modal
                        </button>
                        <template x-teleport="#x-teleport-target">
                            <div class="fixed inset-0 z-[100] flex flex-col items-center justify-center overflow-hidden px-4 py-6 sm:px-5"
                                x-show="showModal" role="dialog" @keydown.window.escape="showModal = false">
                                <div class="absolute inset-0 bg-slate-900/60 transition-opacity duration-300"
                                    @click="showModal = false" x-show="showModal" x-transition:enter="ease-out"
                                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                    x-transition:leave="ease-in" x-transition:leave-start="opacity-100"
                                    x-transition:leave-end="opacity-0"></div>
                                <div class="relative max-w-lg rounded-lg flex overflow-y-auto flex-col bg-white px-4 py-10 text-center transition-opacity duration-300 dark:bg-navy-700 sm:px-5"
                                    x-show="showModal" x-transition:enter="ease-out"
                                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                    x-transition:leave="ease-in" x-transition:leave-start="opacity-100"
                                    x-transition:leave-end="opacity-0">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="inline h-28 w-28 text-success mx-auto shrink-0" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>

                                    <div class="mt-4">
                                        <h2 class="text-2xl text-slate-700 dark:text-navy-100">
                                            Success Message
                                        </h2>
                                        <p class="mt-2">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Consequuntur dignissimos soluta totam?
                                        </p>
                                        <button @click="showModal = false"
                                            class="btn mt-6 bg-success font-medium text-white hover:bg-success-focus focus:bg-success-focus active:bg-success-focus/90">
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
                <div class="code-wrapper hidden pt-4">
                    <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
                <code class="language-html" x-ignore>  
  &lt;div x-data=&quot;{showModal:false}&quot;&gt;&#13;&#10;    &lt;button&#13;&#10;      @click=&quot;showModal = true&quot;&#13;&#10;      class=&quot;btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90&quot;&#13;&#10;    &gt;&#13;&#10;      Basic Modal&#13;&#10;    &lt;/button&gt;&#13;&#10;    &lt;template x-teleport=&quot;#x-teleport-target&quot;&gt;&#13;&#10;      &lt;div&#13;&#10;        class=&quot;fixed inset-0 z-[100] flex flex-col items-center justify-center overflow-hidden px-4 py-6 sm:px-5&quot;&#13;&#10;        x-show=&quot;showModal&quot;&#13;&#10;        role=&quot;dialog&quot;&#13;&#10;        @keydown.window.escape=&quot;showModal = false&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;div&#13;&#10;          class=&quot;absolute inset-0 bg-slate-900/60 transition-opacity duration-300&quot;&#13;&#10;          @click=&quot;showModal = false&quot;&#13;&#10;          x-show=&quot;showModal&quot;&#13;&#10;          x-transition:enter=&quot;ease-out&quot;&#13;&#10;          x-transition:enter-start=&quot;opacity-0&quot;&#13;&#10;          x-transition:enter-end=&quot;opacity-100&quot;&#13;&#10;          x-transition:leave=&quot;ease-in&quot;&#13;&#10;          x-transition:leave-start=&quot;opacity-100&quot;&#13;&#10;          x-transition:leave-end=&quot;opacity-0&quot;&#13;&#10;        &gt;&lt;/div&gt;&#13;&#10;        &lt;div&#13;&#10;          class=&quot;relative max-w-lg rounded-lg bg-white px-4 py-10 text-center transition-opacity duration-300 dark:bg-navy-700 sm:px-5&quot;&#13;&#10;          x-show=&quot;showModal&quot;&#13;&#10;          x-transition:enter=&quot;ease-out&quot;&#13;&#10;          x-transition:enter-start=&quot;opacity-0&quot;&#13;&#10;          x-transition:enter-end=&quot;opacity-100&quot;&#13;&#10;          x-transition:leave=&quot;ease-in&quot;&#13;&#10;          x-transition:leave-start=&quot;opacity-100&quot;&#13;&#10;          x-transition:leave-end=&quot;opacity-0&quot;&#13;&#10;        &gt;&#13;&#10;          &lt;svg&#13;&#10;            xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;            class=&quot;inline h-28 w-28 text-success&quot;&#13;&#10;            fill=&quot;none&quot;&#13;&#10;            viewBox=&quot;0 0 24 24&quot;&#13;&#10;            stroke=&quot;currentColor&quot;&#13;&#10;          &gt;&#13;&#10;            &lt;path&#13;&#10;              stroke-linecap=&quot;round&quot;&#13;&#10;              stroke-linejoin=&quot;round&quot;&#13;&#10;              stroke-width=&quot;2&quot;&#13;&#10;              d=&quot;M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z&quot;&#13;&#10;            &gt;&lt;/path&gt;&#13;&#10;          &lt;/svg&gt;&#13;&#10;&#13;&#10;          &lt;div class=&quot;mt-4&quot;&gt;&#13;&#10;            &lt;h2 class=&quot;text-2xl text-slate-700 dark:text-navy-100&quot;&gt;&#13;&#10;              Success Message&#13;&#10;            &lt;/h2&gt;&#13;&#10;            &lt;p class=&quot;mt-2&quot;&gt;&#13;&#10;              Lorem ipsum dolor sit amet, consectetur adipisicing elit.&#13;&#10;              Consequuntur dignissimos soluta totam?&#13;&#10;            &lt;/p&gt;&#13;&#10;            &lt;button&#13;&#10;              @click=&quot;showModal = false&quot;&#13;&#10;              class=&quot;btn mt-6 bg-success font-medium text-white hover:bg-success-focus focus:bg-success-focus active:bg-success-focus/90&quot;&#13;&#10;            &gt;&#13;&#10;              Close&#13;&#10;            &lt;/button&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/template&gt;&#13;&#10;  &lt;/div&gt;
                </code>
              </pre>
                </div>
            </div>

            <!-- Backdrop Blur -->
            <div class="card px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Backdrop Blur
                    </h2>
                    <label class="inline-flex items-center space-x-2">
                        <span class="text-xs text-slate-400 dark:text-navy-300">Code</span>
                        <input @change="helpers.toggleCode"
                            class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-accent dark:checked:before:bg-white"
                            type="checkbox" />
                    </label>
                </div>
                <div>
                    <p class="max-w-xl">
                        The Modal component inform users about a specific task and may
                        contain critical information, require decisions, or involve
                        multiple tasks.
                    </p>
                    <div class="mt-5" x-data="{ showModal: false }">
                        <button @click="showModal = true"
                            class="btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                            Backdrop Blur
                        </button>
                        <template x-teleport="#x-teleport-target">
                            <div class="fixed inset-0 z-[100] flex flex-col items-center justify-center overflow-hidden px-4 py-6 sm:px-5"
                                x-show="showModal" role="dialog" @keydown.window.escape="showModal = false">
                                <div class="absolute inset-0 bg-slate-900/60 backdrop-blur transition-opacity duration-300"
                                    @click="showModal = false" x-show="showModal" x-transition:enter="ease-out"
                                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                    x-transition:leave="ease-in" x-transition:leave-start="opacity-100"
                                    x-transition:leave-end="opacity-0"></div>
                                <div class="relative max-w-lg flex flex-col overflow-y-auto rounded-lg bg-white px-4 py-10 text-center transition-opacity duration-300 dark:bg-navy-700 sm:px-5"
                                    x-show="showModal" x-transition:enter="ease-out"
                                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                    x-transition:leave="ease-in" x-transition:leave-start="opacity-100"
                                    x-transition:leave-end="opacity-0">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="inline h-28 w-28 text-success shrink-0 mx-auto" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>

                                    <div class="mt-4">
                                        <h2 class="text-2xl text-slate-700 dark:text-navy-100">
                                            Success Message
                                        </h2>
                                        <p class="mt-2">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Consequuntur dignissimos soluta totam?
                                        </p>
                                        <button @click="showModal = false"
                                            class="btn mt-6 bg-success font-medium text-white hover:bg-success-focus focus:bg-success-focus active:bg-success-focus/90">
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
                <div class="code-wrapper hidden pt-4">
                    <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
                <code class="language-html" x-ignore>  
  &lt;div x-data=&quot;{showModal:false}&quot;&gt;&#13;&#10;    &lt;button&#13;&#10;      @click=&quot;showModal = true&quot;&#13;&#10;      class=&quot;btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90&quot;&#13;&#10;    &gt;&#13;&#10;      Backdrop Blur&#13;&#10;    &lt;/button&gt;&#13;&#10;    &lt;template x-teleport=&quot;#x-teleport-target&quot;&gt;&#13;&#10;      &lt;div&#13;&#10;        class=&quot;fixed inset-0 z-[100] flex flex-col items-center justify-center overflow-hidden px-4 py-6 sm:px-5&quot;&#13;&#10;        x-show=&quot;showModal&quot;&#13;&#10;        role=&quot;dialog&quot;&#13;&#10;        @keydown.window.escape=&quot;showModal = false&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;div&#13;&#10;          class=&quot;absolute inset-0 bg-slate-900/60 backdrop-blur transition-opacity duration-300&quot;&#13;&#10;          @click=&quot;showModal = false&quot;&#13;&#10;          x-show=&quot;showModal&quot;&#13;&#10;          x-transition:enter=&quot;ease-out&quot;&#13;&#10;          x-transition:enter-start=&quot;opacity-0&quot;&#13;&#10;          x-transition:enter-end=&quot;opacity-100&quot;&#13;&#10;          x-transition:leave=&quot;ease-in&quot;&#13;&#10;          x-transition:leave-start=&quot;opacity-100&quot;&#13;&#10;          x-transition:leave-end=&quot;opacity-0&quot;&#13;&#10;        &gt;&lt;/div&gt;&#13;&#10;        &lt;div&#13;&#10;          class=&quot;relative max-w-lg rounded-lg bg-white px-4 py-10 text-center transition-opacity duration-300 dark:bg-navy-700 sm:px-5&quot;&#13;&#10;          x-show=&quot;showModal&quot;&#13;&#10;          x-transition:enter=&quot;ease-out&quot;&#13;&#10;          x-transition:enter-start=&quot;opacity-0&quot;&#13;&#10;          x-transition:enter-end=&quot;opacity-100&quot;&#13;&#10;          x-transition:leave=&quot;ease-in&quot;&#13;&#10;          x-transition:leave-start=&quot;opacity-100&quot;&#13;&#10;          x-transition:leave-end=&quot;opacity-0&quot;&#13;&#10;        &gt;&#13;&#10;          &lt;svg&#13;&#10;            xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;            class=&quot;inline h-28 w-28 text-success&quot;&#13;&#10;            fill=&quot;none&quot;&#13;&#10;            viewBox=&quot;0 0 24 24&quot;&#13;&#10;            stroke=&quot;currentColor&quot;&#13;&#10;          &gt;&#13;&#10;            &lt;path&#13;&#10;              stroke-linecap=&quot;round&quot;&#13;&#10;              stroke-linejoin=&quot;round&quot;&#13;&#10;              stroke-width=&quot;2&quot;&#13;&#10;              d=&quot;M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z&quot;&#13;&#10;            &gt;&lt;/path&gt;&#13;&#10;          &lt;/svg&gt;&#13;&#10;&#13;&#10;          &lt;div class=&quot;mt-4&quot;&gt;&#13;&#10;            &lt;h2 class=&quot;text-2xl text-slate-700 dark:text-navy-100&quot;&gt;&#13;&#10;              Success Message&#13;&#10;            &lt;/h2&gt;&#13;&#10;            &lt;p class=&quot;mt-2&quot;&gt;&#13;&#10;              Lorem ipsum dolor sit amet, consectetur adipisicing elit.&#13;&#10;              Consequuntur dignissimos soluta totam?&#13;&#10;            &lt;/p&gt;&#13;&#10;            &lt;button&#13;&#10;              @click=&quot;showModal = false&quot;&#13;&#10;              class=&quot;btn mt-6 bg-success font-medium text-white hover:bg-success-focus focus:bg-success-focus active:bg-success-focus/90&quot;&#13;&#10;            &gt;&#13;&#10;              Close&#13;&#10;            &lt;/button&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/template&gt;&#13;&#10;  &lt;/div&gt;
                </code>
              </pre>
                </div>
            </div>

            <!-- Modal Transition -->
            <div class="card px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Modal Transition
                    </h2>
                    <label class="inline-flex items-center space-x-2">
                        <span class="text-xs text-slate-400 dark:text-navy-300">Code</span>
                        <input @change="helpers.toggleCode"
                            class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-accent dark:checked:before:bg-white"
                            type="checkbox" />
                    </label>
                </div>
                <div>
                    <p class="max-w-xl">
                        The Modal component inform users about a specific task and may
                        contain critical information, require decisions, or involve
                        multiple tasks.
                    </p>
                    <div class="inline-space mt-5 flex">
                        <div x-data="{ showModal: false }">
                            <button @click="showModal = true"
                                class="btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                Shift Up
                            </button>
                            <template x-teleport="#x-teleport-target">
                                <div class="fixed inset-0 z-[100] flex flex-col items-center justify-center overflow-hidden px-4 py-6 sm:px-5"
                                    x-show="showModal" role="dialog" @keydown.window.escape="showModal = false">
                                    <div class="absolute inset-0 bg-slate-900/60 transition-opacity duration-300"
                                        @click="showModal = false" x-show="showModal" x-transition:enter="ease-out"
                                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                        x-transition:leave="ease-in" x-transition:leave-start="opacity-100"
                                        x-transition:leave-end="opacity-0"></div>
                                    <div class="relative max-w-md flex flex-col overflow-y-auto rounded-lg bg-white pt-10 pb-4 text-center transition-all duration-300 dark:bg-navy-700"
                                        x-show="showModal" x-transition:enter="easy-out"
                                        x-transition:enter-start="opacity-0 [transform:translate3d(0,1rem,0)]"
                                        x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]"
                                        x-transition:leave="easy-in"
                                        x-transition:leave-start="opacity-100 [transform:translate3d(0,0,0)]"
                                        x-transition:leave-end="opacity-0 [transform:translate3d(0,1rem,0)]">
                                        <div class="avatar h-20 w-20 mx-auto">
                                            <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                                                alt="avatar" />
                                            <div
                                                class="absolute right-0 m-1 h-4 w-4 rounded-full border-2 border-white bg-primary dark:border-navy-700 dark:bg-accent">
                                            </div>
                                        </div>
                                        <div class="mt-4 px-4 sm:px-12">
                                            <h3 class="text-lg text-slate-800 dark:text-navy-50">
                                                Follow Request
                                            </h3>
                                            <p class="mt-1 text-slate-500 dark:text-navy-200">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Fuga sunt vel vero.
                                            </p>
                                        </div>
                                        <div class="my-4 mt-16 h-px bg-slate-200 dark:bg-navy-500"></div>

                                        <div class="space-x-3">
                                            <button @click="showModal = false"
                                                class="btn min-w-[7rem] rounded-full border border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-50 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
                                                Cancel
                                            </button>
                                            <button @click="showModal = false"
                                                class="btn min-w-[7rem] rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                                Apply
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                        <div x-data="{ showModal: false }">
                            <button @click="showModal = true"
                                class="btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                Shift Down
                            </button>
                            <template x-teleport="#x-teleport-target">
                                <div class="fixed inset-0 z-[100] flex flex-col items-center justify-center overflow-hidden px-4 py-6 sm:px-5"
                                    x-show="showModal" role="dialog" @keydown.window.escape="showModal = false">
                                    <div class="absolute inset-0 bg-slate-900/60 transition-opacity duration-300"
                                        @click="showModal = false" x-show="showModal" x-transition:enter="ease-out"
                                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                        x-transition:leave="ease-in" x-transition:leave-start="opacity-100"
                                        x-transition:leave-end="opacity-0"></div>
                                    <div class="relative max-w-sm flex flex-col overflow-y-auto rounded-lg bg-white px-4 pb-4 transition-all duration-300 dark:bg-navy-700 sm:px-5"
                                        x-show="showModal" x-transition:enter="easy-out"
                                        x-transition:enter-start="opacity-0 [transform:translate3d(0,-1rem,0)]"
                                        x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]"
                                        x-transition:leave="easy-in"
                                        x-transition:leave-start="opacity-100 [transform:translate3d(0,0,0)]"
                                        x-transition:leave-end="opacity-0 [transform:translate3d(0,-1rem,0)]">
                                        <div class="my-3 flex h-8 items-center justify-between">
                                            <h2
                                                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                                                Table Settings
                                            </h2>

                                            <button @click="showModal = !showModal"
                                                class="btn -mr-1.5 h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Aut dignissimos.
                                        </p>
                                        <div class="mt-4 grid grid-cols-2 gap-4">
                                            <label class="inline-flex items-center space-x-2">
                                                <input checked
                                                    class="form-checkbox is-basic h-5 w-5 rounded border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent"
                                                    type="checkbox" />
                                                <p>ID</p>
                                            </label>
                                            <label class="inline-flex items-center space-x-2">
                                                <input checked
                                                    class="form-checkbox is-basic h-5 w-5 rounded border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent"
                                                    type="checkbox" />
                                                <p>Name</p>
                                            </label>
                                            <label class="inline-flex items-center space-x-2">
                                                <input checked
                                                    class="form-checkbox is-basic h-5 w-5 rounded border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent"
                                                    type="checkbox" />
                                                <p>Email</p>
                                            </label>
                                            <label class="inline-flex items-center space-x-2">
                                                <input
                                                    class="form-checkbox is-basic h-5 w-5 rounded border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent"
                                                    type="checkbox" />
                                                <p>Address</p>
                                            </label>
                                            <label class="inline-flex items-center space-x-2">
                                                <input checked
                                                    class="form-checkbox is-basic h-5 w-5 rounded border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent"
                                                    type="checkbox" />
                                                <p>Created at</p>
                                            </label>
                                            <label class="inline-flex items-center space-x-2">
                                                <input
                                                    class="form-checkbox is-basic h-5 w-5 rounded border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent"
                                                    type="checkbox" />
                                                <p>Updated at</p>
                                            </label>
                                            <label class="col-span-2 inline-flex items-center space-x-2">
                                                <input
                                                    class="form-switch is-outline h-5 w-10 rounded-full border border-slate-400/70 bg-transparent before:rounded-full before:bg-slate-300 checked:border-primary checked:before:bg-primary dark:border-navy-400 dark:before:bg-navy-300 dark:checked:border-accent dark:checked:before:bg-accent"
                                                    type="checkbox" />
                                                <span>Show Avatar</span>
                                            </label>
                                        </div>
                                        <div class="mt-4 text-right">
                                            <button
                                                class="btn h-8 rounded-full text-xs+ font-medium text-slate-700 hover:bg-slate-300/20 active:bg-slate-300/25 dark:text-navy-100 dark:hover:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                Cancel
                                            </button>
                                            <button @click="showModal = false"
                                                class="btn h-8 rounded-full bg-primary text-xs+ font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                                Apply
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
                <div class="code-wrapper hidden pt-4">
                    <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
                <code class="language-html" x-ignore>  
  &lt;div x-data=&quot;{showModal:false}&quot;&gt;&#13;&#10;    &lt;button&#13;&#10;      @click=&quot;showModal = true&quot;&#13;&#10;      class=&quot;btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90&quot;&#13;&#10;    &gt;&#13;&#10;      Shift Up&#13;&#10;    &lt;/button&gt;&#13;&#10;    &lt;template x-teleport=&quot;#x-teleport-target&quot;&gt;&#13;&#10;      &lt;div&#13;&#10;        class=&quot;fixed inset-0 z-[100] flex flex-col items-center justify-center overflow-hidden px-4 py-6 sm:px-5&quot;&#13;&#10;        x-show=&quot;showModal&quot;&#13;&#10;        role=&quot;dialog&quot;&#13;&#10;        @keydown.window.escape=&quot;showModal = false&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;div&#13;&#10;          class=&quot;absolute inset-0 bg-slate-900/60 transition-opacity duration-300&quot;&#13;&#10;          @click=&quot;showModal = false&quot;&#13;&#10;          x-show=&quot;showModal&quot;&#13;&#10;          x-transition:enter=&quot;ease-out&quot;&#13;&#10;          x-transition:enter-start=&quot;opacity-0&quot;&#13;&#10;          x-transition:enter-end=&quot;opacity-100&quot;&#13;&#10;          x-transition:leave=&quot;ease-in&quot;&#13;&#10;          x-transition:leave-start=&quot;opacity-100&quot;&#13;&#10;          x-transition:leave-end=&quot;opacity-0&quot;&#13;&#10;        &gt;&lt;/div&gt;&#13;&#10;        &lt;div&#13;&#10;          class=&quot;relative max-w-md rounded-lg bg-white pt-10 pb-4 text-center transition-all duration-300 dark:bg-navy-700&quot;&#13;&#10;          x-show=&quot;showModal&quot;&#13;&#10;          x-transition:enter=&quot;easy-out&quot;&#13;&#10;          x-transition:enter-start=&quot;opacity-0 [transform:translate3d(0,1rem,0)]&quot;&#13;&#10;          x-transition:enter-end=&quot;opacity-100 [transform:translate3d(0,0,0)]&quot;&#13;&#10;          x-transition:leave=&quot;easy-in&quot;&#13;&#10;          x-transition:leave-start=&quot;opacity-100 [transform:translate3d(0,0,0)]&quot;&#13;&#10;          x-transition:leave-end=&quot;opacity-0 [transform:translate3d(0,1rem,0)]&quot;&#13;&#10;        &gt;&#13;&#10;          &lt;div class=&quot;avatar h-20 w-20&quot;&gt;&#13;&#10;            &lt;img&#13;&#10;              class=&quot;rounded-full&quot;&#13;&#10;              src=&quot;images/100x100.png&quot;&#13;&#10;              alt=&quot;avatar&quot;&#13;&#10;            /&gt;&#13;&#10;            &lt;div&#13;&#10;              class=&quot;absolute right-0 m-1 h-4 w-4 rounded-full border-2 border-white bg-primary dark:border-navy-700 dark:bg-accent&quot;&#13;&#10;            &gt;&lt;/div&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;          &lt;div class=&quot;mt-4 px-4 sm:px-12&quot;&gt;&#13;&#10;            &lt;h3 class=&quot;text-lg text-slate-800 dark:text-navy-50&quot;&gt;&#13;&#10;              Follow Request&#13;&#10;            &lt;/h3&gt;&#13;&#10;            &lt;p class=&quot;mt-1 text-slate-500 dark:text-navy-200&quot;&gt;&#13;&#10;              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga&#13;&#10;              sunt vel vero.&#13;&#10;            &lt;/p&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;          &lt;div class=&quot;my-4 mt-16 h-px bg-slate-200 dark:bg-navy-500&quot;&gt;&lt;/div&gt;&#13;&#10;&#13;&#10;          &lt;div class=&quot;space-x-3&quot;&gt;&#13;&#10;            &lt;button&#13;&#10;              @click=&quot;showModal = false&quot;&#13;&#10;              class=&quot;btn min-w-[7rem] rounded-full border border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-50 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90&quot;&#13;&#10;            &gt;&#13;&#10;              Cancel&#13;&#10;            &lt;/button&gt;&#13;&#10;            &lt;button&#13;&#10;              @click=&quot;showModal = false&quot;&#13;&#10;              class=&quot;btn min-w-[7rem] rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90&quot;&#13;&#10;            &gt;&#13;&#10;              Apply&#13;&#10;            &lt;/button&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/template&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;  &lt;div x-data=&quot;{showModal:false}&quot;&gt;&#13;&#10;    &lt;button&#13;&#10;      @click=&quot;showModal = true&quot;&#13;&#10;      class=&quot;btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90&quot;&#13;&#10;    &gt;&#13;&#10;      Shift Down&#13;&#10;    &lt;/button&gt;&#13;&#10;    &lt;template x-teleport=&quot;#x-teleport-target&quot;&gt;&#13;&#10;      &lt;div&#13;&#10;        class=&quot;fixed inset-0 z-[100] flex flex-col items-center justify-center overflow-hidden px-4 py-6 sm:px-5&quot;&#13;&#10;        x-show=&quot;showModal&quot;&#13;&#10;        role=&quot;dialog&quot;&#13;&#10;        @keydown.window.escape=&quot;showModal = false&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;div&#13;&#10;          class=&quot;absolute inset-0 bg-slate-900/60 transition-opacity duration-300&quot;&#13;&#10;          @click=&quot;showModal = false&quot;&#13;&#10;          x-show=&quot;showModal&quot;&#13;&#10;          x-transition:enter=&quot;ease-out&quot;&#13;&#10;          x-transition:enter-start=&quot;opacity-0&quot;&#13;&#10;          x-transition:enter-end=&quot;opacity-100&quot;&#13;&#10;          x-transition:leave=&quot;ease-in&quot;&#13;&#10;          x-transition:leave-start=&quot;opacity-100&quot;&#13;&#10;          x-transition:leave-end=&quot;opacity-0&quot;&#13;&#10;        &gt;&lt;/div&gt;&#13;&#10;        &lt;div&#13;&#10;          class=&quot;relative max-w-sm rounded-lg bg-white px-4 pb-4 transition-all duration-300 dark:bg-navy-700 sm:px-5&quot;&#13;&#10;          x-show=&quot;showModal&quot;&#13;&#10;          x-transition:enter=&quot;easy-out&quot;&#13;&#10;          x-transition:enter-start=&quot;opacity-0 [transform:translate3d(0,-1rem,0)]&quot;&#13;&#10;          x-transition:enter-end=&quot;opacity-100 [transform:translate3d(0,0,0)]&quot;&#13;&#10;          x-transition:leave=&quot;easy-in&quot;&#13;&#10;          x-transition:leave-start=&quot;opacity-100 [transform:translate3d(0,0,0)]&quot;&#13;&#10;          x-transition:leave-end=&quot;opacity-0 [transform:translate3d(0,-1rem,0)]&quot;&#13;&#10;        &gt;&#13;&#10;          &lt;div class=&quot;my-3 flex h-8 items-center justify-between&quot;&gt;&#13;&#10;            &lt;h2&#13;&#10;              class=&quot;font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base&quot;&#13;&#10;            &gt;&#13;&#10;              Table Settings&#13;&#10;            &lt;/h2&gt;&#13;&#10;&#13;&#10;            &lt;button&#13;&#10;              @click=&quot;showModal = !showModal&quot;&#13;&#10;              class=&quot;btn -mr-1.5 h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25&quot;&#13;&#10;            &gt;&#13;&#10;              &lt;svg&#13;&#10;                xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;                class=&quot;h-4.5 w-4.5&quot;&#13;&#10;                fill=&quot;none&quot;&#13;&#10;                viewBox=&quot;0 0 24 24&quot;&#13;&#10;                stroke=&quot;currentColor&quot;&#13;&#10;                stroke-width=&quot;2&quot;&#13;&#10;              &gt;&#13;&#10;                &lt;path&#13;&#10;                  stroke-linecap=&quot;round&quot;&#13;&#10;                  stroke-linejoin=&quot;round&quot;&#13;&#10;                  d=&quot;M6 18L18 6M6 6l12 12&quot;&#13;&#10;                /&gt;&#13;&#10;              &lt;/svg&gt;&#13;&#10;            &lt;/button&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut&#13;&#10;            dignissimos.&#13;&#10;          &lt;/p&gt;&#13;&#10;          &lt;div class=&quot;mt-4 grid grid-cols-2 gap-4&quot;&gt;&#13;&#10;            &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;              &lt;input&#13;&#10;                checked&#13;&#10;                class=&quot;form-checkbox is-basic h-5 w-5 rounded border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent&quot;&#13;&#10;                type=&quot;checkbox&quot;&#13;&#10;              /&gt;&#13;&#10;              &lt;p&gt;ID&lt;/p&gt;&#13;&#10;            &lt;/label&gt;&#13;&#10;            &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;              &lt;input&#13;&#10;                checked&#13;&#10;                class=&quot;form-checkbox is-basic h-5 w-5 rounded border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent&quot;&#13;&#10;                type=&quot;checkbox&quot;&#13;&#10;              /&gt;&#13;&#10;              &lt;p&gt;Name&lt;/p&gt;&#13;&#10;            &lt;/label&gt;&#13;&#10;            &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;              &lt;input&#13;&#10;                checked&#13;&#10;                class=&quot;form-checkbox is-basic h-5 w-5 rounded border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent&quot;&#13;&#10;                type=&quot;checkbox&quot;&#13;&#10;              /&gt;&#13;&#10;              &lt;p&gt;Email&lt;/p&gt;&#13;&#10;            &lt;/label&gt;&#13;&#10;            &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;              &lt;input&#13;&#10;                class=&quot;form-checkbox is-basic h-5 w-5 rounded border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent&quot;&#13;&#10;                type=&quot;checkbox&quot;&#13;&#10;              /&gt;&#13;&#10;              &lt;p&gt;Address&lt;/p&gt;&#13;&#10;            &lt;/label&gt;&#13;&#10;            &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;              &lt;input&#13;&#10;                checked&#13;&#10;                class=&quot;form-checkbox is-basic h-5 w-5 rounded border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent&quot;&#13;&#10;                type=&quot;checkbox&quot;&#13;&#10;              /&gt;&#13;&#10;              &lt;p&gt;Created at&lt;/p&gt;&#13;&#10;            &lt;/label&gt;&#13;&#10;            &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;              &lt;input&#13;&#10;                class=&quot;form-checkbox is-basic h-5 w-5 rounded border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent&quot;&#13;&#10;                type=&quot;checkbox&quot;&#13;&#10;              /&gt;&#13;&#10;              &lt;p&gt;Updated at&lt;/p&gt;&#13;&#10;            &lt;/label&gt;&#13;&#10;            &lt;label class=&quot;col-span-2 inline-flex items-center space-x-2&quot;&gt;&#13;&#10;              &lt;input&#13;&#10;                class=&quot;form-switch is-outline h-5 w-10 rounded-full border border-slate-400/70 bg-transparent before:rounded-full before:bg-slate-300 checked:border-primary checked:before:bg-primary dark:border-navy-400 dark:before:bg-navy-300 dark:checked:border-accent dark:checked:before:bg-accent&quot;&#13;&#10;                type=&quot;checkbox&quot;&#13;&#10;              /&gt;&#13;&#10;              &lt;span&gt;Show Avatar&lt;/span&gt;&#13;&#10;            &lt;/label&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;          &lt;div class=&quot;mt-4 text-right&quot;&gt;&#13;&#10;            &lt;button&#13;&#10;              class=&quot;btn h-8 rounded-full text-xs+ font-medium text-slate-700 hover:bg-slate-300/20 active:bg-slate-300/25 dark:text-navy-100 dark:hover:bg-navy-300/20 dark:active:bg-navy-300/25&quot;&#13;&#10;            &gt;&#13;&#10;              Cancel&#13;&#10;            &lt;/button&gt;&#13;&#10;            &lt;button&#13;&#10;              @click=&quot;showModal = false&quot;&#13;&#10;              class=&quot;btn h-8 rounded-full bg-primary text-xs+ font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90&quot;&#13;&#10;            &gt;&#13;&#10;              Apply&#13;&#10;            &lt;/button&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/template&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;                </code>
              </pre>
                </div>
            </div>

            <!-- Modal Scale -->
            <div class="card px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Modal Scale
                    </h2>
                    <label class="inline-flex items-center space-x-2">
                        <span class="text-xs text-slate-400 dark:text-navy-300">Code</span>
                        <input @change="helpers.toggleCode"
                            class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-accent dark:checked:before:bg-white"
                            type="checkbox" />
                    </label>
                </div>
                <div>
                    <p class="max-w-xl">
                        The Modal component inform users about a specific task and may
                        contain critical information, require decisions, or involve
                        multiple tasks.
                    </p>
                    <div class="inline-space mt-5 flex">
                        <div x-data="{ showModal: false }">
                            <button @click="showModal = true"
                                class="btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                Origin Top
                            </button>
                            <template x-teleport="#x-teleport-target">
                                <div class="fixed inset-0 z-[100] flex flex-col items-center justify-center overflow-hidden px-4 py-6 sm:px-5"
                                    x-show="showModal" role="dialog" @keydown.window.escape="showModal = false">
                                    <div class="absolute inset-0 bg-slate-900/60 transition-opacity duration-300"
                                        @click="showModal = false" x-show="showModal" x-transition:enter="ease-out"
                                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                        x-transition:leave="ease-in" x-transition:leave-start="opacity-100"
                                        x-transition:leave-end="opacity-0"></div>
                                    <div class="relative w-full flex flex-col overflow-hidden max-w-lg origin-top rounded-lg bg-white transition-all duration-300 dark:bg-navy-700"
                                        x-show="showModal" x-transition:enter="easy-out"
                                        x-transition:enter-start="opacity-0 scale-95"
                                        x-transition:enter-end="opacity-100 scale-100" x-transition:leave="easy-in"
                                        x-transition:leave-start="opacity-100 scale-100"
                                        x-transition:leave-end="opacity-0 scale-95">
                                        <div
                                            class="flex justify-between rounded-t-lg bg-slate-200 px-4 py-3 dark:bg-navy-800 sm:px-5">
                                            <h3 class="text-base font-medium text-slate-700 dark:text-navy-100">
                                                Edit Pin
                                            </h3>
                                            <button @click="showModal = !showModal"
                                                class="btn -mr-1.5 h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="overflow-y-auto px-4 py-4 sm:px-5">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Assumenda incidunt
                                            </p>
                                            <div class="mt-4 space-y-4">
                                                <label class="block">
                                                    <span>Choose category :</span>
                                                    <select
                                                        class="form-select mt-1.5 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent">
                                                        <option>Laravel</option>
                                                        <option>Node JS</option>
                                                        <option>Django</option>
                                                        <option>Other</option>
                                                    </select>
                                                </label>
                                                <label class="block">
                                                    <span>Description:</span>
                                                    <textarea rows="4" placeholder=" Enter Text"
                                                        class="form-textarea mt-1.5 w-full resize-none rounded-lg border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"></textarea>
                                                </label>
                                                <label class="block">
                                                    <span>Website Address:</span>
                                                    <input
                                                        class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                        placeholder="URL Address" type="text" />
                                                </label>
                                                <label class="inline-flex items-center space-x-2">
                                                    <input
                                                        class="form-switch is-outline h-5 w-10 rounded-full border border-slate-400/70 bg-transparent before:rounded-full before:bg-slate-300 checked:border-primary checked:before:bg-primary dark:border-navy-400 dark:before:bg-navy-300 dark:checked:border-accent dark:checked:before:bg-accent"
                                                        type="checkbox" />
                                                    <span>Public pin</span>
                                                </label>
                                                <div class="space-x-2 text-right">
                                                    <button @click="showModal = false"
                                                        class="btn min-w-[7rem] rounded-full border border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-50 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
                                                        Cancel
                                                    </button>
                                                    <button @click="showModal = false"
                                                        class="btn min-w-[7rem] rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                                        Apply
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                        <div x-data="{ showModal: false }">
                            <button @click="showModal = true"
                                class="btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                Origin bottom
                            </button>
                            <template x-teleport="#x-teleport-target">
                                <div class="fixed inset-0 z-[100] flex flex-col items-center justify-center overflow-hidden px-4 py-6 sm:px-5"
                                    x-show="showModal" role="dialog" @keydown.window.escape="showModal = false">
                                    <div class="absolute inset-0 bg-slate-900/60 transition-opacity duration-300"
                                        @click="showModal = false" x-show="showModal" x-transition:enter="ease-out"
                                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                        x-transition:leave="ease-in" x-transition:leave-start="opacity-100"
                                        x-transition:leave-end="opacity-0"></div>
                                    <div class="relative w-full flex flex-col overflow-hidden max-w-2xl origin-bottom rounded-lg bg-white pb-4 transition-all duration-300 dark:bg-navy-700"
                                        x-show="showModal" x-transition:enter="easy-out"
                                        x-transition:enter-start="opacity-0 scale-95"
                                        x-transition:enter-end="opacity-100 scale-100" x-transition:leave="easy-in"
                                        x-transition:leave-start="opacity-100 scale-100"
                                        x-transition:leave-end="opacity-0 scale-95">
                                        <div
                                            class="flex justify-between rounded-t-lg bg-slate-200 px-4 py-3 dark:bg-navy-800 sm:px-5">
                                            <h3 class="text-base font-medium text-slate-700 dark:text-navy-100">
                                                Users Status
                                            </h3>
                                            <button @click="showModal = !showModal"
                                                class="btn -mr-1.5 h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="scrollbar-sm min-w-full overflow-auto">
                                            <table class="w-full text-left">
                                                <thead>
                                                    <tr
                                                        class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
                                                        <th
                                                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5">
                                                            #
                                                        </th>
                                                        <th
                                                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5">
                                                            Name
                                                        </th>
                                                        <th
                                                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5">
                                                            Role
                                                        </th>
                                                        <th
                                                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5">
                                                            Status
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr
                                                        class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            1
                                                        </td>
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            Cy Ganderton
                                                        </td>
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            Admin
                                                        </td>
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            <div
                                                                class="badge space-x-2.5 rounded-full bg-primary/10 text-primary dark:bg-accent-light/15 dark:text-accent-light">
                                                                <div class="h-2 w-2 rounded-full bg-current"></div>
                                                                <span>Online</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr
                                                        class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            2
                                                        </td>
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            Travis Fuller
                                                        </td>
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            Teacher
                                                        </td>
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            <div
                                                                class="badge space-x-2.5 rounded-full bg-primary/10 text-primary dark:bg-accent-light/15 dark:text-accent-light">
                                                                <div class="h-2 w-2 rounded-full bg-current"></div>
                                                                <span>Online</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr
                                                        class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            3
                                                        </td>
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            Konnor Guzman
                                                        </td>
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            Moderator
                                                        </td>
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            <div
                                                                class="badge space-x-2.5 rounded-full bg-primary/10 text-primary dark:bg-accent-light/15 dark:text-accent-light">
                                                                <div class="h-2 w-2 rounded-full bg-current"></div>
                                                                <span>Online</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr
                                                        class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            4
                                                        </td>
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            Alfredo Elliott
                                                        </td>
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            Admin
                                                        </td>
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            <div
                                                                class="badge space-x-2.5 rounded-full bg-warning/10 text-warning dark:bg-warning/15">
                                                                <div class="h-2 w-2 rounded-full bg-current"></div>
                                                                <span>Offline</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr
                                                        class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            5
                                                        </td>
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            Derrick Simmons
                                                        </td>
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            Teacher
                                                        </td>
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            <div
                                                                class="badge space-x-2.5 rounded-full bg-primary/10 text-primary dark:bg-accent-light/15 dark:text-accent-light">
                                                                <div class="h-2 w-2 rounded-full bg-current"></div>
                                                                <span>Offline</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="text-center">
                                            <button
                                                class="btn mt-4 border border-primary/30 bg-primary/10 font-medium text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:border-accent-light/30 dark:bg-accent-light/10 dark:text-accent-light dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25">
                                                Show All
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
                <div class="code-wrapper hidden pt-4">
                    <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
                <code class="language-html" x-ignore>  
  &lt;div x-data=&quot;{showModal:false}&quot;&gt;&#13;&#10;    &lt;button&#13;&#10;      @click=&quot;showModal = true&quot;&#13;&#10;      class=&quot;btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90&quot;&#13;&#10;    &gt;&#13;&#10;      Origin Top&#13;&#10;    &lt;/button&gt;&#13;&#10;    &lt;template x-teleport=&quot;#x-teleport-target&quot;&gt;&#13;&#10;      &lt;div&#13;&#10;        class=&quot;fixed inset-0 z-[100] flex flex-col items-center justify-center overflow-hidden px-4 py-6 sm:px-5&quot;&#13;&#10;        x-show=&quot;showModal&quot;&#13;&#10;        role=&quot;dialog&quot;&#13;&#10;        @keydown.window.escape=&quot;showModal = false&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;div&#13;&#10;          class=&quot;absolute inset-0 bg-slate-900/60 transition-opacity duration-300&quot;&#13;&#10;          @click=&quot;showModal = false&quot;&#13;&#10;          x-show=&quot;showModal&quot;&#13;&#10;          x-transition:enter=&quot;ease-out&quot;&#13;&#10;          x-transition:enter-start=&quot;opacity-0&quot;&#13;&#10;          x-transition:enter-end=&quot;opacity-100&quot;&#13;&#10;          x-transition:leave=&quot;ease-in&quot;&#13;&#10;          x-transition:leave-start=&quot;opacity-100&quot;&#13;&#10;          x-transition:leave-end=&quot;opacity-0&quot;&#13;&#10;        &gt;&lt;/div&gt;&#13;&#10;        &lt;div&#13;&#10;          class=&quot;relative w-full max-w-lg origin-top rounded-lg bg-white transition-all duration-300 dark:bg-navy-700&quot;&#13;&#10;          x-show=&quot;showModal&quot;&#13;&#10;          x-transition:enter=&quot;easy-out&quot;&#13;&#10;          x-transition:enter-start=&quot;opacity-0 scale-95&quot;&#13;&#10;          x-transition:enter-end=&quot;opacity-100 scale-100&quot;&#13;&#10;          x-transition:leave=&quot;easy-in&quot;&#13;&#10;          x-transition:leave-start=&quot;opacity-100 scale-100&quot;&#13;&#10;          x-transition:leave-end=&quot;opacity-0 scale-95&quot;&#13;&#10;        &gt;&#13;&#10;          &lt;div&#13;&#10;            class=&quot;flex justify-between rounded-t-lg bg-slate-200 px-4 py-3 dark:bg-navy-800 sm:px-5&quot;&#13;&#10;          &gt;&#13;&#10;            &lt;h3 class=&quot;text-base font-medium text-slate-700 dark:text-navy-100&quot;&gt;&#13;&#10;              Edit Pin&#13;&#10;            &lt;/h3&gt;&#13;&#10;            &lt;button&#13;&#10;              @click=&quot;showModal = !showModal&quot;&#13;&#10;              class=&quot;btn -mr-1.5 h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25&quot;&#13;&#10;            &gt;&#13;&#10;              &lt;svg&#13;&#10;                xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;                class=&quot;h-4.5 w-4.5&quot;&#13;&#10;                fill=&quot;none&quot;&#13;&#10;                viewBox=&quot;0 0 24 24&quot;&#13;&#10;                stroke=&quot;currentColor&quot;&#13;&#10;                stroke-width=&quot;2&quot;&#13;&#10;              &gt;&#13;&#10;                &lt;path&#13;&#10;                  stroke-linecap=&quot;round&quot;&#13;&#10;                  stroke-linejoin=&quot;round&quot;&#13;&#10;                  d=&quot;M6 18L18 6M6 6l12 12&quot;&#13;&#10;                &gt;&lt;/path&gt;&#13;&#10;              &lt;/svg&gt;&#13;&#10;            &lt;/button&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;          &lt;div class=&quot;px-4 py-4 sm:px-5&quot;&gt;&#13;&#10;            &lt;p&gt;&#13;&#10;              Lorem ipsum dolor sit amet, consectetur adipisicing elit.&#13;&#10;              Assumenda incidunt&#13;&#10;            &lt;/p&gt;&#13;&#10;            &lt;div class=&quot;mt-4 space-y-4&quot;&gt;&#13;&#10;              &lt;label class=&quot;block&quot;&gt;&#13;&#10;                &lt;span&gt;Choose category :&lt;/span&gt;&#13;&#10;                &lt;select&#13;&#10;                  class=&quot;form-select mt-1.5 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent&quot;&#13;&#10;                &gt;&#13;&#10;                  &lt;option&gt;Laravel&lt;/option&gt;&#13;&#10;                  &lt;option&gt;Node JS&lt;/option&gt;&#13;&#10;                  &lt;option&gt;Django&lt;/option&gt;&#13;&#10;                  &lt;option&gt;Other&lt;/option&gt;&#13;&#10;                &lt;/select&gt;&#13;&#10;              &lt;/label&gt;&#13;&#10;              &lt;label class=&quot;block&quot;&gt;&#13;&#10;                &lt;span&gt;Description:&lt;/span&gt;&#13;&#10;                &lt;textarea&#13;&#10;                  rows=&quot;4&quot;&#13;&#10;                  placeholder=&quot; Enter Text&quot;&#13;&#10;                  class=&quot;form-textarea mt-1.5 w-full resize-none rounded-lg border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent&quot;&#13;&#10;                &gt;&lt;/textarea&gt;&#13;&#10;              &lt;/label&gt;&#13;&#10;              &lt;label class=&quot;block&quot;&gt;&#13;&#10;                &lt;span&gt;Website Address:&lt;/span&gt;&#13;&#10;                &lt;input&#13;&#10;                  class=&quot;form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent&quot;&#13;&#10;                  placeholder=&quot;URL Address&quot;&#13;&#10;                  type=&quot;text&quot;&#13;&#10;                /&gt;&#13;&#10;              &lt;/label&gt;&#13;&#10;              &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;                &lt;input&#13;&#10;                  class=&quot;form-switch is-outline h-5 w-10 rounded-full border border-slate-400/70 bg-transparent before:rounded-full before:bg-slate-300 checked:border-primary checked:before:bg-primary dark:border-navy-400 dark:before:bg-navy-300 dark:checked:border-accent dark:checked:before:bg-accent&quot;&#13;&#10;                  type=&quot;checkbox&quot;&#13;&#10;                /&gt;&#13;&#10;                &lt;span&gt;Public pin&lt;/span&gt;&#13;&#10;              &lt;/label&gt;&#13;&#10;              &lt;div class=&quot;space-x-2 text-right&quot;&gt;&#13;&#10;                &lt;button&#13;&#10;                  @click=&quot;showModal = false&quot;&#13;&#10;                  class=&quot;btn min-w-[7rem] rounded-full border border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-50 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90&quot;&#13;&#10;                &gt;&#13;&#10;                  Cancel&#13;&#10;                &lt;/button&gt;&#13;&#10;                &lt;button&#13;&#10;                  @click=&quot;showModal = false&quot;&#13;&#10;                  class=&quot;btn min-w-[7rem] rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90&quot;&#13;&#10;                &gt;&#13;&#10;                  Apply&#13;&#10;                &lt;/button&gt;&#13;&#10;              &lt;/div&gt;&#13;&#10;            &lt;/div&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/template&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;  &lt;div x-data=&quot;{showModal:false}&quot;&gt;&#13;&#10;    &lt;button&#13;&#10;      @click=&quot;showModal = true&quot;&#13;&#10;      class=&quot;btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90&quot;&#13;&#10;    &gt;&#13;&#10;      Origin bottom&#13;&#10;    &lt;/button&gt;&#13;&#10;    &lt;template x-teleport=&quot;#x-teleport-target&quot;&gt;&#13;&#10;      &lt;div&#13;&#10;        class=&quot;fixed inset-0 z-[100] flex flex-col items-center justify-center overflow-hidden px-4 py-6 sm:px-5&quot;&#13;&#10;        x-show=&quot;showModal&quot;&#13;&#10;        role=&quot;dialog&quot;&#13;&#10;        @keydown.window.escape=&quot;showModal = false&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;div&#13;&#10;          class=&quot;absolute inset-0 bg-slate-900/60 transition-opacity duration-300&quot;&#13;&#10;          @click=&quot;showModal = false&quot;&#13;&#10;          x-show=&quot;showModal&quot;&#13;&#10;          x-transition:enter=&quot;ease-out&quot;&#13;&#10;          x-transition:enter-start=&quot;opacity-0&quot;&#13;&#10;          x-transition:enter-end=&quot;opacity-100&quot;&#13;&#10;          x-transition:leave=&quot;ease-in&quot;&#13;&#10;          x-transition:leave-start=&quot;opacity-100&quot;&#13;&#10;          x-transition:leave-end=&quot;opacity-0&quot;&#13;&#10;        &gt;&lt;/div&gt;&#13;&#10;        &lt;div&#13;&#10;          class=&quot;relative w-full max-w-2xl origin-bottom rounded-lg bg-white pb-4 transition-all duration-300 dark:bg-navy-700&quot;&#13;&#10;          x-show=&quot;showModal&quot;&#13;&#10;          x-transition:enter=&quot;easy-out&quot;&#13;&#10;          x-transition:enter-start=&quot;opacity-0 scale-95&quot;&#13;&#10;          x-transition:enter-end=&quot;opacity-100 scale-100&quot;&#13;&#10;          x-transition:leave=&quot;easy-in&quot;&#13;&#10;          x-transition:leave-start=&quot;opacity-100 scale-100&quot;&#13;&#10;          x-transition:leave-end=&quot;opacity-0 scale-95&quot;&#13;&#10;        &gt;&#13;&#10;          &lt;div&#13;&#10;            class=&quot;flex justify-between rounded-t-lg bg-slate-200 px-4 py-3 dark:bg-navy-800 sm:px-5&quot;&#13;&#10;          &gt;&#13;&#10;            &lt;h3 class=&quot;text-base font-medium text-slate-700 dark:text-navy-100&quot;&gt;&#13;&#10;              Users Status&#13;&#10;            &lt;/h3&gt;&#13;&#10;            &lt;button&#13;&#10;              @click=&quot;showModal = !showModal&quot;&#13;&#10;              class=&quot;btn -mr-1.5 h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25&quot;&#13;&#10;            &gt;&#13;&#10;              &lt;svg&#13;&#10;                xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;                class=&quot;h-4.5 w-4.5&quot;&#13;&#10;                fill=&quot;none&quot;&#13;&#10;                viewBox=&quot;0 0 24 24&quot;&#13;&#10;                stroke=&quot;currentColor&quot;&#13;&#10;                stroke-width=&quot;2&quot;&#13;&#10;              &gt;&#13;&#10;                &lt;path&#13;&#10;                  stroke-linecap=&quot;round&quot;&#13;&#10;                  stroke-linejoin=&quot;round&quot;&#13;&#10;                  d=&quot;M6 18L18 6M6 6l12 12&quot;&#13;&#10;                &gt;&lt;/path&gt;&#13;&#10;              &lt;/svg&gt;&#13;&#10;            &lt;/button&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;          &lt;div class=&quot;is-scrollbar-hidden min-w-full overflow-x-auto&quot;&gt;&#13;&#10;            &lt;table class=&quot;w-full text-left&quot;&gt;&#13;&#10;              &lt;thead&gt;&#13;&#10;                &lt;tr&#13;&#10;                  class=&quot;border-y border-transparent border-b-slate-200 dark:border-b-navy-500&quot;&#13;&#10;                &gt;&#13;&#10;                  &lt;th&#13;&#10;                    class=&quot;whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5&quot;&#13;&#10;                  &gt;&#13;&#10;                    #&#13;&#10;                  &lt;/th&gt;&#13;&#10;                  &lt;th&#13;&#10;                    class=&quot;whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5&quot;&#13;&#10;                  &gt;&#13;&#10;                    Name&#13;&#10;                  &lt;/th&gt;&#13;&#10;                  &lt;th&#13;&#10;                    class=&quot;whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5&quot;&#13;&#10;                  &gt;&#13;&#10;                    Role&#13;&#10;                  &lt;/th&gt;&#13;&#10;                  &lt;th&#13;&#10;                    class=&quot;whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5&quot;&#13;&#10;                  &gt;&#13;&#10;                    Status&#13;&#10;                  &lt;/th&gt;&#13;&#10;                &lt;/tr&gt;&#13;&#10;              &lt;/thead&gt;&#13;&#10;              &lt;tbody&gt;&#13;&#10;                &lt;tr&#13;&#10;                  class=&quot;border-y border-transparent border-b-slate-200 dark:border-b-navy-500&quot;&#13;&#10;                &gt;&#13;&#10;                  &lt;td class=&quot;whitespace-nowrap px-4 py-3 sm:px-5&quot;&gt;1&lt;/td&gt;&#13;&#10;                  &lt;td class=&quot;whitespace-nowrap px-4 py-3 sm:px-5&quot;&gt;&#13;&#10;                    Cy Ganderton&#13;&#10;                  &lt;/td&gt;&#13;&#10;                  &lt;td class=&quot;whitespace-nowrap px-4 py-3 sm:px-5&quot;&gt;Admin&lt;/td&gt;&#13;&#10;                  &lt;td class=&quot;whitespace-nowrap px-4 py-3 sm:px-5&quot;&gt;&#13;&#10;                    &lt;div&#13;&#10;                      class=&quot;badge space-x-2.5 rounded-full bg-primary/10 text-primary dark:bg-accent-light/15 dark:text-accent-light&quot;&#13;&#10;                    &gt;&#13;&#10;                      &lt;div class=&quot;h-2 w-2 rounded-full bg-current&quot;&gt;&lt;/div&gt;&#13;&#10;                      &lt;span&gt;Online&lt;/span&gt;&#13;&#10;                    &lt;/div&gt;&#13;&#10;                  &lt;/td&gt;&#13;&#10;                &lt;/tr&gt;&#13;&#10;                &lt;tr&#13;&#10;                  class=&quot;border-y border-transparent border-b-slate-200 dark:border-b-navy-500&quot;&#13;&#10;                &gt;&#13;&#10;                  &lt;td class=&quot;whitespace-nowrap px-4 py-3 sm:px-5&quot;&gt;2&lt;/td&gt;&#13;&#10;                  &lt;td class=&quot;whitespace-nowrap px-4 py-3 sm:px-5&quot;&gt;&#13;&#10;                    Travis Fuller&#13;&#10;                  &lt;/td&gt;&#13;&#10;                  &lt;td class=&quot;whitespace-nowrap px-4 py-3 sm:px-5&quot;&gt;Teacher&lt;/td&gt;&#13;&#10;                  &lt;td class=&quot;whitespace-nowrap px-4 py-3 sm:px-5&quot;&gt;&#13;&#10;                    &lt;div&#13;&#10;                      class=&quot;badge space-x-2.5 rounded-full bg-primary/10 text-primary dark:bg-accent-light/15 dark:text-accent-light&quot;&#13;&#10;                    &gt;&#13;&#10;                      &lt;div class=&quot;h-2 w-2 rounded-full bg-current&quot;&gt;&lt;/div&gt;&#13;&#10;                      &lt;span&gt;Online&lt;/span&gt;&#13;&#10;                    &lt;/div&gt;&#13;&#10;                  &lt;/td&gt;&#13;&#10;                &lt;/tr&gt;&#13;&#10;                &lt;tr&#13;&#10;                  class=&quot;border-y border-transparent border-b-slate-200 dark:border-b-navy-500&quot;&#13;&#10;                &gt;&#13;&#10;                  &lt;td class=&quot;whitespace-nowrap px-4 py-3 sm:px-5&quot;&gt;3&lt;/td&gt;&#13;&#10;                  &lt;td class=&quot;whitespace-nowrap px-4 py-3 sm:px-5&quot;&gt;&#13;&#10;                    Konnor Guzman&#13;&#10;                  &lt;/td&gt;&#13;&#10;                  &lt;td class=&quot;whitespace-nowrap px-4 py-3 sm:px-5&quot;&gt;Moderator&lt;/td&gt;&#13;&#10;                  &lt;td class=&quot;whitespace-nowrap px-4 py-3 sm:px-5&quot;&gt;&#13;&#10;                    &lt;div&#13;&#10;                      class=&quot;badge space-x-2.5 rounded-full bg-primary/10 text-primary dark:bg-accent-light/15 dark:text-accent-light&quot;&#13;&#10;                    &gt;&#13;&#10;                      &lt;div class=&quot;h-2 w-2 rounded-full bg-current&quot;&gt;&lt;/div&gt;&#13;&#10;                      &lt;span&gt;Online&lt;/span&gt;&#13;&#10;                    &lt;/div&gt;&#13;&#10;                  &lt;/td&gt;&#13;&#10;                &lt;/tr&gt;&#13;&#10;                &lt;tr&#13;&#10;                  class=&quot;border-y border-transparent border-b-slate-200 dark:border-b-navy-500&quot;&#13;&#10;                &gt;&#13;&#10;                  &lt;td class=&quot;whitespace-nowrap px-4 py-3 sm:px-5&quot;&gt;4&lt;/td&gt;&#13;&#10;                  &lt;td class=&quot;whitespace-nowrap px-4 py-3 sm:px-5&quot;&gt;&#13;&#10;                    Alfredo Elliott&#13;&#10;                  &lt;/td&gt;&#13;&#10;                  &lt;td class=&quot;whitespace-nowrap px-4 py-3 sm:px-5&quot;&gt;Admin&lt;/td&gt;&#13;&#10;                  &lt;td class=&quot;whitespace-nowrap px-4 py-3 sm:px-5&quot;&gt;&#13;&#10;                    &lt;div&#13;&#10;                      class=&quot;badge space-x-2.5 rounded-full bg-warning/10 text-warning dark:bg-warning/15&quot;&#13;&#10;                    &gt;&#13;&#10;                      &lt;div class=&quot;h-2 w-2 rounded-full bg-current&quot;&gt;&lt;/div&gt;&#13;&#10;                      &lt;span&gt;Offline&lt;/span&gt;&#13;&#10;                    &lt;/div&gt;&#13;&#10;                  &lt;/td&gt;&#13;&#10;                &lt;/tr&gt;&#13;&#10;                &lt;tr&#13;&#10;                  class=&quot;border-y border-transparent border-b-slate-200 dark:border-b-navy-500&quot;&#13;&#10;                &gt;&#13;&#10;                  &lt;td class=&quot;whitespace-nowrap px-4 py-3 sm:px-5&quot;&gt;5&lt;/td&gt;&#13;&#10;                  &lt;td class=&quot;whitespace-nowrap px-4 py-3 sm:px-5&quot;&gt;&#13;&#10;                    Derrick Simmons&#13;&#10;                  &lt;/td&gt;&#13;&#10;                  &lt;td class=&quot;whitespace-nowrap px-4 py-3 sm:px-5&quot;&gt;Teacher&lt;/td&gt;&#13;&#10;                  &lt;td class=&quot;whitespace-nowrap px-4 py-3 sm:px-5&quot;&gt;&#13;&#10;                    &lt;div&#13;&#10;                      class=&quot;badge space-x-2.5 rounded-full bg-primary/10 text-primary dark:bg-accent-light/15 dark:text-accent-light&quot;&#13;&#10;                    &gt;&#13;&#10;                      &lt;div class=&quot;h-2 w-2 rounded-full bg-current&quot;&gt;&lt;/div&gt;&#13;&#10;                      &lt;span&gt;Offline&lt;/span&gt;&#13;&#10;                    &lt;/div&gt;&#13;&#10;                  &lt;/td&gt;&#13;&#10;                &lt;/tr&gt;&#13;&#10;              &lt;/tbody&gt;&#13;&#10;            &lt;/table&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;          &lt;div class=&quot;text-center&quot;&gt;&#13;&#10;            &lt;button&#13;&#10;              class=&quot;btn mt-4 border border-primary/30 bg-primary/10 font-medium text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:border-accent-light/30 dark:bg-accent-light/10 dark:text-accent-light dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25&quot;&#13;&#10;            &gt;&#13;&#10;              Show All&#13;&#10;            &lt;/button&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/template&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;
                </code>
              </pre>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>

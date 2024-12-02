<x-app-layout title="Tab Component" is-sidebar-open="true" is-header-blur="true">
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
            <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
                Tabs
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
                <li>Tabs</li>
            </ul>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
            <!-- Basic Tabs -->
            <div class="card px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Basic Tabs
                    </h2>
                    <label class="inline-flex items-center space-x-2">
                        <span class="text-xs text-slate-400 dark:text-navy-300">Code</span>
                        <input @change="helpers.toggleCode"
                            class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-accent dark:checked:before:bg-white"
                            type="checkbox" />
                    </label>
                </div>
                <div class="max-w-xl">
                    <p>
                        Tabs make it easy to explore and switch between different views.
                        Check out code for detail of usage.
                    </p>
                    <div class="mt-5">
                        <div x-data="{ activeTab: 'tabHome' }" class="tabs flex flex-col">
                            <div class="is-scrollbar-hidden overflow-x-auto">
                                <div class="tabs-list flex">
                                    <button @click="activeTab = 'tabHome'"
                                        :class="activeTab === 'tabHome' ?
                                            'border-primary dark:border-accent text-primary dark:text-accent-light' :
                                            'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                        class="btn shrink-0 rounded-none border-b-2 px-3 py-2 font-medium">
                                        Home
                                    </button>
                                    <button @click="activeTab = 'tabProfile'"
                                        :class="activeTab === 'tabProfile' ?
                                            'border-primary dark:border-accent text-primary dark:text-accent-light' :
                                            'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                        class="btn shrink-0 rounded-none border-b-2 px-3 py-2 font-medium">
                                        Profile
                                    </button>
                                    <button @click="activeTab = 'tabMessages'"
                                        :class="activeTab === 'tabMessages' ?
                                            'border-primary dark:border-accent text-primary dark:text-accent-light' :
                                            'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                        class="btn shrink-0 rounded-none border-b-2 px-3 py-2 font-medium">
                                        Messages
                                    </button>
                                    <button @click="activeTab = 'tabSettings'"
                                        :class="activeTab === 'tabSettings' ?
                                            'border-primary dark:border-accent text-primary dark:text-accent-light' :
                                            'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                        class="btn shrink-0 rounded-none border-b-2 px-3 py-2 font-medium">
                                        Settings
                                    </button>
                                </div>
                            </div>
                            <div class="tab-content pt-4">
                                <div x-show="activeTab === 'tabHome'"
                                    x-transition:enter="transition-all duration-500 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                    <div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Praesent elementum finibus arcu vitae
                                            scelerisque. Etiam rutrum blandit condimentum.
                                            Maecenas condimentum massa vitae quam interdum, et
                                            lacinia urna tempor
                                        </p>
                                        <div class="flex space-x-2 pt-3">
                                            <a href="#"
                                                class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
                                                Tag 2
                                            </a>
                                        </div>

                                        <p class="pt-3 text-xs text-slate-400 dark:text-navy-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Tempore dolore non atque?
                                        </p>
                                    </div>
                                </div>
                                <div x-show="activeTab === 'tabProfile'"
                                    x-transition:enter="transition-all duration-500 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                    <div>
                                        <p>
                                            Pellentesque pulvinar, sapien eget fermentum sodales,
                                            felis lacus viverra magna, id pulvinar odio metus non
                                            enim. Ut id augue interdum, ultrices felis eu,
                                            tincidunt libero.
                                        </p>
                                        <div class="flex space-x-2 pt-3">
                                            <a href="#"
                                                class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
                                                Tag 2
                                            </a>
                                        </div>

                                        <p class="pt-3 text-xs text-slate-400 dark:text-navy-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Tempore dolore non atque?
                                        </p>
                                    </div>
                                </div>
                                <div x-show="activeTab === 'tabMessages'"
                                    x-transition:enter="transition-all duration-500 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                    <div>
                                        <p>
                                            Cras iaculis ipsum quis lectus faucibus, in mattis
                                            nulla molestie. Vestibulum vel tristique libero. Morbi
                                            vulputate odio at viverra sodales. Curabitur accumsan
                                            justo eu libero porta ultrices vitae eu leo.
                                        </p>
                                        <div class="flex space-x-2 pt-3">
                                            <a href="#"
                                                class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
                                                Tag 2
                                            </a>
                                        </div>

                                        <p class="pt-3 text-xs text-slate-400 dark:text-navy-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Tempore dolore non atque?
                                        </p>
                                    </div>
                                </div>
                                <div x-show="activeTab === 'tabSettings'"
                                    x-transition:enter="transition-all duration-500 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                    <div>
                                        <p>
                                            Etiam nec ante eget lacus vulputate egestas non
                                            iaculis tellus. Suspendisse tempus ex in tortor
                                            venenatis malesuada. Aenean consequat dui vitae nibh
                                            lobortis condimentum. Duis vel risus est.
                                        </p>
                                        <div class="flex space-x-2 pt-3">
                                            <a href="#"
                                                class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
                                                Tag 2
                                            </a>
                                        </div>

                                        <p class="pt-3 text-xs text-slate-400 dark:text-navy-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Tempore dolore non atque?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="code-wrapper hidden pt-4">
                    <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
            <code class="language-html" x-ignore>
&lt;div x-data=&quot;{activeTab:&apos;tabHome&apos;}&quot; class=&quot;tabs flex flex-col&quot;&gt;&#13;&#10;    &lt;div class=&quot;is-scrollbar-hidden overflow-x-auto&quot;&gt;&#13;&#10;      &lt;div class=&quot;tabs-list flex&quot;&gt;&#13;&#10;        &lt;button&#13;&#10;          @click=&quot;activeTab = &apos;tabHome&apos;&quot;&#13;&#10;          :class=&quot;activeTab === &apos;tabHome&apos; ? &apos;border-primary dark:border-accent text-primary dark:text-accent-light&apos; : &apos;border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100&apos;&quot;&#13;&#10;          class=&quot;btn shrink-0 rounded-none border-b-2 px-3 py-2 font-medium&quot;&#13;&#10;        &gt;&#13;&#10;          Home&#13;&#10;        &lt;/button&gt;&#13;&#10;        &lt;button&#13;&#10;          @click=&quot;activeTab = &apos;tabProfile&apos;&quot;&#13;&#10;          :class=&quot;activeTab === &apos;tabProfile&apos; ? &apos;border-primary dark:border-accent text-primary dark:text-accent-light&apos; : &apos;border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100&apos;&quot;&#13;&#10;          class=&quot;btn shrink-0 rounded-none border-b-2 px-3 py-2 font-medium&quot;&#13;&#10;        &gt;&#13;&#10;          Profile&#13;&#10;        &lt;/button&gt;&#13;&#10;        &lt;button&#13;&#10;          @click=&quot;activeTab = &apos;tabMessages&apos;&quot;&#13;&#10;          :class=&quot;activeTab === &apos;tabMessages&apos; ? &apos;border-primary dark:border-accent text-primary dark:text-accent-light&apos; : &apos;border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100&apos;&quot;&#13;&#10;          class=&quot;btn shrink-0 rounded-none border-b-2 px-3 py-2 font-medium&quot;&#13;&#10;        &gt;&#13;&#10;          Messages&#13;&#10;        &lt;/button&gt;&#13;&#10;        &lt;button&#13;&#10;          @click=&quot;activeTab = &apos;tabSettings&apos;&quot;&#13;&#10;          :class=&quot;activeTab === &apos;tabSettings&apos; ? &apos;border-primary dark:border-accent text-primary dark:text-accent-light&apos; : &apos;border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100&apos;&quot;&#13;&#10;          class=&quot;btn shrink-0 rounded-none border-b-2 px-3 py-2 font-medium&quot;&#13;&#10;        &gt;&#13;&#10;          Settings&#13;&#10;        &lt;/button&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div class=&quot;tab-content pt-4&quot;&gt;&#13;&#10;      &lt;div&#13;&#10;        x-show=&quot;activeTab === &apos;tabHome&apos;&quot;&#13;&#10;        x-transition:enter=&quot;transition-all duration-500 easy-in-out&quot;&#13;&#10;        x-transition:enter-start=&quot;opacity-0 [transform:translate3d(1rem,0,0)]&quot;&#13;&#10;        x-transition:enter-end=&quot;opacity-100 [transform:translate3d(0,0,0)]&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;div&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent&#13;&#10;            elementum finibus arcu vitae scelerisque. Etiam rutrum blandit&#13;&#10;            condimentum. Maecenas condimentum massa vitae quam interdum, et&#13;&#10;            lacinia urna tempor&#13;&#10;          &lt;/p&gt;&#13;&#10;          &lt;div class=&quot;flex space-x-2 pt-3&quot;&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light&quot;&#13;&#10;            &gt;&#13;&#10;              Tag 1&#13;&#10;            &lt;/a&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light&quot;&#13;&#10;            &gt;&#13;&#10;              Tag 2&#13;&#10;            &lt;/a&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;&#13;&#10;          &lt;p class=&quot;pt-3 text-xs text-slate-400 dark:text-navy-300&quot;&gt;&#13;&#10;            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore&#13;&#10;            dolore non atque?&#13;&#10;          &lt;/p&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div&#13;&#10;        x-show=&quot;activeTab === &apos;tabProfile&apos;&quot;&#13;&#10;        x-transition:enter=&quot;transition-all duration-500 easy-in-out&quot;&#13;&#10;        x-transition:enter-start=&quot;opacity-0 [transform:translate3d(1rem,0,0)]&quot;&#13;&#10;        x-transition:enter-end=&quot;opacity-100 [transform:translate3d(0,0,0)]&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;div&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Pellentesque pulvinar, sapien eget fermentum sodales, felis lacus&#13;&#10;            viverra magna, id pulvinar odio metus non enim. Ut id augue&#13;&#10;            interdum, ultrices felis eu, tincidunt libero.&#13;&#10;          &lt;/p&gt;&#13;&#10;          &lt;div class=&quot;flex space-x-2 pt-3&quot;&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light&quot;&#13;&#10;            &gt;&#13;&#10;              Tag 1&#13;&#10;            &lt;/a&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light&quot;&#13;&#10;            &gt;&#13;&#10;              Tag 2&#13;&#10;            &lt;/a&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;&#13;&#10;          &lt;p class=&quot;pt-3 text-xs text-slate-400 dark:text-navy-300&quot;&gt;&#13;&#10;            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore&#13;&#10;            dolore non atque?&#13;&#10;          &lt;/p&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div&#13;&#10;        x-show=&quot;activeTab === &apos;tabMessages&apos;&quot;&#13;&#10;        x-transition:enter=&quot;transition-all duration-500 easy-in-out&quot;&#13;&#10;        x-transition:enter-start=&quot;opacity-0 [transform:translate3d(1rem,0,0)]&quot;&#13;&#10;        x-transition:enter-end=&quot;opacity-100 [transform:translate3d(0,0,0)]&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;div&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Cras iaculis ipsum quis lectus faucibus, in mattis nulla molestie.&#13;&#10;            Vestibulum vel tristique libero. Morbi vulputate odio at viverra&#13;&#10;            sodales. Curabitur accumsan justo eu libero porta ultrices vitae eu&#13;&#10;            leo.&#13;&#10;          &lt;/p&gt;&#13;&#10;          &lt;div class=&quot;flex space-x-2 pt-3&quot;&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light&quot;&#13;&#10;            &gt;&#13;&#10;              Tag 1&#13;&#10;            &lt;/a&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light&quot;&#13;&#10;            &gt;&#13;&#10;              Tag 2&#13;&#10;            &lt;/a&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;&#13;&#10;          &lt;p class=&quot;pt-3 text-xs text-slate-400 dark:text-navy-300&quot;&gt;&#13;&#10;            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore&#13;&#10;            dolore non atque?&#13;&#10;          &lt;/p&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div&#13;&#10;        x-show=&quot;activeTab === &apos;tabSettings&apos;&quot;&#13;&#10;        x-transition:enter=&quot;transition-all duration-500 easy-in-out&quot;&#13;&#10;        x-transition:enter-start=&quot;opacity-0 [transform:translate3d(1rem,0,0)]&quot;&#13;&#10;        x-transition:enter-end=&quot;opacity-100 [transform:translate3d(0,0,0)]&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;div&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Etiam nec ante eget lacus vulputate egestas non iaculis tellus.&#13;&#10;            Suspendisse tempus ex in tortor venenatis malesuada. Aenean&#13;&#10;            consequat dui vitae nibh lobortis condimentum. Duis vel risus est.&#13;&#10;          &lt;/p&gt;&#13;&#10;          &lt;div class=&quot;flex space-x-2 pt-3&quot;&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light&quot;&#13;&#10;            &gt;&#13;&#10;              Tag 1&#13;&#10;            &lt;/a&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light&quot;&#13;&#10;            &gt;&#13;&#10;              Tag 2&#13;&#10;            &lt;/a&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;&#13;&#10;          &lt;p class=&quot;pt-3 text-xs text-slate-400 dark:text-navy-300&quot;&gt;&#13;&#10;            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore&#13;&#10;            dolore non atque?&#13;&#10;          &lt;/p&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;                </code>
          </pre>
                </div>
            </div>

            <!-- Border Bottom -->
            <div class="card px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Border Bottom
                    </h2>
                    <label class="inline-flex items-center space-x-2">
                        <span class="text-xs text-slate-400 dark:text-navy-300">Code</span>
                        <input @change="helpers.toggleCode"
                            class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-accent dark:checked:before:bg-white"
                            type="checkbox" />
                    </label>
                </div>
                <div class="max-w-xl">
                    <p>
                        Tabs make it easy to explore and switch between different views.
                        Check out code for detail of usage.
                    </p>
                    <div class="mt-5">
                        <div x-data="{ activeTab: 'tabHome' }" class="tabs flex flex-col">
                            <div class="is-scrollbar-hidden overflow-x-auto">
                                <div class="border-b-2 border-slate-150 dark:border-navy-500">
                                    <div class="tabs-list flex">
                                        <button @click="activeTab = 'tabHome'"
                                            :class="activeTab === 'tabHome' ?
                                                'border-primary dark:border-accent text-primary dark:text-accent-light' :
                                                'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                            class="btn shrink-0 rounded-none border-b-2 px-3 py-2 font-medium">
                                            Home
                                        </button>
                                        <button @click="activeTab = 'tabProfile'"
                                            :class="activeTab === 'tabProfile' ?
                                                'border-primary dark:border-accent text-primary dark:text-accent-light' :
                                                'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                            class="btn shrink-0 rounded-none border-b-2 px-3 py-2 font-medium">
                                            Profile
                                        </button>
                                        <button @click="activeTab = 'tabMessages'"
                                            :class="activeTab === 'tabMessages' ?
                                                'border-primary dark:border-accent text-primary dark:text-accent-light' :
                                                'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                            class="btn shrink-0 rounded-none border-b-2 px-3 py-2 font-medium">
                                            Messages
                                        </button>
                                        <button @click="activeTab = 'tabSettings'"
                                            :class="activeTab === 'tabSettings' ?
                                                'border-primary dark:border-accent text-primary dark:text-accent-light' :
                                                'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                            class="btn shrink-0 rounded-none border-b-2 px-3 py-2 font-medium">
                                            Settings
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content pt-4">
                                <div x-show="activeTab === 'tabHome'"
                                    x-transition:enter="transition-all duration-500 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(0,1rem,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                    <div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Praesent elementum finibus arcu vitae
                                            scelerisque. Etiam rutrum blandit condimentum.
                                            Maecenas condimentum massa vitae quam interdum, et
                                            lacinia urna tempor
                                        </p>
                                        <div class="flex space-x-2 pt-3">
                                            <a href="#"
                                                class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
                                                Tag 2
                                            </a>
                                        </div>

                                        <p class="pt-3 text-xs text-slate-400 dark:text-navy-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Tempore dolore non atque?
                                        </p>
                                    </div>
                                </div>
                                <div x-show="activeTab === 'tabProfile'"
                                    x-transition:enter="transition-all duration-500 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(0,1rem,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                    <div>
                                        <p>
                                            Pellentesque pulvinar, sapien eget fermentum sodales,
                                            felis lacus viverra magna, id pulvinar odio metus non
                                            enim. Ut id augue interdum, ultrices felis eu,
                                            tincidunt libero.
                                        </p>
                                        <div class="flex space-x-2 pt-3">
                                            <a href="#"
                                                class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
                                                Tag 2
                                            </a>
                                        </div>

                                        <p class="pt-3 text-xs text-slate-400 dark:text-navy-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Tempore dolore non atque?
                                        </p>
                                    </div>
                                </div>
                                <div x-show="activeTab === 'tabMessages'"
                                    x-transition:enter="transition-all duration-500 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(0,1rem,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                    <div>
                                        <p>
                                            Cras iaculis ipsum quis lectus faucibus, in mattis
                                            nulla molestie. Vestibulum vel tristique libero. Morbi
                                            vulputate odio at viverra sodales. Curabitur accumsan
                                            justo eu libero porta ultrices vitae eu leo.
                                        </p>
                                        <div class="flex space-x-2 pt-3">
                                            <a href="#"
                                                class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
                                                Tag 2
                                            </a>
                                        </div>

                                        <p class="pt-3 text-xs text-slate-400 dark:text-navy-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Tempore dolore non atque?
                                        </p>
                                    </div>
                                </div>
                                <div x-show="activeTab === 'tabSettings'"
                                    x-transition:enter="transition-all duration-500 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(0,1rem,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                    <div>
                                        <p>
                                            Etiam nec ante eget lacus vulputate egestas non
                                            iaculis tellus. Suspendisse tempus ex in tortor
                                            venenatis malesuada. Aenean consequat dui vitae nibh
                                            lobortis condimentum. Duis vel risus est.
                                        </p>
                                        <div class="flex space-x-2 pt-3">
                                            <a href="#"
                                                class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
                                                Tag 2
                                            </a>
                                        </div>

                                        <p class="pt-3 text-xs text-slate-400 dark:text-navy-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Tempore dolore non atque?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="code-wrapper hidden pt-4">
                    <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
            <code class="language-html" x-ignore>
&lt;div x-data=&quot;{activeTab:&apos;tabHome&apos;}&quot; class=&quot;tabs flex flex-col&quot;&gt;&#13;&#10;    &lt;div class=&quot;is-scrollbar-hidden overflow-x-auto&quot;&gt;&#13;&#10;      &lt;div class=&quot;border-b-2 border-slate-150 dark:border-navy-500&quot;&gt;&#13;&#10;        &lt;div class=&quot;tabs-list flex&quot;&gt;&#13;&#10;          &lt;button&#13;&#10;            @click=&quot;activeTab = &apos;tabHome&apos;&quot;&#13;&#10;            :class=&quot;activeTab === &apos;tabHome&apos; ? &apos;border-primary dark:border-accent text-primary dark:text-accent-light&apos; : &apos;border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100&apos;&quot;&#13;&#10;            class=&quot;btn shrink-0 rounded-none border-b-2 px-3 py-2 font-medium&quot;&#13;&#10;          &gt;&#13;&#10;            Home&#13;&#10;          &lt;/button&gt;&#13;&#10;          &lt;button&#13;&#10;            @click=&quot;activeTab = &apos;tabProfile&apos;&quot;&#13;&#10;            :class=&quot;activeTab === &apos;tabProfile&apos; ? &apos;border-primary dark:border-accent text-primary dark:text-accent-light&apos; : &apos;border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100&apos;&quot;&#13;&#10;            class=&quot;btn shrink-0 rounded-none border-b-2 px-3 py-2 font-medium&quot;&#13;&#10;          &gt;&#13;&#10;            Profile&#13;&#10;          &lt;/button&gt;&#13;&#10;          &lt;button&#13;&#10;            @click=&quot;activeTab = &apos;tabMessages&apos;&quot;&#13;&#10;            :class=&quot;activeTab === &apos;tabMessages&apos; ? &apos;border-primary dark:border-accent text-primary dark:text-accent-light&apos; : &apos;border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100&apos;&quot;&#13;&#10;            class=&quot;btn shrink-0 rounded-none border-b-2 px-3 py-2 font-medium&quot;&#13;&#10;          &gt;&#13;&#10;            Messages&#13;&#10;          &lt;/button&gt;&#13;&#10;          &lt;button&#13;&#10;            @click=&quot;activeTab = &apos;tabSettings&apos;&quot;&#13;&#10;            :class=&quot;activeTab === &apos;tabSettings&apos; ? &apos;border-primary dark:border-accent text-primary dark:text-accent-light&apos; : &apos;border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100&apos;&quot;&#13;&#10;            class=&quot;btn shrink-0 rounded-none border-b-2 px-3 py-2 font-medium&quot;&#13;&#10;          &gt;&#13;&#10;            Settings&#13;&#10;          &lt;/button&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div class=&quot;tab-content pt-4&quot;&gt;&#13;&#10;      &lt;div&#13;&#10;        x-show=&quot;activeTab === &apos;tabHome&apos;&quot;&#13;&#10;        x-transition:enter=&quot;transition-all duration-500 easy-in-out&quot;&#13;&#10;        x-transition:enter-start=&quot;opacity-0 [transform:translate3d(0,1rem,0)]&quot;&#13;&#10;        x-transition:enter-end=&quot;opacity-100 [transform:translate3d(0,0,0)]&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;div&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent&#13;&#10;            elementum finibus arcu vitae scelerisque. Etiam rutrum blandit&#13;&#10;            condimentum. Maecenas condimentum massa vitae quam interdum, et&#13;&#10;            lacinia urna tempor&#13;&#10;          &lt;/p&gt;&#13;&#10;          &lt;div class=&quot;flex space-x-2 pt-3&quot;&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light&quot;&#13;&#10;            &gt;&#13;&#10;              Tag 1&#13;&#10;            &lt;/a&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light&quot;&#13;&#10;            &gt;&#13;&#10;              Tag 2&#13;&#10;            &lt;/a&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;&#13;&#10;          &lt;p class=&quot;pt-3 text-xs text-slate-400 dark:text-navy-300&quot;&gt;&#13;&#10;            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore&#13;&#10;            dolore non atque?&#13;&#10;          &lt;/p&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div&#13;&#10;        x-show=&quot;activeTab === &apos;tabProfile&apos;&quot;&#13;&#10;        x-transition:enter=&quot;transition-all duration-500 easy-in-out&quot;&#13;&#10;        x-transition:enter-start=&quot;opacity-0 [transform:translate3d(0,1rem,0)]&quot;&#13;&#10;        x-transition:enter-end=&quot;opacity-100 [transform:translate3d(0,0,0)]&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;div&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Pellentesque pulvinar, sapien eget fermentum sodales, felis lacus&#13;&#10;            viverra magna, id pulvinar odio metus non enim. Ut id augue&#13;&#10;            interdum, ultrices felis eu, tincidunt libero.&#13;&#10;          &lt;/p&gt;&#13;&#10;          &lt;div class=&quot;flex space-x-2 pt-3&quot;&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light&quot;&#13;&#10;            &gt;&#13;&#10;              Tag 1&#13;&#10;            &lt;/a&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light&quot;&#13;&#10;            &gt;&#13;&#10;              Tag 2&#13;&#10;            &lt;/a&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;&#13;&#10;          &lt;p class=&quot;pt-3 text-xs text-slate-400 dark:text-navy-300&quot;&gt;&#13;&#10;            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore&#13;&#10;            dolore non atque?&#13;&#10;          &lt;/p&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div&#13;&#10;        x-show=&quot;activeTab === &apos;tabMessages&apos;&quot;&#13;&#10;        x-transition:enter=&quot;transition-all duration-500 easy-in-out&quot;&#13;&#10;        x-transition:enter-start=&quot;opacity-0 [transform:translate3d(0,1rem,0)]&quot;&#13;&#10;        x-transition:enter-end=&quot;opacity-100 [transform:translate3d(0,0,0)]&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;div&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Cras iaculis ipsum quis lectus faucibus, in mattis nulla molestie.&#13;&#10;            Vestibulum vel tristique libero. Morbi vulputate odio at viverra&#13;&#10;            sodales. Curabitur accumsan justo eu libero porta ultrices vitae eu&#13;&#10;            leo.&#13;&#10;          &lt;/p&gt;&#13;&#10;          &lt;div class=&quot;flex space-x-2 pt-3&quot;&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light&quot;&#13;&#10;            &gt;&#13;&#10;              Tag 1&#13;&#10;            &lt;/a&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light&quot;&#13;&#10;            &gt;&#13;&#10;              Tag 2&#13;&#10;            &lt;/a&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;&#13;&#10;          &lt;p class=&quot;pt-3 text-xs text-slate-400 dark:text-navy-300&quot;&gt;&#13;&#10;            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore&#13;&#10;            dolore non atque?&#13;&#10;          &lt;/p&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div&#13;&#10;        x-show=&quot;activeTab === &apos;tabSettings&apos;&quot;&#13;&#10;        x-transition:enter=&quot;transition-all duration-500 easy-in-out&quot;&#13;&#10;        x-transition:enter-start=&quot;opacity-0 [transform:translate3d(0,1rem,0)]&quot;&#13;&#10;        x-transition:enter-end=&quot;opacity-100 [transform:translate3d(0,0,0)]&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;div&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Etiam nec ante eget lacus vulputate egestas non iaculis tellus.&#13;&#10;            Suspendisse tempus ex in tortor venenatis malesuada. Aenean&#13;&#10;            consequat dui vitae nibh lobortis condimentum. Duis vel risus est.&#13;&#10;          &lt;/p&gt;&#13;&#10;          &lt;div class=&quot;flex space-x-2 pt-3&quot;&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light&quot;&#13;&#10;            &gt;&#13;&#10;              Tag 1&#13;&#10;            &lt;/a&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light&quot;&#13;&#10;            &gt;&#13;&#10;              Tag 2&#13;&#10;            &lt;/a&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;&#13;&#10;          &lt;p class=&quot;pt-3 text-xs text-slate-400 dark:text-navy-300&quot;&gt;&#13;&#10;            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore&#13;&#10;            dolore non atque?&#13;&#10;          &lt;/p&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;                </code>
          </pre>
                </div>
            </div>

            <!-- Tab With Icon -->
            <div class="card px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Tab With Icon
                    </h2>
                    <label class="inline-flex items-center space-x-2">
                        <span class="text-xs text-slate-400 dark:text-navy-300">Code</span>
                        <input @change="helpers.toggleCode"
                            class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-accent dark:checked:before:bg-white"
                            type="checkbox" />
                    </label>
                </div>
                <div class="max-w-xl">
                    <p>
                        Tabs make it easy to explore and switch between different views.
                        Check out code for detail of usage.
                    </p>
                    <div class="mt-5">
                        <div x-data="{ activeTab: 'tabProfile' }" class="tabs flex flex-col">
                            <div class="is-scrollbar-hidden overflow-x-auto">
                                <div class="border-b-2 border-slate-150 dark:border-navy-500">
                                    <div class="tabs-list -mb-0.5 flex">
                                        <button @click="activeTab = 'tabHome'"
                                            :class="activeTab === 'tabHome' ?
                                                'border-primary dark:border-accent text-primary dark:text-accent-light' :
                                                'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                            class="btn shrink-0 space-x-2 rounded-none border-b-2 px-3 py-2 font-medium">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                            </svg>
                                            <span>Home</span>
                                        </button>
                                        <button @click="activeTab = 'tabProfile'"
                                            :class="activeTab === 'tabProfile' ?
                                                'border-primary dark:border-accent text-primary dark:text-accent-light' :
                                                'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                            class="btn shrink-0 space-x-2 rounded-none border-b-2 px-3 py-2 font-medium">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                            </svg>
                                            <span>Profile</span>
                                        </button>
                                        <button @click="activeTab = 'tabMessages'"
                                            :class="activeTab === 'tabMessages' ?
                                                'border-primary dark:border-accent text-primary dark:text-accent-light' :
                                                'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                            class="btn shrink-0 space-x-2 rounded-none border-b-2 px-3 py-2 font-medium">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>
                                            <span> Messages </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content pt-4">
                                <div x-show="activeTab === 'tabHome'"
                                    x-transition:enter="transition-all duration-500 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                    <div>
                                        <p>
                                            Pellentesque pulvinar, sapien eget fermentum sodales,
                                            felis lacus viverra magna, id pulvinar odio metus non
                                            enim. Ut id augue interdum, ultrices felis eu,
                                            tincidunt libero.
                                        </p>
                                        <div class="flex space-x-2 pt-3">
                                            <a href="#"
                                                class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
                                                Tag 2
                                            </a>
                                        </div>

                                        <p class="pt-3 text-xs text-slate-400 dark:text-navy-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Tempore dolore non atque?
                                        </p>
                                    </div>
                                </div>
                                <div x-show="activeTab === 'tabProfile'"
                                    x-transition:enter="transition-all duration-500 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                    <div>
                                        <p>
                                            Cras iaculis ipsum quis lectus faucibus, in mattis
                                            nulla molestie. Vestibulum vel tristique libero. Morbi
                                            vulputate odio at viverra sodales. Curabitur accumsan
                                            justo eu libero porta ultrices vitae eu leo.
                                        </p>
                                        <div class="flex space-x-2 pt-3">
                                            <a href="#"
                                                class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
                                                Tag 2
                                            </a>
                                        </div>

                                        <p class="pt-3 text-xs text-slate-400 dark:text-navy-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Tempore dolore non atque?
                                        </p>
                                    </div>
                                </div>
                                <div x-show="activeTab === 'tabMessages'"
                                    x-transition:enter="transition-all duration-500 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                    <div>
                                        <p>
                                            Etiam nec ante eget lacus vulputate egestas non
                                            iaculis tellus. Suspendisse tempus ex in tortor
                                            venenatis malesuada. Aenean consequat dui vitae nibh
                                            lobortis condimentum. Duis vel risus est.
                                        </p>
                                        <div class="flex space-x-2 pt-3">
                                            <a href="#"
                                                class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
                                                Tag 2
                                            </a>
                                        </div>

                                        <p class="pt-3 text-xs text-slate-400 dark:text-navy-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Tempore dolore non atque?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="code-wrapper hidden pt-4">
                    <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
            <code class="language-html" x-ignore>
&lt;div x-data=&quot;{activeTab:&apos;tabProfile&apos;}&quot; class=&quot;tabs flex flex-col&quot;&gt;&#13;&#10;    &lt;div class=&quot;is-scrollbar-hidden overflow-x-auto&quot;&gt;&#13;&#10;      &lt;div class=&quot;border-b-2 border-slate-150 dark:border-navy-500&quot;&gt;&#13;&#10;        &lt;div class=&quot;tabs-list -mb-0.5 flex&quot;&gt;&#13;&#10;          &lt;button&#13;&#10;            @click=&quot;activeTab = &apos;tabHome&apos;&quot;&#13;&#10;            :class=&quot;activeTab === &apos;tabHome&apos; ? &apos;border-primary dark:border-accent text-primary dark:text-accent-light&apos; : &apos;border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100&apos;&quot;&#13;&#10;            class=&quot;btn shrink-0 space-x-2 rounded-none border-b-2 px-3 py-2 font-medium&quot;&#13;&#10;          &gt;&#13;&#10;            &lt;svg&#13;&#10;              xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;              class=&quot;h-4.5 w-4.5&quot;&#13;&#10;              fill=&quot;none&quot;&#13;&#10;              viewBox=&quot;0 0 24 24&quot;&#13;&#10;              stroke=&quot;currentColor&quot;&#13;&#10;              stroke-width=&quot;1.5&quot;&#13;&#10;            &gt;&#13;&#10;              &lt;path&#13;&#10;                stroke-linecap=&quot;round&quot;&#13;&#10;                stroke-linejoin=&quot;round&quot;&#13;&#10;                d=&quot;M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6&quot;&#13;&#10;              /&gt;&#13;&#10;            &lt;/svg&gt;&#13;&#10;            &lt;span&gt;Home&lt;/span&gt;&#13;&#10;          &lt;/button&gt;&#13;&#10;          &lt;button&#13;&#10;            @click=&quot;activeTab = &apos;tabProfile&apos;&quot;&#13;&#10;            :class=&quot;activeTab === &apos;tabProfile&apos; ? &apos;border-primary dark:border-accent text-primary dark:text-accent-light&apos; : &apos;border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100&apos;&quot;&#13;&#10;            class=&quot;btn shrink-0 space-x-2 rounded-none border-b-2 px-3 py-2 font-medium&quot;&#13;&#10;          &gt;&#13;&#10;            &lt;svg&#13;&#10;              xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;              class=&quot;h-4.5 w-4.5&quot;&#13;&#10;              fill=&quot;none&quot;&#13;&#10;              viewBox=&quot;0 0 24 24&quot;&#13;&#10;              stroke=&quot;currentColor&quot;&#13;&#10;              stroke-width=&quot;1.5&quot;&#13;&#10;            &gt;&#13;&#10;              &lt;path&#13;&#10;                stroke-linecap=&quot;round&quot;&#13;&#10;                stroke-linejoin=&quot;round&quot;&#13;&#10;                d=&quot;M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z&quot;&#13;&#10;              /&gt;&#13;&#10;            &lt;/svg&gt;&#13;&#10;            &lt;span&gt;Profile&lt;/span&gt;&#13;&#10;          &lt;/button&gt;&#13;&#10;          &lt;button&#13;&#10;            @click=&quot;activeTab = &apos;tabMessages&apos;&quot;&#13;&#10;            :class=&quot;activeTab === &apos;tabMessages&apos; ? &apos;border-primary dark:border-accent text-primary dark:text-accent-light&apos; : &apos;border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100&apos;&quot;&#13;&#10;            class=&quot;btn shrink-0 space-x-2 rounded-none border-b-2 px-3 py-2 font-medium&quot;&#13;&#10;          &gt;&#13;&#10;            &lt;svg&#13;&#10;              xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;              class=&quot;h-4.5 w-4.5&quot;&#13;&#10;              fill=&quot;none&quot;&#13;&#10;              viewBox=&quot;0 0 24 24&quot;&#13;&#10;              stroke=&quot;currentColor&quot;&#13;&#10;              stroke-width=&quot;1.5&quot;&#13;&#10;            &gt;&#13;&#10;              &lt;path&#13;&#10;                stroke-linecap=&quot;round&quot;&#13;&#10;                stroke-linejoin=&quot;round&quot;&#13;&#10;                d=&quot;M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z&quot;&#13;&#10;              /&gt;&#13;&#10;            &lt;/svg&gt;&#13;&#10;            &lt;span&gt; Messages &lt;/span&gt;&#13;&#10;          &lt;/button&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div class=&quot;tab-content pt-4&quot;&gt;&#13;&#10;      &lt;div&#13;&#10;        x-show=&quot;activeTab === &apos;tabHome&apos;&quot;&#13;&#10;        x-transition:enter=&quot;transition-all duration-500 easy-in-out&quot;&#13;&#10;        x-transition:enter-start=&quot;opacity-0 [transform:translate3d(1rem,0,0)]&quot;&#13;&#10;        x-transition:enter-end=&quot;opacity-100 [transform:translate3d(0,0,0)]&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;div&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Pellentesque pulvinar, sapien eget fermentum sodales, felis lacus&#13;&#10;            viverra magna, id pulvinar odio metus non enim. Ut id augue&#13;&#10;            interdum, ultrices felis eu, tincidunt libero.&#13;&#10;          &lt;/p&gt;&#13;&#10;          &lt;div class=&quot;flex space-x-2 pt-3&quot;&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light&quot;&#13;&#10;            &gt;&#13;&#10;              Tag 1&#13;&#10;            &lt;/a&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light&quot;&#13;&#10;            &gt;&#13;&#10;              Tag 2&#13;&#10;            &lt;/a&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;&#13;&#10;          &lt;p class=&quot;pt-3 text-xs text-slate-400 dark:text-navy-300&quot;&gt;&#13;&#10;            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore&#13;&#10;            dolore non atque?&#13;&#10;          &lt;/p&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div&#13;&#10;        x-show=&quot;activeTab === &apos;tabProfile&apos;&quot;&#13;&#10;        x-transition:enter=&quot;transition-all duration-500 easy-in-out&quot;&#13;&#10;        x-transition:enter-start=&quot;opacity-0 [transform:translate3d(1rem,0,0)]&quot;&#13;&#10;        x-transition:enter-end=&quot;opacity-100 [transform:translate3d(0,0,0)]&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;div&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Cras iaculis ipsum quis lectus faucibus, in mattis nulla molestie.&#13;&#10;            Vestibulum vel tristique libero. Morbi vulputate odio at viverra&#13;&#10;            sodales. Curabitur accumsan justo eu libero porta ultrices vitae eu&#13;&#10;            leo.&#13;&#10;          &lt;/p&gt;&#13;&#10;          &lt;div class=&quot;flex space-x-2 pt-3&quot;&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light&quot;&#13;&#10;            &gt;&#13;&#10;              Tag 1&#13;&#10;            &lt;/a&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light&quot;&#13;&#10;            &gt;&#13;&#10;              Tag 2&#13;&#10;            &lt;/a&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;&#13;&#10;          &lt;p class=&quot;pt-3 text-xs text-slate-400 dark:text-navy-300&quot;&gt;&#13;&#10;            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore&#13;&#10;            dolore non atque?&#13;&#10;          &lt;/p&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div&#13;&#10;        x-show=&quot;activeTab === &apos;tabMessages&apos;&quot;&#13;&#10;        x-transition:enter=&quot;transition-all duration-500 easy-in-out&quot;&#13;&#10;        x-transition:enter-start=&quot;opacity-0 [transform:translate3d(1rem,0,0)]&quot;&#13;&#10;        x-transition:enter-end=&quot;opacity-100 [transform:translate3d(0,0,0)]&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;div&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Etiam nec ante eget lacus vulputate egestas non iaculis tellus.&#13;&#10;            Suspendisse tempus ex in tortor venenatis malesuada. Aenean&#13;&#10;            consequat dui vitae nibh lobortis condimentum. Duis vel risus est.&#13;&#10;          &lt;/p&gt;&#13;&#10;          &lt;div class=&quot;flex space-x-2 pt-3&quot;&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light&quot;&#13;&#10;            &gt;&#13;&#10;              Tag 1&#13;&#10;            &lt;/a&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light&quot;&#13;&#10;            &gt;&#13;&#10;              Tag 2&#13;&#10;            &lt;/a&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;&#13;&#10;          &lt;p class=&quot;pt-3 text-xs text-slate-400 dark:text-navy-300&quot;&gt;&#13;&#10;            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore&#13;&#10;            dolore non atque?&#13;&#10;          &lt;/p&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;                </code>
          </pre>
                </div>
            </div>

            <!-- Boxed Tabs -->
            <div class="card px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Boxed Tabs
                    </h2>
                    <label class="inline-flex items-center space-x-2">
                        <span class="text-xs text-slate-400 dark:text-navy-300">Code</span>
                        <input @change="helpers.toggleCode"
                            class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-accent dark:checked:before:bg-white"
                            type="checkbox" />
                    </label>
                </div>
                <div class="max-w-xl">
                    <p>
                        Tabs make it easy to explore and switch between different views.
                        Check out code for detail of usage.
                    </p>
                    <div class="mt-5">
                        <div x-data="{ activeTab: 'tabHome' }" class="tabs flex flex-col">
                            <div
                                class="is-scrollbar-hidden overflow-x-auto rounded-lg bg-slate-200 text-slate-600 dark:bg-navy-800 dark:text-navy-200">
                                <div class="tabs-list flex px-1.5 py-1">
                                    <button @click="activeTab = 'tabHome'"
                                        :class="activeTab === 'tabHome' ?
                                            'bg-white shadow dark:bg-navy-500 dark:text-navy-100' :
                                            'hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                        class="btn shrink-0 px-3 py-1.5 font-medium">
                                        Home
                                    </button>
                                    <button @click="activeTab = 'tabProfile'"
                                        :class="activeTab === 'tabProfile' ?
                                            'bg-white shadow dark:bg-navy-500 dark:text-navy-100' :
                                            'hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                        class="btn shrink-0 px-3 py-1.5 font-medium">
                                        Profile
                                    </button>
                                    <button @click="activeTab = 'tabMessages'"
                                        :class="activeTab === 'tabMessages' ?
                                            'bg-white shadow dark:bg-navy-500 dark:text-navy-100' :
                                            'hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                        class="btn shrink-0 px-3 py-1.5 font-medium">
                                        Messages
                                    </button>
                                    <button @click="activeTab = 'tabSettings'"
                                        :class="activeTab === 'tabSettings' ?
                                            'bg-white shadow dark:bg-navy-500 dark:text-navy-100' :
                                            'hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                        class="btn shrink-0 px-3 py-1.5 font-medium">
                                        Settings
                                    </button>
                                </div>
                            </div>
                            <div class="tab-content pt-4">
                                <div x-show="activeTab === 'tabHome'"
                                    x-transition:enter="transition-all duration-500 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                    <div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Praesent elementum finibus arcu vitae
                                            scelerisque. Etiam rutrum blandit condimentum.
                                            Maecenas condimentum massa vitae quam interdum, et
                                            lacinia urna tempor
                                        </p>
                                        <div class="flex space-x-2 pt-3">
                                            <a href="#"
                                                class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
                                                Tag 2
                                            </a>
                                        </div>

                                        <p class="pt-3 text-xs text-slate-400 dark:text-navy-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Tempore dolore non atque?
                                        </p>
                                    </div>
                                </div>
                                <div x-show="activeTab === 'tabProfile'"
                                    x-transition:enter="transition-all duration-500 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                    <div>
                                        <p>
                                            Pellentesque pulvinar, sapien eget fermentum sodales,
                                            felis lacus viverra magna, id pulvinar odio metus non
                                            enim. Ut id augue interdum, ultrices felis eu,
                                            tincidunt libero.
                                        </p>
                                        <div class="flex space-x-2 pt-3">
                                            <a href="#"
                                                class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
                                                Tag 2
                                            </a>
                                        </div>

                                        <p class="pt-3 text-xs text-slate-400 dark:text-navy-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Tempore dolore non atque?
                                        </p>
                                    </div>
                                </div>
                                <div x-show="activeTab === 'tabMessages'"
                                    x-transition:enter="transition-all duration-500 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                    <div>
                                        <p>
                                            Cras iaculis ipsum quis lectus faucibus, in mattis
                                            nulla molestie. Vestibulum vel tristique libero. Morbi
                                            vulputate odio at viverra sodales. Curabitur accumsan
                                            justo eu libero porta ultrices vitae eu leo.
                                        </p>
                                        <div class="flex space-x-2 pt-3">
                                            <a href="#"
                                                class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
                                                Tag 2
                                            </a>
                                        </div>

                                        <p class="pt-3 text-xs text-slate-400 dark:text-navy-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Tempore dolore non atque?
                                        </p>
                                    </div>
                                </div>
                                <div x-show="activeTab === 'tabSettings'"
                                    x-transition:enter="transition-all duration-500 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                    <div>
                                        <p>
                                            Etiam nec ante eget lacus vulputate egestas non
                                            iaculis tellus. Suspendisse tempus ex in tortor
                                            venenatis malesuada. Aenean consequat dui vitae nibh
                                            lobortis condimentum. Duis vel risus est.
                                        </p>
                                        <div class="flex space-x-2 pt-3">
                                            <a href="#"
                                                class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
                                                Tag 2
                                            </a>
                                        </div>

                                        <p class="pt-3 text-xs text-slate-400 dark:text-navy-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Tempore dolore non atque?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="code-wrapper hidden pt-4">
                    <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
            <code class="language-html" x-ignore>
&lt;div x-data=&quot;{activeTab:&apos;tabHome&apos;}&quot; class=&quot;tabs flex flex-col&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-scrollbar-hidden overflow-x-auto rounded-lg bg-slate-200 text-slate-600 dark:bg-navy-800 dark:text-navy-200&quot;&#13;&#10;    &gt;&#13;&#10;      &lt;div class=&quot;tabs-list flex px-1.5 py-1&quot;&gt;&#13;&#10;        &lt;button&#13;&#10;          @click=&quot;activeTab = &apos;tabHome&apos;&quot;&#13;&#10;          :class=&quot;activeTab === &apos;tabHome&apos; ? &apos;bg-white shadow dark:bg-navy-500 dark:text-navy-100&apos; : &apos;hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100&apos;&quot;&#13;&#10;          class=&quot;btn shrink-0 px-3 py-1.5 font-medium&quot;&#13;&#10;        &gt;&#13;&#10;          Home&#13;&#10;        &lt;/button&gt;&#13;&#10;        &lt;button&#13;&#10;          @click=&quot;activeTab = &apos;tabProfile&apos;&quot;&#13;&#10;          :class=&quot;activeTab === &apos;tabProfile&apos; ? &apos;bg-white shadow dark:bg-navy-500 dark:text-navy-100&apos; : &apos;hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100&apos;&quot;&#13;&#10;          class=&quot;btn shrink-0 px-3 py-1.5 font-medium&quot;&#13;&#10;        &gt;&#13;&#10;          Profile&#13;&#10;        &lt;/button&gt;&#13;&#10;        &lt;button&#13;&#10;          @click=&quot;activeTab = &apos;tabMessages&apos;&quot;&#13;&#10;          :class=&quot;activeTab === &apos;tabMessages&apos; ? &apos;bg-white shadow dark:bg-navy-500 dark:text-navy-100&apos; : &apos;hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100&apos;&quot;&#13;&#10;          class=&quot;btn shrink-0 px-3 py-1.5 font-medium&quot;&#13;&#10;        &gt;&#13;&#10;          Messages&#13;&#10;        &lt;/button&gt;&#13;&#10;        &lt;button&#13;&#10;          @click=&quot;activeTab = &apos;tabSettings&apos;&quot;&#13;&#10;          :class=&quot;activeTab === &apos;tabSettings&apos; ? &apos;bg-white shadow dark:bg-navy-500 dark:text-navy-100&apos; : &apos;hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100&apos;&quot;&#13;&#10;          class=&quot;btn shrink-0 px-3 py-1.5 font-medium&quot;&#13;&#10;        &gt;&#13;&#10;          Settings&#13;&#10;        &lt;/button&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div class=&quot;tab-content pt-4&quot;&gt;&#13;&#10;      &lt;div&#13;&#10;        x-show=&quot;activeTab === &apos;tabHome&apos;&quot;&#13;&#10;        x-transition:enter=&quot;transition-all duration-500 easy-in-out&quot;&#13;&#10;        x-transition:enter-start=&quot;opacity-0 [transform:translate3d(1rem,0,0)]&quot;&#13;&#10;        x-transition:enter-end=&quot;opacity-100 [transform:translate3d(0,0,0)]&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;div&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent&#13;&#10;            elementum finibus arcu vitae scelerisque. Etiam rutrum blandit&#13;&#10;            condimentum. Maecenas condimentum massa vitae quam interdum, et&#13;&#10;            lacinia urna tempor&#13;&#10;          &lt;/p&gt;&#13;&#10;          &lt;div class=&quot;flex space-x-2 pt-3&quot;&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light&quot;&#13;&#10;            &gt;&#13;&#10;              Tag 1&#13;&#10;            &lt;/a&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light&quot;&#13;&#10;            &gt;&#13;&#10;              Tag 2&#13;&#10;            &lt;/a&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;&#13;&#10;          &lt;p class=&quot;pt-3 text-xs text-slate-400 dark:text-navy-300&quot;&gt;&#13;&#10;            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore&#13;&#10;            dolore non atque?&#13;&#10;          &lt;/p&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div&#13;&#10;        x-show=&quot;activeTab === &apos;tabProfile&apos;&quot;&#13;&#10;        x-transition:enter=&quot;transition-all duration-500 easy-in-out&quot;&#13;&#10;        x-transition:enter-start=&quot;opacity-0 [transform:translate3d(1rem,0,0)]&quot;&#13;&#10;        x-transition:enter-end=&quot;opacity-100 [transform:translate3d(0,0,0)]&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;div&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Pellentesque pulvinar, sapien eget fermentum sodales, felis lacus&#13;&#10;            viverra magna, id pulvinar odio metus non enim. Ut id augue&#13;&#10;            interdum, ultrices felis eu, tincidunt libero.&#13;&#10;          &lt;/p&gt;&#13;&#10;          &lt;div class=&quot;flex space-x-2 pt-3&quot;&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light&quot;&#13;&#10;            &gt;&#13;&#10;              Tag 1&#13;&#10;            &lt;/a&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light&quot;&#13;&#10;            &gt;&#13;&#10;              Tag 2&#13;&#10;            &lt;/a&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;&#13;&#10;          &lt;p class=&quot;pt-3 text-xs text-slate-400 dark:text-navy-300&quot;&gt;&#13;&#10;            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore&#13;&#10;            dolore non atque?&#13;&#10;          &lt;/p&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div&#13;&#10;        x-show=&quot;activeTab === &apos;tabMessages&apos;&quot;&#13;&#10;        x-transition:enter=&quot;transition-all duration-500 easy-in-out&quot;&#13;&#10;        x-transition:enter-start=&quot;opacity-0 [transform:translate3d(1rem,0,0)]&quot;&#13;&#10;        x-transition:enter-end=&quot;opacity-100 [transform:translate3d(0,0,0)]&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;div&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Cras iaculis ipsum quis lectus faucibus, in mattis nulla molestie.&#13;&#10;            Vestibulum vel tristique libero. Morbi vulputate odio at viverra&#13;&#10;            sodales. Curabitur accumsan justo eu libero porta ultrices vitae eu&#13;&#10;            leo.&#13;&#10;          &lt;/p&gt;&#13;&#10;          &lt;div class=&quot;flex space-x-2 pt-3&quot;&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light&quot;&#13;&#10;            &gt;&#13;&#10;              Tag 1&#13;&#10;            &lt;/a&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light&quot;&#13;&#10;            &gt;&#13;&#10;              Tag 2&#13;&#10;            &lt;/a&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;&#13;&#10;          &lt;p class=&quot;pt-3 text-xs text-slate-400 dark:text-navy-300&quot;&gt;&#13;&#10;            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore&#13;&#10;            dolore non atque?&#13;&#10;          &lt;/p&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div&#13;&#10;        x-show=&quot;activeTab === &apos;tabSettings&apos;&quot;&#13;&#10;        x-transition:enter=&quot;transition-all duration-500 easy-in-out&quot;&#13;&#10;        x-transition:enter-start=&quot;opacity-0 [transform:translate3d(1rem,0,0)]&quot;&#13;&#10;        x-transition:enter-end=&quot;opacity-100 [transform:translate3d(0,0,0)]&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;div&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Etiam nec ante eget lacus vulputate egestas non iaculis tellus.&#13;&#10;            Suspendisse tempus ex in tortor venenatis malesuada. Aenean&#13;&#10;            consequat dui vitae nibh lobortis condimentum. Duis vel risus est.&#13;&#10;          &lt;/p&gt;&#13;&#10;          &lt;div class=&quot;flex space-x-2 pt-3&quot;&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light&quot;&#13;&#10;            &gt;&#13;&#10;              Tag 1&#13;&#10;            &lt;/a&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light&quot;&#13;&#10;            &gt;&#13;&#10;              Tag 2&#13;&#10;            &lt;/a&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;&#13;&#10;          &lt;p class=&quot;pt-3 text-xs text-slate-400 dark:text-navy-300&quot;&gt;&#13;&#10;            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore&#13;&#10;            dolore non atque?&#13;&#10;          &lt;/p&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;                </code>
          </pre>
                </div>
            </div>

            <!-- Boxed Tabs With Icon -->
            <div class="card px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Boxed Tabs With Icon
                    </h2>
                    <label class="inline-flex items-center space-x-2">
                        <span class="text-xs text-slate-400 dark:text-navy-300">Code</span>
                        <input @change="helpers.toggleCode"
                            class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-accent dark:checked:before:bg-white"
                            type="checkbox" />
                    </label>
                </div>
                <div class="max-w-xl">
                    <p>
                        Tabs make it easy to explore and switch between different views.
                        Check out code for detail of usage.
                    </p>
                    <div class="mt-5">
                        <div x-data="{ activeTab: 'tabHome' }" class="tabs flex flex-col">
                            <div
                                class="is-scrollbar-hidden overflow-x-auto rounded-lg bg-slate-200 text-slate-600 dark:bg-navy-800 dark:text-navy-200">
                                <div class="tabs-list flex px-1.5 py-1">
                                    <button @click="activeTab = 'tabHome'"
                                        :class="activeTab === 'tabHome' ?
                                            'bg-white shadow dark:bg-navy-500 dark:text-navy-100' :
                                            'hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                        class="btn shrink-0 space-x-2 px-3 py-1.5 font-medium">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                        </svg>
                                        <span> Home </span>
                                    </button>
                                    <button @click="activeTab = 'tabProfile'"
                                        :class="activeTab === 'tabProfile' ?
                                            'bg-white shadow dark:bg-navy-500 dark:text-navy-100' :
                                            'hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                        class="btn shrink-0 space-x-2 px-3 py-1.5 font-medium">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                        <span>Profile</span>
                                    </button>
                                    <button @click="activeTab = 'tabMessages'"
                                        :class="activeTab === 'tabMessages' ?
                                            'bg-white shadow dark:bg-navy-500 dark:text-navy-100' :
                                            'hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                        class="btn shrink-0 space-x-2 px-3 py-1.5 font-medium">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                        <span>Messages</span>
                                    </button>
                                </div>
                            </div>
                            <div class="tab-content pt-4">
                                <div x-show="activeTab === 'tabHome'"
                                    x-transition:enter="transition-all duration-500 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                    <div>
                                        <p>
                                            Etiam nec ante eget lacus vulputate egestas non
                                            iaculis tellus. Suspendisse tempus ex in tortor
                                            venenatis malesuada. Aenean consequat dui vitae nibh
                                            lobortis condimentum. Duis vel risus est.
                                        </p>
                                        <div class="flex space-x-2 pt-3">
                                            <a href="#"
                                                class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
                                                Tag 2
                                            </a>
                                        </div>

                                        <p class="pt-3 text-xs text-slate-400 dark:text-navy-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Tempore dolore non atque?
                                        </p>
                                    </div>
                                </div>
                                <div x-show="activeTab === 'tabProfile'"
                                    x-transition:enter="transition-all duration-500 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                    <div>
                                        <p>
                                            Cras iaculis ipsum quis lectus faucibus, in mattis
                                            nulla molestie. Vestibulum vel tristique libero. Morbi
                                            vulputate odio at viverra sodales. Curabitur accumsan
                                            justo eu libero porta ultrices vitae eu leo.
                                        </p>
                                        <div class="flex space-x-2 pt-3">
                                            <a href="#"
                                                class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
                                                Tag 2
                                            </a>
                                        </div>

                                        <p class="pt-3 text-xs text-slate-400 dark:text-navy-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Tempore dolore non atque?
                                        </p>
                                    </div>
                                </div>
                                <div x-show="activeTab === 'tabMessages'"
                                    x-transition:enter="transition-all duration-500 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                    <div>
                                        <p>
                                            Pellentesque pulvinar, sapien eget fermentum sodales,
                                            felis lacus viverra magna, id pulvinar odio metus non
                                            enim. Ut id augue interdum, ultrices felis eu,
                                            tincidunt libero.
                                        </p>
                                        <div class="flex space-x-2 pt-3">
                                            <a href="#"
                                                class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
                                                Tag 2
                                            </a>
                                        </div>

                                        <p class="pt-3 text-xs text-slate-400 dark:text-navy-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Tempore dolore non atque?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="code-wrapper hidden pt-4">
                    <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
            <code class="language-html" x-ignore>
&lt;div x-data=&quot;{activeTab:&apos;tabHome&apos;}&quot; class=&quot;tabs flex flex-col&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-scrollbar-hidden overflow-x-auto rounded-lg bg-slate-200 text-slate-600 dark:bg-navy-800 dark:text-navy-200&quot;&#13;&#10;    &gt;&#13;&#10;      &lt;div class=&quot;tabs-list flex px-1.5 py-1&quot;&gt;&#13;&#10;        &lt;button&#13;&#10;          @click=&quot;activeTab = &apos;tabHome&apos;&quot;&#13;&#10;          :class=&quot;activeTab === &apos;tabHome&apos; ? &apos;bg-white shadow dark:bg-navy-500 dark:text-navy-100&apos; : &apos;hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100&apos;&quot;&#13;&#10;          class=&quot;btn shrink-0 space-x-2 px-3 py-1.5 font-medium&quot;&#13;&#10;        &gt;&#13;&#10;          &lt;svg&#13;&#10;            xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;            class=&quot;h-4.5 w-4.5&quot;&#13;&#10;            fill=&quot;none&quot;&#13;&#10;            viewBox=&quot;0 0 24 24&quot;&#13;&#10;            stroke=&quot;currentColor&quot;&#13;&#10;            stroke-width=&quot;1.5&quot;&#13;&#10;          &gt;&#13;&#10;            &lt;path&#13;&#10;              stroke-linecap=&quot;round&quot;&#13;&#10;              stroke-linejoin=&quot;round&quot;&#13;&#10;              d=&quot;M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6&quot;&#13;&#10;            /&gt;&#13;&#10;          &lt;/svg&gt;&#13;&#10;          &lt;span&gt; Home &lt;/span&gt;&#13;&#10;        &lt;/button&gt;&#13;&#10;        &lt;button&#13;&#10;          @click=&quot;activeTab = &apos;tabProfile&apos;&quot;&#13;&#10;          :class=&quot;activeTab === &apos;tabProfile&apos; ? &apos;bg-white shadow dark:bg-navy-500 dark:text-navy-100&apos; : &apos;hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100&apos;&quot;&#13;&#10;          class=&quot;btn shrink-0 space-x-2 px-3 py-1.5 font-medium&quot;&#13;&#10;        &gt;&#13;&#10;          &lt;svg&#13;&#10;            xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;            class=&quot;h-4.5 w-4.5&quot;&#13;&#10;            fill=&quot;none&quot;&#13;&#10;            viewBox=&quot;0 0 24 24&quot;&#13;&#10;            stroke=&quot;currentColor&quot;&#13;&#10;            stroke-width=&quot;1.5&quot;&#13;&#10;          &gt;&#13;&#10;            &lt;path&#13;&#10;              stroke-linecap=&quot;round&quot;&#13;&#10;              stroke-linejoin=&quot;round&quot;&#13;&#10;              d=&quot;M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z&quot;&#13;&#10;            /&gt;&#13;&#10;          &lt;/svg&gt;&#13;&#10;          &lt;span&gt;Profile&lt;/span&gt;&#13;&#10;        &lt;/button&gt;&#13;&#10;        &lt;button&#13;&#10;          @click=&quot;activeTab = &apos;tabMessages&apos;&quot;&#13;&#10;          :class=&quot;activeTab === &apos;tabMessages&apos; ? &apos;bg-white shadow dark:bg-navy-500 dark:text-navy-100&apos; : &apos;hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100&apos;&quot;&#13;&#10;          class=&quot;btn shrink-0 space-x-2 px-3 py-1.5 font-medium&quot;&#13;&#10;        &gt;&#13;&#10;          &lt;svg&#13;&#10;            xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;            class=&quot;h-4.5 w-4.5&quot;&#13;&#10;            fill=&quot;none&quot;&#13;&#10;            viewBox=&quot;0 0 24 24&quot;&#13;&#10;            stroke=&quot;currentColor&quot;&#13;&#10;            stroke-width=&quot;1.5&quot;&#13;&#10;          &gt;&#13;&#10;            &lt;path&#13;&#10;              stroke-linecap=&quot;round&quot;&#13;&#10;              stroke-linejoin=&quot;round&quot;&#13;&#10;              d=&quot;M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z&quot;&#13;&#10;            /&gt;&#13;&#10;          &lt;/svg&gt;&#13;&#10;          &lt;span&gt;Messages&lt;/span&gt;&#13;&#10;        &lt;/button&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div class=&quot;tab-content pt-4&quot;&gt;&#13;&#10;      &lt;div&#13;&#10;        x-show=&quot;activeTab === &apos;tabHome&apos;&quot;&#13;&#10;        x-transition:enter=&quot;transition-all duration-500 easy-in-out&quot;&#13;&#10;        x-transition:enter-start=&quot;opacity-0 [transform:translate3d(1rem,0,0)]&quot;&#13;&#10;        x-transition:enter-end=&quot;opacity-100 [transform:translate3d(0,0,0)]&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;div&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Etiam nec ante eget lacus vulputate egestas non iaculis tellus.&#13;&#10;            Suspendisse tempus ex in tortor venenatis malesuada. Aenean&#13;&#10;            consequat dui vitae nibh lobortis condimentum. Duis vel risus est.&#13;&#10;          &lt;/p&gt;&#13;&#10;          &lt;div class=&quot;flex space-x-2 pt-3&quot;&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light&quot;&#13;&#10;            &gt;&#13;&#10;              Tag 1&#13;&#10;            &lt;/a&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light&quot;&#13;&#10;            &gt;&#13;&#10;              Tag 2&#13;&#10;            &lt;/a&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;&#13;&#10;          &lt;p class=&quot;pt-3 text-xs text-slate-400 dark:text-navy-300&quot;&gt;&#13;&#10;            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore&#13;&#10;            dolore non atque?&#13;&#10;          &lt;/p&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div&#13;&#10;        x-show=&quot;activeTab === &apos;tabProfile&apos;&quot;&#13;&#10;        x-transition:enter=&quot;transition-all duration-500 easy-in-out&quot;&#13;&#10;        x-transition:enter-start=&quot;opacity-0 [transform:translate3d(1rem,0,0)]&quot;&#13;&#10;        x-transition:enter-end=&quot;opacity-100 [transform:translate3d(0,0,0)]&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;div&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Cras iaculis ipsum quis lectus faucibus, in mattis nulla molestie.&#13;&#10;            Vestibulum vel tristique libero. Morbi vulputate odio at viverra&#13;&#10;            sodales. Curabitur accumsan justo eu libero porta ultrices vitae eu&#13;&#10;            leo.&#13;&#10;          &lt;/p&gt;&#13;&#10;          &lt;div class=&quot;flex space-x-2 pt-3&quot;&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light&quot;&#13;&#10;            &gt;&#13;&#10;              Tag 1&#13;&#10;            &lt;/a&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light&quot;&#13;&#10;            &gt;&#13;&#10;              Tag 2&#13;&#10;            &lt;/a&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;&#13;&#10;          &lt;p class=&quot;pt-3 text-xs text-slate-400 dark:text-navy-300&quot;&gt;&#13;&#10;            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore&#13;&#10;            dolore non atque?&#13;&#10;          &lt;/p&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div&#13;&#10;        x-show=&quot;activeTab === &apos;tabMessages&apos;&quot;&#13;&#10;        x-transition:enter=&quot;transition-all duration-500 easy-in-out&quot;&#13;&#10;        x-transition:enter-start=&quot;opacity-0 [transform:translate3d(1rem,0,0)]&quot;&#13;&#10;        x-transition:enter-end=&quot;opacity-100 [transform:translate3d(0,0,0)]&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;div&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Pellentesque pulvinar, sapien eget fermentum sodales, felis lacus&#13;&#10;            viverra magna, id pulvinar odio metus non enim. Ut id augue&#13;&#10;            interdum, ultrices felis eu, tincidunt libero.&#13;&#10;          &lt;/p&gt;&#13;&#10;          &lt;div class=&quot;flex space-x-2 pt-3&quot;&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light&quot;&#13;&#10;            &gt;&#13;&#10;              Tag 1&#13;&#10;            &lt;/a&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light&quot;&#13;&#10;            &gt;&#13;&#10;              Tag 2&#13;&#10;            &lt;/a&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;&#13;&#10;          &lt;p class=&quot;pt-3 text-xs text-slate-400 dark:text-navy-300&quot;&gt;&#13;&#10;            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore&#13;&#10;            dolore non atque?&#13;&#10;          &lt;/p&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;                </code>
          </pre>
                </div>
            </div>
        </div>
    </main>

</x-app-layout>

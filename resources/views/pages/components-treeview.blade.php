<x-app-layout title="Treeview Component" is-sidebar-open="true" is-header-blur="true">
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
          <h2
            class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl"
          >
            Treeview
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
            <li>Treeview</li>
          </ul>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
          <!-- Basic Treeview -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base"
              >
                Basic Treeview
              </h2>
              <label class="inline-flex items-center space-x-2">
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
                A tree view component presents a hierarchical list. Check out
                code for detail of usage.
              </p>
              <div class="mt-5">
                <ul class="space-y-1 font-inter font-medium">
                  <li x-data="{expanded:false}">
                    <div
                      tabindex="0"
                      :class="expanded && 'text-slate-800 dark:text-navy-100'"
                      class="flex cursor-pointer items-center space-x-1.5 rounded px-2 py-1 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                    >
                      <button
                        @click="expanded = !expanded"
                        class="btn h-5 w-5 rounded-lg p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="h-4.5 w-4.5 transition-transform"
                          :class="expanded && 'rotate-90'"
                          viewBox="0 0 20 20"
                          fill="currentColor"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"
                          />
                        </svg>
                      </button>
                      <span>Application</span>
                    </div>
                    <ul x-show="expanded" x-collapse class="pl-4">
                      <li>
                        <div
                          tabindex="0"
                          class="flex cursor-pointer items-center space-x-1.5 rounded px-2 py-1 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                        >
                          <div
                            class="flex h-5 w-5 items-center justify-center"
                          ></div>
                          <span>Chrome</span>
                        </div>
                      </li>
                      <li>
                        <div
                          tabindex="0"
                          class="flex cursor-pointer items-center space-x-1.5 rounded px-2 py-1 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                        >
                          <div
                            class="flex h-5 w-5 items-center justify-center"
                          ></div>
                          <span>VS Code</span>
                        </div>
                      </li>
                      <li>
                        <div
                          tabindex="0"
                          class="flex cursor-pointer items-center space-x-1.5 rounded px-2 py-1 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                        >
                          <div
                            class="flex h-5 w-5 items-center justify-center"
                          ></div>
                          <span>Mail App</span>
                        </div>
                      </li>
                      <li>
                        <div
                          tabindex="0"
                          class="flex cursor-pointer items-center space-x-1.5 rounded px-2 py-1 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                        >
                          <div
                            class="flex h-5 w-5 items-center justify-center"
                          ></div>
                          <span>Firefox</span>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li x-data="{expanded:true}">
                    <div
                      tabindex="0"
                      :class="expanded && 'text-slate-800 dark:text-navy-100'"
                      class="flex cursor-pointer items-center space-x-1.5 rounded px-2 py-1 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                    >
                      <button
                        @click="expanded = !expanded"
                        class="btn h-5 w-5 rounded-lg p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="h-4.5 w-4.5 transition-transform"
                          :class="expanded && 'rotate-90'"
                          viewBox="0 0 20 20"
                          fill="currentColor"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"
                          />
                        </svg>
                      </button>
                      <span>Document</span>
                    </div>
                    <ul x-show="expanded" x-collapse class="pl-4">
                      <li x-data="{expanded:true}">
                        <div
                          tabindex="0"
                          :class="expanded && 'text-slate-800 dark:text-navy-100'"
                          class="flex cursor-pointer items-center space-x-1.5 rounded px-2 py-1 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                        >
                          <button
                            @click="expanded = !expanded"
                            class="btn h-5 w-5 rounded-lg p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              class="h-4.5 w-4.5 transition-transform"
                              :class="expanded && 'rotate-90'"
                              viewBox="0 0 20 20"
                              fill="currentColor"
                            >
                              <path
                                fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"
                              />
                            </svg>
                          </button>
                          <span>React App</span>
                        </div>
                        <ul x-show="expanded" x-collapse class="pl-4">
                          <li x-data="{expanded:true}">
                            <div
                              tabindex="0"
                              :class="expanded && 'text-slate-800 dark:text-navy-100'"
                              class="flex cursor-pointer items-center space-x-1.5 rounded px-2 py-1 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                            >
                              <button
                                @click="expanded = !expanded"
                                class="btn h-5 w-5 rounded-lg p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                              >
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  class="h-4.5 w-4.5 transition-transform"
                                  :class="expanded && 'rotate-90'"
                                  viewBox="0 0 20 20"
                                  fill="currentColor"
                                >
                                  <path
                                    fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"
                                  />
                                </svg>
                              </button>
                              <span>src</span>
                            </div>
                            <ul x-show="expanded" x-collapse class="pl-4">
                              <li x-data="{expanded:true}">
                                <div
                                  tabindex="0"
                                  :class="expanded && 'text-slate-800 dark:text-navy-100'"
                                  class="flex cursor-pointer items-center space-x-1.5 rounded px-2 py-1 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                                >
                                  <button
                                    @click="expanded = !expanded"
                                    class="btn h-5 w-5 rounded-lg p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      class="h-4.5 w-4.5 transition-transform"
                                      :class="expanded && 'rotate-90'"
                                      viewBox="0 0 20 20"
                                      fill="currentColor"
                                    >
                                      <path
                                        fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"
                                      />
                                    </svg>
                                  </button>
                                  <span>Components</span>
                                </div>
                                <ul x-show="expanded" x-collapse class="pl-4">
                                  <li>
                                    <div
                                      tabindex="0"
                                      class="flex cursor-pointer items-center space-x-1.5 rounded px-2 py-1 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                                    >
                                      <div
                                        class="flex h-5 w-5 items-center justify-center"
                                      ></div>
                                      <span>Button.js</span>
                                    </div>
                                  </li>
                                  <li>
                                    <div
                                      tabindex="0"
                                      class="flex cursor-pointer items-center space-x-1.5 rounded px-2 py-1 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                                    >
                                      <div
                                        class="flex h-5 w-5 items-center justify-center"
                                      ></div>
                                      <span>Treeview.js</span>
                                    </div>
                                  </li>
                                  <li>
                                    <div
                                      tabindex="0"
                                      class="flex cursor-pointer items-center space-x-1.5 rounded px-2 py-1 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                                    >
                                      <div
                                        class="flex h-5 w-5 items-center justify-center"
                                      ></div>
                                      <span>Menu.js</span>
                                    </div>
                                  </li>
                                  <li>
                                    <div
                                      tabindex="0"
                                      class="flex cursor-pointer items-center space-x-1.5 rounded px-2 py-1 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                                    >
                                      <div
                                        class="flex h-5 w-5 items-center justify-center"
                                      ></div>
                                      <span>Avatar.js</span>
                                    </div>
                                  </li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;ul class=&quot;space-y-1 font-inter font-medium&quot;&gt;&#13;&#10;    &lt;li x-data=&quot;{expanded:false}&quot;&gt;&#13;&#10;      &lt;div&#13;&#10;        tabindex=&quot;0&quot;&#13;&#10;        :class=&quot;expanded &amp;&amp; &apos;text-slate-800 dark:text-navy-100&apos;&quot;&#13;&#10;        class=&quot;flex cursor-pointer items-center space-x-1.5 rounded px-2 py-1 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;button&#13;&#10;          @click=&quot;expanded = !expanded&quot;&#13;&#10;          class=&quot;btn h-5 w-5 rounded-lg p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25&quot;&#13;&#10;        &gt;&#13;&#10;          &lt;svg&#13;&#10;            xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;            class=&quot;h-4.5 w-4.5 transition-transform&quot;&#13;&#10;            :class=&quot;expanded &amp;&amp; &apos;rotate-90&apos;&quot;&#13;&#10;            viewBox=&quot;0 0 20 20&quot;&#13;&#10;            fill=&quot;currentColor&quot;&#13;&#10;          &gt;&#13;&#10;            &lt;path&#13;&#10;              fill-rule=&quot;evenodd&quot;&#13;&#10;              d=&quot;M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z&quot;&#13;&#10;              clip-rule=&quot;evenodd&quot;&#13;&#10;            &gt;&lt;/path&gt;&#13;&#10;          &lt;/svg&gt;&#13;&#10;        &lt;/button&gt;&#13;&#10;        &lt;span&gt;Application&lt;/span&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;ul x-show=&quot;expanded&quot; x-collapse class=&quot;pl-4&quot;&gt;&#13;&#10;        &lt;li&gt;&#13;&#10;          &lt;div&#13;&#10;            tabindex=&quot;0&quot;&#13;&#10;            class=&quot;flex cursor-pointer items-center space-x-1.5 rounded px-2 py-1 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100&quot;&#13;&#10;          &gt;&#13;&#10;            &lt;div class=&quot;flex h-5 w-5 items-center justify-center&quot;&gt;&lt;/div&gt;&#13;&#10;            &lt;span&gt;Chrome&lt;/span&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/li&gt;&#13;&#10;        &lt;li&gt;&#13;&#10;          &lt;div&#13;&#10;            tabindex=&quot;0&quot;&#13;&#10;            class=&quot;flex cursor-pointer items-center space-x-1.5 rounded px-2 py-1 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100&quot;&#13;&#10;          &gt;&#13;&#10;            &lt;div class=&quot;flex h-5 w-5 items-center justify-center&quot;&gt;&lt;/div&gt;&#13;&#10;            &lt;span&gt;VS Code&lt;/span&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/li&gt;&#13;&#10;        &lt;li&gt;&#13;&#10;          &lt;div&#13;&#10;            tabindex=&quot;0&quot;&#13;&#10;            class=&quot;flex cursor-pointer items-center space-x-1.5 rounded px-2 py-1 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100&quot;&#13;&#10;          &gt;&#13;&#10;            &lt;div class=&quot;flex h-5 w-5 items-center justify-center&quot;&gt;&lt;/div&gt;&#13;&#10;            &lt;span&gt;Mail App&lt;/span&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/li&gt;&#13;&#10;        &lt;li&gt;&#13;&#10;          &lt;div&#13;&#10;            tabindex=&quot;0&quot;&#13;&#10;            class=&quot;flex cursor-pointer items-center space-x-1.5 rounded px-2 py-1 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100&quot;&#13;&#10;          &gt;&#13;&#10;            &lt;div class=&quot;flex h-5 w-5 items-center justify-center&quot;&gt;&lt;/div&gt;&#13;&#10;            &lt;span&gt;Firefox&lt;/span&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/li&gt;&#13;&#10;      &lt;/ul&gt;&#13;&#10;    &lt;/li&gt;&#13;&#10;    &lt;li x-data=&quot;{expanded:true}&quot;&gt;&#13;&#10;      &lt;div&#13;&#10;        tabindex=&quot;0&quot;&#13;&#10;        :class=&quot;expanded &amp;&amp; &apos;text-slate-800 dark:text-navy-100&apos;&quot;&#13;&#10;        class=&quot;flex cursor-pointer items-center space-x-1.5 rounded px-2 py-1 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;button&#13;&#10;          @click=&quot;expanded = !expanded&quot;&#13;&#10;          class=&quot;btn h-5 w-5 rounded-lg p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25&quot;&#13;&#10;        &gt;&#13;&#10;          &lt;svg&#13;&#10;            xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;            class=&quot;h-4.5 w-4.5 transition-transform&quot;&#13;&#10;            :class=&quot;expanded &amp;&amp; &apos;rotate-90&apos;&quot;&#13;&#10;            viewBox=&quot;0 0 20 20&quot;&#13;&#10;            fill=&quot;currentColor&quot;&#13;&#10;          &gt;&#13;&#10;            &lt;path&#13;&#10;              fill-rule=&quot;evenodd&quot;&#13;&#10;              d=&quot;M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z&quot;&#13;&#10;              clip-rule=&quot;evenodd&quot;&#13;&#10;            &gt;&lt;/path&gt;&#13;&#10;          &lt;/svg&gt;&#13;&#10;        &lt;/button&gt;&#13;&#10;        &lt;span&gt;Document&lt;/span&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;ul x-show=&quot;expanded&quot; x-collapse class=&quot;pl-4&quot;&gt;&#13;&#10;        &lt;li x-data=&quot;{expanded:true}&quot;&gt;&#13;&#10;          &lt;div&#13;&#10;            tabindex=&quot;0&quot;&#13;&#10;            :class=&quot;expanded &amp;&amp; &apos;text-slate-800 dark:text-navy-100&apos;&quot;&#13;&#10;            class=&quot;flex cursor-pointer items-center space-x-1.5 rounded px-2 py-1 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100&quot;&#13;&#10;          &gt;&#13;&#10;            &lt;button&#13;&#10;              @click=&quot;expanded = !expanded&quot;&#13;&#10;              class=&quot;btn h-5 w-5 rounded-lg p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25&quot;&#13;&#10;            &gt;&#13;&#10;              &lt;svg&#13;&#10;                xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;                class=&quot;h-4.5 w-4.5 transition-transform&quot;&#13;&#10;                :class=&quot;expanded &amp;&amp; &apos;rotate-90&apos;&quot;&#13;&#10;                viewBox=&quot;0 0 20 20&quot;&#13;&#10;                fill=&quot;currentColor&quot;&#13;&#10;              &gt;&#13;&#10;                &lt;path&#13;&#10;                  fill-rule=&quot;evenodd&quot;&#13;&#10;                  d=&quot;M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z&quot;&#13;&#10;                  clip-rule=&quot;evenodd&quot;&#13;&#10;                &gt;&lt;/path&gt;&#13;&#10;              &lt;/svg&gt;&#13;&#10;            &lt;/button&gt;&#13;&#10;            &lt;span&gt;React App&lt;/span&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;          &lt;ul x-show=&quot;expanded&quot; x-collapse class=&quot;pl-4&quot;&gt;&#13;&#10;            &lt;li x-data=&quot;{expanded:true}&quot;&gt;&#13;&#10;              &lt;div&#13;&#10;                tabindex=&quot;0&quot;&#13;&#10;                :class=&quot;expanded &amp;&amp; &apos;text-slate-800 dark:text-navy-100&apos;&quot;&#13;&#10;                class=&quot;flex cursor-pointer items-center space-x-1.5 rounded px-2 py-1 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100&quot;&#13;&#10;              &gt;&#13;&#10;                &lt;button&#13;&#10;                  @click=&quot;expanded = !expanded&quot;&#13;&#10;                  class=&quot;btn h-5 w-5 rounded-lg p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25&quot;&#13;&#10;                &gt;&#13;&#10;                  &lt;svg&#13;&#10;                    xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;                    class=&quot;h-4.5 w-4.5 transition-transform&quot;&#13;&#10;                    :class=&quot;expanded &amp;&amp; &apos;rotate-90&apos;&quot;&#13;&#10;                    viewBox=&quot;0 0 20 20&quot;&#13;&#10;                    fill=&quot;currentColor&quot;&#13;&#10;                  &gt;&#13;&#10;                    &lt;path&#13;&#10;                      fill-rule=&quot;evenodd&quot;&#13;&#10;                      d=&quot;M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z&quot;&#13;&#10;                      clip-rule=&quot;evenodd&quot;&#13;&#10;                    &gt;&lt;/path&gt;&#13;&#10;                  &lt;/svg&gt;&#13;&#10;                &lt;/button&gt;&#13;&#10;                &lt;span&gt;src&lt;/span&gt;&#13;&#10;              &lt;/div&gt;&#13;&#10;              &lt;ul x-show=&quot;expanded&quot; x-collapse class=&quot;pl-4&quot;&gt;&#13;&#10;                &lt;li x-data=&quot;{expanded:true}&quot;&gt;&#13;&#10;                  &lt;div&#13;&#10;                    tabindex=&quot;0&quot;&#13;&#10;                    :class=&quot;expanded &amp;&amp; &apos;text-slate-800 dark:text-navy-100&apos;&quot;&#13;&#10;                    class=&quot;flex cursor-pointer items-center space-x-1.5 rounded px-2 py-1 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100&quot;&#13;&#10;                  &gt;&#13;&#10;                    &lt;button&#13;&#10;                      @click=&quot;expanded = !expanded&quot;&#13;&#10;                      class=&quot;btn h-5 w-5 rounded-lg p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25&quot;&#13;&#10;                    &gt;&#13;&#10;                      &lt;svg&#13;&#10;                        xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;                        class=&quot;h-4.5 w-4.5 transition-transform&quot;&#13;&#10;                        :class=&quot;expanded &amp;&amp; &apos;rotate-90&apos;&quot;&#13;&#10;                        viewBox=&quot;0 0 20 20&quot;&#13;&#10;                        fill=&quot;currentColor&quot;&#13;&#10;                      &gt;&#13;&#10;                        &lt;path&#13;&#10;                          fill-rule=&quot;evenodd&quot;&#13;&#10;                          d=&quot;M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z&quot;&#13;&#10;                          clip-rule=&quot;evenodd&quot;&#13;&#10;                        &gt;&lt;/path&gt;&#13;&#10;                      &lt;/svg&gt;&#13;&#10;                    &lt;/button&gt;&#13;&#10;                    &lt;span&gt;Components&lt;/span&gt;&#13;&#10;                  &lt;/div&gt;&#13;&#10;                  &lt;ul x-show=&quot;expanded&quot; x-collapse class=&quot;pl-4&quot;&gt;&#13;&#10;                    &lt;li&gt;&#13;&#10;                      &lt;div&#13;&#10;                        tabindex=&quot;0&quot;&#13;&#10;                        class=&quot;flex cursor-pointer items-center space-x-1.5 rounded px-2 py-1 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100&quot;&#13;&#10;                      &gt;&#13;&#10;                        &lt;div&#13;&#10;                          class=&quot;flex h-5 w-5 items-center justify-center&quot;&#13;&#10;                        &gt;&lt;/div&gt;&#13;&#10;                        &lt;span&gt;Button.js&lt;/span&gt;&#13;&#10;                      &lt;/div&gt;&#13;&#10;                    &lt;/li&gt;&#13;&#10;                    &lt;li&gt;&#13;&#10;                      &lt;div&#13;&#10;                        tabindex=&quot;0&quot;&#13;&#10;                        class=&quot;flex cursor-pointer items-center space-x-1.5 rounded px-2 py-1 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100&quot;&#13;&#10;                      &gt;&#13;&#10;                        &lt;div&#13;&#10;                          class=&quot;flex h-5 w-5 items-center justify-center&quot;&#13;&#10;                        &gt;&lt;/div&gt;&#13;&#10;                        &lt;span&gt;Treeview.js&lt;/span&gt;&#13;&#10;                      &lt;/div&gt;&#13;&#10;                    &lt;/li&gt;&#13;&#10;                    &lt;li&gt;&#13;&#10;                      &lt;div&#13;&#10;                        tabindex=&quot;0&quot;&#13;&#10;                        class=&quot;flex cursor-pointer items-center space-x-1.5 rounded px-2 py-1 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100&quot;&#13;&#10;                      &gt;&#13;&#10;                        &lt;div&#13;&#10;                          class=&quot;flex h-5 w-5 items-center justify-center&quot;&#13;&#10;                        &gt;&lt;/div&gt;&#13;&#10;                        &lt;span&gt;Menu.js&lt;/span&gt;&#13;&#10;                      &lt;/div&gt;&#13;&#10;                    &lt;/li&gt;&#13;&#10;                    &lt;li&gt;&#13;&#10;                      &lt;div&#13;&#10;                        tabindex=&quot;0&quot;&#13;&#10;                        class=&quot;flex cursor-pointer items-center space-x-1.5 rounded px-2 py-1 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100&quot;&#13;&#10;                      &gt;&#13;&#10;                        &lt;div&#13;&#10;                          class=&quot;flex h-5 w-5 items-center justify-center&quot;&#13;&#10;                        &gt;&lt;/div&gt;&#13;&#10;                        &lt;span&gt;Avatar.js&lt;/span&gt;&#13;&#10;                      &lt;/div&gt;&#13;&#10;                    &lt;/li&gt;&#13;&#10;                  &lt;/ul&gt;&#13;&#10;                &lt;/li&gt;&#13;&#10;              &lt;/ul&gt;&#13;&#10;            &lt;/li&gt;&#13;&#10;          &lt;/ul&gt;&#13;&#10;        &lt;/li&gt;&#13;&#10;      &lt;/ul&gt;&#13;&#10;    &lt;/li&gt;&#13;&#10;  &lt;/ul&gt;</code>
              </pre>
            </div>
          </div>

          <!-- Advanced Treeview -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base"
              >
                Advanced Treeview
              </h2>
              <label class="inline-flex items-center space-x-2">
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
                A tree view component presents a hierarchical list. Check out
                code for detail of usage.
              </p>
              <div class="mt-5">
                <ul class="space-y-1 font-inter font-medium">
                  <li x-data="{expanded:false}">
                    <div
                      tabindex="0"
                      class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                    >
                      <button
                        @click="expanded = !expanded"
                        class="btn mr-1 h-5 w-5 rounded-lg p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="h-4.5 w-4.5 transition-transform"
                          :class="expanded && 'rotate-90'"
                          viewBox="0 0 20 20"
                          fill="currentColor"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"
                          />
                        </svg>
                      </button>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="mr-3 h-6 w-6 text-warning"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                      >
                        <path
                          d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                        />
                      </svg>
                      <span>Design</span>
                    </div>
                    <ul x-show="expanded" x-collapse class="pl-4">
                      <li>
                        <div
                          tabindex="0"
                          class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                        >
                          <div
                            class="mr-1 flex h-5 w-5 items-center justify-center"
                          ></div>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="mr-3 h-6 w-6 text-warning"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                          >
                            <path
                              d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                            />
                          </svg>
                          <span>Web Apps</span>
                        </div>
                      </li>
                      <li x-data="{expanded:false}">
                        <div
                          tabindex="0"
                          class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                        >
                          <button
                            @click="expanded = !expanded"
                            class="btn mr-1 h-5 w-5 rounded-lg p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              class="h-4.5 w-4.5 transition-transform"
                              :class="expanded && 'rotate-90'"
                              viewBox="0 0 20 20"
                              fill="currentColor"
                            >
                              <path
                                fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"
                              />
                            </svg>
                          </button>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="mr-3 h-6 w-6 text-warning"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                          >
                            <path
                              d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                            />
                          </svg>
                          <span>CRM Apps</span>
                        </div>
                        <ul x-show="expanded" x-collapse class="pl-4">
                          <li>
                            <div
                              tabindex="0"
                              class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                            >
                              <div
                                class="mr-1 flex h-5 w-5 items-center justify-center"
                              ></div>
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="mr-3 h-6 w-6 text-warning"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                              >
                                <path
                                  d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                />
                              </svg>
                              <span>LMS App</span>
                            </div>
                          </li>
                          <li>
                            <div
                              tabindex="0"
                              class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                            >
                              <div
                                class="mr-1 flex h-5 w-5 items-center justify-center"
                              ></div>
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="mr-3 h-6 w-6 text-warning"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                              >
                                <path
                                  d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                />
                              </svg>
                              <span>Ecommerce</span>
                            </div>
                          </li>
                          <li>
                            <div
                              tabindex="0"
                              class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                            >
                              <div
                                class="mr-1 flex h-5 w-5 items-center justify-center"
                              ></div>
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="mr-3 h-6 w-6 text-warning"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                              >
                                <path
                                  d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                />
                              </svg>
                              <span>Dashboard</span>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <div
                          tabindex="0"
                          class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                        >
                          <div
                            class="mr-1 flex h-5 w-5 items-center justify-center"
                          ></div>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="mr-3 h-6 w-6 text-warning"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                          >
                            <path
                              d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                            />
                          </svg>
                          <span>Desktop Apps</span>
                        </div>
                      </li>
                      <li>
                        <div
                          tabindex="0"
                          class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                        >
                          <div
                            class="mr-1 flex h-5 w-5 items-center justify-center"
                          ></div>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="mr-3 h-6 w-6 text-warning"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                          >
                            <path
                              d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                            />
                          </svg>
                          <span>Mobile Apps</span>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <div
                      tabindex="0"
                      class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                    >
                      <div
                        class="mr-1 flex h-5 w-5 items-center justify-center"
                      ></div>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="mr-3 h-6 w-6 text-warning"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                      >
                        <path
                          d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                        />
                      </svg>
                      <span>Backup Files</span>
                    </div>
                  </li>
                  <li x-data="{expanded:false}">
                    <div
                      tabindex="0"
                      class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                    >
                      <button
                        @click="expanded = !expanded"
                        class="btn mr-1 h-5 w-5 rounded-lg p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="h-4.5 w-4.5 transition-transform"
                          :class="expanded && 'rotate-90'"
                          viewBox="0 0 20 20"
                          fill="currentColor"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"
                          />
                        </svg>
                      </button>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="mr-3 h-6 w-6 text-warning"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                      >
                        <path
                          d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                        />
                      </svg>
                      <span>Documents</span>
                    </div>
                    <ul x-show="expanded" x-collapse class="pl-4">
                      <li>
                        <div
                          tabindex="0"
                          class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                        >
                          <div
                            class="mr-1 flex h-5 w-5 items-center justify-center"
                          ></div>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="mr-3 h-6 w-6 text-warning"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                          >
                            <path
                              d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                            />
                          </svg>
                          <span>Sheets</span>
                        </div>
                      </li>
                      <li>
                        <div
                          tabindex="0"
                          class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                        >
                          <div
                            class="mr-1 flex h-5 w-5 items-center justify-center"
                          ></div>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="mr-3 h-6 w-6 text-warning"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                          >
                            <path
                              d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                            />
                          </svg>
                          <span>Slides</span>
                        </div>
                      </li>
                      <li>
                        <div
                          tabindex="0"
                          class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                        >
                          <div
                            class="mr-1 flex h-5 w-5 items-center justify-center"
                          ></div>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="mr-3 h-6 w-6 text-warning"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                          >
                            <path
                              d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                            />
                          </svg>
                          <span>Words</span>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li x-data="{expanded:false}">
                    <div
                      tabindex="0"
                      class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                    >
                      <button
                        @click="expanded = !expanded"
                        class="btn mr-1 h-5 w-5 rounded-lg p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="h-4.5 w-4.5 transition-transform"
                          :class="expanded && 'rotate-90'"
                          viewBox="0 0 20 20"
                          fill="currentColor"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"
                          />
                        </svg>
                      </button>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="mr-3 h-6 w-6 text-warning"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                      >
                        <path
                          d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                        />
                      </svg>
                      <span>Application</span>
                    </div>
                    <ul x-show="expanded" x-collapse class="pl-4">
                      <li>
                        <div
                          tabindex="0"
                          class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                        >
                          <div
                            class="mr-1 flex h-5 w-5 items-center justify-center"
                          ></div>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="mr-3 h-6 w-6 text-warning"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                          >
                            <path
                              d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                            />
                          </svg>
                          <span>Web Apps</span>
                        </div>
                      </li>
                      <li x-data="{expanded:false}">
                        <div
                          tabindex="0"
                          class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                        >
                          <button
                            @click="expanded = !expanded"
                            class="btn mr-1 h-5 w-5 rounded-lg p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              class="h-4.5 w-4.5 transition-transform"
                              :class="expanded && 'rotate-90'"
                              viewBox="0 0 20 20"
                              fill="currentColor"
                            >
                              <path
                                fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"
                              />
                            </svg>
                          </button>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="mr-3 h-6 w-6 text-warning"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                          >
                            <path
                              d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                            />
                          </svg>
                          <span>CRM Apps</span>
                        </div>
                        <ul x-show="expanded" x-collapse class="pl-4">
                          <li>
                            <div
                              tabindex="0"
                              class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                            >
                              <div
                                class="mr-1 flex h-5 w-5 items-center justify-center"
                              ></div>
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="mr-3 h-6 w-6 text-warning"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                              >
                                <path
                                  d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                />
                              </svg>
                              <span>LMS App</span>
                            </div>
                          </li>
                          <li>
                            <div
                              tabindex="0"
                              class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                            >
                              <div
                                class="mr-1 flex h-5 w-5 items-center justify-center"
                              ></div>
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="mr-3 h-6 w-6 text-warning"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                              >
                                <path
                                  d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                />
                              </svg>
                              <span>Ecommerce</span>
                            </div>
                          </li>
                          <li>
                            <div
                              tabindex="0"
                              class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                            >
                              <div
                                class="mr-1 flex h-5 w-5 items-center justify-center"
                              ></div>
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="mr-3 h-6 w-6 text-warning"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                              >
                                <path
                                  d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                />
                              </svg>
                              <span>Dashboard</span>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <div
                          tabindex="0"
                          class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                        >
                          <div
                            class="mr-1 flex h-5 w-5 items-center justify-center"
                          ></div>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="mr-3 h-6 w-6 text-warning"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                          >
                            <path
                              d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                            />
                          </svg>
                          <span>Desktop Apps</span>
                        </div>
                      </li>
                      <li>
                        <div
                          tabindex="0"
                          class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                        >
                          <div
                            class="mr-1 flex h-5 w-5 items-center justify-center"
                          ></div>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="mr-3 h-6 w-6 text-warning"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                          >
                            <path
                              d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                            />
                          </svg>
                          <span>Mobile Apps</span>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <div
                      tabindex="0"
                      class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                    >
                      <div
                        class="mr-1 flex h-5 w-5 items-center justify-center"
                      ></div>

                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="mr-3 h-6 w-6 text-warning"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="1.5"
                          d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"
                        />
                      </svg>
                      <span>Archives</span>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;ul class=&quot;space-y-1 font-inter font-medium&quot;&gt;&#13;&#10;    &lt;li x-data=&quot;{expanded:false}&quot;&gt;&#13;&#10;      &lt;div&#13;&#10;        tabindex=&quot;0&quot;&#13;&#10;        class=&quot;flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;button&#13;&#10;          @click=&quot;expanded = !expanded&quot;&#13;&#10;          class=&quot;btn mr-1 h-5 w-5 rounded-lg p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25&quot;&#13;&#10;        &gt;&#13;&#10;          &lt;svg&#13;&#10;            xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;            class=&quot;h-4.5 w-4.5 transition-transform&quot;&#13;&#10;            :class=&quot;expanded &amp;&amp; &apos;rotate-90&apos;&quot;&#13;&#10;            viewBox=&quot;0 0 20 20&quot;&#13;&#10;            fill=&quot;currentColor&quot;&#13;&#10;          &gt;&#13;&#10;            &lt;path&#13;&#10;              fill-rule=&quot;evenodd&quot;&#13;&#10;              d=&quot;M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z&quot;&#13;&#10;              clip-rule=&quot;evenodd&quot;&#13;&#10;            &gt;&lt;/path&gt;&#13;&#10;          &lt;/svg&gt;&#13;&#10;        &lt;/button&gt;&#13;&#10;        &lt;svg&#13;&#10;          xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;          class=&quot;mr-3 h-6 w-6 text-warning&quot;&#13;&#10;          viewBox=&quot;0 0 20 20&quot;&#13;&#10;          fill=&quot;currentColor&quot;&#13;&#10;        &gt;&#13;&#10;          &lt;path&#13;&#10;            d=&quot;M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z&quot;&#13;&#10;          &gt;&lt;/path&gt;&#13;&#10;        &lt;/svg&gt;&#13;&#10;        &lt;span&gt;Design&lt;/span&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;ul x-show=&quot;expanded&quot; x-collapse class=&quot;pl-4&quot;&gt;&#13;&#10;        &lt;li&gt;&#13;&#10;          &lt;div&#13;&#10;            tabindex=&quot;0&quot;&#13;&#10;            class=&quot;flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100&quot;&#13;&#10;          &gt;&#13;&#10;            &lt;div class=&quot;mr-1 flex h-5 w-5 items-center justify-center&quot;&gt;&lt;/div&gt;&#13;&#10;            &lt;svg&#13;&#10;              xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;              class=&quot;mr-3 h-6 w-6 text-warning&quot;&#13;&#10;              viewBox=&quot;0 0 20 20&quot;&#13;&#10;              fill=&quot;currentColor&quot;&#13;&#10;            &gt;&#13;&#10;              &lt;path&#13;&#10;                d=&quot;M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z&quot;&#13;&#10;              &gt;&lt;/path&gt;&#13;&#10;            &lt;/svg&gt;&#13;&#10;            &lt;span&gt;Web Apps&lt;/span&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/li&gt;&#13;&#10;        &lt;li x-data=&quot;{expanded:false}&quot;&gt;&#13;&#10;          &lt;div&#13;&#10;            tabindex=&quot;0&quot;&#13;&#10;            class=&quot;flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100&quot;&#13;&#10;          &gt;&#13;&#10;            &lt;button&#13;&#10;              @click=&quot;expanded = !expanded&quot;&#13;&#10;              class=&quot;btn mr-1 h-5 w-5 rounded-lg p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25&quot;&#13;&#10;            &gt;&#13;&#10;              &lt;svg&#13;&#10;                xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;                class=&quot;h-4.5 w-4.5 transition-transform&quot;&#13;&#10;                :class=&quot;expanded &amp;&amp; &apos;rotate-90&apos;&quot;&#13;&#10;                viewBox=&quot;0 0 20 20&quot;&#13;&#10;                fill=&quot;currentColor&quot;&#13;&#10;              &gt;&#13;&#10;                &lt;path&#13;&#10;                  fill-rule=&quot;evenodd&quot;&#13;&#10;                  d=&quot;M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z&quot;&#13;&#10;                  clip-rule=&quot;evenodd&quot;&#13;&#10;                &gt;&lt;/path&gt;&#13;&#10;              &lt;/svg&gt;&#13;&#10;            &lt;/button&gt;&#13;&#10;            &lt;svg&#13;&#10;              xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;              class=&quot;mr-3 h-6 w-6 text-warning&quot;&#13;&#10;              viewBox=&quot;0 0 20 20&quot;&#13;&#10;              fill=&quot;currentColor&quot;&#13;&#10;            &gt;&#13;&#10;              &lt;path&#13;&#10;                d=&quot;M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z&quot;&#13;&#10;              &gt;&lt;/path&gt;&#13;&#10;            &lt;/svg&gt;&#13;&#10;            &lt;span&gt;CRM Apps&lt;/span&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;          &lt;ul x-show=&quot;expanded&quot; x-collapse class=&quot;pl-4&quot;&gt;&#13;&#10;            &lt;li&gt;&#13;&#10;              &lt;div&#13;&#10;                tabindex=&quot;0&quot;&#13;&#10;                class=&quot;flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100&quot;&#13;&#10;              &gt;&#13;&#10;                &lt;div&#13;&#10;                  class=&quot;mr-1 flex h-5 w-5 items-center justify-center&quot;&#13;&#10;                &gt;&lt;/div&gt;&#13;&#10;                &lt;svg&#13;&#10;                  xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;                  class=&quot;mr-3 h-6 w-6 text-warning&quot;&#13;&#10;                  viewBox=&quot;0 0 20 20&quot;&#13;&#10;                  fill=&quot;currentColor&quot;&#13;&#10;                &gt;&#13;&#10;                  &lt;path&#13;&#10;                    d=&quot;M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z&quot;&#13;&#10;                  &gt;&lt;/path&gt;&#13;&#10;                &lt;/svg&gt;&#13;&#10;                &lt;span&gt;LMS App&lt;/span&gt;&#13;&#10;              &lt;/div&gt;&#13;&#10;            &lt;/li&gt;&#13;&#10;            &lt;li&gt;&#13;&#10;              &lt;div&#13;&#10;                tabindex=&quot;0&quot;&#13;&#10;                class=&quot;flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100&quot;&#13;&#10;              &gt;&#13;&#10;                &lt;div&#13;&#10;                  class=&quot;mr-1 flex h-5 w-5 items-center justify-center&quot;&#13;&#10;                &gt;&lt;/div&gt;&#13;&#10;                &lt;svg&#13;&#10;                  xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;                  class=&quot;mr-3 h-6 w-6 text-warning&quot;&#13;&#10;                  viewBox=&quot;0 0 20 20&quot;&#13;&#10;                  fill=&quot;currentColor&quot;&#13;&#10;                &gt;&#13;&#10;                  &lt;path&#13;&#10;                    d=&quot;M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z&quot;&#13;&#10;                  &gt;&lt;/path&gt;&#13;&#10;                &lt;/svg&gt;&#13;&#10;                &lt;span&gt;Ecommerce&lt;/span&gt;&#13;&#10;              &lt;/div&gt;&#13;&#10;            &lt;/li&gt;&#13;&#10;            &lt;li&gt;&#13;&#10;              &lt;div&#13;&#10;                tabindex=&quot;0&quot;&#13;&#10;                class=&quot;flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100&quot;&#13;&#10;              &gt;&#13;&#10;                &lt;div&#13;&#10;                  class=&quot;mr-1 flex h-5 w-5 items-center justify-center&quot;&#13;&#10;                &gt;&lt;/div&gt;&#13;&#10;                &lt;svg&#13;&#10;                  xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;                  class=&quot;mr-3 h-6 w-6 text-warning&quot;&#13;&#10;                  viewBox=&quot;0 0 20 20&quot;&#13;&#10;                  fill=&quot;currentColor&quot;&#13;&#10;                &gt;&#13;&#10;                  &lt;path&#13;&#10;                    d=&quot;M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z&quot;&#13;&#10;                  &gt;&lt;/path&gt;&#13;&#10;                &lt;/svg&gt;&#13;&#10;                &lt;span&gt;Dashboard&lt;/span&gt;&#13;&#10;              &lt;/div&gt;&#13;&#10;            &lt;/li&gt;&#13;&#10;          &lt;/ul&gt;&#13;&#10;        &lt;/li&gt;&#13;&#10;        &lt;li&gt;&#13;&#10;          &lt;div&#13;&#10;            tabindex=&quot;0&quot;&#13;&#10;            class=&quot;flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100&quot;&#13;&#10;          &gt;&#13;&#10;            &lt;div class=&quot;mr-1 flex h-5 w-5 items-center justify-center&quot;&gt;&lt;/div&gt;&#13;&#10;            &lt;svg&#13;&#10;              xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;              class=&quot;mr-3 h-6 w-6 text-warning&quot;&#13;&#10;              viewBox=&quot;0 0 20 20&quot;&#13;&#10;              fill=&quot;currentColor&quot;&#13;&#10;            &gt;&#13;&#10;              &lt;path&#13;&#10;                d=&quot;M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z&quot;&#13;&#10;              &gt;&lt;/path&gt;&#13;&#10;            &lt;/svg&gt;&#13;&#10;            &lt;span&gt;Desktop Apps&lt;/span&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/li&gt;&#13;&#10;        &lt;li&gt;&#13;&#10;          &lt;div&#13;&#10;            tabindex=&quot;0&quot;&#13;&#10;            class=&quot;flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100&quot;&#13;&#10;          &gt;&#13;&#10;            &lt;div class=&quot;mr-1 flex h-5 w-5 items-center justify-center&quot;&gt;&lt;/div&gt;&#13;&#10;            &lt;svg&#13;&#10;              xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;              class=&quot;mr-3 h-6 w-6 text-warning&quot;&#13;&#10;              viewBox=&quot;0 0 20 20&quot;&#13;&#10;              fill=&quot;currentColor&quot;&#13;&#10;            &gt;&#13;&#10;              &lt;path&#13;&#10;                d=&quot;M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z&quot;&#13;&#10;              &gt;&lt;/path&gt;&#13;&#10;            &lt;/svg&gt;&#13;&#10;            &lt;span&gt;Mobile Apps&lt;/span&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/li&gt;&#13;&#10;      &lt;/ul&gt;&#13;&#10;    &lt;/li&gt;&#13;&#10;    &lt;li&gt;&#13;&#10;      &lt;div&#13;&#10;        tabindex=&quot;0&quot;&#13;&#10;        class=&quot;flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;div class=&quot;mr-1 flex h-5 w-5 items-center justify-center&quot;&gt;&lt;/div&gt;&#13;&#10;        &lt;svg&#13;&#10;          xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;          class=&quot;mr-3 h-6 w-6 text-warning&quot;&#13;&#10;          viewBox=&quot;0 0 20 20&quot;&#13;&#10;          fill=&quot;currentColor&quot;&#13;&#10;        &gt;&#13;&#10;          &lt;path&#13;&#10;            d=&quot;M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z&quot;&#13;&#10;          &gt;&lt;/path&gt;&#13;&#10;        &lt;/svg&gt;&#13;&#10;        &lt;span&gt;Backup Files&lt;/span&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/li&gt;&#13;&#10;    &lt;li x-data=&quot;{expanded:false}&quot;&gt;&#13;&#10;      &lt;div&#13;&#10;        tabindex=&quot;0&quot;&#13;&#10;        class=&quot;flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;button&#13;&#10;          @click=&quot;expanded = !expanded&quot;&#13;&#10;          class=&quot;btn mr-1 h-5 w-5 rounded-lg p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25&quot;&#13;&#10;        &gt;&#13;&#10;          &lt;svg&#13;&#10;            xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;            class=&quot;h-4.5 w-4.5 transition-transform&quot;&#13;&#10;            :class=&quot;expanded &amp;&amp; &apos;rotate-90&apos;&quot;&#13;&#10;            viewBox=&quot;0 0 20 20&quot;&#13;&#10;            fill=&quot;currentColor&quot;&#13;&#10;          &gt;&#13;&#10;            &lt;path&#13;&#10;              fill-rule=&quot;evenodd&quot;&#13;&#10;              d=&quot;M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z&quot;&#13;&#10;              clip-rule=&quot;evenodd&quot;&#13;&#10;            &gt;&lt;/path&gt;&#13;&#10;          &lt;/svg&gt;&#13;&#10;        &lt;/button&gt;&#13;&#10;        &lt;svg&#13;&#10;          xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;          class=&quot;mr-3 h-6 w-6 text-warning&quot;&#13;&#10;          viewBox=&quot;0 0 20 20&quot;&#13;&#10;          fill=&quot;currentColor&quot;&#13;&#10;        &gt;&#13;&#10;          &lt;path&#13;&#10;            d=&quot;M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z&quot;&#13;&#10;          &gt;&lt;/path&gt;&#13;&#10;        &lt;/svg&gt;&#13;&#10;        &lt;span&gt;Documents&lt;/span&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;ul x-show=&quot;expanded&quot; x-collapse class=&quot;pl-4&quot;&gt;&#13;&#10;        &lt;li&gt;&#13;&#10;          &lt;div&#13;&#10;            tabindex=&quot;0&quot;&#13;&#10;            class=&quot;flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100&quot;&#13;&#10;          &gt;&#13;&#10;            &lt;div class=&quot;mr-1 flex h-5 w-5 items-center justify-center&quot;&gt;&lt;/div&gt;&#13;&#10;            &lt;svg&#13;&#10;              xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;              class=&quot;mr-3 h-6 w-6 text-warning&quot;&#13;&#10;              viewBox=&quot;0 0 20 20&quot;&#13;&#10;              fill=&quot;currentColor&quot;&#13;&#10;            &gt;&#13;&#10;              &lt;path&#13;&#10;                d=&quot;M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z&quot;&#13;&#10;              &gt;&lt;/path&gt;&#13;&#10;            &lt;/svg&gt;&#13;&#10;            &lt;span&gt;Sheets&lt;/span&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/li&gt;&#13;&#10;        &lt;li&gt;&#13;&#10;          &lt;div&#13;&#10;            tabindex=&quot;0&quot;&#13;&#10;            class=&quot;flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100&quot;&#13;&#10;          &gt;&#13;&#10;            &lt;div class=&quot;mr-1 flex h-5 w-5 items-center justify-center&quot;&gt;&lt;/div&gt;&#13;&#10;            &lt;svg&#13;&#10;              xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;              class=&quot;mr-3 h-6 w-6 text-warning&quot;&#13;&#10;              viewBox=&quot;0 0 20 20&quot;&#13;&#10;              fill=&quot;currentColor&quot;&#13;&#10;            &gt;&#13;&#10;              &lt;path&#13;&#10;                d=&quot;M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z&quot;&#13;&#10;              &gt;&lt;/path&gt;&#13;&#10;            &lt;/svg&gt;&#13;&#10;            &lt;span&gt;Slides&lt;/span&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/li&gt;&#13;&#10;        &lt;li&gt;&#13;&#10;          &lt;div&#13;&#10;            tabindex=&quot;0&quot;&#13;&#10;            class=&quot;flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100&quot;&#13;&#10;          &gt;&#13;&#10;            &lt;div class=&quot;mr-1 flex h-5 w-5 items-center justify-center&quot;&gt;&lt;/div&gt;&#13;&#10;            &lt;svg&#13;&#10;              xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;              class=&quot;mr-3 h-6 w-6 text-warning&quot;&#13;&#10;              viewBox=&quot;0 0 20 20&quot;&#13;&#10;              fill=&quot;currentColor&quot;&#13;&#10;            &gt;&#13;&#10;              &lt;path&#13;&#10;                d=&quot;M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z&quot;&#13;&#10;              &gt;&lt;/path&gt;&#13;&#10;            &lt;/svg&gt;&#13;&#10;            &lt;span&gt;Words&lt;/span&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/li&gt;&#13;&#10;      &lt;/ul&gt;&#13;&#10;    &lt;/li&gt;&#13;&#10;    &lt;li x-data=&quot;{expanded:false}&quot;&gt;&#13;&#10;      &lt;div&#13;&#10;        tabindex=&quot;0&quot;&#13;&#10;        class=&quot;flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;button&#13;&#10;          @click=&quot;expanded = !expanded&quot;&#13;&#10;          class=&quot;btn mr-1 h-5 w-5 rounded-lg p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25&quot;&#13;&#10;        &gt;&#13;&#10;          &lt;svg&#13;&#10;            xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;            class=&quot;h-4.5 w-4.5 transition-transform&quot;&#13;&#10;            :class=&quot;expanded &amp;&amp; &apos;rotate-90&apos;&quot;&#13;&#10;            viewBox=&quot;0 0 20 20&quot;&#13;&#10;            fill=&quot;currentColor&quot;&#13;&#10;          &gt;&#13;&#10;            &lt;path&#13;&#10;              fill-rule=&quot;evenodd&quot;&#13;&#10;              d=&quot;M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z&quot;&#13;&#10;              clip-rule=&quot;evenodd&quot;&#13;&#10;            &gt;&lt;/path&gt;&#13;&#10;          &lt;/svg&gt;&#13;&#10;        &lt;/button&gt;&#13;&#10;        &lt;svg&#13;&#10;          xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;          class=&quot;mr-3 h-6 w-6 text-warning&quot;&#13;&#10;          viewBox=&quot;0 0 20 20&quot;&#13;&#10;          fill=&quot;currentColor&quot;&#13;&#10;        &gt;&#13;&#10;          &lt;path&#13;&#10;            d=&quot;M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z&quot;&#13;&#10;          &gt;&lt;/path&gt;&#13;&#10;        &lt;/svg&gt;&#13;&#10;        &lt;span&gt;Application&lt;/span&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;ul x-show=&quot;expanded&quot; x-collapse class=&quot;pl-4&quot;&gt;&#13;&#10;        &lt;li&gt;&#13;&#10;          &lt;div&#13;&#10;            tabindex=&quot;0&quot;&#13;&#10;            class=&quot;flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100&quot;&#13;&#10;          &gt;&#13;&#10;            &lt;div class=&quot;mr-1 flex h-5 w-5 items-center justify-center&quot;&gt;&lt;/div&gt;&#13;&#10;            &lt;svg&#13;&#10;              xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;              class=&quot;mr-3 h-6 w-6 text-warning&quot;&#13;&#10;              viewBox=&quot;0 0 20 20&quot;&#13;&#10;              fill=&quot;currentColor&quot;&#13;&#10;            &gt;&#13;&#10;              &lt;path&#13;&#10;                d=&quot;M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z&quot;&#13;&#10;              &gt;&lt;/path&gt;&#13;&#10;            &lt;/svg&gt;&#13;&#10;            &lt;span&gt;Web Apps&lt;/span&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/li&gt;&#13;&#10;        &lt;li x-data=&quot;{expanded:false}&quot;&gt;&#13;&#10;          &lt;div&#13;&#10;            tabindex=&quot;0&quot;&#13;&#10;            class=&quot;flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100&quot;&#13;&#10;          &gt;&#13;&#10;            &lt;button&#13;&#10;              @click=&quot;expanded = !expanded&quot;&#13;&#10;              class=&quot;btn mr-1 h-5 w-5 rounded-lg p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25&quot;&#13;&#10;            &gt;&#13;&#10;              &lt;svg&#13;&#10;                xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;                class=&quot;h-4.5 w-4.5 transition-transform&quot;&#13;&#10;                :class=&quot;expanded &amp;&amp; &apos;rotate-90&apos;&quot;&#13;&#10;                viewBox=&quot;0 0 20 20&quot;&#13;&#10;                fill=&quot;currentColor&quot;&#13;&#10;              &gt;&#13;&#10;                &lt;path&#13;&#10;                  fill-rule=&quot;evenodd&quot;&#13;&#10;                  d=&quot;M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z&quot;&#13;&#10;                  clip-rule=&quot;evenodd&quot;&#13;&#10;                &gt;&lt;/path&gt;&#13;&#10;              &lt;/svg&gt;&#13;&#10;            &lt;/button&gt;&#13;&#10;            &lt;svg&#13;&#10;              xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;              class=&quot;mr-3 h-6 w-6 text-warning&quot;&#13;&#10;              viewBox=&quot;0 0 20 20&quot;&#13;&#10;              fill=&quot;currentColor&quot;&#13;&#10;            &gt;&#13;&#10;              &lt;path&#13;&#10;                d=&quot;M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z&quot;&#13;&#10;              &gt;&lt;/path&gt;&#13;&#10;            &lt;/svg&gt;&#13;&#10;            &lt;span&gt;CRM Apps&lt;/span&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;          &lt;ul x-show=&quot;expanded&quot; x-collapse class=&quot;pl-4&quot;&gt;&#13;&#10;            &lt;li&gt;&#13;&#10;              &lt;div&#13;&#10;                tabindex=&quot;0&quot;&#13;&#10;                class=&quot;flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100&quot;&#13;&#10;              &gt;&#13;&#10;                &lt;div&#13;&#10;                  class=&quot;mr-1 flex h-5 w-5 items-center justify-center&quot;&#13;&#10;                &gt;&lt;/div&gt;&#13;&#10;                &lt;svg&#13;&#10;                  xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;                  class=&quot;mr-3 h-6 w-6 text-warning&quot;&#13;&#10;                  viewBox=&quot;0 0 20 20&quot;&#13;&#10;                  fill=&quot;currentColor&quot;&#13;&#10;                &gt;&#13;&#10;                  &lt;path&#13;&#10;                    d=&quot;M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z&quot;&#13;&#10;                  &gt;&lt;/path&gt;&#13;&#10;                &lt;/svg&gt;&#13;&#10;                &lt;span&gt;LMS App&lt;/span&gt;&#13;&#10;              &lt;/div&gt;&#13;&#10;            &lt;/li&gt;&#13;&#10;            &lt;li&gt;&#13;&#10;              &lt;div&#13;&#10;                tabindex=&quot;0&quot;&#13;&#10;                class=&quot;flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100&quot;&#13;&#10;              &gt;&#13;&#10;                &lt;div&#13;&#10;                  class=&quot;mr-1 flex h-5 w-5 items-center justify-center&quot;&#13;&#10;                &gt;&lt;/div&gt;&#13;&#10;                &lt;svg&#13;&#10;                  xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;                  class=&quot;mr-3 h-6 w-6 text-warning&quot;&#13;&#10;                  viewBox=&quot;0 0 20 20&quot;&#13;&#10;                  fill=&quot;currentColor&quot;&#13;&#10;                &gt;&#13;&#10;                  &lt;path&#13;&#10;                    d=&quot;M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z&quot;&#13;&#10;                  &gt;&lt;/path&gt;&#13;&#10;                &lt;/svg&gt;&#13;&#10;                &lt;span&gt;Ecommerce&lt;/span&gt;&#13;&#10;              &lt;/div&gt;&#13;&#10;            &lt;/li&gt;&#13;&#10;            &lt;li&gt;&#13;&#10;              &lt;div&#13;&#10;                tabindex=&quot;0&quot;&#13;&#10;                class=&quot;flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100&quot;&#13;&#10;              &gt;&#13;&#10;                &lt;div&#13;&#10;                  class=&quot;mr-1 flex h-5 w-5 items-center justify-center&quot;&#13;&#10;                &gt;&lt;/div&gt;&#13;&#10;                &lt;svg&#13;&#10;                  xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;                  class=&quot;mr-3 h-6 w-6 text-warning&quot;&#13;&#10;                  viewBox=&quot;0 0 20 20&quot;&#13;&#10;                  fill=&quot;currentColor&quot;&#13;&#10;                &gt;&#13;&#10;                  &lt;path&#13;&#10;                    d=&quot;M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z&quot;&#13;&#10;                  &gt;&lt;/path&gt;&#13;&#10;                &lt;/svg&gt;&#13;&#10;                &lt;span&gt;Dashboard&lt;/span&gt;&#13;&#10;              &lt;/div&gt;&#13;&#10;            &lt;/li&gt;&#13;&#10;          &lt;/ul&gt;&#13;&#10;        &lt;/li&gt;&#13;&#10;        &lt;li&gt;&#13;&#10;          &lt;div&#13;&#10;            tabindex=&quot;0&quot;&#13;&#10;            class=&quot;flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100&quot;&#13;&#10;          &gt;&#13;&#10;            &lt;div class=&quot;mr-1 flex h-5 w-5 items-center justify-center&quot;&gt;&lt;/div&gt;&#13;&#10;            &lt;svg&#13;&#10;              xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;              class=&quot;mr-3 h-6 w-6 text-warning&quot;&#13;&#10;              viewBox=&quot;0 0 20 20&quot;&#13;&#10;              fill=&quot;currentColor&quot;&#13;&#10;            &gt;&#13;&#10;              &lt;path&#13;&#10;                d=&quot;M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z&quot;&#13;&#10;              &gt;&lt;/path&gt;&#13;&#10;            &lt;/svg&gt;&#13;&#10;            &lt;span&gt;Desktop Apps&lt;/span&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/li&gt;&#13;&#10;        &lt;li&gt;&#13;&#10;          &lt;div&#13;&#10;            tabindex=&quot;0&quot;&#13;&#10;            class=&quot;flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100&quot;&#13;&#10;          &gt;&#13;&#10;            &lt;div class=&quot;mr-1 flex h-5 w-5 items-center justify-center&quot;&gt;&lt;/div&gt;&#13;&#10;            &lt;svg&#13;&#10;              xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;              class=&quot;mr-3 h-6 w-6 text-warning&quot;&#13;&#10;              viewBox=&quot;0 0 20 20&quot;&#13;&#10;              fill=&quot;currentColor&quot;&#13;&#10;            &gt;&#13;&#10;              &lt;path&#13;&#10;                d=&quot;M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z&quot;&#13;&#10;              &gt;&lt;/path&gt;&#13;&#10;            &lt;/svg&gt;&#13;&#10;            &lt;span&gt;Mobile Apps&lt;/span&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/li&gt;&#13;&#10;      &lt;/ul&gt;&#13;&#10;    &lt;/li&gt;&#13;&#10;    &lt;li&gt;&#13;&#10;      &lt;div&#13;&#10;        tabindex=&quot;0&quot;&#13;&#10;        class=&quot;flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;div class=&quot;mr-1 flex h-5 w-5 items-center justify-center&quot;&gt;&lt;/div&gt;&#13;&#10;&#13;&#10;        &lt;svg&#13;&#10;          xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;          class=&quot;mr-3 h-6 w-6 text-warning&quot;&#13;&#10;          fill=&quot;none&quot;&#13;&#10;          viewBox=&quot;0 0 24 24&quot;&#13;&#10;          stroke=&quot;currentColor&quot;&#13;&#10;        &gt;&#13;&#10;          &lt;path&#13;&#10;            stroke-linecap=&quot;round&quot;&#13;&#10;            stroke-linejoin=&quot;round&quot;&#13;&#10;            stroke-width=&quot;1.5&quot;&#13;&#10;            d=&quot;M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z&quot;&#13;&#10;          &gt;&lt;/path&gt;&#13;&#10;        &lt;/svg&gt;&#13;&#10;        &lt;span&gt;Archives&lt;/span&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/li&gt;&#13;&#10;  &lt;/ul&gt;</code>
              </pre>
            </div>
          </div>
        </div>
      </main>
</x-app-layout>

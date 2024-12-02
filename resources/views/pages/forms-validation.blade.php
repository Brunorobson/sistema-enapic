<x-app-layout title="Form Validation" is-sidebar-open="true" is-header-blur="true">
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
          <h2
            class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl"
          >
            Input Validation
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
            <li>Input Validation</li>
          </ul>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
          <!-- Input Validation -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base"
              >
                Input Validation
              </h2>
              <label class="flex items-center space-x-2">
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
                Before submitting data to the server, it is important to ensure
                all required form controls are filled out, in the correct
                format. This is called client-side form validation. The
                <code class="inline-code">Iodine</code>
                library is used for this purpose. See more on
                <a
                  class="font-normal text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                  href="https://github.com/mattkingshott/iodine"
                  >Github</a
                >
                and to the code example below.
              </p>
              <div
                x-data="pages.formValidation.initFormValidationExample"
                class="mt-5 grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:gap-6"
              >
                <div>
                  <label class="block">
                    <span>Required value</span>
                    <input
                      x-effect="username.errorMessage = getErrorMessage(username.value, username.validate)"
                      class="form-input mt-1.5 w-full rounded-lg border bg-transparent px-3 py-2 placeholder:text-slate-400/70"
                      placeholder="Username"
                      type="text"
                      :class="{
                        'border-slate-300 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent':!username.blurred,
                        'border-error': (username.blurred && username.errorMessage),
                        'border-success': (username.blurred && !username.errorMessage)
                      }"
                      x-model="username.value"
                      @blur="username.blurred = true"
                    />
                  </label>
                  <span
                    class="text-tiny+ text-error"
                    x-show="username.blurred && username.errorMessage"
                    x-text="username.errorMessage"
                  ></span>
                </div>

                <div>
                  <label class="block">
                    <span>Email Value </span>
                    <input
                      x-effect="email.errorMessage = getErrorMessage(email.value, email.validate)"
                      class="form-input mt-1.5 w-full rounded-lg border bg-transparent px-3 py-2 placeholder:text-slate-400/70"
                      placeholder="Email"
                      type="text"
                      :class="{
                        'border-slate-300 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent': !email.blurred,
                        'border-error': (email.blurred && email.errorMessage),
                        'border-success': (email.blurred && !email.errorMessage)
                      }"
                      x-model="email.value"
                      @blur="email.blurred = true"
                    />
                  </label>
                  <span
                    class="text-tiny+ text-error"
                    x-show="email.blurred && email.errorMessage"
                    x-text="email.errorMessage"
                  ></span>
                </div>

                <div>
                  <label class="block">
                    <span>Min/Max </span>
                    <input
                      x-effect="minmax.errorMessage = getErrorMessage(minmax.value, minmax.validate)"
                      class="form-input mt-1.5 w-full rounded-lg border bg-transparent px-3 py-2 placeholder:text-slate-400/70"
                      placeholder="Number between 5 - 15"
                      type="text"
                      :class="{
                        'border-slate-300 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent': !minmax.blurred,
                        'border-error': (minmax.blurred && minmax.errorMessage),
                        'border-success': (minmax.blurred && !minmax.errorMessage)
                      }"
                      x-model="minmax.value"
                      @blur="minmax.blurred = true"
                    />
                  </label>
                  <span
                    class="text-tiny+ text-error"
                    x-show="minmax.blurred && minmax.errorMessage"
                    x-text="minmax.errorMessage"
                  ></span>
                </div>

                <div>
                  <label class="block">
                    <span>Min/Max Length</span>
                    <input
                      x-effect="minmaxLength.errorMessage = getErrorMessage(minmaxLength.value, minmaxLength.validate)"
                      class="form-input mt-1.5 w-full rounded-lg border bg-transparent px-3 py-2 placeholder:text-slate-400/70"
                      placeholder="String length between 5 to 15"
                      type="text"
                      :class="{
                        'border-slate-300 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent': !minmaxLength.blurred,
                        'border-error': (minmaxLength.blurred && minmaxLength.errorMessage),
                        'border-success': (minmaxLength.blurred && !minmaxLength.errorMessage)
                      }"
                      x-model="minmaxLength.value"
                      @blur="minmaxLength.blurred = true"
                    />
                  </label>
                  <span
                    class="text-tiny+ text-error"
                    x-show="minmaxLength.blurred && minmaxLength.errorMessage"
                    x-text="minmaxLength.errorMessage"
                  ></span>
                </div>

                <div>
                  <label class="block">
                    <span>URL Address</span>
                    <input
                      x-effect="url.errorMessage = getErrorMessage(url.value, url.validate)"
                      class="form-input mt-1.5 w-full rounded-lg border bg-transparent px-3 py-2 placeholder:text-slate-400/70"
                      placeholder="Only URL"
                      type="text"
                      :class="{
                        'border-slate-300 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent': !url.blurred,
                        'border-error': (url.blurred && url.errorMessage),
                        'border-success': (url.blurred && !url.errorMessage)
                      }"
                      x-model="url.value"
                      @blur="url.blurred = true"
                    />
                  </label>
                  <span
                    class="text-tiny+ text-error"
                    x-show="url.blurred && url.errorMessage"
                    x-text="url.errorMessage"
                  ></span>
                </div>

                <div>
                  <label class="block">
                    <span>Instagram Username</span>
                    <input
                      x-effect="instagramUsername.errorMessage = getErrorMessage(instagramUsername.value, instagramUsername.validate)"
                      class="form-input mt-1.5 w-full rounded-lg border bg-transparent px-3 py-2 placeholder:text-slate-400/70"
                      placeholder="Instagram Username"
                      type="text"
                      :class="{
                        'border-slate-300 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent': !instagramUsername.blurred,
                        'border-error': (instagramUsername.blurred && instagramUsername.errorMessage),
                        'border-success': (instagramUsername.blurred && !instagramUsername.errorMessage)
                      }"
                      x-model="instagramUsername.value"
                      @blur="instagramUsername.blurred = true"
                    />
                  </label>
                  <span
                    class="text-tiny+ text-error"
                    x-show="instagramUsername.blurred && instagramUsername.errorMessage"
                    x-text="instagramUsername.errorMessage"
                  ></span>
                </div>

                <div>
                  <label class="block">
                    <span>Start With A</span>
                    <input
                      x-effect="startWith.errorMessage = getErrorMessage(startWith.value, startWith.validate)"
                      class="form-input mt-1.5 w-full rounded-lg border bg-transparent px-3 py-2 placeholder:text-slate-400/70"
                      placeholder="Start With A"
                      type="text"
                      :class="{
                        'border-slate-300 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent': !startWith.blurred,
                        'border-error': (startWith.blurred && startWith.errorMessage),
                        'border-success': (startWith.blurred && !startWith.errorMessage)
                      }"
                      x-model="startWith.value"
                      @blur="startWith.blurred = true"
                    />
                  </label>
                  <span
                    class="text-tiny+ text-error"
                    x-show="startWith.blurred && startWith.errorMessage"
                    x-text="startWith.errorMessage"
                  ></span>
                </div>

                <div>
                  <label class="block">
                    <span>End With Z</span>
                    <input
                      x-effect="endWith.errorMessage = getErrorMessage(endWith.value, endWith.validate)"
                      class="form-input mt-1.5 w-full rounded-lg border bg-transparent px-3 py-2 placeholder:text-slate-400/70"
                      placeholder="Start With A"
                      type="text"
                      :class="{
                        'border-slate-300 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent': !endWith.blurred,
                        'border-error': (endWith.blurred && endWith.errorMessage),
                        'border-success': (endWith.blurred && !endWith.errorMessage)
                      }"
                      x-model="endWith.value"
                      @blur="endWith.blurred = true"
                    />
                  </label>
                  <span
                    class="text-tiny+ text-error"
                    x-show="endWith.blurred && endWith.errorMessage"
                    x-text="endWith.errorMessage"
                  ></span>
                </div>
              </div>
            </div>
            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;div&gt;&#13;&#10;    &lt;label class=&quot;block&quot;&gt;&#13;&#10;      &lt;span&gt;Required value&lt;/span&gt;&#13;&#10;      &lt;input&#13;&#10;        x-effect=&quot;username.errorMessage = getErrorMessage(username.value, username.validate)&quot;&#13;&#10;        class=&quot;form-input mt-1.5 w-full rounded-lg border bg-transparent px-3 py-2 placeholder:text-slate-400/70&quot;&#13;&#10;        placeholder=&quot;Username&quot;&#13;&#10;        type=&quot;text&quot;&#13;&#10;        :class=&quot;{&#13;&#10;              &apos;border-slate-300 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent&apos;:!username.blurred,&#13;&#10;              &apos;border-error&apos;: (username.blurred &amp;&amp; username.errorMessage),&#13;&#10;              &apos;border-success&apos;: (username.blurred &amp;&amp; !username.errorMessage)&#13;&#10;            }&quot;&#13;&#10;        x-model=&quot;username.value&quot;&#13;&#10;        @blur=&quot;username.blurred = true&quot;&#13;&#10;      /&gt;&#13;&#10;    &lt;/label&gt;&#13;&#10;    &lt;span&#13;&#10;      class=&quot;text-tiny+ text-error&quot;&#13;&#10;      x-show=&quot;username.blurred &amp;&amp; username.errorMessage&quot;&#13;&#10;      x-text=&quot;username.errorMessage&quot;&#13;&#10;    &gt;&lt;/span&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div&gt;&#13;&#10;    &lt;label class=&quot;block&quot;&gt;&#13;&#10;      &lt;span&gt;Email Value &lt;/span&gt;&#13;&#10;      &lt;input&#13;&#10;        x-effect=&quot;email.errorMessage = getErrorMessage(email.value, email.validate)&quot;&#13;&#10;        class=&quot;form-input mt-1.5 w-full rounded-lg border bg-transparent px-3 py-2 placeholder:text-slate-400/70&quot;&#13;&#10;        placeholder=&quot;Email&quot;&#13;&#10;        type=&quot;text&quot;&#13;&#10;        :class=&quot;{&#13;&#10;              &apos;border-slate-300 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent&apos;: !email.blurred,&#13;&#10;              &apos;border-error&apos;: (email.blurred &amp;&amp; email.errorMessage),&#13;&#10;              &apos;border-success&apos;: (email.blurred &amp;&amp; !email.errorMessage)&#13;&#10;            }&quot;&#13;&#10;        x-model=&quot;email.value&quot;&#13;&#10;        @blur=&quot;email.blurred = true&quot;&#13;&#10;      /&gt;&#13;&#10;    &lt;/label&gt;&#13;&#10;    &lt;span&#13;&#10;      class=&quot;text-tiny+ text-error&quot;&#13;&#10;      x-show=&quot;email.blurred &amp;&amp; email.errorMessage&quot;&#13;&#10;      x-text=&quot;email.errorMessage&quot;&#13;&#10;    &gt;&lt;/span&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div&gt;&#13;&#10;    &lt;label class=&quot;block&quot;&gt;&#13;&#10;      &lt;span&gt;Min/Max &lt;/span&gt;&#13;&#10;      &lt;input&#13;&#10;        x-effect=&quot;minmax.errorMessage = getErrorMessage(minmax.value, minmax.validate)&quot;&#13;&#10;        class=&quot;form-input mt-1.5 w-full rounded-lg border bg-transparent px-3 py-2 placeholder:text-slate-400/70&quot;&#13;&#10;        placeholder=&quot;Number between 5 - 15&quot;&#13;&#10;        type=&quot;text&quot;&#13;&#10;        :class=&quot;{&#13;&#10;              &apos;border-slate-300 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent&apos;: !minmax.blurred,&#13;&#10;              &apos;border-error&apos;: (minmax.blurred &amp;&amp; minmax.errorMessage),&#13;&#10;              &apos;border-success&apos;: (minmax.blurred &amp;&amp; !minmax.errorMessage)&#13;&#10;            }&quot;&#13;&#10;        x-model=&quot;minmax.value&quot;&#13;&#10;        @blur=&quot;minmax.blurred = true&quot;&#13;&#10;      /&gt;&#13;&#10;    &lt;/label&gt;&#13;&#10;    &lt;span&#13;&#10;      class=&quot;text-tiny+ text-error&quot;&#13;&#10;      x-show=&quot;minmax.blurred &amp;&amp; minmax.errorMessage&quot;&#13;&#10;      x-text=&quot;minmax.errorMessage&quot;&#13;&#10;    &gt;&lt;/span&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div&gt;&#13;&#10;    &lt;label class=&quot;block&quot;&gt;&#13;&#10;      &lt;span&gt;Min/Max Length&lt;/span&gt;&#13;&#10;      &lt;input&#13;&#10;        x-effect=&quot;minmaxLength.errorMessage = getErrorMessage(minmaxLength.value, minmaxLength.validate)&quot;&#13;&#10;        class=&quot;form-input mt-1.5 w-full rounded-lg border bg-transparent px-3 py-2 placeholder:text-slate-400/70&quot;&#13;&#10;        placeholder=&quot;String length between 5 to 15&quot;&#13;&#10;        type=&quot;text&quot;&#13;&#10;        :class=&quot;{&#13;&#10;              &apos;border-slate-300 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent&apos;: !minmaxLength.blurred,&#13;&#10;              &apos;border-error&apos;: (minmaxLength.blurred &amp;&amp; minmaxLength.errorMessage),&#13;&#10;              &apos;border-success&apos;: (minmaxLength.blurred &amp;&amp; !minmaxLength.errorMessage)&#13;&#10;            }&quot;&#13;&#10;        x-model=&quot;minmaxLength.value&quot;&#13;&#10;        @blur=&quot;minmaxLength.blurred = true&quot;&#13;&#10;      /&gt;&#13;&#10;    &lt;/label&gt;&#13;&#10;    &lt;span&#13;&#10;      class=&quot;text-tiny+ text-error&quot;&#13;&#10;      x-show=&quot;minmaxLength.blurred &amp;&amp; minmaxLength.errorMessage&quot;&#13;&#10;      x-text=&quot;minmaxLength.errorMessage&quot;&#13;&#10;    &gt;&lt;/span&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div&gt;&#13;&#10;    &lt;label class=&quot;block&quot;&gt;&#13;&#10;      &lt;span&gt;URL Address&lt;/span&gt;&#13;&#10;      &lt;input&#13;&#10;        x-effect=&quot;url.errorMessage = getErrorMessage(url.value, url.validate)&quot;&#13;&#10;        class=&quot;form-input mt-1.5 w-full rounded-lg border bg-transparent px-3 py-2 placeholder:text-slate-400/70&quot;&#13;&#10;        placeholder=&quot;Only URL&quot;&#13;&#10;        type=&quot;text&quot;&#13;&#10;        :class=&quot;{&#13;&#10;              &apos;border-slate-300 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent&apos;: !url.blurred,&#13;&#10;              &apos;border-error&apos;: (url.blurred &amp;&amp; url.errorMessage),&#13;&#10;              &apos;border-success&apos;: (url.blurred &amp;&amp; !url.errorMessage)&#13;&#10;            }&quot;&#13;&#10;        x-model=&quot;url.value&quot;&#13;&#10;        @blur=&quot;url.blurred = true&quot;&#13;&#10;      /&gt;&#13;&#10;    &lt;/label&gt;&#13;&#10;    &lt;span&#13;&#10;      class=&quot;text-tiny+ text-error&quot;&#13;&#10;      x-show=&quot;url.blurred &amp;&amp; url.errorMessage&quot;&#13;&#10;      x-text=&quot;url.errorMessage&quot;&#13;&#10;    &gt;&lt;/span&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div&gt;&#13;&#10;    &lt;label class=&quot;block&quot;&gt;&#13;&#10;      &lt;span&gt;Instagram Username&lt;/span&gt;&#13;&#10;      &lt;input&#13;&#10;        x-effect=&quot;instagramUsername.errorMessage = getErrorMessage(instagramUsername.value, instagramUsername.validate)&quot;&#13;&#10;        class=&quot;form-input mt-1.5 w-full rounded-lg border bg-transparent px-3 py-2 placeholder:text-slate-400/70&quot;&#13;&#10;        placeholder=&quot;Instagram Username&quot;&#13;&#10;        type=&quot;text&quot;&#13;&#10;        :class=&quot;{&#13;&#10;              &apos;border-slate-300 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent&apos;: !instagramUsername.blurred,&#13;&#10;              &apos;border-error&apos;: (instagramUsername.blurred &amp;&amp; instagramUsername.errorMessage),&#13;&#10;              &apos;border-success&apos;: (instagramUsername.blurred &amp;&amp; !instagramUsername.errorMessage)&#13;&#10;            }&quot;&#13;&#10;        x-model=&quot;instagramUsername.value&quot;&#13;&#10;        @blur=&quot;instagramUsername.blurred = true&quot;&#13;&#10;      /&gt;&#13;&#10;    &lt;/label&gt;&#13;&#10;    &lt;span&#13;&#10;      class=&quot;text-tiny+ text-error&quot;&#13;&#10;      x-show=&quot;instagramUsername.blurred &amp;&amp; instagramUsername.errorMessage&quot;&#13;&#10;      x-text=&quot;instagramUsername.errorMessage&quot;&#13;&#10;    &gt;&lt;/span&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div&gt;&#13;&#10;    &lt;label class=&quot;block&quot;&gt;&#13;&#10;      &lt;span&gt;Start With A&lt;/span&gt;&#13;&#10;      &lt;input&#13;&#10;        x-effect=&quot;startWith.errorMessage = getErrorMessage(startWith.value, startWith.validate)&quot;&#13;&#10;        class=&quot;form-input mt-1.5 w-full rounded-lg border bg-transparent px-3 py-2 placeholder:text-slate-400/70&quot;&#13;&#10;        placeholder=&quot;Start With A&quot;&#13;&#10;        type=&quot;text&quot;&#13;&#10;        :class=&quot;{&#13;&#10;              &apos;border-slate-300 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent&apos;: !startWith.blurred,&#13;&#10;              &apos;border-error&apos;: (startWith.blurred &amp;&amp; startWith.errorMessage),&#13;&#10;              &apos;border-success&apos;: (startWith.blurred &amp;&amp; !startWith.errorMessage)&#13;&#10;            }&quot;&#13;&#10;        x-model=&quot;startWith.value&quot;&#13;&#10;        @blur=&quot;startWith.blurred = true&quot;&#13;&#10;      /&gt;&#13;&#10;    &lt;/label&gt;&#13;&#10;    &lt;span&#13;&#10;      class=&quot;text-tiny+ text-error&quot;&#13;&#10;      x-show=&quot;startWith.blurred &amp;&amp; startWith.errorMessage&quot;&#13;&#10;      x-text=&quot;startWith.errorMessage&quot;&#13;&#10;    &gt;&lt;/span&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div&gt;&#13;&#10;    &lt;label class=&quot;block&quot;&gt;&#13;&#10;      &lt;span&gt;End With Z&lt;/span&gt;&#13;&#10;      &lt;input&#13;&#10;        x-effect=&quot;endWith.errorMessage = getErrorMessage(endWith.value, endWith.validate)&quot;&#13;&#10;        class=&quot;form-input mt-1.5 w-full rounded-lg border bg-transparent px-3 py-2 placeholder:text-slate-400/70&quot;&#13;&#10;        placeholder=&quot;Start With A&quot;&#13;&#10;        type=&quot;text&quot;&#13;&#10;        :class=&quot;{&#13;&#10;              &apos;border-slate-300 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent&apos;: !endWith.blurred,&#13;&#10;              &apos;border-error&apos;: (endWith.blurred &amp;&amp; endWith.errorMessage),&#13;&#10;              &apos;border-success&apos;: (endWith.blurred &amp;&amp; !endWith.errorMessage)&#13;&#10;            }&quot;&#13;&#10;        x-model=&quot;endWith.value&quot;&#13;&#10;        @blur=&quot;endWith.blurred = true&quot;&#13;&#10;      /&gt;&#13;&#10;    &lt;/label&gt;&#13;&#10;    &lt;span&#13;&#10;      class=&quot;text-tiny+ text-error&quot;&#13;&#10;      x-show=&quot;endWith.blurred &amp;&amp; endWith.errorMessage&quot;&#13;&#10;      x-text=&quot;endWith.errorMessage&quot;&#13;&#10;    &gt;&lt;/span&gt;&#13;&#10;  &lt;/div&gt;</code>
              </pre>
            </div>
          </div>
        </div>
      </main>
</x-app-layout>

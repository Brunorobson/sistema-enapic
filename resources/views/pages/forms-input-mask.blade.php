<x-app-layout title="Input Mask" is-sidebar-open="true" is-header-blur="true">
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
          <h2
            class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl"
          >
            Input Mask
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
            <li>Input Mask</li>
          </ul>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
          <!-- Input Mask -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base"
              >
                Input Mask
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
                An input mask is a string of characters that indicates the
                format of valid input values. The
                <code class="inline-code">Cleave.js</code> library is used for
                this purpose. See more on
                <a
                  class="font-normal text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                  href="https://github.com/nosir/cleave.js"
                  >Github</a
                >
                and to the code example below.
              </p>
              <div class="mt-5">
                <span>With Prefix:</span>
                <label>
                  <input
                    x-input-mask="{
                        prefix: 'Prefix',
                        delimiter: '-',
                        blocks: [6, 4, 4, 7],
                    }"
                    class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Username"
                    type="text"
                  />
                </label>
              </div>
            </div>
            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;label&gt;&#13;&#10;    &lt;input&#13;&#10;      x-input-mask=&quot;{&#13;&#10;              prefix: &apos;Prefix&apos;,&#13;&#10;              delimiter: &apos;-&apos;,&#13;&#10;              blocks: [6, 4, 4, 7],&#13;&#10;          }&quot;&#13;&#10;      class=&quot;form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent&quot;&#13;&#10;      placeholder=&quot;Username&quot;&#13;&#10;      type=&quot;text&quot;&#13;&#10;    /&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;</code>
              </pre>
            </div>
          </div>

          <!-- Delimiters Formatting-->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base"
              >
                Delimiters Formatting
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
                An input mask is a string of characters that indicates the
                format of valid input values. The
                <code class="inline-code">Cleave.js</code> library is used for
                this purpose. See more on
                <a
                  class="font-normal text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                  href="https://github.com/nosir/cleave.js"
                  >Github</a
                >
                and to the code example below.
              </p>
              <div class="mt-5">
                <span>With Delimiters Formatting:</span>
                <label>
                  <input
                    x-input-mask="{
                        delimiters: ['.', '_', '-'],
                        blocks: [3, 2, 3, 3],
                        uppercase: true
                    }"
                    class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="xxx.xx_xxx-xxx"
                    type="text"
                  />
                </label>
              </div>
            </div>
            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;label&gt;&#13;&#10;    &lt;input&#13;&#10;      x-input-mask=&quot;{&#13;&#10;              delimiters: [&apos;.&apos;, &apos;_&apos;, &apos;-&apos;],&#13;&#10;              blocks: [3, 2, 3, 3],&#13;&#10;              uppercase: true&#13;&#10;          }&quot;&#13;&#10;      class=&quot;form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent&quot;&#13;&#10;      placeholder=&quot;xxx.xx_xxx-xxx&quot;&#13;&#10;      type=&quot;text&quot;&#13;&#10;    /&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;</code>
              </pre>
            </div>
          </div>

          <!-- Credit Card Formatting-->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base"
              >
                Credit Card
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
                An input mask is a string of characters that indicates the
                format of valid input values. The
                <code class="inline-code">Cleave.js</code> library is used for
                this purpose. See more on
                <a
                  class="font-normal text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                  href="https://github.com/nosir/cleave.js"
                  >Github</a
                >
                and to the code example below.
              </p>
              <div class="mt-5">
                <span>Enter Credit Card:</span>
                <label>
                  <input
                    x-input-mask="{
                        creditCard: true
                    }"
                    class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="xxxx xxxx xxxx xxxx"
                    type="text"
                  />
                </label>
              </div>
            </div>
            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;label&gt;&#13;&#10;    &lt;input&#13;&#10;      x-input-mask=&quot;{&#13;&#10;              creditCard: true&#13;&#10;          }&quot;&#13;&#10;      class=&quot;form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent&quot;&#13;&#10;      placeholder=&quot;xxxx xxxx xxxx xxxx&quot;&#13;&#10;      type=&quot;text&quot;&#13;&#10;    /&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;</code>
              </pre>
            </div>
          </div>

          <!-- DateTime Formatting -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base"
              >
                DateTime Formatting
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
                An input mask is a string of characters that indicates the
                format of valid input values. The
                <code class="inline-code">Cleave.js</code> library is used for
                this purpose. See more on
                <a
                  class="font-normal text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                  href="https://github.com/nosir/cleave.js"
                  >Github</a
                >
                and to the code example below.
              </p>
              <div class="mt-5 space-y-4">
                <div>
                  <span>Date:</span>
                  <label>
                    <input
                      x-input-mask="{
                        date: true,
                        delimiter: '-',
                        datePattern: ['m', 'd','Y']
                    }"
                      class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                      placeholder="Enter Date"
                      type="text"
                    />
                  </label>
                </div>
                <div>
                  <span>Time:</span>
                  <label>
                    <input
                      x-input-mask="{
                        time: true,
                        timePattern: ['h', 'm', 's']
                    }"
                      class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                      placeholder="Enter Time"
                      type="text"
                    />
                  </label>
                </div>
              </div>
            </div>
            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;div&gt;&#13;&#10;    &lt;span&gt;Date:&lt;/span&gt;&#13;&#10;    &lt;label&gt;&#13;&#10;      &lt;input&#13;&#10;        x-input-mask=&quot;{&#13;&#10;            date: true,&#13;&#10;            delimiter: &apos;-&apos;,&#13;&#10;            datePattern: [&apos;m&apos;, &apos;d&apos;,&apos;Y&apos;]&#13;&#10;          }&quot;&#13;&#10;        class=&quot;form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent&quot;&#13;&#10;        placeholder=&quot;Enter Date&quot;&#13;&#10;        type=&quot;text&quot;&#13;&#10;      /&gt;&#13;&#10;    &lt;/label&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;  &lt;div&gt;&#13;&#10;    &lt;span&gt;Time:&lt;/span&gt;&#13;&#10;    &lt;label&gt;&#13;&#10;      &lt;input&#13;&#10;        x-input-mask=&quot;{&#13;&#10;            time: true,&#13;&#10;            timePattern: [&apos;h&apos;, &apos;m&apos;, &apos;s&apos;]&#13;&#10;          }&quot;&#13;&#10;        class=&quot;form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent&quot;&#13;&#10;        placeholder=&quot;Enter Time&quot;&#13;&#10;        type=&quot;text&quot;&#13;&#10;      /&gt;&#13;&#10;    &lt;/label&gt;&#13;&#10;  &lt;/div&gt;</code>
              </pre>
            </div>
          </div>

          <!-- Phone Formatting-->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base"
              >
                Phone Formatting
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
                An input mask is a string of characters that indicates the
                format of valid input values. The
                <code class="inline-code">Cleave.js</code> library is used for
                this purpose. See more on
                <a
                  class="font-normal text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                  href="https://github.com/nosir/cleave.js"
                  >Github</a
                >
                and to the code example below.
              </p>
              <div class="mt-5">
                <span>Phone Number:</span>
                <label class="mt-1.5 flex -space-x-px">
                  <span
                    class="flex shrink-0 items-center justify-center rounded-l-lg border border-slate-300 px-3.5 font-inter dark:border-navy-450"
                  >
                    <span >US (+1)</span>
                </span>
                  <input
                    x-input-mask="{
                        numericOnly:true,
                        blocks: [3, 2, 2, 2],
                    }"
                    class="form-input w-full rounded-r-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Enter Phone"
                    type="text"
                  />
                </label>
              </div>
            </div>
            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &#60;div&#62;&#13;&#10;    &#60;span&#62;Phone Number:&#60;/span&#62;&#13;&#10;    &#60;label class=&#34;mt-1.5 flex -space-x-px&#34;&#62;&#13;&#10;      &#60;span&#13;&#10;        class=&#34;flex shrink-0 items-center justify-center rounded-l-lg border border-slate-300 px-3.5 font-inter dark:border-navy-450&#34;&#13;&#10;      &#62;&#13;&#10;        &#60;span class=&#34;-mt-1&#34;&#62;US (+1)&#60;/span&#62;&#13;&#10;      &#60;/span&#62;&#13;&#10;      &#60;input&#13;&#10;        x-input-mask=&#34;{&#13;&#10;            numericOnly:true,&#13;&#10;            blocks: [3, 2, 2, 2],&#13;&#10;        }&#34;&#13;&#10;        class=&#34;form-input w-full rounded-r-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent&#34;&#13;&#10;        placeholder=&#34;Enter Phone&#34;&#13;&#10;        type=&#34;text&#34;&#13;&#10;      /&#62;&#13;&#10;    &#60;/label&#62;&#13;&#10;  &#60;/div&#62;&#13;&#10;
                </code>
              </pre>
            </div>
          </div>

          <!-- Numeral Formatting -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base"
              >
                Numeral Formatting
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
                An input mask is a string of characters that indicates the
                format of valid input values. The
                <code class="inline-code">Cleave.js</code> library is used for
                this purpose. See more on
                <a
                  class="font-normal text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                  href="https://github.com/nosir/cleave.js"
                  >Github</a
                >
                and to the code example below.
              </p>
              <div
                x-data="{
                    config:{
                        numeral: true,
                        numeralThousandsGroupStyle: 'thousand'
                    }
                }"
                class="mt-5"
              >
                <div class="flex -space-x-px">
                  <select
                    class="form-select rounded-l-full border border-slate-300 bg-white px-3 py-2 pr-9 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent"
                    x-model="config.numeralThousandsGroupStyle"
                  >
                    <option value="thousand">Thousands</option>
                    <option value="lakh">Indian lakh</option>
                    <option value="wan">Chinese wan</option>
                  </select>

                  <input
                    x-input-mask="config"
                    class="form-input w-full rounded-r-full border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Enter Phone"
                    type="text"
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
  &lt;div&#13;&#10;    x-data=&quot;{&#13;&#10;        config:{&#13;&#10;            numeral: true,&#13;&#10;            numeralThousandsGroupStyle: &apos;thousand&apos;&#13;&#10;        }&#13;&#10;    }&quot;&#13;&#10;  &gt;&#13;&#10;    &lt;label class=&quot;flex -space-x-px&quot;&gt;&#13;&#10;      &lt;select&#13;&#10;        class=&quot;form-select rounded-l-full border border-slate-300 bg-white px-3 py-2 pr-9 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent&quot;&#13;&#10;        x-model=&quot;config.numeralThousandsGroupStyle&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;option value=&quot;thousand&quot;&gt;Thousands&lt;/option&gt;&#13;&#10;        &lt;option value=&quot;lakh&quot;&gt;Indian lakh&lt;/option&gt;&#13;&#10;        &lt;option value=&quot;wan&quot;&gt;Chinese wan&lt;/option&gt;&#13;&#10;      &lt;/select&gt;&#13;&#10;&#13;&#10;      &lt;input&#13;&#10;        x-input-mask=&quot;config&quot;&#13;&#10;        class=&quot;form-input w-full rounded-r-full border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent&quot;&#13;&#10;        placeholder=&quot;Enter Phone&quot;&#13;&#10;        type=&quot;text&quot;&#13;&#10;      /&gt;&#13;&#10;    &lt;/label&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;
                </code>
              </pre>
            </div>
          </div>
        </div>
      </main>
</x-app-layout>

<x-app-layout title="Form Text Editor" is-sidebar-open="true" is-header-blur="true">
    <!-- Main Content Wrapper -->
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
            <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
                Rich Text Editor
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
                <li>Rich Text Editor</li>
            </ul>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
            <!-- Text Editor -->
            <div class="card px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Text Editor
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
                        The textarea provides a native and essential solution to almost
                        any web application. But at some point you may need to add
                        formatting to text input.
                        <a href="https://github.com/quilljs/quill/"
                            class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">Quill</a>
                        is a free, open source WYSIWYG editor built for the modern web.
                    </p>
                    <div class="mt-5">
                        <div class="w-full">
                            <div class="h-48" x-init="$el._x_quill = new Quill($el, {
                                modules: {
                                    toolbar: [
                                        ['bold', 'italic', 'underline', 'strike'], // toggled buttons
                                        ['blockquote', 'code-block'],
                                        [{ header: 1 }, { header: 2 }], // custom button values
                                        [{ list: 'ordered' }, { list: 'bullet' }],
                                        [{ script: 'sub' }, { script: 'super' }], // superscript/subscript
                                        [{ indent: '-1' }, { indent: '+1' }], // outdent/indent
                                        [{ direction: 'rtl' }], // text direction
                                        [{ size: ['small', false, 'large', 'huge'] }], // custom dropdown
                                        [{ header: [1, 2, 3, 4, 5, 6, false] }],
                                        [{ color: [] }, { background: [] }], // dropdown with defaults from theme
                                        [{ font: [] }],
                                        [{ align: [] }],
                                        ['clean'], // remove formatting button
                                    ],
                                },
                                placeholder: 'Enter your content...',
                                theme: 'snow',
                            })"></div>
                        </div>
                    </div>
                </div>
                <div class="code-wrapper hidden pt-4">
                    <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
            <code class="language-html" x-ignore>
&lt;div&#13;&#10;    class=&quot;h-48&quot;&#13;&#10;    x-init=&quot;$el._x_quill = new Quill($el,{&#13;&#10;    modules : {&#13;&#10;      toolbar: [&#13;&#10;        [&apos;bold&apos;, &apos;italic&apos;, &apos;underline&apos;, &apos;strike&apos;], // toggled buttons&#13;&#10;        [&apos;blockquote&apos;, &apos;code-block&apos;],&#13;&#10;        [{ header: 1 }, { header: 2 }], // custom button values&#13;&#10;        [{ list: &apos;ordered&apos; }, { list: &apos;bullet&apos; }],&#13;&#10;        [{ script: &apos;sub&apos; }, { script: &apos;super&apos; }], // superscript/subscript&#13;&#10;        [{ indent: &apos;-1&apos; }, { indent: &apos;+1&apos; }], // outdent/indent&#13;&#10;        [{ direction: &apos;rtl&apos; }], // text direction&#13;&#10;        [{ size: [&apos;small&apos;, false, &apos;large&apos;, &apos;huge&apos;] }], // custom dropdown&#13;&#10;        [{ header: [1, 2, 3, 4, 5, 6, false] }],&#13;&#10;        [{ color: [] }, { background: [] }], // dropdown with defaults from theme&#13;&#10;        [{ font: [] }],&#13;&#10;        [{ align: [] }],&#13;&#10;        [&apos;clean&apos;], // remove formatting button&#13;&#10;      ],&#13;&#10;    },&#13;&#10;    placeholder: &apos;Enter your content...&apos;,&#13;&#10;    theme: &apos;snow&apos;,&#13;&#10;  })&quot;&#13;&#10;  &gt;&lt;/div&gt;&#13;&#10;                </code>
          </pre>
                </div>
            </div>

            <!-- Minimal -->
            <div class="card px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Minimal
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
                        The textarea provides a native and essential solution to almost
                        any web application. But at some point you may need to add
                        formatting to text input.
                        <a href="https://github.com/quilljs/quill/"
                            class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">Quill</a>
                        is a free, open source WYSIWYG editor built for the modern web.
                    </p>
                    <div class="mt-5 w-full">

                        <div class="h-48" x-init="$el._x_quill = new Quill($el, {
                            modules: {
                                toolbar: [
                                    ['bold', 'italic', 'underline'],
                                    [
                                        { list: 'ordered' },
                                        { list: 'bullet' },
                                        { header: 1 },
                                        { background: [] },
                                    ],
                                ],
                            },
                            placeholder: 'Enter your content...',
                            theme: 'snow',
                        })"></div>

                    </div>
                </div>
                <div class="code-wrapper hidden pt-4">
                    <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
            <code class="language-html" x-ignore>
&lt;div&#13;&#10;    class=&quot;h-48&quot;&#13;&#10;    x-init=&quot;$el._x_quill = new Quill($el,{&#13;&#10;      modules : {&#13;&#10;        toolbar: [&#13;&#10;          [&apos;bold&apos;, &apos;italic&apos;, &apos;underline&apos;],&#13;&#10;          [&#13;&#10;            { list: &apos;ordered&apos; },&#13;&#10;            { list: &apos;bullet&apos; },&#13;&#10;            { header: 1 },&#13;&#10;            { background: [] },&#13;&#10;          ],&#13;&#10;        ],&#13;&#10;      },&#13;&#10;      placeholder: &apos;Enter your content...&apos;,&#13;&#10;      theme: &apos;snow&apos;,&#13;&#10;    })&quot;&#13;&#10;  &gt;&lt;/div&gt;&#13;&#10;                </code>
          </pre>
                </div>
            </div>

            <!-- Filled Header -->
            <div class="card px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Filled Header
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
                        The textarea provides a native and essential solution to almost
                        any web application. But at some point you may need to add
                        formatting to text input.
                        <a href="https://github.com/quilljs/quill/"
                            class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">Quill</a>
                        is a free, open source WYSIWYG editor built for the modern web.
                    </p>
                    <div class="mt-5">
                        <div class="ql-header-filled w-full">
                            <div class="h-48" x-init="$el._x_quill = new Quill($el, {
                                modules: {
                                    toolbar: [
                                        ['bold', 'italic', 'underline', 'strike'], // toggled buttons
                                        ['blockquote', 'code-block'],
                                        [{ header: 1 }, { header: 2 }], // custom button values
                                        [{ list: 'ordered' }, { list: 'bullet' }],
                                        [{ script: 'sub' }, { script: 'super' }], // superscript/subscript
                                        [{ indent: '-1' }, { indent: '+1' }], // outdent/indent
                                        [{ direction: 'rtl' }], // text direction
                                        [{ size: ['small', false, 'large', 'huge'] }], // custom dropdown
                                        [{ header: [1, 2, 3, 4, 5, 6, false] }],
                                        [{ color: [] }, { background: [] }], // dropdown with defaults from theme
                                        [{ font: [] }],
                                        [{ align: [] }],
                                        ['clean'], // remove formatting button
                                    ],
                                },
                                placeholder: 'Enter your content...',
                                theme: 'snow',
                            })"></div>
                        </div>
                    </div>
                </div>
                <div class="code-wrapper hidden pt-4">
                    <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
            <code class="language-html" x-ignore>
&lt;div class=&quot;ql-header-filled w-full&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;h-48&quot;&#13;&#10;      x-init=&quot;$el._x_quill = new Quill($el,{&#13;&#10;            modules : {&#13;&#10;              toolbar: [&#13;&#10;                [&apos;bold&apos;, &apos;italic&apos;, &apos;underline&apos;, &apos;strike&apos;], // toggled buttons&#13;&#10;                [&apos;blockquote&apos;, &apos;code-block&apos;],&#13;&#10;                [{ header: 1 }, { header: 2 }], // custom button values&#13;&#10;                [{ list: &apos;ordered&apos; }, { list: &apos;bullet&apos; }],&#13;&#10;                [{ script: &apos;sub&apos; }, { script: &apos;super&apos; }], // superscript/subscript&#13;&#10;                [{ indent: &apos;-1&apos; }, { indent: &apos;+1&apos; }], // outdent/indent&#13;&#10;                [{ direction: &apos;rtl&apos; }], // text direction&#13;&#10;                [{ size: [&apos;small&apos;, false, &apos;large&apos;, &apos;huge&apos;] }], // custom dropdown&#13;&#10;                [{ header: [1, 2, 3, 4, 5, 6, false] }],&#13;&#10;                [{ color: [] }, { background: [] }], // dropdown with defaults from theme&#13;&#10;                [{ font: [] }],&#13;&#10;                [{ align: [] }],&#13;&#10;                [&apos;clean&apos;], // remove formatting button&#13;&#10;              ],&#13;&#10;            },&#13;&#10;            placeholder: &apos;Enter your content...&apos;,&#13;&#10;            theme: &apos;snow&apos;,&#13;&#10;          })&quot;&#13;&#10;    &gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;                </code>
          </pre>
                </div>
            </div>

            <!-- Customizing -->
            <div class="card px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Customizing
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
                        The textarea provides a native and essential solution to almost
                        any web application. But at some point you may need to add
                        formatting to text input.
                        <a href="https://github.com/quilljs/quill/"
                            class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">Quill</a>
                        is a free, open source WYSIWYG editor built for the modern web.
                    </p>
                    <div class="mt-5">
                        <div class="ql-header-filled w-full">
                            <div class="h-48" x-init="$el._x_quill = new Quill($el, {
                                modules: {
                                    toolbar: [
                                        ['bold', 'italic', 'underline', 'strike'],
                                        ['blockquote', 'code-block'],
                                        [{ header: [1, 2, 3, 4, 5, 6, false] }],
                                        [{ color: [] }, { background: [] }],
                                        ['clean'],
                                    ]
                                },
                                placeholder: 'Enter your content...',
                                theme: 'snow',
                            })"></div>
                        </div>
                    </div>
                </div>
                <div class="code-wrapper hidden pt-4">
                    <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
            <code class="language-html" x-ignore>
&lt;div class=&quot;ql-header-filled w-full&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;h-48&quot;&#13;&#10;      x-init=&quot;$el._x_quill = new Quill($el,{&#13;&#10;          modules:{&#13;&#10;              toolbar: [&#13;&#10;                  [&apos;bold&apos;, &apos;italic&apos;, &apos;underline&apos;, &apos;strike&apos;],&#13;&#10;                  [&apos;blockquote&apos;, &apos;code-block&apos;],&#13;&#10;                  [{ header: [1, 2, 3, 4, 5, 6, false] }],&#13;&#10;                  [{ color: [] }, { background: [] }],&#13;&#10;                  [&apos;clean&apos;],&#13;&#10;              ]&#13;&#10;          },&#13;&#10;          placeholder: &apos;Enter your content...&apos;,&#13;&#10;          theme: &apos;snow&apos;,&#13;&#10;      })&quot;&#13;&#10;    &gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;</code>
          </pre>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>

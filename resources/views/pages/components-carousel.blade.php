<x-app-layout title="Swiper Component" is-sidebar-open="true" is-header-blur="true">
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
            <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
                Swiper
            </h2>
            <div class="hidden h-full py-1 sm:flex">
                <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
            </div>
            <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
                <li class="flex items-center space-x-2">
                    <a class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                        href="#">
                        Components
                    </a>
                    <svg x-ignore xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </li>
                <li>Swiper</li>
            </ul>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:gap-6">
            <div class="space-y-4 sm:space-y-5 lg:space-y-6">
                <!-- Default Carousel -->
                <div class="card px-4 pb-4 sm:px-5">
                    <div class="my-3 flex h-8 items-center justify-between">
                        <h2
                            class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                            Default Carousel
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
                            <a href="https://github.com/nolimits4web/swiper"
                                class="font-normal text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">Swiper</a>
                            is the free and most modern mobile touch slider with hardware
                            accelerated transitions and amazing native behavior. Check out
                            code for detail of usage.
                        </p>
                        <div class="mt-5">
                            <div x-init="$nextTick(() => $el._x_swiper = new Swiper($el, { navigation: { prevEl: '.swiper-button-prev', nextEl: '.swiper-button-next' } }))" class="swiper rounded-lg">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover" src="{{ asset('images/800x600.png') }}"
                                            alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover object-top"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover object-center"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover object-center"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                    <div class="code-wrapper hidden pt-4">
                        <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
              <code class="language-html" x-ignore>  
&lt;div&#13;&#10;    x-init=&quot;$nextTick(()=&gt;$el._x_swiper = new Swiper($el,{navigation: {prevEl: &apos;.swiper-button-prev&apos;,nextEl: &apos;.swiper-button-next&apos;}}))&quot;&#13;&#10;    class=&quot;swiper rounded-lg&quot;&#13;&#10;  &gt;&#13;&#10;    &lt;div class=&quot;swiper-wrapper&quot;&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full object-cover&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full object-cover object-top&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full object-cover object-center&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full object-cover object-center&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div class=&quot;swiper-button-next&quot;&gt;&lt;/div&gt;&#13;&#10;    &lt;div class=&quot;swiper-button-prev&quot;&gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;
              </code>
            </pre>
                    </div>
                </div>

                <!-- Lazy Loading Images -->
                <div class="card px-4 pb-4 sm:px-5">
                    <div class="my-3 flex h-8 items-center justify-between">
                        <h2
                            class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                            Lazy Loading Images
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
                            <a href="https://github.com/nolimits4web/swiper"
                                class="font-normal text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">Swiper</a>
                            is the free and most modern mobile touch slider with hardware
                            accelerated transitions and amazing native behavior. Check out
                            code for detail of usage.
                        </p>
                        <div class="mt-5">
                            <div x-init="$nextTick(() => $el._x_swiper = new Swiper($el, { navigation: { prevEl: '.swiper-button-prev', nextEl: '.swiper-button-next' }, pagination: { el: '.swiper-pagination', type: 'progressbar' }, lazy: true, }))" class="swiper rounded-lg">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide h-full">
                                        <img class="h-full w-full object-cover" src="{{ asset('images/800x600.png') }}"
                                            loading="lazy" alt="image" />
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                    <div class="swiper-slide h-full">
                                        <img class="h-full w-full object-cover" src="{{ asset('images/800x600.png') }}"
                                            alt="image" loading="lazy" />
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                    <div class="swiper-slide h-full">
                                        <img class="h-full w-full object-cover" src="{{ asset('images/800x600.png') }}"
                                            alt="image" loading="lazy" />
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                    <div class="swiper-slide h-full">
                                        <img class="h-full w-full object-cover" src="{{ asset('images/800x600.png') }}"
                                            alt="image" loading="lazy" />
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                    <div class="code-wrapper hidden pt-4">
                        <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
              <code class="language-html" x-ignore>  
&lt;div&#13;&#10;    x-init=&quot;$nextTick(()=&gt;$el._x_swiper = new Swiper($el,{ navigation: {prevEl: &apos;.swiper-button-prev&apos;, nextEl: &apos;.swiper-button-next&apos;}, pagination: { el: &apos;.swiper-pagination&apos;,type: &apos;progressbar&apos;},lazy: true,}))&quot;&#13;&#10;    class=&quot;swiper rounded-lg&quot;&#13;&#10;  &gt;&#13;&#10;    &lt;div class=&quot;swiper-wrapper&quot;&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide h-full&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;swiper-lazy h-full w-full object-cover&quot;&#13;&#10;          data-src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;        &lt;div class=&quot;swiper-lazy-preloader&quot;&gt;&lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide h-full&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;swiper-lazy h-full w-full object-cover&quot;&#13;&#10;          data-src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;        &lt;div class=&quot;swiper-lazy-preloader&quot;&gt;&lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide h-full&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;swiper-lazy h-full w-full object-cover&quot;&#13;&#10;          data-src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;        &lt;div class=&quot;swiper-lazy-preloader&quot;&gt;&lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide h-full&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;swiper-lazy h-full w-full object-cover&quot;&#13;&#10;          data-src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;        &lt;div class=&quot;swiper-lazy-preloader&quot;&gt;&lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div class=&quot;swiper-pagination&quot;&gt;&lt;/div&gt;&#13;&#10;    &lt;div class=&quot;swiper-button-next&quot;&gt;&lt;/div&gt;&#13;&#10;    &lt;div class=&quot;swiper-button-prev&quot;&gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;                  </code>
            </pre>
                    </div>
                </div>

                <!-- Space Between -->
                <div class="card px-4 pb-4 sm:px-5">
                    <div class="my-3 flex h-8 items-center justify-between">
                        <h2
                            class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                            Space Between
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
                            <a href="https://github.com/nolimits4web/swiper"
                                class="font-normal text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">Swiper</a>
                            is the free and most modern mobile touch slider with hardware
                            accelerated transitions and amazing native behavior. Check out
                            code for detail of usage.
                        </p>
                        <div class="mt-5">
                            <div x-init="$nextTick(() => $el._x_swiper = new Swiper($el, { slidesPerView: 'auto', spaceBetween: 30, pagination: { el: '.swiper-pagination', clickable: true, } }))" class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide !w-10/12">
                                        <img class="h-full w-full rounded-lg object-cover"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide !w-10/12">
                                        <img class="h-full w-full rounded-lg object-cover object-top"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide !w-10/12">
                                        <img class="h-full w-full rounded-lg object-cover object-center"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide !w-10/12">
                                        <img class="h-full w-full rounded-lg object-cover object-center"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                    <div class="code-wrapper hidden pt-4">
                        <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
                <code class="language-html" x-ignore>  
&lt;div&#13;&#10;    x-init=&quot;$nextTick(() =&gt; $el._x_swiper = new Swiper($el,{slidesPerView: &apos;auto&apos;,spaceBetween: 30,pagination: {el: &apos;.swiper-pagination&apos;,clickable: true,}}))&quot;&#13;&#10;    class=&quot;swiper&quot;&#13;&#10;  &gt;&#13;&#10;    &lt;div class=&quot;swiper-wrapper&quot;&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide !w-10/12&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full rounded-lg object-cover&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide !w-10/12&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full rounded-lg object-cover object-top&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide !w-10/12&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full rounded-lg object-cover object-center&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide !w-10/12&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full rounded-lg object-cover object-center&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div class=&quot;swiper-pagination&quot;&gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;                    </code>
              </pre>
                    </div>
                </div>

                <!-- Zoom -->
                <div class="card px-4 pb-4 sm:px-5">
                    <div class="my-3 flex h-8 items-center justify-between">
                        <h2
                            class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                            Zoom
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
                            <a href="https://github.com/nolimits4web/swiper"
                                class="font-normal text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">Swiper</a>
                            is the free and most modern mobile touch slider with hardware
                            accelerated transitions and amazing native behavior. Check out
                            code for detail of usage.
                        </p>
                        <div class="mt-5">
                            <div x-init="$nextTick(() => $el._x_swiper = new Swiper($el, { navigation: { prevEl: '.swiper-button-prev', nextEl: '.swiper-button-next' }, pagination: { el: '.swiper-pagination', clickable: true, }, zoom: { maxRatio: 4 } }))" class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="swiper-zoom-container">
                                            <img class="h-full w-full object-cover"
                                                src="{{ asset('images/800x600.png') }}" alt="image" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-zoom-container">
                                            <img class="h-full w-full object-cover"
                                                src="{{ asset('images/800x600.png') }}" alt="image" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-zoom-container">
                                            <img class="h-full w-full object-cover"
                                                src="{{ asset('images/800x600.png') }}" alt="image" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-zoom-container">
                                            <img class="h-full w-full object-cover"
                                                src="{{ asset('images/800x600.png') }}" alt="image" />
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                    <div class="code-wrapper hidden pt-4">
                        <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
              <code class="language-html" x-ignore>  
&lt;div&#13;&#10;    x-init=&quot;$nextTick(() =&gt; $el._x_swiper = new Swiper($el,{navigation: {prevEl: &apos;.swiper-button-prev&apos;, nextEl: &apos;.swiper-button-next&apos;}, pagination: {el: &apos;.swiper-pagination&apos;,clickable: true,}, zoom: {maxRatio: 4}}))&quot;&#13;&#10;    class=&quot;swiper&quot;&#13;&#10;  &gt;&#13;&#10;    &lt;div class=&quot;swiper-wrapper&quot;&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;div class=&quot;swiper-zoom-container&quot;&gt;&#13;&#10;          &lt;img&#13;&#10;            class=&quot;h-full w-full object-cover&quot;&#13;&#10;            src=&quot;images/800x600.png&quot;&#13;&#10;            alt=&quot;&quot;&#13;&#10;          /&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;div class=&quot;swiper-zoom-container&quot;&gt;&#13;&#10;          &lt;img&#13;&#10;            class=&quot;h-full w-full object-cover&quot;&#13;&#10;            src=&quot;images/800x600.png&quot;&#13;&#10;            alt=&quot;&quot;&#13;&#10;          /&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;div class=&quot;swiper-zoom-container&quot;&gt;&#13;&#10;          &lt;img&#13;&#10;            class=&quot;h-full w-full object-cover&quot;&#13;&#10;            src=&quot;images/800x600.png&quot;&#13;&#10;            alt=&quot;&quot;&#13;&#10;          /&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;div class=&quot;swiper-zoom-container&quot;&gt;&#13;&#10;          &lt;img&#13;&#10;            class=&quot;h-full w-full object-cover&quot;&#13;&#10;            src=&quot;images/800x600.png&quot;&#13;&#10;            alt=&quot;&quot;&#13;&#10;          /&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div class=&quot;swiper-pagination&quot;&gt;&lt;/div&gt;&#13;&#10;    &lt;div class=&quot;swiper-button-next&quot;&gt;&lt;/div&gt;&#13;&#10;    &lt;div class=&quot;swiper-button-prev&quot;&gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;                  </code>
            </pre>
                    </div>
                </div>

                <!-- Flip Effect -->
                <div class="card px-4 pb-4 sm:px-5">
                    <div class="my-3 flex h-8 items-center justify-between">
                        <h2
                            class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                            Flip Effect
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
                            <a href="https://github.com/nolimits4web/swiper"
                                class="font-normal text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">Swiper</a>
                            is the free and most modern mobile touch slider with hardware
                            accelerated transitions and amazing native behavior. Check out
                            code for detail of usage.
                        </p>
                        <div class="mt-5">
                            <div x-init="$nextTick(() => $el._x_swiper = new Swiper($el, { effect: 'flip', flipEffect: { slideShadows: false, }, navigation: { prevEl: '.swiper-button-prev', nextEl: '.swiper-button-next' }, pagination: { el: '.swiper-pagination', clickable: true } }))" class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="swiper-zoom-container">
                                            <img class="h-full w-full object-cover"
                                                src="{{ asset('images/800x600.png') }}" alt="image" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-zoom-container">
                                            <img class="h-full w-full object-cover"
                                                src="{{ asset('images/800x600.png') }}" alt="image" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-zoom-container">
                                            <img class="h-full w-full object-cover"
                                                src="{{ asset('images/800x600.png') }}" alt="image" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-zoom-container">
                                            <img class="h-full w-full object-cover"
                                                src="{{ asset('images/800x600.png') }}" alt="image" />
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                    <div class="code-wrapper hidden pt-4">
                        <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
              <code class="language-html" x-ignore>
&lt;div&#13;&#10;    x-init=&quot;$nextTick(() =&gt; $el._x_swiper = new Swiper($el,{effect: &apos;flip&apos;,flipEffect: {slideShadows: false,}, navigation: { prevEl: &apos;.swiper-button-prev&apos;,nextEl: &apos;.swiper-button-next&apos;}, pagination: { el: &apos;.swiper-pagination&apos;, clickable: true}}))&quot;&#13;&#10;    class=&quot;swiper&quot;&#13;&#10;  &gt;&#13;&#10;    &lt;div class=&quot;swiper-wrapper&quot;&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;div class=&quot;swiper-zoom-container&quot;&gt;&#13;&#10;          &lt;img&#13;&#10;            class=&quot;h-full w-full object-cover&quot;&#13;&#10;            src=&quot;images/800x600.png&quot;&#13;&#10;            alt=&quot;&quot;&#13;&#10;          /&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;div class=&quot;swiper-zoom-container&quot;&gt;&#13;&#10;          &lt;img&#13;&#10;            class=&quot;h-full w-full object-cover&quot;&#13;&#10;            src=&quot;images/800x600.png&quot;&#13;&#10;            alt=&quot;&quot;&#13;&#10;          /&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;div class=&quot;swiper-zoom-container&quot;&gt;&#13;&#10;          &lt;img&#13;&#10;            class=&quot;h-full w-full object-cover&quot;&#13;&#10;            src=&quot;images/800x600.png&quot;&#13;&#10;            alt=&quot;&quot;&#13;&#10;          /&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;div class=&quot;swiper-zoom-container&quot;&gt;&#13;&#10;          &lt;img&#13;&#10;            class=&quot;h-full w-full object-cover&quot;&#13;&#10;            src=&quot;images/800x600.png&quot;&#13;&#10;            alt=&quot;&quot;&#13;&#10;          /&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div class=&quot;swiper-pagination&quot;&gt;&lt;/div&gt;&#13;&#10;    &lt;div class=&quot;swiper-button-next&quot;&gt;&lt;/div&gt;&#13;&#10;    &lt;div class=&quot;swiper-button-prev&quot;&gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;                  </code>
            </pre>
                    </div>
                </div>

                <!-- Cube Effect -->
                <div class="card px-4 pb-4 sm:px-5">
                    <div class="my-3 flex h-8 items-center justify-between">
                        <h2
                            class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                            Cube Effect
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
                            <a href="https://github.com/nolimits4web/swiper"
                                class="font-normal text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">Swiper</a>
                            is the free and most modern mobile touch slider with hardware
                            accelerated transitions and amazing native behavior. Check out
                            code for detail of usage.
                        </p>
                        <div class="mt-5">
                            <div x-init="$nextTick(() => $el._x_swiper = new Swiper($el, { effect: 'cube', cubeEffect: { shadow: false }, pagination: { el: '.swiper-pagination', clickable: true } }))" class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="h-full w-full rounded-lg object-cover"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full rounded-lg object-cover"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full rounded-lg object-cover"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full rounded-lg object-cover"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                    <div class="code-wrapper hidden pt-4">
                        <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
              <code class="language-html" x-ignore>  
&lt;div&#13;&#10;    x-init=&quot;$nextTick(() =&gt; $el._x_swiper = new Swiper($el,{effect: &apos;cube&apos;, cubeEffect: { shadow: false}, pagination: { el: &apos;.swiper-pagination&apos;, clickable: true}}))&quot;&#13;&#10;    class=&quot;swiper&quot;&#13;&#10;  &gt;&#13;&#10;    &lt;div class=&quot;swiper-wrapper&quot;&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full rounded-lg object-cover&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full rounded-lg object-cover&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full rounded-lg object-cover&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full rounded-lg object-cover&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div class=&quot;swiper-pagination&quot;&gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;                  </code>
            </pre>
                    </div>
                </div>

                <!-- Card Effect -->
                <div class="card px-4 pb-4 sm:px-5">
                    <div class="my-3 flex h-8 items-center justify-between">
                        <h2
                            class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                            Card Effect
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
                            <a href="https://github.com/nolimits4web/swiper"
                                class="font-normal text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">Swiper</a>
                            is the free and most modern mobile touch slider with hardware
                            accelerated transitions and amazing native behavior. Check out
                            code for detail of usage.
                        </p>
                        <div class="mx-auto mt-5 w-10/12">
                            <div x-init="$nextTick(() => $el._x_swiper = new Swiper($el, { effect: 'cards', grabCursor: true }))" class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="h-full w-full rounded-lg object-cover"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full rounded-lg object-cover"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full rounded-lg object-cover"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full rounded-lg object-cover"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="code-wrapper hidden pt-4">
                        <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
              <code class="language-html" x-ignore>
&lt;div&#13;&#10;    x-init=&quot;$nextTick(() =&gt; $el._x_swiper = new Swiper($el,{effect: &apos;cards&apos;, grabCursor: true}))&quot;&#13;&#10;    class=&quot;swiper&quot;&#13;&#10;  &gt;&#13;&#10;    &lt;div class=&quot;swiper-wrapper&quot;&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full rounded-lg object-cover&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full rounded-lg object-cover&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full rounded-lg object-cover&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full rounded-lg object-cover&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;                  </code>
            </pre>
                    </div>
                </div>
            </div>

            <div class="space-y-4 sm:space-y-5 lg:space-y-6">
                <!-- Pagination -->
                <div class="card px-4 pb-4 sm:px-5">
                    <div class="my-3 flex h-8 items-center justify-between">
                        <h2
                            class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                            Pagination
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
                            <a href="https://github.com/nolimits4web/swiper"
                                class="font-normal text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">Swiper</a>
                            is the free and most modern mobile touch slider with hardware
                            accelerated transitions and amazing native behavior. Check out
                            code for detail of usage.
                        </p>
                        <div class="mt-5">
                            <div x-init="$nextTick(() => $el._x_swiper = new Swiper($el, { pagination: { el: '.swiper-pagination', clickable: true, } }))" class="swiper rounded-lg">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover object-top"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover object-center"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover object-center"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                    <div class="code-wrapper hidden pt-4">
                        <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
              <code class="language-html" x-ignore>
&lt;div&#13;&#10;    x-init=&quot;$nextTick(()=&gt;$el._x_swiper = new Swiper($el,{ pagination: { el: &apos;.swiper-pagination&apos;, clickable: true,}}))&quot;&#13;&#10;    class=&quot;swiper rounded-lg&quot;&#13;&#10;  &gt;&#13;&#10;    &lt;div class=&quot;swiper-wrapper&quot;&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full object-cover&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full object-cover object-top&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full object-cover object-center&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full object-cover object-center&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div class=&quot;swiper-pagination&quot;&gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;                  </code>
            </pre>
                    </div>
                </div>

                <!-- Vertical Slider -->
                <div class="card px-4 pb-4 sm:px-5">
                    <div class="my-3 flex h-8 items-center justify-between">
                        <h2
                            class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                            Vertical Slider
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
                            <a href="https://github.com/nolimits4web/swiper"
                                class="font-normal text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">Swiper</a>
                            is the free and most modern mobile touch slider with hardware
                            accelerated transitions and amazing native behavior. Check out
                            code for detail of usage.
                        </p>
                        <div class="mt-5">
                            <div x-init="$nextTick(() => $el._x_swiper = new Swiper($el, { direction: 'vertical', pagination: { el: '.swiper-pagination', clickable: true } }))" class="swiper h-64 rounded-lg">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover object-center"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                    <div class="code-wrapper hidden pt-4">
                        <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
              <code class="language-html" x-ignore>  
&lt;div&#13;&#10;    x-init=&quot;$nextTick(()=&gt;$el._x_swiper = new Swiper($el, {direction: &apos;vertical&apos;,pagination: { el: &apos;.swiper-pagination&apos;,clickable: true}}))&quot;&#13;&#10;    class=&quot;swiper h-64 rounded-lg&quot;&#13;&#10;  &gt;&#13;&#10;    &lt;div class=&quot;swiper-wrapper&quot;&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full object-cover object-center&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full object-cover&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full object-cover&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full object-cover&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div class=&quot;swiper-pagination&quot;&gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;                  </code>
            </pre>
                    </div>
                </div>

                <!-- With Scrollbar -->
                <div class="card px-4 pb-4 sm:px-5">
                    <div class="my-3 flex h-8 items-center justify-between">
                        <h2
                            class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                            With Scrollbar
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
                            <a href="https://github.com/nolimits4web/swiper"
                                class="font-normal text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">Swiper</a>
                            is the free and most modern mobile touch slider with hardware
                            accelerated transitions and amazing native behavior. Check out
                            code for detail of usage.
                        </p>
                        <div class="mt-5">
                            <div x-init="$nextTick(() => $el._x_swiper = new Swiper($el, { scrollbar: { el: '.swiper-scrollbar', draggable: true }, navigation: { prevEl: '.swiper-button-prev', nextEl: '.swiper-button-next' }, autoplay: { delay: 2000 } }))" class="swiper rounded-lg">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover object-top"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover object-center"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover object-center"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                </div>
                                <div class="swiper-scrollbar"></div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                    <div class="code-wrapper hidden pt-4">
                        <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
              <code class="language-html" x-ignore>  
&lt;div&#13;&#10;    x-init=&quot;$nextTick(()=&gt;$el._x_swiper = new Swiper($el, {scrollbar: {el: &apos;.swiper-scrollbar&apos;,draggable: true}, navigation: {prevEl: &apos;.swiper-button-prev&apos;,nextEl: &apos;.swiper-button-next&apos;},autoplay: {delay: 2000}}))&quot;&#13;&#10;    class=&quot;swiper rounded-lg&quot;&#13;&#10;  &gt;&#13;&#10;    &lt;div class=&quot;swiper-wrapper&quot;&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full object-cover&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full object-cover object-top&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full object-cover object-center&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full object-cover object-center&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div class=&quot;swiper-scrollbar&quot;&gt;&lt;/div&gt;&#13;&#10;    &lt;div class=&quot;swiper-button-next&quot;&gt;&lt;/div&gt;&#13;&#10;    &lt;div class=&quot;swiper-button-prev&quot;&gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;                  </code>
            </pre>
                    </div>
                </div>

                <!-- Fade Effect -->
                <div class="card px-4 pb-4 sm:px-5">
                    <div class="my-3 flex h-8 items-center justify-between">
                        <h2
                            class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                            Fade Effect
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
                            <a href="https://github.com/nolimits4web/swiper"
                                class="font-normal text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">Swiper</a>
                            is the free and most modern mobile touch slider with hardware
                            accelerated transitions and amazing native behavior. Check out
                            code for detail of usage.
                        </p>
                        <div class="mt-5">
                            <div x-init="$nextTick(() => $el._x_swiper = new Swiper($el, { effect: 'fade', pagination: { el: '.swiper-pagination', clickable: true }, navigation: { prevEl: '.swiper-button-prev', nextEl: '.swiper-button-next' } }))" class="swiper rounded-lg">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover object-top"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover object-center"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover object-center"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                    <div class="code-wrapper hidden pt-4">
                        <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
              <code class="language-html" x-ignore>  
&lt;div&#13;&#10;    x-init=&quot;$nextTick(()=&gt;$el._x_swiper = new Swiper($el, {effect: &apos;fade&apos;, pagination: { el: &apos;.swiper-pagination&apos;,clickable: true},navigation: {prevEl: &apos;.swiper-button-prev&apos;,nextEl: &apos;.swiper-button-next&apos;}}))&quot;&#13;&#10;    class=&quot;swiper rounded-lg&quot;&#13;&#10;  &gt;&#13;&#10;    &lt;div class=&quot;swiper-wrapper&quot;&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full object-cover&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full object-cover object-top&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full object-cover object-center&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full object-cover object-center&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div class=&quot;swiper-button-next&quot;&gt;&lt;/div&gt;&#13;&#10;    &lt;div class=&quot;swiper-button-prev&quot;&gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;                  </code>
            </pre>
                    </div>
                </div>

                <!-- Coverflow Effect -->
                <div class="card px-4 pb-4 sm:px-5">
                    <div class="my-3 flex h-8 items-center justify-between">
                        <h2
                            class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                            Coverflow Effect
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
                            <a href="https://github.com/nolimits4web/swiper"
                                class="font-normal text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">Swiper</a>
                            is the free and most modern mobile touch slider with hardware
                            accelerated transitions and amazing native behavior. Check out
                            code for detail of usage.
                        </p>
                        <div class="mt-5">
                            <div x-init="$nextTick(() => $el._x_swiper = new Swiper($el, { effect: 'coverflow', coverflowEffect: { rotate: 35, slideShadows: false, }, navigation: { prevEl: '.swiper-button-prev', nextEl: '.swiper-button-next' } }))" class="swiper rounded-lg">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover object-top"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover object-center"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover object-center"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                    <div class="code-wrapper hidden pt-4">
                        <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
              <code class="language-html" x-ignore>  
&lt;div&#13;&#10;    x-init=&quot;$nextTick(()=&gt;$el._x_swiper = new Swiper($el, { effect: &apos;coverflow&apos;, coverflowEffect: {rotate: 35, slideShadows: false,}, navigation: {prevEl: &apos;.swiper-button-prev&apos;,nextEl: &apos;.swiper-button-next&apos;}}))&quot;&#13;&#10;    class=&quot;swiper rounded-lg&quot;&#13;&#10;  &gt;&#13;&#10;    &lt;div class=&quot;swiper-wrapper&quot;&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full object-cover&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full object-cover object-top&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full object-cover object-center&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full object-cover object-center&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div class=&quot;swiper-button-next&quot;&gt;&lt;/div&gt;&#13;&#10;    &lt;div class=&quot;swiper-button-prev&quot;&gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;                  </code>
            </pre>
                    </div>
                </div>

                <!-- Parallax -->
                <div class="card px-4 pb-4 sm:px-5">
                    <div class="my-3 flex h-8 items-center justify-between">
                        <h2
                            class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                            Parallax
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
                            <a href="https://github.com/nolimits4web/swiper"
                                class="font-normal text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">Swiper</a>
                            is the free and most modern mobile touch slider with hardware
                            accelerated transitions and amazing native behavior. Check out
                            code for detail of usage.
                        </p>
                        <div class="mt-5">
                            <div x-init="$nextTick(() => $el._x_swiper = new Swiper($el, { parallax: true, navigation: { prevEl: '.swiper-button-prev', nextEl: '.swiper-button-next' } }))" class="swiper swiper-parallax h-64 rounded-lg">
                                <div class="parallax-bg" style="background-image: url('/images/800x600.png');"
                                    data-swiper-parallax="-23%"></div>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide p-6">
                                        <div class="title text-3xl font-light text-white" data-swiper-parallax="-300">
                                            Slide 1
                                        </div>
                                        <div class="subtitle mt-2 text-2xl text-white" data-swiper-parallax="-200">
                                            Subtitle
                                        </div>
                                        <div class="text mt-4 text-white" data-swiper-parallax="-100">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Ab at, consectetur cupiditate debitis expedita
                                                fugit, modi nemo nobis odit perferendis quaerat quia
                                                reiciendis repudiandae rerum sed?
                                            </p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide p-6">
                                        <div class="title text-3xl font-light text-white" data-swiper-parallax="-300">
                                            Slide 2
                                        </div>
                                        <div class="subtitle mt-2 text-2xl text-white" data-swiper-parallax="-200">
                                            Subtitle
                                        </div>
                                        <div class="text mt-4 text-white" data-swiper-parallax="-100">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Ab at, consectetur cupiditate debitis expedita
                                                fugit, modi nemo nobis odit perferendis quaerat quia
                                                reiciendis repudiandae rerum sed?
                                            </p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide p-6">
                                        <div class="title text-3xl font-light text-white" data-swiper-parallax="-300">
                                            Slide 3
                                        </div>
                                        <div class="subtitle mt-2 text-2xl text-white" data-swiper-parallax="-200">
                                            Subtitle
                                        </div>
                                        <div class="text mt-4 text-white" data-swiper-parallax="-100">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Ab at, consectetur cupiditate debitis expedita
                                                fugit, modi nemo nobis odit perferendis quaerat quia
                                                reiciendis repudiandae rerum sed?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                    <div class="code-wrapper hidden pt-4">
                        <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
              <code class="language-html" x-ignore>  
&lt;div&#13;&#10;    x-init=&quot;$nextTick(()=&gt;$el._x_swiper = new Swiper($el, {parallax: true,navigation: { prevEl: &apos;.swiper-button-prev&apos;, nextEl: &apos;.swiper-button-next&apos;}}))&quot;&#13;&#10;    class=&quot;swiper swiper-parallax h-64 rounded-lg&quot;&#13;&#10;  &gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;parallax-bg&quot;&#13;&#10;      style=&quot;background-image: url(&apos;images/800x600.png&apos;)&quot;&#13;&#10;      data-swiper-parallax=&quot;-23%&quot;&#13;&#10;    &gt;&lt;/div&gt;&#13;&#10;    &lt;div class=&quot;swiper-wrapper&quot;&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide p-6&quot;&gt;&#13;&#10;        &lt;div&#13;&#10;          class=&quot;title text-3xl font-light text-white&quot;&#13;&#10;          data-swiper-parallax=&quot;-300&quot;&#13;&#10;        &gt;&#13;&#10;          Slide 1&#13;&#10;        &lt;/div&gt;&#13;&#10;        &lt;div&#13;&#10;          class=&quot;subtitle mt-2 text-2xl text-white&quot;&#13;&#10;          data-swiper-parallax=&quot;-200&quot;&#13;&#10;        &gt;&#13;&#10;          Subtitle&#13;&#10;        &lt;/div&gt;&#13;&#10;        &lt;div class=&quot;text mt-4 text-white&quot; data-swiper-parallax=&quot;-100&quot;&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab at,&#13;&#10;            consectetur cupiditate debitis expedita fugit, modi nemo nobis odit&#13;&#10;            perferendis quaerat quia reiciendis repudiandae rerum sed?&#13;&#10;          &lt;/p&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide p-6&quot;&gt;&#13;&#10;        &lt;div&#13;&#10;          class=&quot;title text-3xl font-light text-white&quot;&#13;&#10;          data-swiper-parallax=&quot;-300&quot;&#13;&#10;        &gt;&#13;&#10;          Slide 2&#13;&#10;        &lt;/div&gt;&#13;&#10;        &lt;div&#13;&#10;          class=&quot;subtitle mt-2 text-2xl text-white&quot;&#13;&#10;          data-swiper-parallax=&quot;-200&quot;&#13;&#10;        &gt;&#13;&#10;          Subtitle&#13;&#10;        &lt;/div&gt;&#13;&#10;        &lt;div class=&quot;text mt-4 text-white&quot; data-swiper-parallax=&quot;-100&quot;&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab at,&#13;&#10;            consectetur cupiditate debitis expedita fugit, modi nemo nobis odit&#13;&#10;            perferendis quaerat quia reiciendis repudiandae rerum sed?&#13;&#10;          &lt;/p&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide p-6&quot;&gt;&#13;&#10;        &lt;div&#13;&#10;          class=&quot;title text-3xl font-light text-white&quot;&#13;&#10;          data-swiper-parallax=&quot;-300&quot;&#13;&#10;        &gt;&#13;&#10;          Slide 3&#13;&#10;        &lt;/div&gt;&#13;&#10;        &lt;div&#13;&#10;          class=&quot;subtitle mt-2 text-2xl text-white&quot;&#13;&#10;          data-swiper-parallax=&quot;-200&quot;&#13;&#10;        &gt;&#13;&#10;          Subtitle&#13;&#10;        &lt;/div&gt;&#13;&#10;        &lt;div class=&quot;text mt-4 text-white&quot; data-swiper-parallax=&quot;-100&quot;&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab at,&#13;&#10;            consectetur cupiditate debitis expedita fugit, modi nemo nobis odit&#13;&#10;            perferendis quaerat quia reiciendis repudiandae rerum sed?&#13;&#10;          &lt;/p&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div class=&quot;swiper-button-next&quot;&gt;&lt;/div&gt;&#13;&#10;    &lt;div class=&quot;swiper-button-prev&quot;&gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;                  </code>
            </pre>
                    </div>
                </div>

                <!-- Creative Effect -->
                <div class="card px-4 pb-4 sm:px-5">
                    <div class="my-3 flex h-8 items-center justify-between">
                        <h2
                            class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                            Creative Effect
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
                            <a href="https://github.com/nolimits4web/swiper"
                                class="font-normal text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">Swiper</a>
                            is the free and most modern mobile touch slider with hardware
                            accelerated transitions and amazing native behavior. Check out
                            code for detail of usage.
                        </p>
                        <div class="mt-5">
                            <div x-init="$nextTick(() => $el._x_swiper = new Swiper($el, { grabCursor: true, effect: 'creative', creativeEffect: { prev: { shadow: true, translate: ['-125%', 0, -800], rotate: [0, 0, -90] }, next: { shadow: true, translate: ['125%', 0, -800], rotate: [0, 0, 90] } } }))" class="swiper rounded-lg">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="h-full w-full rounded-lg object-cover"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full rounded-lg object-cover"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full rounded-lg object-cover"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full rounded-lg object-cover"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="code-wrapper hidden pt-4">
                        <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
              <code class="language-html" x-ignore>  
&lt;div&#13;&#10;    x-init=&quot;$nextTick(()=&gt;$el._x_swiper = new Swiper($el, { grabCursor: true, effect: &apos;creative&apos;, creativeEffect: { prev: { shadow: true, translate: [&apos;-125%&apos;, 0, -800], rotate: [0, 0, -90]}, next: { shadow: true,translate: [&apos;125%&apos;, 0, -800], rotate: [0, 0, 90]} }}))&quot;&#13;&#10;    class=&quot;swiper rounded-lg&quot;&#13;&#10;  &gt;&#13;&#10;    &lt;div class=&quot;swiper-wrapper&quot;&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full rounded-lg object-cover&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full rounded-lg object-cover&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full rounded-lg object-cover&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div class=&quot;swiper-slide&quot;&gt;&#13;&#10;        &lt;img&#13;&#10;          class=&quot;h-full w-full rounded-lg object-cover&quot;&#13;&#10;          src=&quot;images/800x600.png&quot;&#13;&#10;          alt=&quot;&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;
              </code>
            </pre>
                    </div>
                </div>
            </div>
        </div>
    </main>

</x-app-layout>

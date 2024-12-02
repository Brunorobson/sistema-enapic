<x-app-layout title="Help 2" is-header-blur="true">
    <!-- Main Content Wrapper -->
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center justify-between space-x-6 py-5 lg:py-6">
            <div class="flex items-center space-x-4">
                <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
                    Help
                </h2>
                <div class="my-1 hidden w-px self-stretch bg-slate-300 dark:bg-navy-600 sm:flex"></div>
                <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
                    <li class="flex items-center space-x-2">
                        <a class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                            href="#">Layouts</a>
                        <svg x-ignore xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </li>
                    <li>Help</li>
                </ul>
            </div>
            <label class="relative flex">
                <input
                    class="form-input peer h-9 w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 text-xs+ placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Enter question..." type="text" />
                <div
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-colors duration-200"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M3.316 13.781l.73-.171-.73.171zm0-5.457l.73.171-.73-.171zm15.473 0l.73-.171-.73.171zm0 5.457l.73.171-.73-.171zm-5.008 5.008l-.171-.73.171.73zm-5.457 0l-.171.73.171-.73zm0-15.473l-.171-.73.171.73zm5.457 0l.171-.73-.171.73zM20.47 21.53a.75.75 0 101.06-1.06l-1.06 1.06zM4.046 13.61a11.198 11.198 0 010-5.115l-1.46-.342a12.698 12.698 0 000 5.8l1.46-.343zm14.013-5.115a11.196 11.196 0 010 5.115l1.46.342a12.698 12.698 0 000-5.8l-1.46.343zm-4.45 9.564a11.196 11.196 0 01-5.114 0l-.342 1.46c1.907.448 3.892.448 5.8 0l-.343-1.46zM8.496 4.046a11.198 11.198 0 015.115 0l.342-1.46a12.698 12.698 0 00-5.8 0l.343 1.46zm0 14.013a5.97 5.97 0 01-4.45-4.45l-1.46.343a7.47 7.47 0 005.568 5.568l.342-1.46zm5.457 1.46a7.47 7.47 0 005.568-5.567l-1.46-.342a5.97 5.97 0 01-4.45 4.45l.342 1.46zM13.61 4.046a5.97 5.97 0 014.45 4.45l1.46-.343a7.47 7.47 0 00-5.568-5.567l-.342 1.46zm-5.457-1.46a7.47 7.47 0 00-5.567 5.567l1.46.342a5.97 5.97 0 014.45-4.45l-.343-1.46zm8.652 15.28l3.665 3.664 1.06-1.06-3.665-3.665-1.06 1.06z" />
                    </svg>
                </div>
            </label>
        </div>

        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-4 lg:gap-6">
            <a href="#" class="card items-center space-y-2 bg-primary py-10 px-4 text-center dark:bg-accent">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                </svg>
                <h4 class="text-lg font-medium text-white">Getting Started</h4>
                <p class="text-indigo-100">
                    Lorem ipsum dolor sit amet, consectetur.
                </p>
            </a>
            <a href="#" class="card items-center space-y-2 py-10 px-4 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-primary dark:text-accent-light"
                    viewBox="0 0 24 24" stroke="currentColor" fill="none">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                <h4 class="text-lg font-medium text-slate-600 dark:text-navy-100">
                    My Account
                </h4>
                <p>Lorem ipsum dolor sit amet, consectetur.</p>
            </a>
            <a href="#" class="card items-center space-y-2 py-10 px-4 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-primary dark:text-accent-light"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                </svg>
                <h4 class="text-lg font-medium text-slate-600 dark:text-navy-100">
                    Mobile App
                </h4>
                <p>Lorem ipsum dolor sit amet, consectetur.</p>
            </a>
            <a href="#" class="card items-center space-y-2 py-10 px-4 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-primary dark:text-accent-light"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
                <h4 class="text-lg font-medium text-slate-600 dark:text-navy-100">
                    Security
                </h4>
                <p>Lorem ipsum dolor sit amet, consectetur.</p>
            </a>
        </div>

        <div class="mt-4 grid grid-cols-1 gap-4 sm:mt-5 sm:gap-5 lg:mt-6 lg:grid-cols-2 lg:gap-6">
            <div class="space-y-4 sm:space-y-5 lg:space-y-6">
                <div class="card">
                    <div class="border-b border-slate-200 p-4 dark:border-navy-500 sm:px-5">
                        <div class="flex items-center space-x-2">
                            <div
                                class="flex h-7 w-7 items-center justify-center rounded-lg bg-primary/10 p-1 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-full w-full" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>
                            </div>
                            <h4 class="text-lg font-medium text-slate-700 dark:text-navy-100">
                                Getting Started
                            </h4>
                        </div>
                    </div>
                    <div x-data="{ expandedItem: 'item-1' }"
                        class="flex flex-col divide-y divide-slate-150 px-4 dark:divide-navy-500 sm:px-5">
                        <div x-data="accordionItem('item-1')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center py-4 justify-between text-base font-medium text-slate-700 dark:text-navy-100">
                                <p>Question 1</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-navy-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="pb-4">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
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
                                </div>
                            </div>
                        </div>
                        <div x-data="accordionItem('item-2')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center py-4 justify-between text-base font-medium text-slate-700 dark:text-navy-100">
                                <p>Question 2</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-navy-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="pb-4">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
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
                                </div>
                            </div>
                        </div>
                        <div x-data="accordionItem('item-3')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center py-4 justify-between text-base font-medium text-slate-700 dark:text-navy-100">
                                <p>Question 3</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-navy-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="pb-4">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
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
                                </div>
                            </div>
                        </div>
                        <div x-data="accordionItem('item-4')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center py-4 justify-between text-base font-medium text-slate-700 dark:text-navy-100">
                                <p>Question 4</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-navy-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="pb-4">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="border-b border-slate-200 p-4 dark:border-navy-500 sm:px-5">
                        <div class="flex items-center space-x-2">
                            <div
                                class="flex h-7 w-7 items-center justify-center rounded-lg bg-primary/10 p-1 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-full w-full" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                                </svg>
                            </div>
                            <h4 class="text-lg font-medium text-slate-700 dark:text-navy-100">
                                Shipping
                            </h4>
                        </div>
                    </div>
                    <div x-data="{ expandedItem: 'item-1' }"
                        class="flex flex-col divide-y divide-slate-150 px-4 dark:divide-navy-500 sm:px-5">
                        <div x-data="accordionItem('item-1')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center py-4 justify-between text-base font-medium text-slate-700 dark:text-navy-100">
                                <p>Question 1</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-navy-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="pb-4">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
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
                                </div>
                            </div>
                        </div>
                        <div x-data="accordionItem('item-2')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center py-4 justify-between text-base font-medium text-slate-700 dark:text-navy-100">
                                <p>Question 2</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-navy-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="pb-4">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
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
                                </div>
                            </div>
                        </div>
                        <div x-data="accordionItem('item-3')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center py-4 justify-between text-base font-medium text-slate-700 dark:text-navy-100">
                                <p>Question 3</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-navy-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="pb-4">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
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
                                </div>
                            </div>
                        </div>
                        <div x-data="accordionItem('item-4')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center py-4 justify-between text-base font-medium text-slate-700 dark:text-navy-100">
                                <p>Question 4</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-navy-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="pb-4">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-y-4 sm:space-y-5 lg:space-y-6">
                <div class="card">
                    <div class="border-b border-slate-200 p-4 dark:border-navy-500 sm:px-5">
                        <div class="flex items-center space-x-2">
                            <div
                                class="flex h-7 w-7 items-center justify-center rounded-lg bg-primary/10 p-1 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-full w-full" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                </svg>
                            </div>
                            <h4 class="text-lg font-medium text-slate-700 dark:text-navy-100">
                                Payments
                            </h4>
                        </div>
                    </div>
                    <div x-data="{ expandedItem: 'item-1' }"
                        class="flex flex-col divide-y divide-slate-150 px-4 dark:divide-navy-500 sm:px-5">
                        <div x-data="accordionItem('item-1')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center py-4 justify-between text-base font-medium text-slate-700 dark:text-navy-100">
                                <p>Question 1</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-navy-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="pb-4">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
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
                                </div>
                            </div>
                        </div>
                        <div x-data="accordionItem('item-2')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center py-4 justify-between text-base font-medium text-slate-700 dark:text-navy-100">
                                <p>Question 2</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-navy-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="pb-4">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
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
                                </div>
                            </div>
                        </div>
                        <div x-data="accordionItem('item-3')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center py-4 justify-between text-base font-medium text-slate-700 dark:text-navy-100">
                                <p>Question 3</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-navy-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="pb-4">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
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
                                </div>
                            </div>
                        </div>
                        <div x-data="accordionItem('item-4')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center py-4 justify-between text-base font-medium text-slate-700 dark:text-navy-100">
                                <p>Question 4</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-navy-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="pb-4">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="border-b border-slate-200 p-4 dark:border-navy-500 sm:px-5">
                        <div class="flex items-center space-x-2">
                            <div
                                class="flex h-7 w-7 items-center justify-center rounded-lg bg-primary/10 p-1 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-full w-full" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 15v-1a4 4 0 00-4-4H8m0 0l3 3m-3-3l3-3m9 14V5a2 2 0 00-2-2H6a2 2 0 00-2 2v16l4-2 4 2 4-2 4 2z" />
                                </svg>
                            </div>
                            <h4 class="text-lg font-medium text-slate-700 dark:text-navy-100">
                                Returns
                            </h4>
                        </div>
                    </div>
                    <div x-data="{ expandedItem: 'item-1' }"
                        class="flex flex-col divide-y divide-slate-150 px-4 dark:divide-navy-500 sm:px-5">
                        <div x-data="accordionItem('item-1')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center py-4 justify-between text-base font-medium text-slate-700 dark:text-navy-100">
                                <p>Question 1</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-navy-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="pb-4">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
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
                                </div>
                            </div>
                        </div>
                        <div x-data="accordionItem('item-2')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center py-4 justify-between text-base font-medium text-slate-700 dark:text-navy-100">
                                <p>Question 2</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-navy-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="pb-4">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
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
                                </div>
                            </div>
                        </div>
                        <div x-data="accordionItem('item-3')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center py-4 justify-between text-base font-medium text-slate-700 dark:text-navy-100">
                                <p>Question 3</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-navy-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="pb-4">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
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
                                </div>
                            </div>
                        </div>
                        <div x-data="accordionItem('item-4')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center py-4 justify-between text-base font-medium text-slate-700 dark:text-navy-100">
                                <p>Question 4</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-navy-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="pb-4">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>

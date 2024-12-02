<x-app-layout title="Help 3" is-header-blur="true">
    <!-- Main Content Wrapper -->
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
            <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
                Help
            </h2>
            <div class="hidden h-full py-1 sm:flex">
                <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
            </div>
            <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
                <li class="flex items-center space-x-2">
                    <a class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                        href="#">Layouts</a>
                    <svg x-ignore xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </li>
                <li>Help</li>
            </ul>
        </div>

        <div class="relative flex flex-col items-center justify-center">
            <div class="absolute right-0 top-0 -mt-8 hidden max-w-xs p-4 lg:block">
                <img src="{{asset('images/illustrations/help.svg')}}" alt="image" />
            </div>
            <h2 class="mt-8 text-xl font-medium text-slate-600 dark:text-navy-100 lg:text-2xl">
                How we can help you?
            </h2>
            <div class="relative mt-6 w-full max-w-md">
                <input
                    class="form-input peer h-12 w-full rounded-full border border-slate-300 bg-slate-50 px-4 py-2 pl-9 text-base placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-900 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Search your question" type="text" />
                <div
                    class="absolute left-0 top-0 flex h-12 w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>

            <div class="inline-space mt-3 flex flex-wrap items-center justify-center">
                <span>Popular searched:</span>
                <div>
                    <a href="#"
                        class="tag rounded-full bg-info/10 text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25">
                        Apps
                    </a>
                    <a href="#"
                        class="tag rounded-full bg-info/10 text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25">
                        Developers
                    </a>
                    <a href="#"
                        class="tag rounded-full bg-info/10 text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25">
                        Repair
                    </a>
                    <a href="#"
                        class="tag rounded-full bg-info/10 text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25">
                        Billing
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-20">
            <div class="space-y-20">
                <div class="grid grid-cols-1 place-items-center gap-10 lg:grid-cols-2">
                    <div class="flex justify-center">
                        <img class="w-full max-w-xs" src="{{asset('images/illustrations/rocket.svg')}}" alt="image" />
                    </div>
                    <div class="w-full">
                        <h4 class="text-lg font-medium text-slate-700 dark:text-navy-100">
                            Getting Started
                        </h4>
                        <div x-data="{ expandedItem: 'item-1' }"
                            class="mt-3 flex w-full flex-col divide-y divide-indigo-400 overflow-hidden rounded-lg border border-primary dark:border-accent">
                            <div x-data="accordionItem('item-1')">
                                <div @click="expanded = !expanded"
                                    class="flex cursor-pointer items-center justify-between bg-primary px-4 py-4 text-base font-medium text-white dark:bg-accent sm:px-5">
                                    <p>Question 1</p>
                                    <div :class="expanded && '-rotate-180'"
                                        class="text-sm font-normal leading-none text-indigo-100 transition-transform duration-300">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div>
                                <div x-collapse x-show="expanded">
                                    <div class="px-4 py-4 sm:px-5">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Commodi earum magni officiis possimus
                                            repellendus. Accusantium adipisci aliquid praesentium
                                            quaerat voluptate.
                                        </p>
                                        <div class="mt-2 flex space-x-2">
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
                                    class="flex cursor-pointer items-center justify-between bg-primary px-4 py-4 text-base font-medium text-white dark:bg-accent sm:px-5">
                                    <p>Question 2</p>
                                    <div :class="expanded && '-rotate-180'"
                                        class="text-sm font-normal leading-none text-indigo-100 transition-transform duration-300">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div>
                                <div x-collapse x-show="expanded">
                                    <div class="px-4 py-4 sm:px-5">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Commodi earum magni officiis possimus
                                            repellendus. Accusantium adipisci aliquid praesentium
                                            quaerat voluptate.
                                        </p>
                                        <div class="mt-2 flex space-x-2">
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
                                    class="flex cursor-pointer items-center justify-between bg-primary px-4 py-4 text-base font-medium text-white dark:bg-accent sm:px-5">
                                    <p>Question 3</p>
                                    <div :class="expanded && '-rotate-180'"
                                        class="text-sm font-normal leading-none text-indigo-100 transition-transform duration-300">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div>
                                <div x-collapse x-show="expanded">
                                    <div class="px-4 py-4 sm:px-5">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Commodi earum magni officiis possimus
                                            repellendus. Accusantium adipisci aliquid praesentium
                                            quaerat voluptate.
                                        </p>
                                        <div class="mt-2 flex space-x-2">
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
                                    class="flex cursor-pointer items-center justify-between bg-primary px-4 py-4 text-base font-medium text-white dark:bg-accent sm:px-5">
                                    <p>Question 4</p>
                                    <div :class="expanded && '-rotate-180'"
                                        class="text-sm font-normal leading-none text-indigo-100 transition-transform duration-300">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div>
                                <div x-collapse x-show="expanded">
                                    <div class="px-4 py-4 sm:px-5">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Commodi earum magni officiis possimus
                                            repellendus. Accusantium adipisci aliquid praesentium
                                            quaerat voluptate.
                                        </p>
                                        <div class="mt-2 flex space-x-2">
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
                <div class="grid grid-cols-1 place-items-center gap-10 lg:grid-cols-2">
                    <div class="flex justify-center lg:order-last">
                        <img class="w-full max-w-xs" src="{{asset('images/illustrations/mobile-app.svg')}}" alt="image" />
                    </div>
                    <div class="w-full">
                        <h4 class="text-lg font-medium text-slate-700 dark:text-navy-100">
                            Mobile App
                        </h4>
                        <div x-data="{ expandedItem: 'item-1' }"
                            class="mt-3 flex w-full flex-col divide-y divide-yellow-400 overflow-hidden rounded-lg border border-warning">
                            <div x-data="accordionItem('item-1')">
                                <div @click="expanded = !expanded"
                                    class="flex cursor-pointer items-center justify-between bg-warning px-4 py-4 text-base font-medium text-white sm:px-5">
                                    <p>Question 1</p>
                                    <div :class="expanded && '-rotate-180'"
                                        class="text-sm font-normal leading-none text-yellow-100 transition-transform duration-300">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div>
                                <div x-collapse x-show="expanded">
                                    <div class="px-4 py-4 sm:px-5">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Commodi earum magni officiis possimus
                                            repellendus. Accusantium adipisci aliquid praesentium
                                            quaerat voluptate.
                                        </p>
                                        <div class="mt-2 flex space-x-2">
                                            <a href="#"
                                                class="tag rounded-full border border-warning text-warning">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="tag rounded-full border border-warning text-warning">
                                                Tag 2
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div x-data="accordionItem('item-2')">
                                <div @click="expanded = !expanded"
                                    class="flex cursor-pointer items-center justify-between bg-warning px-4 py-4 text-base font-medium text-white sm:px-5">
                                    <p>Question 2</p>
                                    <div :class="expanded && '-rotate-180'"
                                        class="text-sm font-normal leading-none text-yellow-100 transition-transform duration-300">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div>
                                <div x-collapse x-show="expanded">
                                    <div class="px-4 py-4 sm:px-5">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Commodi earum magni officiis possimus
                                            repellendus. Accusantium adipisci aliquid praesentium
                                            quaerat voluptate.
                                        </p>
                                        <div class="mt-2 flex space-x-2">
                                            <a href="#"
                                                class="tag rounded-full border border-warning text-warning">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="tag rounded-full border border-warning text-warning">
                                                Tag 2
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div x-data="accordionItem('item-3')">
                                <div @click="expanded = !expanded"
                                    class="flex cursor-pointer items-center justify-between bg-warning px-4 py-4 text-base font-medium text-white sm:px-5">
                                    <p>Question 3</p>
                                    <div :class="expanded && '-rotate-180'"
                                        class="text-sm font-normal leading-none text-yellow-100 transition-transform duration-300">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div>
                                <div x-collapse x-show="expanded">
                                    <div class="px-4 py-4 sm:px-5">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Commodi earum magni officiis possimus
                                            repellendus. Accusantium adipisci aliquid praesentium
                                            quaerat voluptate.
                                        </p>
                                        <div class="mt-2 flex space-x-2">
                                            <a href="#"
                                                class="tag rounded-full border border-warning text-warning">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="tag rounded-full border border-warning text-warning">
                                                Tag 2
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div x-data="accordionItem('item-4')">
                                <div @click="expanded = !expanded"
                                    class="flex cursor-pointer items-center justify-between bg-warning px-4 py-4 text-base font-medium text-white sm:px-5">
                                    <p>Question 4</p>
                                    <div :class="expanded && '-rotate-180'"
                                        class="text-sm font-normal leading-none text-yellow-100 transition-transform duration-300">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div>
                                <div x-collapse x-show="expanded">
                                    <div class="px-4 py-4 sm:px-5">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Commodi earum magni officiis possimus
                                            repellendus. Accusantium adipisci aliquid praesentium
                                            quaerat voluptate.
                                        </p>
                                        <div class="mt-2 flex space-x-2">
                                            <a href="#"
                                                class="tag rounded-full border border-warning text-warning">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="tag rounded-full border border-warning text-warning">
                                                Tag 2
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 place-items-center gap-10 lg:grid-cols-2">
                    <div class="flex justify-center">
                        <img class="w-full max-w-xs" src="{{asset('images/illustrations/credit-card.svg')}}" alt="image" />
                    </div>
                    <div class="w-full">
                        <h4 class="text-lg font-medium text-slate-700 dark:text-navy-100">
                            Payments
                        </h4>
                        <div x-data="{ expandedItem: 'item-1' }"
                            class="mt-3 flex w-full flex-col divide-y divide-sky-400 overflow-hidden rounded-lg border border-info">
                            <div x-data="accordionItem('item-1')">
                                <div @click="expanded = !expanded"
                                    class="flex cursor-pointer items-center justify-between bg-info px-4 py-4 text-base font-medium text-white sm:px-5">
                                    <p>Question 1</p>
                                    <div :class="expanded && '-rotate-180'"
                                        class="text-sm font-normal leading-none text-sky-100 transition-transform duration-300">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div>
                                <div x-collapse x-show="expanded">
                                    <div class="px-4 py-4 sm:px-5">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Commodi earum magni officiis possimus
                                            repellendus. Accusantium adipisci aliquid praesentium
                                            quaerat voluptate.
                                        </p>
                                        <div class="mt-2 flex space-x-2">
                                            <a href="#" class="tag rounded-full border border-info text-info">
                                                Tag 1
                                            </a>
                                            <a href="#" class="tag rounded-full border border-info text-info">
                                                Tag 2
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div x-data="accordionItem('item-2')">
                                <div @click="expanded = !expanded"
                                    class="flex cursor-pointer items-center justify-between bg-info px-4 py-4 text-base font-medium text-white sm:px-5">
                                    <p>Question 2</p>
                                    <div :class="expanded && '-rotate-180'"
                                        class="text-sm font-normal leading-none text-sky-100 transition-transform duration-300">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div>
                                <div x-collapse x-show="expanded">
                                    <div class="px-4 py-4 sm:px-5">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Commodi earum magni officiis possimus
                                            repellendus. Accusantium adipisci aliquid praesentium
                                            quaerat voluptate.
                                        </p>
                                        <div class="mt-2 flex space-x-2">
                                            <a href="#" class="tag rounded-full border border-info text-info">
                                                Tag 1
                                            </a>
                                            <a href="#" class="tag rounded-full border border-info text-info">
                                                Tag 2
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div x-data="accordionItem('item-3')">
                                <div @click="expanded = !expanded"
                                    class="flex cursor-pointer items-center justify-between bg-info px-4 py-4 text-base font-medium text-white sm:px-5">
                                    <p>Question 3</p>
                                    <div :class="expanded && '-rotate-180'"
                                        class="text-sm font-normal leading-none text-sky-100 transition-transform duration-300">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div>
                                <div x-collapse x-show="expanded">
                                    <div class="px-4 py-4 sm:px-5">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Commodi earum magni officiis possimus
                                            repellendus. Accusantium adipisci aliquid praesentium
                                            quaerat voluptate.
                                        </p>
                                        <div class="mt-2 flex space-x-2">
                                            <a href="#" class="tag rounded-full border border-info text-info">
                                                Tag 1
                                            </a>
                                            <a href="#" class="tag rounded-full border border-info text-info">
                                                Tag 2
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div x-data="accordionItem('item-4')">
                                <div @click="expanded = !expanded"
                                    class="flex cursor-pointer items-center justify-between bg-info px-4 py-4 text-base font-medium text-white sm:px-5">
                                    <p>Question 4</p>
                                    <div :class="expanded && '-rotate-180'"
                                        class="text-sm font-normal leading-none text-sky-100 transition-transform duration-300">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div>
                                <div x-collapse x-show="expanded">
                                    <div class="px-4 py-4 sm:px-5">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Commodi earum magni officiis possimus
                                            repellendus. Accusantium adipisci aliquid praesentium
                                            quaerat voluptate.
                                        </p>
                                        <div class="mt-2 flex space-x-2">
                                            <a href="#" class="tag rounded-full border border-info text-info">
                                                Tag 1
                                            </a>
                                            <a href="#" class="tag rounded-full border border-info text-info">
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
        </div>
    </main>
</x-app-layout>

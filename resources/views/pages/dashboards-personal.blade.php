<x-app-layout title="Personal Dashboard" is-header-blur="true">
    <!-- Main Content Wrapper -->
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="mt-4 grid grid-cols-12 gap-4 sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
            <div class="col-span-12 space-y-4 sm:space-y-5 lg:col-span-8 lg:space-y-6">
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-3 sm:gap-5 lg:gap-6">
                    <div class="card bg-gradient-to-r from-blue-500 to-indigo-600 px-5 pb-5">
                        <div>
                            <div class="ax-transparent-gridline mt-5 w-1/2">
                                <div x-init="$nextTick(() => {
                                    $el._x_chart = new ApexCharts($el, pages.charts.earningWhite);
                                    $el._x_chart.render()
                                });"></div>
                            </div>
                            <p class="mt-3 text-base font-medium tracking-wide text-indigo-100">
                                Earnings
                            </p>
                            <p class="mt-4 font-inter text-2xl font-semibold">
                                <span class="text-indigo-100">$</span>
                                <span class="text-white">31.313</span>
                            </p>
                            <div class="badge mt-2 rounded-full bg-black/20 text-indigo-50">
                                13 Members
                            </div>
                        </div>
                        <div class="absolute bottom-0 right-0 overflow-hidden rounded-lg">
                            <img class="w-24 translate-x-1/4 translate-y-1/4 opacity-50"
                                src="{{ asset('images/illustrations/the-dollar.svg') }}" alt="image" />
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-4 sm:col-span-2 sm:grid-cols-2 sm:gap-5 lg:gap-6">
                        <div class="card justify-center p-4.5">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-base font-semibold text-slate-700 dark:text-navy-100">
                                        56
                                    </p>
                                    <p class="line-clamp-1 text-xs+">Projects</p>
                                </div>
                                <div
                                    class="mask is-star flex h-10 w-10 shrink-0 items-center justify-center bg-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <div
                                    class="badge mt-2 space-x-1 bg-success/10 px-1.5 py-1 text-success dark:bg-success/15">
                                    <span>10%</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="card justify-center p-4.5">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-base font-semibold text-slate-700 dark:text-navy-100">
                                        324
                                    </p>
                                    <p class="line-clamp-1 text-xs+">Total hours</p>
                                </div>
                                <div class="mask is-star flex h-10 w-10 shrink-0 items-center justify-center bg-info">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <div
                                    class="badge mt-2 space-x-1 bg-success/10 px-1.5 py-1 text-success dark:bg-success/15">
                                    <span>6%</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="card justify-center p-4.5">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-base font-semibold text-slate-700 dark:text-navy-100">
                                        7
                                    </p>
                                    <p class="line-clamp-1 text-xs+">Support Ticket</p>
                                </div>
                                <div
                                    class="mask is-star flex h-10 w-10 shrink-0 items-center justify-center bg-secondary">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <div
                                    class="badge mt-2 space-x-1 bg-success/10 px-1.5 py-1 text-success dark:bg-success/15">
                                    <span>9%</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="card justify-center p-4.5">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-base font-semibold text-slate-700 dark:text-navy-100">
                                        56
                                    </p>
                                    <p class="line-clamp-1 text-xs+">Active Task</p>
                                </div>
                                <div
                                    class="mask is-star flex h-10 w-10 shrink-0 items-center justify-center bg-warning">
                                    <svg class="h-5 w-5 text-white" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.5293 18L20.9999 8.40002" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M3 13.2L7.23529 18L17.8235 6" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <div class="badge mt-2 space-x-1 bg-error/10 px-1.5 py-1 text-error dark:bg-error/15">
                                    <span>6%</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-between">
                        <h2 class="text-sm+ font-medium tracking-wide text-slate-700 dark:text-navy-100">
                            Ongoing Projects
                        </h2>
                        <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })" @click.outside="if(isShowPopper) isShowPopper = false"
                            class="inline-flex">
                            <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                                class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                            </button>

                            <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                                <div
                                    class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                                    <ul>
                                        <li>
                                            <a href="#"
                                                class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Action</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Another
                                                Action</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Something
                                                else</a>
                                        </li>
                                    </ul>
                                    <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                                    <ul>
                                        <li>
                                            <a href="#"
                                                class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Separated
                                                Link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 space-y-3.5">
                        <div class="card p-3">
                            <div class="flex items-center space-x-3">
                                <img class="h-10 w-10 rounded-lg object-cover object-center"
                                    src="{{ asset('images/illustrations/lms-ui.svg') }}" alt="image" />
                                <div class="flex-1">
                                    <div class="flex justify-between">
                                        <p class="font-medium text-slate-700 dark:text-navy-100">
                                            LMS App Design
                                        </p>
                                    </div>
                                    <div class="mt-0.5 flex text-xs text-slate-400 dark:text-navy-300">
                                        <p>Updated at 7 Sep</p>
                                        <div class="mx-2 my-1 hidden w-px bg-slate-200 dark:bg-navy-500 sm:flex"></div>

                                        <p class="hidden sm:flex">Deadline: 25.08.2020</p>
                                    </div>
                                </div>
                            </div>
                            <p class="-mt-3 text-right text-xs font-medium text-primary dark:text-accent-light">
                                24%
                            </p>
                            <div class="progress mt-2 h-1.5 bg-slate-150 dark:bg-navy-500">
                                <div
                                    class="is-active relative w-4/12 overflow-hidden rounded-full bg-primary dark:bg-accent">
                                </div>
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="flex items-center space-x-3">
                                <img class="h-10 w-10 rounded-lg object-cover object-center"
                                    src="{{ asset('images/illustrations/store-ui.svg') }}" alt="image" />
                                <div class="flex-1">
                                    <div class="flex justify-between">
                                        <p class="font-medium text-slate-700 dark:text-navy-100">
                                            Store Dashboard
                                        </p>
                                    </div>
                                    <div class="mt-0.5 flex text-xs text-slate-400 dark:text-navy-300">
                                        <p>Updated a hour ago</p>
                                        <div class="mx-2 my-1 hidden w-px bg-slate-200 dark:bg-navy-500 sm:flex"></div>

                                        <p class="hidden sm:flex">Deadline: 21.08.2020</p>
                                    </div>
                                </div>
                            </div>
                            <p class="-mt-3 text-right text-xs font-medium text-secondary dark:text-secondary-light">
                                56%
                            </p>

                            <div class="progress mt-2 h-1.5 bg-secondary/15 dark:bg-secondary-light/25">
                                <div class="w-6/12 rounded-full bg-secondary"></div>
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="flex items-center space-x-3">
                                <img class="h-10 w-10 rounded-lg object-cover object-center"
                                    src="{{ asset('images/illustrations/chat-ui.svg') }}" alt="image" />
                                <div class="flex-1">
                                    <div class="flex justify-between">
                                        <p class="font-medium text-slate-700 dark:text-navy-100">
                                            Chat Mobile App
                                        </p>
                                    </div>
                                    <div class="mt-0.5 flex text-xs text-slate-400 dark:text-navy-300">
                                        <p>Updated 3 days ago</p>
                                        <div class="mx-2 my-1 hidden w-px bg-slate-200 dark:bg-navy-500 sm:flex"></div>

                                        <p class="hidden sm:flex">Deadline: 16.09.2020</p>
                                    </div>
                                </div>
                            </div>
                            <p class="-mt-3 text-right text-xs font-medium text-warning">
                                64%
                            </p>

                            <div class="progress mt-2 h-1.5 bg-warning/15 dark:bg-warning/25">
                                <div class="w-7/12 rounded-full bg-warning"></div>
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="flex items-center space-x-3">
                                <img class="h-10 w-10 rounded-lg object-cover object-center"
                                    src="{{ asset('images/illustrations/nft.svg') }}" alt="image" />
                                <div class="flex-1">
                                    <div class="flex justify-between">
                                        <p class="font-medium text-slate-700 dark:text-navy-100">
                                            NFT Marketplace App
                                        </p>
                                    </div>
                                    <div class="mt-0.5 flex text-xs text-slate-400 dark:text-navy-300">
                                        <p>Updated a week ago</p>
                                        <div class="mx-2 my-1 hidden w-px bg-slate-200 dark:bg-navy-500 sm:flex"></div>

                                        <p class="hidden sm:flex">Deadline: 26.11.2020</p>
                                    </div>
                                </div>
                            </div>
                            <p class="-mt-3 text-right text-xs font-medium text-info">
                                14%
                            </p>

                            <div class="progress mt-2 h-1.5 bg-info/15 dark:bg-info/25">
                                <div class="w-2/12 rounded-full bg-info"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:gap-6">
                    <div class="card px-4 pb-4 sm:px-5">
                        <div class="my-3 flex h-8 items-center justify-between">
                            <h2 class="line-clamp-1 font-medium tracking-wide text-slate-700 dark:text-navy-100">
                                Contact List
                            </h2>

                            <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })" @click.outside="if(isShowPopper) isShowPopper = false"
                                class="inline-flex">
                                <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                                    class="btn -mr-1.5 h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                    </svg>
                                </button>

                                <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                                    <div
                                        class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                                        <ul>
                                            <li>
                                                <a href="#"
                                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Action</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Another
                                                    Action</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Something
                                                    else</a>
                                            </li>
                                        </ul>
                                        <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                                        <ul>
                                            <li>
                                                <a href="#"
                                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Separated
                                                    Link</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-3.5" x-data="{ expandedItem: 'item-1' }">
                            <div x-data="accordionItem('item-1')">
                                <div class="flex items-center justify-between">
                                    <div class="flex space-x-4">
                                        <div class="avatar h-10 w-10">
                                            <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                                                alt="avatar" />
                                        </div>
                                        <div>
                                            <h3 class="line-clamp-1 font-medium text-slate-700 dark:text-navy-100">
                                                Konnor Guzman
                                            </h3>
                                            <p class="mt-0.5 line-clamp-1 text-xs">
                                                (01) 22 888 4444
                                            </p>
                                        </div>
                                    </div>
                                    <button @click="expanded = !expanded"
                                        class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                        <i :class="expanded && '-rotate-180'"
                                            class="fas fa-chevron-down transition-transform"></i>
                                    </button>
                                </div>
                                <div x-show="expanded" x-collapse>
                                    <div class="flex justify-between pt-4">
                                        <button
                                            class="btn h-7 w-7 rounded-full bg-success/10 p-0 text-success hover:bg-success/20 focus:bg-success/20 active:bg-success/25">
                                            <i class="fa-solid fa-phone text-xs"></i>
                                        </button>
                                        <button
                                            class="btn h-7 w-7 rounded-full bg-warning/10 p-0 text-warning hover:bg-warning/20 focus:bg-warning/20 active:bg-warning/25">
                                            <i class="fa-solid fa-video text-xs"></i>
                                        </button>
                                        <button
                                            class="btn h-7 w-7 rounded-full bg-secondary/10 p-0 text-secondary hover:bg-secondary/20 focus:bg-secondary/20 active:bg-secondary/25 dark:bg-secondary-light/10 dark:text-secondary-light dark:hover:bg-secondary-light/20 dark:focus:bg-secondary-light/20 dark:active:bg-secondary-light/25">
                                            <i class="fa-regular fa-comment text-xs"></i>
                                        </button>
                                        <button
                                            class="btn h-7 w-7 rounded-full bg-info/10 p-0 text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25">
                                            <i class="fa-regular fa-envelope text-xs"></i>
                                        </button>
                                        <button
                                            class="btn h-7 w-7 rounded-full bg-slate-150 p-0 text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                            <i class="fa-solid fa-ellipsis fa-lg"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div x-data="accordionItem('item-2')">
                                <div class="flex items-center justify-between">
                                    <div class="flex space-x-4">
                                        <div class="avatar h-10 w-10">
                                            <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                                                alt="avatar" />
                                        </div>
                                        <div>
                                            <h3 class="line-clamp-1 font-medium text-slate-700 dark:text-navy-100">
                                                Alfredo Elliott
                                            </h3>
                                            <p class="mt-0.5 line-clamp-1 text-xs">
                                                (095)-800-8313
                                            </p>
                                        </div>
                                    </div>
                                    <button @click="expanded = !expanded"
                                        class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                        <i :class="expanded && '-rotate-180'"
                                            class="fas fa-chevron-down transition-transform"></i>
                                    </button>
                                </div>
                                <div x-show="expanded" x-collapse>
                                    <div class="flex justify-between pt-4">
                                        <button
                                            class="btn h-7 w-7 rounded-full bg-success/10 p-0 text-success hover:bg-success/20 focus:bg-success/20 active:bg-success/25">
                                            <i class="fa-solid fa-phone text-xs"></i>
                                        </button>
                                        <button
                                            class="btn h-7 w-7 rounded-full bg-warning/10 p-0 text-warning hover:bg-warning/20 focus:bg-warning/20 active:bg-warning/25">
                                            <i class="fa-solid fa-video text-xs"></i>
                                        </button>
                                        <button
                                            class="btn h-7 w-7 rounded-full bg-secondary/10 p-0 text-secondary hover:bg-secondary/20 focus:bg-secondary/20 active:bg-secondary/25 dark:bg-secondary-light/10 dark:text-secondary-light dark:hover:bg-secondary-light/20 dark:focus:bg-secondary-light/20 dark:active:bg-secondary-light/25">
                                            <i class="fa-regular fa-comment text-xs"></i>
                                        </button>
                                        <button
                                            class="btn h-7 w-7 rounded-full bg-info/10 p-0 text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25">
                                            <i class="fa-regular fa-envelope text-xs"></i>
                                        </button>
                                        <button
                                            class="btn h-7 w-7 rounded-full bg-slate-150 p-0 text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                            <i class="fa-solid fa-ellipsis fa-lg"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div x-data="accordionItem('item-3')">
                                <div class="flex items-center justify-between">
                                    <div class="flex space-x-4">
                                        <div class="avatar h-10 w-10">
                                            <div class="is-initial rounded-full bg-info text-sm+ uppercase text-white">
                                                ds
                                            </div>
                                        </div>
                                        <div>
                                            <h3 class="line-clamp-1 font-medium text-slate-700 dark:text-navy-100">
                                                Derrick Simmons
                                            </h3>
                                            <p class="mt-0.5 line-clamp-1 text-xs">
                                                (350)-813-3861
                                            </p>
                                        </div>
                                    </div>
                                    <button @click="expanded = !expanded"
                                        class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                        <i :class="expanded && '-rotate-180'"
                                            class="fas fa-chevron-down transition-transform"></i>
                                    </button>
                                </div>
                                <div x-show="expanded" x-collapse>
                                    <div class="flex justify-between pt-4">
                                        <button
                                            class="btn h-7 w-7 rounded-full bg-success/10 p-0 text-success hover:bg-success/20 focus:bg-success/20 active:bg-success/25">
                                            <i class="fa-solid fa-phone text-xs"></i>
                                        </button>
                                        <button
                                            class="btn h-7 w-7 rounded-full bg-warning/10 p-0 text-warning hover:bg-warning/20 focus:bg-warning/20 active:bg-warning/25">
                                            <i class="fa-solid fa-video text-xs"></i>
                                        </button>
                                        <button
                                            class="btn h-7 w-7 rounded-full bg-secondary/10 p-0 text-secondary hover:bg-secondary/20 focus:bg-secondary/20 active:bg-secondary/25 dark:bg-secondary-light/10 dark:text-secondary-light dark:hover:bg-secondary-light/20 dark:focus:bg-secondary-light/20 dark:active:bg-secondary-light/25">
                                            <i class="fa-regular fa-comment text-xs"></i>
                                        </button>
                                        <button
                                            class="btn h-7 w-7 rounded-full bg-info/10 p-0 text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25">
                                            <i class="fa-regular fa-envelope text-xs"></i>
                                        </button>
                                        <button
                                            class="btn h-7 w-7 rounded-full bg-slate-150 p-0 text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                            <i class="fa-solid fa-ellipsis fa-lg"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div x-data="accordionItem('item-4')">
                                <div class="flex items-center justify-between">
                                    <div class="flex space-x-4">
                                        <div class="avatar h-10 w-10">
                                            <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                                                alt="avatar" />
                                        </div>
                                        <div>
                                            <h3 class="line-clamp-1 font-medium text-slate-700 dark:text-navy-100">
                                                Henry Curtis
                                            </h3>
                                            <p class="mt-0.5 line-clamp-1 text-xs">
                                                (675)-975-0083
                                            </p>
                                        </div>
                                    </div>
                                    <button @click="expanded = !expanded"
                                        class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                        <i :class="expanded && '-rotate-180'"
                                            class="fas fa-chevron-down transition-transform"></i>
                                    </button>
                                </div>
                                <div x-show="expanded" x-collapse>
                                    <div class="flex justify-between pt-4">
                                        <button
                                            class="btn h-7 w-7 rounded-full bg-success/10 p-0 text-success hover:bg-success/20 focus:bg-success/20 active:bg-success/25">
                                            <i class="fa-solid fa-phone text-xs"></i>
                                        </button>
                                        <button
                                            class="btn h-7 w-7 rounded-full bg-warning/10 p-0 text-warning hover:bg-warning/20 focus:bg-warning/20 active:bg-warning/25">
                                            <i class="fa-solid fa-video text-xs"></i>
                                        </button>
                                        <button
                                            class="btn h-7 w-7 rounded-full bg-secondary/10 p-0 text-secondary hover:bg-secondary/20 focus:bg-secondary/20 active:bg-secondary/25 dark:bg-secondary-light/10 dark:text-secondary-light dark:hover:bg-secondary-light/20 dark:focus:bg-secondary-light/20 dark:active:bg-secondary-light/25">
                                            <i class="fa-regular fa-comment text-xs"></i>
                                        </button>
                                        <button
                                            class="btn h-7 w-7 rounded-full bg-info/10 p-0 text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25">
                                            <i class="fa-regular fa-envelope text-xs"></i>
                                        </button>
                                        <button
                                            class="btn h-7 w-7 rounded-full bg-slate-150 p-0 text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                            <i class="fa-solid fa-ellipsis fa-lg"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div x-data="accordionItem('item-5')">
                                <div class="flex items-center justify-between">
                                    <div class="flex space-x-4">
                                        <div class="avatar h-10 w-10">
                                            <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                                                alt="avatar" />
                                        </div>
                                        <div>
                                            <h3 class="line-clamp-1 font-medium text-slate-700 dark:text-navy-100">
                                                John Doe
                                            </h3>
                                            <p class="mt-0.5 line-clamp-1 text-xs">
                                                (727)-810-3880
                                            </p>
                                        </div>
                                    </div>
                                    <button @click="expanded = !expanded"
                                        class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                        <i :class="expanded && '-rotate-180'"
                                            class="fas fa-chevron-down transition-transform"></i>
                                    </button>
                                </div>
                                <div x-show="expanded" x-collapse>
                                    <div class="flex justify-between pt-4">
                                        <button
                                            class="btn h-7 w-7 rounded-full bg-success/10 p-0 text-success hover:bg-success/20 focus:bg-success/20 active:bg-success/25">
                                            <i class="fa-solid fa-phone text-xs"></i>
                                        </button>
                                        <button
                                            class="btn h-7 w-7 rounded-full bg-warning/10 p-0 text-warning hover:bg-warning/20 focus:bg-warning/20 active:bg-warning/25">
                                            <i class="fa-solid fa-video text-xs"></i>
                                        </button>
                                        <button
                                            class="btn h-7 w-7 rounded-full bg-secondary/10 p-0 text-secondary hover:bg-secondary/20 focus:bg-secondary/20 active:bg-secondary/25 dark:bg-secondary-light/10 dark:text-secondary-light dark:hover:bg-secondary-light/20 dark:focus:bg-secondary-light/20 dark:active:bg-secondary-light/25">
                                            <i class="fa-regular fa-comment text-xs"></i>
                                        </button>
                                        <button
                                            class="btn h-7 w-7 rounded-full bg-info/10 p-0 text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25">
                                            <i class="fa-regular fa-envelope text-xs"></i>
                                        </button>
                                        <button
                                            class="btn h-7 w-7 rounded-full bg-slate-150 p-0 text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                            <i class="fa-solid fa-ellipsis fa-lg"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card px-4 pb-4 sm:px-5">
                        <div class="my-3 flex h-8 items-center justify-between">
                            <h2 class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                                Recent Payments
                            </h2>
                            <a href="#"
                                class="border-b border-dotted border-current pb-0.5 text-xs+ font-medium text-primary outline-none transition-colors duration-300 hover:text-primary/70 focus:text-primary/70 dark:text-accent-light dark:hover:text-accent-light/70 dark:focus:text-accent-light/70">View
                                All</a>
                        </div>
                        <div class="space-y-3.5">
                            <div class="flex cursor-pointer items-center justify-between">
                                <div class="flex items-center space-x-3.5">
                                    <div class="avatar">
                                        <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                                            alt="avatar" />
                                    </div>
                                    <div>
                                        <p class="font-medium text-slate-700 dark:text-navy-100">
                                            Konnor Guzman
                                        </p>
                                        <p class="line-clamp-1 text-xs text-slate-400 dark:text-navy-300">
                                            Dec 21, 2021 - 08:05
                                        </p>
                                    </div>
                                </div>
                                <p class="font-medium text-slate-600 dark:text-navy-100">
                                    $660.22
                                </p>
                            </div>
                            <div class="flex cursor-pointer items-center justify-between">
                                <div class="flex items-center space-x-3.5">
                                    <div class="avatar">
                                        <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                                            alt="avatar" />
                                    </div>
                                    <div>
                                        <p class="font-medium text-slate-700 dark:text-navy-100">
                                            Henry Curtis
                                        </p>
                                        <p class="line-clamp-1 text-xs text-slate-400 dark:text-navy-300">
                                            Dec 19, 2021 - 11:55
                                        </p>
                                    </div>
                                </div>
                                <p class="font-medium text-slate-600 dark:text-navy-100">
                                    $33.63
                                </p>
                            </div>
                            <div class="flex cursor-pointer items-center justify-between">
                                <div class="flex items-center space-x-3.5">
                                    <div class="avatar">
                                        <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                                            alt="avatar" />
                                    </div>
                                    <div>
                                        <p class="font-medium text-slate-700 dark:text-navy-100">
                                            Derrick Simmons
                                        </p>
                                        <p class="line-clamp-1 text-xs text-slate-400 dark:text-navy-300">
                                            Dec 16, 2021 - 14:45
                                        </p>
                                    </div>
                                </div>
                                <p class="font-medium text-slate-600 dark:text-navy-100">
                                    $674.63
                                </p>
                            </div>
                            <div class="flex cursor-pointer items-center justify-between">
                                <div class="flex items-center space-x-3.5">
                                    <div class="avatar">
                                        <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                                            alt="avatar" />
                                    </div>
                                    <div>
                                        <p class="font-medium text-slate-700 dark:text-navy-100">
                                            Kartina West
                                        </p>
                                        <p class="line-clamp-1 text-xs text-slate-400 dark:text-navy-300">
                                            Dec 13, 2021 - 11:30
                                        </p>
                                    </div>
                                </div>
                                <p class="font-medium text-slate-600 dark:text-navy-100">
                                    $547.63
                                </p>
                            </div>
                            <div class="flex cursor-pointer items-center justify-between">
                                <div class="flex items-center space-x-3.5">
                                    <div class="avatar">
                                        <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                                            alt="avatar" />
                                    </div>
                                    <div>
                                        <p class="font-medium text-slate-700 dark:text-navy-100">
                                            Samantha Shelton
                                        </p>
                                        <p class="line-clamp-1 text-xs text-slate-400 dark:text-navy-300">
                                            Dec 10, 2021 - 09:41
                                        </p>
                                    </div>
                                </div>
                                <p class="font-medium text-slate-600 dark:text-navy-100">
                                    $736.24
                                </p>
                            </div>
                            <div class="flex cursor-pointer items-center justify-between">
                                <div class="flex items-center space-x-3.5">
                                    <div class="avatar">
                                        <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                                            alt="avatar" />
                                    </div>
                                    <div>
                                        <p class="font-medium text-slate-700 dark:text-navy-100">
                                            Joe Perkins
                                        </p>
                                        <p class="line-clamp-1 text-xs text-slate-400 dark:text-navy-300">
                                            Dec 06, 2021 - 11:41
                                        </p>
                                    </div>
                                </div>
                                <p class="font-medium text-slate-600 dark:text-navy-100">
                                    $736.24
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-4">
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-1 lg:gap-6">
                    <div class="card px-4 pb-4 sm:px-5">
                        <div class="my-3 flex h-8 items-center justify-between">
                            <h2 class="line-clamp-1 font-medium tracking-wide text-slate-700 dark:text-navy-100">
                                Client Messages
                            </h2>

                            <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })" @click.outside="if(isShowPopper) isShowPopper = false"
                                class="inline-flex">
                                <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                                    class="btn -mr-1.5 h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                    </svg>
                                </button>

                                <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                                    <div
                                        class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                                        <ul>
                                            <li>
                                                <a href="#"
                                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Action</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Another
                                                    Action</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Something
                                                    else</a>
                                            </li>
                                        </ul>
                                        <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                                        <ul>
                                            <li>
                                                <a href="#"
                                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Separated
                                                    Link</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div class="flex cursor-pointer items-center justify-between space-x-2">
                                <div class="flex items-center space-x-3">
                                    <div class="avatar">
                                        <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                                            alt="avatar" />
                                    </div>
                                    <div>
                                        <div class="flex items-center space-x-2">
                                            <p class="font-medium text-slate-700 dark:text-navy-100">
                                                Konnor Guzman
                                            </p>
                                            <div
                                                class="flex h-4.5 min-w-[1.125rem] items-center justify-center rounded-full bg-slate-200 px-1.5 text-tiny+ font-medium leading-none text-slate-800 dark:bg-navy-450 dark:text-white">
                                                5
                                            </div>
                                        </div>
                                        <p class="line-clamp-1 text-xs text-slate-400 dark:text-navy-300">
                                            Hello Erick. Lorem ipsum dolor sit amet, consectetur.
                                        </p>
                                    </div>
                                </div>
                                <a href="#"
                                    class="hover:text-primary focus:text-primary dark:hover:text-accent-light dark:focus:text-accent-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                            <div class="flex cursor-pointer items-center justify-between space-x-2">
                                <div class="flex items-center space-x-3">
                                    <div class="avatar">
                                        <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                                            alt="avatar" />
                                    </div>
                                    <div>
                                        <p class="font-medium text-slate-700 dark:text-navy-100">
                                            Travis Fuller
                                        </p>
                                        <p class="line-clamp-1 text-xs text-slate-400 dark:text-navy-300">
                                            Excepturi magni sequi voluptate.
                                        </p>
                                    </div>
                                </div>
                                <a href="#"
                                    class="hover:text-primary focus:text-primary dark:hover:text-accent-light dark:focus:text-accent-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                            <div class="flex cursor-pointer items-center justify-between space-x-2">
                                <div class="flex items-center space-x-3">
                                    <div class="avatar">
                                        <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                                            alt="avatar" />
                                    </div>
                                    <div>
                                        <p class="font-medium text-slate-700 dark:text-navy-100">
                                            Alfredo Elliott
                                        </p>
                                        <p class="line-clamp-1 text-xs text-slate-400 dark:text-navy-300">
                                            Adipisicing eli itaque!
                                        </p>
                                    </div>
                                </div>
                                <a href="#"
                                    class="hover:text-primary focus:text-primary dark:hover:text-accent-light dark:focus:text-accent-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                            <div class="flex cursor-pointer items-center justify-between space-x-2">
                                <div class="flex items-center space-x-3">
                                    <div class="avatar">
                                        <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                                            alt="avatar" />
                                    </div>
                                    <div>
                                        <p class="font-medium text-slate-700 dark:text-navy-100">
                                            Derrick Simmons
                                        </p>
                                        <p class="line-clamp-1 text-xs text-slate-400 dark:text-navy-300">
                                            Ad hic minus repudiandae.
                                        </p>
                                    </div>
                                </div>
                                <a href="#"
                                    class="hover:text-primary focus:text-primary dark:hover:text-accent-light dark:focus:text-accent-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="mt-3 flex h-8 items-center justify-between px-4 sm:px-5">
                            <h2 class="line-clamp-1 font-medium tracking-wide text-slate-700 dark:text-navy-100">
                                Income
                            </h2>

                            <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })" @click.outside="if(isShowPopper) isShowPopper = false"
                                class="inline-flex">
                                <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                                    class="btn -mr-1.5 h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                    </svg>
                                </button>

                                <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                                    <div
                                        class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                                        <ul>
                                            <li>
                                                <a href="#"
                                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Action</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Another
                                                    Action</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Something
                                                    else</a>
                                            </li>
                                        </ul>
                                        <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                                        <ul>
                                            <li>
                                                <a href="#"
                                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Separated
                                                    Link</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ax-transparent-gridline pr-2">
                            <div x-init="$nextTick(() => {
                                $el._x_chart = new ApexCharts($el, pages.charts.incomePersonal);
                                $el._x_chart.render()
                            });"></div>
                        </div>
                    </div>
                    <div class="card p-4">
                        <div class="space-y-1 text-center font-inter text-xs+">
                            <div class="flex items-center justify-between px-2 pb-4">
                                <p class="font-medium text-slate-700 dark:text-navy-100">
                                    January 2022
                                </p>
                                <div class="-mr-1.5 flex space-x-2">
                                    <button
                                        class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M15 19l-7-7 7-7" />
                                        </svg>
                                    </button>
                                    <button
                                        class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M9 5l7 7-7 7" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="grid grid-cols-7 pb-2">
                                <div class="text-tiny+ font-semibold text-primary dark:text-accent-light">
                                    SUN
                                </div>
                                <div class="text-tiny+ font-semibold text-primary dark:text-accent-light">
                                    MON
                                </div>
                                <div class="text-tiny+ font-semibold text-primary dark:text-accent-light">
                                    TUE
                                </div>
                                <div class="text-tiny+ font-semibold text-primary dark:text-accent-light">
                                    WED
                                </div>
                                <div class="text-tiny+ font-semibold text-primary dark:text-accent-light">
                                    THU
                                </div>
                                <div class="text-tiny+ font-semibold text-primary dark:text-accent-light">
                                    FRY
                                </div>
                                <div class="text-tiny+ font-semibold text-primary dark:text-accent-light">
                                    SAT
                                </div>
                            </div>
                            <div class="grid grid-cols-7 place-items-center">
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-400 hover:bg-primary/10 hover:text-primary dark:text-navy-300 dark:hover:bg-accent-light/10 dark:hover:text-accent-light">
                                    29
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-400 hover:bg-primary/10 hover:text-primary dark:text-navy-300 dark:hover:bg-accent-light/10 dark:hover:text-accent-light">
                                    30
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-400 hover:bg-primary/10 hover:text-primary dark:text-navy-300 dark:hover:bg-accent-light/10 dark:hover:text-accent-light">
                                    31
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light">
                                    1
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light">
                                    2
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light">
                                    3
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light">
                                    4
                                </button>
                            </div>
                            <div class="grid grid-cols-7 place-items-center">
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light">
                                    5
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light">
                                    6
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light">
                                    7
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light">
                                    8
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light">
                                    9
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light">
                                    10
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light">
                                    11
                                </button>
                            </div>
                            <div class="grid grid-cols-7 place-items-center">
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light">
                                    12
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light">
                                    13
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl font-medium text-primary hover:bg-primary/10 hover:text-primary dark:text-accent-light dark:hover:bg-accent-light/10 dark:hover:text-accent-light">
                                    14
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light">
                                    15
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light">
                                    16
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light">
                                    17
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light">
                                    18
                                </button>
                            </div>
                            <div class="grid grid-cols-7 place-items-center">
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light">
                                    19
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light">
                                    20
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light">
                                    21
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light">
                                    22
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light">
                                    23
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light">
                                    24
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light">
                                    25
                                </button>
                            </div>
                            <div class="grid grid-cols-7 place-items-center">
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light">
                                    26
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light">
                                    27
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light">
                                    28
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light">
                                    29
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light">
                                    30
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-400 hover:bg-primary/10 hover:text-primary dark:text-navy-300 dark:hover:bg-accent-light/10 dark:hover:text-accent-light">
                                    1
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-400 hover:bg-primary/10 hover:text-primary dark:text-navy-300 dark:hover:bg-accent-light/10 dark:hover:text-accent-light">
                                    2
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div>
                            <div class="swiper" x-init="$nextTick(() => $el._x_swiper = new Swiper($el, { pagination: { el: '.swiper-pagination', clickable: true } }))">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide p-4 sm:p-5">
                                        <div class="flex items-center justify-between">
                                            <a href="#"
                                                class="font-inter font-medium tracking-wide transition-colors hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100">
                                                @twitteraccount
                                            </a>

                                            <i class="fa-brands fa-twitter"></i>
                                        </div>
                                        <p class="mt-3 text-xs+">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Doloremque eaque iste libero neque.
                                        </p>
                                        <div class="mt-2 pb-5 text-xs">
                                            <a href="#"
                                                class="text-xs+ text-primary hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">#PHP
                                            </a>
                                            <a href="#"
                                                class="text-xs+ text-primary hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">#ReactJS
                                            </a>
                                            <a href="#"
                                                class="text-xs+ text-primary hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">#NextJS
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide p-4 sm:p-5">
                                        <div class="flex items-center justify-between">
                                            <a href="#"
                                                class="font-inter font-medium tracking-wide transition-colors hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100">
                                                @twitteraccount
                                            </a>

                                            <i class="fa-brands fa-twitter"></i>
                                        </div>
                                        <p class="mt-3 text-xs+">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Doloremque eaque iste libero neque.
                                        </p>
                                        <div class="mt-2 pb-5 text-xs">
                                            <a href="#"
                                                class="text-xs+ text-primary hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">#PHP
                                            </a>
                                            <a href="#"
                                                class="text-xs+ text-primary hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">#ReactJS
                                            </a>
                                            <a href="#"
                                                class="text-xs+ text-primary hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">#NextJS
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide p-4 sm:p-5">
                                        <div class="flex items-center justify-between">
                                            <a href="#"
                                                class="font-inter font-medium tracking-wide transition-colors hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100">
                                                @twitteraccount
                                            </a>

                                            <i class="fa-brands fa-twitter"></i>
                                        </div>
                                        <p class="mt-3 text-xs+">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Doloremque eaque iste libero neque.
                                        </p>
                                        <div class="mt-2 pb-5 text-xs">
                                            <a href="#"
                                                class="text-xs+ text-primary hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">#PHP
                                            </a>
                                            <a href="#"
                                                class="text-xs+ text-primary hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">#ReactJS
                                            </a>
                                            <a href="#"
                                                class="text-xs+ text-primary hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">#NextJS
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>

<x-app-layout title="Workspace Dashboard" is-header-blur="true">
    <!-- Main Content Wrapper -->
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="mt-5 flex items-center justify-between">
            <h3 class="text-lg font-medium text-slate-700 line-clamp-1 dark:text-navy-50">
                Workspaces Overview
            </h3>
            <div class="flex">
                <button
                    class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </button>
                <button
                    class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="mt-4 grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
            <div class="card group col-span-12 lg:col-span-7">
                <div class="mt-3 flex items-center justify-between px-4 sm:px-5">
                    <div class="flex flex-1 items-center justify-between space-x-2 sm:flex-initial">
                        <h2 class="text-sm+ font-medium tracking-wide text-slate-700 dark:text-navy-100">
                            Server traffic
                        </h2>
                        <div x-data="usePopper({ placement: 'bottom-start', offset: 4 })" @click.outside="if(isShowPopper) isShowPopper = false"
                            :class="!isShowPopper && 'sm:opacity-0'"
                            class="inline-flex focus-within:opacity-100 group-hover:opacity-100">
                            <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                                class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
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
                    <div class="hidden justify-between space-x-4 text-xs+ sm:flex" x-data="{ activeTab: 'tabAll' }">
                        <button @click="activeTab = 'tabRecent'" class="font-medium tracking-wide"
                            :class="activeTab === 'tabRecent' && 'text-primary dark:text-accent-light'">
                            Last 7 days
                        </button>
                        <button @click="activeTab = 'tabAll'" class="font-medium tracking-wide"
                            :class="activeTab === 'tabAll' && 'text-primary dark:text-accent-light'">
                            All time
                        </button>
                    </div>
                </div>
                <div class="ax-transparent-gridline pr-2">
                    <div x-init="$nextTick(() => {
                        $el._x_chart = new ApexCharts($el, pages.charts.serverTraffic);
                        $el._x_chart.render()
                    });"></div>
                </div>
            </div>
            <div class="order-first col-span-12 grid grid-cols-2 gap-4 sm:order-none sm:gap-5 lg:col-span-5 lg:gap-6">
                <div class="card row-span-2 justify-between py-5 px-2 text-center">
                    <p class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                        CPU Usage
                    </p>

                    <div class="ax-transparent-gridline pr-1">
                        <div x-init="$nextTick(() => {
                            $el._x_chart = new ApexCharts($el, pages.charts.cpuUsage);
                            $el._x_chart.render()
                        });"></div>
                    </div>

                    <p class="mt-4 text-xs+">
                        Daily usage is
                        <span class="font-medium text-slate-700 dark:text-navy-100">Good</span>
                    </p>
                </div>
                <div class="card justify-center p-4">
                    <div class="flex items-center space-x-3">
                        <div>
                            <div x-init="$nextTick(() => {
                                $el._x_chart = new ApexCharts($el, pages.charts.storageUsage);
                                $el._x_chart.render()
                            });"></div>
                        </div>
                        <div class="text-xs+ font-medium text-slate-700 dark:text-navy-100">
                            Storage Usage
                        </div>
                    </div>
                </div>
                <div class="card justify-center p-4">
                    <div class="flex items-center space-x-3">
                        <div>
                            <div x-init="$nextTick(() => {
                                $el._x_chart = new ApexCharts($el, pages.charts.memoryUsage);
                                $el._x_chart.render()
                            });"></div>
                        </div>
                        <div class="text-xs+ font-medium text-slate-700 dark:text-navy-100">
                            Memory Usage
                        </div>
                    </div>
                </div>
                <div class="card flex-row overflow-hidden">
                    <div class="h-full w-1 shrink-0 bg-primary dark:bg-accent"></div>
                    <div class="p-4 font-inter">
                        <div class="flex items-baseline space-x-2">
                            <p class="text-2xl font-semibold text-slate-700 dark:text-navy-100">
                                4.54
                            </p>
                            <p class="text-xs">/12 GB</p>
                        </div>
                        <p class="text-xs">Daily traffic</p>
                    </div>
                </div>
                <div class="card flex-row overflow-hidden">
                    <div class="h-full w-1 shrink-0 bg-info"></div>
                    <div class="p-4 font-inter">
                        <div class="flex items-baseline space-x-2">
                            <p class="text-2xl font-semibold text-slate-700 dark:text-navy-100">
                                14.54
                            </p>
                            <p class="text-xs">/12 GB</p>
                        </div>
                        <p class="text-xs">Hourly traffic</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4 sm:mt-5 lg:mt-6">
            <div class="flex items-center justify-between">
                <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                    Monitoring Workspaces
                </h2>
                <div class="flex">
                    <div class="flex items-center" x-data="{ isInputActive: false }">
                        <label class="block">
                            <input x-effect="isInputActive === true && $nextTick(() => { $el.focus()});"
                                :class="isInputActive ? 'w-32 lg:w-48' : 'w-0'"
                                class="form-input bg-transparent px-1 text-right transition-all duration-100 placeholder:text-slate-500 dark:placeholder:text-navy-200"
                                placeholder="Search here..." type="text" />
                        </label>
                        <button @click="isInputActive = !isInputActive"
                            class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                    </div>
                    <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })" @click.outside="if(isShowPopper) isShowPopper = false"
                        class="inline-flex">
                        <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                            class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
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
            </div>
            <div class="mt-3 grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-3 lg:gap-6">
                <div class="card space-y-6 p-4 sm:px-5">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-lg font-semibold uppercase text-primary dark:text-accent-light">
                                Id: 5988745
                            </p>
                        </div>
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
                    <div>
                        <p class="text-xs uppercase">Current Status</p>
                        <p class="text-base font-medium text-success">Up for 7 hours</p>
                    </div>
                    <div class="flex grow justify-between space-x-2">
                        <div>
                            <p class="text-xs+ text-slate-400 dark:text-navy-300">
                                Total Uptime
                            </p>
                            <p class="text-lg font-semibold text-slate-700 dark:text-navy-100">
                                96.4%
                            </p>
                        </div>
                        <div>
                            <p class="text-xs+ text-slate-400 dark:text-navy-300">
                                Response
                            </p>
                            <p class="text-lg font-semibold text-slate-700 dark:text-navy-100">
                                3.4 s
                            </p>
                        </div>
                        <div>
                            <p class="text-xs+ text-slate-400 dark:text-navy-300">
                                Memory
                            </p>
                            <p class="text-lg font-semibold text-slate-700 dark:text-navy-100">
                                14 GB
                            </p>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <div class="flex justify-between">
                            <p class="text-xs uppercase text-slate-400 dark:text-navy-300">
                                Country
                            </p>
                            <p class="text-xs uppercase text-slate-400 dark:text-navy-300">
                                traffic
                            </p>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <img class="h-6 w-6" src="{{ asset('images/flags/usa-round.svg') }}"
                                    alt="flag" />
                                <p class="font-medium text-slate-700 dark:text-navy-100">
                                    Unated States
                                </p>
                            </div>
                            <div class="font-inter">
                                <span class="text-right font-medium text-slate-700 dark:text-navy-100">4.5 GB</span>
                                <span class="text-xs">/8 GB</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <img class="h-6 w-6" src="{{ asset('images/flags/russia-round.svg') }}"
                                    alt="flag" />
                                <p class="font-medium text-slate-700 dark:text-navy-100">
                                    Russia
                                </p>
                            </div>
                            <div class="font-inter">
                                <span class="text-right font-medium text-slate-700 dark:text-navy-100">6.22 GB</span>
                                <span class="text-xs">/12 GB</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap space-x-2">
                        <div class="badge bg-info/10 text-info dark:bg-info/15">
                            195.161.66.25
                        </div>
                        <div class="badge bg-info/10 text-info dark:bg-info/15">
                            215.122.127.155
                        </div>
                    </div>
                </div>
                <div class="card space-y-6 p-4 sm:px-5">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-lg font-semibold uppercase text-primary dark:text-accent-light">
                                Id: 6518869
                            </p>
                        </div>
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
                    <div>
                        <p class="text-xs uppercase">Current Status</p>
                        <p class="text-base font-medium text-success">Up for 2 hours</p>
                    </div>
                    <div class="flex grow justify-between space-x-2">
                        <div>
                            <p class="text-xs+ text-slate-400 dark:text-navy-300">
                                Total Uptime
                            </p>
                            <p class="text-lg font-semibold text-slate-700 dark:text-navy-100">
                                98.2%
                            </p>
                        </div>
                        <div>
                            <p class="text-xs+ text-slate-400 dark:text-navy-300">
                                Response
                            </p>
                            <p class="text-lg font-semibold text-slate-700 dark:text-navy-100">
                                4.3 s
                            </p>
                        </div>
                        <div>
                            <p class="text-xs+ text-slate-400 dark:text-navy-300">
                                Memory
                            </p>
                            <p class="text-lg font-semibold text-slate-700 dark:text-navy-100">
                                22 GB
                            </p>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <div class="flex justify-between">
                            <p class="text-xs uppercase text-slate-400 dark:text-navy-300">
                                Country
                            </p>
                            <p class="text-xs uppercase text-slate-400 dark:text-navy-300">
                                traffic
                            </p>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <img class="h-6 w-6" src="{{ asset('images/flags/australia-round.svg') }}"
                                    alt="flag" />
                                <p class="font-medium text-slate-700 dark:text-navy-100">
                                    Australia
                                </p>
                            </div>
                            <div class="font-inter">
                                <span class="text-right font-medium text-slate-700 dark:text-navy-100">3.76 GB</span>
                                <span class="text-xs">/5 GB</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <img class="h-6 w-6" src="{{ asset('images/flags/united-kingdom-round.svg') }}"
                                    alt="flag" />
                                <p class="font-medium text-slate-700 dark:text-navy-100">
                                    UK
                                </p>
                            </div>
                            <div class="font-inter">
                                <span class="text-right font-medium text-slate-700 dark:text-navy-100">6.65 GB</span>
                                <span class="text-xs">/10 GB</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap space-x-2">
                        <div class="badge bg-info/10 text-info dark:bg-info/15">
                            195.161.66.25
                        </div>
                        <div class="badge bg-info/10 text-info dark:bg-info/15">
                            215.122.127.155
                        </div>
                    </div>
                </div>
                <div class="card space-y-6 p-4 sm:px-5">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-lg font-semibold uppercase text-primary dark:text-accent-light">
                                Id: 3591458
                            </p>
                        </div>
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
                    <div>
                        <p class="text-xs uppercase">Current Status</p>
                        <p class="text-base font-medium text-warning">
                            Down for 22 minutes
                        </p>
                    </div>
                    <div class="flex grow justify-between space-x-2">
                        <div>
                            <p class="text-xs+ text-slate-400 dark:text-navy-300">
                                Total Uptime
                            </p>
                            <p class="text-lg font-semibold text-slate-700 dark:text-navy-100">
                                95.7%
                            </p>
                        </div>
                        <div>
                            <p class="text-xs+ text-slate-400 dark:text-navy-300">
                                Response
                            </p>
                            <p class="text-lg font-semibold text-slate-700 dark:text-navy-100">
                                2.1 s
                            </p>
                        </div>
                        <div>
                            <p class="text-xs+ text-slate-400 dark:text-navy-300">
                                Memory
                            </p>
                            <p class="text-lg font-semibold text-slate-700 dark:text-navy-100">
                                6 GB
                            </p>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <div class="flex justify-between">
                            <p class="text-xs uppercase text-slate-400 dark:text-navy-300">
                                Country
                            </p>
                            <p class="text-xs uppercase text-slate-400 dark:text-navy-300">
                                traffic
                            </p>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <img class="h-6 w-6" src="{{ asset('images/flags/brazil-round.svg') }}"
                                    alt="flag" />
                                <p class="font-medium text-slate-700 dark:text-navy-100">
                                    Brazil
                                </p>
                            </div>
                            <div class="font-inter">
                                <span class="text-right font-medium text-slate-700 dark:text-navy-100">6.1 GB</span>
                                <span class="text-xs">/20 GB</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <img class="h-6 w-6" src="{{ asset('images/flags/spain-round.svg') }}"
                                    alt="flag" />
                                <p class="font-medium text-slate-700 dark:text-navy-100">
                                    Spain
                                </p>
                            </div>
                            <div class="font-inter">
                                <span class="text-right font-medium text-slate-700 dark:text-navy-100">5.02 GB</span>
                                <span class="text-xs">/10 GB</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap space-x-2">
                        <div class="badge bg-info/10 text-info dark:bg-info/15">
                            195.161.66.25
                        </div>
                        <div class="badge bg-info/10 text-info dark:bg-info/15">
                            215.122.127.155
                        </div>
                    </div>
                </div>
                <div class="card space-y-6 p-4 sm:px-5">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-lg font-semibold uppercase text-primary dark:text-accent-light">
                                Id: 9462157
                            </p>
                        </div>
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
                    <div>
                        <p class="text-xs uppercase">Current Status</p>
                        <p class="text-base font-medium text-success">
                            Up for 48 hours
                        </p>
                    </div>
                    <div class="flex grow justify-between space-x-2">
                        <div>
                            <p class="text-xs+ text-slate-400 dark:text-navy-300">
                                Total Uptime
                            </p>
                            <p class="text-lg font-semibold text-slate-700 dark:text-navy-100">
                                98.7%
                            </p>
                        </div>
                        <div>
                            <p class="text-xs+ text-slate-400 dark:text-navy-300">
                                Response
                            </p>
                            <p class="text-lg font-semibold text-slate-700 dark:text-navy-100">
                                1.7 s
                            </p>
                        </div>
                        <div>
                            <p class="text-xs+ text-slate-400 dark:text-navy-300">
                                Memory
                            </p>
                            <p class="text-lg font-semibold text-slate-700 dark:text-navy-100">
                                9 GB
                            </p>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <div class="flex justify-between">
                            <p class="text-xs uppercase text-slate-400 dark:text-navy-300">
                                Country
                            </p>
                            <p class="text-xs uppercase text-slate-400 dark:text-navy-300">
                                traffic
                            </p>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <img class="h-6 w-6" src="{{ asset('images/flags/india-round.svg') }}"
                                    alt="flag" />
                                <p class="font-medium text-slate-700 dark:text-navy-100">
                                    India
                                </p>
                            </div>
                            <div class="font-inter">
                                <span class="text-right font-medium text-slate-700 dark:text-navy-100">4.5 GB</span>
                                <span class="text-xs">/12 GB</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <img class="h-6 w-6" src="{{ asset('images/flags/russia-round.svg') }}"
                                    alt="flag" />
                                <p class="font-medium text-slate-700 dark:text-navy-100">
                                    Russia
                                </p>
                            </div>
                            <div class="font-inter">
                                <span class="text-right font-medium text-slate-700 dark:text-navy-100">6.2 GB</span>
                                <span class="text-xs">/8 GB</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap space-x-2">
                        <div class="badge bg-info/10 text-info dark:bg-info/15">
                            195.161.66.25
                        </div>
                        <div class="badge bg-info/10 text-info dark:bg-info/15">
                            215.122.127.155
                        </div>
                    </div>
                </div>
                <div class="card space-y-6 p-4 sm:px-5">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-lg font-semibold uppercase text-primary dark:text-accent-light">
                                Id: 6517997
                            </p>
                        </div>
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
                    <div>
                        <p class="text-xs uppercase">Current Status</p>
                        <p class="text-base font-medium text-warning">
                            Down for 6 minutes
                        </p>
                    </div>
                    <div class="flex grow justify-between space-x-2">
                        <div>
                            <p class="text-xs+ text-slate-400 dark:text-navy-300">
                                Total Uptime
                            </p>
                            <p class="text-lg font-semibold text-slate-700 dark:text-navy-100">
                                95.43%
                            </p>
                        </div>
                        <div>
                            <p class="text-xs+ text-slate-400 dark:text-navy-300">
                                Response
                            </p>
                            <p class="text-lg font-semibold text-slate-700 dark:text-navy-100">
                                4.65 s
                            </p>
                        </div>
                        <div>
                            <p class="text-xs+ text-slate-400 dark:text-navy-300">
                                Memory
                            </p>
                            <p class="text-lg font-semibold text-slate-700 dark:text-navy-100">
                                12 GB
                            </p>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <div class="flex justify-between">
                            <p class="text-xs uppercase text-slate-400 dark:text-navy-300">
                                Country
                            </p>
                            <p class="text-xs uppercase text-slate-400 dark:text-navy-300">
                                traffic
                            </p>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <img class="h-6 w-6" src="{{ asset('images/flags/china-round.svg') }}"
                                    alt="flag" />
                                <p class="font-medium text-slate-700 dark:text-navy-100">
                                    China
                                </p>
                            </div>
                            <div class="font-inter">
                                <span class="text-right font-medium text-slate-700 dark:text-navy-100">6.6 GB</span>
                                <span class="text-xs">/10 GB</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <img class="h-6 w-6" src="{{ asset('images/flags/usa-round.svg') }}"
                                    alt="flag" />
                                <p class="font-medium text-slate-700 dark:text-navy-100">
                                    United States
                                </p>
                            </div>
                            <div class="font-inter">
                                <span class="text-right font-medium text-slate-700 dark:text-navy-100">9.9 GB</span>
                                <span class="text-xs">/11 GB</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap space-x-2">
                        <div class="badge bg-info/10 text-info dark:bg-info/15">
                            195.161.66.25
                        </div>
                        <div class="badge bg-info/10 text-info dark:bg-info/15">
                            215.122.127.155
                        </div>
                    </div>
                </div>
                <div class="card space-y-6 p-4 sm:px-5">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-lg font-semibold uppercase text-primary dark:text-accent-light">
                                Id: 7958652
                            </p>
                        </div>
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
                    <div>
                        <p class="text-xs uppercase">Current Status</p>
                        <p class="text-base font-medium text-success">Up for 2 hours</p>
                    </div>
                    <div class="flex grow justify-between space-x-2">
                        <div>
                            <p class="text-xs+ text-slate-400 dark:text-navy-300">
                                Total Uptime
                            </p>
                            <p class="text-lg font-semibold text-slate-700 dark:text-navy-100">
                                97.27%
                            </p>
                        </div>
                        <div>
                            <p class="text-xs+ text-slate-400 dark:text-navy-300">
                                Response
                            </p>
                            <p class="text-lg font-semibold text-slate-700 dark:text-navy-100">
                                3.88 s
                            </p>
                        </div>
                        <div>
                            <p class="text-xs+ text-slate-400 dark:text-navy-300">
                                Memory
                            </p>
                            <p class="text-lg font-semibold text-slate-700 dark:text-navy-100">
                                10 GB
                            </p>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <div class="flex justify-between">
                            <p class="text-xs uppercase text-slate-400 dark:text-navy-300">
                                Country
                            </p>
                            <p class="text-xs uppercase text-slate-400 dark:text-navy-300">
                                traffic
                            </p>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <img class="h-6 w-6" src="{{ asset('images/flags/italy-round.svg') }}"
                                    alt="flag" />
                                <p class="font-medium text-slate-700 dark:text-navy-100">
                                    Italy
                                </p>
                            </div>
                            <div class="font-inter">
                                <span class="text-right font-medium text-slate-700 dark:text-navy-100">14.5 GB</span>
                                <span class="text-xs">/20 GB</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <img class="h-6 w-6" src="{{ asset('images/flags/switzerland-round.svg') }}"
                                    alt="flag" />
                                <p class="font-medium text-slate-700 dark:text-navy-100">
                                    Switzerland
                                </p>
                            </div>
                            <div class="font-inter">
                                <span class="text-right font-medium text-slate-700 dark:text-navy-100">9.4 GB</span>
                                <span class="text-xs">/16 GB</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap space-x-2">
                        <div class="badge bg-info/10 text-info dark:bg-info/15">
                            195.161.66.25
                        </div>
                        <div class="badge bg-info/10 text-info dark:bg-info/15">
                            215.122.127.155
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>

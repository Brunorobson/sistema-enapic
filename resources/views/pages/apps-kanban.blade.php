<x-base-layout title="Kanban Board" is-sidebar-open="true" has-min-sidebar="true">
    <!-- Sidebar -->
    <div class="sidebar print:hidden">
        <!-- Main Sidebar -->
        <x-app-partials.main-sidebar></x-app-partials.main-sidebar>

        <!-- Sidebar Panel -->
        <div class="sidebar-panel">
            <div class="flex h-full grow flex-col bg-white pl-[var(--main-sidebar-width)] dark:bg-navy-750">
                <!-- Sidebar Panel Header -->
                <div class="flex h-18 w-full items-center justify-between pl-4 pr-1">
                    <div class="flex items-center">
                        <div class="avatar mr-3 hidden h-9 w-9 lg:flex">
                            <div class="is-initial rounded-full bg-success/10 text-success">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                                </svg>
                            </div>
                        </div>
                        <p class="text-lg font-medium tracking-wider text-slate-800 line-clamp-1 dark:text-navy-100">
                            Kanban Board
                        </p>
                    </div>
                    <button @click="$store.global.isSidebarExpanded = false"
                        class="btn h-7 w-7 rounded-full p-0 text-primary hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:text-accent-light/80 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 xl:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                </div>

                <!-- Sidebar Panel Body -->
                <div class="flex h-[calc(100%-4.5rem)] grow flex-col">
                    <div class="is-scrollbar-hidden grow overflow-y-auto">
                        <div class="mt-2 px-4">
                            <button
                                class="btn w-full space-x-2 rounded-full border border-slate-200 py-2 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-500 dark:text-navy-50 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                                </svg>
                                <span> My Plan </span>
                            </button>
                        </div>
                        <div class="mt-4 flex items-center justify-between px-4">
                            <span class="text-xs font-medium uppercase">BOARDS</span>
                            <div class="-mr-1.5 flex">
                                <button
                                    class="btn h-6 w-6 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                                    </svg>
                                </button>
                                <button
                                    class="btn h-6 w-6 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <ul class="mt-1 space-y-1.5 px-2 font-inter text-xs+ font-medium">
                            <li>
                                <a class="group flex justify-between space-x-2 rounded-lg p-2 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 focus:bg-slate-100 dark:text-navy-100 dark:hover:bg-navy-600 dark:focus:bg-navy-600"
                                    href="#">
                                    <span class="text-slate-800 dark:text-navy-100">Ecommerce App</span>

                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5 text-error"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a class="group flex justify-between space-x-2 rounded-lg bg-primary/10 p-2 tracking-wide text-primary outline-none transition-all dark:bg-accent-light/10 dark:text-accent-light"
                                    href="#">
                                    <span>Banking App</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5 text-error"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a class="group flex justify-between space-x-2 rounded-lg p-2 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 focus:bg-slate-100 dark:text-navy-100 dark:hover:bg-navy-600 dark:focus:bg-navy-600"
                                    href="#">
                                    <span class="text-slate-800 dark:text-navy-100">LMS App</span>
                                </a>
                            </li>
                        </ul>
                        <div class="my-4 mx-4 h-px bg-slate-200 dark:bg-navy-500"></div>
                        <div x-data="{ expanded: true }">
                            <div class="flex items-center justify-between px-4">
                                <span class="text-xs font-medium uppercase">Workspace</span>
                                <div class="-mr-1.5 flex">
                                    <button
                                        class="btn h-6 w-6 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 4v16m8-8H4" />
                                        </svg>
                                    </button>
                                    <button @click="expanded =! expanded"
                                        class="btn h-6 w-6 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-3.5 w-3.5 transition-transform" :class="expanded && 'rotate-180'"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div x-show="expanded" x-collapse>
                                <ul class="space-y-1.5 px-2 pt-1 font-inter text-xs+ font-medium">
                                    <li>
                                        <a class="group flex justify-between space-x-2 rounded-lg p-2 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 focus:bg-slate-100 dark:text-navy-100 dark:hover:bg-navy-600 dark:focus:bg-navy-600"
                                            href="#">
                                            <div class="flex items-center space-x-2">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-4.5 w-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5"
                                                        d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                                </svg>
                                                <span class="text-slate-800 dark:text-navy-100">Inbox</span>
                                            </div>
                                            <span class="text-primary dark:text-accent-light">2</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="group flex justify-between space-x-2 rounded-lg p-2 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 focus:bg-slate-100 dark:text-navy-100 dark:hover:bg-navy-600 dark:focus:bg-navy-600"
                                            href="#">
                                            <div class="flex items-center space-x-2">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-4.5 w-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5"
                                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                                </svg>
                                                <span class="text-slate-800 dark:text-navy-100">Important</span>
                                            </div>
                                            <span class="text-primary dark:text-accent-light">1</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="group flex justify-between space-x-2 rounded-lg p-2 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 focus:bg-slate-100 dark:text-navy-100 dark:hover:bg-navy-600 dark:focus:bg-navy-600"
                                            href="#">
                                            <div class="flex items-center space-x-2">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-4.5 w-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5"
                                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                                </svg>
                                                <span class="text-slate-800 dark:text-navy-100">Members</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="group flex justify-between space-x-2 rounded-lg p-2 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 focus:bg-slate-100 dark:text-navy-100 dark:hover:bg-navy-600 dark:focus:bg-navy-600"
                                            href="#">
                                            <div class="flex items-center space-x-2">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-4.5 w-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5"
                                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                </svg>
                                                <span class="text-slate-800 dark:text-navy-100">Setting</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="group flex justify-between space-x-2 rounded-lg p-2 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 focus:bg-slate-100 dark:text-navy-100 dark:hover:bg-navy-600 dark:focus:bg-navy-600"
                                            href="#">
                                            <div class="flex items-center space-x-2">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-4.5 w-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5"
                                                        d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                </svg>
                                                <span class="text-slate-800 dark:text-navy-100">Timetable</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-between p-4">
                        <button
                            class="btn h-11 w-full justify-between bg-gradient-to-r from-purple-500 to-indigo-600 text-white">
                            <span> Upgrade to Pro </span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Minimized Sidebar Panel -->
        <div class="sidebar-panel-min">
            <div class="flex h-full flex-col items-center bg-white dark:bg-navy-750">
                <div class="flex h-18 shrink-0 items-center justify-center">
                    <div class="avatar flex h-10 w-10 rounded-full bg-success/10 text-success">
                        <div class="is-initial">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                xmlns="http://www.w3.org/2000/svg" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="flex h-[calc(100%-4.5rem)] grow flex-col">
                    <div class="is-scrollbar-hidden flex grow flex-col overflow-y-auto">
                        <ul class="mt-4 space-y-1">
                            <li>
                                <a href="#"
                                    class="btn h-10 w-10 p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="btn h-10 w-10 p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                        <div class="my-4 h-px bg-slate-200 dark:bg-navy-500"></div>
                        <ul class="space-y-1">
                            <li>
                                <a href="#"
                                    class="btn relative h-10 w-10 p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <div
                                        class="absolute top-0 right-0 flex h-4 min-w-[1rem] items-center justify-center rounded-full bg-primary px-1 text-tiny font-medium leading-none text-white dark:bg-accent">
                                        2
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="btn relative h-10 w-10 p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <div
                                        class="absolute top-0 right-0 flex h-4 min-w-[1rem] items-center justify-center rounded-full bg-primary px-1 text-tiny font-medium leading-none text-white dark:bg-accent">
                                        1
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="btn h-10 w-10 p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="btn h-10 w-10 p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="btn h-10 w-10 p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="py-3">
                        <div x-data="usePopper({ placement: 'right-start', offset: 4 })" @click.outside="if(isShowPopper) isShowPopper = false"
                            class="inline-flex">
                            <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                                class="btn h-10 w-10 rounded-full border border-slate-200 p-0 font-medium hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-500 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                            </button>

                            <template x-teleport="#x-teleport-target">
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
                            </template>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- App Header -->
    <x-app-partials.header></x-app-partials.header>

    <!-- Mobile Searchbar -->
    <x-app-partials.mobile-searchbar></x-app-partials.mobile-searchbar>

    <!-- Main Content Wrapper -->
    <main class="main-content kanban-app w-full">
        <div
            class="flex items-center justify-between space-x-2 px-[var(--margin-x)] py-5 transition-all duration-[.25s]">
            <div class="flex items-center space-x-1">
                <h3 class="text-lg font-medium text-slate-700 line-clamp-1 dark:text-navy-50">
                    Banking App
                </h3>
                <button
                    class="btn hidden h-8 w-8 rounded-full p-0 font-medium text-error hover:bg-error/20 focus:bg-error/20 active:bg-error/25 sm:inline-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </button>
            </div>
            <label class="relative hidden w-full max-w-[16rem] sm:flex">
                <input
                    class="form-input peer h-8 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 text-xs+ placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Search on boards" type="text" />
                <span
                    class="pointer-events-none absolute flex h-full w-9 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-colors duration-200"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M3.316 13.781l.73-.171-.73.171zm0-5.457l.73.171-.73-.171zm15.473 0l.73-.171-.73.171zm0 5.457l.73.171-.73-.171zm-5.008 5.008l-.171-.73.171.73zm-5.457 0l-.171.73.171-.73zm0-15.473l-.171-.73.171.73zm5.457 0l.171-.73-.171.73zM20.47 21.53a.75.75 0 101.06-1.06l-1.06 1.06zM4.046 13.61a11.198 11.198 0 010-5.115l-1.46-.342a12.698 12.698 0 000 5.8l1.46-.343zm14.013-5.115a11.196 11.196 0 010 5.115l1.46.342a12.698 12.698 0 000-5.8l-1.46.343zm-4.45 9.564a11.196 11.196 0 01-5.114 0l-.342 1.46c1.907.448 3.892.448 5.8 0l-.343-1.46zM8.496 4.046a11.198 11.198 0 015.115 0l.342-1.46a12.698 12.698 0 00-5.8 0l.343 1.46zm0 14.013a5.97 5.97 0 01-4.45-4.45l-1.46.343a7.47 7.47 0 005.568 5.568l.342-1.46zm5.457 1.46a7.47 7.47 0 005.568-5.567l-1.46-.342a5.97 5.97 0 01-4.45 4.45l.342 1.46zM13.61 4.046a5.97 5.97 0 014.45 4.45l1.46-.343a7.47 7.47 0 00-5.568-5.567l-.342 1.46zm-5.457-1.46a7.47 7.47 0 00-5.567 5.567l1.46.342a5.97 5.97 0 014.45-4.45l-.343-1.46zm8.652 15.28l3.665 3.664 1.06-1.06-3.665-3.665-1.06 1.06z" />
                    </svg>
                </span>
            </label>
            <div class="flex space-x-1">
                <div class="flex -space-x-2">
                    <div class="avatar h-6 w-6 hover:z-10 sm:h-8 sm:w-8">
                        <img class="rounded-full border-2 border-slate-50 dark:border-navy-900"
                            src="{{ asset('images/100x100.png') }}" alt="avatar" />
                    </div>
                    <div class="avatar h-6 w-6 hover:z-10 sm:h-8 sm:w-8">
                        <img class="rounded-full border-2 border-slate-50 dark:border-navy-900"
                            src="{{ asset('images/100x100.png') }}" alt="avatar" />
                    </div>
                    <div class="avatar h-6 w-6 hover:z-10 sm:h-8 sm:w-8">
                        <img class="rounded-full border-2 border-slate-50 dark:border-navy-900"
                            src="{{ asset('images/100x100.png') }}" alt="avatar" />
                    </div>
                    <div class="avatar hidden h-6 w-6 hover:z-10 sm:inline-flex sm:h-8 sm:w-8">
                        <img class="rounded-full border-2 border-slate-50 dark:border-navy-900"
                            src="{{ asset('images/100x100.png') }}" alt="avatar" />
                    </div>
                    <div class="avatar h-6 w-6 sm:h-8 sm:w-8">
                        <div
                            class="is-initial rounded-full border-2 border-slate-50 bg-info text-xs uppercase text-white dark:border-navy-900">
                            +5
                        </div>
                    </div>
                </div>
                <button
                    class="btn h-6 w-6 rounded-full p-0 font-medium text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25 sm:h-8 sm:w-8">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                    </svg>
                </button>
                <div class="my-1 w-px bg-slate-200 dark:bg-navy-500"></div>
                <div class="flex">
                    <button
                        class="btn h-6 w-6 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:hidden sm:h-8 sm:w-8">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>

                    <button
                        class="btn h-6 w-6 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:h-8 sm:w-8">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                        </svg>
                    </button>

                    <button x-data="{ isImportant: true }" @click="isImportant =! isImportant"
                        class="btn hidden h-6 w-6 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:inline-flex sm:h-8 sm:w-8">
                        <svg x-show="!isImportant" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                        <svg x-show="isImportant" xmlns="http://www.w3.org/2000/svg"
                            class="h-5.5 w-5.5 text-primary dark:text-accent" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </button>

                    <button @click="$dispatch('show-drawer', { drawerId: 'kanban-setting-drawer' })"
                        class="btn h-6 w-6 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:h-8 sm:w-8">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="flex h-[calc(100vh-8.5rem)] flex-grow flex-col">
            <div x-init="Sortable.create($el, {
                animation: 200,
                easing: 'cubic-bezier(0, 0, 0.2, 1)',
                delay: 150,
                delayOnTouchOnly: true,
                draggable: '.board-draggable',
                handle: '.board-draggable-handler'
            })"
                class="kanban-scrollbar flex w-full items-start space-x-4 overflow-x-auto overflow-y-hidden px-[var(--margin-x)] transition-all duration-[.25s]">
                <div class="board-draggable relative flex max-h-full w-72 shrink-0 flex-col">
                    <div class="board-draggable-handler flex items-center justify-between px-0.5 pb-3">
                        <div class="flex items-center space-x-2">
                            <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-info/10 text-info">
                                <i class="fa fa-spinner text-base"></i>
                            </div>
                            <h3 class="text-base text-slate-700 dark:text-navy-100">
                                In Progress
                            </h3>
                        </div>

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

                            <template x-teleport="#x-teleport-target">
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
                            </template>
                        </div>
                    </div>
                    <div class="is-scrollbar-hidden relative space-y-2.5 overflow-y-auto p-0.5"
                        x-init="Sortable.create($el, {
                            animation: 200,
                            group: 'board-cards',
                            easing: 'cubic-bezier(0, 0, 0.2, 1)',
                            direction: 'vertical',
                            delay: 150,
                            delayOnTouchOnly: true,
                        })">
                        <div class="card cursor-pointer shadow-sm">
                            <div class="flex space-x-3 px-2.5 pb-2 pt-1.5">
                                <div class="w-10 shrink-0 py-1">
                                    <img class="w-full"
                                        src="{{ asset('images/illustrations/creativedesign-char.svg') }}"
                                        alt="image" />
                                </div>
                                <div class="flex-1 space-y-2">
                                    <p class="font-medium tracking-wide text-slate-600 dark:text-navy-100">
                                        Update Design
                                    </p>
                                    <div class="flex flex-wrap space-x-1">
                                        <div
                                            class="badge space-x-1 bg-slate-150 py-1 px-1.5 text-slate-800 dark:bg-navy-500 dark:text-navy-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                            <span> Sep 12</span>
                                        </div>
                                        <div
                                            class="badge bg-secondary/10 py-1 px-1.5 text-secondary dark:bg-secondary-light/15 dark:text-secondary-light">
                                            Update
                                        </div>
                                        <div class="badge space-x-1 bg-info/10 py-1 px-1.5 text-info dark:bg-info/15">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7" />
                                            </svg>
                                            <span>4/5</span>
                                        </div>
                                    </div>
                                    <div class="flex items-end justify-between pt-1">
                                        <div class="flex flex-wrap -space-x-1.5">
                                            <div class="avatar h-5 w-5 hover:z-10">
                                                <div
                                                    class="is-initial rounded-full bg-info text-tiny+ uppercase text-white ring-1 ring-white dark:ring-navy-700">
                                                    jd
                                                </div>
                                            </div>

                                            <div class="avatar h-5 w-5 hover:z-10">
                                                <img class="rounded-full ring-1 ring-white dark:ring-navy-700"
                                                    src="{{ asset('images/100x100.png') }}" alt="avatar" />
                                            </div>

                                            <div class="avatar h-5 w-5 hover:z-10">
                                                <img class="rounded-full ring-1 ring-white dark:ring-navy-700"
                                                    src="{{ asset('images/100x100.png') }}" alt="avatar" />
                                            </div>
                                        </div>
                                        <div
                                            class="flex items-center space-x-2 text-xs text-slate-400 dark:text-navy-300">
                                            <div class="flex items-center space-x-0.5">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                                </svg>
                                                <span>3</span>
                                            </div>
                                            <div class="flex items-center space-x-0.5">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                                </svg>
                                                <span>1</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card cursor-pointer shadow-sm">
                            <div class="space-y-3 px-2.5 pb-2 pt-1.5">
                                <div>
                                    <div class="flex justify-between">
                                        <p
                                            class="font-medium tracking-wide text-slate-600 line-clamp-2 dark:text-navy-100">
                                            Sync With Google Analytics
                                        </p>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="-mr-1.5 h-3.5 w-3.5 shrink-0 text-error" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>

                                    <p class="mt-px text-xs text-slate-400 dark:text-navy-300">
                                        Google Workspace
                                    </p>
                                </div>
                                <div class="flex items-end justify-between">
                                    <div class="flex items-center space-x-2">
                                        <div class="avatar h-6 w-6">
                                            <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                                                alt="avatar" />
                                        </div>
                                        <p>Travis F.</p>
                                    </div>
                                    <div class="flex items-center space-x-2 text-xs text-slate-400 dark:text-navy-300">
                                        <div class="flex items-center space-x-0.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                            </svg>
                                            <span>4</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card cursor-pointer shadow-sm">
                            <div class="space-y-2 px-2.5 pb-2 pt-1.5">
                                <div>
                                    <div class="flex justify-between">
                                        <p
                                            class="font-medium tracking-wide text-slate-600 line-clamp-2 dark:text-navy-100">
                                            Add New Products
                                        </p>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="-mr-1.5 h-3.5 w-3.5 shrink-0 text-info" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex flex-wrap space-x-1">
                                    <div
                                        class="badge space-x-1 bg-slate-150 py-1 px-1.5 text-slate-800 dark:bg-navy-500 dark:text-navy-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        <span> May 14</span>
                                    </div>
                                    <div class="badge bg-info/10 py-1 px-1.5 text-info dark:bg-info/15">
                                        Create
                                    </div>
                                    <div class="badge space-x-1 bg-error/10 py-1 px-1.5 text-error dark:bg-error/15">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>4/5</span>
                                    </div>
                                </div>
                                <div class="grid grid-cols-3 gap-2">
                                    <img src="{{ asset('images/800x600.png') }}"
                                        class="rounded-lg object-cover object-center" alt="image" />
                                    <img src="{{ asset('images/800x600.png') }}"
                                        class="rounded-lg object-cover object-center" alt="image" />
                                    <img src="{{ asset('images/800x600.png') }}"
                                        class="rounded-lg object-cover object-center" alt="image" />
                                </div>
                                <div class="flex items-end justify-between pt-1">
                                    <div class="flex flex-wrap -space-x-1.5">
                                        <div class="avatar h-5 w-5 hover:z-10">
                                            <div
                                                class="is-initial rounded-full bg-info text-tiny+ uppercase text-white ring-1 ring-white dark:ring-navy-700">
                                                jd
                                            </div>
                                        </div>

                                        <div class="avatar h-5 w-5 hover:z-10">
                                            <img class="rounded-full ring-1 ring-white dark:ring-navy-700"
                                                src="{{ asset('images/100x100.png') }}" alt="avatar" />
                                        </div>

                                        <div class="avatar h-5 w-5 hover:z-10">
                                            <img class="rounded-full ring-1 ring-white dark:ring-navy-700"
                                                src="{{ asset('images/100x100.png') }}" alt="avatar" />
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-2 text-xs text-slate-400 dark:text-navy-300">
                                        <div class="flex items-center space-x-0.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                            </svg>
                                            <span>3</span>
                                        </div>
                                        <div class="flex items-center space-x-0.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                            </svg>
                                            <span>1</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card cursor-pointer shadow-sm">
                            <div class="space-y-3 rounded-lg bg-success/10 px-2.5 pb-2 pt-1.5">
                                <div>
                                    <div class="flex justify-between">
                                        <p class="font-medium tracking-wide text-success line-clamp-2">
                                            Improve animation loader
                                        </p>
                                    </div>
                                </div>
                                <div class="flex flex-wrap space-x-1">
                                    <div
                                        class="badge space-x-1 bg-success/10 py-1 px-1.5 text-success dark:bg-success/15">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        <span> Sep 12</span>
                                    </div>
                                    <div class="badge bg-warning/10 py-1 px-1.5 text-warning dark:bg-warning/15">
                                        Performance
                                    </div>
                                </div>
                                <div class="flex items-end justify-between">
                                    <div class="flex items-center space-x-2">
                                        <div class="avatar h-6 w-6">
                                            <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                                                alt="avatar" />
                                        </div>
                                        <p>Travis F.</p>
                                    </div>

                                    <div class="flex items-center space-x-2 text-xs text-slate-400 dark:text-navy-300">
                                        <div class="flex items-center space-x-0.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                            </svg>
                                            <span>4</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center py-2">
                        <button
                            class="flex items-center justify-center space-x-2 font-medium text-slate-600 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                            <span>New Task</span>
                        </button>
                    </div>
                </div>

                <div class="board-draggable relative flex max-h-full w-72 shrink-0 flex-col">
                    <div class="board-draggable-handler flex items-center justify-between px-0.5 pb-3">
                        <div class="flex items-center space-x-2">
                            <div
                                class="flex h-8 w-8 items-center justify-center rounded-lg bg-warning/10 text-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="text-base text-slate-700 dark:text-navy-100">
                                Pending
                            </h3>
                        </div>

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

                            <template x-teleport="#x-teleport-target">
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
                            </template>
                        </div>
                    </div>
                    <div class="is-scrollbar-hidden relative space-y-2.5 overflow-y-auto p-0.5"
                        x-init="Sortable.create($el, {
                            animation: 200,
                            group: 'board-cards',
                            easing: 'cubic-bezier(0, 0, 0.2, 1)',
                            direction: 'vertical',
                            delay: 150,
                            delayOnTouchOnly: true,
                        })">
                        <div class="card cursor-pointer shadow-sm">
                            <div class="px-2.5 pb-2 pt-1.5">
                                <div>
                                    <div class="flex justify-between">
                                        <p
                                            class="font-medium tracking-wide text-slate-600 line-clamp-2 dark:text-navy-100">
                                            Create Students Module
                                        </p>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="-mr-1.5 h-3.5 w-3.5 shrink-0 text-secondary dark:text-secondary-light"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>

                                    <p class="mt-px text-xs text-slate-400 dark:text-navy-300">
                                        Online LMS
                                    </p>
                                </div>

                                <div class="mt-2 flex flex-wrap space-x-1">
                                    <div
                                        class="badge space-x-1 bg-slate-150 py-1 px-1.5 text-slate-800 dark:bg-navy-500 dark:text-navy-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        <span> Jun 05</span>
                                    </div>
                                </div>

                                <div class="mt-3 flex items-end justify-between">
                                    <div class="flex items-center space-x-2">
                                        <div class="avatar h-6 w-6">
                                            <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                                                alt="avatar" />
                                        </div>
                                        <p>Katrina W.</p>
                                    </div>
                                    <div class="flex items-center space-x-2 text-xs text-slate-400 dark:text-navy-300">
                                        <div class="flex items-center space-x-0.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                            </svg>
                                            <span>2</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card cursor-pointer shadow-sm">
                            <div class="rounded-lg bg-warning/10 px-2.5 pb-2 pt-1.5">
                                <div>
                                    <div class="flex justify-between">
                                        <p class="font-medium tracking-wide text-warning line-clamp-2">
                                            Pay App Wages [1200$]
                                        </p>
                                    </div>
                                </div>
                                <div class="mt-2 flex flex-wrap space-x-1">
                                    <div
                                        class="badge space-x-1 bg-warning/10 py-1 px-1.5 text-warning dark:bg-warning/15">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        <span> Sep 12</span>
                                    </div>
                                    <div
                                        class="badge bg-secondary/10 py-1 px-1.5 text-secondary dark:bg-secondary/15 dark:text-secondary-light">
                                        Performance
                                    </div>
                                </div>
                                <div class="mt-3 flex items-end justify-between">
                                    <div class="flex flex-wrap -space-x-1.5">
                                        <div class="avatar h-5 w-5 hover:z-10">
                                            <div
                                                class="is-initial rounded-full bg-success text-tiny+ uppercase text-white ring-1 ring-white dark:ring-navy-700">
                                                jd
                                            </div>
                                        </div>

                                        <div class="avatar h-5 w-5 hover:z-10">
                                            <img class="rounded-full ring-1 ring-white dark:ring-navy-700"
                                                src="{{ asset('images/100x100.png') }}" alt="avatar" />
                                        </div>

                                        <div class="avatar h-5 w-5 hover:z-10">
                                            <img class="rounded-full ring-1 ring-white dark:ring-navy-700"
                                                src="{{ asset('images/100x100.png') }}" alt="avatar" />
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-2 text-xs text-slate-400 dark:text-navy-300">
                                        <div class="flex items-center space-x-0.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                            </svg>
                                            <span>2</span>
                                        </div>
                                        <div class="flex items-center space-x-0.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                            </svg>
                                            <span>4</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card cursor-pointer shadow-sm">
                            <div class="flex space-x-3 px-2.5 pb-2 pt-1.5">
                                <div class="w-10 shrink-0 py-1">
                                    <img class="w-full" src="{{ asset('images/illustrations/invite-user.svg') }}"
                                        alt="image" />
                                </div>
                                <div class="flex-1 space-y-2">
                                    <div>
                                        <div class="flex justify-between">
                                            <p
                                                class="font-medium tracking-wide text-slate-600 line-clamp-2 dark:text-navy-100">
                                                Invite New Users
                                            </p>
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="-mr-1.5 h-3.5 w-3.5 shrink-0 text-success" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>

                                        <p class="mt-px text-xs text-slate-400 dark:text-navy-300">
                                            Invite new users to chatroom
                                        </p>
                                    </div>
                                    <div class="flex flex-wrap space-x-1">
                                        <div
                                            class="badge space-x-1 bg-slate-150 py-1 px-1.5 text-slate-800 dark:bg-navy-500 dark:text-navy-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                            <span> Daily</span>
                                        </div>

                                        <div
                                            class="badge space-x-1 bg-warning/10 py-1 px-1.5 text-warning dark:bg-warning/15">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7" />
                                            </svg>
                                            <span>7/10</span>
                                        </div>
                                    </div>
                                    <div class="flex items-end justify-between pt-1">
                                        <div class="flex items-center space-x-2">
                                            <div class="avatar h-6 w-6">
                                                <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                                                    alt="avatar" />
                                            </div>
                                            <p>Raul B.</p>
                                        </div>

                                        <div
                                            class="flex items-center space-x-2 text-xs text-slate-400 dark:text-navy-300">
                                            <div class="flex items-center space-x-0.5">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                                </svg>
                                                <span>2</span>
                                            </div>
                                            <div class="flex items-center space-x-0.5">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                                </svg>
                                                <span>4</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card cursor-pointer shadow-sm">
                            <div class="px-2.5 pb-2 pt-1.5">
                                <div>
                                    <div class="flex justify-between">
                                        <p
                                            class="font-medium tracking-wide text-slate-600 line-clamp-2 dark:text-navy-100">
                                            Daily New Post
                                        </p>
                                    </div>
                                </div>

                                <div class="mt-2 flex flex-wrap space-x-1">
                                    <div
                                        class="badge space-x-1 bg-slate-150 py-1 px-1.5 text-slate-800 dark:bg-navy-500 dark:text-navy-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        <span> Apr 12</span>
                                    </div>
                                    <div class="badge space-x-1 bg-info/10 py-1 px-1.5 text-info dark:bg-info/15">
                                        <span>Blog</span>
                                    </div>
                                </div>

                                <div class="mt-3 flex flex-col space-y-2">
                                    <label class="inline-flex items-center space-x-2">
                                        <input checked
                                            class="form-checkbox is-basic h-5 w-5 rounded-full border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent"
                                            type="checkbox" />
                                        <span>Write Article</span>
                                    </label>
                                    <label class="inline-flex items-center space-x-2">
                                        <input
                                            class="form-checkbox is-basic h-5 w-5 rounded-full border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent"
                                            type="checkbox" />
                                        <span>Review</span>
                                    </label>
                                    <label class="inline-flex items-center space-x-2">
                                        <input
                                            class="form-checkbox is-basic h-5 w-5 rounded-full border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent"
                                            type="checkbox" />
                                        <span>Publish</span>
                                    </label>
                                </div>

                                <div class="mt-3 flex items-end justify-between">
                                    <div class="flex flex-wrap -space-x-1.5">
                                        <div class="avatar h-5 w-5 hover:z-10">
                                            <div
                                                class="is-initial rounded-full bg-success text-tiny+ uppercase text-white ring-1 ring-white dark:ring-navy-700">
                                                jd
                                            </div>
                                        </div>

                                        <div class="avatar h-5 w-5 hover:z-10">
                                            <img class="rounded-full ring-1 ring-white dark:ring-navy-700"
                                                src="{{ asset('images/100x100.png') }}" alt="avatar"
                                                draggable="false" />
                                        </div>

                                        <div class="avatar h-5 w-5 hover:z-10">
                                            <img class="rounded-full ring-1 ring-white dark:ring-navy-700"
                                                src="{{ asset('images/100x100.png') }}" alt="avatar"
                                                draggable="false" />
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-2 text-xs text-slate-400 dark:text-navy-300">
                                        <div class="flex items-center space-x-0.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                            </svg>
                                            <span>2</span>
                                        </div>
                                        <div class="flex items-center space-x-0.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                            </svg>
                                            <span>4</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center py-2">
                        <button
                            class="flex items-center justify-center space-x-2 font-medium text-slate-600 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                            <span>New Task</span>
                        </button>
                    </div>
                </div>

                <div class="board-draggable relative flex max-h-full w-72 shrink-0 flex-col">
                    <div class="board-draggable-handler flex items-center justify-between px-0.5 pb-3">
                        <div class="flex items-center space-x-2">
                            <div
                                class="flex h-8 w-8 items-center justify-center rounded-lg bg-secondary/10 text-secondary dark:bg-secondary-light/15 dark:text-secondary-light">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M10 21h7a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v11m0 5l4.879-4.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242z" />
                                </svg>
                            </div>
                            <h3 class="text-base text-slate-700 dark:text-navy-100">
                                In Review
                            </h3>
                        </div>

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

                            <template x-teleport="#x-teleport-target">
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
                            </template>
                        </div>
                    </div>
                    <div class="is-scrollbar-hidden relative space-y-2.5 overflow-y-auto p-0.5"
                        x-init="Sortable.create($el, {
                            animation: 200,
                            group: 'board-cards',
                            easing: 'cubic-bezier(0, 0, 0.2, 1)',
                            direction: 'vertical',
                            delay: 150,
                            delayOnTouchOnly: true,
                        })">
                        <div class="card cursor-pointer shadow-sm">
                            <div class="rounded-lg bg-info/10 px-2.5 pb-2 pt-1.5">
                                <div>
                                    <div class="flex justify-between">
                                        <p class="font-medium tracking-wide text-info line-clamp-2">
                                            Join To Discussion
                                        </p>
                                    </div>
                                </div>
                                <div class="mt-2 flex flex-wrap space-x-1">
                                    <div class="badge space-x-1 bg-info/10 py-1 px-1.5 text-info dark:bg-info/15">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        <span> Jun 12</span>
                                    </div>
                                    <div
                                        class="badge bg-primary/10 py-1 px-1.5 text-primary dark:bg-accent-light/15 dark:text-accent-light">
                                        Support
                                    </div>
                                </div>
                                <div class="mt-3 flex items-end justify-between">
                                    <div class="flex flex-wrap -space-x-1.5">
                                        <div class="avatar h-5 w-5 hover:z-10">
                                            <div
                                                class="is-initial rounded-full bg-secondary text-tiny+ uppercase text-white ring-1 ring-white dark:bg-secondary-light dark:ring-navy-700">
                                                jd
                                            </div>
                                        </div>

                                        <div class="avatar h-5 w-5 hover:z-10">
                                            <img class="rounded-full ring-1 ring-white dark:ring-navy-700"
                                                src="{{ asset('images/100x100.png') }}" alt="avatar" />
                                        </div>

                                        <div class="avatar h-5 w-5 hover:z-10">
                                            <img class="rounded-full ring-1 ring-white dark:ring-navy-700"
                                                src="{{ asset('images/100x100.png') }}" alt="avatar" />
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-center space-x-2 text-xs text-slate-400 dark:text-navy-300">
                                        <div class="flex items-center space-x-0.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                            </svg>
                                            <span>6</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card cursor-pointer shadow-sm">
                            <div class="px-2.5 pb-2 pt-1.5">
                                <div>
                                    <div class="flex justify-between">
                                        <p
                                            class="font-medium tracking-wide text-slate-600 line-clamp-2 dark:text-navy-100">
                                            Daily New Post
                                        </p>
                                    </div>
                                </div>

                                <div class="mt-2 flex flex-wrap space-x-1">
                                    <div
                                        class="badge space-x-1 bg-slate-150 py-1 px-1.5 text-slate-800 dark:bg-navy-500 dark:text-navy-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        <span> Apr 12</span>
                                    </div>
                                    <div class="badge space-x-1 bg-info/10 py-1 px-1.5 text-info dark:bg-info/15">
                                        <span>Blog</span>
                                    </div>
                                </div>

                                <div class="mt-3 flex flex-col space-y-2">
                                    <label class="inline-flex items-center space-x-2">
                                        <input checked
                                            class="form-checkbox is-basic h-5 w-5 rounded-full border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent"
                                            type="checkbox" />
                                        <span>Review Article</span>
                                    </label>
                                    <label class="inline-flex items-center space-x-2">
                                        <input
                                            class="form-checkbox is-basic h-5 w-5 rounded-full border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent"
                                            type="checkbox" />
                                        <span>Article Correction</span>
                                    </label>
                                    <label class="inline-flex items-center space-x-2">
                                        <input
                                            class="form-checkbox is-basic h-5 w-5 rounded-full border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent"
                                            type="checkbox" />
                                        <span>Allow Publication</span>
                                    </label>
                                </div>

                                <div class="mt-3 flex items-end justify-between">
                                    <div class="flex items-center space-x-2">
                                        <div class="avatar h-6 w-6">
                                            <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                                                alt="avatar" />
                                        </div>
                                        <p>Robin S.</p>
                                    </div>
                                    <div
                                        class="flex items-center space-x-2 text-xs text-slate-400 dark:text-navy-300">
                                        <div class="flex items-center space-x-0.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                            </svg>
                                            <span>2</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card cursor-pointer shadow-sm">
                            <div class="px-2.5 pb-2 pt-1.5">
                                <div>
                                    <div class="flex justify-between">
                                        <p
                                            class="font-medium tracking-wide text-slate-600 line-clamp-2 dark:text-navy-100">
                                            Convert Figma To HTML
                                        </p>
                                    </div>
                                </div>

                                <div class="mt-2 flex flex-wrap space-x-1">
                                    <div
                                        class="badge space-x-1 bg-slate-150 py-1 px-1.5 text-slate-800 dark:bg-navy-500 dark:text-navy-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        <span> May 25</span>
                                    </div>
                                    <div
                                        class="badge space-x-1 bg-success/10 py-1 px-1.5 text-success dark:bg-success/15">
                                        <span>Design</span>
                                    </div>
                                </div>

                                <div class="p-1">
                                    <img src="{{ asset('images/illustrations/dashboard-meet-dark.svg') }}"
                                        alt="image" />
                                </div>

                                <div class="mt-3 flex items-end justify-between">
                                    <div class="flex items-center space-x-2">
                                        <div class="avatar h-6 w-6">
                                            <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                                                alt="avatar" />
                                        </div>
                                        <p>Samantha S.</p>
                                    </div>
                                    <div
                                        class="flex items-center space-x-2 text-xs text-slate-400 dark:text-navy-300">
                                        <div class="flex items-center space-x-0.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                            </svg>
                                            <span>2</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center py-2">
                        <button
                            class="flex items-center justify-center space-x-2 font-medium text-slate-600 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                            <span>New Task</span>
                        </button>
                    </div>
                </div>

                <div class="board-draggable relative flex max-h-full w-72 shrink-0 flex-col">
                    <div class="board-draggable-handler flex items-center justify-between px-0.5 pb-3">
                        <div class="flex items-center space-x-2">
                            <div
                                class="flex h-8 w-8 items-center justify-center rounded-lg bg-success/10 text-success dark:bg-success/15">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path d="M12.5293 18L20.9999 8.40002" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M3 13.2L7.23529 18L17.8235 6" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <h3 class="text-base text-slate-700 dark:text-navy-100">
                                Success
                            </h3>
                        </div>

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

                            <template x-teleport="#x-teleport-target">
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
                            </template>
                        </div>
                    </div>
                    <div class="is-scrollbar-hidden relative space-y-2.5 overflow-y-auto p-0.5"
                        x-init="Sortable.create($el, {
                            animation: 200,
                            group: 'board-cards',
                            easing: 'cubic-bezier(0, 0, 0.2, 1)',
                            direction: 'vertical',
                            delay: 150,
                            delayOnTouchOnly: true,
                        })">
                        <div class="card cursor-pointer shadow-sm">
                            <div class="px-2.5 pb-2 pt-1.5">
                                <div>
                                    <div class="flex justify-between">
                                        <p
                                            class="font-medium tracking-wide text-slate-600 line-clamp-2 dark:text-navy-100">
                                            Tracking Bugs
                                        </p>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="-mr-1.5 h-3.5 w-3.5 shrink-0 text-warning" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>

                                    <p class="mt-px text-xs text-slate-400 dark:text-navy-300">
                                        Tracking app bugs
                                    </p>
                                </div>

                                <div class="mt-2 flex flex-wrap space-x-1">
                                    <div
                                        class="badge space-x-1 bg-slate-150 py-1 px-1.5 text-slate-800 dark:bg-navy-500 dark:text-navy-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        <span> Jun 05</span>
                                    </div>
                                </div>

                                <div class="mt-3 flex items-end justify-between">
                                    <div class="flex items-center space-x-2">
                                        <div class="avatar h-6 w-6">
                                            <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                                                alt="avatar" />
                                        </div>
                                        <p>Lance T.</p>
                                    </div>
                                    <div
                                        class="flex items-center space-x-2 text-xs text-slate-400 dark:text-navy-300">
                                        <div class="flex items-center space-x-0.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                            </svg>
                                            <span>2</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card cursor-pointer shadow-sm">
                            <div class="flex space-x-3 rounded-lg bg-error/10 px-2.5 pb-2 pt-1.5">
                                <div class="w-10 shrink-0 py-1">
                                    <img class="w-full" src="{{ asset('images/illustrations/upload-cloud.svg') }}"
                                        alt="image" />
                                </div>
                                <div class="flex-1">
                                    <div>
                                        <div class="flex justify-between">
                                            <p class="font-medium tracking-wide text-error line-clamp-2">
                                                Backup System
                                            </p>
                                        </div>
                                        <p class="mt-px text-xs text-slate-400 dark:text-navy-300">
                                            Backup Chats, videos and all datas
                                        </p>
                                    </div>
                                    <div class="mt-2 flex flex-wrap space-x-1">
                                        <div
                                            class="badge space-x-1 bg-error/10 py-1 px-1.5 text-error dark:bg-error/15">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                            <span> Jun 17</span>
                                        </div>
                                        <div class="badge bg-warning/10 py-1 px-1.5 text-warning dark:bg-warning/15">
                                            Backup
                                        </div>
                                    </div>
                                    <div class="mt-3 flex items-end justify-between">
                                        <div class="flex flex-wrap -space-x-1.5">
                                            <div class="avatar h-5 w-5 hover:z-10">
                                                <div
                                                    class="is-initial rounded-full bg-secondary text-tiny+ uppercase text-white ring-1 ring-white dark:bg-secondary-light dark:ring-navy-700">
                                                    jd
                                                </div>
                                            </div>

                                            <div class="avatar h-5 w-5 hover:z-10">
                                                <img class="rounded-full ring-1 ring-white dark:ring-navy-700"
                                                    src="{{ asset('images/100x100.png') }}" alt="avatar" />
                                            </div>

                                            <div class="avatar h-5 w-5 hover:z-10">
                                                <img class="rounded-full ring-1 ring-white dark:ring-navy-700"
                                                    src="{{ asset('images/100x100.png') }}" alt="avatar" />
                                            </div>
                                        </div>
                                        <div
                                            class="flex items-center space-x-2 text-xs text-slate-400 dark:text-navy-300">
                                            <div class="flex items-center space-x-0.5">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                                </svg>
                                                <span>6</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center py-2">
                        <button
                            class="flex items-center justify-center space-x-2 font-medium text-slate-600 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                            <span>New Task</span>
                        </button>
                    </div>
                </div>

                <div class="w-72 shrink-0">
                    <button
                        class="btn w-full bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                        New Board
                    </button>
                </div>
            </div>
        </div>
    </main>

    <div x-show="showDrawer" x-data="{ showDrawer: false }"
        x-on:show-drawer.window="($event.detail.drawerId === 'kanban-setting-drawer') && (showDrawer = true)"
        @keydown.window.escape="showDrawer = false">
        <div class="fixed inset-0 z-[100] bg-slate-900/60 transition-opacity duration-200"
            @click="showDrawer = false" x-show="showDrawer" x-transition:enter="ease-out"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>
        <div class="fixed right-0 top-0 z-[101] h-full w-full sm:w-80">
            <div class="flex h-full w-full transform-gpu flex-col bg-white transition-transform duration-200 dark:bg-navy-700"
                x-show="showDrawer" x-transition:enter="ease-out" x-transition:enter-start="translate-x-full"
                x-transition:enter-end="translate-x-0" x-transition:leave="ease-in"
                x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full">
                <div class="flex h-14 items-center justify-between bg-slate-150 p-4 dark:bg-navy-800">
                    <h3 class="text-base font-medium text-slate-700 dark:text-navy-100">
                        Banking App
                    </h3>
                    <div class="-mr-1.5 flex">
                        <button x-data="{ isImportant: false }" @click.stop="isImportant =! isImportant"
                            class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg x-show="!isImportant" xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                            <svg x-show="isImportant" xmlns="http://www.w3.org/2000/svg"
                                class="h-5.5 w-5.5 text-primary dark:text-accent" viewBox="0 0 20 20"
                                fill="currentColor" style="display: none">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </button>
                        <button @click="showDrawer=false"
                            class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div x-init="$el._x_simplebar = new SimpleBar($el)" class="flex grow flex-col overflow-y-auto">
                    <div x-data="{ expanded: true }">
                        <div class="mt-3 flex items-center justify-between px-4">
                            <span class="text-xs+ font-medium uppercase">Actions</span>
                            <div class="-mr-1.5 flex">
                                <button @click="expanded =! expanded"
                                    class="btn h-6 w-6 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 transition-transform"
                                        :class="expanded && 'rotate-180'" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div x-show="expanded" x-collapse>
                            <ul class="mt-2 space-y-3 px-4 font-inter font-medium">
                                <li>
                                    <a class="group inline-flex items-center space-x-2 tracking-wide outline-none transition-colors hover:text-slate-800 focus:text-navy-800 dark:hover:text-navy-100 dark:focus:text-navy-100"
                                        href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="1.5"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                        <span>Edit Board</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="group inline-flex items-center space-x-2 tracking-wide outline-none transition-colors hover:text-slate-800 focus:text-navy-800 dark:hover:text-navy-100 dark:focus:text-navy-100"
                                        href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="1.5"
                                                d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                                        </svg>
                                        <span>Archive</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="group inline-flex items-center space-x-2 tracking-wide outline-none transition-colors hover:text-slate-800 focus:text-navy-800 dark:hover:text-navy-100 dark:focus:text-navy-100"
                                        href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="1.5"
                                                d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                        </svg>
                                        <span>Clone</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="group inline-flex items-center space-x-2 tracking-wide outline-none transition-colors hover:text-slate-800 focus:text-navy-800 dark:hover:text-navy-100 dark:focus:text-navy-100"
                                        href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="1.5"
                                                d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                                        </svg>
                                        <span>About Board</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="group inline-flex items-center space-x-2 tracking-wide outline-none transition-colors hover:text-slate-800 focus:text-navy-800 dark:hover:text-navy-100 dark:focus:text-navy-100"
                                        href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="1.5"
                                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                        </svg>
                                        <span>Visibility</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="group inline-flex items-center space-x-2 tracking-wide text-error outline-none"
                                        href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="1.5"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                        <span>Delete</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="my-4 mx-4 h-px shrink-0 bg-slate-200 dark:bg-navy-500"></div>
                    <div x-data="{ expanded: true }">
                        <div class="flex items-center justify-between px-4">
                            <span class="text-xs+ font-medium uppercase">Activities</span>
                            <div class="-mr-1.5 flex">
                                <button
                                    class="btn h-6 w-6 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </button>
                                <button @click="expanded =! expanded"
                                    class="btn h-6 w-6 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 transition-transform"
                                        :class="expanded && 'rotate-180'" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div x-show="expanded" x-collapse>
                            <ol class="timeline line-space max-w-sm p-4 [--size:1.5rem]">
                                <li class="timeline-item">
                                    <div
                                        class="timeline-item-point rounded-full border border-current bg-white text-secondary dark:bg-navy-700 dark:text-secondary-light">
                                        <i class="fa fa-user-edit text-tiny"></i>
                                    </div>
                                    <div class="timeline-item-content flex-1 pl-4">
                                        <div class="flex flex-col justify-between pb-2 sm:flex-row sm:pb-0">
                                            <p
                                                class="pb-2 font-medium leading-none text-slate-600 dark:text-navy-100 sm:pb-0">
                                                User Photo Changed
                                            </p>
                                            <span class="text-xs text-slate-400 dark:text-navy-300">12 minute
                                                ago</span>
                                        </div>
                                        <p class="py-1">John Doe changed his avatar photo</p>
                                        <div class="avatar mt-2 h-20 w-20">
                                            <img class="mask is-squircle" src="{{ asset('images/100x100.png') }}"
                                                alt="avatar" />
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <div
                                        class="timeline-item-point rounded-full border border-current bg-white text-primary dark:bg-navy-700 dark:text-accent">
                                        <i class="fa-solid fa-image text-tiny"></i>
                                    </div>
                                    <div class="timeline-item-content flex-1 pl-4">
                                        <div class="flex flex-col justify-between pb-2 sm:flex-row sm:pb-0">
                                            <p
                                                class="pb-2 font-medium leading-none text-slate-600 dark:text-navy-100 sm:pb-0">
                                                Images Added
                                            </p>
                                            <span class="text-xs text-slate-400 dark:text-navy-300">1 hour ago</span>
                                        </div>
                                        <p class="py-1">Mores Clarke added new image gallery</p>
                                        <div class="mt-4 grid grid-cols-3 gap-3">
                                            <img class="rounded-lg" src="{{ asset('images/800x600.png') }}"
                                                alt="image" />
                                            <img class="rounded-lg" src="{{ asset('images/800x600.png') }}"
                                                alt="image" />
                                            <img class="rounded-lg" src="{{ asset('images/800x600.png') }}"
                                                alt="image" />
                                            <img class="rounded-lg" src="{{ asset('images/800x600.png') }}"
                                                alt="image" />
                                            <img class="rounded-lg" src="{{ asset('images/800x600.png') }}"
                                                alt="image" />
                                            <img class="rounded-lg" src="{{ asset('images/800x600.png') }}"
                                                alt="image" />
                                        </div>
                                        <div class="mt-4">
                                            <span class="font-medium text-slate-600 dark:text-navy-100">
                                                Category:
                                            </span>

                                            <a href="#"
                                                class="text-xs text-primary hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">
                                                #Tag
                                            </a>

                                            <a href="#"
                                                class="text-xs text-primary hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">
                                                #Category
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <div
                                        class="timeline-item-point rounded-full border border-current bg-white text-success dark:bg-navy-700">
                                        <i class="fa fa-leaf text-tiny"></i>
                                    </div>
                                    <div class="timeline-item-content flex-1 pl-4">
                                        <div class="flex flex-col justify-between pb-2 sm:flex-row sm:pb-0">
                                            <p
                                                class="pb-2 font-medium leading-none text-slate-600 dark:text-navy-100 sm:pb-0">
                                                Design Completed
                                            </p>
                                            <span class="text-xs text-slate-400 dark:text-navy-300">3 hours ago</span>
                                        </div>
                                        <p class="py-1">
                                            Robert Nolan completed the design of the CRM
                                            application
                                        </p>
                                        <a href="#"
                                            class="inline-flex items-center space-x-1 pt-2 text-slate-600 transition-colors hover:text-primary dark:text-navy-100 dark:hover:text-accent">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                            </svg>
                                            <span>File_final.fig</span>
                                        </a>
                                        <div class="pt-2">
                                            <a href="#"
                                                class="tag rounded-full border border-secondary/30 bg-secondary/10 text-secondary hover:bg-secondary/20 focus:bg-secondary/20 active:bg-secondary/25 dark:border-secondary-light/30 dark:bg-secondary-light/10 dark:text-secondary-light dark:hover:bg-secondary-light/20 dark:focus:bg-secondary-light/20 dark:active:bg-secondary-light/25">
                                                UI/UX
                                            </a>

                                            <a href="#"
                                                class="tag rounded-full border border-info/30 bg-info/10 text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25">
                                                CRM
                                            </a>

                                            <a href="#"
                                                class="tag rounded-full border border-success/30 bg-success/10 text-success hover:bg-success/20 focus:bg-success/20 active:bg-success/25">
                                                Dashboard
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <div
                                        class="timeline-item-point rounded-full border border-current bg-white text-warning dark:bg-navy-700">
                                        <i class="fa fa-project-diagram text-tiny"></i>
                                    </div>
                                    <div class="timeline-item-content flex-1 pl-4">
                                        <div class="flex flex-col justify-between pb-2 sm:flex-row sm:pb-0">
                                            <p
                                                class="pb-2 font-medium leading-none text-slate-600 dark:text-navy-100 sm:pb-0">
                                                ER Diagram
                                            </p>
                                            <span class="text-xs text-slate-400 dark:text-navy-300">a day ago</span>
                                        </div>
                                        <p class="py-1">Team completed the ER diagram app</p>
                                        <div>
                                            <p class="text-xs text-slate-400 dark:text-navy-300">
                                                Members:
                                            </p>
                                            <div class="mt-2 flex justify-between">
                                                <div class="flex flex-wrap -space-x-2">
                                                    <div class="avatar h-7 w-7 hover:z-10">
                                                        <img class="rounded-full ring ring-white dark:ring-navy-700"
                                                            src="{{ asset('images/100x100.png') }}"
                                                            alt="avatar" />
                                                    </div>

                                                    <div class="avatar h-7 w-7 hover:z-10">
                                                        <div
                                                            class="is-initial rounded-full bg-info text-xs+ uppercase text-white ring ring-white dark:ring-navy-700">
                                                            jd
                                                        </div>
                                                    </div>

                                                    <div class="avatar h-7 w-7 hover:z-10">
                                                        <img class="rounded-full ring ring-white dark:ring-navy-700"
                                                            src="{{ asset('images/100x100.png') }}"
                                                            alt="avatar" />
                                                    </div>

                                                    <div class="avatar h-7 w-7 hover:z-10">
                                                        <img class="rounded-full ring ring-white dark:ring-navy-700"
                                                            src="{{ asset('images/100x100.png') }}"
                                                            alt="avatar" />
                                                    </div>

                                                    <div class="avatar h-7 w-7 hover:z-10">
                                                        <img class="rounded-full ring ring-white dark:ring-navy-700"
                                                            src="{{ asset('images/100x100.png') }}"
                                                            alt="avatar" />
                                                    </div>
                                                </div>
                                                <button
                                                    class="btn h-7 w-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="h-5 w-5 rotate-45" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <div
                                        class="timeline-item-point rounded-full border border-current bg-white text-error dark:bg-navy-700">
                                        <i class="fa fa-history text-tiny"></i>
                                    </div>
                                    <div class="timeline-item-content flex-1 pl-4">
                                        <div class="flex flex-col justify-between pb-2 sm:flex-row sm:pb-0">
                                            <p
                                                class="pb-2 font-medium leading-none text-slate-600 dark:text-navy-100 sm:pb-0">
                                                Weekly Report
                                            </p>
                                            <span class="text-xs text-slate-400 dark:text-navy-300">a day ago</span>
                                        </div>
                                        <p class="py-1">The weekly report was uploaded</p>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div @click="$dispatch('show-drawer', { drawerId: 'kanban-setting-drawer' })"
        class="fixed right-3 bottom-3 rounded-full bg-white dark:bg-navy-700">
        <button
            class="btn h-14 w-14 rounded-full bg-success p-0 font-medium text-white hover:bg-success-focus focus:bg-success-focus active:bg-success-focus/90 sm:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
            </svg>
        </button>
    </div>

</x-base-layout>

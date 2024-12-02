<x-app-layout title="Blog Card 8" is-header-blur="true">
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center justify-between py-5 lg:py-6">
            <div class="flex items-center space-x-1">
                <h2 class="text-xl font-medium text-slate-700 line-clamp-1 dark:text-navy-50 lg:text-2xl">
                    Blog Cards
                </h2>
                <div x-data="usePopper({ placement: 'bottom-start', offset: 4 })" @click.outside="if(isShowPopper) isShowPopper = false" class="inline-flex">
                    <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                        class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                        <i class="fas fa-chevron-down"></i>
                    </button>

                    <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                        <div
                            class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                            <ul>
                                <li>
                                    <a href="#"
                                        class="flex h-8 items-center space-x-3 px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mt-px h-4.5 w-4.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                                        </svg>
                                        <span> New Post</span></a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex h-8 items-center space-x-3 px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mt-px h-4.5 w-4.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                        </svg>
                                        <span>Export Posts</span></a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex h-8 items-center space-x-3 px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mt-px h-4.5 w-4.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <span>Setting</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex items-center space-x-2">
                <label class="relative hidden sm:flex">
                    <input
                        class="form-input peer h-9 w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 text-xs+ placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                        placeholder="Search users..." type="text" />
                    <span
                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-colors duration-200"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M3.316 13.781l.73-.171-.73.171zm0-5.457l.73.171-.73-.171zm15.473 0l.73-.171-.73.171zm0 5.457l.73.171-.73-.171zm-5.008 5.008l-.171-.73.171.73zm-5.457 0l-.171.73.171-.73zm0-15.473l-.171-.73.171.73zm5.457 0l.171-.73-.171.73zM20.47 21.53a.75.75 0 101.06-1.06l-1.06 1.06zM4.046 13.61a11.198 11.198 0 010-5.115l-1.46-.342a12.698 12.698 0 000 5.8l1.46-.343zm14.013-5.115a11.196 11.196 0 010 5.115l1.46.342a12.698 12.698 0 000-5.8l-1.46.343zm-4.45 9.564a11.196 11.196 0 01-5.114 0l-.342 1.46c1.907.448 3.892.448 5.8 0l-.343-1.46zM8.496 4.046a11.198 11.198 0 015.115 0l.342-1.46a12.698 12.698 0 00-5.8 0l.343 1.46zm0 14.013a5.97 5.97 0 01-4.45-4.45l-1.46.343a7.47 7.47 0 005.568 5.568l.342-1.46zm5.457 1.46a7.47 7.47 0 005.568-5.567l-1.46-.342a5.97 5.97 0 01-4.45 4.45l.342 1.46zM13.61 4.046a5.97 5.97 0 014.45 4.45l1.46-.343a7.47 7.47 0 00-5.568-5.567l-.342 1.46zm-5.457-1.46a7.47 7.47 0 00-5.567 5.567l1.46.342a5.97 5.97 0 014.45-4.45l-.343-1.46zm8.652 15.28l3.665 3.664 1.06-1.06-3.665-3.665-1.06 1.06z" />
                        </svg>
                    </span>
                </label>

                <div class="flex">
                    <button
                        class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:hidden sm:h-9 sm:w-9">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" stroke="currentColor" fill="none"
                            viewBox="0 0 24 24">
                            <circle cx="10.2" cy="10.2" r="7.2" stroke-width="1.5"></circle>
                            <path stroke-width="1.5" stroke-linecap="round" d="M21 21l-3.6-3.6" />
                        </svg>
                    </button>
                    <button
                        class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:h-9 sm:w-9">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M3 5.109C3 4.496 3.47 4 4.05 4h16.79c.58 0 1.049.496 1.049 1.109 0 .612-.47 1.108-1.05 1.108H4.05C3.47 6.217 3 5.721 3 5.11zM5.798 12.5c0-.612.47-1.109 1.05-1.109H18.04c.58 0 1.05.497 1.05 1.109s-.47 1.109-1.05 1.109H6.848c-.58 0-1.05-.497-1.05-1.109zM9.646 18.783c-.58 0-1.05.496-1.05 1.108 0 .613.47 1.109 1.05 1.109h5.597c.58 0 1.05-.496 1.05-1.109 0-.612-.47-1.108-1.05-1.108H9.646z" />
                        </svg>
                    </button>
                    <button
                        class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:h-9 sm:w-9">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-3 lg:gap-6 xl:grid-cols-4">
            <div class="flex flex-col">
                <img class="h-44 w-full rounded-2xl object-cover object-center " src="{{ asset('images/800x600.png') }}"
                    alt="image" />
                <div class="card -mt-8 grow rounded-2xl p-4">
                    <div>
                        <a href="#"
                            class="text-sm+ font-medium text-slate-700 line-clamp-1 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">What
                            is Tailwind CSS?</a>
                    </div>
                    <p class="mt-2 grow line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut
                        distinctio dolorum harum.
                    </p>
                    <div class="mt-4 flex items-center justify-between">
                        <a href="#"
                            class="flex items-center space-x-2 text-xs hover:text-slate-800 dark:hover:text-navy-100">
                            <div class="avatar h-6 w-6">
                                <img class="rounded-full " src="{{ asset('images/100x100.png') }}" alt="avatar" />
                            </div>
                            <span class="line-clamp-1">John Doe</span>
                        </a>
                        <p class="flex shrink-0 items-center space-x-1.5 text-slate-400 dark:text-navy-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-xs">25 May, 2022</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <img class="h-44 w-full rounded-2xl object-cover object-center "
                    src="{{ asset('images/800x600.png') }}" alt="image" />
                <div class="card -mt-8 grow rounded-2xl p-4">
                    <div>
                        <a href="#"
                            class="text-sm+ font-medium text-slate-700 line-clamp-1 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">Tailwind
                            CSS Card Example</a>
                    </div>
                    <p class="mt-2 grow line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur. Lorem ipsum dolor on
                        the sit.
                    </p>
                    <div class="mt-4 flex items-center justify-between">
                        <a href="#"
                            class="flex items-center space-x-2 text-xs hover:text-slate-800 dark:hover:text-navy-100">
                            <div class="avatar h-6 w-6">
                                <img class="rounded-full " src="{{ asset('images/100x100.png') }}" alt="avatar" />
                            </div>
                            <span class="line-clamp-1">Konnor Guzman </span>
                        </a>
                        <p class="flex shrink-0 items-center space-x-1.5 text-slate-400 dark:text-navy-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-xs">30 May, 2022</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <img class="h-44 w-full rounded-2xl object-cover object-center "
                    src="{{ asset('images/800x600.png') }}" alt="image" />
                <div class="card -mt-8 grow rounded-2xl p-4">
                    <div>
                        <a href="#"
                            class="text-sm+ font-medium text-slate-700 line-clamp-1 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">What
                            is PHP?</a>
                    </div>
                    <p class="mt-2 grow line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur. Lorem ipsum dolor on
                        the sit.
                    </p>
                    <div class="mt-4 flex items-center justify-between">
                        <a href="#"
                            class="flex items-center space-x-2 text-xs hover:text-slate-800 dark:hover:text-navy-100">
                            <div class="avatar h-6 w-6">
                                <img class="rounded-full " src="{{ asset('images/100x100.png') }}" alt="avatar" />
                            </div>
                            <span class="line-clamp-1">Travis Fuller </span>
                        </a>
                        <p class="flex shrink-0 items-center space-x-1.5 text-slate-400 dark:text-navy-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-xs">10 June, 2022</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <img class="h-44 w-full rounded-2xl object-cover object-center "
                    src="{{ asset('images/800x600.png') }}" alt="image" />
                <div class="card -mt-8 grow rounded-2xl p-4">
                    <div>
                        <a href="#"
                            class="text-sm+ font-medium text-slate-700 line-clamp-1 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">Top
                            Design Systems</a>
                    </div>
                    <p class="mt-2 grow line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Architecto assumenda.
                    </p>
                    <div class="mt-4 flex items-center justify-between">
                        <a href="#"
                            class="flex items-center space-x-2 text-xs hover:text-slate-800 dark:hover:text-navy-100">
                            <div class="avatar h-6 w-6">
                                <img class="rounded-full " src="{{ asset('images/100x100.png') }}" alt="avatar" />
                            </div>
                            <span class="line-clamp-1">Alfredo Elliott </span>
                        </a>
                        <p class="flex shrink-0 items-center space-x-1.5 text-slate-400 dark:text-navy-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-xs">19 June, 2022</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <img class="h-44 w-full rounded-2xl object-cover object-center "
                    src="{{ asset('images/800x600.png') }}" alt="image" />
                <div class="card -mt-8 grow rounded-2xl p-4">
                    <div>
                        <a href="#"
                            class="text-sm+ font-medium text-slate-700 line-clamp-1 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">How
                            Did We Get Here?</a>
                    </div>
                    <p class="mt-2 grow line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </p>
                    <div class="mt-4 flex items-center justify-between">
                        <a href="#"
                            class="flex items-center space-x-2 text-xs hover:text-slate-800 dark:hover:text-navy-100">
                            <div class="avatar h-6 w-6">
                                <img class="rounded-full " src="{{ asset('images/100x100.png') }}" alt="avatar" />
                            </div>
                            <span class="line-clamp-1">Katrina West </span>
                        </a>
                        <p class="flex shrink-0 items-center space-x-1.5 text-slate-400 dark:text-navy-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-xs">26 June, 2022</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <img class="h-44 w-full rounded-2xl object-cover object-center "
                    src="{{ asset('images/800x600.png') }}" alt="image" />
                <div class="card -mt-8 grow rounded-2xl p-4">
                    <div>
                        <a href="#"
                            class="text-sm+ font-medium text-slate-700 line-clamp-1 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">NodeJS
                            Design Patterns</a>
                    </div>
                    <p class="mt-2 grow line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </p>
                    <div class="mt-4 flex items-center justify-between">
                        <a href="#"
                            class="flex items-center space-x-2 text-xs hover:text-slate-800 dark:hover:text-navy-100">
                            <div class="avatar h-6 w-6">
                                <img class="rounded-full " src="{{ asset('images/100x100.png') }}" alt="avatar" />
                            </div>
                            <span class="line-clamp-1">Henry Curtis </span>
                        </a>
                        <p class="flex shrink-0 items-center space-x-1.5 text-slate-400 dark:text-navy-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-xs">12 June, 2022</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <img class="h-44 w-full rounded-2xl object-cover object-center "
                    src="{{ asset('images/800x600.png') }}" alt="image" />
                <div class="card -mt-8 grow rounded-2xl p-4">
                    <div>
                        <a href="#"
                            class="text-sm+ font-medium text-slate-700 line-clamp-1 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">313
                            Pattern and Color ideas</a>
                    </div>
                    <p class="mt-2 grow line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </p>
                    <div class="mt-4 flex items-center justify-between">
                        <a href="#"
                            class="flex items-center space-x-2 text-xs hover:text-slate-800 dark:hover:text-navy-100">
                            <div class="avatar h-6 w-6">
                                <img class="rounded-full " src="{{ asset('images/100x100.png') }}" alt="avatar" />
                            </div>
                            <span class="line-clamp-1">Samantha Shelton </span>
                        </a>
                        <p class="flex shrink-0 items-center space-x-1.5 text-slate-400 dark:text-navy-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-xs">30 June, 2022</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <img class="h-44 w-full rounded-2xl object-cover object-center "
                    src="{{ asset('images/800x600.png') }}" alt="image" />
                <div class="card -mt-8 grow rounded-2xl p-4">
                    <div>
                        <a href="#"
                            class="text-sm+ font-medium text-slate-700 line-clamp-1 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">25
                            Surprising Facts About Chair</a>
                    </div>
                    <p class="mt-2 grow line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </p>
                    <div class="mt-4 flex items-center justify-between">
                        <a href="#"
                            class="flex items-center space-x-2 text-xs hover:text-slate-800 dark:hover:text-navy-100">
                            <div class="avatar h-6 w-6">
                                <img class="rounded-full " src="{{ asset('images/100x100.png') }}" alt="avatar" />
                            </div>
                            <span class="line-clamp-1">Konnor Guzman </span>
                        </a>
                        <p class="flex shrink-0 items-center space-x-1.5 text-slate-400 dark:text-navy-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-xs">03 July, 2022</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <img class="h-44 w-full rounded-2xl object-cover object-center "
                    src="{{ asset('images/800x600.png') }}" alt="image" />
                <div class="card -mt-8 grow rounded-2xl p-4">
                    <div>
                        <a href="#"
                            class="text-sm+ font-medium text-slate-700 line-clamp-1 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">What
                            is PHP?</a>
                    </div>
                    <p class="mt-2 grow line-clamp-3">
                        How Did We Get Here? The History of Music Told Through Tweets
                    </p>
                    <div class="mt-4 flex items-center justify-between">
                        <a href="#"
                            class="flex items-center space-x-2 text-xs hover:text-slate-800 dark:hover:text-navy-100">
                            <div class="avatar h-6 w-6">
                                <img class="rounded-full " src="{{ asset('images/100x100.png') }}" alt="avatar" />
                            </div>
                            <span class="line-clamp-1"> Travis Fuller </span>
                        </a>
                        <p class="flex shrink-0 items-center space-x-1.5 text-slate-400 dark:text-navy-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-xs">08 July, 2022</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <img class="h-44 w-full rounded-2xl object-cover object-center "
                    src="{{ asset('images/800x600.png') }}" alt="image" />
                <div class="card -mt-8 grow rounded-2xl p-4">
                    <div>
                        <a href="#"
                            class="text-sm+ font-medium text-slate-700 line-clamp-1 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">What
                            is PHP?</a>
                    </div>
                    <p class="mt-2 grow line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur. Lorem ipsum dolor on
                        the sit.
                    </p>
                    <div class="mt-4 flex items-center justify-between">
                        <a href="#"
                            class="flex items-center space-x-2 text-xs hover:text-slate-800 dark:hover:text-navy-100">
                            <div class="avatar h-6 w-6">
                                <img class="rounded-full " src="{{ asset('images/100x100.png') }}" alt="avatar" />
                            </div>
                            <span class="line-clamp-1">Travis Fuller </span>
                        </a>
                        <p class="flex shrink-0 items-center space-x-1.5 text-slate-400 dark:text-navy-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-xs">10 June, 2022</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <img class="h-44 w-full rounded-2xl object-cover object-center "
                    src="{{ asset('images/800x600.png') }}" alt="image" />
                <div class="card -mt-8 grow rounded-2xl p-4">
                    <div>
                        <a href="#"
                            class="text-sm+ font-medium text-slate-700 line-clamp-1 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">What
                            is Tailwind CSS?</a>
                    </div>
                    <p class="mt-2 grow line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut
                        distinctio dolorum harum.
                    </p>
                    <div class="mt-4 flex items-center justify-between">
                        <a href="#"
                            class="flex items-center space-x-2 text-xs hover:text-slate-800 dark:hover:text-navy-100">
                            <div class="avatar h-6 w-6">
                                <img class="rounded-full " src="{{ asset('images/100x100.png') }}" alt="avatar" />
                            </div>
                            <span class="line-clamp-1">John Doe</span>
                        </a>
                        <p class="flex shrink-0 items-center space-x-1.5 text-slate-400 dark:text-navy-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-xs">25 May, 2022</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <img class="h-44 w-full rounded-2xl object-cover object-center "
                    src="{{ asset('images/800x600.png') }}" alt="image" />
                <div class="card -mt-8 grow rounded-2xl p-4">
                    <div>
                        <a href="#"
                            class="text-sm+ font-medium text-slate-700 line-clamp-1 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">Tailwind
                            CSS Card Example</a>
                    </div>
                    <p class="mt-2 grow line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur. Lorem ipsum dolor on
                        the sit.
                    </p>
                    <div class="mt-4 flex items-center justify-between">
                        <a href="#"
                            class="flex items-center space-x-2 text-xs hover:text-slate-800 dark:hover:text-navy-100">
                            <div class="avatar h-6 w-6">
                                <img class="rounded-full " src="{{ asset('images/100x100.png') }}" alt="avatar" />
                            </div>
                            <span class="line-clamp-1">Konnor Guzman </span>
                        </a>
                        <p class="flex shrink-0 items-center space-x-1.5 text-slate-400 dark:text-navy-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-xs">30 May, 2022</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>

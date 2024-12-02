<x-app-layout title="Blog Card 4" is-header-blur="true">
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
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-3 lg:gap-6">
            <div class="card">
                <div class="flex items-center justify-between p-4">
                    <div class="flex items-center space-x-3">
                        <div x-data="usePopper({
                            offset: 12,
                            placement: 'bottom',
                            modifiers: [
                                { name: 'preventOverflow', options: { padding: 10 } }
                            ]
                        })" class="flex" @mouseleave="isShowPopper = false"
                            @mouseenter="isShowPopper = true">
                            <div x-ref="popperRef" class="avatar h-9 w-9">
                                <img class="rounded-full " src="{{ asset('images/100x100.png') }}" alt="avatar" />
                            </div>
                            <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                                <div class="popper-box">
                                    <div
                                        class="flex w-48 flex-col items-center rounded-md border border-slate-150 bg-white p-3 text-center dark:border-navy-600 dark:bg-navy-700">
                                        <div class="avatar h-16 w-16">
                                            <img class="rounded-full " src="{{ asset('images/100x100.png') }}"
                                                alt="avatar" />
                                        </div>
                                        <p class="mt-2 font-medium tracking-wide text-slate-700 dark:text-navy-100">
                                            Konnor Guzman
                                        </p>
                                        <a href="#"
                                            class="font-inter text-xs tracking-wide hover:text-primary focus:text-primary dark:hover:text-accent-light dark:focus:text-accent-light">@konnoraccount
                                        </a>
                                        <button
                                            class="btn mt-4 h-6 rounded-full bg-primary px-4 text-xs font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                            Follow
                                        </button>
                                    </div>
                                    <div class="h-4 w-4" data-popper-arrow>
                                        <svg viewBox="0 0 16 9" xmlns="http://www.w3.org/2000/svg"
                                            class="absolute h-4 w-4" fill="currentColor">
                                            <path class="text-slate-150 dark:text-navy-600"
                                                d="M1.5 8.357s-.48.624 2.754-4.779C5.583 1.35 6.796.01 8 0c1.204-.009 2.417 1.33 3.76 3.578 3.253 5.43 2.74 4.78 2.74 4.78h-13z" />
                                            <path class="text-white dark:text-navy-700"
                                                d="M0 9s1.796-.017 4.67-4.648C5.853 2.442 6.93 1.293 8 1.286c1.07-.008 2.147 1.14 3.343 3.066C14.233 9.006 15.999 9 15.999 9H0z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p class="text-slate-700 line-clamp-1 dark:text-navy-100">
                                Konnor Guzman
                            </p>
                            <p class="text-xs text-slate-400 dark:text-navy-300">
                                55 min ago
                            </p>
                        </div>
                    </div>
                    <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })" @click.outside="if(isShowPopper) isShowPopper = false"
                        class="inline-flex">
                        <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                            class="btn -mr-1.5 h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
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
                <img class="h-48 w-full object-cover object-center " src="{{ asset('images/800x600.png') }}"
                    alt="image" />
                <div class="grow px-4 pt-4">
                    <a href="#"
                        class="text-base font-medium text-slate-700 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">Food:
                        A Simple Definition</a>
                    <p class="mt-2 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias
                        delectus dolor dolores dolorum eos mollitia odio quaerat
                        sapiente, voluptates! Odio.
                    </p>
                    <div class="inline-space mt-3 flex flex-wrap">
                        <a href="#"
                            class="tag rounded-full bg-success/10 text-success hover:bg-success/20 focus:bg-success/20 active:bg-success/25">
                            Food
                        </a>
                        <a href="#"
                            class="tag rounded-full bg-primary/10 text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-accent-light/10 dark:text-accent-light dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25">
                            Health
                        </a>
                        <a href="#"
                            class="tag rounded-full bg-warning/10 text-warning hover:bg-warning/20 focus:bg-warning/20 active:bg-warning/25">
                            Sport
                        </a>
                    </div>
                </div>
                <div class="flex justify-between px-4 py-4">
                    <div class="flex flex-wrap -space-x-2">
                        <div class="avatar h-7 w-7 hover:z-10">
                            <img class="rounded-full ring ring-white dark:ring-navy-700"
                                src="{{ asset('images/100x100.png') }}" alt="avatar" />
                        </div>

                        <div class="avatar h-7 w-7 hover:z-10">
                            <div
                                class="is-initial rounded-full bg-info text-xs+ uppercase text-white ring ring-white dark:ring-navy-700">
                                jd
                            </div>
                        </div>

                        <div class="avatar h-7 w-7 hover:z-10">
                            <img class="rounded-full ring ring-white dark:ring-navy-700"
                                src="{{ asset('images/100x100.png') }}" alt="avatar" />
                        </div>

                        <div class="avatar h-7 w-7 hover:z-10">
                            <img class="rounded-full ring ring-white dark:ring-navy-700"
                                src="{{ asset('images/100x100.png') }}" alt="avatar" />
                        </div>
                    </div>
                    <div class="-mr-1.5 flex">
                        <button x-tooltip.secondary="'Like'"
                            class="btn h-7 w-7 rounded-full p-0 text-secondary hover:bg-secondary/20 focus:bg-secondary/20 active:bg-secondary/25 dark:text-secondary-light dark:hover:bg-secondary-light/20 dark:focus:bg-secondary-light/20 dark:active:bg-secondary-light/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>
                        <button x-tooltip="'Save'"
                            class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="border-t border-slate-200 px-2 py-1.5 dark:border-navy-500">
                    <div class="relative flex w-full">
                        <input
                            class="form-input peer h-8 w-full bg-transparent px-8 py-2 text-xs+ placeholder:text-slate-400/70"
                            placeholder="Write the commnet..." type="text" />
                        <div
                            class="pointer-events-none absolute flex h-full w-8 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                            <i class="fa fa-paper-plane"></i>
                        </div>
                        <div class="absolute right-0 z-10 flex h-8 w-8 items-center justify-center">
                            <button
                                class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 hover:text-primary focus:bg-slate-300/20 focus:text-primary active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:hover:text-accent-light dark:focus:bg-navy-300/20 dark:focus:text-accent-light dark:active:bg-navy-300/25">
                                <i class="fa-solid fa-microphone"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="flex items-center justify-between p-4">
                    <div class="flex items-center space-x-3">
                        <div x-data="usePopper({
                            offset: 12,
                            placement: 'bottom',
                            modifiers: [
                                { name: 'preventOverflow', options: { padding: 10 } }
                            ]
                        })" class="flex" @mouseleave="isShowPopper = false"
                            @mouseenter="isShowPopper = true">
                            <div x-ref="popperRef" class="avatar h-9 w-9">
                                <img class="rounded-full " src="{{ asset('images/100x100.png') }}" alt="avatar" />
                            </div>
                            <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                                <div class="popper-box">
                                    <div
                                        class="flex w-48 flex-col items-center rounded-md border border-slate-150 bg-white p-3 text-center dark:border-navy-600 dark:bg-navy-700">
                                        <div class="avatar h-16 w-16">
                                            <img class="rounded-full " src="{{ asset('images/100x100.png') }}"
                                                alt="avatar" />
                                        </div>
                                        <p class="mt-2 font-medium tracking-wide text-slate-700 dark:text-navy-100">
                                            Travis Fuller
                                        </p>
                                        <a href="#"
                                            class="font-inter text-xs tracking-wide hover:text-primary focus:text-primary dark:hover:text-accent-light dark:focus:text-accent-light">@travisaccount
                                        </a>
                                        <button
                                            class="btn mt-4 h-6 rounded-full bg-primary px-4 text-xs font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                            Follow
                                        </button>
                                    </div>
                                    <div class="h-4 w-4" data-popper-arrow>
                                        <svg viewBox="0 0 16 9" xmlns="http://www.w3.org/2000/svg"
                                            class="absolute h-4 w-4" fill="currentColor">
                                            <path class="text-slate-150 dark:text-navy-600"
                                                d="M1.5 8.357s-.48.624 2.754-4.779C5.583 1.35 6.796.01 8 0c1.204-.009 2.417 1.33 3.76 3.578 3.253 5.43 2.74 4.78 2.74 4.78h-13z" />
                                            <path class="text-white dark:text-navy-700"
                                                d="M0 9s1.796-.017 4.67-4.648C5.853 2.442 6.93 1.293 8 1.286c1.07-.008 2.147 1.14 3.343 3.066C14.233 9.006 15.999 9 15.999 9H0z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p class="text-slate-700 line-clamp-1 dark:text-navy-100">
                                Travis Fuller
                            </p>
                            <p class="text-xs text-slate-400 dark:text-navy-300">
                                2 hours ago
                            </p>
                        </div>
                    </div>
                    <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })" @click.outside="if(isShowPopper) isShowPopper = false"
                        class="inline-flex">
                        <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                            class="btn -mr-1.5 h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
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
                <img class="h-48 w-full object-cover object-center " src="{{ asset('images/800x600.png') }}"
                    alt="image" />
                <div class="grow px-4 pt-4">
                    <a href="#"
                        class="text-base font-medium text-slate-700 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">How
                        Did We Get Here? The History of Music Told Through
                        Tweets</a>
                    <p class="mt-2 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias
                        delectus dolor.
                    </p>
                    <div class="inline-space mt-3 flex flex-wrap">
                        <a href="#"
                            class="tag rounded-full bg-info/10 text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25">
                            Music
                        </a>
                        <a href="#"
                            class="tag rounded-full bg-secondary/10 text-secondary hover:bg-secondary/20 focus:bg-primary/20 active:bg-secondary/25 dark:bg-secondary-light/10 dark:text-secondary-light dark:hover:bg-secondary-light/20 dark:focus:bg-secondary-light/20 dark:active:bg-secondary-light/25">
                            Art
                        </a>
                        <a href="#"
                            class="tag rounded-full bg-error/10 text-error hover:bg-error/20 focus:bg-error/20 active:bg-error/25">
                            SoundTrack
                        </a>
                    </div>
                </div>
                <div class="flex justify-between px-4 py-4">
                    <div class="flex flex-wrap -space-x-2">
                        <div class="avatar h-7 w-7 hover:z-10">
                            <img class="rounded-full ring ring-white dark:ring-navy-700"
                                src="{{ asset('images/100x100.png') }}" alt="avatar" />
                        </div>

                        <div class="avatar h-7 w-7 hover:z-10">
                            <div
                                class="is-initial rounded-full bg-warning text-xs+ uppercase text-white ring ring-white dark:ring-navy-700">
                                SM
                            </div>
                        </div>

                        <div class="avatar h-7 w-7 hover:z-10">
                            <img class="rounded-full ring ring-white dark:ring-navy-700"
                                src="{{ asset('images/100x100.png') }}" alt="avatar" />
                        </div>

                        <div class="avatar h-7 w-7 hover:z-10">
                            <img class="rounded-full ring ring-white dark:ring-navy-700"
                                src="{{ asset('images/100x100.png') }}" alt="avatar" />
                        </div>
                    </div>
                    <div class="-mr-1.5 flex">
                        <button x-tooltip.secondary="'Like'"
                            class="btn h-7 w-7 rounded-full p-0 text-secondary hover:bg-secondary/20 focus:bg-secondary/20 active:bg-secondary/25 dark:text-secondary-light dark:hover:bg-secondary-light/20 dark:focus:bg-secondary-light/20 dark:active:bg-secondary-light/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>
                        <button x-tooltip="'Save'"
                            class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="border-t border-slate-200 px-2 py-1.5 dark:border-navy-500">
                    <div class="relative flex w-full">
                        <input
                            class="form-input peer h-8 w-full bg-transparent px-8 py-2 text-xs+ placeholder:text-slate-400/70"
                            placeholder="Write the commnet..." type="text" />
                        <div
                            class="pointer-events-none absolute flex h-full w-8 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                            <i class="fa fa-paper-plane"></i>
                        </div>
                        <div class="absolute right-0 z-10 flex h-8 w-8 items-center justify-center">
                            <button
                                class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 hover:text-primary focus:bg-slate-300/20 focus:text-primary active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:hover:text-accent-light dark:focus:bg-navy-300/20 dark:focus:text-accent-light dark:active:bg-navy-300/25">
                                <i class="fa-solid fa-microphone"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="flex items-center justify-between p-4">
                    <div class="flex items-center space-x-3">
                        <div x-data="usePopper({
                            offset: 12,
                            placement: 'bottom',
                            modifiers: [
                                { name: 'preventOverflow', options: { padding: 10 } }
                            ]
                        })" class="flex" @mouseleave="isShowPopper = false"
                            @mouseenter="isShowPopper = true">
                            <div x-ref="popperRef" class="avatar h-9 w-9">
                                <img class="rounded-full " src="{{ asset('images/100x100.png') }}" alt="avatar" />
                            </div>
                            <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                                <div class="popper-box">
                                    <div
                                        class="flex w-48 flex-col items-center rounded-md border border-slate-150 bg-white p-3 text-center dark:border-navy-600 dark:bg-navy-700">
                                        <div class="avatar h-16 w-16">
                                            <img class="rounded-full " src="{{ asset('images/100x100.png') }}"
                                                alt="avatar" />
                                        </div>
                                        <p class="mt-2 font-medium tracking-wide text-slate-700 dark:text-navy-100">
                                            Alfredo Elliott
                                        </p>
                                        <a href="#"
                                            class="font-inter text-xs tracking-wide hover:text-primary focus:text-primary dark:hover:text-accent-light dark:focus:text-accent-light">@alfredaccount
                                        </a>
                                        <button
                                            class="btn mt-4 h-6 rounded-full bg-primary px-4 text-xs font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                            Follow
                                        </button>
                                    </div>
                                    <div class="h-4 w-4" data-popper-arrow>
                                        <svg viewBox="0 0 16 9" xmlns="http://www.w3.org/2000/svg"
                                            class="absolute h-4 w-4" fill="currentColor">
                                            <path class="text-slate-150 dark:text-navy-600"
                                                d="M1.5 8.357s-.48.624 2.754-4.779C5.583 1.35 6.796.01 8 0c1.204-.009 2.417 1.33 3.76 3.578 3.253 5.43 2.74 4.78 2.74 4.78h-13z" />
                                            <path class="text-white dark:text-navy-700"
                                                d="M0 9s1.796-.017 4.67-4.648C5.853 2.442 6.93 1.293 8 1.286c1.07-.008 2.147 1.14 3.343 3.066C14.233 9.006 15.999 9 15.999 9H0z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p class="text-slate-700 line-clamp-1 dark:text-navy-100">
                                Alfredo Elliott
                            </p>
                            <p class="text-xs text-slate-400 dark:text-navy-300">
                                a day ago
                            </p>
                        </div>
                    </div>
                    <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })" @click.outside="if(isShowPopper) isShowPopper = false"
                        class="inline-flex">
                        <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                            class="btn -mr-1.5 h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
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
                <img class="h-48 w-full object-cover object-center " src="{{ asset('images/800x600.png') }}"
                    alt="image" />
                <div class="grow px-4 pt-4">
                    <a href="#"
                        class="text-base font-medium text-slate-700 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">The
                        12 Worst Types Business Accounts You Follow on Twitter</a>
                    <p class="mt-2 line-clamp-3">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Perspiciatis voluptas deserunt nemo?
                    </p>
                    <div class="inline-space mt-3 flex flex-wrap">
                        <a href="#"
                            class="tag rounded-full bg-primary/10 text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-accent-light/10 dark:text-accent-light dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25">
                            Business
                        </a>
                        <a href="#"
                            class="tag rounded-full bg-warning/10 text-warning hover:bg-warning/20 focus:bg-warning/20 active:bg-warning/25">
                            Twitter
                        </a>
                        <a href="#"
                            class="tag rounded-full bg-secondary/10 text-secondary hover:bg-secondary/20 focus:bg-primary/20 active:bg-secondary/25 dark:bg-secondary-light/10 dark:text-secondary-light dark:hover:bg-secondary-light/20 dark:focus:bg-secondary-light/20 dark:active:bg-secondary-light/25">
                            Development
                        </a>
                    </div>
                </div>
                <div class="flex justify-between px-4 py-4">
                    <div class="flex flex-wrap -space-x-2">
                        <div class="avatar h-7 w-7 hover:z-10">
                            <img class="rounded-full ring ring-white dark:ring-navy-700"
                                src="{{ asset('images/100x100.png') }}" alt="avatar" />
                        </div>

                        <div class="avatar h-7 w-7 hover:z-10">
                            <div
                                class="is-initial rounded-full bg-success text-xs+ uppercase text-white ring ring-white dark:ring-navy-700">
                                SM
                            </div>
                        </div>

                        <div class="avatar h-7 w-7 hover:z-10">
                            <img class="rounded-full ring ring-white dark:ring-navy-700"
                                src="{{ asset('images/100x100.png') }}" alt="avatar" />
                        </div>

                        <div class="avatar h-7 w-7 hover:z-10">
                            <img class="rounded-full ring ring-white dark:ring-navy-700"
                                src="{{ asset('images/100x100.png') }}" alt="avatar" />
                        </div>
                    </div>
                    <div class="-mr-1.5 flex">
                        <button x-tooltip.secondary="'Like'"
                            class="btn h-7 w-7 rounded-full p-0 text-secondary hover:bg-secondary/20 focus:bg-secondary/20 active:bg-secondary/25 dark:text-secondary-light dark:hover:bg-secondary-light/20 dark:focus:bg-secondary-light/20 dark:active:bg-secondary-light/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>
                        <button x-tooltip="'Save'"
                            class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="border-t border-slate-200 px-2 py-1.5 dark:border-navy-500">
                    <div class="relative flex w-full">
                        <input
                            class="form-input peer h-8 w-full bg-transparent px-8 py-2 text-xs+ placeholder:text-slate-400/70"
                            placeholder="Write the commnet..." type="text" />
                        <div
                            class="pointer-events-none absolute flex h-full w-8 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                            <i class="fa fa-paper-plane"></i>
                        </div>
                        <div class="absolute right-0 z-10 flex h-8 w-8 items-center justify-center">
                            <button
                                class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 hover:text-primary focus:bg-slate-300/20 focus:text-primary active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:hover:text-accent-light dark:focus:bg-navy-300/20 dark:focus:text-accent-light dark:active:bg-navy-300/25">
                                <i class="fa-solid fa-microphone"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="flex items-center justify-between p-4">
                    <div class="flex items-center space-x-3">
                        <div x-data="usePopper({
                            offset: 12,
                            placement: 'bottom',
                            modifiers: [
                                { name: 'preventOverflow', options: { padding: 10 } }
                            ]
                        })" class="flex" @mouseleave="isShowPopper = false"
                            @mouseenter="isShowPopper = true">
                            <div x-ref="popperRef" class="avatar h-9 w-9">
                                <img class="rounded-full " src="{{ asset('images/100x100.png') }}" alt="avatar" />
                            </div>
                            <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                                <div class="popper-box">
                                    <div
                                        class="flex w-48 flex-col items-center rounded-md border border-slate-150 bg-white p-3 text-center dark:border-navy-600 dark:bg-navy-700">
                                        <div class="avatar h-16 w-16">
                                            <img class="rounded-full " src="{{ asset('images/100x100.png') }}"
                                                alt="avatar" />
                                        </div>
                                        <p class="mt-2 font-medium tracking-wide text-slate-700 dark:text-navy-100">
                                            Katrina West
                                        </p>
                                        <a href="#"
                                            class="font-inter text-xs tracking-wide hover:text-primary focus:text-primary dark:hover:text-accent-light dark:focus:text-accent-light">@katrinawest
                                        </a>
                                        <button
                                            class="btn mt-4 h-6 rounded-full bg-primary px-4 text-xs font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                            Follow
                                        </button>
                                    </div>
                                    <div class="h-4 w-4" data-popper-arrow>
                                        <svg viewBox="0 0 16 9" xmlns="http://www.w3.org/2000/svg"
                                            class="absolute h-4 w-4" fill="currentColor">
                                            <path class="text-slate-150 dark:text-navy-600"
                                                d="M1.5 8.357s-.48.624 2.754-4.779C5.583 1.35 6.796.01 8 0c1.204-.009 2.417 1.33 3.76 3.578 3.253 5.43 2.74 4.78 2.74 4.78h-13z" />
                                            <path class="text-white dark:text-navy-700"
                                                d="M0 9s1.796-.017 4.67-4.648C5.853 2.442 6.93 1.293 8 1.286c1.07-.008 2.147 1.14 3.343 3.066C14.233 9.006 15.999 9 15.999 9H0z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p class="text-slate-700 line-clamp-1 dark:text-navy-100">
                                Katrina West
                            </p>
                            <p class="text-xs text-slate-400 dark:text-navy-300">
                                3 days ago
                            </p>
                        </div>
                    </div>
                    <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })" @click.outside="if(isShowPopper) isShowPopper = false"
                        class="inline-flex">
                        <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                            class="btn -mr-1.5 h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
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
                <img class="h-48 w-full object-cover object-center " src="{{ asset('images/800x600.png') }}"
                    alt="image" />
                <div class="grow px-4 pt-4">
                    <a href="#"
                        class="text-base font-medium text-slate-700 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">10
                        Tips for Making a Good Camera Even Better</a>
                    <p class="mt-2 line-clamp-3">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Recusandae, pariatur voluptatem numquam soluta nemo ratione
                        nobis minus aliquam?
                    </p>
                    <div class="inline-space mt-3 flex flex-wrap">
                        <a href="#"
                            class="tag rounded-full bg-primary/10 text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-accent-light/10 dark:text-accent-light dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25">
                            Phorograpy
                        </a>
                        <a href="#"
                            class="tag rounded-full bg-warning/10 text-warning hover:bg-warning/20 focus:bg-warning/20 active:bg-warning/25">
                            Camera
                        </a>
                        <a href="#"
                            class="tag rounded-full bg-secondary/10 text-secondary hover:bg-secondary/20 focus:bg-primary/20 active:bg-secondary/25 dark:bg-secondary-light/10 dark:text-secondary-light dark:hover:bg-secondary-light/20 dark:focus:bg-secondary-light/20 dark:active:bg-secondary-light/25">
                            Shot
                        </a>
                    </div>
                </div>
                <div class="flex justify-between px-4 py-4">
                    <div class="flex flex-wrap -space-x-2">
                        <div class="avatar h-7 w-7 hover:z-10">
                            <img class="rounded-full ring ring-white dark:ring-navy-700"
                                src="{{ asset('images/100x100.png') }}" alt="avatar" />
                        </div>

                        <div class="avatar h-7 w-7 hover:z-10">
                            <div
                                class="is-initial rounded-full bg-primary text-xs+ uppercase text-white ring ring-white dark:bg-accent dark:ring-navy-700">
                                SM
                            </div>
                        </div>

                        <div class="avatar h-7 w-7 hover:z-10">
                            <img class="rounded-full ring ring-white dark:ring-navy-700"
                                src="{{ asset('images/100x100.png') }}" alt="avatar" />
                        </div>

                        <div class="avatar h-7 w-7 hover:z-10">
                            <img class="rounded-full ring ring-white dark:ring-navy-700"
                                src="{{ asset('images/100x100.png') }}" alt="avatar" />
                        </div>
                    </div>
                    <div class="-mr-1.5 flex">
                        <button x-tooltip.secondary="'Like'"
                            class="btn h-7 w-7 rounded-full p-0 text-secondary hover:bg-secondary/20 focus:bg-secondary/20 active:bg-secondary/25 dark:text-secondary-light dark:hover:bg-secondary-light/20 dark:focus:bg-secondary-light/20 dark:active:bg-secondary-light/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>
                        <button x-tooltip="'Save'"
                            class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="border-t border-slate-200 px-2 py-1.5 dark:border-navy-500">
                    <div class="relative flex w-full">
                        <input
                            class="form-input peer h-8 w-full bg-transparent px-8 py-2 text-xs+ placeholder:text-slate-400/70"
                            placeholder="Write the commnet..." type="text" />
                        <div
                            class="pointer-events-none absolute flex h-full w-8 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                            <i class="fa fa-paper-plane"></i>
                        </div>
                        <div class="absolute right-0 z-10 flex h-8 w-8 items-center justify-center">
                            <button
                                class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 hover:text-primary focus:bg-slate-300/20 focus:text-primary active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:hover:text-accent-light dark:focus:bg-navy-300/20 dark:focus:text-accent-light dark:active:bg-navy-300/25">
                                <i class="fa-solid fa-microphone"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="flex items-center justify-between p-4">
                    <div class="flex items-center space-x-3">
                        <div x-data="usePopper({
                            offset: 12,
                            placement: 'bottom',
                            modifiers: [
                                { name: 'preventOverflow', options: { padding: 10 } }
                            ]
                        })" class="flex" @mouseleave="isShowPopper = false"
                            @mouseenter="isShowPopper = true">
                            <div x-ref="popperRef" class="avatar h-9 w-9">
                                <img class="rounded-full " src="{{ asset('images/100x100.png') }}" alt="avatar" />
                            </div>
                            <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                                <div class="popper-box">
                                    <div
                                        class="flex w-48 flex-col items-center rounded-md border border-slate-150 bg-white p-3 text-center dark:border-navy-600 dark:bg-navy-700">
                                        <div class="avatar h-16 w-16">
                                            <img class="rounded-full " src="{{ asset('images/100x100.png') }}"
                                                alt="avatar" />
                                        </div>
                                        <p class="mt-2 font-medium tracking-wide text-slate-700 dark:text-navy-100">
                                            Henry Curtis
                                        </p>
                                        <a href="#"
                                            class="font-inter text-xs tracking-wide hover:text-primary focus:text-primary dark:hover:text-accent-light dark:focus:text-accent-light">@Henrycurtis
                                        </a>
                                        <button
                                            class="btn mt-4 h-6 rounded-full bg-primary px-4 text-xs font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                            Follow
                                        </button>
                                    </div>
                                    <div class="h-4 w-4" data-popper-arrow>
                                        <svg viewBox="0 0 16 9" xmlns="http://www.w3.org/2000/svg"
                                            class="absolute h-4 w-4" fill="currentColor">
                                            <path class="text-slate-150 dark:text-navy-600"
                                                d="M1.5 8.357s-.48.624 2.754-4.779C5.583 1.35 6.796.01 8 0c1.204-.009 2.417 1.33 3.76 3.578 3.253 5.43 2.74 4.78 2.74 4.78h-13z" />
                                            <path class="text-white dark:text-navy-700"
                                                d="M0 9s1.796-.017 4.67-4.648C5.853 2.442 6.93 1.293 8 1.286c1.07-.008 2.147 1.14 3.343 3.066C14.233 9.006 15.999 9 15.999 9H0z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p class="text-slate-700 line-clamp-1 dark:text-navy-100">
                                Henry Curtis
                            </p>
                            <p class="text-xs text-slate-400 dark:text-navy-300">
                                8 days ago
                            </p>
                        </div>
                    </div>
                    <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })" @click.outside="if(isShowPopper) isShowPopper = false"
                        class="inline-flex">
                        <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                            class="btn -mr-1.5 h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
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
                <img class="h-48 w-full object-cover object-center " src="{{ asset('images/800x600.png') }}"
                    alt="image" />
                <div class="grow px-4 pt-4">
                    <a href="#"
                        class="text-base font-medium text-slate-700 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">10
                        Meetups About Food You Should Attend</a>
                    <p class="mt-2 line-clamp-3">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Recusandae, pariatur voluptatem numquam soluta nemo ratione
                        nobis minus aliquam?
                    </p>
                    <div class="inline-space mt-3 flex flex-wrap">
                        <a href="#"
                            class="tag rounded-full bg-success/10 text-success hover:bg-success/20 focus:bg-success/20 active:bg-success/25">
                            Food
                        </a>
                        <a href="#"
                            class="tag rounded-full bg-primary/10 text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-accent-light/10 dark:text-accent-light dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25">
                            Health
                        </a>
                        <a href="#"
                            class="tag rounded-full bg-warning/10 text-warning hover:bg-warning/20 focus:bg-warning/20 active:bg-warning/25">
                            Sport
                        </a>
                    </div>
                </div>
                <div class="flex justify-between px-4 py-4">
                    <div class="flex flex-wrap -space-x-2">
                        <div class="avatar h-7 w-7 hover:z-10">
                            <img class="rounded-full ring ring-white dark:ring-navy-700"
                                src="{{ asset('images/100x100.png') }}" alt="avatar" />
                        </div>

                        <div class="avatar h-7 w-7 hover:z-10">
                            <div
                                class="is-initial rounded-full bg-error text-xs+ uppercase text-white ring ring-white dark:ring-navy-700">
                                ZI
                            </div>
                        </div>

                        <div class="avatar h-7 w-7 hover:z-10">
                            <img class="rounded-full ring ring-white dark:ring-navy-700"
                                src="{{ asset('images/100x100.png') }}" alt="avatar" />
                        </div>

                        <div class="avatar h-7 w-7 hover:z-10">
                            <img class="rounded-full ring ring-white dark:ring-navy-700"
                                src="{{ asset('images/100x100.png') }}" alt="avatar" />
                        </div>
                    </div>
                    <div class="-mr-1.5 flex">
                        <button x-tooltip.secondary="'Like'"
                            class="btn h-7 w-7 rounded-full p-0 text-secondary hover:bg-secondary/20 focus:bg-secondary/20 active:bg-secondary/25 dark:text-secondary-light dark:hover:bg-secondary-light/20 dark:focus:bg-secondary-light/20 dark:active:bg-secondary-light/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>
                        <button x-tooltip="'Save'"
                            class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="border-t border-slate-200 px-2 py-1.5 dark:border-navy-500">
                    <div class="relative flex w-full">
                        <input
                            class="form-input peer h-8 w-full bg-transparent px-8 py-2 text-xs+ placeholder:text-slate-400/70"
                            placeholder="Write the commnet..." type="text" />
                        <div
                            class="pointer-events-none absolute flex h-full w-8 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                            <i class="fa fa-paper-plane"></i>
                        </div>
                        <div class="absolute right-0 z-10 flex h-8 w-8 items-center justify-center">
                            <button
                                class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 hover:text-primary focus:bg-slate-300/20 focus:text-primary active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:hover:text-accent-light dark:focus:bg-navy-300/20 dark:focus:text-accent-light dark:active:bg-navy-300/25">
                                <i class="fa-solid fa-microphone"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="flex items-center justify-between p-4">
                    <div class="flex items-center space-x-3">
                        <div x-data="usePopper({
                            offset: 12,
                            placement: 'bottom',
                            modifiers: [
                                { name: 'preventOverflow', options: { padding: 10 } }
                            ]
                        })" class="flex" @mouseleave="isShowPopper = false"
                            @mouseenter="isShowPopper = true">
                            <div x-ref="popperRef" class="avatar h-9 w-9">
                                <img class="rounded-full " src="{{ asset('images/100x100.png') }}" alt="avatar" />
                            </div>
                            <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                                <div class="popper-box">
                                    <div
                                        class="flex w-48 flex-col items-center rounded-md border border-slate-150 bg-white p-3 text-center dark:border-navy-600 dark:bg-navy-700">
                                        <div class="avatar h-16 w-16">
                                            <img class="rounded-full " src="{{ asset('images/100x100.png') }}"
                                                alt="avatar" />
                                        </div>
                                        <p class="mt-2 font-medium tracking-wide text-slate-700 dark:text-navy-100">
                                            Samantha Shelton
                                        </p>
                                        <a href="#"
                                            class="font-inter text-xs tracking-wide hover:text-primary focus:text-primary dark:hover:text-accent-light dark:focus:text-accent-light">@Samanthashelton
                                        </a>
                                        <button
                                            class="btn mt-4 h-6 rounded-full bg-primary px-4 text-xs font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                            Follow
                                        </button>
                                    </div>
                                    <div class="h-4 w-4" data-popper-arrow>
                                        <svg viewBox="0 0 16 9" xmlns="http://www.w3.org/2000/svg"
                                            class="absolute h-4 w-4" fill="currentColor">
                                            <path class="text-slate-150 dark:text-navy-600"
                                                d="M1.5 8.357s-.48.624 2.754-4.779C5.583 1.35 6.796.01 8 0c1.204-.009 2.417 1.33 3.76 3.578 3.253 5.43 2.74 4.78 2.74 4.78h-13z" />
                                            <path class="text-white dark:text-navy-700"
                                                d="M0 9s1.796-.017 4.67-4.648C5.853 2.442 6.93 1.293 8 1.286c1.07-.008 2.147 1.14 3.343 3.066C14.233 9.006 15.999 9 15.999 9H0z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p class="text-slate-700 line-clamp-1 dark:text-navy-100">
                                Samantha Shelton
                            </p>
                            <p class="text-xs text-slate-400 dark:text-navy-300">
                                12 days ago
                            </p>
                        </div>
                    </div>
                    <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })" @click.outside="if(isShowPopper) isShowPopper = false"
                        class="inline-flex">
                        <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                            class="btn -mr-1.5 h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
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
                <img class="h-48 w-full object-cover object-center " src="{{ asset('images/800x600.png') }}"
                    alt="image" />
                <div class="grow px-4 pt-4">
                    <a href="#"
                        class="text-base font-medium text-slate-700 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">25
                        Surprising Facts About Chair</a>
                    <p class="mt-2 line-clamp-3">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Recusandae, pariatur voluptatem numquam soluta nemo ratione
                        nobis minus aliquam?
                    </p>

                    <div class="inline-space mt-3 flex flex-wrap">
                        <a href="#"
                            class="tag rounded-full bg-info/10 text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25">
                            Chair
                        </a>
                        <a href="#"
                            class="tag rounded-full bg-secondary/10 text-secondary hover:bg-secondary/20 focus:bg-primary/20 active:bg-secondary/25 dark:bg-secondary-light/10 dark:text-secondary-light dark:hover:bg-secondary-light/20 dark:focus:bg-secondary-light/20 dark:active:bg-secondary-light/25">
                            Facts
                        </a>
                        <a href="#"
                            class="tag rounded-full bg-error/10 text-error hover:bg-error/20 focus:bg-error/20 active:bg-error/25">
                            Products
                        </a>
                    </div>
                </div>
                <div class="flex justify-between px-4 py-4">
                    <div class="flex flex-wrap -space-x-2">
                        <div class="avatar h-7 w-7 hover:z-10">
                            <img class="rounded-full ring ring-white dark:ring-navy-700"
                                src="{{ asset('images/100x100.png') }}" alt="avatar" />
                        </div>

                        <div class="avatar h-7 w-7 hover:z-10">
                            <div
                                class="is-initial rounded-full bg-warning text-xs+ uppercase text-white ring ring-white dark:ring-navy-700">
                                Yt
                            </div>
                        </div>

                        <div class="avatar h-7 w-7 hover:z-10">
                            <img class="rounded-full ring ring-white dark:ring-navy-700"
                                src="{{ asset('images/100x100.png') }}" alt="avatar" />
                        </div>

                        <div class="avatar h-7 w-7 hover:z-10">
                            <img class="rounded-full ring ring-white dark:ring-navy-700"
                                src="{{ asset('images/100x100.png') }}" alt="avatar" />
                        </div>
                    </div>
                    <div class="-mr-1.5 flex">
                        <button x-tooltip.secondary="'Like'"
                            class="btn h-7 w-7 rounded-full p-0 text-secondary hover:bg-secondary/20 focus:bg-secondary/20 active:bg-secondary/25 dark:text-secondary-light dark:hover:bg-secondary-light/20 dark:focus:bg-secondary-light/20 dark:active:bg-secondary-light/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>
                        <button x-tooltip="'Save'"
                            class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="border-t border-slate-200 px-2 py-1.5 dark:border-navy-500">
                    <div class="relative flex w-full">
                        <input
                            class="form-input peer h-8 w-full bg-transparent px-8 py-2 text-xs+ placeholder:text-slate-400/70"
                            placeholder="Write the commnet..." type="text" />
                        <div
                            class="pointer-events-none absolute flex h-full w-8 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                            <i class="fa fa-paper-plane"></i>
                        </div>
                        <div class="absolute right-0 z-10 flex h-8 w-8 items-center justify-center">
                            <button
                                class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 hover:text-primary focus:bg-slate-300/20 focus:text-primary active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:hover:text-accent-light dark:focus:bg-navy-300/20 dark:focus:text-accent-light dark:active:bg-navy-300/25">
                                <i class="fa-solid fa-microphone"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>

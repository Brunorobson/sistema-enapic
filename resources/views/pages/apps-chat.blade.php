<x-base-layout title="Chat App" is-sidebar-open="true" has-min-sidebar="true">
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
                            <div
                                class="is-initial rounded-full bg-primary/10 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                </svg>
                            </div>
                        </div>
                        <p class="text-lg font-medium tracking-wider text-slate-800 line-clamp-1 dark:text-navy-100">
                            Chat
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
                    <div>
                        <div class="flex items-center justify-between px-4">
                            <span class="text-xs+ font-medium uppercase">History</span>
                            <div class="-mr-1.5 flex">
                                <button
                                    class="btn h-6 w-6 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="swiper px-4" x-init="$nextTick(() => $el._x_swiper = new Swiper($el, { slidesPerView: 'auto', spaceBetween: 10, slidesPerGroup: 3 }))">
                            <div class="swiper-wrapper mt-1">
                                <div class="swiper-slide flex w-11 shrink-0 flex-col items-center justify-center">
                                    <div
                                        class="h-11 w-11 rounded-full bg-gradient-to-r from-purple-500 to-orange-600 p-0.5">
                                        <img class="h-full w-full rounded-full border-2 border-white object-cover dark:border-slate-700"
                                            src="{{ asset('images/100x100.png') }}" alt="avatar" />
                                    </div>
                                    <p
                                        class="mt-1 w-14 break-words text-center text-xs text-slate-600 line-clamp-1 dark:text-navy-100">
                                        Konnor
                                    </p>
                                </div>
                                <div class="swiper-slide flex w-11 shrink-0 flex-col items-center justify-center">
                                    <div
                                        class="h-11 w-11 rounded-full bg-gradient-to-r from-purple-500 to-orange-600 p-0.5">
                                        <img class="h-full w-full rounded-full border-2 border-white object-cover dark:border-slate-700"
                                            src="{{ asset('images/100x100.png') }}" alt="avatar" />
                                    </div>
                                    <p
                                        class="mt-1 w-14 break-words text-center text-xs text-slate-600 line-clamp-1 dark:text-navy-100">
                                        Travis
                                    </p>
                                </div>
                                <div class="swiper-slide flex w-11 shrink-0 flex-col items-center justify-center">
                                    <div
                                        class="h-11 w-11 rounded-full bg-gradient-to-r from-purple-500 to-orange-600 p-0.5">
                                        <img class="h-full w-full rounded-full border-2 border-white object-cover dark:border-slate-700"
                                            src="{{ asset('images/100x100.png') }}" alt="avatar" />
                                    </div>
                                    <p
                                        class="mt-1 w-14 break-words text-center text-xs text-slate-600 line-clamp-1 dark:text-navy-100">
                                        Fuller
                                    </p>
                                </div>
                                <div class="swiper-slide flex w-11 shrink-0 flex-col items-center justify-center">
                                    <div
                                        class="h-11 w-11 rounded-full bg-gradient-to-r from-purple-500 to-orange-600 p-0.5">
                                        <img class="h-full w-full rounded-full border-2 border-white object-cover dark:border-slate-700"
                                            src="{{ asset('images/100x100.png') }}" alt="avatar" />
                                    </div>
                                    <p
                                        class="mt-1 w-14 break-words text-center text-xs text-slate-600 line-clamp-1 dark:text-navy-100">
                                        Alfredo
                                    </p>
                                </div>
                                <div class="swiper-slide flex w-11 shrink-0 flex-col items-center justify-center">
                                    <div
                                        class="h-11 w-11 rounded-full bg-gradient-to-r from-purple-500 to-orange-600 p-0.5">
                                        <img class="h-full w-full rounded-full border-2 border-white object-cover dark:border-slate-700"
                                            src="{{ asset('images/100x100.png') }}" alt="avatar" />
                                    </div>
                                    <p
                                        class="mt-1 w-14 break-words text-center text-xs text-slate-600 line-clamp-1 dark:text-navy-100">
                                        Elliott
                                    </p>
                                </div>
                                <div class="swiper-slide flex w-11 shrink-0 flex-col items-center justify-center">
                                    <div
                                        class="h-11 w-11 rounded-full bg-gradient-to-r from-purple-500 to-orange-600 p-0.5">
                                        <img class="h-full w-full rounded-full border-2 border-white object-cover dark:border-slate-700"
                                            src="{{ asset('images/100x100.png') }}" alt="avatar" />
                                    </div>
                                    <p
                                        class="mt-1 w-14 break-words text-center text-xs text-slate-600 line-clamp-1 dark:text-navy-100">
                                        Derrick
                                    </p>
                                </div>
                                <div class="swiper-slide flex w-11 shrink-0 flex-col items-center justify-center">
                                    <div
                                        class="h-11 w-11 rounded-full bg-gradient-to-r from-purple-500 to-orange-600 p-0.5">
                                        <img class="h-full w-full rounded-full border-2 border-white object-cover dark:border-slate-700"
                                            src="{{ asset('images/100x100.png') }}" alt="avatar" />
                                    </div>
                                    <p
                                        class="mt-1 w-14 break-words text-center text-xs text-slate-600 line-clamp-1 dark:text-navy-100">
                                        Simmons
                                    </p>
                                </div>
                                <div class="swiper-slide flex w-11 shrink-0 flex-col items-center justify-center">
                                    <div
                                        class="h-11 w-11 rounded-full bg-gradient-to-r from-purple-500 to-orange-600 p-0.5">
                                        <img class="h-full w-full rounded-full border-2 border-white object-cover dark:border-slate-700"
                                            src="{{ asset('images/100x100.png') }}" alt="avatar" />
                                    </div>
                                    <p
                                        class="mt-1 w-14 break-words text-center text-xs text-slate-600 line-clamp-1 dark:text-navy-100">
                                        Katrina
                                    </p>
                                </div>
                                <div class="swiper-slide flex w-11 shrink-0 flex-col items-center justify-center">
                                    <div
                                        class="h-11 w-11 rounded-full bg-gradient-to-r from-purple-500 to-orange-600 p-0.5">
                                        <img class="h-full w-full rounded-full border-2 border-white object-cover dark:border-slate-700"
                                            src="{{ asset('images/100x100.png') }}" alt="avatar" />
                                    </div>
                                    <p
                                        class="mt-1 w-14 break-words text-center text-xs text-slate-600 line-clamp-1 dark:text-navy-100">
                                        Henry
                                    </p>
                                </div>
                                <div class="swiper-slide flex w-11 shrink-0 flex-col items-center justify-center">
                                    <div
                                        class="h-11 w-11 rounded-full bg-gradient-to-r from-purple-500 to-orange-600 p-0.5">
                                        <img class="h-full w-full rounded-full border-2 border-white object-cover dark:border-slate-700"
                                            src="{{ asset('images/100x100.png') }}" alt="avatar" />
                                    </div>
                                    <p
                                        class="mt-1 w-14 break-words text-center text-xs text-slate-600 line-clamp-1 dark:text-navy-100">
                                        Curtis
                                    </p>
                                </div>
                                <div class="swiper-slide flex w-11 shrink-0 flex-col items-center justify-center">
                                    <div
                                        class="h-11 w-11 rounded-full bg-gradient-to-r from-purple-500 to-orange-600 p-0.5">
                                        <img class="h-full w-full rounded-full border-2 border-white object-cover dark:border-slate-700"
                                            src="{{ asset('images/100x100.png') }}" alt="avatar" />
                                    </div>
                                    <p
                                        class="mt-1 w-14 break-words text-center text-xs text-slate-600 line-clamp-1 dark:text-navy-100">
                                        Bradley
                                    </p>
                                </div>
                                <div class="swiper-slide flex w-11 shrink-0 flex-col items-center justify-center">
                                    <div
                                        class="h-11 w-11 rounded-full bg-gradient-to-r from-purple-500 to-orange-600 p-0.5">
                                        <img class="h-full w-full rounded-full border-2 border-white object-cover dark:border-slate-700"
                                            src="{{ asset('images/100x100.png') }}" alt="avatar" />
                                    </div>
                                    <p
                                        class="mt-1 w-14 break-words text-center text-xs text-slate-600 line-clamp-1 dark:text-navy-100">
                                        Samantha
                                    </p>
                                </div>
                                <div class="swiper-slide flex w-11 shrink-0 flex-col items-center justify-center">
                                    <div
                                        class="h-11 w-11 rounded-full bg-gradient-to-r from-purple-500 to-orange-600 p-0.5">
                                        <img class="h-full w-full rounded-full border-2 border-white object-cover dark:border-slate-700"
                                            src="{{ asset('images/100x100.png') }}" alt="avatar" />
                                    </div>
                                    <p
                                        class="mt-1 w-14 break-words text-center text-xs text-slate-600 line-clamp-1 dark:text-navy-100">
                                        Corey
                                    </p>
                                </div>
                                <div class="swiper-slide flex w-11 shrink-0 flex-col items-center justify-center">
                                    <div
                                        class="h-11 w-11 rounded-full bg-gradient-to-r from-purple-500 to-orange-600 p-0.5">
                                        <img class="h-full w-full rounded-full border-2 border-white object-cover dark:border-slate-700"
                                            src="{{ asset('images/100x100.png') }}" alt="avatar" />
                                    </div>
                                    <p
                                        class="mt-1 w-14 break-words text-center text-xs text-slate-600 line-clamp-1 dark:text-navy-100">
                                        Lance
                                    </p>
                                </div>
                                <div class="swiper-slide flex w-11 shrink-0 flex-col items-center justify-center">
                                    <div
                                        class="h-11 w-11 rounded-full bg-gradient-to-r from-purple-500 to-orange-600 p-0.5">
                                        <img class="h-full w-full rounded-full border-2 border-white object-cover dark:border-slate-700"
                                            src="{{ asset('images/100x100.png') }}" alt="avatar" />
                                    </div>
                                    <p
                                        class="mt-1 w-14 break-words text-center text-xs text-slate-600 line-clamp-1 dark:text-navy-100">
                                        Tucker
                                    </p>
                                </div>
                                <div class="swiper-slide flex w-11 shrink-0 flex-col items-center justify-center">
                                    <div
                                        class="h-11 w-11 rounded-full bg-gradient-to-r from-purple-500 to-orange-600 p-0.5">
                                        <img class="h-full w-full rounded-full border-2 border-white object-cover dark:border-slate-700"
                                            src="{{ asset('images/100x100.png') }}" alt="avatar" />
                                    </div>
                                    <p
                                        class="mt-1 w-14 break-words text-center text-xs text-slate-600 line-clamp-1 dark:text-navy-100">
                                        Jensen
                                    </p>
                                </div>
                                <div class="swiper-slide flex w-11 shrink-0 flex-col items-center justify-center">
                                    <div
                                        class="h-11 w-11 rounded-full bg-gradient-to-r from-purple-500 to-orange-600 p-0.5">
                                        <img class="h-full w-full rounded-full border-2 border-white object-cover dark:border-slate-700"
                                            src="{{ asset('images/100x100.png') }}" alt="avatar" />
                                    </div>
                                    <p
                                        class="mt-1 w-14 break-words text-center text-xs text-slate-600 line-clamp-1 dark:text-navy-100">
                                        Perkins
                                    </p>
                                </div>
                                <div class="swiper-slide flex w-11 shrink-0 flex-col items-center justify-center">
                                    <div
                                        class="h-11 w-11 rounded-full bg-gradient-to-r from-purple-500 to-orange-600 p-0.5">
                                        <img class="h-full w-full rounded-full border-2 border-white object-cover dark:border-slate-700"
                                            src="{{ asset('images/100x100.png') }}" alt="avatar" />
                                    </div>
                                    <p
                                        class="mt-1 w-14 break-words text-center text-xs text-slate-600 line-clamp-1 dark:text-navy-100">
                                        Evans
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 flex px-4">
                        <label class="relative mr-1.5 flex">
                            <input
                                class="form-input peer h-8 w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 text-xs+ ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                                placeholder="Search chats" type="text" />
                            <span
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-colors duration-200"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M3.316 13.781l.73-.171-.73.171zm0-5.457l.73.171-.73-.171zm15.473 0l.73-.171-.73.171zm0 5.457l.73.171-.73-.171zm-5.008 5.008l-.171-.73.171.73zm-5.457 0l-.171.73.171-.73zm0-15.473l-.171-.73.171.73zm5.457 0l.171-.73-.171.73zM20.47 21.53a.75.75 0 101.06-1.06l-1.06 1.06zM4.046 13.61a11.198 11.198 0 010-5.115l-1.46-.342a12.698 12.698 0 000 5.8l1.46-.343zm14.013-5.115a11.196 11.196 0 010 5.115l1.46.342a12.698 12.698 0 000-5.8l-1.46.343zm-4.45 9.564a11.196 11.196 0 01-5.114 0l-.342 1.46c1.907.448 3.892.448 5.8 0l-.343-1.46zM8.496 4.046a11.198 11.198 0 015.115 0l.342-1.46a12.698 12.698 0 00-5.8 0l.343 1.46zm0 14.013a5.97 5.97 0 01-4.45-4.45l-1.46.343a7.47 7.47 0 005.568 5.568l.342-1.46zm5.457 1.46a7.47 7.47 0 005.568-5.567l-1.46-.342a5.97 5.97 0 01-4.45 4.45l.342 1.46zM13.61 4.046a5.97 5.97 0 014.45 4.45l1.46-.343a7.47 7.47 0 00-5.568-5.567l-.342 1.46zm-5.457-1.46a7.47 7.47 0 00-5.567 5.567l1.46.342a5.97 5.97 0 014.45-4.45l-.343-1.46zm8.652 15.28l3.665 3.664 1.06-1.06-3.665-3.665-1.06 1.06z" />
                                </svg>
                            </span>
                        </label>

                        <button
                            class="btn -mr-2 h-8 w-8 shrink-0 rounded-full p-0 text-slate-500 hover:bg-slate-300/20 hover:text-primary focus:bg-slate-300/20 focus:text-primary active:bg-slate-300/25 dark:text-navy-200 dark:hover:bg-navy-300/20 dark:hover:text-accent dark:focus:bg-navy-300/20 dark:focus:text-accent dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                    d="M22 6.5h-9.5M6 6.5H2M9 9a2.5 2.5 0 100-5 2.5 2.5 0 000 5zM22 17.5h-6M9.5 17.5H2M13 20a2.5 2.5 0 100-5 2.5 2.5 0 000 5z" />
                            </svg>
                        </button>
                    </div>

                    <div class="is-scrollbar-hidden mt-3 flex grow flex-col overflow-y-auto">
                        <div @click="$dispatch('change-active-chat',{chatId:'chat-1',avatar_url:'/images/100x100.png',name:'Alfredo Elliott'})"
                            class="flex cursor-pointer items-center space-x-2.5 px-4 py-2.5 font-inter hover:bg-slate-150 dark:hover:bg-navy-600">
                            <div class="avatar h-10 w-10">
                                <img class="rounded-full" src="{{ asset('images/100x100.png') }}" alt="avatar" />
                                <div
                                    class="absolute right-0 h-3 w-3 rounded-full border-2 border-white bg-slate-300 dark:border-navy-700">
                                </div>
                            </div>
                            <div class="flex flex-1 flex-col">
                                <div class="flex items-baseline justify-between space-x-1.5">
                                    <p class="text-xs+ font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                        Alfredo Elliott
                                    </p>
                                    <span class="text-tiny+ text-slate-400 dark:text-navy-300">11:03</span>
                                </div>
                                <div class="mt-1 flex items-center justify-between space-x-1">
                                    <p class="text-xs+ text-slate-400 line-clamp-1 dark:text-navy-300">
                                        😂 Lorem ipsum dolor
                                    </p>
                                    <div
                                        class="flex h-4.5 min-w-[1.125rem] items-center justify-center rounded-full bg-slate-200 px-1.5 text-tiny+ font-medium leading-none text-slate-800 dark:bg-navy-450 dark:text-white">
                                        5
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div @click="$dispatch('change-active-chat',{chatId:'chat-2',avatar_url:'/images/100x100.png',name:'Konnor Guzman'})"
                            class="flex cursor-pointer items-center space-x-2.5 px-4 py-2.5 font-inter hover:bg-slate-150 dark:hover:bg-navy-600">
                            <div class="avatar h-10 w-10">
                                <img class="rounded-full" src="{{ asset('images/100x100.png') }}" alt="avatar" />
                            </div>
                            <div class="flex flex-1 flex-col">
                                <div class="flex items-baseline justify-between space-x-1.5">
                                    <p class="text-xs+ font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                        Konnor Guzman
                                    </p>
                                    <span class="text-tiny+ text-slate-400 dark:text-navy-300">09:16</span>
                                </div>
                                <div class="mt-1 flex items-center justify-between space-x-1">
                                    <p class="text-xs+ text-slate-400 line-clamp-1 dark:text-navy-300">
                                        💣 Adipisicing elit. Prov ident?
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div @click="$dispatch('change-active-chat',{chatId:'chat-3',avatar_url:'/images/100x100.png',name:'Travis Fuller'})"
                            class="flex cursor-pointer items-center space-x-2.5 px-4 py-2.5 font-inter hover:bg-slate-150 dark:hover:bg-navy-600">
                            <div class="avatar h-10 w-10">
                                <img class="rounded-full" src="{{ asset('images/100x100.png') }}" alt="avatar" />
                                <div
                                    class="absolute right-0 h-3 w-3 rounded-full border-2 border-white bg-primary dark:border-navy-700 dark:bg-accent">
                                    <span
                                        class="absolute inline-flex h-full w-full animate-ping rounded-full bg-primary opacity-80 dark:bg-accent"></span>
                                </div>
                            </div>
                            <div class="flex flex-1 flex-col">
                                <div class="flex items-baseline justify-between space-x-1.5">
                                    <p class="text-xs+ font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                        Travis Fuller
                                    </p>
                                    <span class="text-tiny+ text-slate-400 dark:text-navy-300">08:05</span>
                                </div>
                                <div class="mt-1 flex items-center justify-between space-x-1">
                                    <p class="text-xs+ text-slate-400 line-clamp-1 dark:text-navy-300">
                                        Dolor set. Prov ident?
                                    </p>
                                    <div
                                        class="flex h-4.5 min-w-[1.125rem] items-center justify-center rounded-full bg-primary px-1.5 text-tiny+ font-medium leading-none text-white dark:bg-accent">
                                        4
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div @click="$dispatch('change-active-chat',{chatId:'chat-1',avatar_url:'/images/100x100.png',name:'Derrick Simmons'})"
                            class="flex cursor-pointer items-center space-x-2.5 px-4 py-2.5 font-inter hover:bg-slate-150 dark:hover:bg-navy-600">
                            <div class="avatar h-10 w-10">
                                <img class="rounded-full" src="{{ asset('images/100x100.png') }}" alt="avatar" />
                                <div
                                    class="absolute right-0 h-3 w-3 rounded-full border-2 border-white bg-slate-300 dark:border-navy-700">
                                </div>
                            </div>
                            <div class="flex flex-1 flex-col">
                                <div class="flex items-baseline justify-between space-x-1.5">
                                    <p class="text-xs+ font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                        Derrick Simmons
                                    </p>
                                    <span class="text-tiny+ text-slate-400 dark:text-navy-300">06:21</span>
                                </div>
                                <div class="mt-1 flex items-center justify-between space-x-1">
                                    <p class="text-xs+ text-slate-400 line-clamp-1 dark:text-navy-300">
                                        And that’s why a 15th century
                                    </p>
                                    <div
                                        class="flex h-4.5 min-w-[1.125rem] items-center justify-center rounded-full bg-slate-200 px-1.5 text-tiny+ font-medium leading-none text-slate-800 dark:bg-navy-450 dark:text-white">
                                        2
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div @click="$dispatch('change-active-chat',{chatId:'chat-2',avatar_url:'/images/100x100.png',name:'Katrina West'})"
                            class="flex cursor-pointer items-center space-x-2.5 px-4 py-2.5 font-inter hover:bg-slate-150 dark:hover:bg-navy-600">
                            <div class="avatar h-10 w-10">
                                <img class="rounded-full" src="{{ asset('images/100x100.png') }}" alt="avatar" />
                                <div
                                    class="absolute right-0 h-3 w-3 rounded-full border-2 border-white bg-slate-300 dark:border-navy-700">
                                </div>
                            </div>
                            <div class="flex flex-1 flex-col">
                                <div class="flex items-baseline justify-between space-x-1.5">
                                    <p class="text-xs+ font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                        Katrina West
                                    </p>
                                    <span class="text-tiny+ text-slate-400 dark:text-navy-300">06:21</span>
                                </div>
                                <div class="mt-1 flex items-center justify-between space-x-1">
                                    <p class="text-xs+ text-slate-400 line-clamp-1 dark:text-navy-300">
                                        he wanted people to focus
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div @click="$dispatch('change-active-chat',{chatId:'chat-3',avatar_url:'/images/100x100.png',name:'Corey Evans'})"
                            class="flex cursor-pointer items-center space-x-2.5 px-4 py-2.5 font-inter hover:bg-slate-150 dark:hover:bg-navy-600">
                            <div class="avatar h-10 w-10">
                                <img class="rounded-full" src="{{ asset('images/100x100.png') }}" alt="avatar" />
                            </div>
                            <div class="flex flex-1 flex-col">
                                <div class="flex items-baseline justify-between space-x-1.5">
                                    <p class="text-xs+ font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                        Corey Evans
                                    </p>
                                    <span class="text-tiny+ text-slate-400 dark:text-navy-300">Tue</span>
                                </div>
                                <div class="mt-1 flex items-center justify-between space-x-1">
                                    <p class="text-xs+ text-slate-400 line-clamp-1 dark:text-navy-300">
                                        Ut enim ad minim veniam
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div @click="$dispatch('change-active-chat',{chatId:'chat-1',avatar_url:'/images/100x100.png',name:'Anthony Jensen'})"
                            class="flex cursor-pointer items-center space-x-2.5 px-4 py-2.5 font-inter hover:bg-slate-150 dark:hover:bg-navy-600">
                            <div class="avatar h-10 w-10">
                                <img class="rounded-full" src="{{ asset('images/100x100.png') }}" alt="avatar" />
                            </div>
                            <div class="flex flex-1 flex-col">
                                <div class="flex items-baseline justify-between space-x-1.5">
                                    <p class="text-xs+ font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                        Anthony Jensen
                                    </p>
                                    <span class="text-tiny+ text-slate-400 dark:text-navy-300">Tue</span>
                                </div>
                                <div class="mt-1 flex items-center justify-between space-x-1">
                                    <p class="text-xs+ text-slate-400 line-clamp-1 dark:text-navy-300">
                                        Excepteur sint occaecat cupidatat
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div @click="$dispatch('change-active-chat',{chatId:'chat-2',avatar_url:'/images/100x100.png',name:'Lance Tucker'})"
                            class="flex cursor-pointer items-center space-x-2.5 px-4 py-2.5 font-inter hover:bg-slate-150 dark:hover:bg-navy-600">
                            <div class="avatar h-10 w-10">
                                <img class="rounded-full" src="{{ asset('images/100x100.png') }}" alt="avatar" />
                            </div>
                            <div class="flex flex-1 flex-col">
                                <div class="flex items-baseline justify-between space-x-1.5">
                                    <p class="text-xs+ font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                        Lance Tucker
                                    </p>
                                    <span class="text-tiny+ text-slate-400 dark:text-navy-300">Tue</span>
                                </div>
                                <div class="mt-1 flex items-center justify-between space-x-1">
                                    <p class="text-xs+ text-slate-400 line-clamp-1 dark:text-navy-300">
                                        Duis aute irure dolor in
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div @click="$dispatch('change-active-chat',{chatId:'chat-1',avatar_url:'/images/100x100.png',name:'Alfredo Elliott'})"
                            class="flex cursor-pointer items-center space-x-2.5 px-4 py-2.5 font-inter hover:bg-slate-150 dark:hover:bg-navy-600">
                            <div class="avatar h-10 w-10">
                                <img class="rounded-full" src="{{ asset('images/100x100.png') }}" alt="avatar" />
                                <div
                                    class="absolute right-0 h-3 w-3 rounded-full border-2 border-white bg-slate-300 dark:border-navy-700">
                                </div>
                            </div>
                            <div class="flex flex-1 flex-col">
                                <div class="flex items-baseline justify-between space-x-1.5">
                                    <p class="text-xs+ font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                        Alfredo Elliott
                                    </p>
                                    <span class="text-tiny+ text-slate-400 dark:text-navy-300">11:03</span>
                                </div>
                                <div class="mt-1 flex items-center justify-between space-x-1">
                                    <p class="text-xs+ text-slate-400 line-clamp-1 dark:text-navy-300">
                                        😂 Lorem ipsum dolor
                                    </p>
                                    <div
                                        class="flex h-4.5 min-w-[1.125rem] items-center justify-center rounded-full bg-slate-200 px-1.5 text-tiny+ font-medium leading-none text-slate-800 dark:bg-navy-450 dark:text-white">
                                        5
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div @click="$dispatch('change-active-chat',{chatId:'chat-2',avatar_url:'/images/100x100.png',name:'Konnor Guzman'})"
                            class="flex cursor-pointer items-center space-x-2.5 px-4 py-2.5 font-inter hover:bg-slate-150 dark:hover:bg-navy-600">
                            <div class="avatar h-10 w-10">
                                <img class="rounded-full" src="{{ asset('images/100x100.png') }}" alt="avatar" />
                            </div>
                            <div class="flex flex-1 flex-col">
                                <div class="flex items-baseline justify-between space-x-1.5">
                                    <p class="text-xs+ font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                        Konnor Guzman
                                    </p>
                                    <span class="text-tiny+ text-slate-400 dark:text-navy-300">09:16</span>
                                </div>
                                <div class="mt-1 flex items-center justify-between space-x-1">
                                    <p class="text-xs+ text-slate-400 line-clamp-1 dark:text-navy-300">
                                        💣 Adipisicing elit. Prov ident?
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div @click="$dispatch('change-active-chat',{chatId:'chat-3',avatar_url:'/images/100x100.png',name:'Travis Fuller'})"
                            class="flex cursor-pointer items-center space-x-2.5 px-4 py-2.5 font-inter hover:bg-slate-150 dark:hover:bg-navy-600">
                            <div class="avatar h-10 w-10">
                                <img class="rounded-full" src="{{ asset('images/100x100.png') }}" alt="avatar" />
                                <div
                                    class="absolute right-0 h-3 w-3 rounded-full border-2 border-white bg-primary dark:border-navy-700 dark:bg-accent">
                                    <span
                                        class="absolute inline-flex h-full w-full animate-ping rounded-full bg-primary opacity-80 dark:bg-accent"></span>
                                </div>
                            </div>
                            <div class="flex flex-1 flex-col">
                                <div class="flex items-baseline justify-between space-x-1.5">
                                    <p class="text-xs+ font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                        Travis Fuller
                                    </p>
                                    <span class="text-tiny+ text-slate-400 dark:text-navy-300">08:05</span>
                                </div>
                                <div class="mt-1 flex items-center justify-between space-x-1">
                                    <p class="text-xs+ text-slate-400 line-clamp-1 dark:text-navy-300">
                                        Dolor set. Prov ident?
                                    </p>
                                    <div
                                        class="flex h-4.5 min-w-[1.125rem] items-center justify-center rounded-full bg-primary px-1.5 text-tiny+ font-medium leading-none text-white dark:bg-accent">
                                        4
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div @click="$dispatch('change-active-chat',{chatId:'chat-1',avatar_url:'/images/100x100.png',name:'Derrick Simmons'})"
                            class="flex cursor-pointer items-center space-x-2.5 px-4 py-2.5 font-inter hover:bg-slate-150 dark:hover:bg-navy-600">
                            <div class="avatar h-10 w-10">
                                <img class="rounded-full" src="{{ asset('images/100x100.png') }}" alt="avatar" />
                                <div
                                    class="absolute right-0 h-3 w-3 rounded-full border-2 border-white bg-slate-300 dark:border-navy-700">
                                </div>
                            </div>
                            <div class="flex flex-1 flex-col">
                                <div class="flex items-baseline justify-between space-x-1.5">
                                    <p class="text-xs+ font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                        Derrick Simmons
                                    </p>
                                    <span class="text-tiny+ text-slate-400 dark:text-navy-300">06:21</span>
                                </div>
                                <div class="mt-1 flex items-center justify-between space-x-1">
                                    <p class="text-xs+ text-slate-400 line-clamp-1 dark:text-navy-300">
                                        And that’s why a 15th century
                                    </p>
                                    <div
                                        class="flex h-4.5 min-w-[1.125rem] items-center justify-center rounded-full bg-slate-200 px-1.5 text-tiny+ font-medium leading-none text-slate-800 dark:bg-navy-450 dark:text-white">
                                        2
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div @click="$dispatch('change-active-chat',{chatId:'chat-2',avatar_url:'/images/100x100.png',name:'Katrina West'})"
                            class="flex cursor-pointer items-center space-x-2.5 px-4 py-2.5 font-inter hover:bg-slate-150 dark:hover:bg-navy-600">
                            <div class="avatar h-10 w-10">
                                <img class="rounded-full" src="{{ asset('images/100x100.png') }}" alt="avatar" />
                                <div
                                    class="absolute right-0 h-3 w-3 rounded-full border-2 border-white bg-slate-300 dark:border-navy-700">
                                </div>
                            </div>
                            <div class="flex flex-1 flex-col">
                                <div class="flex items-baseline justify-between space-x-1.5">
                                    <p class="text-xs+ font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                        Katrina West
                                    </p>
                                    <span class="text-tiny+ text-slate-400 dark:text-navy-300">06:21</span>
                                </div>
                                <div class="mt-1 flex items-center justify-between space-x-1">
                                    <p class="text-xs+ text-slate-400 line-clamp-1 dark:text-navy-300">
                                        he wanted people to focus
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div @click="$dispatch('change-active-chat',{chatId:'chat-3',avatar_url:'/images/100x100.png',name:'Corey Evans'})"
                            class="flex cursor-pointer items-center space-x-2.5 px-4 py-2.5 font-inter hover:bg-slate-150 dark:hover:bg-navy-600">
                            <div class="avatar h-10 w-10">
                                <img class="rounded-full" src="{{ asset('images/100x100.png') }}" alt="avatar" />
                            </div>
                            <div class="flex flex-1 flex-col">
                                <div class="flex items-baseline justify-between space-x-1.5">
                                    <p class="text-xs+ font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                        Corey Evans
                                    </p>
                                    <span class="text-tiny+ text-slate-400 dark:text-navy-300">Tue</span>
                                </div>
                                <div class="mt-1 flex items-center justify-between space-x-1">
                                    <p class="text-xs+ text-slate-400 line-clamp-1 dark:text-navy-300">
                                        Ut enim ad minim veniam
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div @click="$dispatch('change-active-chat',{chatId:'chat-1',avatar_url:'/images/100x100.png',name:'Anthony Jensen'})"
                            class="flex cursor-pointer items-center space-x-2.5 px-4 py-2.5 font-inter hover:bg-slate-150 dark:hover:bg-navy-600">
                            <div class="avatar h-10 w-10">
                                <img class="rounded-full" src="{{ asset('images/100x100.png') }}" alt="avatar" />
                            </div>
                            <div class="flex flex-1 flex-col">
                                <div class="flex items-baseline justify-between space-x-1.5">
                                    <p class="text-xs+ font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                        Anthony Jensen
                                    </p>
                                    <span class="text-tiny+ text-slate-400 dark:text-navy-300">Tue</span>
                                </div>
                                <div class="mt-1 flex items-center justify-between space-x-1">
                                    <p class="text-xs+ text-slate-400 line-clamp-1 dark:text-navy-300">
                                        Excepteur sint occaecat cupidatat
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div @click="$dispatch('change-active-chat',{chatId:'chat-2',avatar_url:'/images/100x100.png',name:'Lance Tucker'})"
                            class="flex cursor-pointer items-center space-x-2.5 px-4 py-2.5 font-inter hover:bg-slate-150 dark:hover:bg-navy-600">
                            <div class="avatar h-10 w-10">
                                <img class="rounded-full" src="{{ asset('images/100x100.png') }}" alt="avatar" />
                            </div>
                            <div class="flex flex-1 flex-col">
                                <div class="flex items-baseline justify-between space-x-1.5">
                                    <p class="text-xs+ font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                        Lance Tucker
                                    </p>
                                    <span class="text-tiny+ text-slate-400 dark:text-navy-300">Tue</span>
                                </div>
                                <div class="mt-1 flex items-center justify-between space-x-1">
                                    <p class="text-xs+ text-slate-400 line-clamp-1 dark:text-navy-300">
                                        Duis aute irure dolor in
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex h-12 shrink-0 justify-between border-t border-slate-150 px-1.5 py-1 dark:border-navy-600">
                        <a href="#" x-tooltip="'All Chats'"
                            class="btn h-9 w-9 rounded-full p-0 text-primary hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:text-accent dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z" />
                                <path
                                    d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z" />
                            </svg>
                        </a>
                        <a href="#" x-tooltip="'Users'"
                            class="btn h-9 w-9 rounded-full p-0 hover:bg-slate-300/20 hover:text-primary focus:bg-slate-300/20 focus:text-primary active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:hover:text-accent dark:focus:bg-navy-300/20 dark:focus:text-accent dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </a>

                        <a href="#" x-tooltip="'Groups'"
                            class="btn h-9 w-9 rounded-full p-0 hover:bg-slate-300/20 hover:text-primary focus:bg-slate-300/20 focus:text-primary active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:hover:text-accent dark:focus:bg-navy-300/20 dark:focus:text-accent dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </a>
                        <a href="#" x-tooltip="'Channels'"
                            class="btn h-9 w-9 rounded-full p-0 hover:bg-slate-300/20 hover:text-primary focus:bg-slate-300/20 focus:text-primary active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:hover:text-accent dark:focus:bg-navy-300/20 dark:focus:text-accent dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
                            </svg>
                        </a>

                        <a href="#" x-tooltip="'More'"
                            class="btn h-9 w-9 rounded-full p-0 hover:bg-slate-300/20 hover:text-primary focus:bg-slate-300/20 focus:text-primary active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:hover:text-accent dark:focus:bg-navy-300/20 dark:focus:text-accent dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Minimized Sidebar Panel -->
        <div class="sidebar-panel-min">
            <div class="flex h-full flex-col bg-white dark:bg-navy-750">
                <div class="flex h-18 shrink-0 items-center justify-center">
                    <div class="avatar flex h-10 w-10">
                        <div
                            class="is-initial is-initial rounded-full bg-primary/10 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                xmlns="http://www.w3.org/2000/svg" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="flex h-[calc(100%-4.5rem)] grow flex-col">
                    <div class="is-scrollbar-hidden flex grow flex-col overflow-y-auto">
                        <ul class="mt-2 flex flex-col items-center justify-center space-y-1">
                            <li>
                                <a href="#"
                                    class="btn h-10 w-10 p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="btn h-10 w-10 p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                        <div class="my-4 mx-4 h-px shrink-0 bg-slate-200 dark:bg-navy-500"></div>
                        <div class="flex flex-col">
                            <div @click="$dispatch('change-active-chat',{chatId:'chat-1',avatar_url:'/images/100x100.png',name:'Alfredo Elliott'})"
                                class="flex cursor-pointer items-center justify-center py-2.5 hover:bg-slate-150 dark:hover:bg-navy-600">
                                <div class="avatar h-10 w-10">
                                    <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                                        alt="avatar" />
                                    <div
                                        class="absolute right-0 h-3 w-3 rounded-full border-2 border-white bg-slate-300 dark:border-navy-700">
                                    </div>
                                </div>
                            </div>
                            <div @click="$dispatch('change-active-chat',{chatId:'chat-2',avatar_url:'/images/100x100.png',name:'Konnor Guzman'})"
                                class="flex cursor-pointer items-center justify-center py-2.5 hover:bg-slate-150 dark:hover:bg-navy-600">
                                <div class="avatar h-10 w-10">
                                    <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                                        alt="avatar" />
                                </div>
                            </div>
                            <div @click="$dispatch('change-active-chat',{chatId:'chat-3',avatar_url:'/images/100x100.png',name:'Travis Fuller'})"
                                class="flex cursor-pointer items-center justify-center py-2.5 hover:bg-slate-150 dark:hover:bg-navy-600">
                                <div class="avatar h-10 w-10">
                                    <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                                        alt="avatar" />

                                    <div
                                        class="absolute right-0 h-3 w-3 rounded-full border-2 border-white bg-primary dark:border-navy-700 dark:bg-accent">
                                        <span
                                            class="absolute inline-flex h-full w-full animate-ping rounded-full bg-primary opacity-80 dark:bg-accent"></span>
                                    </div>
                                </div>
                            </div>
                            <div @click="$dispatch('change-active-chat',{chatId:'chat-1',avatar_url:'/images/100x100.png',name:'Derrick Simmons'})"
                                class="flex cursor-pointer items-center justify-center py-2.5 hover:bg-slate-150 dark:hover:bg-navy-600">
                                <div class="avatar h-10 w-10">
                                    <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                                        alt="avatar" />
                                    <div
                                        class="absolute right-0 h-3 w-3 rounded-full border-2 border-white bg-slate-300 dark:border-navy-700">
                                    </div>
                                </div>
                            </div>
                            <div @click="$dispatch('change-active-chat',{chatId:'chat-2',avatar_url:'/images/100x100.png',name:'Katrina West'})"
                                class="flex cursor-pointer items-center justify-center py-2.5 hover:bg-slate-150 dark:hover:bg-navy-600">
                                <div class="avatar h-10 w-10">
                                    <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                                        alt="avatar" />
                                    <div
                                        class="absolute right-0 h-3 w-3 rounded-full border-2 border-white bg-slate-300 dark:border-navy-700">
                                    </div>
                                </div>
                            </div>
                            <div @click="$dispatch('change-active-chat',{chatId:'chat-3',avatar_url:'/images/100x100.png',name:'Corey Evans'})"
                                class="flex cursor-pointer items-center justify-center py-2.5 hover:bg-slate-150 dark:hover:bg-navy-600">
                                <div class="avatar h-10 w-10">
                                    <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                                        alt="avatar" />
                                </div>
                            </div>
                            <div @click="$dispatch('change-active-chat',{chatId:'chat-1',avatar_url:'/images/100x100.png',name:'Anthony Jensen'})"
                                class="flex cursor-pointer items-center justify-center py-2.5 hover:bg-slate-150 dark:hover:bg-navy-600">
                                <div class="avatar h-10 w-10">
                                    <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                                        alt="avatar" />
                                </div>
                            </div>
                            <div @click="$dispatch('change-active-chat',{chatId:'chat-2',avatar_url:'/images/100x100.png',name:'Lance Tucker'})"
                                class="flex cursor-pointer items-center justify-center py-2.5 hover:bg-slate-150 dark:hover:bg-navy-600">
                                <div class="avatar h-10 w-10">
                                    <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                                        alt="avatar" />
                                </div>
                            </div>
                            <div @click="$dispatch('change-active-chat',{chatId:'chat-1',avatar_url:'/images/100x100.png',name:'Alfredo Elliott'})"
                                class="flex cursor-pointer items-center justify-center py-2.5 hover:bg-slate-150 dark:hover:bg-navy-600">
                                <div class="avatar h-10 w-10">
                                    <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                                        alt="avatar" />
                                    <div
                                        class="absolute right-0 h-3 w-3 rounded-full border-2 border-white bg-slate-300 dark:border-navy-700">
                                    </div>
                                </div>
                            </div>
                            <div @click="$dispatch('change-active-chat',{chatId:'chat-2',avatar_url:'/images/100x100.png',name:'Konnor Guzman'})"
                                class="flex cursor-pointer items-center justify-center py-2.5 hover:bg-slate-150 dark:hover:bg-navy-600">
                                <div class="avatar h-10 w-10">
                                    <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                                        alt="avatar" />
                                </div>
                            </div>
                            <div @click="$dispatch('change-active-chat',{chatId:'chat-3',avatar_url:'/images/100x100.png',name:'Travis Fuller'})"
                                class="flex cursor-pointer items-center justify-center py-2.5 hover:bg-slate-150 dark:hover:bg-navy-600">
                                <div class="avatar h-10 w-10">
                                    <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                                        alt="avatar" />
                                    <div
                                        class="absolute right-0 h-3 w-3 rounded-full border-2 border-white bg-primary dark:border-navy-700 dark:bg-accent">
                                        <span
                                            class="absolute inline-flex h-full w-full animate-ping rounded-full bg-primary opacity-80 dark:bg-accent"></span>
                                    </div>
                                </div>
                            </div>
                            <div @click="$dispatch('change-active-chat',{chatId:'chat-1',avatar_url:'/images/100x100.png',name:'Derrick Simmons'})"
                                class="flex cursor-pointer items-center justify-center py-2.5 hover:bg-slate-150 dark:hover:bg-navy-600">
                                <div class="avatar h-10 w-10">
                                    <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                                        alt="avatar" />
                                    <div
                                        class="absolute right-0 h-3 w-3 rounded-full border-2 border-white bg-slate-300 dark:border-navy-700">
                                    </div>
                                </div>
                            </div>
                            <div @click="$dispatch('change-active-chat',{chatId:'chat-2',avatar_url:'/images/100x100.png',name:'Katrina West'})"
                                class="flex cursor-pointer items-center justify-center py-2.5 hover:bg-slate-150 dark:hover:bg-navy-600">
                                <div class="avatar h-10 w-10">
                                    <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                                        alt="avatar" />
                                    <div
                                        class="absolute right-0 h-3 w-3 rounded-full border-2 border-white bg-slate-300 dark:border-navy-700">
                                    </div>
                                </div>
                            </div>
                            <div @click="$dispatch('change-active-chat',{chatId:'chat-3',avatar_url:'/images/100x100.png',name:'Corey Evans'})"
                                class="flex cursor-pointer items-center justify-center py-2.5 hover:bg-slate-150 dark:hover:bg-navy-600">
                                <div class="avatar h-10 w-10">
                                    <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                                        alt="avatar" />
                                </div>
                            </div>
                            <div @click="$dispatch('change-active-chat',{chatId:'chat-1',avatar_url:'/images/100x100.png',name:'Anthony Jensen'})"
                                class="flex cursor-pointer items-center justify-center py-2.5 hover:bg-slate-150 dark:hover:bg-navy-600">
                                <div class="avatar h-10 w-10">
                                    <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                                        alt="avatar" />
                                </div>
                            </div>
                            <div @click="$dispatch('change-active-chat',{chatId:'chat-2',avatar_url:'/images/100x100.png',name:'Lance Tucker'})"
                                class="flex cursor-pointer items-center justify-center py-2.5 hover:bg-slate-150 dark:hover:bg-navy-600">
                                <div class="avatar h-10 w-10">
                                    <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                                        alt="avatar" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col items-center justify-center py-3">
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


    <!-- Main Content Wrapper -->
    <main x-data="{ isShowChatInfo: !$store.breakpoints.mdAndDown, activeChat: { chatId: 'chat-1', name: 'Alfredo Elliott', avatar_url: '/images/100x100.png' } }" x-effect="$store.breakpoints.mdAndDown === true && (isShowChatInfo = false)"
        class="main-content h-100vh chat-app mt-0 flex w-full flex-col" :class="isShowChatInfo && 'lg:mr-80'"
        @change-active-chat.window="activeChat=$event.detail">
        <div
            class="chat-header h-[61px] border-b border-slate-150 dark:border-navy-700 relative z-10 flex w-full shrink-0 items-center justify-between bg-white px-[calc(var(--margin-x)-.5rem)] shadow-sm transition-[padding,width] duration-[.25s] dark:bg-navy-800">
            <div class="flex items-center space-x-5">
                <div class="ml-1 h-7 w-7">
                    <button
                        class="menu-toggle ml-0.5 flex h-7 w-7 flex-col justify-center space-y-1.5 text-primary outline-none focus:outline-none dark:text-accent-light/80"
                        :class="$store.global.isSidebarExpanded && 'active'"
                        @click="$store.global.isSidebarExpanded = !$store.global.isSidebarExpanded">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
                <div @click="isShowChatInfo = true" class="flex cursor-pointer items-center space-x-4 font-inter">
                    <div class="avatar">
                        <img class="rounded-full" :src="activeChat.avatar_url" alt="avatar" />
                    </div>
                    <div>
                        <p class="font-medium text-slate-700 line-clamp-1 dark:text-navy-100"
                            x-text="activeChat.name"></p>
                        <p class="mt-0.5 text-xs">Last seen recently</p>
                    </div>
                </div>
            </div>
            <div class="-mr-1 flex items-center">
                <button
                    class="btn hidden h-9 w-9 rounded-full p-0 text-slate-500 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:text-navy-200 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                </button>
                <button
                    class="btn h-9 w-9 rounded-full p-0 text-slate-500 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:text-navy-200 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
                <button @click="isShowChatInfo = !isShowChatInfo"
                    :class="isShowChatInfo ? 'text-primary dark:text-accent-light' : 'text-slate-500 dark:text-navy-200'"
                    class="btn hidden h-9 w-9 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" fill="none" stroke="currentColor"
                        stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9.25 21.167h5.5c4.584 0 6.417-1.834 6.417-6.417v-5.5c0-4.583-1.834-6.417-6.417-6.417h-5.5c-4.583 0-6.417 1.834-6.417 6.417v5.5c0 4.583 1.834 6.417 6.417 6.417ZM13.834 2.833v18.334" />
                    </svg>
                </button>
                <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })" @click.outside="if(isShowPopper) isShowPopper = false"
                    class="inline-flex">
                    <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                        class="btn h-9 w-9 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" fill="none"
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
                                        class="flex h-8 items-center space-x-3 px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mt-px h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"
                                                clip-rule="evenodd" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2" />
                                        </svg>
                                        <span>Unmute</span></a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex h-8 items-center space-x-3 px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mt-px h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <span>Chat Setting</span></a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex h-8 items-center space-x-3 px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mt-px h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                                        </svg>
                                        <span>Block User</span></a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex h-8 items-center space-x-3 px-3 pr-8 font-medium tracking-wide text-error outline-none transition-all hover:bg-error/20 focus:bg-error/20">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                        <span> Delete chat</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div :class="$store.breakpoints.smAndUp && 'scrollbar-sm'"
            class="grow overflow-y-auto px-[calc(var(--margin-x)-.5rem)] py-5 transition-all duration-[.25s]">
            <div x-show="activeChat.chatId === 'chat-1'" x-transition:enter="transition-all duration-500 easy-in-out"
                x-transition:enter-start="opacity-0 [transform:translate3d(0,1rem,0)]"
                x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]" class="space-y-5">
                <div class="mx-4 flex items-center space-x-3">
                    <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
                    <p>Sunday</p>
                    <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
                </div>

                <div class="flex items-start space-x-2.5 sm:space-x-5">
                    <div class="avatar">
                        <img class="rounded-full" :src="activeChat.avatar_url" alt="avatar" />
                    </div>

                    <div class="flex flex-col items-start space-y-3.5">
                        <div class="mr-4 max-w-lg sm:mr-10">
                            <div
                                class="rounded-2xl rounded-tl-none bg-white p-3 text-slate-700 shadow-sm dark:bg-navy-700 dark:text-navy-100">
                                Hello My Dear. Lorem ipsum dolor sit amet, consectetur.
                            </div>
                            <p class="mt-1 ml-auto text-right text-xs text-slate-400 dark:text-navy-300">
                                08:16
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flex items-start justify-end space-x-2.5 sm:space-x-5">
                    <div class="flex flex-col items-end space-y-3.5">
                        <div class="ml-4 max-w-lg md:ml-10">
                            <div
                                class="rounded-2xl rounded-tr-none bg-info/10 p-3 text-slate-700 shadow-sm dark:bg-accent dark:text-white">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Assumenda necessitatibus, ratione. Voluptatum.
                            </div>
                        </div>
                        <div class="ml-4 max-w-lg md:ml-10">
                            <div
                                class="rounded-2xl rounded-tr-none bg-info/10 p-3 text-slate-700 shadow-sm dark:bg-accent dark:text-white">
                                And that’s why a 15th century
                            </div>
                            <p class="mt-1 ml-auto text-left text-xs text-slate-400 dark:text-navy-300">
                                08:16
                            </p>
                        </div>
                    </div>
                    <div class="avatar">
                        <img class="rounded-full" src="{{ asset('images/100x100.png') }}" alt="avatar" />
                    </div>
                </div>

                <div class="flex items-start space-x-2.5 sm:space-x-5">
                    <div class="avatar">
                        <img class="rounded-full" :src="activeChat.avatar_url" alt="avatar" />
                    </div>

                    <div class="flex flex-col items-start space-y-3.5">
                        <div class="mr-4 max-w-lg sm:mr-10">
                            <div
                                class="rounded-2xl rounded-tl-none bg-white p-3 text-slate-700 shadow-sm dark:bg-navy-700 dark:text-navy-100">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Eius.
                            </div>
                            <p class="mt-1 ml-auto text-right text-xs text-slate-400 dark:text-navy-300">
                                08:16
                            </p>
                        </div>
                        <div class="mr-4 max-w-lg sm:mr-10">
                            <div class="grid grid-cols-12 gap-2">
                                <div class="group relative col-span-12 sm:col-span-4">
                                    <img class="h-full rounded-lg object-cover"
                                        src="{{ asset('images/800x600.png') }}" alt="image" />
                                    <div
                                        class="absolute top-0 flex h-full w-full items-center justify-center rounded-lg bg-black/30 opacity-0 transition-all duration-300 group-hover:opacity-100">
                                        <button
                                            class="btn h-9 w-9 rounded-full bg-info p-0 font-medium text-white hover:bg-info-focus focus:bg-info-focus active:bg-info-focus/90">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <div class="col-span-12 grid grid-cols-2 gap-2 sm:col-span-8">
                                    <div class="group relative">
                                        <img class="h-full rounded-lg object-cover"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                        <div
                                            class="absolute top-0 flex h-full w-full items-center justify-center rounded-lg bg-black/30 opacity-0 transition-all duration-300 group-hover:opacity-100">
                                            <button
                                                class="btn h-9 w-9 rounded-full bg-info p-0 font-medium text-white hover:bg-info-focus focus:bg-info-focus active:bg-info-focus/90">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="group relative">
                                        <img class="h-full rounded-lg object-cover"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                        <div
                                            class="absolute top-0 flex h-full w-full items-center justify-center rounded-lg bg-black/30 opacity-0 transition-all duration-300 group-hover:opacity-100">
                                            <button
                                                class="btn h-9 w-9 rounded-full bg-info p-0 font-medium text-white hover:bg-info-focus focus:bg-info-focus active:bg-info-focus/90">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="group relative">
                                        <img class="h-full rounded-lg object-cover"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                        <div
                                            class="absolute top-0 flex h-full w-full items-center justify-center rounded-lg bg-black/30 opacity-0 transition-all duration-300 group-hover:opacity-100">
                                            <button
                                                class="btn h-9 w-9 rounded-full bg-info p-0 font-medium text-white hover:bg-info-focus focus:bg-info-focus active:bg-info-focus/90">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="group relative">
                                        <img class="h-full rounded-lg object-cover"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                        <div
                                            class="absolute top-0 flex h-full w-full items-center justify-center rounded-lg bg-black/30 opacity-0 transition-all duration-300 group-hover:opacity-100">
                                            <button
                                                class="btn h-9 w-9 rounded-full bg-info p-0 font-medium text-white hover:bg-info-focus focus:bg-info-focus active:bg-info-focus/90">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-1 ml-auto text-right text-xs text-slate-400 dark:text-navy-300">
                                08:21
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mx-4 flex items-center space-x-3">
                    <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
                    <p>Monday</p>
                    <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
                </div>

                <div class="flex items-start justify-end space-x-2.5 sm:space-x-5">
                    <div class="flex flex-col items-end space-y-3.5">
                        <div class="ml-4 max-w-lg md:ml-10">
                            <div class="group relative">
                                <img class="h-48 rounded-lg object-cover" src="{{ asset('images/800x600.png') }}"
                                    alt="image" />
                                <div
                                    class="absolute top-0 flex h-full w-full items-center justify-center rounded-lg bg-black/30 opacity-0 transition-all duration-300 group-hover:opacity-100">
                                    <button
                                        class="btn h-9 w-9 rounded-full bg-info p-0 font-medium text-white hover:bg-info-focus focus:bg-info-focus active:bg-info-focus/90">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="ml-4 max-w-lg md:ml-10">
                            <div
                                class="rounded-2xl rounded-tr-none bg-info/10 p-3 text-slate-700 shadow-sm dark:bg-accent dark:text-white">
                                Please Download This File
                            </div>
                            <p class="mt-1 ml-auto text-left text-xs text-slate-400 dark:text-navy-300">
                                08:16
                            </p>
                        </div>
                    </div>
                    <div class="avatar">
                        <img class="rounded-full" src="{{ asset('images/100x100.png') }}" alt="avatar" />
                    </div>
                </div>
            </div>
            <div x-show="activeChat.chatId === 'chat-2'" x-transition:enter="transition-all duration-500 easy-in-out"
                x-transition:enter-start="opacity-0 [transform:translate3d(0,1rem,0)]"
                x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]" class="space-y-5">
                <div class="mx-4 flex items-center space-x-3">
                    <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
                    <p>Yesterday</p>
                    <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
                </div>

                <div class="flex items-start space-x-2.5 sm:space-x-5">
                    <div class="avatar">
                        <img class="rounded-full" :src="activeChat.avatar_url" alt="avatar" />
                    </div>

                    <div class="flex flex-col items-start space-y-3.5">
                        <div class="mr-4 max-w-lg sm:mr-10">
                            <div
                                class="rounded-2xl rounded-tl-none bg-white p-3 text-slate-700 shadow-sm dark:bg-navy-700 dark:text-navy-100">
                                Hello My Dear. Lorem ipsum dolor sit amet, consectetur.
                            </div>
                            <p class="mt-1 ml-auto text-right text-xs text-slate-400 dark:text-navy-300">
                                08:16
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flex items-start justify-end space-x-2.5 sm:space-x-5">
                    <div class="flex flex-col items-end space-y-3.5">
                        <div class="ml-4 max-w-lg md:ml-10">
                            <div
                                class="rounded-2xl rounded-tr-none bg-info/10 p-3 text-slate-700 shadow-sm dark:bg-accent dark:text-white">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Assumenda necessitatibus, ratione. Voluptatum.
                            </div>
                        </div>
                        <div class="ml-4 max-w-lg md:ml-10">
                            <div
                                class="rounded-2xl rounded-tr-none bg-info/10 p-3 text-slate-700 shadow-sm dark:bg-accent dark:text-white">
                                And that’s why a 15th century
                            </div>
                            <p class="mt-1 ml-auto text-left text-xs text-slate-400 dark:text-navy-300">
                                08:16
                            </p>
                        </div>
                    </div>
                    <div class="avatar">
                        <img class="rounded-full" src="{{ asset('images/100x100.png') }}" alt="avatar" />
                    </div>
                </div>
            </div>
            <div x-show="activeChat.chatId === 'chat-3'" x-transition:enter="transition-all duration-500 easy-in-out"
                x-transition:enter-start="opacity-0 [transform:translate3d(0,1rem,0)]"
                x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]" class="space-y-5">
                <div class="mx-4 flex items-center space-x-3">
                    <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
                    <p>Sunday</p>
                    <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
                </div>

                <div class="flex items-start space-x-2.5 sm:space-x-5">
                    <div class="avatar">
                        <img class="rounded-full" :src="activeChat.avatar_url" alt="avatar" />
                    </div>

                    <div class="flex flex-col items-start space-y-3.5">
                        <div class="mr-4 max-w-lg sm:mr-10">
                            <div
                                class="rounded-2xl rounded-tl-none bg-white p-3 text-slate-700 shadow-sm dark:bg-navy-700 dark:text-navy-100">
                                Hello My Dear. Lorem ipsum dolor sit amet, consectetur.
                            </div>
                            <p class="mt-1 ml-auto text-right text-xs text-slate-400 dark:text-navy-300">
                                08:16
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flex items-start justify-end space-x-2.5 sm:space-x-5">
                    <div class="flex flex-col items-end space-y-3.5">
                        <div class="ml-4 max-w-lg md:ml-10">
                            <div
                                class="rounded-2xl rounded-tr-none bg-info/10 p-3 text-slate-700 shadow-sm dark:bg-accent dark:text-white">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Assumenda necessitatibus, ratione. Voluptatum.
                            </div>
                        </div>
                        <div class="ml-4 max-w-lg md:ml-10">
                            <div
                                class="rounded-2xl rounded-tr-none bg-info/10 p-3 text-slate-700 shadow-sm dark:bg-accent dark:text-white">
                                And that’s why a 15th century
                            </div>
                            <p class="mt-1 ml-auto text-left text-xs text-slate-400 dark:text-navy-300">
                                08:16
                            </p>
                        </div>
                    </div>
                    <div class="avatar">
                        <img class="rounded-full" src="{{ asset('images/100x100.png') }}" alt="avatar" />
                    </div>
                </div>

                <div class="flex items-start space-x-2.5 sm:space-x-5">
                    <div class="avatar">
                        <img class="rounded-full" :src="activeChat.avatar_url" alt="avatar" />
                    </div>

                    <div class="flex flex-col items-start space-y-3.5">
                        <div class="mr-4 max-w-lg sm:mr-10">
                            <div
                                class="rounded-2xl rounded-tl-none bg-white p-3 text-slate-700 shadow-sm dark:bg-navy-700 dark:text-navy-100">
                                Ei eum populo dictas, ad sed tempor minimum voluptatibus,
                            </div>
                            <p class="mt-1 ml-auto text-right text-xs text-slate-400 dark:text-navy-300">
                                08:16
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flex items-start justify-end space-x-2.5 sm:space-x-5">
                    <div class="flex flex-col items-end space-y-3.5">
                        <div class="ml-4 max-w-lg md:ml-10">
                            <div
                                class="rounded-2xl rounded-tr-none bg-info/10 p-3 text-slate-700 shadow-sm dark:bg-accent dark:text-white">
                                No mei stet periculis consequat, agam nostro
                            </div>
                        </div>
                        <div class="ml-4 max-w-lg md:ml-10">
                            <div
                                class="rounded-2xl rounded-tr-none bg-info/10 p-3 text-slate-700 shadow-sm dark:bg-accent dark:text-white">
                                at has eius harum
                            </div>
                            <p class="mt-1 ml-auto text-left text-xs text-slate-400 dark:text-navy-300">
                                08:16
                            </p>
                        </div>
                    </div>
                    <div class="avatar">
                        <img class="rounded-full" src="{{ asset('images/100x100.png') }}" alt="avatar" />
                    </div>
                </div>

                <div class="mx-4 flex items-center space-x-3">
                    <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
                    <p>Today</p>
                    <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
                </div>

                <div class="flex items-start space-x-2.5 sm:space-x-5">
                    <div class="avatar">
                        <img class="rounded-full" :src="activeChat.avatar_url" alt="avatar" />
                    </div>

                    <div class="flex flex-col items-start space-y-3.5">
                        <div class="mr-4 max-w-lg sm:mr-10">
                            <div
                                class="rounded-2xl rounded-tl-none bg-white p-3 text-slate-700 shadow-sm dark:bg-navy-700 dark:text-navy-100">
                                Recusabo mandamus cum ex, ius unum nibh an, usu liber oratio
                                liberavisse ea.
                            </div>
                            <p class="mt-1 ml-auto text-right text-xs text-slate-400 dark:text-navy-300">
                                08:16
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flex items-start justify-end space-x-2.5 sm:space-x-5">
                    <div class="flex flex-col items-end space-y-3.5">
                        <div class="ml-4 max-w-lg md:ml-10">
                            <div
                                class="rounded-2xl rounded-tr-none bg-info/10 p-3 text-slate-700 shadow-sm dark:bg-accent dark:text-white">
                                Ocurreret rationibus intellegebat eu eos,
                            </div>
                        </div>
                        <div class="ml-4 max-w-lg md:ml-10">
                            <div
                                class="rounded-2xl rounded-tr-none bg-info/10 p-3 text-slate-700 shadow-sm dark:bg-accent dark:text-white">
                                Veri dolorum cu ius. Vim id nullam putent invidunt.
                            </div>
                            <p class="mt-1 ml-auto text-left text-xs text-slate-400 dark:text-navy-300">
                                08:16
                            </p>
                        </div>
                    </div>
                    <div class="avatar">
                        <img class="rounded-full" src="{{ asset('images/100x100.png') }}" alt="avatar" />
                    </div>
                </div>
            </div>
        </div>

        <div
            class="chat-footer relative flex h-12 w-full shrink-0 items-center justify-between border-t border-slate-150 bg-white px-[calc(var(--margin-x)-.25rem)] transition-[padding,width] duration-[.25s] dark:border-navy-600 dark:bg-navy-800">
            <div class="-ml-1.5 flex flex-1 space-x-2">
                <button
                    class="btn h-9 w-9 shrink-0 rounded-full p-0 text-slate-500 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:text-navy-200 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                    </svg>
                </button>

                <input type="text" class="form-input h-9 w-full bg-transparent placeholder:text-slate-400/70"
                    placeholder="Write the message" />
            </div>

            <div class="-mr-1.5 flex">
                <button
                    class="btn h-9 w-9 shrink-0 rounded-full p-0 text-slate-500 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:text-navy-200 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </button>
                <button
                    class="btn h-9 w-9 shrink-0 rounded-full p-0 text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:text-accent-light dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m9.813 5.146 9.027 3.99c4.05 1.79 4.05 4.718 0 6.508l-9.027 3.99c-6.074 2.686-8.553.485-5.515-4.876l.917-1.613c.232-.41.232-1.09 0-1.5l-.917-1.623C1.26 4.66 3.749 2.46 9.813 5.146ZM6.094 12.389h7.341" />
                    </svg>
                </button>
            </div>
        </div>

        <template x-teleport="#x-teleport-target">
            <div x-data="{
                get showDrawer() { return $data.isShowChatInfo; },
                set showDrawer(val) { $data.isShowChatInfo = val; },
            }" x-show="showDrawer" @keydown.window.escape="showDrawer = false">
                <div class="fixed inset-0 z-[100] bg-slate-900/60 transition-opacity duration-200"
                    @click="showDrawer = false" x-show="showDrawer && $store.breakpoints.mdAndDown"
                    x-transition:enter="ease-out" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100" x-transition:leave="ease-in"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>
                <div class="fixed right-0 top-0 z-[101] h-full w-full sm:w-80">
                    <div class="flex h-full w-full flex-col border-l border-slate-150 bg-white transition-transform duration-200 dark:border-navy-600 dark:bg-navy-750"
                        x-show="showDrawer" x-transition:enter="ease-out transform-gpu"
                        x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                        x-transition:leave="ease-in transform-gpu" x-transition:leave-start="translate-x-0"
                        x-transition:leave-end="translate-x-full">
                        <div class="flex h-[60px] items-center justify-between p-4">
                            <h3 class="text-base font-medium text-slate-700 dark:text-navy-100">
                                Chat Info
                            </h3>
                            <div class="-mr-1.5 flex space-x-1">
                                <button @click="$store.global.isRightSidebarExpanded = true"
                                    class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-5.5 w-5.5 text-slate-500 dark:text-navy-100" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                    </svg>
                                </button>

                                <button @click="$store.global.isDarkModeEnabled = !$store.global.isDarkModeEnabled"
                                    class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <svg x-show="$store.global.isDarkModeEnabled"
                                        x-transition:enter="transition-transform duration-200 ease-out absolute origin-top"
                                        x-transition:enter-start="scale-75"
                                        x-transition:enter-end="scale-100 static" class="h-6 w-6 text-amber-400"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M11.75 3.412a.818.818 0 01-.07.917 6.332 6.332 0 00-1.4 3.971c0 3.564 2.98 6.494 6.706 6.494a6.86 6.86 0 002.856-.617.818.818 0 011.1 1.047C19.593 18.614 16.218 21 12.283 21 7.18 21 3 16.973 3 11.956c0-4.563 3.46-8.31 7.925-8.948a.818.818 0 01.826.404z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        x-show="!$store.global.isDarkModeEnabled"
                                        x-transition:enter="transition-transform duration-200 ease-out absolute origin-top"
                                        x-transition:enter-start="scale-75"
                                        x-transition:enter-end="scale-100 static" class="h-6 w-6 text-amber-400"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>

                                <button @click="showDrawer=false"
                                    class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="mt-5 flex flex-col items-center">
                            <div class="avatar h-20 w-20">
                                <img class="rounded-full" :src="activeChat.avatar_url" alt="avatar" />
                            </div>
                            <h3 x-text="activeChat.name"
                                class="mt-2 text-lg font-medium text-slate-700 dark:text-navy-100"></h3>
                            <p>Frontend Developer</p>
                            <div class="mt-2 flex space-x-1.5">
                                <button
                                    class="btn h-10 w-10 rounded-full p-0 text-slate-600 hover:bg-slate-300/20 hover:text-primary focus:bg-slate-300/20 focus:text-primary active:bg-slate-300/25 dark:text-navy-100 dark:hover:bg-navy-300/20 dark:hover:text-accent dark:focus:bg-navy-300/20 dark:focus:text-accent dark:active:bg-navy-300/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                </button>
                                <button
                                    class="btn h-10 w-10 rounded-full p-0 text-slate-600 hover:bg-slate-300/20 hover:text-primary focus:bg-slate-300/20 focus:text-primary active:bg-slate-300/25 dark:text-navy-100 dark:hover:bg-navy-300/20 dark:hover:text-accent dark:focus:bg-navy-300/20 dark:focus:text-accent dark:active:bg-navy-300/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                    </svg>
                                </button>
                                <button
                                    class="btn h-10 w-10 rounded-full p-0 text-slate-600 hover:bg-slate-300/20 hover:text-primary focus:bg-slate-300/20 focus:text-primary active:bg-slate-300/25 dark:text-navy-100 dark:hover:bg-navy-300/20 dark:hover:text-accent dark:focus:bg-navy-300/20 dark:focus:text-accent dark:active:bg-navy-300/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div x-data="{ activeTab: 'tabImages' }" class="tabs mt-6 flex flex-col">
                            <div class="is-scrollbar-hidden overflow-x-auto px-4">
                                <div class="tabs-list flex">
                                    <button @click="activeTab = 'tabImages'"
                                        :class="activeTab === 'tabImages' ?
                                            'border-primary dark:border-accent text-primary dark:text-accent-light' :
                                            'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                        class="btn shrink-0 rounded-none border-b-2 px-3 py-2 font-medium">
                                        Images
                                    </button>
                                    <button @click="activeTab = 'tabFiles'"
                                        :class="activeTab === 'tabFiles' ?
                                            'border-primary dark:border-accent text-primary dark:text-accent-light' :
                                            'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                        class="btn shrink-0 rounded-none border-b-2 px-3 py-2 font-medium">
                                        Files
                                    </button>
                                </div>
                            </div>
                            <div class="tab-content px-4 pt-4">
                                <div x-show="activeTab === 'tabImages'"
                                    x-transition:enter="transition-all duration-500 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                    <div class="grid grid-cols-4 gap-2">
                                        <img class="aspect-square rounded-lg object-cover object-center"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />

                                        <img class="aspect-square rounded-lg object-cover object-center"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                        <img class="aspect-square rounded-lg object-cover object-center"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                        <img class="aspect-square rounded-lg object-cover object-center"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                        <img class="aspect-square rounded-lg object-cover object-center"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                        <img class="aspect-square rounded-lg object-cover object-center"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                        <img class="aspect-square rounded-lg object-cover object-center"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                        <img class="aspect-square rounded-lg object-cover object-center"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                        <img class="aspect-square rounded-lg object-cover object-center"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                        <img class="aspect-square rounded-lg object-cover object-center"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />

                                        <img class="aspect-square rounded-lg object-cover object-center"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                        <img class="aspect-square rounded-lg object-cover object-center"
                                            src="{{ asset('images/800x600.png') }}" alt="image" />
                                    </div>
                                </div>
                                <div x-show="activeTab === 'tabFiles'"
                                    x-transition:enter="transition-all duration-500 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                    <div class="flex flex-col space-y-3.5">
                                        <div class="flex items-center space-x-3">
                                            <div
                                                class="mask is-squircle flex h-11 w-11 items-center justify-center bg-secondary text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="font-medium text-slate-700 dark:text-navy-100">
                                                    Slow Music
                                                </p>
                                                <div class="flex text-xs text-slate-400 dark:text-navy-300">
                                                    <span>03:12</span>
                                                    <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>

                                                    <span>8.32 MB</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-center space-x-3">
                                            <div
                                                class="mask is-squircle flex h-11 w-11 items-center justify-center bg-info text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="font-medium text-slate-700 dark:text-navy-100">
                                                    Final.fig
                                                </p>
                                                <div class="flex text-xs text-slate-400 dark:text-navy-300">
                                                    <span>45 MB</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-center space-x-3">
                                            <div
                                                class="mask is-squircle flex h-11 w-11 items-center justify-center bg-warning text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="font-medium text-slate-700 dark:text-navy-100">
                                                    Report.docx
                                                </p>
                                                <div class="flex text-xs text-slate-400 dark:text-navy-300">
                                                    <span>3.5 MB</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-center space-x-3">
                                            <div
                                                class="mask is-squircle flex h-11 w-11 items-center justify-center bg-success text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="font-medium text-slate-700 dark:text-navy-100">
                                                    TheBook.pdf
                                                </p>
                                                <div class="flex text-xs text-slate-400 dark:text-navy-300">
                                                    <span>14 MB</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </main>

</x-base-layout>

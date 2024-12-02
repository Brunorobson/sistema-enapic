<x-app-layout title="Invoice 2" is-header-blur="true">
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center justify-between py-5 lg:py-6">
            <h2 class="text-xl font-medium text-slate-700 line-clamp-1 dark:text-navy-50 lg:text-2xl">
                Invoice
            </h2>

            <div class="flex">
                <button @click="window.print()"
                    class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:h-9 sm:w-9">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
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
        <div class="grid grid-cols-1">
            <div class="card px-5 py-12 sm:px-18">
                <div>
                    <div class="text-center sm:text-left">
                        <h2 class="text-2xl font-semibold uppercase text-primary dark:text-accent-light">
                            lineone
                        </h2>
                        <div class="space-y-1 pt-2">
                            <p>Sparksuite, Inc.</p>
                            <p>12345 Sunny Road</p>
                            <p>Sunnyville, CA 12345</p>
                        </div>
                    </div>
                </div>
                <div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>
                <div class="flex flex-col justify-between sm:flex-row">
                    <div class="text-center sm:text-left">
                        <h2 class="text-2xl font-semibold uppercase text-slate-600 dark:text-navy-100">
                            invoice
                        </h2>
                        <div class="space-y-1 pt-2">
                            <p>Invoice #: <span class="font-semibold">123</span></p>
                            <p>
                                Created: <span class="font-semibold">June 23, 2021</span>
                            </p>
                            <p>Due: <span class="font-semibold"> July 23, 2021</span></p>
                        </div>
                    </div>
                    <div class="mt-4 text-center sm:mt-0 sm:text-right">
                        <p class="text-lg font-medium text-slate-600 dark:text-navy-100">
                            Invoiced To:
                        </p>
                        <div class="space-y-1 pt-2">
                            <p class="font-semibold">John Doe</p>
                            <p>johndoe@example.com</p>
                            <p>260 W. Storm Street New York, NY 10025.</p>
                        </div>
                    </div>
                </div>
                <div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>
                <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
                    <table class="is-zebra w-full text-left">
                        <thead>
                            <tr>
                                <th
                                    class="whitespace-nowrap rounded-l-lg bg-slate-200 px-3 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                    #
                                </th>
                                <th
                                    class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                    DESCRIPTION
                                </th>
                                <th
                                    class="whitespace-nowrap bg-slate-200 px-3 py-3 text-right font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                    HRS
                                </th>
                                <th
                                    class="whitespace-nowrap bg-slate-200 px-3 py-3 text-right font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                    RATE
                                </th>
                                <th
                                    class="whitespace-nowrap rounded-r-lg bg-slate-200 px-3 py-3 text-right font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                    SUBTOTAL
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5">
                                    1
                                </td>
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    <div>
                                        <p class="font-medium text-slate-600 dark:text-navy-100">
                                            Template Design
                                        </p>
                                        <p class="text-xs+">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Perferendis
                                        </p>
                                    </div>
                                </td>
                                <td class="w-3/12 whitespace-nowrap px-4 py-3 text-right sm:px-5">
                                    10
                                </td>
                                <td class="w-3/12 whitespace-nowrap px-4 py-3 text-right sm:px-5">
                                    55
                                </td>
                                <td
                                    class="w-3/12 whitespace-nowrap rounded-r-lg px-4 py-3 text-right font-semibold sm:px-5">
                                    550
                                </td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5">
                                    2
                                </td>
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    <div>
                                        <p class="font-medium text-slate-600 dark:text-navy-100">
                                            Mobile App
                                        </p>
                                        <p class="text-xs+">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit.
                                        </p>
                                    </div>
                                </td>
                                <td class="w-3/12 whitespace-nowrap px-4 py-3 text-right sm:px-5">
                                    8
                                </td>
                                <td class="w-3/12 whitespace-nowrap px-4 py-3 text-right sm:px-5">
                                    40
                                </td>
                                <td
                                    class="w-3/12 whitespace-nowrap rounded-r-lg px-4 py-3 text-right font-semibold sm:px-5">
                                    320
                                </td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5">
                                    3
                                </td>
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    <div>
                                        <p class="font-medium text-slate-600 dark:text-navy-100">
                                            CRM App
                                        </p>
                                        <p class="text-xs+">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Distinctio et ipsa modi.
                                        </p>
                                    </div>
                                </td>
                                <td class="w-3/12 whitespace-nowrap px-4 py-3 text-right sm:px-5">
                                    80
                                </td>
                                <td class="w-3/12 whitespace-nowrap px-4 py-3 text-right sm:px-5">
                                    65
                                </td>
                                <td
                                    class="w-3/12 whitespace-nowrap rounded-r-lg px-4 py-3 text-right font-semibold sm:px-5">
                                    5200
                                </td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5">
                                    4
                                </td>
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    <div>
                                        <p class="font-medium text-slate-600 dark:text-navy-100">
                                            CMS App
                                        </p>
                                        <p class="text-xs+">
                                            Lorem ipsum dolor sit amet, consectetur.
                                        </p>
                                    </div>
                                </td>
                                <td class="w-3/12 whitespace-nowrap px-4 py-3 text-right sm:px-5">
                                    25
                                </td>
                                <td class="w-3/12 whitespace-nowrap px-4 py-3 text-right sm:px-5">
                                    35
                                </td>
                                <td
                                    class="w-3/12 whitespace-nowrap rounded-r-lg px-4 py-3 text-right font-semibold sm:px-5">
                                    875
                                </td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5">
                                    5
                                </td>
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    <div>
                                        <p class="font-medium text-slate-600 dark:text-navy-100">
                                            UI/UX Design
                                        </p>
                                        <p class="text-xs+">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Animi
                                        </p>
                                    </div>
                                </td>
                                <td class="w-3/12 whitespace-nowrap px-4 py-3 text-right sm:px-5">
                                    25
                                </td>
                                <td class="w-3/12 whitespace-nowrap px-4 py-3 text-right sm:px-5">
                                    15
                                </td>
                                <td
                                    class="w-3/12 whitespace-nowrap rounded-r-lg px-4 py-3 text-right font-semibold sm:px-5">
                                    375
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>
                <div class="flex flex-col justify-between sm:flex-row">
                    <div class="text-center sm:text-left">
                        <p class="text-lg font-medium text-slate-600 dark:text-navy-100">
                            Payment Method:
                        </p>
                        <div class="space-y-1 pt-2">
                            <p class="font-medium">Visa **** **** 1234</p>
                        </div>
                    </div>
                    <div class="mt-4 text-center sm:mt-0 sm:text-right">
                        <p class="text-lg font-medium text-slate-600 dark:text-navy-100">
                            Total:
                        </p>
                        <div class="space-y-1 pt-2">
                            <p>Summary : <span class="font-medium">$7320</span></p>
                            <p>Discount : <span class="font-medium">$20</span></p>
                            <p>Tax : <span class="font-medium">20%</span></p>
                            <p class="text-lg text-primary dark:text-accent-light">
                                Total: <span class="font-medium">8780</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>

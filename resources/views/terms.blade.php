<x-guest-layout title="Terms">
    <main class="grid w-full grow grid-cols-1 place-items-center">
        <div class="w-full max-w-[40rem] p-4 sm:px-5">
            <div class="text-center">
                <img class="mx-auto h-16 w-16" src="{{ asset('images/app-logo.svg') }}" alt="logo" />
            </div>
            <div class="card mt-5 rounded-lg p-5 lg:p-7">
                <div class="prose dark:prose-invert">
                    {!! $terms !!}
                </div>
            </div>
        </div>
    </main>
</x-guest-layout>

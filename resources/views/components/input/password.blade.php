@props(['disabled' => false])
<div class="relative flex" x-data="{ password: true }">

    <input {{ $disabled ? 'disabled' : '' }} x-bind:type="password ? 'password' : 'text'" {!! $attributes->merge([
        'class' =>
            'form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pr-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent',
    ]) !!}>

    <div @click="password = !password"
        class="absolute right-0 flex h-full w-10 cursor-pointer items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
        <template x-if="password">
            <i class="fa-solid fa-eye-slash"></i>
        </template>
        <template x-if="!password">
            <i class="fa-solid fa-eye"></i>
        </template>
    </div>

</div>

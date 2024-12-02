@props(['colspan' => 7])

<tr {{ $attributes->merge(['class' => 'dark:border-b-navy-500 border-y border-transparent border-b-slate-200']) }}>
    <td colspan="{{ $colspan }}" class="dark:text-navy-100 text-navy-200 whitespace-nowrap px-3 py-3 text-center lg:px-5">
        Nenhum resultado encontrado...
    </td>
</tr>

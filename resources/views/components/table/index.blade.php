<table {{ $attributes->merge(['class' => 'is-hoverable w-full text-left']) }}>
    <thead {{ $head->attributes }}>
        {{ $head }}
    </thead>
    <tbody {{ $body->attributes }}>
        {{ $body }}
    </tbody>
</table>

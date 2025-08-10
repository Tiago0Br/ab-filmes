@props([
    'image' => '',
])

<img
    src="{{ asset("/storage/$image") }}"
    alt="Avatar do usuário"
    draggable="false"
    {{ $attributes->class('size-8 rounded-lg border border-[#7435DB]') }}
>

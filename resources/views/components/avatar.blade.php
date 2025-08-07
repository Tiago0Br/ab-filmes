@props([
    'image' => '',
])

<img
    src="{{ asset("/storage/$image") }}"
    alt="Avatar do usuário" class="size-8 rounded-lg border border-[#7435DB]"
>

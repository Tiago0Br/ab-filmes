@props([
    'search' => ''
])

<x-input
    name="search"
    placeholder="Pesquisar filme"
    icon="{{ asset('/icons/magnifying-glass.svg') }}"
    value="{{ $search }}"
/>

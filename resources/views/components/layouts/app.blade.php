@props([
    'title' => 'AB Filmes'
])

<x-layouts.base title="{{ $title }}">
    <x-header />

    <div class="h-full flex flex-col mt-10 mx-16">
        {{ $slot }}
    </div>
</x-layouts.base>

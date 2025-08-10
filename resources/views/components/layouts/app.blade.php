@props([
    'title' => 'AB Filmes'
])

<x-layouts.base title="{{ $title }}">
    <x-header />

    <div {{ $attributes->class(['h-full flex flex-col mt-10 mx-16 pb-4']) }}>
        {{ $slot }}
    </div>
</x-layouts.base>

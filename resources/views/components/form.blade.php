@props([
    'title' => '',
    'method' => 'post',
    'button' => null
])

@php
    $method = strtolower($method);
@endphp

<form method="{{ $method === 'get' ? 'get' : 'post' }}" {{ $attributes->class(["flex flex-col gap-3"]) }}>
    @if($method !== 'get')
        @csrf
    @endif

    @if($method !== 'post' && $method !== 'get')
        @method($method)
    @endif

    @if(! empty($title))
        <h1 class="text-2xl font-rammeto mb-4 text-center">{{ $title }}</h1>
    @endif
    {{ $slot }}

    @if($button !== null)
        <x-button type="submit" class="mt-4">
            {{ $button }}
        </x-button>
    @endif
</form>

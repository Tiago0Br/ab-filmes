@props([
    'route' => ''
])

<a
    href="{{ route($route) }}"
    {{ $attributes->class([
        'text-center py-2.5 px-3 text-gray-500',
        'text-purple-light bg-gray-300 rounded-lg' => request()->routeIs($route)
    ]) }}
>
    {{ $slot }}
</a>

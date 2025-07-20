@props([
    'route' => ''
])

<a
    href="{{ route($route) }}"
    {{ $attributes->class([
        'text-center py-2.5 px-3 text-gray-500 hover:bg-gray-300 hover:rounded-lg transition-colors',
        'text-purple-light bg-gray-300 rounded-lg' => request()->routeIs($route)
    ]) }}
>
    {{ $slot }}
</a>

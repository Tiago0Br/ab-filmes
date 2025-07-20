@props([
    'icon' => null
])

<a {{
    $attributes->class([
        'flex items-center gap-2 justify-center p-2 cursor-pointer bg-purple-base hover:bg-purple-base/80 transition-colors rounded-md'
    ])
}}>
    @if($icon !== null)
        <img src="{{ $icon }}" alt="">
    @endif

    {{ $slot }}
</a>

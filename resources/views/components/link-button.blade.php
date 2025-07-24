@props([
    'icon' => null,
    'variant' => 'button'
])

<a {{
    $attributes->class([
        'flex items-center gap-2 justify-center cursor-pointer',
        'p-2 bg-purple-base hover:bg-purple-base/80 transition-colors rounded-md' => $variant === 'button',
        'text-gray-500' => $variant === 'link'
    ])
}}>
    @if($icon !== null)
        <img src="{{ $icon }}" alt="">
    @endif

    {{ $slot }}
</a>

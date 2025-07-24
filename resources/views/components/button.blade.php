<button {{
    $attributes->class([
        'flex items-center justify-center p-3 cursor-pointer bg-purple-base hover:bg-purple-base/80 transition-colors rounded-md'
    ])
}}>
    {{ $slot }}
</button>

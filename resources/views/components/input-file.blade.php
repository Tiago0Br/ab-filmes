@props([
    'name' => '',
    'icon' => null,
    'placeholder' => '',
    'accept' => ''
])

<div>
    <input type="file" name="{{ $name }}" {{ $attributes->class([
        'flex flex-col items-center justify-center p-8 bg-gray-300 rounded-lg'
    ]) }}>
        @if($icon !== null)
            <div class="size-10">
                <img src="{{ $icon }}" alt="" draggable="false">
            </div>
        @endif
        <p class="text-gray-500">{{ $placeholder }}</p>
    @error($name)
    <span class="text-xs text-red-600">{{ $message }}</span>
    @enderror
</div>

@props([
    'name' => '',
    'icon' => null
])

<div>
    <div class="flex items-center gap-2 rounded-md border border-gray-500/20 px-3">
        @if($icon !== null)
            <img src="{{ $icon }}" alt="" class="size-5" />
        @endif
        <input
            {{ $attributes->class(['w-full outline-none py-2']) }}
            name="{{ $name }}"
        />
    </div>
    @error($name)
        <span class="text-xs text-red-600">{{ $message }}</span>
    @enderror
</div>

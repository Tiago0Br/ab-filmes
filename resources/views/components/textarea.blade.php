@props([
    'name' => ''
])

<div>
    <textarea
        {{ $attributes->class(['rounded-md border border-gray-500/20 px-3 w-full outline-none py-2']) }}
        name="{{ $name }}"
    ></textarea>
    @error($name)
    <span class="text-xs text-red-600">{{ $message }}</span>
    @enderror
</div>

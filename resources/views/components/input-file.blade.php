@props([
    'name' => '',
    'icon' => null,
    'placeholder' => '',
])

<div class="relative">
    <input
        type="file"
        name="{{ $name }}"
        id="{{ $name }}"
        class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10"
        {{ $attributes->except('class') }}
        onchange="updateFileName(this)"
    >

    <div {{ $attributes->class([
        'flex flex-col items-center justify-center p-8 bg-gray-300 rounded-xl cursor-pointer'
    ]) }}>
        @if($icon !== null)
            <div class="size-10 mb-2">
                <img src="{{ $icon }}" alt="" draggable="false">
            </div>
        @endif
        <p class="text-gray-500 text-center" id="placeholder-{{ $name }}">{{ $placeholder }}</p>
        <p class="text-gray-700 text-center text-sm font-medium hidden" id="filename-{{ $name }}"></p>
        <p class="mt-4 text-gray-500 text-center">Formato recomendado: 762x980</p>

    </div>

    @error($name)
        <span class="text-xs text-red-600 mt-1 block">{{ $message }}</span>
    @enderror
</div>

<script>
    function updateFileName(input) {
        const placeholderElement = document.getElementById('placeholder-' + input.name);
        const filenameElement = document.getElementById('filename-' + input.name);

        if (input.files && input.files[0]) {
            const fileName = input.files[0].name;
            placeholderElement.classList.add('hidden');
            filenameElement.textContent = fileName;
            filenameElement.classList.remove('hidden');
        } else {
            placeholderElement.classList.remove('hidden');
            filenameElement.classList.add('hidden');
            filenameElement.textContent = '';
        }
    }
</script>

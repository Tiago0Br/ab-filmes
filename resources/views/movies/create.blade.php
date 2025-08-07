<x-layouts.app title="Novo filme - AB Filmes">
    <x-form
        action="{{ route('movies.store') }}"
        class="h-[490px] w-full flex-row justify-center gap-12"
        enctype="multipart/form-data"
    >
        <x-input-file
            name="cover"
            accept="image/png"
            placeholder="Fazer upload"
            icon="{{ asset('/icons/upload.svg') }}"
            message="Formato recomendado: 762x980"
            class="h-full w-[381px]"
        />
        <div class="h-full md:w-[641px] flex flex-col gap-3">
            <h2 class="font-rajdhani font-bold text-xl">Novo filme</h2>
            <x-input type="text" name="title" placeholder="Título" icon="{{ asset('/icons/film-slate2.svg') }}" />
            <div class="grid grid-cols-2 gap-4">
                <x-input type="number" name="year" placeholder="Ano" icon="{{ asset('/icons/calendar.svg') }}" />
                <x-input type="text" name="category" placeholder="Categoria" icon="{{ asset('/icons/tag.svg') }}" />
            </div>
            <x-textarea name="description" placeholder="Descrição" class="h-full"></x-textarea>

            <div class="flex justify-end gap-6">
                <x-link-button href="{{ route('my-movies') }}" variant="link">Cancelar</x-link-button>
                <x-button type="submit" class="py-2">Salvar</x-button>
            </div>
        </div>
    </x-form>
</x-layouts.app>

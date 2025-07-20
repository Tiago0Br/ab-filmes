<x-layouts.app title="Novo filme - AB Filmes">
    <x-form action="{{ route('movies.store') }}" class="h-[490px] w-full flex-row gap-4">
        <x-input-file
            name="image"
            accept="image/png"
            placeholder="Fazer upload"
            icon="{{ asset('/icons/upload.svg') }}"
            class="h-full w-[381px]"
        />
        <div class="h-full flex flex-col gap-3">
            <x-input type="text" name="title" placeholder="Título" />
            <x-input type="number" name="year" placeholder="Year" />
            <x-input type="text" name="category" placeholder="Categoria" />
            <x-textarea name="description" placeholder="Descrição"></x-textarea>
        </div>
    </x-form>
</x-layouts.app>

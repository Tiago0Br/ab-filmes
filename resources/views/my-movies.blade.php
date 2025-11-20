<x-layouts.app title="Meus filmes - AB Filmes">
    <main class="flex-1 flex flex-col gap-8">
        <div class="flex justify-between items-center">
            <h1 class="font-rammeto text-2xl">Meus filmes</h1>
            <div class="flex items-center gap-4">
                <x-form method="GET">
                    <x-form.search-input :$search />
                </x-form>
                <x-link-button href="{{ route('movies.create') }}" icon="{{ asset('/icons/new.svg') }}">
                    Novo
                </x-link-button>
            </div>
        </div>

        <x-movie-list :movies="$movies" :$search />
    </main>
</x-layouts.app>

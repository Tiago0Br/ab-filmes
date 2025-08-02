<x-layouts.app title="Meus filmes - AB Filmes">
    <main class="flex-1 flex flex-col gap-8">
        <div class="flex justify-between items-center">
            <h1 class="font-rammeto text-2xl">Meus filmes</h1>
            <div class="flex items-center gap-4">
                <x-form method="GET">
                    <x-input
                        name="search"
                        placeholder="Pesquisar"
                        icon="{{ asset('/icons/magnifying-glass.svg') }}"
                        value="{{ $search }}"
                    />
                </x-form>
                <x-link-button href="{{ route('movies.create') }}" icon="{{ asset('/icons/new.svg') }}">
                    Novo
                </x-link-button>
            </div>
        </div>

        @if ($movies->isEmpty())
            <div class="flex items-center justify-center">
                <p>Nenhum filme cadastrado...</p>
            </div>
        @endif

        <div class="w-full grid grid-cols-4">
            @foreach($movies as $movie)
                <div class="flex flex-col items-center gap-4">
                    <img src="{{ asset('storage/' . $movie->cover) }}" alt="{{ $movie->title }}" draggable="false">
                    <p>{{ $movie->title }}</p>
                </div>
            @endforeach
        </div>
    </main>
</x-layouts.app>

<x-layouts.app title="Início - AB Filmes">
    <main class="flex-1 flex flex-col gap-8">
        <div class="flex justify-between items-center">
            <h1 class="font-rammeto text-2xl">Explorar</h1>
            <x-form method="GET">
                <x-input name="search" placeholder="Pesquisar" icon="{{ asset('/icons/magnifying-glass.svg') }}" />
            </x-form>
        </div>

        @if ($movies->isEmpty())
            <div class="flex items-center justify-center">
                <p>Nenhum filme cadastrado...</p>
            </div>
        @endif

        <div class="w-full grid grid-cols 4">
            @foreach($movies as $movie)
                <div>{{ $movie->title }}</div>
            @endforeach
        </div>
    </main>
</x-layouts.app>

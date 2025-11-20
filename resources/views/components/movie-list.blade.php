@props([
    'movies' => [],
    'search' => ''
])

@if ($movies->isEmpty())
    <div class="flex flex-col gap-4 items-center">
        <x-mdi-movie-open class="size-10 text-gray-600" />

        <div class="flex flex-col gap-1 items-center">
            <span>Nenhum filme encontrado com "{{ $search }}"</span>
            <span>Que tal tentar outra busca?</span>
        </div>

        <a href="{{ request()->url() }}" class="text-gray-600 cursor-pointer">
            Limpar filtro
        </a>
    </div>
@endif

<div class="w-full flex flex-wrap gap-4">
    @foreach($movies as $movie)
        <x-movie-card :movie="$movie" />
    @endforeach
</div>

@props([
    'movies' => []
])

@if ($movies->isEmpty())
    <div class="flex items-center justify-center">
        <p>Nenhum filme encontrado...</p>
    </div>
@endif

<div class="w-full flex flex-wrap gap-4">
    @foreach($movies as $movie)
        <x-movie-card :movie="$movie" />
    @endforeach
</div>

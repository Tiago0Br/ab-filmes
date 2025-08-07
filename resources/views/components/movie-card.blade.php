@props([
    'movie'
])

<a href="{{ route('movies.show', ['movie' => $movie->id]) }}">
    <div class="w-[280px] h-[360px] relative">
        <img
            src="{{ asset('storage/' . $movie->cover) }}"
            alt="{{ $movie->title }}"
            class="h-full w-full object-cover rounded-xl"
            draggable="false"
        >

        <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-black/80 via-black/40 to-transparent rounded-b-xl"></div>

        <div class="absolute bottom-0 left-0 right-0 p-4 rounded-b-xl">
            <h2 class="font-semibold text-gray-700 text-xl font-rajdhani">{{ $movie->title }}</h2>
            <span class="font-semibold text-sm text-gray-600">{{ $movie->category }} • {{ $movie->year }}</span>
        </div>

        <div class="flex items-center justify-center gap-1 absolute top-2 right-2 py-1 px-2 rounded-2xl bg-[0F0F1A] opacity-80">
        <span class="text-xs text-gray-700">
            <strong class="font-semibold text-lg">
                4,5
            </strong>
            / 5
        </span>
            <img src="{{ asset('/icons/star.svg') }}" alt="star icon" draggable="false" class="size-4">
        </div>
    </div>
</a>

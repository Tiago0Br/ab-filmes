<x-layouts.app title="{{ $movie->title }} - {{ config('app.name') }}" class="md:mx-40">
    <div class="flex flex-col gap-20">
        <div class="flex gap-12">
            <div class="w-[381px] h-[490px]">
                <img
                    src="{{ asset('storage/' . $movie->cover) }}"
                    alt="{{ $movie->title }}"
                    class="h-full w-full object-cover rounded-xl"
                    draggable="false"
                >
            </div>

            <div>
                <div class="h-full flex flex-col gap-10">
                    <div class="flex flex-col gap-4 ">
                        <a
                            href="{{ url()->previous() !== url()->current() ? url()->previous() : route('home') }}"
                            class="flex gap-2 items-center text-gray-500"
                        >
                            <x-elemplus-back class="size-5" />
                            Voltar
                        </a>
                        <h1 class="font-rajdhani font-semibold text-3xl">{{ $movie->title }}</h1>

                        <div class="flex flex-col gap-2 text-sm text-gray-600 font-nunito">
                            <span>
                                <strong>Categoria:</strong> {{ $movie->category }}
                            </span>
                            <span>
                                <strong>Ano:</strong> {{ $movie->year }}
                            </span>
                        </div>

                        <x-stars :ratings="$reviews->pluck('rating')->toArray()" />
                    </div>

                    <p class="flex-1 text-gray-600 overflow-hidden">
                        {{ $movie->description }}
                    </p>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-10">
            <div class="flex justify-between items-center">
                <h2 class="font-rajdhani text-xl font-semibold">Avaliações</h2>
                <x-review-modal :movie="$movie" />
            </div>

            <div class="flex flex-col gap-3">
                @forelse ($reviews as $review)
                    <x-review :$review />
                @empty
                    <p>Esse filme ainda não possui avaliações</p>
                @endforelse
            </div>
        </div>
    </div>
</x-layouts.app>

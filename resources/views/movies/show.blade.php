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
                <div class="h-full flex flex-col justify-between">
                    <div class="flex flex-col gap-4">
                        <h1 class="font-rajdhani font-semibold text-3xl">{{ $movie->title }}</h1>

                        <div class="flex flex-col gap-2 text-sm">
                            <span>Categoria: {{ $movie->category }}</span>
                            <span>Ano: {{ $movie->year }}</span>
                        </div>
                    </div>

                    <p class="text-gray-600">
                        {{ $movie->description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>

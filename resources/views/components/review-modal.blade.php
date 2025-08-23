<x-button class="gap-1" onclick="my_modal_3.showModal()">
    <x-heroicon-o-star class="size-6" />
    Avaliar filme
</x-button>
<dialog id="my_modal_3" class="modal">
    <div class="modal-box bg-gray-100">
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>
        <h3 class="text-lg font-semibold text-gray-700 font-rajdhani">
            Avaliar filme
        </h3>
        <x-form class="mt-6 gap-6">
            <div class="flex gap-6">
                <div class="w-[137px] h-[176px]">
                    <img
                        src="{{ asset('storage/' . $movie->cover) }}"
                        alt="{{ $movie->title }}"
                        class="h-full w-full object-cover rounded-xl"
                        draggable="false"
                    >
                </div>

                <div class="flex flex-col">
                    <h4 class="text-2xl font-rajdhani font-semibold">{{ $movie->title }}</h4>

                    <div class="mt-4 flex flex-col gap-1 text-xs font-nunito">
                        <span>
                            <strong>Categoria:</strong> {{ $movie->category }}
                        </span>
                        <span>
                            <strong>Ano:</strong> {{ $movie->year }}
                        </span>
                    </div>

                    <div class="mt-8">
                        <span>Sua avaliação:</span>

                        <div class="flex gap-1">
                            @for($i = 1; $i <= 5; $i++)
                                <button type="button" class="cursor-pointer">
                                    <x-heroicon-o-star class="size-6 text-purple-light" />
                                </button>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>

            <x-textarea placeholder="Comentário" name="comment" />
            <div class="flex justify-end">
                <x-button>Publicar</x-button>
            </div>
        </x-form>
    </div>
</dialog>

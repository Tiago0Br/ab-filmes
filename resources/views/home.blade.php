<x-layouts.app title="Início - AB Filmes">
    <main class="flex-1 flex flex-col gap-8">
        <div class="flex justify-between items-center">
            <h1 class="font-rammeto text-2xl">Explorar</h1>
            <x-form method="GET">
                <x-form.search-input :search="$search" />
            </x-form>
        </div>

        <x-movie-list :movies="$movies" :search="$search" />
    </main>
</x-layouts.app>

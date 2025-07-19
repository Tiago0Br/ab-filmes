<header class="flex justify-between items-center py-4 px-10">
    <div class="size-12">
        <img src="{{ asset('/images/logo.png') }}" alt="Logo AB Filmes" draggable="false">
    </div>
    <x-nav>
        <x-nav.item route="home">Explorar</x-nav.item>
        <x-nav.item route="my-movies">Meus filmes</x-nav.item>
    </x-nav>
    <div class="flex items-center gap-2">
        <span class="text-gray-600">Olá, {{ auth()->user()?->getFirstName() ?? 'Anônimo' }}</span>
        <x-form action="{{ route('logout') }}">
            <button class="cursor-pointer">
                <img src="{{ asset('/icons/logout.svg') }}" alt="Botão de deslogar">
            </button>
        </x-form>
    </div>
</header>

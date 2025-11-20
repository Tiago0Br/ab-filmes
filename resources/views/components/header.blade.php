<header class="flex justify-between items-center py-4 px-10 border-b border-gray-300">
    <div class="size-12">
        <img src="{{ asset('/images/logo.png') }}" alt="Logo AB Filmes" draggable="false">
    </div>
    <x-nav>
        <x-nav.item route="home">
            <x-phosphor-popcorn class="size-5" />
            Explorar
        </x-nav.item>
        <x-nav.item route="my-movies">
            <x-mdi-movie-open class="size-5" />
            Meus filmes
        </x-nav.item>
    </x-nav>
    <div class="flex items-center gap-4">
        <span class="text-gray-600">Olá, {{ auth()->user()?->getFirstName() }}</span>
        <a href="{{ route('profile') }}">
            <button class="cursor-pointer">
                @if(auth()->user()?->avatar)
                    <x-avatar image="{{ auth()->user()?->avatar }}" />
                @else
                    <x-ik-user class="text-gray-600 size-8" title="Perfil" />
                @endif
            </button>
        </a>
        <x-form action="{{ route('logout') }}" enctype="multipart/form-data">
            <button class="flex justify-center rounded-md cursor-pointer bg-gray-300 size-8">
                <img src="{{ asset('/icons/logout.svg') }}" alt="Botão de deslogar">
            </button>
        </x-form>
    </div>
</header>

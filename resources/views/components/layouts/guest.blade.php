@props([
    'title' => 'AB Filmes'
])

<x-layouts.base title="{{ $title }}">
    <main class="h-screen grid grid-cols-2">
        <div class="h-screen p-4">
            <img
                src="{{ asset('images/background.png') }}"
                alt="Background image"
                class="h-full object-cover"
                draggable="false">

            <div class="absolute top-10 left-10 size-16">
                <img src="{{ asset('/images/logo.png') }}" alt="Logo AB Filmes" draggable="false">
            </div>

            <div class="max-w-[346px] absolute bottom-15 left-15 flex flex-col gap-4">
                <span class="text-gray-600 font-rammeto text-sm">
                    ab filmes
                </span>
                <span class="text-gray-700 font-rammeto text-xl leading-relaxed">
                    O guia definitivo para os amantes do cinema
                </span>
            </div>
        </div>
        <div class="m-auto space-y-10">
            <x-nav>
                <x-nav.item route="login">Login</x-nav.item>
                <x-nav.item route="register.index">Cadastro</x-nav.item>
            </x-nav>

            {{ $slot }}
        </div>
    </main>
</x-layouts.base>

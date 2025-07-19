@props([
    'title' => 'AB Filmes'
])

<x-layouts.app title="{{ $title }}">
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
        <div class="flex flex-col justify-center items-center">
            <div class="space-y-6">
                <div class="w-full grid grid-cols-2 gap-2">
                    <a href="{{ route('login') }} " class="text-center bg-gray-300 py-3 rounded-lg">
                        Login
                    </a>
                    <a href="{{ route('register.index') }}" class="text-center bg-gray-300 py-3 rounded-lg">
                        Cadastro
                    </a>
                </div>

                {{ $slot }}
            </div>
        </div>
    </main>
</x-layouts.app>

<x-layouts.app title="Login - AB Filmes">
    <main class="h-screen grid grid-cols-2">
        <div class="h-screen p-4">
            <img
                src="{{ asset('images/background.png') }}"
                alt="Background image"
                class="h-full object-cover"
                draggable="false">

            <div class="absolute top-10">
                <span>ab filmes</span>
                <span>O guia definitivo para os amantes do cinema</span>
            </div>
        </div>
        <div class="flex flex-col justify-center items-center">
            <div>
                <a href="{{ route('register.index') }}">Cadastro</a>
            </div>

            <form method="post" action="{{ route('login.authenticate') }}" class="flex flex-col">
                @csrf

                <h1>Acesse sua conta</h1>
                <input type="email" name="email" placeholder="E-mail" />
                @error('email')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
                <input type="password" name="password" placeholder="Senha" />
                @error('password')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
                <button type="submit">Entrar</button>
            </form>
        </div>
    </main>
</x-layouts.app>

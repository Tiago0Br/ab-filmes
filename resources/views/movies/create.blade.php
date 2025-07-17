<x-layouts.app title="Novo filme - AB Filmes">
    <main class="h-screen grid grid-cols-2">
        <div class="h-screen p-4">
            <img
                src="{{ asset('images/background.png') }}"
                alt="Background image"
                class="h-full object-cover"
                draggable="false">
        </div>
        <div class="flex flex-col justify-center items-center">
            <form method="post" action="{{ route('movies.store') }}" class="flex flex-col">
                @csrf

                <h1>Novo filme</h1>
                <input type="text" name="title" placeholder="Título" />
                @error('title')
                <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
                <input type="number" name="year" placeholder="Year" />
                @error('year')
                <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
                <input type="text" name="category" placeholder="Categoria" />
                @error('category')
                <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
                <textarea name="description" placeholder="Descrição"></textarea>
                @error('description')
                <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
                <button type="submit">Criar filme</button>
            </form>
        </div>
    </main>
</x-layouts.app>

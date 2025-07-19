<x-layouts.guest title="Login - AB Filmes">
    <x-form action="{{ route('login.authenticate') }}" title="Acesse sua conta" button="Entrar" class="w-[328px]">
        <x-input type="email" name="email" placeholder="E-mail" icon="{{ asset('/icons/letter.svg') }}" autofocus />
        <x-input type="password" name="password" placeholder="Senha" icon="{{ asset('/icons/secret.svg') }}" />
    </x-form>
</x-layouts.guest>

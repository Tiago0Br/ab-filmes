<x-layouts.guest title="Login - AB Filmes">
    <x-form action="{{ route('login.authenticate') }}" title="Acesse sua conta" button="Entrar">
        <x-input type="email" name="email" placeholder="E-mail" icon="{{ asset('/icons/letter.svg') }}" />
        <x-input type="password" name="password" placeholder="Senha" icon="{{ asset('/icons/secret.svg') }}" />
    </x-form>
</x-layouts.guest>

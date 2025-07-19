<x-layouts.guest title="Cadastro - AB Filmes">
    <x-form action="{{ route('register.store') }}" title="Cadastre-se" button="Cadastrar" class="w-[328px]">
        <x-input type="text" name="name" placeholder="Nome" icon="{{ asset('/icons/person.svg') }}" autofocus />
        <x-input type="email" name="email" placeholder="E-mail" icon="{{ asset('/icons/letter.svg') }}" />
        <x-input type="password" name="password" placeholder="Senha" icon="{{ asset('/icons/secret.svg') }}" />
        <x-input type="password" name="password_confirmation" placeholder="Confirme a senha" icon="{{ asset('/icons/secret.svg') }}" />
    </x-form>
</x-layouts.guest>

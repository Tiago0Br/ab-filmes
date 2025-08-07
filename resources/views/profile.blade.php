<x-layouts.app>
    <div class="flex flex-col items-center gap-10">
        <h1 class="font-rajdhani font-semibold text-2xl">Perfil do usuário</h1>

        <x-form method="PUT" button="Atualizar" enctype="multipart/form-data">
            <x-input-file name="avatar" placeholder="Avatar" class="size-40 m-auto" />
            <x-input name="name" placeholder="Nome" value="{{ $user->name }}" />
            <x-input name="email" placeholder="Email" value="{{ $user->email }}" />
            <div class="flex gap-2">
                <x-input name="password" placeholder="Senha atual" type="password" />
                <x-input name="new_password" placeholder="Nova senha" type="password" />
            </div>
        </x-form>
    </div>
</x-layouts.app>

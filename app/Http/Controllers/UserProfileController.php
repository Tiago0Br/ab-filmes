<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserProfileRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class UserProfileController extends Controller
{
    public function index(): View
    {
        $user = auth()->user();

        return view('profile',compact('user'));
    }

    public function store(UpdateUserProfileRequest $request): RedirectResponse
    {
        $data = $request->only(['name', 'email']);
        if ($request->filled('password')) {
            $data['password'] = $request->password;
        }

        if ($request->hasFile('avatar')) {
            $file = $request->avatar;
            $avatarPath = $file->store('upload');

            if (! $avatarPath) {
                return back()
                    ->withErrors(['avatar' => 'Não foi possível fazer o upload da imagem.']);
            }

            $data['avatar'] = $avatarPath;
        }

        $user = auth()->user();
        $user->update($data);

        return to_route('home')
            ->with('success', 'Perfil atualizado com sucesso!');
    }
}

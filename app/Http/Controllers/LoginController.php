<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function index(): View
    {
        return view('login');
    }

    public function authenticate(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return to_route('home');
        }

        return back()->withErrors([
            'email' => 'E-mail e/ou senha inválidos.',
        ])->onlyInput('email');
    }

    public function logout(Request $request): RedirectResponse
    {
        $request->session()->invalidate();

        return to_route('login');
    }
}

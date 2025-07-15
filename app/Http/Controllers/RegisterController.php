<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function index(): View
    {
        return view('register');
    }

    public function store(RegisterRequest $request): RedirectResponse
    {
        $userData = $request->only(['name', 'email', 'password']);
        User::create($userData);

        return to_route('login');
    }
}

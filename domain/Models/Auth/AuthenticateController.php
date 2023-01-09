<?php

namespace MVC\Models\Auth;

use MVC\Base\MVCController;
use MVC\Models\User\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthenticateController extends MVCController
{
    public function login(AuthenticateRequest $request)
    {
        $credentials = $request->only(['email', 'password']);
        $remember    = $request->remember;

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            return auth()->user();
        }

        throw ValidationException::withMessages(['email' => ['Email e/ou senha inválido(s).']]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return response()->json(['message' => 'Desconectado com sucesso.']);
    }

    public function loginApi(AuthenticateRequest $request)
    {
        $credentials = $request->only(['email', 'password']);

        $user = User::where('email', $credentials['email'])->first();

        if (! $user || ! Hash::check($credentials['password'], $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['Email e/ou senha inválido(s).'],
            ]);
        }

        return $user->createToken('token-api')->plainTextToken;
    }

    public function logoutApi()
    {
        auth()->user()->tokens()->delete();

        return response()->json(['message' => 'Desconectado com sucesso.']);
    }
}

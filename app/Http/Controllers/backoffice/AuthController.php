<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backoffice\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('backoffice.auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        $remember    = $request->boolean('remember');

        $request->session()->forget('url.intended');

        if (! Auth::guard('backoffice')->attempt($credentials, $remember)) {
            return back()->withErrors([
                'email' => 'Adresse email ou mot de passe incorrect.',
            ])->onlyInput('email');
        }

        /** @var User $user */
        $user = Auth::guard('backoffice')->user();

        if ($user->status !== 'active') {
            Auth::guard('backoffice')->logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return back()->withErrors([
                'email' => 'Votre compte est actuellement ' . $user->status . '.',
            ])->onlyInput('email');
        }

        $request->session()->regenerate();

        $user->forceFill([
            'last_login_at' => now(),
        ])->save();

        return redirect()->route('backoffice.dashboard');
    }

    public function demoLogin(Request $request)
    {
        $request->session()->forget('url.intended');

        $user = User::where('email', 'admin@agency1.com')->first();

        if (! $user) {
            return redirect()->route('backoffice.login')
                ->withErrors(['email' => 'Utilisateur de démonstration introuvable. Lancez le seeder.']);
        }

        if ($user->status !== 'active') {
            return redirect()->route('backoffice.login')
                ->withErrors(['email' => 'Le compte de démonstration n’est pas actif.']);
        }

        Auth::guard('backoffice')->login($user, true);
        $request->session()->regenerate();

        return redirect()->route('backoffice.dashboard');
    }

    public function logout(Request $request)
    {
        Auth::guard('backoffice')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('backoffice.login');
    }
}

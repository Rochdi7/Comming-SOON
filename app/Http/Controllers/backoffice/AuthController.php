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
        $remember = $request->boolean('remember');

        // ✅ IMPORTANT: clear any previous intended redirect (could be /index)
        $request->session()->forget('url.intended');

        if (!Auth::attempt($credentials, $remember)) {
            return back()->withErrors([
                'email' => 'Email ou mot de passe incorrect.',
            ])->onlyInput('email');
        }

        /** @var User $user */
        $user = Auth::user();

        // Block inactive/blocked users
        if ($user->status !== 'active') {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return back()->withErrors([
                'email' => 'Votre compte est ' . $user->status . '.',
            ])->onlyInput('email');
        }

        $request->session()->regenerate();

        $user->forceFill([
            'last_login_at' => now(),
        ])->save();

        // ✅ Always go dashboard
        return redirect()->route('backoffice.dashboard');
    }

    public function demoLogin(Request $request)
    {
        $request->session()->forget('url.intended');

        $user = User::where('email', 'admin@agency1.com')->first();

        if (!$user) {
            return redirect()->route('backoffice.login')
                ->withErrors(['email' => 'Demo user not found. Run seeder first.']);
        }

        if ($user->status !== 'active') {
            return redirect()->route('backoffice.login')
                ->withErrors(['email' => 'Demo user is not active.']);
        }

        Auth::login($user, true);
        $request->session()->regenerate();

        return redirect()->route('backoffice.dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('backoffice.login');
    }
}

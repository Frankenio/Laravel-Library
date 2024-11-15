<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\RateLimiter;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }


    // Método que sobrescribe el redireccionamiento tras varios intentos fallidos
    protected function redirectPath()
    {
        return route('welcome');
    }
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended($this->redirectPath());
    }

    // Método que maneja el intento fallido
    protected function failedLogin(Request $request)
    {
        // Contador de intentos fallidos
        $key = 'login-attempts:' . $request->ip();
        $attempts = RateLimiter::attempts($key);

        if ($attempts >= 3) {
            return redirect('welcome')->with('error', 'Se alcanzaron los 3 intentos fallidos.');
        }

        RateLimiter::hit($key, 60); // Incrementa intentos fallidos y espera 1 minuto.

        return back()->withErrors([
            'email' => 'Incorrect username or password.',
        ])->onlyInput('email');
    }
    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

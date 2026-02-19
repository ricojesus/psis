<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(Request $request): View
    {
        $role = $request->route('role');
        return view('auth.login', compact('role'));
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $expectedRole = $request->route('role');

        $request->authenticate();
        $role = Auth::user()?->role;

        if ($expectedRole && $role !== $expectedRole) {
            Auth::guard('web')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return back()->withErrors([
                'email' => __('Credenciais inválidas para este perfil de acesso.'),
            ])->onlyInput('email');
        }

        $request->session()->regenerate();

        return match ($role) {
            'patient' => redirect('/paciente/dashboard'),
            'professional' => redirect('/profissional/dashboard'),
            'admin' => redirect('/admin/dashboard'),
            default => redirect('/dashboard'),
        };
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

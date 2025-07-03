<?php

namespace App\Http\Controllers\Auth;
 use Illuminate\Validation\ValidationException; // tambahkan use ini di atas
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Providers\RouteServiceProvider;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */

public function store(Request $request): RedirectResponse
{
    $credentials = $request->only('email', 'password');

    $request->validate([
        'email' => ['required', 'string', 'email'],
        'password' => ['required', 'string'],
    ]);

    if (Auth::attempt($credentials)) {
        $user = Auth::user();

        // Dokter dan Apoteker harus disetujui admin dulu
        if (in_array($user->role, ['dokter', 'apoteker']) && !$user->is_approved) {
            Auth::logout();
            throw ValidationException::withMessages([
                'email' => 'Akun Anda belum disetujui oleh admin.',
            ]);
        }

        $request->session()->regenerate();

        // Redirect sesuai role
        return redirect()->intended(match ($user->role) {
            'admin' => '/admin/dashboard',
            'dokter' => '/dokter/dashboard',
            'pasien' => '/pasien/dashboard',
            'apoteker' => '/apoteker/dashboard',
            default => '/',
        });
    }

    // Jika gagal login
    throw ValidationException::withMessages([
        'email' => __('auth.failed'),
    ]);
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

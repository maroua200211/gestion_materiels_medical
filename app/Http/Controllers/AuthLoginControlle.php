<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    protected $redirectTo = '/products';

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // L'authentification a réussi, redirigez vers la page "products"
            return redirect()->route('products');
        }

        // L'authentification a échoué, redirigez vers la page de connexion avec un message d'erreur
        return redirect()->route('login')->with('error', 'Identifiants incorrects');
    }
}

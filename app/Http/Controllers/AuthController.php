<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    public function handleRegister(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:25',
            'email' => 'required|email:dns|unique:users',
            'password' => ['required', 'min:8', 'confirmed', Password::defaults()],
        ]);
    
        /** @var User $user */
        $user = User::query()->create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'role' => 'user', // Rol implicit
        ]);
    
        auth()->login($user);
    
        return redirect()->route('books.index');
    }    
    public function login()
    {
        return view('auth.login');
    }
    public function handleLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (!auth()->attempt($credentials)) {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
    
        $request->session()->regenerate();
    
        // Redirecționează pe baza rolului utilizatorului
        $user = auth()->user();
        if ($user->role === 'admin') {
            return redirect()->route('books.index'); 
        }
        
        return redirect()->route('auth.login')->with('error', 'Access denied.');
    }    
    public function logout(){
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('auth.login');
    }
}


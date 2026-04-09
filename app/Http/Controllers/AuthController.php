<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
     
        $request->validate([
            'nom'       => 'required|string|max:255',
            'prenom'    => 'required|string|max:255',
            'email'     => 'required|email|unique:users,email',
            'telephone' => 'nullable|string|max:20', 
            'password'  => 'required|min:8',
            'role'      => 'required|in:ELEVE,PROF,ADMIN',
        ]);

      
        $isFirstUser = User::count() === 0;

      
        $user = User::create([
            'nom'       => $request->nom,
            'prenom'    => $request->prenom,
            'email'     => $request->email,
            'telephone' => $request->telephone, 
            'password'  => Hash::make($request->password),
            'role'      => $isFirstUser ? 'ADMIN' : $request->role,
            'statut'    => $isFirstUser ? 'approved' : 'pending',
        ]);

      
        if ($isFirstUser) {
            Auth::login($user);
          
            return redirect()->route('admin.dashboard')->with('success', 'Bienvenue, vous êtes le premier Administrateur !');
        }

        return redirect()->route('login')->with('success', 'Inscription réussie. Votre compte est en attente d\'approbation.');
    }


    public function showRegister()
    {
        
        $hasAdmin = User::count() > 0;
        return view('register', compact('hasAdmin'));
    }

    public function showLogin()
    {
        return view('login');
    }


public function login(Request $request)
{

    $credentials = $request->validate([
        'email'    => 'required|email',
        'password' => 'required',
    ]);


    $user = User::where('email', $request->email)->first();

    if (!$user) {
        return back()->withErrors(['email' => 'Identifiants introuvables.'])->withInput();
    }

  
    if (!Auth::attempt($credentials)) {
        return back()->withErrors(['password' => 'Mot de passe incorrect.'])->withInput();
    }

    if ($user->statut !== 'approved') {
        Auth::logout();
        return back()->withErrors(['email' => 'Votre compte est en attente d\'approbation.']);
    }


    $request->session()->regenerate();

    
    return match ($user->role) {
        'ADMIN' => redirect()->route('admin.dashboard'),
        'PROF'  => redirect()->route('prof.dashboard'),
        'ELEVE' => redirect()->route('eleve.dashboard'),
        default => redirect('/'),
    };
}


public function edit()
{
 
    $user = auth()->user();
    return view('profile.edit', compact('user'));
}

public function update(Request $request)
{
    $user = auth()->user();
    
    $request->validate([
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'telephone' => 'nullable|string|max:20',
    ]);

    $user->update($request->all());

    return redirect()->back()->with('success', 'Profil mis à jour !');
}

public function logout(Request $request)
{
    
    Auth::logout();

   
    $request->session()->invalidate();

   
    $request->session()->regenerateToken();

  
    return redirect()->route('login')->with('success', 'Vous avez été déconnecté.');
}
}
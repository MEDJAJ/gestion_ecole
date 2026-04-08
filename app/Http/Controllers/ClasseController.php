<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'nom_classe'     => 'required|string|max:50',
            'niveau'         => 'required|string|max:20',
            'annee_scolaire' => 'required|digits:4',
            'capacite'       => 'nullable|integer|min:1',
        ]);

       
        Classe::create($validated);

        return back()->with('success', 'La classe a été créée avec succès !');
    }

    public function index()
{
   
    $classes =Classe::orderBy('created_at', 'desc')->get();
    
    return view('vues_admin.class', compact('classes'));
}
}
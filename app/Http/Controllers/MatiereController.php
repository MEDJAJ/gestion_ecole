<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use Illuminate\Http\Request;

class MatiereController extends Controller
{
    public function store(Request $request)
    {
       
        $validated = $request->validate([
            'nom_matiere'  => 'required|string|max:100',
            'code_matiere' => 'required|string|max:20|unique:matieres,code_matiere',
            'coefficient'  => 'required|numeric|between:0,99.99',
            'niveau'       => 'nullable|string|max:50',
            'description'  => 'nullable|string',
        ]);

        
        Matiere::create($validated);

        return back()->with('success', 'Matière ajoutée avec succès !');
    }


    public function index()
{
   
    $matieres =Matiere::orderBy('created_at', 'desc')->get();

    
    return view('vues_admin.matiére', compact('matieres'));
}
}

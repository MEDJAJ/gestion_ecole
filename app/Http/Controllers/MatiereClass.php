<?php

namespace App\Http\Controllers;

use App\Models\classe;
use App\Models\matiere;
use Illuminate\Http\Request;

class MatiereClass extends Controller
{
        public function createAssociation()
{
   
    $classes = classe::orderBy('nom_classe')->get();
    $matieres = matiere::orderBy('nom_matiere')->get();

    return view('vues_admin.associer_matiére', compact('classes', 'matieres'));
}

public function storeAssociation(Request $request)
{
    $request->validate([
        'classe_id' => 'required|exists:classes,id',
        'matiere_id' => 'required|exists:matieres,id',
    ]);

    $classe = classe::findOrFail($request->classe_id);
    $matiere = matiere::findOrFail($request->matiere_id);

  
    if ($classe->matieres->contains($request->matiere_id)) {
        return redirect()->back()->with('error', "Cette matière ({$matiere->nom_matiere}) est déjà associée à la classe {$classe->nom_classe}.");
    }

    
    $classe->matieres()->syncWithoutDetaching([$request->matiere_id]);

    return redirect()->back()->with('success', 'La matière a été associée à la classe avec succès.');
}



public function indexAssociation()
{
   
    $classes = classe::with('matieres')->orderBy('nom_classe')->get();
    
    return view('vues_admin.associer_matiére_liste', compact('classes'));
}
}

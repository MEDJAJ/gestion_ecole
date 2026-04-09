<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\matiere;
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



public function update(Request $request, Classe $classe)
    {
        $validated = $request->validate([
            'nom_classe'     => 'required|string|max:50',
            'niveau'         => 'required|string|max:20',
            'annee_scolaire' => 'required|digits:4',
            'capacite'       => 'nullable|integer|min:1',
        ]);

        $classe->update($validated);

        return back()->with('success', 'La classe a été mise à jour avec succès !');
    }

    /**
     * Supprimer une classe.
     */
    public function destroy($id)
    {
        $classe = Classe::findOrFail($id);
        $classe->delete();
        return back()->with('success', 'La classe a été supprimée !');
    }



}
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



public function update(Request $request, $id)
{
    $matiere = Matiere::findOrFail($id);

    $validated = $request->validate([
        'nom_matiere'  => 'required|string|max:100',
        'code_matiere' => 'required|string|max:20|unique:matieres,code_matiere,' . $id,
        'coefficient'  => 'required|numeric|between:0,99.99',
        'niveau'       => 'nullable|string|max:50',
        'description'  => 'nullable|string',
    ]);

    $matiere->update($validated);

    return back()->with('success', 'La matière a été mise à jour avec succès !');
}

public function destroy($id)
{
    $matiere = Matiere::findOrFail($id);
    $matiere->delete(); 
    return back()->with('success', 'La matière a été supprimée !');
}
}

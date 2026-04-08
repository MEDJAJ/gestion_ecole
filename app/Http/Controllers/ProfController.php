<?php



namespace App\Http\Controllers;

use App\Models\User;
use Symfony\Component\HttpFoundation\Request;

class ProfController extends Controller
{
    public function afficherProf()
    {
      
        $professeurs = User::where('role', 'PROF')->with('matieres')->get();
        
        return view('vues_admin.prof', compact('professeurs'));
    }


    public function updateStatus(Request $request, $id)
{
    $prof =User::findOrFail($id);
    
 
    $request->validate([
        'statut' => 'required|in:approved,pending,rejected'
    ]);

    $prof->update(['statut' => $request->statut]);

    return back()->with('success', 'Statut mis à jour avec succès !');
}



public function edit($id)
{
    $professeur = User::findOrFail($id);

    return view('admin.professeurs.edit', compact('professeur'));
}


public function update(Request $request, $id)
{

    $request->validate([
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $id,
        'telephone' => 'required|string|max:20',
    ]);

    $professeur = User::findOrFail($id);


    $professeur->update([
        'nom' => $request->nom,
        'prenom' => $request->prenom,
        'email' => $request->email,
        'telephone' => $request->telephone,
    ]);

    return redirect()->route('professeurs.index')->with('success', 'Professeur mis à jour avec succès !');
}
}

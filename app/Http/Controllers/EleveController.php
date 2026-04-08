<?php

namespace App\Http\Controllers;

use App\Models\User;
use Symfony\Component\HttpFoundation\Request;

class EleveController extends Controller
{
    public function afficherEleve()
    {
       
        $eleves = User::where('role', 'ELEVE')
                      ->with('classe') 
                      ->get();
        
        return view('vues_admin.éleve', compact('eleves'));
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
   
    $eleve = User::findOrFail($id); 


    return view('admin.eleves.edit', compact('eleve'));
}

public function update(Request $request, $id)
{
    
    $request->validate([
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $id, 
        'telephone' => 'required|string|max:20',
     
    ]);

   
    $eleve = User::findOrFail($id);

  
    $eleve->update([
        'nom' => $request->nom,
        'prenom' => $request->prenom,
        'email' => $request->email,
        'telephone' => $request->telephone,
    
    ]);


    return redirect()->route('eleves.index')->with('success', 'Élève mis à jour avec succès !');
}
}
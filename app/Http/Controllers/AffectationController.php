<?php

namespace App\Http\Controllers;

use App\Models\classe;
use App\Models\User;
use Illuminate\Http\Request;

class AffectationController extends Controller
{
    public function index()
{
   
    $classes = classe::orderBy('nom_classe')->get();

    
    $elevesSansClasse = User::where('role', 'ELEVE')
                            ->whereNull('classe_id')
                            ->where('statut', 'approved') 
                            ->orderBy('nom')
                            ->get();

    return view('vues_admin.affecter_éleve_class', compact('classes', 'elevesSansClasse'));
}


public function storeAffectation(Request $request)
{

    $request->validate([
        'classe_id' => 'required|exists:classes,id',
        'user_ids' => 'required|array',
    ]);

    
    User::whereIn('id', $request->user_ids)
        ->update(['classe_id' => $request->classe_id]);

    return back()->with('success', 'Les élèves ont été affectés avec succès !');
}
}

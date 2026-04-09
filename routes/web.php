<?php

use App\Http\Controllers\AffectationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\MatiereClass;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\ProfController;

Route::get('/', function () {
    return view('home');
});

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('loginn');
Route::get('/login',[AuthController::class, 'showLogin'])->name('login');
Route::get('/register',[AuthController::class, 'showRegister']);

Route::get('/forget',function(){
 return view('forget');
});

Route::get('/admin',function(){
 return view('vues_admin.dashboard');
})->name('admin.dashboard');



Route::get('/matiére',function(){
 return view('vues_admin.matiére');
});

Route::get('/prof',[ProfController::class, 'afficherProf'])->name('professeurs.index');
Route::get('/éleve',[EleveController::class, 'afficherEleve'])->name('eleves.index');


Route::patch('/professeurs/{id}/status', [ProfController::class, 'updateStatus'])->name('professeurs.updateStatus');
Route::patch('/eleves/{id}/status', [EleveController::class, 'updateStatus'])->name('eleves.updateStatus');

Route::put('/eleves/{id}', [EleveController::class, 'update'])->name('eleves.update');

Route::get('/eleves/{id}/edit', [EleveController::class, 'edit'])->name('eleves.edit');

 Route::put('/eleves/{id}', [EleveController::class, 'update'])->name('eleves.update');

Route::get('/professeurs/{id}/edit', [ProfController::class, 'edit'])->name('professeurs.edit');

Route::put('/professeurs/{id}', [ProfController::class, 'update'])->name('professeurs.update');

Route::post('/matieres/store', [MatiereController::class, 'store'])->name('matieres.store');
Route::get('/matiére', [MatiereController::class, 'index'])->name('matieres.index');
Route::delete('/matiere/{id}', [MatiereController::class, 'destroy'])->name('matieres.destroy');

Route::post('/classes/store', [ClasseController::class, 'store'])->name('classes.store');

Route::get('/class', [ClasseController::class, 'index'])->name('classes.index');
Route::delete('/classes/{id}', [ClasseController::class, 'destroy'])->name('classes.destroy');

Route::get('/associer_matiére', [MatiereClass::class, 'createAssociation'])->name('association.create');
Route::post('/associer_matiére', [MatiereClass::class, 'storeAssociation'])->name('association.store');
Route::get('/associer_matiére_liste', [MatiereClass::class, 'indexAssociation'])->name('association.index');

Route::get('/affecter_prof_class',function(){
 return view('vues_admin.affecter_prof_class');
});

Route::get('/affecter_éleve_class',[AffectationController::class, 'index']);

Route::post('/affectation-eleves/store', [AffectationController::class, 'storeAffectation'])->name('affectation.store');

Route::get('/note_classement',function(){
 return view('vues_admin.note_classement');
});

Route::get('/emplois_temps',function(){
 return view('vues_admin.emplois_temps');
});

Route::get('/home_éleve',function(){
    return view('vues_éleve.home');
})->name('eleve.dashboard');

Route::get('/notes_éleve',function(){
    return view('vues_éleve.note_m');
});

Route::get('/message_éleve',function(){
    return view('vues_éleve.message');
});

Route::get('/profile_éleve',function(){
    return view('vues_éleve.profile');
});

Route::get('/langue',function(){
    return view('vues_éleve.langue');
});

Route::get('/emploi',function(){
    return view('vues_éleve.emploi');
});



Route::get('/dashbord_prof',function(){
    return view('vues_prof.home');
})->name('prof.dashboard');


Route::put('/class/{classe}', [ClasseController::class, 'update'])->name('classes.update');
Route::delete('/class/{id}', [ClasseController::class, 'destroy'])->name('classes.destroy');

Route::put('/matiére/{id}', [MatiereController::class, 'update'])->name('matieres.update');
Route::delete('/matiére/{id}', [MatiereController::class, 'destroy'])->name('matieres.destroy');
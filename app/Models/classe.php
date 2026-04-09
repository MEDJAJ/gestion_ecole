<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class classe extends Model
{
   use SoftDeletes;

   protected $fillable = ['nom_classe','niveau','annee_scolaire','capacite'];

   public function matieres()
{

    return $this->belongsToMany(matiere::class, 'classe_matieres');
}



public function eleves()
{
    
    return $this->hasMany(User::class);
}
}

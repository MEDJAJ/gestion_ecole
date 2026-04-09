<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class matiere extends Model
{
    use SoftDeletes;
    protected $fillable = ['nom_matiere','code_matiere','coefficient','description','niveau'];


    public function classes()
{
    return $this->belongsToMany(classe::class, 'classe_matieres');
}
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class note extends Model
{
    protected $fillable = ['valeur_note','type_evaluation','commentaire','user_id','matiere_id'];
}

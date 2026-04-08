<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class professeur_matiere extends Model
{
   protected $fillable = ['user_id','matiere_id'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class matiere extends Model
{
    protected $fillable = ['nom_matiere','code_matiere','coefficient','description','niveau'];
}

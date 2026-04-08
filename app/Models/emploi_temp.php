<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class emploi_temp extends Model
{
    protected $fillable = ['titre','fichier_path','professeur_id','classe_id'];
}

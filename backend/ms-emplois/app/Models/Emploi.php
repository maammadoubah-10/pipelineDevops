<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emploi extends Model
{
    use HasFactory;
    protected $fillable = ['jour', 'heure_debut', 'heure_fin', 'salle', 'professeur_id', 'cours_id'];
}

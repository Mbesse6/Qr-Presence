<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employe extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'prenom','matricule', 'adresse','departement', 'telephone','sexe','profil','login','password','statut'];

    public function Employe(): BelongsTo
    {
        return $this->belongsTo(Employe::class);
    }
}

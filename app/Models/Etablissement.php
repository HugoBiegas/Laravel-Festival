<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{
    use HasFactory;
    public $timestamps = FALSE;

    protected $fillable = [
        'nom',
        'adresseRue',
        'codePostal',
        'ville',
        'telephone',
        'adresseElectronique',
        'type',
        'civiliteResponsable',
        'nomResponsable',
        'prenomResponsable',
        'nombreChambresOffertes',
    ];
    
    public function equipes()
    {
        return $this->belongsToMany(Equipe::class);
    }
}

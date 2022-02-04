<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;
    public $timestamps = FALSE;

    protected $fillable = [
        'nom',
        'identiteResponsable',
        'adressePostale',
        'nombrePersonnes',
        'nomPays',
        'stand',
    ];

    public function etablissements()
    {
        return $this->belongsToMany(Etablissement::class);
    }
}

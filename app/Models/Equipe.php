<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;
    public $timestamps = FALSE;

    public function etablissements()
    {
        return $this->belongsToMany(Etablissement::class);
    }
}

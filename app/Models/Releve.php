<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Releve extends Model
{
    use HasFactory;

    protected $fillable = ['compteur_id', 'date', 'valeur'];

    public function compteur()
    {
        return $this->belongsTo(Compteur::class);
    }
}

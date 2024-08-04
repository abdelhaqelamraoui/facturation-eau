<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'prenom', 'cin', 'adresse', 'telephone'];

    public function compteur()
    {
        return $this->hasOne(Compteur::class);
    }

    public function factures()
    {
        return $this->hasMany(Facture::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compteur extends Model
{
    use HasFactory;

    protected $fillable = ['client_id', 'numero'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function releves()
    {
        return $this->hasMany(Releve::class);
    }

    public function factures()
    {
        return $this->hasMany(Facture::class);
    }
}

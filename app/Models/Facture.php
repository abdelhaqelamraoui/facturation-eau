<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;

    protected $fillable = ['client_id', 'compteur_id', 'date', 'montant', 'volume', 'statut'];

  // Facture.php

public function client()
{
    return $this->belongsTo(Client::class);
}


public function compteur()
{
    return $this->belongsTo(Compteur::class, 'compteur_id');
}


}

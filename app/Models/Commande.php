<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero', 
        'nombreColis', 
        'poids', 
        'lieuDepart', 
        'lieuDestination', 
        'Description', 
        'uploadPhoto', 
        'client_id', 
        'livreur_id'
    ];
}

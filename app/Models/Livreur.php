<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livreur extends Model
{
    use HasFactory;

    protected $fillable = ['disponibilite', 'personne_id'];

    /**
     * Get all of the comments for the pays.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */

    public function commandes()
    {
        return $this->hasMany(Commande::class);
    }

    public function personne()
    {
        return $this->belongsTo(Personne::class);
    }

  
    // public function commandes()
    // {
    //     return $this->OneToMany(Commande::class, 'livreur_id');
    // }
    
}

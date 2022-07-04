<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['personne_id'];

    /**
     * Get all of the comments for the pays.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    
    public function commandes()
    {
        return  $this->hasMany(Commande::class);
    }



    public function personne()
    {
        return $this->belongsTo(Personne::class);
    }

    
    // /**
    //  * Get all of the comments for the pays.
    //  * 
    //  * @return \Illuminate\Database\Eloquent\Relations\OneToMany
    // */

    // // public function commandes()
    // // {
    // //     return $this->OneToMany(Commande::class, 'client_id');
    // // }
}

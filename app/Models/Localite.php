<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localite extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'commune_id'];

    /**
     * Get the user that owns the Quartier
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */

    public function commune()
    {
        return $this->belongsTo(Commune::class);
    }
}

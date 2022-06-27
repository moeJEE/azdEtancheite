<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieProduit extends Model
{
    use HasFactory;

    public function produit()
    {
        return $this->hasMany(Produit::class, "categorie_produit_id", "id");
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produit extends Model
{
    use HasFactory;

    public function categorieProduit()
    {
        return $this->BelongsTo(CategorieProduit::class, 'categorie_produit_id', 'id');
    }

    public function fournisseur()
    {
        return $this->BelongsTo(Fournisseur::class, 'fournisseur_id');
    }
}

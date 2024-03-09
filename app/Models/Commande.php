<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $fillable = ['client_id', 'date_commande', 'montant_total'];

    public function client()
    {
        return $this->belongsTo(Client::class,"client_id");
    }

    public function produits()
    {
        return $this->belongsToMany(Product::class, 'commande_product','commande_id','produit_id')->withPivot('quantite');
    }


}

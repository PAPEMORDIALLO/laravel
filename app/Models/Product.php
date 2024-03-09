<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'description', 'prix', 'quantite_stock', 'image', 'categorie_id'];

    public function category()
    {
        return $this->belongsTo(Categories::class,"categorie_id");
    }
    public function commande()
    {
        return $this->belongsToMany(Commande::class,"commande_product",'produit_id','commande_id')->withPivot('quantite');
    }
}

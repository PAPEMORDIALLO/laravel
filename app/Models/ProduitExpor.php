<?php
namespace App\Models;


use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProduitExpor implements FromCollection,WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function headings():array{
        return[
            'Id',
            'Nom',
            'Description',
            'Prix',
            'Quantite',
            'Categorie_id',

        ];
    }
    public function collection()
    {
        return Product::all();
    }
}

<?php

namespace App\Exports;

use App\Product;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Product::select(
            'name',
            'category_id',
            'supplier_id',
            'code',
            'garage',
            'route',
            'image',
            'buying_date',
            'expire_date',
            'buying_price',
            'selling_price')->get();
    }




}

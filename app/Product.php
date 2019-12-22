<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $dates = [
        'buying_date', 'expire_date',
    ];
    protected $fillable = [
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
        'selling_price'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}

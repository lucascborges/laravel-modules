<?php

namespace Ryok\Product\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'sku',
        'description',
        'quantity',
        'price'
    ];
}

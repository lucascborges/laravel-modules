<?php

namespace Ryok\Client\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
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

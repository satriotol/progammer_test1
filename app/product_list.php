<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_list extends Model
{
    protected $fillable = [
        'product', 'price', 'status'
    ];
}

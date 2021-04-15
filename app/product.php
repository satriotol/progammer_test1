<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function product_list()
    {
        return $this->hasMany(product_list::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    public function product_list()
    {
        return $this->hasMany(product_list::class);
    }
}

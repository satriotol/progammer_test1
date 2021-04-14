<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    public function products()
    {
        return $this->hasMany(product::class);
    }
}

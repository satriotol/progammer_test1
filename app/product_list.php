<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_list extends Model
{
    protected $fillable = [
        'product_id', 'price', 'status_id'
    ];
    public function product()
    {
        return $this->belongsTo(product::class);
    }
    public function status()
    {
        return $this->belongsTo(status::class);
    }
}

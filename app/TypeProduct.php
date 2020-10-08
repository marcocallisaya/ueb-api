<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypeProduct extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $dates = ['deleted_at']; 

    public function product()
    {
        return $this->hasMany(Product::class);
    }

}

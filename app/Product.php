<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $dates = ['deleted_at']; 

    public function Type()
    {
        return $this->belongsTo(TypeProduct::class);
    }

    public function Image()
        {
            return $this->hasOne(Image::class);
        }
    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['brandName'];

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}

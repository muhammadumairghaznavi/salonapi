<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable =[

        "title", "image", "is_active"
    ];

    public function product()
    {
    	return $this->hasMany('App/Product');

    }
    public function material()
    {
    	return $this->hasMany('App/Material');

    }
}

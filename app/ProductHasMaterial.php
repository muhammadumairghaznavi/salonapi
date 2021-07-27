<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductHasMaterial extends Model
{
    public $table = 'product_has_materials';

    protected $fillable = [
        'product_id',
        'material_id',
    ];


    public function products(){
        return $this->belongsToMany('App\Product');
    }

    public function materials(){
        return $this->belongsToMany('App\Material');
    }
}

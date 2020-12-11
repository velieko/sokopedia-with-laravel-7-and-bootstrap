<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    protected $primaryKey = 'category_id';
    protected $fillable = ['name'];

    public function product(){
        return $this->hasMany('App\Product', 'product_id');
    }
}

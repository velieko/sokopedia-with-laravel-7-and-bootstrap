<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $primaryKey = 'product_id';

    protected $fillable = ['name', 'category_id', 'description', 'price', 'image'];
    public function category(){
        return $this->belongsTo('App\Category', 'product_id');
    }
    public function cart(){
        return $this->hasMany('App\Cart', 'product_id');
    }

    public function history(){
        return $this->hasMany('App\History');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['name', 'category_id', 'description', 'price', 'image'];
    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function cart(){
        return $this->belongsTo('App\Cart');
    }
}

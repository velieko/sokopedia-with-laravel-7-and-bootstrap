<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    protected $fillable = ['product_id', 'quantity'];
    public function product(){
        return $this->belongsTo('App\Product', 'product_id');
    }    
    public function transaction(){
        return $this->belongsTo('App\Transaction', 'product_id');
    }
}

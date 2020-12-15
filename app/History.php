<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    //
    protected $fillable = ['product_id', 'quantity'];

    protected $primaryKey = 'history_id';
        public function transaction(){
        return $this->belongsTo('App\Transaction');
    }
    public function product(){
        return $this->belongsTo('App\Product', 'product_id');
    }
}

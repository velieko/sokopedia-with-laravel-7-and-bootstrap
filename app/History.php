<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    //
    protected $fillable = ['product_id', 'quantity', 'transaction_id'];

    protected $primaryKey = 'history_id';
        public function transaction(){
        return $this->belongsTo('App\Transaction');
    }
    public function product(){
        return $this->hasMany('App\Product', 'product_id');
    }
}

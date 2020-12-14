<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $primaryKey = 'transaction_id';
    public $incrementing = false;
    //

    public function history(){
        return $this->hasMany('App\History','transaction_id');
    }
    public function cart(){
        return $this->hasMany('App\Cart');
    }
}

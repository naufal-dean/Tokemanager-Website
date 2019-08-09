<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    public function item(){
        return $this->belongsTo('App\Item');
    }
    public function invoice(){
        return $this->belongsTo('App\Invoice');
    }
    public function finance(){
        return $this->belongsTo('App\Finance');
    }
}

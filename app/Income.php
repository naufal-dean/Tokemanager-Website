<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    //
    // protected $primaryKey = ['id', 'item_id'];
    public function item(){
        return $this->belongsTo('App\Item');
    }
}

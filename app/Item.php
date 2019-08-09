<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function incomes(){
        return $this->hasMany('App\Income');
    }
    public function outcomes(){
        return $this->hasMany('App\Outcome');
    }
}

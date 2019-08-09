<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function incomes(){
        return $this->hasMany('App\Income');
    }
}

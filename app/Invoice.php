<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public function incomes(){
        return $this->hasMany('App\Income');
    }
}

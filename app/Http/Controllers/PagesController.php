<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function penjualan(){
        return view('pages.penjualan');
    }
}

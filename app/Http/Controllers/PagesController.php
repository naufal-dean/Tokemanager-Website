<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function penjualan(){
        return view('pages.penjualan');
    }
    public function statistikKeuangan(){
        return view('pages.statistikKeuangan');
    }
    public function timelineKeuangan(){
      return view('pages.timelineKeuangan');
    }
    public function statistikBarang(){
        return view('pages.statistikBarang');
    }
    public function databaseBarang(){
        return view('pages.databaseBarang');
    }
    public function aboutTokema(){
        return view('pages.aboutTokema');
    }
}

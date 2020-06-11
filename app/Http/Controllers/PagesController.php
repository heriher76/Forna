<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pravodev\KawalCorona\KawalCorona;

class PagesController extends Controller
{
    public function index()
    {
      $corona = new KawalCorona;

      $indonesia = $corona->getIndonesia();
      $jawaBarat = $corona->getProvinces()[2]->attributes;
      $globalPositif = $corona->getPositif();
      $globalSembuh = $corona->getSembuh();
      $globalMati = $corona->getMeninggal();

      return view('index', compact('indonesia', 'jawaBarat', 'globalPositif', 'globalSembuh', 'globalMati'));
    }

    public function news()
    {
      return view('news');
    }

    public function contact()
    {
      return view('contact');
    }
}

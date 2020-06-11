<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pravodev\KawalCorona\KawalCorona;
use App\News;
use App\Contact;
use App\Fact;

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

      $allNews = News::orderBy('created_at', 'desc')->get();
      $allFacts = Fact::orderBy('created_at', 'desc')->get();

      return view('index', compact('indonesia', 'jawaBarat', 'globalPositif', 'globalSembuh', 'globalMati', 'allNews', 'allFacts'));
    }

    public function news()
    {
      $allNews = News::orderBy('created_at', 'desc')->get();

      return view('news', compact('allNews'));
    }

    public function contact()
    {
      return view('contact');
    }
}

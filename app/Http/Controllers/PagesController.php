<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pravodev\KawalCorona\KawalCorona;
use App\News;
use App\Contact;
use App\Fact;
use App\Comment;

class PagesController extends Controller
{
    public function index()
    {
      set_time_limit(0);
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

    public function showNews($slug)
    {
      $news = News::where('slug', $slug)->first();

      return view('show-news', compact('news'));
    }

    public function sendComment(Request $request, $id)
    {
      $input = $request->all();

      Comment::create([
        'content' => $input['content'],
        'user_id' => \Auth::user()->id,
        'news_id' => $id
      ]);

      return back();
    }

    public function contact()
    {
      return view('contact');
    }

    public function myProfile()
    {
      $user = \Auth::user();

      return view('my-profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
      $user = \Auth::user();

      $input = $request->all();

      if (isset($input['photo'])) {
          $namaThumbnail = \Str::random(32).'.'.$input['photo']->getClientOriginalExtension();

          if (isset($user->photo)) {
              unlink(public_path('profile-photo/'.$user->photo));
          }
          $input['photo']->move(public_path("profile-photo/"), $namaThumbnail);

          $user->update([
            'name' => $input['name'],
            'email' => $input['email'],
            'address' => $input['address'],
            'photo' => $namaThumbnail
          ]);
      }else{
          $user->update([
            'name' => $input['name'],
            'email' => $input['email'],
            'address' => $input['address']
          ]);
      }

      alert()->success('Profil Berhasil Diubah !', '...');

      return back();
    }
}

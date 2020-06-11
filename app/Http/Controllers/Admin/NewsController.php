<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\News;
use Auth;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsNews = News::orderBy('created_at', 'desc')->get();

        return view('admin.news.index', compact('newsNews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        ($input['slug']) ? $slug = $input['slug'] : $slug = Str::slug($input['title'], '-');
        (isset($input['thumbnail'])) ? $namaThumbnail = Str::random(32).'.'.$input['thumbnail']->getClientOriginalExtension() : $namaThumbnail = null;

        News::create([
            'title' => $input['title'],
            'description' => $input['description'],
            'slug' => $slug,
            'thumbnail' => $namaThumbnail,
            'user_id' => Auth::user()->id
        ]);

        (isset($input['thumbnail'])) ? $input['thumbnail']->move(public_path('news-thumbnail'), $namaThumbnail) : null ;

        alert()->success('Berita Berhasil Dibuat !', '...');

        return redirect()->action(
            'Admin\NewsController@index'
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $berita = News::where('slug', $slug)->first();

        return view('admin.news.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $input = $request->all();

        $News = News::where('slug', $slug)->first();

        ($input['slug']) ? $slug = $input['slug'] : $slug = Str::slug($input['title'], '-');
        if (isset($input['thumbnail'])) {
            $namaThumbnail = Str::random(32).'.'.$input['thumbnail']->getClientOriginalExtension();

            if (isset($News->thumbnail)) {
                unlink(public_path('news-thumbnail/'.$News->thumbnail));
            }
            $input['thumbnail']->move(public_path("news-thumbnail/"), $namaThumbnail);

            $News->update([
                'title' => $input['title'],
                'description' => $input['description'],
                'thumbnail' => $namaThumbnail,
                'slug' => $input['slug']
            ]);
        }else{
            $News->update([
                'title' => $input['title'],
                'description' => $input['description'],
                'slug' => $input['slug']
            ]);
        }

        alert()->success('Berita Berhasil DiPerbarui !', '...');

        return redirect()->action(
            'Admin\NewsController@index'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $News = News::where('id', $id)->first();

        if (isset($News->thumbnail)) {
            unlink(public_path('news-thumbnail/'.$News->thumbnail));
        }

        $News->destroy($id);

        alert()->success('Berita Berhasil Dihapus !', '...');

        return redirect()->action(
            'Admin\NewsController@index'
        );
    }
}

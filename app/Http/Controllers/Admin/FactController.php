<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Fact;

class FactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facts = Fact::orderBy('created_at', 'desc')->get();

        return view('admin.facts.index', compact('facts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.facts.create');
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

        Fact::create([
            'title' => $input['title'],
            'description' => $input['description']
        ]);

        alert()->success('Fakta Berhasil Dibuat !', '...');

        return redirect()->action(
            'Admin\FactController@index'
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fact = Fact::where('id', $id)->first();

        return view('admin.facts.edit', compact('fact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();

        $fact = Fact::where('id', $id)->first();

        $fact->update([
          'title' => $input['title'],
          'description' => $input['description']
        ]);

        alert()->success('Fakta Berhasil DiPerbarui !', '...');

        return redirect()->action(
            'Admin\FactController@index'
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
        $fact = Fact::where('id', $id)->first();

        $fact->destroy($id);

        alert()->success('Fakta Berhasil Dihapus !', '...');

        return redirect()->action(
            'Admin\FactController@index'
        );
    }
}

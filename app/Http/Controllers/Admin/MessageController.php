<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::orderBy('created_at', 'desc')->get();

        return view('admin.messages.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        Message::create([
            'name' => $input['name'],
            'message' => $input['message'],
            'email' => $input['email']
        ]);

        alert()->success('Fakta Berhasil Dibuat !', '...');

        return 'Terimakasih! Masukan anda sudah terkirim';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fact = Message::where('id', $id)->first();

        return view('admin.messages.show', compact('fact'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fact = Message::where('id', $id)->first();

        $fact->destroy($id);

        alert()->success('Masukan Berhasil Dihapus !', '...');

        return redirect()->action(
            'Admin\MessageController@index'
        );
    }
}

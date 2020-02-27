<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MPenelitianCoffee;
class CoffeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penelitian = MPenelitianCoffee::all();
        return view('penelitian.coffee',['penelitian'=>$penelitian]);
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
        MPenelitianCoffee::create($request->all());
        return redirect('/penelitian/coffee')->with('status','Data Berhasil Ditambahkan  ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(MPenelitianCoffee $penelitian)
    {
        return view('penelitian.editcoffee',['penelitian'=>$penelitian]);
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
        
        MPenelitianCoffee::where('id',$id)
                ->update([
                    'tanggal' => $request->tanggal,
                    'keterangan' => $request->keterangan
                ]);
        return redirect('/penelitian/coffee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MPenelitianCoffee::destroy($id);

        return redirect('/penelitian/coffee')->with('status','Data Berhasil Dihapus  ');
    }
}

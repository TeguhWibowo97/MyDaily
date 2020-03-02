<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MPenelitianAlga;

class AlgaController extends Controller
{

    public function index()
    {
        $data = auth()->user()->name;
        $tampil = 'Admin';

        if($data != $tampil){
            $penelitian = MPenelitianAlga::where('user',$data)->get();
            return view('penelitian.alga',['penelitian'=>$penelitian]);
        }else{
            $penelitian = MPenelitianAlga::all();
            return view('penelitian.alga',['penelitian'=>$penelitian]);
        }
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
        $user = MPenelitianAlga::create([
            'user' => auth()->user()->name,
            'tanggal' => $request->tanggal,
            'keterangan' => $request->keterangan,
        ]);
        $user -> save();
        return redirect('/penelitian/alga')->with('status','Data Berhasil Ditambahkan');
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
    public function edit(MPenelitianAlga $penelitian)
    {
        return view('penelitian.editalga',['penelitian'=>$penelitian]);
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
        MPenelitianAlga::where('id',$id)
                ->update([
                    
                    'tanggal' => $request->tanggal,
                    'keterangan' => $request->keterangan
                ]);
        return redirect('/penelitian/alga');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MPenelitianAlga::destroy($id);

        return redirect('/penelitian/alga')->with('status','Data Berhasil Dihapus  ');
    }
}

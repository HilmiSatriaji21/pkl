<?php

namespace App\Http\Controllers;

use App\Models\kasus;
use App\Models\negara;
use App\Http\Controllers\DB; ###
use Illuminate\Http\Request;

class KasusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $kasus= Kasus::with('negara')->get();
        return view('kasus.index', compact('kasus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $negara = Negara::all();
        return view('kasus.create', compact('negara'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kasus= new Kasus();
        $kasus->jumlah_positif = $request->jumlah_positif;
        $kasus->id_negara = $request->id_negara;
        $kasus->jumlah_meninggal = $request->jumlah_meninggal;
        $kasus->jumlah_sembuh = $request->jumlah_sembuh;
        $kasus->tanggal = $request->tanggal;
        $kasus->save();
        return redirect()->route('kasus.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kasus = Kasus::findOrFail($id);
        return view('kasus.show',compact('kasus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kasus $kasus
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $negara = Negara::all();
        $kasus = Kasus::findOrFail($id);
        return view('kasus.edit',compact('kasus','negara'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kasus= new Kasus();
        $kasus->jumlah_positif = $request->jumlah_positif;
        $kasus->id_negara = $request->id_negara;
        $kasus->jumlah_meninggal = $request->jumlah_meninggal;
        $kasus->jumlah_sembuh = $request->jumlah_sembuh;
        $kasus->tanggal = $request->tanggal;
        $kasus->save();
        return redirect()->route('kasus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kasus $kasus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kasus = Kasus::findOrFail($id)->delete();
        return redirect()->route('kasus.index');
    }
}

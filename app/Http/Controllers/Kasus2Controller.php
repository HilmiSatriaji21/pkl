<?php

namespace App\Http\Controllers;

use App\Models\kasus2;
use App\Models\rw;
use App\Http\Controllers\DB; ###
use Illuminate\Http\Request;

class Kasus2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $laporan= Kasus2::with('rw')->get();
        return view('kasus2.index', compact('laporan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rw = Rw::all();
        return view('kasus2.create', compact('rw'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $laporan= new Kasus2();
        $laporan->positif = $request->positif;
        $laporan->id_rw = $request->id_rw;
        $laporan->meninggal = $request->meninggal;
        $laporan->sembuh = $request->sembuh;
        $laporan->tanggal = $request->tanggal;
        $laporan->save();
        return redirect()->route('kasus2.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kasus2  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $laporan = Kasus2::findOrFail($id);
        return view('kasus2.show',compact('laporan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kasus2 $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rw = Rw::all();
        $laporan = Kasus2::findOrFail($id);
        return view('kasus2.edit',compact('laporan','rw'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kasus2  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $laporan= new Kasus2();
        $laporan->positif = $request->positif;
        $laporan->id_rw = $request->id_rw;
        $laporan->meninggal = $request->meninggal;
        $laporan->sembuh = $request->sembuh;
        $laporan->tanggal = $request->tanggal;
        $laporan->save();
        return redirect()->route('kasus2.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kasus2 $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $laporan = Kasus2::findOrFail($id)->delete();
        return redirect()->route('kasus2.index');
    }
}

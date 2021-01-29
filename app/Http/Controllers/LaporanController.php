<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Rw;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $laporan = Laporan::with('rw.kelurahan.kecamatan.kota.provinsi')->get();
        return view('laporan.index',compact('laporan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rw = Rw::all();
        return view('laporan.create',compact('rw'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $laporan = new Laporan;
        $laporan->id_rw = $request->id_rw;
        $laporan->positif = $request->positif;
        $laporan->sembuh = $request->sembuh;
        $laporan->meninggal = $request->meninggal;
        $laporan->tanggal = $request->tanggal;
        $laporan->save();
        return redirect()->route('laporan.index')
        ->with(['message'=>'Data Berhasil Dibuat']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $laporan = Laporan::findOrFail($id);
        return view('laporan.show',compact('laporan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $laporan = Laporan::findOrFail($id);
        return view('laporan.edit',compact('laporan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $laporan = Laporan::findOrFail($id);
        $laporan->id_rw = $request->id_rw;
        $laporan->positif = $request->positif;
        $laporan->sembuh = $request->sembuh;
        $laporan->meninggal = $request->meninggal;
        $laporan->tanggal = $request->tanggal;
        $laporan->save();
        return redirect()->route('laporan.index')
        ->with(['message'=>'Data Berhasil Diedit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $laporan = Laporan::findOrFail($id)->delete();
        return redirect()->route('laporan.index')
                        ->with(['message1'=>'Data Berhasil Dihapus']);
    }
}
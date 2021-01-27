<?php

namespace App\Http\Controllers;

use App\Models\kecamatan;
use App\Models\kota;
use App\Http\Controllers\DB; ###
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $kecamatan = Kecamatan::join('kotas','id_kota','=','kotas.id')->select('kecamatans.*','kotas.nama_kota')->get();
        return view('kecamatan.index',compact('kecamatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kota = Kota::all();
        return view('kecamatan.create', compact('kota'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kecamatan= new Kecamatan();
        $messages = [
            'required' => ':attribute wajib diisi ya bro mba sis!!!',
            'min' => ':attribute harus diisi minimal :min karakter ya bro mba sis!!!',
            'max' => ':attribute harus diisi maksimal :max karakter ya bro mba sis!!!',
            'alpha' => ':attribute harus diisi dengan huruf ya bro mba sis!!!',
            'numeric' => ':attribute harus diisi dengan angka ya bro mba sis!!!',
            'unique' => ':attribute tidak boleh sama ya bro mba sis!!!',
        ];

        $this->validate($request,[
            'kode_kecamatan' => 'required|numeric|unique:kecamatans|max:3',
            'nama_kecamatan' => 'required|alpha|unique:kecamatans|max:30',
            'id_kota' => 'required|numeric',
        ],$messages);


        $kecamatan->kode_kecamatan = $request->kode_kecamatan;
        $kecamatan->nama_kecamatan = $request->nama_kecamatan;
        $kecamatan->id_kota = $request->id_kota; 
        $kecamatan->save();
        return redirect()->route('kecamatan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kecamatan = Kecamatan::join('kotas','id_kota','=','kotas.id')->select('kecamatans.*','kotas.nama_kota')->where('kecamatans.id', $id)->get();
        return view('kecamatan.show',compact('kecamatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kota = Kota::all();
        $kecamatan = Kecamatan::findOrFail($id);
        return view('kecamatan.edit',compact('kecamatan','kota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kecamatan = Kecamatan::findOrFail($id);
        $messages = [
            'required' => ':attribute wajib diisi ya bro mba sis!!!',
            'min' => ':attribute harus diisi minimal :min karakter ya bro mba sis!!!',
            'max' => ':attribute harus diisi maksimal :max karakter ya bro mba sis!!!',
            'alpha' => ':attribute harus diisi dengan huruf ya bro mba sis!!!',
            'numeric' => ':attribute harus diisi dengan angka ya bro mba sis!!!',
            'unique' => ':attribute tidak boleh sama ya bro mba sis!!!',
        ];

        $this->validate($request,[
            'kode_kecamatan' => 'required|numeric|unique:kecamatans|max:3',
            'nama_kecamatan' => 'required|alpha|unique:kecamatans|max:30',
            'id_kota' => 'required|numeric',
        ],$messages);
        
        $kecamatan->kode_kecamatan = $request->kode_kecamatan;
        $kecamatan->nama_kecamatan = $request->nama_kecamatan;
        $kecamatan->id_kota = $request->id_kota;
        $kecamatan->save();
        return redirect()->route('kecamatan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kecamatan = Kecamatan::findOrFail($id)->delete();
        return redirect()->route('kecamatan.index');
    }
}
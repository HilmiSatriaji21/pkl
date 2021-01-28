<?php

namespace App\Http\Controllers;

use App\Models\provinsi;
use App\Models\kota;
use App\Http\Controllers\DB; ###
use Illuminate\Http\Request;

class KotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $kota = Kota::join('provinsis','id_provinsi','=','provinsis.id')->select('kotas.*','provinsis.nama_provinsi')->get();
        return view('kota.index', compact('kota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinsi = Provinsi::all();
        return view('kota.create', compact('provinsi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kota= new Kota();
        $messages = [
            'required' => ':attribute wajib diisi ya bro mba sis!!!',
            'min' => ':attribute harus diisi minimal :min karakter ya bro mba sis!!!',
            'max' => ':attribute harus diisi maksimal :max karakter ya bro mba sis!!!',
            'alpha' => ':attribute harus diisi dengan huruf ya bro mba sis!!!',
            'numeric' => ':attribute harus diisi dengan angka ya bro mba sis!!!',
            'unique' => ':attribute tidak boleh sama ya bro mba sis!!!',
        ];

        $this->validate($request,[
            'kode_kota' => 'required|numeric|unique:kotas|max:3',
            'nama_kota' => 'required|regex:/^[a-z A-Z]+$/u|unique:kotas|max:30',
            'id_provinsi' => 'required|numeric',
        ],$messages);

        $kota->kode_kota = $request->kode_kota;
        $kota->nama_kota = $request->nama_kota;
        $kota->id_provinsi = $request->id_provinsi; 
        $kota->save();
        return redirect()->route('kota.index')
        ->with(['message'=>'Data Kota Berhasil Di Tambah']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kota = Kota::join('provinsis','id_provinsi','=','provinsis.id')->select('kotas.*','provinsis.nama_provinsi')->where('kotas.id', $id)->get();
        return view('kota.show',compact('kota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $provinsi = Provinsi::all();
        $kota = Kota::findOrFail($id);
        return view('kota.edit',compact('kota','provinsi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $messages = [
            'required' => ':attribute wajib diisi ya bro mba sis!!!',
            'min' => ':attribute harus diisi minimal :min karakter ya bro mba sis!!!',
            'max' => ':attribute harus diisi maksimal :max karakter ya bro mba sis!!!',
            'alpha' => ':attribute harus diisi dengan huruf ya bro mba sis!!!',
            'numeric' => ':attribute harus diisi dengan angka ya bro mba sis!!!',
            'unique' => ':attribute tidak boleh sama ya bro mba sis!!!',
        ];

        $this->validate($request,[
            'kode_kota' => 'required|numeric|unique:kotas|max:3',
            'nama_kota' => 'required|regex:/^[a-z A-Z]+$/u|unique:kotas|max:30',
            'id_provinsi' => 'required|numeric',
        ],$messages);
        
        $kota = Kota::findOrFail($id);
        $kota->kode_kota = $request->kode_kota;
        $kota->nama_kota = $request->nama_kota;
        $kota->id_provinsi = $request->id_provinsi;
        $kota->save();
        return redirect()->route('kota.index')
        ->with(['message'=>'Data Kota Berhasil Di Edit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kota = Kota::findOrFail($id)->delete();
        return redirect()->route('kota.index')
        ->with(['message'=>'Data Kota Berhasil Di Hapus']);
    }
}
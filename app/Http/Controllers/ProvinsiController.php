<?php

namespace App\Http\Controllers;

use App\Models\provinsi;
use App\Http\Controllers\DB; 
use Illuminate\Http\Request;


class ProvinsiController extends Controller
{

    public function index()
    {
        $provinsi = Provinsi::all();
        return view('provinsi.index', compact('provinsi'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('provinsi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $messages = [
            'required' => ':attribute wajib diisi ya bro mba sis!!!',
            'min' => ':attribute harus diisi minimal :min karakter ya bro mba sis!!!',
            'max' => ':attribute harus diisi maksimal :max karakter ya bro mba sis!!!',
            'alpha_num' => ':attribute tidak boleh sama ya bro mba sis!!!',
            'numeric' => ':attribute harus diisi dengan angka ya bro mba sis!!!',
            'unique' => ':attribute tidak boleh sama ya bro mba sis!!!',
        ];

        $this->validate($request,[
            'kode_provinsi' => 'required|numeric|unique:provinsis|max:4',
            'nama_provinsi' => 'required|alpha_num|unique:provinsis|min:5|max:30',
        ],$messages);

        $provinsi->kode_provinsi = $request->kode_provinsi;
        $provinsi->nama_provinsi = $request->nama_provinsi;
        $provinsi->save();
        return redirect()->route('provinsi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\provinsi  $provinsi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $provinsi = Provinsi::findOrFail($id);
        return view('provinsi.show',compact('provinsi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\provinsi  $provinsi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $provinsi = Provinsi::findOrFail($id);
       return view('provinsi.edit', compact('provinsi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\provinsi  $provinsi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $messages = [
            'required' => ':attribute wajib diisi ya bro mba sis!!!',
            'min' => ':attribute harus diisi minimal :min karakter ya bro mba sis!!!',
            'max' => ':attribute harus diisi maksimal :max karakter ya bro mba sis!!!',
            'alpha_num' => ':attribute tidak boleh sama ya bro mba sis!!!',
            'numeric' => ':attribute harus diisi dengan angka ya bro mba sis!!!',
            'unique' => ':attribute tidak boleh sama ya bro mba sis!!!',
        ];

        $this->validate($request,[
            'kode_provinsi' => 'required|numeric|unique:provinsis|max:4',
            'nama_provinsi' => 'required|alpha_num|unique:provinsis|max:30',
        ],$messages);

        $provinsi = Provinsi::findOrFail($id);
        $provinsi->kode_provinsi = $request->kode_provinsi;
        $provinsi->nama_provinsi = $request->nama_provinsi;
        $provinsi->save();
        return redirect()->route('provinsi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\provinsi  $provinsi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $provinsi = Provinsi::findOrFail($id)->delete();
        return redirect()->route('provinsi.index')
                        ->with(['message1'=>'Berhasil dihapus']);
    }
}
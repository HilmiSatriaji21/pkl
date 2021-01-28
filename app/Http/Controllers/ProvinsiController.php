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

    public function store(Request $request)
    {
        $provinsi = new Provinsi();
        $messages = [
            'required' => ':attribute wajib diisi ya bro mba sis!!!',
            'min' => ':attribute harus diisi minimal :min karakter ya bro mba sis!!!',
            'max' => ':attribute harus diisi maksimal :max karakter ya bro mba sis!!!',
            'alpha' => ':attribute harus diisi huruf ya bro mba sis!!!',
            'numeric' => ':attribute harus diisi dengan angka ya bro mba sis!!!',
            'unique' => ':attribute tidak boleh sama ya bro mba sis!!!',
        ];

        $this->validate($request,[
            'kode_provinsi' => 'required|numeric|unique:provinsis|max:4',
            'nama_provinsi' => 'required|unique:provinsis|regex:/^[a-z A-Z]+$/u|min:5|max:30',
        ],$messages);

        $provinsi->kode_provinsi = $request->kode_provinsi;
        $provinsi->nama_provinsi = $request->nama_provinsi;
        $provinsi->save();
        return redirect()->route('provinsi.index')
                ->with(['message'=>'Data Provinsi Berhasil Di Buat']);
    }

    public function show($id)
    {
        $provinsi = Provinsi::findOrFail($id);
        return view('provinsi.show',compact('provinsi'));
    }

    public function edit($id)
    {
        $provinsi = Provinsi::findOrFail($id);
        return view('provinsi.edit',compact('provinsi'));
    }

    public function update($id,Request $request)
    {
        $provinsi = Provinsi::findOrFail($id);
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
            'nama_provinsi' => 'required|unique:provinsis|regex:/^[a-z A-Z]+$/u|min:5|max:30',
        ],$messages);

        $provinsi->kode_provinsi = $request->kode_provinsi;
        $provinsi->nama_provinsi = $request->nama_provinsi;
        $provinsi->save();
        return redirect()->route('provinsi.index')
                ->with(['message'=>'Data Provinsi Berhasil Di Edit']);
    }

    public function destroy($id)
    {
        $provinsi = Provinsi::findOrFail($id)->delete();
        return redirect()->route('provinsi.index')->with(['message'=>'Data Provinsi Berhasil Di Hapus']);
    }
}
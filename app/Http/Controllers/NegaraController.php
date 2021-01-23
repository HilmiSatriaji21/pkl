<?php

namespace App\Http\Controllers;

use App\Models\negara;
use App\Http\Controllers\DB; ###
use Illuminate\Http\Request;


class NegaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $negara = Negara::all();
        return view('negara.index', compact('negara'));  ###
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('negara.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $negara = new Negara;
        $negara->kode_negara = $request->kode_negara;
        $negara->nama_negara = $request->nama_negara;
        $negara->save();
        return redirect()->route('negara.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\negara  $negara
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $negara = Negara::findOrFail($id);
        return view('negara.show',compact('negara'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\negara  $negara
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $negara = Negara::findOrFail($id);
       return view('negara.edit', compact('negara'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\negara  $negara
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $negara = new Negara;
        $negara->kode_negara = $request->kode_negara;
        $negara->nama_negara = $request->nama_negara;
        $negara->save();
        return redirect()->route('negara.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\provinsi  $provinsi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $negara = Negara::findOrFail($id)->delete();
        return redirect()->route('negara.index')
                        ->with(['message1'=>'Berhasil dihapus']);
    }
}
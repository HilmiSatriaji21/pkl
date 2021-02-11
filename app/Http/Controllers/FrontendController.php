<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FrontendController extends Controller
{
    public function index()
{
    $provinsi = DB::table('provinsis') ->select('provinsis.kode_provinsi','provinsis.nama_provinsi',
        DB::raw('SUM(laporans.positif) as positif'),
        DB::raw('SUM(laporans.sembuh) as sembuh'),
        DB::raw('SUM(laporans.meninggal) as meninggal'))
        ->join('kotas','provinsis.id','=','kotas.id_provinsi')
        ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
        ->join('kelurahans','kecamatans.id','=','kelurahans.id_kecamatan')
        ->join('rws','kelurahans.id','=','rws.id_kelurahan')
        ->join('laporans','rws.id','=','laporans.id_rw')
        ->groupBy('provinsis.id')
        ->get();
           return view('frontend.index',compact('provinsi'));
}
public function Indonesia()
{
              $positif = DB::table('laporans')
              ->sum("laporans.positif");

              $sembuh = DB::table('laporans')
              ->sum("laporans.sembuh");

              $meninggal = DB::table('laporans')
              ->sum("laporans.meninggal");
              return view('frontend.index',compact('pos,sem,men'));  

}
}
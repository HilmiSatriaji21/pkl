<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Rw;
use App\Models\Laporan;

class ApiController extends Controller
{
    public function indonesia()
    {
        $hariini = Carbon::now()->format('d-m-y'); 
    	$data_skrg = DB::table('laporans')
                    ->select(DB::raw('SUM(positif) as Positif'), 
                             DB::raw('SUM(sembuh) as Sembuh'), 
                             DB::raw('SUM(meninggal) as Meninggal'),
                             DB::raw('MAX(tanggal) as Tanggal'))
	    			->whereDay('tanggal', '=' , $hariini)
	    			->get();
        $data = DB::table('laporans')
                    ->select(DB::raw('SUM(positif) as Positif'), 
                             DB::raw('SUM(sembuh) as Sembuh'), 
                             DB::raw('SUM(meninggal) as Meninggal'))
    				->get();
    	$rest = [
    		'success' => true,
    		'data' => [
                'hari_ini' => $data_skrg, 
                'Total' => $data
            ],
    		'message' => 'Data Kasus Seluruh Indonesia Ditampilkan'
    	];
    	return response()->json($rest, 200);
    }
    public function provinsi_index()
    {
        $hariini = Carbon::now()->format('d-m-y'); 
        $data_skrg = DB::table('laporans')
                ->select(DB::raw('provinsis.id'),
                         DB::raw('provinsis.nama_provinsi as Provinsi'),
                         DB::raw('SUM(laporans.positif) as Positif'),
                         DB::raw('SUM(laporans.sembuh) as Sembuh'),
                         DB::raw('SUM(laporans.meninggal) as Meninggal'),
                         DB::raw('MAX(tanggal) as Tanggal'))
                         ->whereDay('tanggal', '=' , $hariini)
                ->join('rws' , 'rws.id', 'laporans.id_rw',)
                ->join('kelurahans' ,'kelurahans.id', '=', 'rws.id_kelurahan')
                ->join('kecamatans' ,'kecamatans.id', '=', 'kelurahans.id_kecamatan')
                ->join('kotas' ,'kotas.id', '=', 'kecamatans.id_kota')
                ->join('provinsis' ,'provinsis.id', '=', 'kotas.id_provinsi')
                ->whereDate('laporans.tanggal', date('Y-m-d'))
                ->groupby('provinsis.id')
                ->get();

        $data = DB::table('laporans')
                ->select(DB::raw('provinsis.nama_provinsi as Provinsi'), 
                         DB::raw('SUM(laporans.positif) as Positif'), 
                         DB::raw('SUM(laporans.meninggal) as Meninggal'),
                         DB::raw('SUM(laporans.sembuh) as Sembuh')) 
                ->join('rws', 'rws.id', '=', 'laporans.id_rw')
                ->join('kelurahans', 'kelurahans.id', '=', 'rws.id_kelurahan')
                ->join('kecamatans', 'kecamatans.id', '=', 'kelurahans.id_kecamatan')
                ->join('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
                ->join('provinsis', 'provinsis.id', '=', 'kotas.id_provinsi')
                ->groupBy('provinsis.nama_provinsi')
            ->get();

        $rest = [
            'status' => 200,
            'data' => [ 
                'Hari Ini' =>[$data_skrg],
                'Total' =>[$data]
            ],
            'message' => 'Data Kasus Provinsi Ditampilkan'
        ];
        return response()->json($rest, 200);
    }
    public function kota_index()
    {
        //Data Kota 
        $data = DB::table('kotas')
        ->join('kecamatans','kecamatans.id_kota', '=', 'kotas.id')
        ->join('kelurahans','kelurahans.id_kecamatan', '=', 'kecamatans.id')
        ->join('rws','rws.id_kelurahan', '=', 'kelurahans.id')
        ->join('laporans','laporans.id_rw', '=', 'rws.id')
        ->select('nama_kota',
        DB::raw('sum(laporans.positif) as positif'),
        DB::raw('sum(laporans.meninggal) as meninggal'),
        DB::raw('sum(laporans.sembuh) as sembuh'))
        ->groupBy('nama_kota')
        ->get();
                $res = [
                    'succsess' => true,
                    'Data' => $data,
                    'message' => 'Data Kasus Di Tampilkan'
                ];
                return response()->json($res,200);
    }
    public function kecamatan_index()
    {
        //Data Kecamatan 
        $data = DB::table('kecamatans')
        ->join('kelurahans','kelurahans.id_kecamatan', '=', 'kecamatans.id')
        ->join('rws','rws.id_kelurahan', '=', 'kelurahans.id')
        ->join('laporans','laporans.id_rw', '=', 'rws.id')
        ->select('nama_kecamatan',
        DB::raw('sum(laporans.positif) as positif'),
        DB::raw('sum(laporans.meninggal) as meninggal'),
        DB::raw('sum(laporans.sembuh) as sembuh'))
        ->groupBy('nama_kecamatan')
        ->get();
                $res = [
                    'succsess' => true,
                    'Data' => $data,
                    'message' => 'Data Kasus Di Tampilkan'
                ];
                return response()->json($res,200);
    }
    public function kelurahan_index()
    {
        //Data Kelurahan
        $data = DB::table('kelurahans')
        ->join('rws','rws.id_kelurahan', '=', 'kelurahans.id')
        ->join('laporans','laporans.id_rw', '=', 'rws.id')
        ->select('nama_kelurahan',
        DB::raw('sum(laporans.positif) as positif'),
        DB::raw('sum(laporans.meninggal) as meninggal'),
        DB::raw('sum(laporans.sembuh) as sembuh'))
        ->groupBy('nama_kelurahan')
        ->get();
                $res = [
                    'succsess' => true,
                    'Data' => $data,
                    'message' => 'Data Kasus Di Tampilkan'
                ];
                return response()->json($res,200);
    }

    public function showprovinsi($id)
    {
        $data_skrg = DB::table('laporans')
                ->select('positif', 'sembuh', 'meninggal')
                ->join('rws' ,'laporans.id_rw', '=', 'rws.id')
                ->join('kelurahans' ,'rws.id_kelurahan', '=', 'kelurahans.id')
                ->join('kecamatans' ,'kelurahans.id_kecamatan', '=', 'kecamatans.id')
                ->join('kotas' ,'kecamatans.id_kota', '=', 'kotas.id')
                ->join('provinsis' ,'kotas.id_provinsi', '=', 'provinsis.id')
                ->where('provinsis.id', $id)
                ->where('laporans.tanggal', date('Y-m-d'))
                ->get();

        $data = DB::table('laporans')
                ->select(DB::raw('provinsis.nama_provinsi as Provinsi'), 
                         DB::raw('SUM(laporans.positif) as positif'), 
                         DB::raw('SUM(laporans.meninggal) as meninggal'),
                         DB::raw('SUM(laporans.sembuh) as sembuh')) 
                ->join('rws', 'rws.id', '=', 'laporans.id_rw')
                ->join('kelurahans', 'kelurahans.id', '=', 'rws.id_kelurahan')
                ->join('kecamatans', 'kecamatans.id', '=', 'kelurahans.id_kecamatan')
                ->join('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
                ->join('provinsis', 'provinsis.id', '=', 'kotas.id_provinsi')
                ->where('provinsis.id', $id)
                ->groupBy('provinsis.nama_provinsi')
            ->get();
            
        $data_skrg = [
            'Positif' =>$data_skrg->sum('positif'),
            'Sembuh' =>$data_skrg->sum('sembuh'),
            'Meninggal' =>$data_skrg->sum('meninggal'),
        ];
        
        $data = [
            'Positif' =>$data->sum('positif'),
            'Sembuh' =>$data->sum('sembuh'),
            'Meninggal' =>$data->sum('meninggal'),
        ];
        
        $rest = [
            'status' => 200,
            'data' => [
                'Hari Ini' => $data_skrg,
                'Total' => $data
            ],
            'message' => 'Data Kasus Provinsi Ditampilkan'
        ];
        
        return response()->json($rest, 200);
    }
}
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Laporan;
use App\Models\Provinsi;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('laporans')
                ->select(DB::raw('provinsis.nama_provinsi as provinsi'),
                         DB::raw('SUM(laporans.positif) as positif'),
                         DB::raw('SUM(laporans.meninggal) as meninggal'),
                         DB::raw('SUM(laporans.sembuh) as sembuh'))
                ->join('rws', 'rws.id', '=', 'laporans.id_rw')
                ->join('kelurahans', 'kelurahans.id', '=', 'rws.id_kelurahan')
                ->join('kecamatans', 'kecamatans.id', '=', 'kelurahans.id_kecamatan')
                ->join('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
                ->join('provinsis', 'provinsis.id', '=', 'kotas.id_provinsi')  
                ->groupBy('provinsis.nama_provinsi')
            ->get();           
        $res = [
            'success'   => true,
            'data'      => $data,
            'message'   => 'Data kasus ditampilkan'
        ];
        return response()->json($res,200);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $provinsi = new Provinsi();
        $provinsi->kode_provinsi = $request->kode_provinsi;
        $provinsi->nama_provinsi = $request->nama_provinsi;
        $provinsi->save();

        $prov = [
            'success' => true,
            'data'    => $provinsi,
            'message' => 'Data berhasil di tambah'
        ];
        return response()->json($prov, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('laporans')
        ->select(DB::raw('provinsis.nama_provinsi as provinsi'),
                 DB::raw('SUM(laporans.positif) as positif'),
                 DB::raw('SUM(laporans.meninggal) as meninggal'),
                 DB::raw('SUM(laporans.sembuh) as sembuh'))
        ->join('rws', 'rws.id', '=', 'laporans.id_rw')
        ->join('kelurahans', 'kelurahans.id', '=', 'rws.id_kelurahan')
        ->join('kecamatans', 'kecamatans.id', '=', 'kelurahans.id_kecamatan')
        ->join('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
        ->join('provinsis', 'provinsis.id', '=', 'kotas.id_provinsi')->where('provinsis.id', $id)
        ->groupBy('provinsis.nama_provinsi')
    ->get();           
$res = [
    'success'   => true,
    'data'      => $data,
    'message'   => 'Data kasus ditampilkan'
];
return response()->json($res,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'kode_provinsi' => 'required',
            'nama_provinsi' => 'required',
        ],[
            'kode_provinsi.required' => "Mohon Masukan Kode Provinsi",
            'nama_provinsi.required' => "Mohon Masukan Nama Provinsi",
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'data' => $validator->errors(),
                'message' => 'silakan isi bidang yang kosong',
            ], 400);
        }else {
            $provinsi = Provinsi::whereId($id)->update([
                'kode_provinsi' => $request->kode_provinsi,
                'nama_provinsi' => $request->nama_provinsi,
            ]);

            if ($provinsi) {
                return response()->json([
                    'success' => true,
                    'message' => 'data berhasil diUpdate!',
                ], 200); 
            }else{
                return response()->json([
                    'success' => false,
                    'message' => 'data gagal diUpdate!',
                ], 500); 
            }
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $provinsi = Provinsi::findOrFail($id);
        $provinsi->delete();

        if ($provinsi) {
            return response()->json([
                'success' => true,
                'message' => 'data berhasil dihapus!',
            ], 200);
        }else {
            return response()->json([
                'success' => false,
                'message' => 'data gagal dihapus',
            ], 500);
        }
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinsis = [
            ['kode_provinsi' => 11, 'nama_provinsi' => "ACEH"],
			['kode_provinsi' => 12, 'nama_provinsi' => "SUMATERA UTARA"],
			['kode_provinsi' => 13, 'nama_provinsi' => "SUMATERA BARAT"],
			['kode_provinsi' => 14, 'nama_provinsi' => "RIAU"],
			['kode_provinsi' => 15, 'nama_provinsi' => "JAMBI"],
			['kode_provinsi' => 16, 'nama_provinsi' => "SUMATERA SELATAN"],
			['kode_provinsi' => 17, 'nama_provinsi' => "BENGKULU"],
			['kode_provinsi' => 18, 'nama_provinsi' => "LAMPUNG"],
			['kode_provinsi' => 19, 'nama_provinsi' => "KEPULAUAN BANGKA BELITUNG"],
			['kode_provinsi' => 21, 'nama_provinsi' => "KEPULAUAN RIAU"],
			['kode_provinsi' => 31, 'nama_provinsi' => "DKI JAKARTA"],
			['kode_provinsi' => 32, 'nama_provinsi' => "JAWA BARAT"],
			['kode_provinsi' => 33, 'nama_provinsi' => "JAWA TENGAH"],
			['kode_provinsi' => 34, 'nama_provinsi' => "DI YOGYAKARTA"],
			['kode_provinsi' => 35, 'nama_provinsi' => "JAWA TIMUR"],
			['kode_provinsi' => 36, 'nama_provinsi' => "BANTEN"],
			['kode_provinsi' => 51, 'nama_provinsi' => "BALI"],
			['kode_provinsi' => 52, 'nama_provinsi' => "NUSA TENGGARA BARAT"],
			['kode_provinsi' => 53, 'nama_provinsi' => "NUSA TENGGARA TIMUR"],
			['kode_provinsi' => 61, 'nama_provinsi' => "KALIMANTAN BARAT"],
			['kode_provinsi' => 62, 'nama_provinsi' => "KALIMANTAN TENGAH"],
			['kode_provinsi' => 63, 'nama_provinsi' => "KALIMANTAN SELATAN"],
			['kode_provinsi' => 64, 'nama_provinsi' => "KALIMANTAN TIMUR"],
			['kode_provinsi' => 65, 'nama_provinsi' => "KALIMANTAN UTARA"],
			['kode_provinsi' => 71, 'nama_provinsi' => "SULAWESI UTARA"],
			['kode_provinsi' => 72, 'nama_provinsi' => "SULAWESI TENGAH"],
			['kode_provinsi' => 73, 'nama_provinsi' => "SULAWESI SELATAN"],
			['kode_provinsi' => 74, 'nama_provinsi' => "SULAWESI TENGGARA"],
			['kode_provinsi' => 75, 'nama_provinsi' => "GORONTALO"],
			['kode_provinsi' => 76, 'nama_provinsi' => "SULAWESI BARAT"],
			['kode_provinsi' => 81, 'nama_provinsi' => "MALUKU"],
			['kode_provinsi' => 82, 'nama_provinsi' => "MALUKU UTARA"],
			['kode_provinsi' => 91, 'nama_provinsi' => "PAPUA BARAT"],
			['kode_provinsi' => 94, 'nama_provinsi' => "PAPUA"]
			
        ];
        DB::table('provinsis')->insert($provinsis);

    }
}
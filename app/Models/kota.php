<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kota extends Model
{
    use HasFactory;

    protected $fillable = ['id_provinsi','kode_kota','nama_kota'];
    protected $table = "kotas";
    public $timestamps = true;

    public function provinsi() {
        return $this->belongsTo(Provinsi::class,'id_provinsi');

    }
    public function kecamatan(){
            return $this->hasMany(Kecamatan::class); 
    }
}
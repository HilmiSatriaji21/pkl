<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;

    protected $fillable = ['id_kecamatan','nama_kelurahan'];
    protected $table = "kelurahans";
    public $timestamps = true;

    public function kecamatan(){
        return $this->belongsTo(Kecamatan::class, 'id_kecamatan');
    }

    public function rw(){
        return $this->hasMany(Rw::class);
    }
}

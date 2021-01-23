<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rw extends Model
{
    use HasFactory;

    protected $fillable = ['id_kelurahan','nama_rw'];
    protected $table = "rws";
    public $timestamps = true;

    public function kelurahan(){
        return $this->belongsTo(Kelurahan::class, 'id_kelurahan');
    }
    public function kasus2(){
        return $this->hasMany(Kasus2::class); 
    }
}

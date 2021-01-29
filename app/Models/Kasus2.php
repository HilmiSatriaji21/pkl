<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasus2 extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'positif', 'sembuh', 'meninggal', 'tanggal', 'id_rw'];
    protected $table = "kasus2s";
    public $timestamps = true;

    public function rw(){
        return $this->belongsTo(Rw::class);
    }
    public function kasus2()
    {
        return $this->hasMany('App\Models\Kasus2', 'id_kasus2');
    }
}

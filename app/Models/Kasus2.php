<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasus2 extends Model
{
    use HasFactory;

    protected $fillable = ['positif','meninggal','sembuh','id_rw','tanggal'];
    protected $table = "kasus2s";
    public $timestamps = true;

    public function rw(){
        return $this->belongsTo(Rw::class);
    }
}

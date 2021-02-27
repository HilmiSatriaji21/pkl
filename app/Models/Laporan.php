<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = "laporans";
    protected $fillable = ['id_rw','positif','sembuh','meninggal','tanggal'];
    public $timestamps = true;

    public function rw()
    {
        return $this->belongsTo('App\Models\Rw', 'id_rw');
    }
}

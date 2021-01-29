<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = "laporans";
    protected $fillable = ['id', 'positif', 'sembuh', 'meninggal', 'tanggal', 'id_rw'];
    public $timestamps = true;

    public function rw()
    {
        return $this->belongsTo('App\Models\Rw', 'id_rw');
    }

    public function laporan()
    {
        return $this->hasMany('App\Models\Laporan', 'id_laporan');
    }
}

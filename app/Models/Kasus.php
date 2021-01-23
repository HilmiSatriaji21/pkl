<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kasus extends Model
{
    use HasFactory;

    protected $fillable = ['jumlah_positif','jumlah_meninggal','jumlah_sembuh','id_negara','tanggal'];
    protected $table = "kasuses";

    public function negara(){
        return $this->belongsTo(Negara::class, 'id_negara');
    }
}

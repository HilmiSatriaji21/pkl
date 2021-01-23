<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provinsi extends Model
{
    use HasFactory;

    protected $fillable = ['kode_provinsi','nama_provinsi'];
    protected $table = "provinsis";
    public $timestamps = true;


    public function kota() {
        return $this->hasMany(kota::class);
    }
}
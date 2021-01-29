<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Provinsi;
use App\Models\Kota;

class Dropdown extends Component
{
    public $provinsi;
    public $kotas=[];
    public $kota;
    
    public function render()
    {
        if (!empty($this->provinsi)) {
            $this->kotas=Kota::where('id_provinsi', $this->provinsi)->get();
        }
        return view('livewire.dropdown')
            ->withprovinsis(Provinsi::orderBy('nama_provinsi')->get());
    }
}
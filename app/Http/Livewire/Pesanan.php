<?php

namespace App\Http\Livewire;

use App\Models\Pesanan as ModelsPesanan;
use Livewire\Component;

class Pesanan extends Component
{
    public $IDdata,$data;
    public function mount($id)
    {
        $this->IDdata = $id;
    }

    public function render()
    {
        $this->data = ModelsPesanan::all();
        return view('livewire.pesanan');
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Product as ModelsProduct;
use Livewire\Component;

class Product extends Component
{

    public $IDdata,$data;
    public function mount($id)
    {
        $this->IDdata = $id;
    }

    public function render()
    {
        $this->data = ModelsProduct::all();
        return view('livewire.product');
    }
}

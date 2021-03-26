<?php
namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Pesanan;
use Illuminate\Support\Facades\Auth;

class Item extends Component
{
    public $modalOpen = false;
    public $postId;
    public $IDdata,$data;
    public $kata = [];
    public $harga1 = 0;
    public $harga2 = 0;
    public $harga3 = 0;
    public $harga4 = 0;
    public $photo_path,$title,$description;
    public $size;
    public $catatan;
    public $no_telp;

    public function mount($id)
    {
        $this->IDdata = $id;
    }

    public function render()
    {
        $this->data = Product::find($this->IDdata);
        return view('livewire.item');
    }


    public function store() {
        $this->validate(
            [
                'size' => 'required' ,
                'catatan' => 'required' ,
                'no_telp' => 'required' ,
            ]
        );
        pesanan::Create([
            //yang di dalem tanda petik sesuai in sama kolom nya
            'size'=>$this->size,
            'catatan'=>$this->catatan,
            'no_telp'=>$this->no_telp
        ]);
        $this->hideModal();

        session()->flash('info', $this->postId ? 'This Item is Successfully Created' : 'This Item is Successfully Ordered ');

        $this->postId='';
        $this->size = '';
        $this->catatan = '';
        $this->no_telp = '';

    }

    public function openmodal(){
        $this->modalOpen = true;
    }

    public function hideModal(){
        $this->modalOpen = false;
    }


}

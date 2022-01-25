<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductIndex extends Component
{
    use WithPagination; //component untuk pagination
    //searching
    public $search; //property search untuk global (untuk wire:model di product-index)
    protected $updateQueryString = ['search']; //property yang diacu ada property global, apabila user melakukan pengupdate data string di kolom search (mengetik)

    public function render()
    {
        //apabila user mengetik dibagian search
        if ($this->search) {
            //maka akan dimunculkan nama yang disearch
            $produks = Product::where('nama', 'like', '%' . $this->search . '%')->paginate(8);
        } else {
            //selain dari itu tampilkan seluruh produk
            $produks = Product::paginate(8);
        }

        return view('livewire.product-index', [
            'produks' => $produks,
            'title' => 'List Produk'
        ]);
    }

    //resetpage untuk mengatasi error search
    public function updatingSearch()
    {
        $this->resetPage();
    }
}
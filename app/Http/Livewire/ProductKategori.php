<?php

namespace App\Http\Livewire;

use App\Models\Kategori;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductKategori extends Component
{
    use WithPagination; //component untuk pagination
    //searching
    public $search, $kategori; //property search untuk global (untuk wire:model di product-index)
    protected $updateQueryString = ['search']; //property yang diacu ada property global, apabila user melakukan pengupdate data string di kolom search (mengetik)

    public function render()
    {
        //apabila user mengetik dibagian search
        if ($this->search) {
            //maka akan dimunculkan nama yang disearch
            $produks = Product::where('kategori_id', $this->kategori->id)->where('nama', 'like', '%' . $this->search . '%')->paginate(8);
        } else {
            //selain dari itu tampilkan seluruh produk
            $produks = Product::where('kategori_id', $this->kategori->id)->paginate(8);
        }

        return view('livewire.product-index', [
            'produks' => $produks,
            'title' => $this->kategori->nama
        ]);
    }

    //resetpage untuk mengatasi error search
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount($kategori_id)
    {
        $kategoriProduk = Kategori::find($kategori_id);
        if ($kategoriProduk) {
            $this->kategori = $kategoriProduk;
        }
    }
}
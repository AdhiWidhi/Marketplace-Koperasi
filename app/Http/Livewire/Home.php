<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\Kategori;

use App\Models\Product;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'products' => Product::take(4)->get(),
            'kategoris' => Kategori::all(),
        ]);
    }
}
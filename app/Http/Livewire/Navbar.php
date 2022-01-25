<?php

namespace App\Http\Livewire;

use App\Models\Kategori;
use App\Models\Pesanan;
use App\Models\PesananDetail;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Navbar extends Component
{
    public $jumlah = 0;

    protected $listeners = [
        'masukKeranjang' => 'updateKeranjang',
    ];

    //mengupdate keranjang jika ada transaksi dari user
    public function updateKeranjang()
    {
        if (Auth::user()) {
            $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
            if ($pesanan) {
                $this->jumlah = PesananDetail::where('pesanan_id', $pesanan->id)->count();
            } else {
                $this->jumlah = 0;
            }
        }
    }
    //tampilan awal ketika baru di klik maka mengecek pesanan dari user
    public function mount()
    {
        if (Auth::user()) {
            $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
            if ($pesanan) {
                $this->jumlah = PesananDetail::where('pesanan_id', $pesanan->id)->count();
            } else {
                $this->jumlah = 0;
            }
        }
    }
    //reset form
    private function resetForm()
    {
        $this->jumlah_pesanan = null;
        $this->nomor == null;
        $this->catatan == null;
    }

    public function render()
    {
        return view(
            'livewire.navbar',
            [
                'kategoris' => Kategori::all(),
                'jumlah_pesanan' => $this->jumlah
            ]
        );
    }
}
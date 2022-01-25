<?php

namespace App\Http\Livewire;

use App\Models\Pesanan;
use App\Models\PesananDetail;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Keranjang extends Component
{
    protected $pesanan, $pesanan_detail = [];

    public function destroy($id)
    {
        $pesanan_details = PesananDetail::find($id);
        if (!empty($pesanan_details)) {
            $pesanan = Pesanan::where('id', $pesanan_details->pesanan_id)->first();
            $jumlah_pesanan_detail = PesananDetail::where('pesanan_id', $pesanan->id)->count();
            if ($jumlah_pesanan_detail == 1) {
                $pesanan->delete();
            } else {
                $pesanan->total_harga = $pesanan->total_harga - $pesanan_details->total_harga;
                $pesanan->update();
            }
            $pesanan_details->delete();
        }
        $this->emit('masukKeranjang');
        session()->flash('message', 'Pesanan dihapus');
    }
    public function render()
    {
        if (Auth::user()) {
            $this->pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
            if ($this->pesanan) {
                $this->pesanan_detail = PesananDetail::where('pesanan_id', $this->pesanan->id)->get();
            }
        }

        return view('livewire.keranjang', ['pesanan' => $this->pesanan, 'pesanan_detail' => $this->pesanan_detail]);
    }
}
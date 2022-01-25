<div class="container">
    <div class="row mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item"><a href="/products" class="text-dark">List product</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><strong style="color: black">{{
                            $product->nama
                            }}</strong></li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card border-light bg-light" style="border-radius:10px">
                <div class="card-body text-center">
                    <img style="border-radius:10px" src="{{ url('assets/product') }}/{{ $product->gambar }}"
                        class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col">
            <h2><strong>{{ $product->nama }}</strong></h2>
            <h3>Rp. {{ number_format($product->harga) }}
                @if($product->is_ready == 1)
                <span class="badge bg-success"><i class="fas fa-check"></i> Ready Stok</span>
                @else
                <span class="badge bg-danger"><i class="fas fa-times"></i> Sold Out</span>
                @endif
            </h3>

            <div class="row">
                <div class="col">
                    <form wire:submit.prevent="masukkanKeranjang">
                        <table class="table" style="border-top : hidden">
                            <tr>
                                <td>Jenis</td>
                                <td>:</td>
                                <td>{{ $product->jenis }}</td>
                            </tr>
                            <tr>
                                <td>Berat</td>
                                <td>:</td>
                                <td>{{ $product->berat }}</td>
                            </tr>
                            <tr>
                                <td>Stok</td>
                                <td>:</td>
                                <td>{{ $product->stok }}</td>
                            </tr>
                            <tr>
                                <td>Deskripsi</td>
                                <td>:</td>
                                <td>{{ $product->deskripsi }}</td>
                            </tr>

                            <tr>
                                <td>Jumlah Pesanan</td>
                                <td>:</td>
                                <td>
                                    <input id="jumlah_pesanan" type="number"
                                        class="form-control @error('jumlah_pesanan') is-invalid @enderror"
                                        wire:model="jumlah_pesanan" value="{{ old('jumlah_pesanan') }}"
                                        autocomplete="name" autofocus>

                                    @error('jumlah_pesanan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>Catatan</td>
                                <td>:</td>
                                <td><input id="catatan" type="text"
                                        class="form-control @error('catatan') is-invalid @enderror" wire:model="catatan"
                                        value="{{ old('catatan') }}" autocomplete="name" autofocus
                                        placeholder="Contoh : Ukuran XL">

                                    @error('catatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <div class="d-grid gap-2 ">
                                        <button type="submit" class="btn btn-dark btn-block" @if($product->is_ready !==
                                            1)
                                            disabled @endif><i class="fas fa-shopping-cart"></i> Masukkan
                                            Keranjang</button>
                                    </div>

                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
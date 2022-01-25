<div class="container">
    <div class="row mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('keranjang') }}" class="text-dark">Keranjang</a>
                    <li class="breadcrumb-item active"><strong>Checkout</strong>
                    </li>

                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @if(session()->has('message'))
            <div class="alert alert-danger">
                {{ session('message') }}
            </div>
            @endif
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <a href="{{ route('keranjang') }}" class=" btn btn-sm btn-dark"><i class="fas fa-arrow-left">
                    Kembali</i></a>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col">
            <h3>Informasi Pembayaran</h3>
            <hr>
            <p>Untuk pembayaran silakan melalui transfer direkening bawah ini sebesar : <strong>Rp.{{
                    number_format($total_harga) }}</strong></p>
            <div class="media">
                <img class="mr-3" src="{{ url('assets/bri.png') }}" alt="Bank BRI" width="60">
                <div class="media-body">
                    <h5 class="mt-0">Bank BRI</h5>
                    No. Rekening 012345-789456-789 atas nama <strong>Gede Gawat</strong>
                </div>
            </div>
        </div>
        <div class="col">
            <h3>Informasi Pengiriman</h3>
            <hr>
            <form wire:submit.prevent="checkout">

                <div class="form-group">
                    <label for="">No. HP</label>
                    <input id="nohp" type="text" class="form-control @error('nohp') is-invalid @enderror"
                        wire:model="nohp" value="{{ old('nohp') }}" autocomplete="name" autofocus>

                    @error('nohp')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea wire:model="alamat" class="form-control @error('nama') is-invalid @enderror"></textarea>

                    @error('alamat')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success btn-block"> <i class="fas fa-arrow-right"></i> Checkout
                </button>
            </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item active"><a href="/keranjang" class="text-dark">Keranjang</a>
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
            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Keterangan</th>
                            <th>Catatan</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th><strong>Total Harga</strong></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1
                        @endphp
                        @forelse ($pesanan_detail as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td><img src="{{ url('assets/product') }}/{{ $item->product->gambar }}" class="img-fluid"
                                    width="200">
                            </td>
                            <td>
                                {{ $item->product->nama }}
                            </td>
                            <td>
                                @if($item->catatan)
                                {{ $item->catatan }}
                                @else
                                -
                                @endif
                            </td>
                            <td>{{ $item->jumlah_pesanan }}</td>
                            <td>Rp. {{number_format($item->product->harga) }}</td>
                            <td><strong>Rp. {{number_format($item->total_harga) }}</strong></td>
                            <td>
                                <i wire:click="destroy({{ $item->id }})" class="fas fa-trash text-danger"></i>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7"><strong>Data Kosong</strong></td>
                        </tr>
                        @endforelse
                        @if(!empty($pesanan))
                        <tr>
                            <td colspan="6" align="right"><strong>Total Harga : </strong></td>
                            <td><strong>Rp. {{number_format($pesanan->total_harga) }}</strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="6" align="right"><strong>Kode Unik : </strong></td>
                            <td><strong>{{number_format($pesanan->kode_unik) }}</strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="6" align="right"><strong>Total yang harus dibayarkan : </strong></td>
                            <td><strong>Rp. {{number_format($pesanan->total_harga+$pesanan->kode_unik) }}</strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="6"></td>
                            <td colspan="2">
                                <a href="{{ route('checkout') }}" class="btn btn-block btn-success text-dark"><i
                                        class="fas fa-arrow-right"></i>
                                    <strong>Checkout</strong> </a>
                            </td>

                        </tr>

                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
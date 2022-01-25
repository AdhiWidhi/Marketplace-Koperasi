<div class="container">
    <div class="row mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item active"><strong>History</strong>
                    </li>

                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @if(session()->has('message'))
            <div class="alert alert-sucess">
                {{ session('message') }}
            </div>
            @endif
        </div>
    </div>

    <div class="row mt-4">
        <div class="table-responsive">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Pesan</th>
                        <th>Kode Pemesanan</th>
                        <th>Pesanan</th>
                        <th>Status</th>
                        <th><strong>Total Harga</strong></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1
                    @endphp
                    @forelse ($pesanan as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->kode_pemesanan }}</td>
                        <td>
                            @php
                            $pesanan_detail = \App\Models\PesananDetail::where('pesanan_id', $item->id)->get();
                            @endphp
                            @foreach ($pesanan_detail as $detail )
                            <img src="{{ url('assets/product') }}/{{ $detail->product->gambar }}" class="img-fluid"
                                width="50">
                            {{ $detail->product->nama }}
                            <br>
                            @endforeach
                        </td>
                        <td>
                            @if($item->status == 1)
                            Belum Lunas
                            @else
                            Lunas
                            @endif
                        </td>
                        <td><strong>Rp. {{ number_format($item->total_harga) }}</strong></td>
                        @empty
                    <tr>
                        <td colspan="7"><strong>Data Kosong</strong></td>
                    </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-body">
                    <p>Untuk pembayaran silakan melalui transfer di rekening bawah ini :</p>
                    <div class="media">
                        <img class="mr-3" src="{{ url('assets/bri.png') }}" alt="Bank BRI" width="60">
                        <div class="media-body">
                            <h5 class="mt-0"><strong>Bank BRI</strong></h5>
                            No. Rekening <strong>012345-789456-789</strong> atas nama <strong>Gede Gawat</strong>
                        </div>
                    </div>
                    <hr>
                    <p>Note : Setelah melakukan pembayaran dimohonkan agar mengirimkan bukti pembayaran dan
                        memberikan
                        kode
                        pemesanan anda melalui WhatsApp : <strong>0872384174</strong> ( <a href="#">Link</a> )
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
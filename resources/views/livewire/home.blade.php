<div class="container">

    {{-- Banner --}}
    <div class="banner">
        <img src="{{ url('assets/slider/slider1.jpg') }}" alt="">
    </div>
    {{-- End Banner --}}
    {{-- PILIH kategori --}}
    <section class="pilih-kategori mt-4">
        <h3><strong>Pilih Kategori</strong></h3>
        <div class="row mt-4">
            @foreach($kategoris as $item)
            <div class="col">
                <a href="/products/kategori/{{ $item->id }}">
                    <div class="card shadow">
                        <div class="card-body text-center">
                            <img style="max-height: 100px;" src="{{ url('assets/kategori') }}/{{ $item->gambar }}"
                                class="img-fluid">
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </section>
    {{-- END KATEGORI --}}

    {{-- PRODUK --}}
    <section class="product mt-4 mb-4">
        <h3>
            <strong>Best Products</strong>
            <a href="/products" class="btn btn-dark float-right"><i class="fas fa-eye"></i>Lihat Semua</a>
        </h3>

        <div class="row mt-4">
            @foreach($products as $item)
            <div class="col-md-3">
                <a href="#">
                    <div class="card shadow">
                        <div class="card-body text-center">
                            <img style="max-height: 150px; border-radius:10px"
                                src="{{ url('assets/product') }}/{{ $item->gambar }}" class="img-fluid">
                            <div class="row mt-2">
                                <div class="col-md-12 mt-2">
                                    <h5><strong>{{ $item->nama }}</strong></h5>
                                    {{-- number format memberikan format number --}}
                                    <h5>Rp. {{ number_format( $item->harga) }}</h5>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12 d-grid">
                                    <a href="/products/{{ $item->id }}" class="btn btn-dark btn-block"><i
                                            class="fas fa-eye"></i> Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </section>
    {{-- END PRODUK --}}
</div>
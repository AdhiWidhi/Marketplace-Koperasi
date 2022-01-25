<div class="container">
    <div class="row mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><strong style="color: black">List
                            Produk</strong></li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h2>{{ $title }}</h2>
        </div>
        <div class="col-md-3">
            <div class="input-group mb-3">

                {{-- wire model digunakan pada controller product untuk model search --}}
                <input wire:model="search" type="text" class="form-control" placeholder="Search..."
                    aria-label="Search..." aria-describedby="basic-addon1">
                <span class="input-group-text" id="basic-addon1">
                    <i class="fas fa-search"></i>
                </span>
            </div>
        </div>
    </div>

    {{-- PRODUK --}}
    <section class="product mb-4">
        <div class="row mt-4">
            @foreach($produks as $item)
            <div class="col-md-3 mb-3">
                <a href="#">
                    <div class="card shadow">
                        <div class="card-body text-center">
                            <img style="max-height: 200px;" src="{{ url('assets/product') }}/{{ $item->gambar }}"
                                class="img-fluid">
                            <div class="row mt-2">
                                <div class="col-md-12 mt-2">
                                    <h5><strong class="text-dark">{{ $item->nama }}</strong></h5>
                                    {{-- number format memberikan format number --}}
                                    <h5 class="text-black">Rp. {{ number_format( $item->harga) }}</h5>
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
        <div class="row">
            <div class="col">
                {{ $produks->links() }}
            </div>
        </div>
    </section>
    {{-- END PRODUK --}}
</div>
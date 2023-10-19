    <!-- Penginapan Start -->
    <section id="wisata" class="wisata">
        <div class="container" data-aos="fade-up">

            <div class="titlepage">
                <h2>Paket Wisata</h2>
                <!-- <p>Beli Produk <span>Sesuai Kebutuhanmu</span></p> -->
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($wisata as $wisata)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="wisata-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{ 'storage/' . $wisata->gambar }}" alt="">
                            </div>
                            <div class="d-flex border-bottom">
                                <medium class="flex-fill text-center border-end py-2">{{ $wisata->nama_paket }}<br>
                                    <span class="fa fa-star text-primary"></span>
                                    <span class="fa fa-star text-primary"></span>
                                    <span class="fa fa-star text-primary"></span>
                                    <span class="fa fa-star text-primary"></span>
                                </medium>
                            </div>
                            <div class=" text-left p-4 wisata-item">
                                <p class="sub">
                                    <i class="fa fa-map-marker-alt text-primary me-2"></i><strong>Tujuan
                                        Wisata:</strong>&nbsp;{{ $wisata->tujuan_wisata }}
                                </p>
                                <p class="sub">
                                    <i
                                        class="fas fa-clock text-primary me-2"></i><strong>Durasi:</strong>&nbsp;{{ $wisata->durasi }}
                                </p>
                                <p class="sub">
                                    <i
                                        class="fas fa-tags text-primary me-2"></i><strong>Harga:</strong>&nbsp;{{ formatRupiah($wisata->harga) }}
                                </p>
                            </div>
                            <div class="text-center p-2">
                                <p>{!! $wisata->deskripsi !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="titlepage p-4">
                <a class="btn btn-primary" href="/wisatalain" role="button">Lihat lainnya</a>
            </div>
        </div>

    </section>

    <!-- Penginapan End -->

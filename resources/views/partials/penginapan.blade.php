    <!-- Penginapan Start -->
    <section id="penginapan" class="penginapan">
        <div class="container" data-aos="fade-up">

            <div class="titlepage">
                <h2>Penginapan</h2>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($penginapan as $tempat)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{ 'storage/' . $tempat->gambar }}" alt="">
                            </div>
                            <div class="d-flex border-bottom">
                                <medium class="flex-fill text-center border-end py-2 "><i
                                        class="fas fa-hotel text-primary me-2"></i>{{ $tempat->nama_penginapan }}
                                </medium>
                            </div>
                            <div class="text-center p-4">
                                <h3 class="mb-0">{{ formatRupiah($tempat->harga) }}</h3>
                                <div class="mb-3">
                                    <i class="fas fa-map-marked-alt text-primary me-2"></i><strong>
                                        Lokasi:</strong>&nbsp;<a class="link-opacity-10"
                                        href="{{ $tempat->gmaps }}">lokasi penginapan</a>
                                </div>
                                <p>{!! $tempat->deskripsi !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="titlepage p-4">
                <a class="btn btn-primary" href="/penginapanlain" role="button">Lihat lainnya</a>
            </div>

        </div>
    </section>

    <!-- Penginapan End -->

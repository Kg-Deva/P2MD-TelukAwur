    <!-- ======= Menu Section ======= -->
    <section id="warung">
        <div class="container" data-aos="fade-up">

            <div class="titlepage">
                <h2>Kuliner</h2>
            </div>

            <div class="row gy-5">
                @foreach ($kuliner as $makanan)
                    <div class="col-lg-4 menu">
                        <a class="glightbox"><img src="{{ 'storage/' . $makanan->gambar }}" class="menu-img img-fluid"
                                alt="" style="width:100%;height:260px"></a>
                        <h4>{{ $makanan->nama_kuliner }}</h4>
                        <p>{!! $makanan->deskripsi !!}</p>
                        <p class="ingredients">
                            <i class="fas fa-store text-primary me-2"></i><strong>Nama
                                Warung:</strong>&nbsp;{{ $makanan->nama_warung }}
                            <br>
                            <i
                                class="fas fa-tags text-primary me-2"></i><strong>Harga:</strong>&nbsp;{{ formatRupiah($makanan->harga) }}
                            <br>
                            <i class="fas fa-phone-alt text-primary me-2"></i><strong>
                                Telepon:</strong>&nbsp;<a class="link-opacity-10" href="{{ $makanan->whatsapp }}"target="_self">Link whatsapp</a>
                        </p>
                    </div><!-- Menu Item -->
                @endforeach

            </div>
            <div class="titlepage">
                <a class="btn btn-primary" href="/kulinerlain" role="button">Lihat lainnya</a>
            </div>
        </div>
        </div>
        </div>
    </section><!-- End Warung Section -->

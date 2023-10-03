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
                                alt="" style="width:100%;height:250px"></a>
                        <h4>{{ $makanan->nama_kuliner }}</h4>
                        <p>{{ $makanan->deskripsi }}</p>
                        <p class="ingredients">
                            <i class="fas fa-store text-primary me-2"></i><strong>Nama
                                Warung:</strong>&nbsp;{{ $makanan->nama_warung }}
                            <br>
                            <i
                                class="fas fa-tags text-primary me-2"></i><strong>Harga:</strong>&nbsp;{{ $makanan->harga }}
                        </p>
                        <!-- <p class="price">
                  $5.95
                </p> -->
                    </div><!-- Menu Item -->
                @endforeach

            </div>
        </div>
        </div>
        </div>
    </section><!-- End Warung Section -->

<!DOCTYPE html>
<html lang="en">

<head>
<title>Pantai Teluk Awur</title>
    @include('layout.head')
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
  @include('layout.topbar')
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    @include('layout.header')
  </header><!-- End Header -->


  <main id="main">
    <!-- Penginapan Start -->
    <section id="wisata" class="wisata">
      <div class="container" data-aos="fade-up">

        <div class="titlepage">
          <h2>Paket Wisata</h2>
          <!-- <p>Beli Produk <span>Sesuai Kebutuhanmu</span></p> -->
        </div>
          <div class="row g-4 justify-content-center">
                @foreach ($wisata as $d)
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="wisata-item">
                      <div class="overflow-hidden">
                          <img class="img-fluid" src="{{ 'storage/' . $d->gambar }}" alt="">
                      </div>
                      <div class="d-flex border-bottom">
                          <medium class="flex-fill text-center border-end py-2">{{ $d->nama_paket }}<br>
                            <span class="fa fa-star text-primary"></span>
                            <span class="fa fa-star text-primary"></span>
                            <span class="fa fa-star text-primary"></span>
                            <span class="fa fa-star text-primary"></span>
                          </medium>
                      </div>
                      <div class=" text-left p-4 wisata-item">
                        <p class="sub">
                            <i class="fa fa-map-marker-alt text-primary me-2"></i><strong>Tujuan Wisata:</strong>&nbsp;{{ $d->tujuan_wisata}}
                        </p>
                        <p class="sub">
                            <i class="fas fa-clock text-primary me-2"></i><strong>Durasi:</strong>&nbsp;{{ $d->durasi }}
                        </p>
                        <p class="sub">
                            <i class="fas fa-tags text-primary me-2"></i><strong>Harga:</strong>&nbsp;{{ formatRupiah($d->harga) }}
                        </p>
                      </div>
                      <div class="text-center p-2">
                          <p>{{ $d->deskripsi }}</p>
                      </div>
                  </div>
              </div>
              @endforeach  
          </div>
          {{ $wisata->links() }}
          <div class="titlepage p-4">
            <a class="btn btn-primary" href="/" role="button">Kembali</a>
          </div>
      </div>

    </section>

  <!-- Penginapan End -->



  </main><!-- End #main -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main1.js"></script>
  <script src="assets/js/main2.js"></script>

</body>

</html>
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
                        <p>{{ $makanan->deskripsi }}</p>
                        <p class="ingredients">
                            <i class="fas fa-store text-primary me-2"></i><strong>Nama
                                Warung:</strong>&nbsp;{{ $makanan->nama_warung }}
                            <br>
                            <i class="fas fa-tags text-primary me-2"></i><strong>Harga:</strong>&nbsp;{{ formatRupiah($makanan->harga) }}
                            <br>
                            <i class="fas fa-phone-alt text-primary me-2"></i><strong>
                                Telepon:</strong>&nbsp;<a class="link-opacity-10" href="{{ $makanan->whatsapp }}">Link whatsapp</a>
                        </p>
                    </div><!-- Menu Item -->
                @endforeach

            </div>
            {{ $kuliner->links() }}
            <div class="titlepage">
            <a class="btn btn-primary" href="/" role="button">Kembali</a>
            </div>
            
        </div>
        </div>
        </div>
    </section><!-- End Warung Section -->

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
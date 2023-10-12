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
  <!-- ======= Spot Section ======= -->
  <section id="spot" class="team section-bg">
      <div class="container" data-aos="fade-up">

          <div class="titlepage">
              <h2>Spot Pantai</h2>
          </div>

          <div class="row">
              @foreach ($spot_pantai as $spot)
                  <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                      <div class="member">
                          <div class="member-img">
                              <img src="{{ 'storage/' . $spot->gambar }}" class="img-fluid"
                                  style="height: 275px;width:100%;" alt="">
                              <!-- <div class="social">
                                  <a href=""><i class="bi bi-twitter"></i></a>
                                  <a href=""><i class="bi bi-facebook"></i></a>
                                  <a href=""><i class="bi bi-instagram"></i></a>
                                  <a href=""><i class="bi bi-linkedin"></i></a>
                              </div> -->
                          </div>
                          <div class="member-info">
                              <h4>{{ $spot->nama_spot }}</h4>
                              <!-- <span>Chief Executive Officer</span> -->
                          </div>
                      </div>
                  </div>
              @endforeach
          </div>
          {{ $spot_pantai->links() }}
            <div class="titlepage">
            <a class="btn btn-primary" href="/" role="button">Kembali</a>
            </div>

      </div>
  </section><!-- End Spot Section -->



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
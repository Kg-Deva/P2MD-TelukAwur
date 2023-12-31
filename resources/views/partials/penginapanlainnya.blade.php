<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pantai Teluk Awur</title>
    @include('layout.head')
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><img src="assets/img/LOGO-BUMDES.png" alt="#" style="width:100%"></h1>
            <h1 class="logo"><img src="assets/img/LOGO-PANTAI.png" alt="#" style="width:100%"></h1>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="/">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="/#about">Profil</a></li>
                    <li><a class="nav-link scrollto" href="/spotlain">Spot Pantai</a></li>
                    <li><a class="nav-link scrollto" href="/kulinerlain">Kuliner</a></li>
                    <li><a class="nav-link scrollto " href="/wisatalain">Paket Wisata</a></li>
                    <li><a class="nav-link scrollto active" href="/penginapanlain">Penginapan</a></li>
                    <li><a class="nav-link scrollto" href="/#contact">Kontak</a></li>
                    <li><a style="color: #106eea;" class="btn btn-light rounded-pill py-2 px-4" href="/login"
                            role="button">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header><!-- End Header -->


    <main id="main">
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
                {{ $penginapan->links() }}
                <div class="titlepage">
                    <a class="btn btn-primary" href="/" role="button">Kembali</a>
                </div>

            </div>
        </section>

        <!-- Penginapan End -->


    </main><!-- End #main -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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

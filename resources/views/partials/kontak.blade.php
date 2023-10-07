  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="titlepage">
          <h2>Kontak</h2>
        </div>
        @foreach ($kontak as $call)

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Lokasi</h3>
              <p>{{ $call->lokasi }}</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p>{{ $call->email }}</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Telepon</h3>
              <p>{{ $call->telepon }}</p>
            </div>
          </div>

        </div>
        @endforeach

      </div>
    </section><!-- End Contact Section -->

    
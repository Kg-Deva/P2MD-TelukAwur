<!-- ======= About Section ======= -->
<section id="about">
      <div class="container" data-aos="fade-up">

      <div class="titlepage">
              <h2>Profil</h2>
          </div>

        <div class="row about-container">
          @foreach ($profile as $d)

          <div class="col-lg-6 content order-lg-1 order-2">
            <p style="text-align: justify;">
              {!! $d ->deskripsi !!}
            </p>

          </div>

          <div class="col-lg-6 background order-lg-2" data-aos="zoom-in">
            <img src="{{ 'storage/' . $d->gambar }}" class="img-fluid" alt="">
          </div>
        </div>
        @endforeach

      </div>
    </section><!-- End About Section -->

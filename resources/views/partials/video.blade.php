  <!-- ======= VIDEO Section ======= -->
  <section class="video">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="fade-up" data-aos-delay="100">
        @foreach ($footer as $video)
          <div class="col-lg-6 col-md-6">
            <div class="info-box mb-4">
            <iframe width="520" height="315" src="{{ $video->youtube }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              <h3>{{ $video->judul }}</h3>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End VIDEO Section -->





    
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
                              <div class="social">
                                  <a href=""><i class="bi bi-twitter"></i></a>
                                  <a href=""><i class="bi bi-facebook"></i></a>
                                  <a href=""><i class="bi bi-instagram"></i></a>
                                  <a href=""><i class="bi bi-linkedin"></i></a>
                              </div>
                          </div>
                          <div class="member-info">
                              <h4>{{ $spot->nama_spot }}</h4>
                              <!-- <span>Chief Executive Officer</span> -->
                          </div>
                      </div>
                  </div>
              @endforeach


          </div>

      </div>
  </section><!-- End Spot Section -->

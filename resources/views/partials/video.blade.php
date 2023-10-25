        <!-- Penginapan Start -->
        <section class="video">
        <div class="container" data-aos="fade-up">
            <div class="row g-4 justify-content-center">
            @foreach ($footer as $video)
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                            <iframe width="560" height="315" src="{{ $video->youtube }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                            <div class="d-flex border-bottom">
                                <p class="flex-fill text-center border-end py-2 ">
                                  {{ $video->judul }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <!-- Penginapan End -->






    
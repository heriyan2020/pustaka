<!-- ======= Testimonials Section ======= -->
<div class="container">
    <div class="section-title" data-aos="fade-up">
        <h2>Pustaka</h2>
        <p>DAFTAR BUKU</p>
    </div>
</div>
<section id="features" class="testimonials" data-aos="fade-right" data-aos-delay="100">
    <div class="container">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">
            @foreach ($image as $item)

            <div class="swiper-slide">
                <div class="testimonial-item">
                    <img src="{{asset('storage/'. $item->cover)}}" alt="image" width="200">
                <h3>{{$item->judul}}</h3>
                <p>{{$item->pengarang}}</p>
                </div>
            </div><!-- End testimonial item -->

            @endforeach

        </div>
        <div class="swiper-pagination"></div>
        </div>

    </div>
  </section><!-- End Testimonials Section -->
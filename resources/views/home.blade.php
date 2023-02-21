@extends('layout.main')

@section('fill')
<section id="hero">
    <div class="hero-container" >
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          @foreach ($slides as $slide)
          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url({{ asset('storage/' . $slide->image) }});">
            <div class="carousel-container">
              
            </div>
          </div>
          @endforeach

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Best Seller</h2>
        <p style="color: black">Dapatkan beberapa produk terbaik dari kami </p>
        <center><div class="line py-3 mb-5" style="border-bottom: 3px solid black; width: 20%"></div></center>
      </div>


      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item ">
          <div class="portfolio-wrap"  style="border-radius: 10px; border: 1px solid rgb(230, 221, 221)">
            <img src="assets/img/sepatu-1x.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Sneakers 100x</h4>
              <p>Rp. 1.690.000</p>
              <div class="portfolio-links">
                <a href="/assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1">Detail<i class="bi bi-arrow-right-short"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item ">
          <div class="portfolio-wrap"  style="border-radius: 10px; border: 1px solid rgb(230, 221, 221)">
            <img src="assets/img/sepatu-1x.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Sneakers 100x</h4>
              <p>Rp. 1.690.000</p>
              <div class="portfolio-links">
                <a href="/assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1">Detail<i class="bi bi-arrow-right-short"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item ">
          <div class="portfolio-wrap"  style="border-radius: 10px; border: 1px solid rgb(230, 221, 221)">
            <img src="assets/img/sepatu-1x.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Sneakers 100x</h4>
              <p>Rp. 1.690.000</p>
              <div class="portfolio-links">
                <a href="/assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1">Detail<i class="bi bi-arrow-right-short"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item ">
          <div class="portfolio-wrap"  style="border-radius: 10px; border: 1px solid rgb(230, 221, 221)">
            <img src="assets/img/sepatu-1x.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Sneakers 100x</h4>
              <p>Rp. 1.690.000</p>
              <div class="portfolio-links">
                <a href="/assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1">Detail<i class="bi bi-arrow-right-short"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item ">
          <div class="portfolio-wrap"  style="border-radius: 10px; border: 1px solid rgb(230, 221, 221)">
            <img src="assets/img/sepatu-1x.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Sneakers 100x</h4>
              <p>Rp. 1.690.000</p>
              <div class="portfolio-links">
                <a href="/assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1">Detail<i class="bi bi-arrow-right-short"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item ">
          <div class="portfolio-wrap"  style="border-radius: 10px; border: 1px solid rgb(230, 221, 221)">
            <img src="assets/img/sepatu-1x.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Sneakers 100x</h4>
              <p>Rp. 1.690.000</p>
              <div class="portfolio-links">
                <a href="/assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1">Detail<i class="bi bi-arrow-right-short"></i></a>
              </div>
            </div>
          </div>
        </div>

        

      </div>

    </div>
  </section><!-- End Portfolio Section -->

<section id="portfolio" class="portfolio mb-5" >
    <div class="container">

      <div class="section-title">
        <h2>New Release</h2>
        <p style="color: black">Temukan dan miliki koleksi terbaru di katalog ini. Jangan lupa, tren terkini selalu menanti anda di laman ini.</p>
        <center><div class="line py-3 mb-5" style="border-bottom: 3px solid black; width: 20%"></div></center>
      </div>

      
      <div class="row portfolio-container">

        @foreach ($products as $product)
              
        <div class="col-lg-4 col-md-6 p-1">
          <div class="portfolio-wrap" style="border-radius: 10px">
            <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid" alt="" style="border: 1px solid rgb(230, 221, 221); ">
            <div class="portfolio-info">
              <h4>{{ $product->name }}</h4>
              <p>Rp. {{ $product->harga }}</p>
              <div class="portfolio-links">
                <a href="/products/{{ $product->slug }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1">Detail<i class="bi bi-arrow-right-short"></i></a>
              </div>
            </div>
          </div>
        </div>

        @endforeach

      </div>

    </div>
  </section><!-- End Portfolio Section -->


  
@endsection

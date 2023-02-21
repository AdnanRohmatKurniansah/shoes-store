@extends('layout.main')

@section('fill')
 <section id="portfolio" class="portfolio">
    <div class="container">
      
      <div class="row portfolio-container" style="margin-top: 60px">
        <div class="col-md-12 portfolio-item">
          
          @if (count($products) > 0)<!--apabila jumlah product lebih dari 0 tampilkan, jika tidak tampilkan not found-->
        
          <div class="col-lg-3 portfolio-item">
            <div class="sidebar ">
              <h4 style="margin: 15px; padding-bottom: 10px; border-bottom: 1px solid rgb(155, 152, 152)">Sale ({{ $products->count()}})</h4>
              <div class="categories p-3" style="border-bottom: 1px solid rgb(155, 152, 152);">
                <h5>Categories</h5>
                    <a href="#">Casual</a>  
                    <a href="#">Football</a>
                    <a href="#">Jordan</a>
                    <a href="#">Lifestyle</a>
                    <a href="#">Running</a>
                    <a href="#">Soccer</a>
                    <a href="#">Sports</a>
              </div>
              <div class="gender p-3" style="border-bottom: 1px solid rgb(155, 152, 152 );">
                <h5>Gender</h5>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Men
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Women
                  </label>
                </div>
              </div>

              <div class="price p-3" style="border-bottom: 1px solid rgb(155, 152, 152 );">
                <h5>Price</h5>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Under Rp. 500.000
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Rp. 501.000 - Rp. 1.300.000
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Rp. 1.301.000 - Rp. 1.999.000
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Over Rp. 2.000.000
                  </label>
                </div>
                

              </div>
              
            </div>
          </div>
        
        <div class="col-lg-9 portfolio-item">

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
      </div>
      

        @else 
        <div class="col-md-12">
          <div class="d-flex justify-content-center align-items-center text-center" style="margin-top: 80px; height: 100px;">
              <h1>Product Not Found</h1>
          </div>
        </div>
        @endif

        <div class="d-flex justify-content-center">
          {{ $products->links() }}
          </div>

    </div>
  </section><!-- End Portfolio Section --> 
  {{-- <div class="container-fluid">

    <div class="sidebar">
        <a href="#home">Sepatu1</a>
        <a href="#news">Sepatu1</a>
        <a href="#contact">Sepatu1</a>
        <a href="#about">Sepatu1</a>
        <a href="#home">Sepatu1</a>
        <a href="#news">Sepatu1</a>
        <a href="#contact">Sepatu1</a>
        <a href="#about">Sepatu1</a>
        <a href="#home">Sepatu1</a>
        <a href="#news">Sepatu1</a>
        <a href="#contact">Sepatu1</a>
        <a href="#about">Sepatu1</a>
        <a href="#home">Sepatu1</a>
        <a href="#news">Sepatu1</a>
        <a href="#contact">Sepatu1</a>
        <a href="#about">Sepatu1</a>
        <a href="#home">Sepatu1</a>
        <a href="#news">Sepatu1</a>
        <a href="#contact">Sepatu1</a>
        <a href="#about">Sepatu1</a>
    
      </div>
    
      <div class="col-lg-8">
        <div class="col-md-4">
          <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid float-left" alt="">
        </div>
        <div class="col-md-4">
          <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
        </div>
      </div> --}}
@endsection
<!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>VLT<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto {{ Request::fullUrl() === url('/products?category=man') ? 'active' : '' }}" href="{{ url('/products?category=man') }}">Men</a></li>
          <li><a class="nav-link scrollto {{ Request::fullUrl() === url('/products?category=women') ? 'active' : '' }}" href="{{ url('/products?category=women') }}">Women </a></li> 
          <li><a class="nav-link scrollto {{ Request::fullUrl() === url('/products?category=kid') ? 'active' : '' }}"href="{{ url('/products?category=kid') }}">Kids</a></li>
          <li><a class="nav-link scrollto {{ Request::fullUrl() === url('/products') ? 'active' : '' }}" href="/products">Sale</a></li>
          <li><a class="nav-link scrollto {{ Request::fullUrl() === url('/profile') ? 'active' : '' }}" href="{{ url('/profile') }}">About Us</a></li>
        </ul>


      </nav><!-- .navbar -->
        

        <ul class="menu d-flex justify-content-center mt-3" style="list-style: none; align-items: center; font-size: 22px;">
          <li class="px-1">
            <div class="span3 widget-span widget-type-raw_html custom-search" style="" data-widget-type="raw_html" data-x="4" data-w="3">
              <div class="cell-wrapper layout-widget-wrapper">
                <span id="hs_cos_wrapper_module_14308928327274411" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_raw_html" style="" data-hs-cos-general-type="widget" data-hs-cos-type="raw_html">
                  <form action="/products" role="search" class="navbar-form navbar-left ng-pristine ng-valid" id="express-form" novalidate="">

                    @if (request('category'))
                      <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif

                <input required="" name="search" placeholder="Search" class="form-control tt-input" id="express-form-typeahead" autocomplete="off" spellcheck="false" dir="auto" type="text" value="{{ request('search') }}">
                  <button class="search-btn" type="submit"><span class="icon"></span></button>
                </form>
                </span>
            </div>
          <!--end layout-widget-wrapper -->
            </div>
          </li>
          @if (auth()->guard('klien')->check())
          <form action="/klien/klienLogout" method="post">
            @csrf
            <button type="submit" style="border: none; background-color: white"><i class="bi bi-person-fill-dash"></i></a></button>
          </form> 
          @else
            <li class="px-2"><a href="/klien/klienLogin"><i class="bi bi-person-circle"></i></a></li>
          @endif
          <li class="px-2"><a href="#book-a-table"><i class="bi bi-heart"></i></a></li>
          <li class="px-2">
            <a href="/cart"><i class="bi bi-cart"></i>
            </a></li>
        </ul>
      
      
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
@extends('layout.main')

@section('fill')
<main id="main">

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" style="margin-top: 100px">

        <div class="row gy-4">
    
            <div class="col-lg-8 mb-3" style="float: left;">
              <div class="card" style="max-height: 600px">
                <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="...">
              </div>
            </div>


          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>{{ $product->name }}</h3>
              <h6 class="mb-4">{{ $product->category->name }}</h6>
              <ul>
                <li><strong>{{ $product->harga }}</strong></li>
              </ul>
              <div class="sizes mt-3 mb-3">
                <label class="radio"> <input type="radio" name="size" value="38" checked> <span>38</span> </label> 
                <label class="radio"> <input type="radio" name="size" value="39"> <span>39</span> </label> 
                <label class="radio"> <input type="radio" name="size" value="40"> <span>40</span> </label> 
                <label class="radio"> <input type="radio" name="size" value="41"> <span>41</span></label>
                <label class="radio"> <input type="radio" name="size" value="42"> <span>42</span> </label>
                <label class="radio"> <input type="radio" name="size" value="43"> <span>43</span> 
                  <label class="radio"> <input type="radio" name="size" value="44"> <span>44</span> 
                    <label class="radio"> <input type="radio" name="size" value="45"> <span>45</span> 
                      <label class="radio"> <input type="radio" name="size" value="46"> <span>46</span> 
                      <label class="radio"> <input type="radio" name="size" value="47"> <span>47</span> 
              </div>
              <p>{!! $product->desc !!}</p>
              <div class="cart-btn  mb-2">
                <form action="/cart" method="post">
                  @csrf
                  <input type="hidden" name="product_id" value="{{ $product->id }}">
                  <div class="form-group">
                      <label for="quantity" style="font-weight: 700">Quantity:</label>
                      <input type="number" name="quantity" id="quantity" value="1" min="1" class="form-control mb-3">
                  </div>
                  <button type="submit" class="btn btn-dark" style="width: 100%; padding: 15px 0; border-radius: 20px">Add to Cart <i class="bi bi-cart"></i></button>
              </form>
              </div>
            <button type="button" class="btn btn-light mb-3 wishList" style="width: 100%; padding: 15px 0; border-radius: 20px">Favourite <i class="bi bi-heart"></i></button>
                
            </div>
            
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->


@endsection


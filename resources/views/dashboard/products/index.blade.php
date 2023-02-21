@extends('dashboard.layout.main')

@section('fill')

<main id="main" class="main">

  <section class="section dashboard">
    
            <div class="card info-card customers-card">

              <div class="card-body">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 border-bottom">
                  <h1 class="h2">My Products</h1>
                </div>
              
              
                @if (session()->has('success'))   
                <div class="alert alert-success col-lg-8" role="alert">
                    {{ session('success') }}
                </div>
                @endif
                
                <div class="table-responsive col-lg-9">
                  <a href="/dashboard/products/create" class="btn btn-primary">Add New Product</a>
                  <table class="table table-striped table-sm">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th> 
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($products as $product)
                          
                      <tr>
                        <td>{{ $loop->iteration  }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->harga }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>
                          <a href="/dashboard/products/{{ $product->slug }}" class="badge bg-info"><i class="bi bi-eye"></i></span></a>
                          <a href="/dashboard/products/{{ $product->slug }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square"></i></span></a>
                          <form action="/dashboard/products/{{ $product->slug }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i>  </button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              
              </div>
            </div>

  </section>

</main><!-- End #main -->

@endsection




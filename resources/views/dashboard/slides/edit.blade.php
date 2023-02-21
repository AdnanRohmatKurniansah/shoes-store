@extends('dashboard.layout.main')

@section('fill')

<main id="main" class="main">

  <section class="section dashboard">
    
            <div class="card info-card customers-card">

              <div class="card-body">
                
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Edit Slide</h1>
                  </div>
                
                  <div class="col-lg-8">
                      <form method="post" action="/dashboard/slides/{{ $slide->id }}" class="mb-5" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                          <label for="imageName" class="form-label">Image Name</label>
                          <input type="text" class="form-control @error('imageName') is-invalid @enderror" id="imageName" 
                          name="imageName" required autofocus value="{{ old('imageName', $slide->imageName) }}">
                          @error('imageName')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                          @enderror
                        </div>
                        
                        <div class="mb-3">
                          <label for="image" class="form-label">Slide Image</label>
                          <input type="hidden" name="oldImage" value="{{ $slide->image }}">
                          @if ($slide->image)
                            <img src="{{ asset('storage/' . $slide->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                          @else
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                          @endif
                        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" 
                          name="image" onchange="previewImage()">
                        @error('image')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                        @enderror
                      </div>
                
                        <button type="submit" class="btn btn-primary">Update Slide</button>
                      </form>
                  </div>
              
              </div>
            </div>

  </section>

</main><!-- End #main -->

<script>

    function previewImage() {
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
      }
    }

  </script>

@endsection


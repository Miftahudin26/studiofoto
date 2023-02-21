@extends('admin.admin_master')

@section('content')

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          {{-- <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <x-jet-welcome /> --}}

              <div class="container">
                <div class="row">                 

                  <div class="col-md-12">
                    @if (session ('succes'))
                      <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{ session('succes') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>               
                    @endif
                    
                    <div class="card-header">
                      Add Slider
                    </div>
                    <form action="{{ route('store.slider') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="card-body">
                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Title</label>
                          <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="Input Title">
                  
                          @error('image_name')
                            {{ $message }}
                          @enderror
                        </div>

                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Description</label>
                          <textarea class="form-control" name="description" id="exampleFormControlInput1"></textarea>
                  
                          @error('image_name')
                            {{ $message }}
                          @enderror
                        </div>

                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Place Image</label>
                          <input type="file" class="form-control" name="image" id="exampleFormControlInput1" placeholder="Input File">
                  
                          @error('image')
                            {{ $message }}
                          @enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary" role="button" value="Submit">Save</button>
                        </div>
                      </form>                            
                    </div>
                  </div>
                </div>
              </div>
          </div>

      </div>
  </div>

@endsection  

{{-- <div class="col-md-4">
  @if (session ('succes'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>{{ session('succes') }}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>               
  @endif
  
  <div class="card-header">
    Add Category
  </div>
  <form action="{{ route('store.category') }}" method="POST">
    @csrf
    <div class="card-body">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name Category</label>
        <input type="text" class="form-control" name="name_category" id="exampleFormControlInput1" placeholder="Input name category">

        @error('name_category')
          {{ $message }}
        @enderror
      </div>
      
      <button type="submit" class="btn btn-primary">Add Category</button>
      </div>
    </form>                            
  </div>
</div> --}}


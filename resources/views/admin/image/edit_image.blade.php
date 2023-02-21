@extends('admin.admin_master')

@section('content')

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          {{-- <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <x-jet-welcome /> --}}

              <div class="container">
                <div class="row ">

                  <div class="col-md-8 bg-white py  ">
                    @if(session ('succes'))
                      <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{ session('succes') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>               
                    @endif
                    
                    <div class="card-header">
                      Edit Image
                    </div>
                    <form action="{{ url('update/image/'. $images->id) }}" method="POST" enctype="multipart/form-data">
                      @csrf

                      <input type="hidden" value="{{ $images->image }}" name="old_image">
                      <div class="card-body">
                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Name Image</label>
                          <input type="text" class="form-control" name="image_name" id="exampleFormControlInput1"
                           placeholder="Input name image" value="{{ $images->image_name }}">              
                        </div>

                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Image</label>
                          <input type="file" class="form-control" name="image" id="exampleFormControlInput1"
                           value="{{ $images->image }}">              
                        </div>

                        <div class="mb-3">
                          <img src="{{ asset($images->image) }}" style="width: 200px">                                         
                        </div>
                        
                        <button type="submit" class="btn btn-primary" role="button" value="Submit">Edit Image</button>
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

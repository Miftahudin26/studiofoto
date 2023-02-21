@extends('admin.admin_master')

@section('content')

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          {{-- <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <x-jet-welcome /> --}}

              <div class="container">
                <div class="row">                
                  
                  <a href="{{ route('add.slider') }}"><button class="btn btn-info mb-2">Add Slider</button></a>
                  
                  <div class="col-md-12">

                    @if (session ('succes'))
                      <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{ session('succes') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>               
                    @endif

                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Title</th>
                          <th scope="col">Description</th>
                          <th scope="col">Image</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody> 
                        @php
                        $i = 1;
                        @endphp

                        @foreach ($sliders as $slider)
                          <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $slider->title }}</td>
                            <td>
                              {{ $slider->description }}
                            </td>
                            <td>
                              <img src="{{ asset($slider->image) }}" alt="gambar all image" style="width: 150px">
                            </td> 
                            <td>
                              <a href="{{ url('edit/slider/'.$slider->id) }}" class="btn btn-info">EDIT</a>
                              <a href="{{ url('delete/slider/'.$slider->id ) }}" class="btn btn-danger">DELETE</a>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
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


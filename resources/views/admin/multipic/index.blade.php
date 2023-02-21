@extends('admin.admin_master')

@section('content')

{{-- <x-app-layout>
  <x-slot name="header">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Hii.. <b>{{ Auth::user()->name }}</b> | <a href="{{ route('trash.category') }}">Trash</a>
      </h2>
  </x-slot> --}}

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          {{-- <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <x-jet-welcome /> --}}

              <div class="container">
                <div class="row">                 
                  <div class="col-md-8">
                    
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Image</th>
                          <th scope="col">Create At</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody> 
                        @php
                        $i = 1;
                        @endphp
                        @foreach ($images as $image)
                          <tr>
                            <td scope="row">{{ $i++ }}</td>
                            <td>
                              <img src="{{ asset($image->image) }}" alt="gambar all image" style="width: 200px">
                            </td>
                            <td>
                              @if ($image->created_at == NULL)
                                <p>Data Kosong</p>
                              @else
                                {{ Carbon\Carbon::parse($image->created_at)->diffForHumans() }}
                              @endif 
                            </td> 
                            <td>
                              <a href="{{ url('delete/multi/'. $image->id) }}" class="btn btn-danger">DELETE</a>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>

                  </div>

                  <div class="col-md-4">
                    @if (session ('succes'))
                      <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{ session('succes') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>               
                    @endif
                    
                    <div class="card-header">
                      Add Multiple Image
                    </div>
                    <form action="{{ route('multi.add') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      {{-- <div class="card-body">
                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Picture</label>
                          <input type="text" class="form-control" name="image[]" multiple="" id="exampleFormControlInput1" placeholder="Input name image">
                  
                          @error('image_name')
                            {{ $message }}
                          @enderror
                        </div> --}}

                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Place Image</label>
                          <input type="file" class="form-control" name="image[]" multiple="" id="exampleFormControlInput1">
                  
                          @error('image')
                            {{ $message }}
                          @enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary" role="button" value="Submit">Add Picture</button>
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


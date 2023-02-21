@extends('admin.admin_master')

@section('content')

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
                          <th scope="col">Image Name</th>
                          <th scope="col">Image</th>
                          <th scope="col">Create At</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody> 
                        {{-- @php 
                        $i = 1;
                        @endphp --}}
                        @foreach ($images as $image)
                          <tr>
                            <th scope="row">{{ $images->firstItem()+$loop->index }}</th>
                            <td>{{ $image->image_name }}</td>
                            <td>
                              <img src="{{ asset($image->image) }}" alt="gambar all image" style="width: 150px">
                            </td>
                            <td>
                              @if ($image->created_at == NULL)
                                <p>Data Kosong</p>
                              @else
                                {{ Carbon\Carbon::parse($image->created_at)->diffForHumans() }}
                              @endif 
                            </td> 
                            <td>
                              <a href="{{ url('edit/image/'. $image->id) }}" class="btn btn-info">EDIT</a>
                              <a href="{{ url('delete/image/'. $image->id) }}" class="btn btn-danger">DELETE</a>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{ $images->links() }}
                  </div>

                  <div class="col-md-4">
                    @if (session ('succes'))
          
                             
                      <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{ session('succes') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @endif
                    
                    <div class="card-header">
                      Add Image
                    </div>

                    <form action="{{ route('add.image') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="card-body">
                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Name Image</label>
                          <input type="text" class="form-control" name="image_name" id="exampleFormControlInput1" placeholder="Input name image">
                  
                          @error('image_name')
                            {{ $message }}
                          @enderror
                        </div>

                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Place Image</label>
                          <input type="file" class="form-control" name="image" id="exampleFormControlInput1" placeholder="Input file">
                  
                          @error('image')
                            {{ $message }}
                          @enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary" role="button" value="Submit">Add Image</button>
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


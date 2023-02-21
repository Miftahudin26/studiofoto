<x-app-layout>
  <x-slot name="header">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Hii.. <b>{{ Auth::user()->name }}</b> | <a href="{{ route('trash.category') }}">Trash</a>
      </h2>
  </x-slot>

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
                          <th scope="col">Name Category</th>
                          <th scope="col">User</th>
                          <th scope="col">Create At</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody> 
                        {{-- @php
                        $i = 1;
                        @endphp --}}
                        @foreach ($categories as $category)
                          <tr>
                            <th scope="row">{{ $categories->firstItem()+$loop->index }}</th>
                            <td>{{ $category->name_category }}</td>
                            <td>{{ $category->user->name }}</td>
                            <td>
                              @if ($category->created_at == NULL)
                                <p>Data Kosong</p>
                              @else
                                {{ Carbon\Carbon::parse($category->created_at)->diffForHumans() }}
                              @endif 
                            </td> 
                            <td>
                              <a href="{{ url('category/edit/'.$category->id) }}" class="btn btn-info">EDIT</a>
                              <a href="{{ url('category/soft/delete/'.$category->id) }}" class="btn btn-danger">DELETE</a>
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
                        
                        <button type="submit" class="btn btn-primary" role="button" value="Submit">Add Category</button>
                        </div>
                      </form>                            
                    </div>
                  </div>
                </div>
                <div class="sticky-top">
                  {{ $categories->links() }}
                </div>
              </div>
          </div>

      </div>
  </div>
</x-app-layout>

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


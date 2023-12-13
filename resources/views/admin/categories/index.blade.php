
@extends('layouts.admin');


@section('content')

<h1>categories</h1>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Categories Table</h4>

            <a href="{{ route('admin.categories.create') }}" class="btn btn-info m-1">Create</a>
        <a href=""></a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-md">
            <tbody><tr>
              <th>#</th>
              <th>Name</th>
              <th> Slug</th>
              <th>Action</th>
            </tr>
            @foreach ($categories as $category)
            <tr>
              <td>{{ $category->id}}</td>
              <td>{{ $category->name_uz }}</td>
              <td>{{ $category->slug }}</td>

              <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <td><button type="submit" class="btn btn-danger" onclick="confirm('Deletmi')">Delete</a></button>
              </form>

               <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-success">Edit</a>
               <a href="{{ route('admin.categories.show', $category->id) }}" class="btn btn-primary">Show</a>
            </tr>
            {{-- <a href="" class="btn">salom</a> --}}
            @endforeach
           
          </tbody></table>
        </div>
      </div>
      <button class="btn btn-success">Kirish</button>

      <div class="card-footer text-right"> 
        <nav class="d-inline-block"> 

         {{ $categories->links() }}
        <h1>salom</h1>
         </nav> 
       </div> 
    </div>
  </div>

@endsection
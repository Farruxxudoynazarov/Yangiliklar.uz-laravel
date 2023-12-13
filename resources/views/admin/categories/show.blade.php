





@extends('layouts.admin');


@section('content')

<h1>categories</h1>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Categories Table</h4>

            <a href="{{ route('admin.categories.index') }}" class="btn btn-info m-1">Back</a>
        <a href=""></a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-md">
            <tbody><tr>
              <th>#</th>
              <th>Name UZ</th>
              <th>Name RU</th>
              <th>Slug</th>
              <th>Meta Title</th>
              <th>Meta Description</th>
              <th>Meta Keywords</th>
              <th>Created At</th>
            </tr>
            <tr>
              <td>{{ $category->id}}</td>
              <td>{{ $category->name_uz }}</td>
              <td>{{ $category->name_ru }}</td>
              <td>{{ $category->slug }}</td>
              <td>{{ $category->meta_title }}</td>
              <td>{{ $category->meta_description }}</td>
              <td>{{ $category->created_at }}</td>
            </tr>
           
          </tbody></table>
        </div>
      </div>

    
    </div>
  </div>

@endsection


@extends('layouts.admin')

@section('content')

<div class="card">
  
    <div class="card-header">
      <h4>Create category</h4>
    </div>
   
    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="card-body">
       <div class="form-group">
        <label>Name (UZ)</label>
        <input type="text" class="form-control @error('name_uz') is-invalid @enderror" name="name_uz" value="{{ $category->name_uz }}">
        @error('name_uz')
          <div class="invalid-feedback">
{{ $message }}
          </div>
        @enderror
      </div>
      <div class="form-group">
        <label>Name (RU)</label>
        <input type="text" class="form-control" name="name_ru" value="{{ $category->name_ru }}">
      </div>
        <div class="form-group">
        <label>Meta title</label>
        <input type="text" class="form-control" name="meta_title" value="{{ $category->meta_title }}">
      </div>
         <div class="form-group">
        <label>Meta description</label>
        <input type="text" class="form-control" name="meta_description" value="{{ $category->meta_description }}">
      </div>
         <div class="form-group">
        <label>Meta keywords</label>
        <input type="text" class="form-control" name="meta_keywords" value="{{ $category->meta_keywords }}">
      </div>
      
      <button type="submit" class="btn btn-success">
        Save
      </button>
      </div>

  </form> 
</div>


@endsection


@extends('layouts.admin')

@section('content')

<div class="card">
  
    <div class="card-header">
      <h4>Create category</h4>
    </div>
   
    <form action="{{ route('admin.categories.store') }}" method="POST">
      @csrf
      <div class="card-body">
       <div class="form-group">
        <label>Name (UZ)</label>
        <input type="text" class="form-control @error('name_uz') is-invalid @enderror" name="name_uz">
        @error('name_uz')
          <div class="invalid-feedback">
{{ $message }}
          </div>
        @enderror
      </div>
      <div class="form-group">
        <label>Name (RU)</label>
        <input type="text" class="form-control"  @error('name_uz') is-invalid @enderror" name="name_ru">
      </div>
        <div class="form-group">
        <label>Meta title</label>
        <input type="text" class="form-control"  @error('meta_title') is-invalid @enderror" name="meta_title">
      </div>
         <div class="form-group">
        <label>Meta description</label>
        <input type="text" class="form-control"  @error('meta_description') is-invalid @enderror" name="meta_description">
      </div>
         <div class="form-group">
        <label>Meta keywords</label>
        <input type="text" class="form-control"  @error('meta_keywords') is-invalid @enderror" name="meta_keywords">
      </div>
      
      <button type="submit" class="btn btn-success">
        Save
      </button>
      </div>

  </form> 
</div>


@endsection
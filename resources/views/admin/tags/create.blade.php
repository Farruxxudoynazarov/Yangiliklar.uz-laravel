

@extends('layouts.admin')
@section('title')
Create Tag
@endsection
@section('content')

<div class="card">
  
    <div class="card-header">
      <h4>Create category</h4>
    </div>
   
    <form action="{{ route('admin.tag.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="card-body">
       <div class="form-group">
        <label>Name (UZ)</label>
        <input type="text" name="name_uz" class="form-control" @error('name_uz')  @enderror>
        @error('name_uz')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
       </div>


       <div class="form-group">
        <label>Name (RU)</label>
        <input type="text" name="name_ru" class="form-control" @error('name_ru')  @enderror>
        @error('name_ru')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
       </div>

      <button type="submit" class="btn btn-success">
        Save
      </button> 
      </div>

  </form> 
</div>


@endsection



@section('js')
   <script src="//cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
   <script src="/public/ckeditor/ckeditor.js"></script>

   {{-- <script src="/public/ckeditor/skins "></script> --}}
   <script>
    $('.ckeditor').ckeditor()
   </script>

   <script>
    CKEDITOR.replace('body_uz', {
        filebrowserUploadUrl: "{{ route('admin.upload', ['_token' => csrf_token()]) }}",
        filebrowserUploadMethod: 'form'
    });
    CKEDITOR.replace('body_ru', {
        filebrowserUploadUrl: "{{ route('admin.upload', ['_token' => csrf_token()]) }}",
        filebrowserUploadMethod: 'form'
    });


   </script>
@endsection



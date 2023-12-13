






@extends('layouts.admin')

@section('content')

<div class="card">
  
    <div class="card-header">
      <h4>Tag </h4>
    </div>
   
    <form action="{{ route('admin.tag.update', $tag->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
      @csrf
      <div class="card-body">
       <div class="form-group">
        <label>Title (UZ)</label>
        <input type="text" class="form-control" value="{{$tag->name_uz }}"  @error('name_uz') is-invalid @enderror" name="name_uz">
        @error('name_uz')
          <div class="invalid-feedback">            
{{ $message }}
          </div>
        @enderror
      </div>

      <div class="form-group">
        <label>Title (UZ)</label>
        <input type="text" class="form-control" value="{{$tag->name_ru }}"  @error('name_ru') is-invalid @enderror" name="name_ru">
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





@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="/admin/assets/bundles/select2/dist/css/select2.min.css">

@endsection
@section('content')

<div class="card">
  
    <div class="card-header">
      <h4>Create category</h4>
    </div>
   
    <form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="card-body">
       <div class="form-group">
        <label>Title (UZ)</label>
        <input type="text" class="form-control"  @error('title_uz') is-invalid @enderror" name="title_uz">
        @error('title_uz')
          <div class="invalid-feedback">
{{ $message }}
          </div>
        @enderror
      </div>
      <div class="form-group">
        <label>Title (RU)</label>
        <input type="text" class="form-control @error('title_ru') is-invalid @enderror" name="title_ru">
        @error('title_ru')
          <div class="invalid-feedback">
{{ $message }}
          </div>
        @enderror
      </div>
      <div class="form-group">
        <label>Body (UZ)</label>
        <textarea  name="body_uz" class="form-control ckeditor @error('body_uz') is-invalid @enderror"></textarea>
        @error('title_ru')
          <div class="invalid-feedback">
{{ $message }}
          </div>
        @enderror
      </div>
        <div class="form-group">
        <label>Body (RU)</label>
        <textarea  name="body_ru" class="form-control ckeditor @error('body_ru') is-invalid @enderror"></textarea>
        @error('title_ru')
          <div class="invalid-feedback">
{{ $message }}
          </div>
        @enderror
      </div>

         <div class="form-group">
        <label>Image</label>
        <input type="file" class="form-control"  @error('image') is-invalid @enderror" name="image">
        @error('title_ru')
          <div class="invalid-feedback">
{{ $message }}
          </div>
        @enderror
      </div>

      <div>
        <label for="">Category</label>
        <select name="category_id" id="" class="form-control">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name_uz }}</option>
            @endforeach
        </select>
      </div>




      <div class="form-group">
        <label for="">Tags</label>
        <select name="tags[]" class="form-control select2" id="" multiple>
          @foreach ($tags as $tag)
            <option value="{{ $tag->id }}">{{ $tag->name_uz }}</option>
          @endforeach
        </select>

      </div>


<div class="form-group">
  <div class="control-label"> is Special? </div>
  <label for="" class="custom-switch mt-2">
     <input type="checkbox" name="is_special" value="1">
     <span class="custom-switch mt-2"></span>
  </label>

</div>


      <div class="form-group">
        <label>Meta title</label>
        <input type="text" class="form-control"  @error('meta_title') is-invalid @enderror" name="meta_title">
        @error('title_ru')
          <div class="invalid-feedback">
{{ $message }}
          </div>
        @enderror
      </div>

      <div class="form-group">
        <label>Meta description</label>
        <input type="text" class="form-control"  @error('meta_description') is-invalid @enderror" name="meta_description">
        @error('meta_description')
          <div class="invalid-feedback">
{{ $message }}
          </div>
        @enderror
      </div>
         <div class="form-group">
        <label>Meta keywords</label>
        <input type="text" class="form-control"  @error('metakeywords') is-invalid @enderror" name="metakeywords">
        @error('metakeywords')
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
     <script src="/admin/assets/bundles/select2/dist/js/select2.full.min.js"></script>

@endsection



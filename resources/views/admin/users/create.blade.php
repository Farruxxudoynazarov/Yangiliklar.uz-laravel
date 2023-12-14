

@extends('layouts.admin')
@section('title')
Create Tag
@endsection
@section('content')

<div class="card">
  
    <div class="card-header">
      <h4>Create category</h4>
    </div>
   
    <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="card-body">
       <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control">
      
       </div>


       <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control">

       </div>
       <div class="form-group">
        <label>Password</label>
        <input type="text" name="password" class="form-control">
       </div>

       <div>
           <select name="roles[]" id="" class="form-control" multiple style="height: 100px">
            @foreach ($roles as $role)
            <option value="{{ $role->name }}">{{ $role->name }}</option>                
            @endforeach
           </select>
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



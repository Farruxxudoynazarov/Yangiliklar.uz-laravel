




@extends('layouts.admin')
@section('title')
Create Role
@endsection
@section('content')

<form action="{{ route('admin.roles.store') }}" method="POST">

    @csrf

    <div class="card p-5">

        
    <div>
        <h4>Create role</h4>
    </div>
    <div>
        <div>
            <label for="">Role Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        {{-- <div>
            <label for="">Permission</label>
            <input type="text" name="name" class="form-control" required>
        </div> --}}
        <div>
            <label for="">Permissions</label>
            <br>
            @foreach ($permissions as $permission)
                <input type="checkbox" name="permissions[]" value="{{ $permission->id }}">
                <span>{{ $permission->name }}</span> &nbsp;
            @endforeach
        </div>
    
    </div>

    <div class="card-footer text-right">
        <button type="submit" class="btn btn-primary mr-1">Save</button>
    </div>
    </div>

</form>


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




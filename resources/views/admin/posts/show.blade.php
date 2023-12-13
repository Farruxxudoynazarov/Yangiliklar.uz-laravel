


@extends('layouts.admin');

@section('css')

<link rel="stylesheet" href="/admin/assets/css/app.min.css">
<link rel="stylesheet" href="/admin/assets/bundles/datatables/datatables.min.css">
<link rel="stylesheet" href="/admin/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4> Post id - {{ $post->id }}</h4>
          <a href="{{ route('admin.post.index') }}" class="btn btn-success">Back</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <div id="table-1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
              

                  
                </div>
                <div class="row">
                    <div class="col-sm-12">
                      <table class="table table-striped dataTable no-footer" id="table-1" role="grid" aria-describedby="table-1_info">
                          <thead>
             <tr>
                <th>Title UZ</th> <td>{{ $post->title_uz }}</td>
             </tr>
             <tr>
                <th>Title RU</th> <td>{{ $post->title_ru }}</td>
             </tr>
             <tr>
                <th>Body UZ</th> <td>{!! $post->body_uz !!}</td>

             </tr>
             <tr>
                <th>Body RU</th> <td>{!! $post->body_ru!!}</td>
             </tr>
             <tr>
                <th>Category UZ</th> <td>{{$post->category->name_uz}}</td>
             </tr>
             <tr>
               <th>Tags</th> <td>
                  @foreach ($post->tags as $tag)
                      {{ $tag->name_uz }},
                  @endforeach
               </td>
            </tr>
             <tr>

                <th>Image</th> <td>
                    <img width="80px" height="70px" src="/site/image/posts/{{ $post->image }}" alt="img">
                    {{-- <img src="/public/site/images/posts/{{ $post->image }}" width="100" alt=""> --}}
                </td>
             </tr>
             <tr>
                <th>Slug</th> <td>{{$post->slug}}</td>
             </tr>
             <tr>
                <th>Meta title</th> <td>{{$post->meta_title}}</td>
             </tr>
             <tr>
                <th>Meta Description</th> <td>{{$post->meta_description}}</td>
             </tr>
             <tr>
                <th>Meta Keywords</th> <td>{{$post->metakeywords}}</td>
             </tr>
             <tr>
                <th>View</th> <td>{{$post->view}}</td>
             </tr>
                          </thead>
                         <tbody>
                       
                
                         </tbody>
                      </table>
        </div>
    </div>
   
   
</div>
</div>
</div>
</div>

          </div>
          
        </div>
      </div>
    </div>
  </div>


  @endsection

  @section('js')

  <script src="/admin/assets/bundles/datatables/datatables.min.js"></script>
  <script src="/admin/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="/admin/assets/bundles/jquery-ui/jquery-ui.min.js"></script>

  <script src="/admin/assets/js/page/datatables.js"></script>
  <!-- Template JS File -->
  <!-- Custom JS File -->
  @endsection
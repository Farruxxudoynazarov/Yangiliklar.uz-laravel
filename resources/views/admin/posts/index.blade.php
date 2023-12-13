
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
          <h4>Basic DataTables</h4>
          <a href="{{ route('admin.post.create') }}" class="btn btn-success">Create Posts</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <div id="table-1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
              

                  
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-striped dataTable no-footer" id="table-1" role="grid" aria-describedby="table-1_info">
              <thead>
                <tr role="row">
                    <th>T/R</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tbody>
                       
                
            
                

                @foreach ($posts as $post)
                    <tr>
                        <td>
                            {{ $loop->iteration }}
                        </td>
                        <td>
                            {{ $post->title_uz }}
                        </td>
                        <td>
                          {!! $post->body_uz !!}
                        </td>
                        <td>
                            {{-- {{ $post->category->name_uz }} --}}
                        </td>
                        <td>
                            <img width="80px" height="70px" src="/site/image/posts/{{ $post->image }}" alt="img">
                            {{-- @dd( $post->image); --}}
                        </td>
                        <td>
                            <a href="{{ route('admin.post.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('admin.post.show', $post->id) }}" class="btn btn-success">Show</a>

                            <form style="display: inline" action="{{ route('admin.post.destroy', $post->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" href="#" onclick="confirm('O\'chirilsinmi?')" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                
                
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
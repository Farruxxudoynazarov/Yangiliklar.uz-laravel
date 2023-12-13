


@extends('layouts.admin');

@section('title')
Tags
@endsection
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
          <a href="{{ route('admin.tag.create') }}" class="btn btn-success">Create Tag</a>
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
                              <th>T/R</th>
                              <th>Name (UZ)</th>
                              <th>Name (RU)</th>
                              <th> Slug </th>
                              <th> Created_at </th>
                              <th>Buttons</th>
                            </tr>
                          </thead>
                          <tbody>
                             @foreach ($tags as $tag)
                                   <tr>
                                    <td>
                                      {{ $tag->id }}
                                    </td>
                                    <td>
                                      {{ $tag->name_uz }}
                                    </td>
                                  
                                    <td>
                                      {{ $tag->name_ru }}
                                    </td>
                                
                                    <td>
                                      {{ $tag->slug}}
                                    </td>
                               
                                    <td>
                                      {{ $tag->created_at }}
                                    </td>
                                    <td>
                                      <form style="display:inline" action="{{ route('admin.tag.destroy', $tag->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Delete</button>
                                      </form>
                                      <a href="{{ route('admin.tag.show', $tag->id) }}" class="btn btn-success">Show</a>
                                      <a href="{{ route('admin.tag.edit', $tag->id)}}" class="btn btn-primary">Edit</a>
                                    </td>
                                   </tr>
                             @endforeach
                          </tbody>
                         </table>
                         {{ $tags->links() }}
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
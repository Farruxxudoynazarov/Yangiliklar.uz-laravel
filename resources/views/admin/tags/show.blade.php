




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
          <h4> Tag id - {{ $tag->id }}</h4>
          <a href="{{ route('admin.tag.index') }}" class="btn btn-success">Back</a>
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
                <th>Title UZ</th> <td>{{ $tag->name_uz }}</td>
             </tr>
             <tr>
                <th>Title RU</th> <td>{{ $tag->name_ru }}</td>
             </tr>

             <tr>
                <th>Slug</th> <td>{{$tag->slug}}</td>
             </tr>
             <tr>
                <th>
                    Created_at  <td>{{ $tag->created_at }}</td>
                </th>
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
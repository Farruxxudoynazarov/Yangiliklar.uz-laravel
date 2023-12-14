





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
          <h4>Rollar jadvali</h4>
          <a href="{{ route('admin.roles.create') }}" class="btn btn-success">Create Role</a>
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
                    <th>Role Name</th>
                
                    <th>Buttons</th>
                </tr>
              </thead>
              <tbody>
                       
                
                @foreach ($roles as $role)
                    <tr>
                        <td>
                            {{ $loop->iteration }}
                        </td>
                        <td>
                            {{ $role->name }}
                        </td>
                    
                        <td>
                            <a href="{{ route('admin.users.edit', $role->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('admin.users.show', $role->id) }}" class="btn btn-success">Show</a>

                            <form style="display: inline" action="{{ route('admin.users.destroy', $role->id) }}" method="POST">
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
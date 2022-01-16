@extends('adminlte::page')
@section('plugins.Datatables',true)
@section('title')
List of Employees | laravel employee App
@endsection

@section('content_header')

@endsection

@section('content')

     <div class="row">
          <div class="col-lg-10 col-10 mx-auto">
              <div class="card my-3">
                  <div class="card-header bg-info">
                      <div class="text-center text-uppercase ">
                         <h3>List of Employees</h3>
                      </div>
                  </div>
                  <div class="card-body">
                      <table id="myTable" class="table table-bordered table-striped">
                          <thead>
                              <tr>
                                  <th>id</th>
                                  <th>full-Name</th>
                                  <th>Department</th>
                                  <th>Hired-Date</th>
                                  <th></th>
                              </tr>
                            </thead>
                            <tbody>
                                 @foreach ($employees as $key => $employee)
                                 <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $employee->fullname }}</td>
                                    <td>{{ $employee->depart }}</td>
                                    <td>{{ $employee->hire_date }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('employee.show',$employee->registration_number) }}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                        <a href="{{ route('employee.destroy',$employee->registration_number) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        <a href="{{ route('employee.edit',$employee->registration_number) }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                    </td>
                                </tr>
                                 @endforeach
                            </tbody>

                      </table>
                  </div>
              </div>

          </div>

@endsection

@section('js')
<script>
    $(document).ready(function(){
        $('#myTable').DataTable({
            dom : 'Bfrtip',
            buttons : [
                'copy',
                'excel',
                'pdf',
                'csv',
                'print',
                'colvis',
                'pageLength',
            ]
        });
    });

</script>
@if (session()->has('success'))
    <script>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: '{{session()->get("success")}}',
            showConfirmButton: false,
            timer: 1500
        })
    </script>
@endif

@endsection

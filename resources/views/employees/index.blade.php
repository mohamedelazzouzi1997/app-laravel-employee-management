@extends('adminlte::page')
@section('plugins.Datatables',true)
@section('title')
List of Employees | laravel employee App
@endsection

@section('content_header')
<h1><i class="fa fa-list"></i> List of Employees</h1>
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
                            <tbody class='text-center'>
                                 @foreach ($employees as $key => $employee)
                                 <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $employee->fullname }}</td>
                                    <td>{{ $employee->depart }}</td>
                                    <td>{{ $employee->hire_date }}</td>
                                    <td class="text-center">

                                        <button onclick="deleteEmp({{$employee->registration_number}})" type='submit' class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        <a href="{{ route('employee.show',$employee->registration_number) }}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                        <a href="{{ route('employee.edit',$employee->registration_number) }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                        <form method='POST' id='{{$employee->registration_number}}' action="{{ route('employee.destroy',$employee->registration_number) }}">
                                            @csrf
                                            @method('delete')
                                        </form>
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
    function deleteEmp(id){
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {

                if (result.isConfirmed) {
                    document.getElementById(id).submit();
                    Swal.fire(
                    'Deleted!',
                    'Employee has been deleted.',
                    'success'
                )
            }
        })
    }

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

@extends('adminlte::page')
@section('plugins.Datatables',true)
@section('title')
Employee Certification | laravel employee App
@endsection

@section('content_header')
<h1><i class="fa fa-user"></i> Employee Certification </h1>
@endsection

@section('content')
<div class="container">
     <div class="row my-5">
          <div class="col-lg-8 col-10 mx-auto">
            <p class="lead">
                <b>{{ $employee->fullname }}</b> is presently employed with me in the following :
            </p>
            <p class="lead">
                <b>{{ $employee->depart }}</b> department
            </p>
            <p class="lead">
                he is requesting a vacation starting from <b>_________</b>
            </p>
            <p class="lead">
                and ends on <b>_________</b>
            </p>
            <p class="m-5">
                ________
            </p>

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

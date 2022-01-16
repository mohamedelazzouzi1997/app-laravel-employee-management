@extends('adminlte::page')

@section('title')
Home | laravel employee App
@endsection

@section('content_header')
<h1>Dashboard</h1>
@endsection

@section('content')

     <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ App\Models\Employee::count() }}</h3>

                <p>Employees</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="{{ url('admin/employee') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

@endsection

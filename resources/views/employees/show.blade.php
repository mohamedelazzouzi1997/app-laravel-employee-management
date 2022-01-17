@extends('adminlte::page')
@section('plugins.Datatables',true)
@section('title')
Employee Details | laravel employee App
@endsection

@section('content_header')
<h1><i class="fa fa-user text-red"></i> Employee Details</h1>
@endsection

@section('content')
{{-- @include('layouts.alert') --}}
<div class="container">

     <div class="row">
          <div class="col-lg-8 mx-auto">
              <div class="card my-3">
                  <div class="card-header bg-info">
                      <div class="text-center text-uppercase ">
                         <h3 class="text-dark">{{ $employee->fullname }} <i class="fa fa-user"> </i></h3>
                      </div>
                  </div>
                  <div class="my-2 text-center text-uppercase border-dark">
                    <a href="{{ route('employee.vacation',$employee->registration_number) }}" class="btn btn-outline-primary">
                        Vacation Request
                    </a>
                     <a href="{{ route('employee.certification',$employee->registration_number) }}" class="btn btn-outline-primary">
                        Work certificate Request
                    </a>
                  </div>

                  <div class="card-body">

                        <div class="form-group">
                            <label class="text-info" for="fullname">Full Name: @error('fullname')<span class="text-danger">{{ $message }} </span>@enderror</label>
                            <input type="text" name="fullname" placeholder="Full Name" class="form-control @error('fullname') is-invalid @enderror" disabled value="{{$employee->fullname }}">
                        </div>
                          <div class="form-group">
                            <label class="text-info" for="registration_number">Registration Number: @error('registration_number')<span class="text-danger">{{ $message }} </span>@enderror</label>
                            <input type="text" name="registration_number" placeholder="Registration Number" disabled class="form-control @error('registration_number') is-invalid @enderror" value="{{ $employee->registration_number }}">
                        </div>
                          <div class="form-group">
                            <label class="text-info" for="depart">Departement: @error('depart')<span class="text-danger">{{ $message }} </span>@enderror</label>
                            <input type="text" name="depart" placeholder="Departement" disabled class="form-control @error('depart') is-invalid @enderror" value="{{ $employee->depart }}">
                        </div>
                          <div class="form-group">
                            <label class="text-info" for="hire_date">Hire date: @error('hire_date')<span class="text-danger">{{ $message }} </span>@enderror</label>
                            <input type="date" name="hire_date" placeholder="Hire date" disabled class="form-control @error('hire_date') is-invalid @enderror" value="{{ $employee->hire_date }}">
                        </div>
                          <div class="form-group">
                            <label class="text-info" for="phone">Phone: @error('phone')<span class="text-danger">{{ $message }} </span>@enderror</label>
                            <input type="tel" name="phone" placeholder="Phone" disabled class="form-control @error('phone') is-invalid @enderror" value="{{ $employee->phone}}">
                        </div>
                        <div class="form-group">
                            <label class="text-info" for="address">Address: @error('address')<span class="text-danger">{{ $message }} </span>@enderror</label>
                            <input type="text" name="address" placeholder="Address" disabled class="form-control @error('address') is-invalid @enderror" value="{{ $employee->address }}">
                        </div>
                        <div class="form-group">
                            <label class="text-info" for="city">City: @error('city')<span class="text-danger">{{ $message }} </span>@enderror</label>
                            <input type="text" name="city" placeholder="City" disabled class="form-control @error('city') is-invalid @enderror" value="{{$employee->city}}">
                        </div>
                  </div>
              </div>

          </div>
        </div>
</div>
@endsection

@section('js')

@endsection

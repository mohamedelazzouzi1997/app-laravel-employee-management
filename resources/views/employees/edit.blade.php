@extends('adminlte::page')
@section('plugins.Datatables',true)
@section('title')
Edit Employees | laravel employee App
@endsection

@section('content_header')
<h1><i class="fa fa-user-edit text-red"></i> Edit Employees</h1>
@endsection

@section('content')
{{-- @include('layouts.alert') --}}
<div class="container">

     <div class="row">
          <div class="col-lg-8 mx-auto">
              <div class="card my-3">
                  <div class="card-header bg-info">
                      <div class="text-center text-uppercase ">
                         <h3>Edit Employees  <i class="fa fa-user-edit"></i></h3>
                      </div>
                  </div>
                  <div class="card-body">
                    <form action="{{ route('employee.update',$employee->registration_number) }}" class="mt-5" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="text-info" for="fullname">Full Name: @error('fullname')<span class="text-danger">{{ $message }} </span>@enderror</label>
                            <input type="text" name="fullname" placeholder="Full Name" class="form-control @error('fullname') is-invalid @enderror" value="{{ old('fullname',$employee->fullname) }}">
                        </div>
                          <div class="form-group">
                            <label class="text-info" for="registration_number">Registration Number: @error('registration_number')<span class="text-danger">{{ $message }} </span>@enderror</label>
                            <input type="text" name="registration_number" placeholder="Registration Number" class="form-control @error('registration_number') is-invalid @enderror" value="{{ old('registration_number',$employee->registration_number) }}">
                        </div>
                          <div class="form-group">
                            <label class="text-info" for="depart">Departement: @error('depart')<span class="text-danger">{{ $message }} </span>@enderror</label>
                            <input type="text" name="depart" placeholder="Departement" class="form-control @error('depart') is-invalid @enderror" value="{{ old('depart',$employee->depart) }}">
                        </div>
                          <div class="form-group">
                            <label class="text-info" for="hire_date">Hire date: @error('hire_date')<span class="text-danger">{{ $message }} </span>@enderror</label>
                            <input type="date" name="hire_date" placeholder="Hire date" class="form-control @error('hire_date') is-invalid @enderror" value="{{ old('hire_date',$employee->hire_date) }}">
                        </div>
                          <div class="form-group">
                            <label class="text-info" for="phone">Phone: @error('phone')<span class="text-danger">{{ $message }} </span>@enderror</label>
                            <input type="tel" name="phone" placeholder="Phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone',$employee->phone) }}">
                        </div>
                        <div class="form-group">
                            <label class="text-info" for="address">Address: @error('address')<span class="text-danger">{{ $message }} </span>@enderror</label>
                            <input type="text" name="address" placeholder="Address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address',$employee->address) }}">
                        </div>
                        <div class="form-group">
                            <label class="text-info" for="city">City: @error('city')<span class="text-danger">{{ $message }} </span>@enderror</label>
                            <input type="text" name="city" placeholder="City" class="form-control @error('city') is-invalid @enderror" value="{{ old('city',$employee->city) }}">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary form-control" type="submit">Update Employee  <i class="fa fa-user-edit" ></i></button>
                        </div>
                    </form>

                  </div>
              </div>

          </div>
</div>
@endsection

@section('js')

@endsection

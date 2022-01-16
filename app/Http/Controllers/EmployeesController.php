<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();

        return \view('employees.index')->with([
            'employees' => $employees
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $this->validate($request,[
            'fullname' => 'required',
            'registration_number' => 'required|numeric|unique:employees,registration_number',
            'depart' => 'required',
            'hire_date' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required',
            'city' => 'required',
        ]);
        Employee::create($request->except('_token'));
        return \redirect()->route('employee.index')->with([
            'success' => 'Employee added successfully'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::where('registration_number',$id)->first();

        return \view('employees.edit')->with([
            'employee' => $employee
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::where('registration_number',$id)->first();
               $this->validate($request,[
            'fullname' => 'required',
            'registration_number' => 'required|numeric|unique:employees,id,'.$employee->registration_number,
            'depart' => 'required',
            'hire_date' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required',
            'city' => 'required',
        ]);
        $employee->update($request->except('_token','_method'));
        return \redirect()->route('employee.index')->with([
            'success' => 'Employee Updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

         $employee = Employee::where('registration_number',$id)->first();
        $employee->delete();
         return \redirect()->route('employee.index')->with([
            'success' => 'Employee Deleted successfully'
        ]);
    }

}

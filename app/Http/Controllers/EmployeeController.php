<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees=Employee::all(); // static functions
        return view('employee/index',compact('employees'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('employee/create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all(); // view data //instance method
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $dob = $request->input('dob');
        $basic_salary = $request->input('basic_salary');


        $employee = new Employee();

        $employee->first_name = $first_name;
        $employee->last_name = $last_name;
        $employee->dob = $dob;
        $employee->basic_salary = $basic_salary;
        $employee->save();

        return view('employee/index');
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
        $employee=Employee::find($id);
        return view('employee/show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee=Employee::find($id);
        return view('employee/edit',compact('employee'));
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
        //
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $dob = $request->input('dob');
        $basic_salary = $request->input('basic_salary');


        $employee = Employee::find($id);

        $employee->first_name = $first_name;
        $employee->last_name = $last_name;
        $employee->dob = $dob;
        $employee->basic_salary = $basic_salary;
        $employee->save();

        return view('employee/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $employee = Employee::find($id);
        $employee->delete();
        return view('employee/index');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Carbon\Carbon;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students=Student::all(); // static functions
        return view('student/index',compact('students'));
                //OR
        //return view('student.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('student/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request); // laravel format
        $data = $request->all(); // view data
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $gender = $request->input('gender');
        $grade = $request->input('grade');
        $address = $request->input('address');
        //$subject = $request->input('subject');
        $dob = $request->input('dob');
        $age = Carbon::parse($request->dob)->diff(Carbon::now())->y;
        
        if($age <=  18){
            return "Youre're below 18 years so, You Cant Register ";
            return redirect()->route('students.index');
        }
        
        $email = $request->input('email');
        $mobile = $request->input('mobile');

        $student = new Student();

        $student->first_name = $first_name;
        $student->last_name = $last_name;
        $student->gender = $gender;
        $student->grade = $grade;
        $student->address = $address;
        $student->subject = implode(',' ,$request->subject);
        $student->dob = $dob;
        $student->email = $email;
        $student->mobile = $mobile;
        $student->save();

        return redirect()->route('students.index');
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
        $student=Student::find($id);
        return view('student/show',compact('student'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $student=Student::find($id);
        return view('student/edit',['student' => $student]);
   
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
        $gender = $request->input('gender');
        $grade = $request->input('grade');
        $address = $request->input('address');
        $subject = $request->input('subject');
        $dob = $request->input('dob');
        $email = $request->input('email');
        $mobile = $request->input('mobile');

        $student = Student::find($id);

        $student->first_name = $first_name;
        $student->last_name = $last_name;
        $student->gender = $gender;
        $student->grade = $grade;
        $student->address = $address;
        $student->subject = implode(',' ,$request->subject);
        $student->dob = $dob;
        $student->email = $email;
        $student->mobile = $mobile;
        $student->save();

        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return"delete";
    }
}

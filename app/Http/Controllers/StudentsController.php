<?php

namespace App\Http\Controllers;

use App\Events\NewRegistrationEvent;
use App\Mail\StudentMail;
use App\Student;
use App\Year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class StudentsController extends Controller
{

    public function index()
    {
        $students = Student::all();
        return view('students.index',compact('students'));

    }


    public function create()
    {
        $student = new Student();
        $years = Year::all();
        return view('students.apply',compact('student','years'));
    }


    public function store()

    {

        $data=Student::create($this->validateData());
        event(New NewRegistrationEvent($data));


        //return redirect('/students/create')->with('success','Thank for your Application. We will be in touch soon');
    }

    public function show(Student $student)
    {
       return view('students.show',compact('student'));
    }


    public function edit(Student $student)
    {
        $years = Year::all();

        return view('students.edit', compact('student','years'));
    }


    public function update(Request $student)
    {
       update($this->validateData());
    }


    public function destroy(Student $student)
    {
        $student->delete();

       return redirect('/home')->with('status','one student is deleted');
    }

    private function validateData()
    {
        return  request()->validate(
            [
                'firstName'=>'required|min:3|max:30',
                'middleName'=>'required|min:3|max:30',
                'lastName'=>'required|min:3|max:30',
                'email'=>'required|email',
                'phone'=>'required|min:10|max:12',
                'registration'=>'required|max:12',
                'speciality'=>'',
                'gender'=>'',
                'marriage'=>'required',
                'year_id'=>'required',
                'iptPlace'=>'required|min:3|max:30',
                'address'=>'required|min:3|max:30',

            ]
        );
    }
}

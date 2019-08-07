<?php

namespace App\Http\Controllers;

use App\Opportunity;
use App\Student;
use Illuminate\Http\Request;

class OpportunityController extends Controller
{
    public function index()

    {
        $fields = Opportunity::all();
        return view('main.opportunities',compact('fields'));
    }
    public function create()

    {
        $students = Student::all();
        return view('main.replies',compact('students'));
    }
    public function store()
    {
        $data= request()->validate(
          [
              'field'=>'required',
              'company'=>'required',
              'contact'=>'required',
              'chances'=>'required',
              'location'=>'required',
          ]
        );

        Opportunity::create($data);
        return redirect('/opportunities');
    }


}

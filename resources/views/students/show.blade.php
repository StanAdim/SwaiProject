
@extends('layouts.app')
@section('content')

@section('jumbo')
    <h1 class="display-4 ">Important Detail Of {{$student->firstName}}</h1>

<a href="/students/edit/{{$student->id}}" class="btn btn-link text-danger ">Edit my Info</a>


    <p class="lead">Name: <em>{{$student->firstName}} {{$student->middleName}} {{$student->lastName}}</em></p>
    <p class="lead">E-Mail: <em>{{$student->email}} </em></p>
    <p class="lead">Registration: <em>{{$student->registration}} </em></p>
    <p class="lead">Speciality: <em>{{$student->speciality}} </em></p>
    <p class="lead">Academic Year: <em>{{$student->yearLevel}} </em></p>
    <p class="lead">Permanent Address: <em>{{$student->address}} </em></p>
    <p class="lead">Place Of Interest: <em>{{$student->iptPlace}} </em></p>
   
    



    

@endsection

@endsection
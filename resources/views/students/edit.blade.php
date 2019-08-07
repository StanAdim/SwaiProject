@extends('layouts.app')
@section('content')
    <div class="container-fluid" id="cardbodyform">

<h3 class="h3">Edit your info {{$student->firstName}}</h3>

        <div class="card">

            <div class="card-body" id="cardbodyform">
                <form action="/students/{{$student->id}}" class="" method="POST">
                    @include('students.form')
                    @method('PATCH')

                    <button class="btn  btn-lg btn-outline-success " type="submit">SAVE</button>
                </form>

            </div>{{--END CARD BODY--}}







    </div>
@endsection
@extends('layouts.app')

@section('content')
    @include('layouts.adminNav')
    <div class="row justify-content-center">
        <div class="col-md-6">
            @if(session()->has('status'))
                <div class="alert alert-danger">
                        <em class="lead">{{session()->get('status')}}</em>
                </div>
                @endif

        </div>
    </div>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-2">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    You are logged in!
                </div>
            </div>
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h5 class="h5 text-center">APPLIED STUDENT LIST</h5>
                </div>

                <div class="card-body">

                    <table class="table table-responsive table-hover table-bordered w-100">
                        <thead  id="tablesHeader">

                        <th>ID</th>
                        <th>Names</th>
                        <th>Gender</th>
                        <th>Marital Status</th>
                        <th>Academic Year</th>
                        <th>Academic MR|MRS</th>

                        <th>Contacts</th>
                        <th>Registration No</th>
                        <th>Speciality</th>
                        <th>Permanent Address</th>
                        <th>Place Of Interest</th>
                        <th>Action</th>
                        </thead>
                        <tbody id="tableselection">
                                @if(count($students)==0)

                                    <th colspan="12" class="text-center">
                                       <strong class="lead"> No Student record found</strong>
                                    </th>

                                    @else
                                    @foreach($students as $student)
                                        <tr>
                                            <th> {{$student->id}}</th>
                                            <td>
                                                <a href="students/show/{{$student->id}}" class="btn btn-link">
                                                    {{$student->firstName}}
                                                    {{$student->lastName}}
                                                </a>
                                            </td>
                                            <td> {{$student->gender}}</td>
                                            <td> {{$student->marriage}}</td>
                                            <td> {{$student->year->name}}</td>
                                            <td> {{$student->year->chair}}</td>
                                            <td>{{$student->email}}|{{$student->phone}}</td>
                                            <td>{{$student->registration}}</td>
                                            <td> {{$student->speciality}}</td>
                                            <td> {{$student->address}}</td>
                                            <td>{{$student->iptPlace}}</td>
                                            <td class="btn-group">
                                                <a href="students/show/{{$student->id}}" class="btn btn-sm btn-primary">SELECT</a>
                                                <form action="/students/{{$student->id}}" method="POST" class="">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class=" btn btn-sm btn-danger" type="submit">DELETE</button>

                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @endif


                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

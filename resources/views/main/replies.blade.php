@extends('layouts.app')

@section('content')
    @include('layouts.adminNav')
    <div class="container-fluid r">
        <div class="row justify-content-center">
            <div class="col-md-7 ">

                <div class="card">
                    <div class="card-header  text-center">
                        <span class="lead"><strong>Mail Selected Students </strong></span>
                    </div>
                    <div class="card-body">
                        <form action="/opportunities" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="studentEmail">Student Email:</label>
                                <select name="email" id="studentEmail" class="form-control custom-select">
                                    <option disabled selected>-choose an email-</option>
                                   @foreach($students as $student)
                                        <option value="{{$student->id}}">{{$student->email}}</option>
                                       @endforeach
                                </select>
                             </div>
                            <div class="form-group">
                                <label for="message">Massage:</label>
                                <textarea  name="message" id="message" class="form-control" rows="8">

                                </textarea>
                            </div>
                            <button type="submit" class=" btn btn-primary">Send</button>
                        </form>
                    </div>
                </div>
            </div>
            {{--create opportunities form--}}
        </div>
    </div>
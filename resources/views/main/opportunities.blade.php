@extends('layouts.app')

@section('content')
    @include('layouts.adminNav')
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-8">
              <table class="table table-bordered ">
                  <thead id="thdOpp">
                  <th>OPPORTUNITY</th>
                  <th>COMPANY</th>
                  <th>CONTACTS</th>
                  <th>CHANCES</th>
                  <th>LOCATION</th>

                  </thead>
                  <tbody>

                 @if(count($fields)>0)
                     @foreach($fields as $field)
                         <tr>
                             <td>{{$field->field}}</td>
                             <td>{{$field->company}}</td>
                             <td>{{$field->contact}}</td>
                             <td>{{$field->chances}}</td>
                             <td>{{$field->location}}</td>
                         </tr>
                     @endforeach
                     @else
                     <tr >
                         <td colspan="5" class="text-center">
                             <b class="lead">No opportunity found</b>
                         </td>
                     </tr>
                 @endif

                  </tbody>
              </table>
          </div>
          {{--table style opportunities--}}
          <div class="col-md-4 justify-content-center">

              <div class="card">
                  <div class="card-header  text-center">
                      <span class="lead"><strong>Enroll the Opportunity</strong></span>
                  </div>
                  <div class="card-body">
                      <form action="/opportunities" method="post">
                         @include('main.form')
                            <button type="submit" class="btn btn-primary">Enroll</button>

                      </form>
                  </div>
              </div>
          </div>
          {{--create opportunities form--}}
      </div>
    </div>
@endsection

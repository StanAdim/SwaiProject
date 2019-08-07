@extends('layouts.app')

    @section('jumbo','APPLY NOW')
@section('content')
    @if(session()->has('success'))

        <div class="container">
            <div class="alert alert-success text-center">
                <h4 class="">Sent successful</h4>
                {{session()->get('success')}}
            </div>
        </div>
    @endif
    @if(!session()->has('success'))
    <div class="container justify-content-center">

            <div class="card">

                <div class="card-body" id="cardbodyform">
                    <form action="/students" class="" method="POST">
                        @include('students.form')

                        <button class="btn  btn-lg btn-outline-secondary " type="submit">Apply</button>
                    </form>

                </div>{{--END CARD BODY--}}
            </div>{{--END CARD--}}

    </div>
    @endif
@endsection

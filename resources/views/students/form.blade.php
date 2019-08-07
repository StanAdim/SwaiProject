<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="firstName">First Name:</label>
            <input type="text" class="form-control" name="firstName" id="firstName"  value="{{old('firstName') ?? $student->firstName}}">
            @if(count($errors)>0)
                <div class="alert alert-link  text-danger">
                    {{$errors->first('firstName')}}
                </div>
            @endif
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="middleName">Middle Name:</label>
            <input type="text" class="form-control" name="middleName" id="middleName"  value="{{old('middleName')  ?? $student->middleName}}">
            @if(count($errors)>0)
                <div class="alert alert-link  text-danger">
                    {{$errors->first('lastName')}}
                </div>
            @endif
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="lastName">Last Name:</label>
            <input type="text" class="form-control" name="lastName" id="lastName"  value="{{old('lastName') ?? $student->lastName}}">
            @if(count($errors)>0)
                <div class="alert alert-link  text-danger">
                    {{$errors->first('lastName')}}
                </div>
            @endif
        </div>
    </div>
</div>{{--end of first row in form--}}

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" id="email" value="{{old('email') ?? $student->email}}">
            @if(count($errors)>0)
                <div class="alert alert-link  text-danger">
                    {{$errors->first('email')}}
                </div>
            @endif
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" class="form-control" name="phone" id="phone" value="{{old('phone') ?? $student->phone }}">
            @if(count($errors)>0)
                <div class="alert alert-link  text-danger">
                    {{$errors->first('phone')}}
                </div>
            @endif
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="registration">Registration No:</label>
            <input type="text" class="form-control" name="registration" id="registration" value="{{old('registration'  )?? $student->registration}}">
            @if(count($errors)>0)
                <div class="alert alert-link  text-danger">
                    {{$errors->first('registration')}}
                </div>
            @endif
        </div>
    </div>
</div>{{--end of second row in form--}}

<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label for="speciality">Speciality <span class="text-muted">(optional)</span>:</label>
            <input type="text" class="form-control" name="speciality" id="speciality" value="{{old('speciality' ) ?? $student->speciality}}" placeholder="eg. drilling machine operator">

        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="gender">Gender:</label><br>
            <div class="custom-radio">
                <input type="radio" name="gender" value="male"  checked>Male
                <input type="radio" name="gender" value="female" >Female
            </div>

        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="marriage">Marital Status:</label>
            <select name="marriage" id="marriage" class="custom-select form-control">
                @foreach($student -> marriageOptions() as $optionKey => $optionValue)
                    <option value="{{$optionKey}}" {{$student->marriage == $optionValue ?'selected' :''}}>{{$optionValue}}</option>
                    @endforeach
            </select>

            @if(count($errors)>0)
                <div class="alert alert-link  text-danger">
                    {{$errors->first('marriage') ?? $student->marriage}}
                </div>
            @endif
        </div>
    </div>


    <div class="col-md-3">
        <div class="form-group">
            <label for="backReceipt">Pay SLIP:</label>
            <div class="custom-file">
                <div class="custom-file-label ">Bank receipt</div>
                <input type="file" class="custom-file-input form-control" name="backReceipt" id="backReceipt" value="{{old('backReceipt')}}" >

            </div>
        </div>
    </div>
</div>{{--end of third row in form--}}

<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label for="year_id">Year:</label>
            <select name="year_id" id="year" class="custom-select form-control">
               @foreach($years as $year)
                    <option value="{{$year->id}}"{{$year->id == $student->year_id ? 'selected':''}}>{{$year->name}}</option>
                   @endforeach
            </select>

        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="IptPlace">Place of Interest:</label>
            <input type="text" class="form-control" name="iptPlace" id="phone" value="{{old('iptPlace') ?? $student->iptPlace  }}">
            @if(count($errors)>0)
                <div class="alert alert-link  text-danger">
                    {{$errors->first('iptPlace')}}
                </div>
            @endif
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="address">Permanent Address:</label>
            <input type="text" class="form-control" name="address" id="address" value="{{old('address') ?? $student->address}}">
            @if(count($errors)>0)
                <div class="alert alert-link  text-danger">
                    {{$errors->first('address')}}
                </div>
            @endif
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="IptLetter">IPT Letter:</label>
            <div class="custom-file">
                <div class="custom-file-label">IPT doc</div>
                <input type="file" class="custom-file-input form-control" name="IptLetter" id="IptLetter" value="{{old('IptLetter')}}" >

            </div>
        </div>
    </div>

</div>{{--end of forth row in form--}}


@csrf
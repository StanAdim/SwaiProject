@csrf
<div class="form-group">
    <label for="field">Field of Training</label>
    <input type="text" class="form-control" name="field" placeholder="Field of training eg:Rock analysis" value="{{old('field')}}">
    <div class="text-danger">
        @if(count($errors)>0)
            <span class="lead"> {{$errors->first('field')}}</span>
        @endif
    </div>
</div>
<div class="form-group">
    <label for="company">Company|Association</label>
    <input type="text" class="form-control" name="company" placeholder="company name" value="{{old('company')}}">
    <div class="text-danger">
        @if(count($errors)>0)
            <span class="lead"> {{$errors->first('company')}}</span>
        @endif
    </div>
</div>
<div class="form-group">
    <label for="contact">Contacts|email</label>
    <input type="text" class="form-control" name="contact" placeholder="email|phone Call" value="{{old('contact')}}">
    <div class="text-danger">
        @if(count($errors)>0)
            <span class="lead"> {{$errors->first('contact')}}</span>
        @endif
    </div>
</div>
<div class="form-group">
    <label for="chances">Chances</label>
    <input type="number" class="form-control" name="chances" placeholder="How many chances available" value="{{old('chances')}}">
    <div class="text-danger">
        @if(count($errors)>0)
            <span class="lead"> {{$errors->first('chances')}}</span>
        @endif
    </div>
</div>

<div class="form-group">
    <label for="location">Location</label>
    <input type="text" class="form-control" name="location" placeholder="Region,District" value="{{old('location')}}">
    <div class="text-danger">
        @if(count($errors)>0)
            <span class="lead"> {{$errors->first('location')}}</span>
        @endif
    </div>
</div>
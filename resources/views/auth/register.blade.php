@extends('layouts.app')
@section('content')
<div class="container" style="margin-top: 50px">
    <div class="row">
        <div class="col-lg-9 col-md-offset-2 ">
            <div class="card card-default" style="">
                <div class="card-header" style="background-color: white"><h5>Register Today at Prime farm:</h5></div>
                <div class="panel-body  smooth-scroll">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                        <div class="col-sm-4">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="control-label">Full Name</label>
                                <input id="name" type="text" class="form-control " name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class=" control-label">E-Mail Address</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                            <div class="form-group{{ $errors->has('employee_no') ? ' has-error' : '' }}">
                                <label for="employee number" class=" control-label">Employee Number/ID or Farmer Number</label>

                                <input id="employee number" type="text" class="form-control" name="employee_no" value="{{ old('employee_no') }}" required>

                                @if ($errors->has('employee_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('employee_no') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group{{ $errors->has('mobile_no') ? ' has-error' : '' }}">
                                <label for="mobile_no" class=" control-label">Mobile Number</label>

                                <input id="mobile_no" type="number" class="form-control" name="mobile_no" value="{{ old('mobile_no') }}" required>

                                @if ($errors->has('mobile_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="control-label">Password</label>


                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="control-label">Confirm Password</label>

                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                            <div>
                                <button type="submit" class="btn btn-raised btn-sm " style="background-color: #3498DB; color: white">
                                    Register
                                </button>
                            </div>

                        </div>
                        <div class="col-sm-4 col-md-offset-3">
                            <div class="form-group{{ $errors->has('farm_name') ? ' has-error' : '' }}">
                                <label for="farm_name" class=" control-label">Farm Name</label>

                                <input id="farm_name" type="text" class="form-control" name="farm_name" value="{{ old('farm_name') }}" required>

                                @if ($errors->has('farm_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('farm_name') }}</strong>
                                    </span>
                                @endif

                            </div>
                            <div class="form-group{{ $errors->has('farm_location') ? ' has-error' : '' }}">
                                <label for="farm_location" class=" control-label">Farm Location</label>
                                <input id="farm_location" type="text" class="form-control" name="farm_location" value="{{ old('farm_location') }}" required>

                                @if ($errors->has('farm_location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('farm_location') }}</strong>
                                    </span>
                                @endif

                            </div>
                            <div class="form-group{{ $errors->has('farm_address') ? ' has-error' : '' }}">
                                <label for="farm_address" class=" control-label">Farm Address</label>

                                <input id="farm_address" type="text" class="form-control" name="farm_address" value="{{ old('farm_address') }}" required>

                                @if ($errors->has('farm_address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('farm_address') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

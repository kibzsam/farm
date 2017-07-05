@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 100px">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card card-default">
                <div class="card-header" style="background-color: white; color: black"><h5>Login</h5></div>
                <div class="panel-body">
                    <form class="form-horizontal col-lg-6 col-md-offset-3" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group label-floating{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class=" control-label">E-Mail</label>
                            <div class="">
                                <input id="email" type="email" class="form-control input-field" name="email" value="{{ old('email') }}"style="border-color: #FFFFFFff;box-shadow: 0px 1px 1px rgba(255, 255, 255, 255) inset, 0px 0px 8px rgba(255, 255, 255, 255);"
                                       required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group label-floating{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="control-label">Password</label>

                            <div class="">
                                <input id="password" type="password" class="form-control input-lg" name="password"
                                       style="border-color: #FFFFFFff;box-shadow: 0px 1px 1px rgba(255, 255, 255, 255) inset, 0px 0px 8px rgba(255, 255, 255, 255);" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-block btn-raised" style="background-color:#3498DB;color: white ">
                                        Login
                                    </button>
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="">

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.login')

@section('content')
<div class="container">
    <div id="loginbox">            
            <form id="loginform" class="form-vertical" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                <div class="header">
                    <center><h3>Site <font color="#5379fa">Login</font></h3></center>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box{{ $errors->has('email') ? ' has-error' : '' }}">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" />

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif

                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box{{ $errors->has('password') ? ' has-error' : '' }}">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input id="password" type="password" class="form-control" name="password" placeholder="Password" required/>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-left"><a href="{{ url('/password/reset') }}" class="flip-link btn btn-info" id="to-recover">Forgot Your Password?</a></span>
                    <span class="pull-right">
                        <button type="submit" class="btn btn-success" /> Login</button>
                    </span>
                </div>
            </form>
        </div>
</div>
</div>
@endsection

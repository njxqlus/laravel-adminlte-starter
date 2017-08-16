@extends('admin-lte.layouts.auth')

@section('page-title', 'Reset Password')

@section('body-class', 'login-page')

@section('content')

    <div class="login-box">
        <div class="login-logo">
            <a href="#">{{ config('app.name', 'Laravel') }}</a>
        </div>
        <!-- /.login-logo -->

        <div class="login-box-body">
            <p class="login-box-msg">@lang('admin-lte.password_reset_message')</p>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form action="{{ route('password.email') }}" method="POST">

                {{ csrf_field() }}

                <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="form-control" placeholder="@lang('admin-lte.email')"
                           value="{{ old('email') }}" name="email"
                           required
                           autofocus>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>


                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit"
                                class="btn btn-primary btn-block btn-flat">@lang('admin-lte.send_password_reset_link')</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <a href="{{ route('login') }}">@lang('admin-lte.i_already_have_a_membership')</a><br>
            <a href="{{ route('register') }}" class="text-center">@lang('admin-lte.register_a_new_membership')</a>

        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

@endsection
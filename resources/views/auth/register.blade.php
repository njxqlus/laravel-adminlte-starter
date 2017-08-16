@extends('admin-lte.layouts.auth')

@section('page-title', 'Register')

@section('body-class', 'register-page')

@section('css')

    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('admin-lte/plugins/iCheck/square/blue.css')}}">

@endsection

@section('content')

    <div class="register-box">
        <div class="register-logo">
            <a href="#">{{ config('app.name', 'Laravel') }}</a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">@lang('admin-lte.register_message')</p>

            <form action="{{ route('register') }}" method="POST">

                {{ csrf_field() }}

                <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                           placeholder="@lang('admin-lte.full_name')" required autofocus>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    @if ($errors->has('name'))
                        <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                    @endif
                </div>

                <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="form-control" placeholder="@lang('admin-lte.email')" name="email"
                           value="{{ old('email') }}"
                           required>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                        <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                    @endif
                </div>

                <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control" placeholder="@lang('admin-lte.password')"
                           name="password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                        <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                    @endif
                </div>

                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="@lang('admin-lte.retype_password')"
                           name="password_confirmation" required>
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>

                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> @lang('admin-lte.i_agree_to_the_terms')
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit"
                                class="btn btn-primary btn-block btn-flat">@lang('admin-lte.register')</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i>
                    @lang('admin-lte.sign_up_using_facebook')
                </a>
                <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i>
                    @lang('admin-lte.sign_up_using_google_plus')
                </a>
            </div>

            <a href="{{ route('login') }}" class="text-center">@lang('admin-lte.i_already_have_a_membership')</a>
        </div>
        <!-- /.form-box -->
    </div>
    <!-- /.register-box -->

@endsection

@section('scripts')

    <!-- iCheck -->
    <script src="{{asset('admin-lte/plugins/iCheck/icheck.min.js')}}"></script>

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>

@endsection
@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Restablecer contraseña
@endsection

@section('content')

    <body class="login-page">

    <div id="app">
        <div class="login-box">
        <div class="login-logo">
            <a href="{{ url('/home') }}"><b>Localizaciones Terceros</b></a>
        </div><!-- /.login-logo -->

        {{--@if (session('status'))--}}
            {{--<div class="alert alert-success">--}}
                {{--{{ session('status') }}--}}
            {{--</div>--}}
        {{--@endif--}}

        {{--@if (count($errors) > 0)--}}
            {{--<div class="alert alert-danger">--}}
                {{--<strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>--}}
                {{--<ul>--}}
                    {{--@foreach ($errors->all() as $error)--}}
                        {{--<li>{{ $error }}</li>--}}
                    {{--@endforeach--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--@endif--}}

        <div class="login-box-body">
            <p class="login-box-msg">Restablecer la contraseña</p>

            <form action="{{ url('/password/reset') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" autofocus/>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="password"/>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Confirmar Password" name="password_confirmation"/>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>

                <div class="row">
                    <div class="col-xs-2">
                    </div><!-- /.col -->
                    <div class="col-xs-8">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Restablecer contraseña</button>
                    </div><!-- /.col -->
                    <div class="col-xs-2">
                    </div><!-- /.col -->
                </div>
            </form>

            <a href="{{ url('/login') }}">Iniciar sesión</a><br>
            <a href="{{ url('/register') }}" class="text-center">Ya estoy registrado</a>

        </div><!-- /.login-box-body -->

    </div><!-- /.login-box -->
    </div>

    @include('adminlte::layouts.partials.scripts_auth')

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
    @if (count($errors) > 0)
        <script>
            var errors = '{{ json_encode(implode($errors->all())) }}';
            errorsMsg(errors);
        </script>
    @endif
    @if (session('status'))
        <script>
            var success = '{{ session('status') }}';
            successMsg(success);
        </script>
    @endif
    </body>

@endsection

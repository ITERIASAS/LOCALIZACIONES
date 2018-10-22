@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Iniciar sesión
@endsection

@section('content')
<body class="hold-transition login-page">
    <div id="app" v-cloak>
        <div class="login-box">
            <div class="login-logo">
                <a href="{{ url('/home') }}"><b>Localizaciones Terceros</b></a>
            </div><!-- /.login-logo -->

        {{--@if (count($errors) > 0)--}}
            {{--<div class="alert alert-danger">--}}
                {{--<strong>Error!</strong> Hay algunos problemas con su entrada.<br><br>--}}
                {{--<ul>--}}
                    {{--@foreach ($errors->all() as $error)--}}
                        {{--<li>{{ $error }}</li>--}}
                    {{--@endforeach--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--@endif--}}

        <div class="login-box-body">
        <p class="login-box-msg"> Inicia sesión para acceder </p>

            <form action="{{ url('/login') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <login-input-field
                        name="{{ config('auth.providers.users.field','email') }}"
                        domain="{{ config('auth.defaults.domain','') }}">
                </login-input-field>
                <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="Email" name="email"/>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Contraseña" name="password"/>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-7">
                        <div class="checkbox icheck">
                            <label>
                                <input style="display:none;" type="checkbox" name="remember"> Recuérdame
                            </label>
                        </div>
                    </div><!-- /.col -->
                    <div class="col-xs-5">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar Sesión</button>
                    </div><!-- /.col -->
                </div>
            </form>

        <a href="{{ url('/password/reset') }}">Olvidé mi contraseña</a><br>
        <a href="{{ url('/register') }}" class="text-center">Registar un nuevo usuario</a>

    </div>

    </div>
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
</body>

@endsection

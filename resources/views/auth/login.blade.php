<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>.:adcpc:.</title>

        <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-material-design.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/ripples.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/MaterialAdminLTE.min.css') }}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
            <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <b>ADCPC</b>
            </div>
              <!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Acesso Restrito</p>
            
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="username" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-xs-7">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"><span class="checkbox-material"></span> Me Lembre
                                </label>
                            </div>
                        </div>
                    <!-- /.col -->
                    <div class="col-xs-12">
                      <button type="submit" class="btn btn-block btn-primary btn-raised btn-block btn-flat">Entrar</button>
                    </div>
                    <!-- /.col -->
                  </div>
                </form>
            
                <a href="#">Esqueci minha senha</a><br>
              </div>
              <!-- /.login-box-body -->
              <!-- /.login-box -->
        </div>
        <!-- jQuery 3 -->
        <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <!-- Material Design -->
        <script src="{{ asset('js/material.min.js') }}"></script>
        <script src="{{ asset('js/ripples.min.js') }}"></script>
        <script>
            $.material.init();
        </script>
    </body>
</html>                          
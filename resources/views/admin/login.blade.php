<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>{{ $title }}</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{ asset('assets/dash/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="{{ asset('assets/dash/css/metisMenu.min.css') }}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{ asset('assets/dash/css/startmin.css') }}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{ asset('assets/dash/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Please Sign In</h3>
                        </div>
                        <div style="color: red; text-align: center;">{{ session('error') }}</div>
                        <div class="panel-body">
                            @include('layouts.flash')
                            <form role="form" method="POST">
                                @csrf
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="E-mail" name="email" type="email" value="{{old('email')}}" autofocus>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" type="password" value="">
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    {{-- <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                        </label>
                                    </div> --}}
                                    <!-- Change this to a button or input when using this as a form -->
                                    <button class="btn btn-lg btn-success btn-block">Login</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="{{ asset('assets/dash/js/jquery.min.js') }}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('assets/dash/js/bootstrap.min.js') }}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{ asset('assets/dash/js/metisMenu.min.js') }}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{ asset('assets/dash/js/startmin.js') }}"></script>

        <style type="text/css">
            .invalid-feedback{
                color: red;
            }
        </style>

    </body>
</html>

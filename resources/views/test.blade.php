@extends('layouts.base')
@section('Title','TOAST - Login')
@section('head')
    <meta http-equiv="cache-control" content="private, max-age=0, no-cache">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="expires" content="0">
    <!-- Stylesheets -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" >
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


    <!-- HTML5 Support for IE -->
    <!--[if lt IE 9]>
    <script src="js/html5shim.js"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon/favicon.ico') }}">

@endsection


@section('body')
    <input type="hidden" id="refresh" value="no">
    <body class="gradient-yellow">

    <header class="no-padding">

        <div class="col-md-2">
            <img class="headerLogo" src= "{{ asset('img/FacultyOfEng.png') }}">
            <img class="headerLogo" src="{{ asset('img/001c%20UST%20Logo%20White%20Text.png') }}">
        </div>
        <div class="col-md-10 margin-top-15">
            <div class="col-md-12"><h2 class="headerText text-white">UNIVERSITY OF SANTO TOMAS</h2></div>
            <div class="col-md-12"><h5 class="headerText">Faculty of Engineering</h5></div>
        </div>
    </header>

    <!-- Form area -->
    <div class="admin-form">
        <div class="container ">

            <div class="row">
                <div class="col-md-12">
                    <!-- Widget starts -->
                    <div class="widget widget-loginShadow">
                        <div class="widget-content">
                            <div class="padd">
                                <img class="img-responsive widget-brand" src="img/AAA.png">

                                <!-- Login form -->
                                <form class="form-horizontal" method="POST"  action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <!-- Email -->

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label class="control-label col-lg-3" for="email">Email</label>
                                        <div class="col-lg-8">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <!-- Password -->


                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" class="col-lg-3 control-label">Password</label>

                                        <div class="col-lg-8">
                                            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-4  col-lg-offset-3">
                                        <a href="{{ route('password.request') }}"><p>Forgot Password</p></a>
                                    </div>
                                    <div class="col-lg-3 col-lg-offset-2">
                                        <button type="submit" class="btn btn-lg">Sign in</button>
                                    </div>
                                    <br />
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>

    </footer>



    <!-- JS -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script>
        $(document).ready(function(e) {

            var $input = $('#refresh');

            $input.val() == 'yes' ? location.reload(true) : $input.val('yes');
        });
    </script>
    </body>

@endsection
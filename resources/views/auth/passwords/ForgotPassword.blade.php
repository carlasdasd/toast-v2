@extends('layouts.base')
@section('Title','Forgot Password')
@section('head')

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans|PT+Sans" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'>
    </script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

@endsection

@section('body')

    <body class="gradient-yellow">
    <header class="no-padding">
        <div class="col-md-2">
            <img class="headerLogo" src="{{ asset('img/ust.png') }}">
            <img class="headerLogo" src="{{ asset('img/FacultyOfEng.png') }}">
        </div>
        <div class="col-md-10 margin-top-15">
            <div class="col-md-12"><h2 class="headerText" style="font-family: 'Encode Sans', sans-serif;"><strong>Thomasian Outcomes Assesment Tool</strong></h2></div>
            <div class="col-md-12"><h4 class="headerText">University of Santo Tomas - Faculty of Engineering</h4></div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-5 col-md-offset-2">
                <div class="account-wall">
                    <img class="profile-img" src="{{ asset('img/Lock.png') }}"
                         alt="">

                    @if (Session::has('status'))
                        <div class="alert alert-success" style="text-align: center">
                            {{ Session::get('status') }}
                        </div>
                    @endif
                    <form class="form-signin" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="text" class="form-control" placeholder="Email" name="email" required>


                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        {{--<div class="form-group margin-top-20">--}}
                            {{--<div class="g-recaptcha" data-sitekey="6LedjzwUAAAAAKJRhB1X-3oOv30uEN46t7YtxoVr"></div>--}}
                        {{--</div>--}}
                        <input class="btn btn-lg btn-black btn-block" type="submit" value="Send Password Reset Link"/>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>© Industrial Engineering Dept. 2018</p>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    </body>
@endsection

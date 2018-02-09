@extends('layouts.base')
@section('Title','Add Professors')
@section('head')

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans|PT+Sans" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'>
    </script>
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

@endsection
@section('body')
<body>

<div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <img class="sidenav-img" src="{{ asset('img/TOAsTLOGOText.png') }}" alt="">
        </div>

        <ul class="list-unstyled components margin-top-n40">
            <li>
                <a href="{{ url('home') }}">Home</a>
            </li>
            <li class="active">
                <a href="#profSubmenu" data-toggle="collapse" aria-expanded="false">Professor</a>
                <ul class="collapse list-unstyled" id="profSubmenu">
                    <li><a href="{{ url('home/add_professor') }}">Add professor</a></li>
                    <li><a href="{{ url('home/view_professor') }}">View professors</a></li>
                </ul>
            </li>

            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Student</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li><a href="#">Add student</a></li>
                </ul>
            </li>
            <li>
                <a href="#courseSubMenu" data-toggle="collapse" aria-expanded="false">Course</a>
                <ul class="collapse list-unstyled" id="courseSubmenu">
                    <li><a href="#">Add course</a></li>
                    <li><a href="#">View course</a></li>
                </ul>
            </li>
            <li>

                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>

        </ul>
    </nav>

    <!-- Page Content Holder -->
    <div id="content">

        <nav>
            <div class="container-fluid">

                <div class="navbar-header visible-xs">
                    <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                        <i class="glyphicon glyphicon-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                </div>
            </div>
        </nav>

        <header>
            <h1>Add Professor</h1>
            <div class="line"></div>


        </header>

        <div class="row ">
            @if(session('info'))

                {{ session('info') }}

            @endif
            <form class="form-reg" method="POST" enctype="multipart/form-data" action="{{  route('createProfessor') }}">
                {{ csrf_field() }}
                <div class="col-md-4 margin-right-50 margin-top-20">

                    <input type="text" class="form-control" name="firstname" placeholder="First Name" required autofocus>
                    <input type="text" class="form-control" name="middlename" placeholder="Middle Name" required>
                    <input type="text" class="form-control" name="lastname" placeholder="Last Name" required>
                    <input type="text" class="form-control" name="email" placeholder="Email" required>
                    <input type="text" class="form-control" name="id_number" placeholder="ID no." required>
                    <input type="date" class="form-control" name="birthdate" placeholder="Birthdate" required>
                </div>
                <div class="col-md-6">
                    <div class="person">
                        <div>
                            <img src="{{ asset('img/img_avatar.png') }}" class="img-responsive" alt="Avatar">
                            <input class="form-control" type="file" name="file" id="file" >
                            <div class="input-group">
                                <input type="submit" class="btn btn-success btn-lg btn-reg" value="Done"/>
                                &nbsp;<i class="glyphicon glyphicon-send"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>



    </div>
</div>





<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
</body>
@endsection

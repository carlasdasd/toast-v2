@extends('layouts.base')
@section('Title','Add Students')
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
            <li>
                <a href="#profSubmenu" data-toggle="collapse" aria-expanded="false">Professor</a>
                <ul class="collapse list-unstyled" id="profSubmenu">
                    <li><a href="{{ url('home/add_professor') }}">Add professor</a></li>
                    <li><a href="{{ url('home/view_professor') }}">View professors</a></li>
                </ul>
            </li>

            <li class="active">
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
            <h1>Add Student</h1>
            <div class="line"></div>
        </header>

        <div class="row ">
            <form class="form-reg padding-right-90">
                <div class="col-md-4 margin-top-100">
                    <p>Upload .csv file here</p>
                    <input class="form-control pull-right" type="file" multiple>
                </div>
                <div class="col-md-1 margin-top-145"><p>OR</p></div>
                <div class="col-md-4  margin-top-10">
                    <p>Add a student</p>
                    <input type="text" class="form-control" placeholder="First Name" required autofocus>
                    <input type="text" class="form-control" placeholder="Last Name" required>
                    <input type="text" class="form-control" placeholder="Middle Name" required>
                    <input type="text" class="form-control" placeholder="Email" required>
                    <input type="text" class="form-control" placeholder="ID no." required>
                    <input type="date" class="form-control" placeholder="Birthdate." required>
                    <button type="button" class="btn btn-success btn-lg btn-stud">Done &nbsp;<span class="glyphicon glyphicon-send"></span></button>
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




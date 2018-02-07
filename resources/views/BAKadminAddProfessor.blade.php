@extends('layouts.base')
@section('Title','TOAST - Add Professor')
@section('head')
    <!-- Stylesheets -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <!-- Font awesome icon -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <!-- jQuery UI -->
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <!-- Calendar -->
    <link rel="stylesheet" href="{{ asset('css/fullcalendar.css') }}">
    <!-- prettyPhoto -->
    <link rel="stylesheet" href="{{ asset('css/prettyPhoto.css') }}">
    <!-- Star rating -->
    <link rel="stylesheet" href="{{ asset('css/rateit.css') }}">
    <!-- Date picker -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.min.css') }}">
    <!-- CLEditor -->
    <link rel="stylesheet" href="{{ asset('css/jquery.cleditor.css') }}">
    <!-- Bootstrap toggle -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-switch.css') }}">
    <!-- Main stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Widgets stylesheet -->
    <link href="{{ asset('css/widgets.css') }}" rel="stylesheet">

    <!-- HTML5 Support for IE -->
    <!--[if lt IE 9]>
    <script src="js/html5shim.js"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon/favicon.ico">
    </head>

@endsection

@section('body')

    <div class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">

        <div class="container-fluid">
            <!-- Menu button for smallar screens -->
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.html"><img  class="navbar-brand" src="img/AAA.png" /></a></a>
            </div>
            <!-- Site name for smallar screens -->


            <!-- Navigation starts -->
            <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">



                <!-- Links -->
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="icon-off"></i> Logout </a></li>
                    </a>


                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    </a>

                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu">
                    </ul>
                    </li>

                </ul>

            </nav>
        </div>

        <main>
            <div class="sidebar ">
                <div class="sidebar-dropdown"><a href="#">Navigation</a></div>

                <div class="sidebar-inner">



                    <!-- Search form -->
                    <div class="sidebar-widget">
                        <form >

                        </form>
                    </div>
                    <a href="index.html"><h3 class="text-yellow">Dashboard</h3></a>
                    <!--- Sidebar navigation -->
                    <!-- If the main navigation has sub navigation, then add the class "has_submenu" to "li" of main navigation. -->
                    <ul class="navi">

                        <!-- Use the class nred, ngreen, nblue, nlightblue, nviolet or norange to add background color. You need to use this in <li> tag. -->
                        <li class="has_submenu nyellow">
                            <a href="#"><i class="icon-th"></i>Professor<span class="pull-right"><i class="icon-angle-right"></i></span></a>

                            <ul>
                                <li><a onclick="location.href='add-professor.html'">Add Professor<span class="pull-right in"></span></a></li>
                                <li><a onclick="location.href='admin-AssignSection.html'">Assign to a Section<span class="pull-right in"></span></a></li>
                                <li><a onclick="location.href='admin-ViewSection.html'" >View Professor<span class="pull-right in"></span></a></li>
                            </ul>
                        </li>

                        <li class="has_submenu nyellow">
                            <a href="#"><i class="icon-user"></i>Student<span class="pull-right"><i class="icon-angle-right"></i></span></a>

                            <ul>
                                <li><a onclick="location.href='student-ViewSection.html'">Add to Section<span class="pull-right in"></span></a></li>

                            </ul>
                        </li>
                        <li>
                            <a onclick="location.href='add-syllabus.html'"><i class="icon-book    "></i>Course<span class="pull-right"></span></a>
                        </li>


                        <!-- Menu with sub menu -->
                    </ul>

                </div>

            </div>
            <!-- Sidebar ends -->
            <!-- Main bar -->
            <div class="mainbar">

                <!-- Page heading -->
                <div class="page-head">
                    <!-- Page heading -->
                    <h2 class="pull-left">Add Professor</h2>
                </div>
                <!-- Page heading ends -->



                <!-- Matter -->

                <div class="matter margin-top-50">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <form class="form-horizontal " method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}
                                <!-- Email -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Last Name</label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="inputEmail" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">First Name</label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="inputEmail" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">M.I</label>
                                        <div class="col-lg-2">
                                            <input type="text" class="form-control" id="inputEmail" placeholder="M.I">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">ID no.</label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="inputEmail" placeholder="ID no.">
                                        </div>
                                    </div>
                                    <!-- Password -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3" for="inputPassword">UST Email</label>
                                        <div class="col-lg-6">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-3" for="inputPassword">Password</label>
                                        <div class="col-lg-6">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-3" for="file">Upload file</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" type="file" id="file" name="file" multiple>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-lg-offset-6">

                                        <button type="submit" class="btn btn-lg">Done</button>
                                    </div>
                                    <br />
                                </form>
                            </div>

                            <div class="col-md-6">
                                <div class="widget person">
                                    <div class="widget-content">
                                        <img src="img/img_avatar.png" class="img-responsive" alt="Avatar">
                                        <div class="container">
                                            <h4><b>Angeles, Marvin</b></h4>
                                            <p>2014086734</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End  -->

                        </div>
                    </div>
                </div>
            </div>




        </main>



        <span class="totop"><a href="#"><i class="icon-chevron-up"></i></a></span>

        <!-- JS -->
        <script src="js/jquery.js"></script> <!-- jQuery -->
        <script src="js/bootstrap.js"></script> <!-- Bootstrap -->
        <script src="js/jquery-ui-1.10.2.custom.min.js"></script> <!-- jQuery UI -->
        <script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
        <script src="js/jquery.rateit.min.js"></script> <!-- RateIt - Star rating -->
        <script src="js/jquery.prettyPhoto.js"></script> <!-- prettyPhoto -->

        <!-- jQuery Flot -->
        <script src="js/excanvas.min.js"></script>
        <script src="js/jquery.flot.js"></script>
        <script src="js/jquery.flot.resize.js"></script>
        <script src="js/jquery.flot.pie.js"></script>
        <script src="js/jquery.flot.stack.js"></script>

        <script src="js/sparklines.js"></script> <!-- Sparklines -->
        <script src="js/jquery.cleditor.min.js"></script> <!-- CLEditor -->
        <script src="js/bootstrap-datetimepicker.min.js"></script> <!-- Date picker -->
        <script src="js/bootstrap-switch.min.js"></script> <!-- Bootstrap Toggle -->
        <script src="js/filter.js"></script> <!-- Filter for support page -->
        <script src="js/custom.js"></script> <!-- Custom codes -->
        <script src="js/charts.js"></script> <!-- Custom chart codes -->

        @endsection
        </html>

a@extends('layouts.base')
@section('Title','TOAST - Home')
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
    <link rel="shortcut icon" href="{{ asset('img/favicon/favicon.ico') }}">

@endsection



@section('body')

    <body>

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
                <a href="index.html pull-left"><img  class="navbar-brand" src="{{ asset('img/AAA.png') }}" /></a>
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
                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu">
                    </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <main>
        <div class="sidebar ">
            <div class="sidebar-dropdown"><a href="#">Navigation</a></div>

            <div class="sidebar-inner">



                <!-- Search form -->
                <div class="sidebar-widget margin-top-20 ">
                    <form >

                    </form>
                </div>
                <a href="index.html"><h3 class="text-yellow">Dashboard</h3></a>
                <!--- Sidebar navigation -->
                <!-- If the main navigation has sub navigation, then add the class "has_submenu" to "li" of main navigation. -->
                <ul class="navi ">
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
                <h2 class="pull-left">Administrator -  {{ Auth::user()->last_name }}</h2>
            </div>
            <!-- Page heading ends -->



            <!-- Matter -->

            <div class="matter margin-top-50">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="widget wgreen announcement">
                                <div class="widget-head">
                                    <div class="pull-left">Announcement</div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="widget-content">
                                    <div class="padd">
                                        <div class="container">
                                            <div class="row">
                                                <span class="announcement-title"><i class="icon-chevron-right"></i> Section Update </span>
                                                <p class="announcement-desc"> - Engr. Angelo Valte has updated section 4IE-A</p>
                                            </div>
                                        </div>

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
    <script src="{{ asset('js/jquery.js') }}"></script> <!-- jQuery -->
    <script src="{{ asset('js/bootstrap.js') }}"></script> <!-- Bootstrap -->
    <script src="{{ asset('js/jquery-ui-1.10.2.custom.min.js') }}"></script> <!-- jQuery UI -->
    <script src="{{ asset('js/fullcalendar.min.js') }}"></script> <!-- Full Google Calendar - Calendar -->
    <script src="{{ asset('js/jquery.rateit.min.js') }}"></script> <!-- RateIt - Star rating -->
    <script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script> <!-- prettyPhoto -->

    <!-- jQuery Flot -->
    <script src="{{ asset('js/excanvas.min.js') }}"></script>
    <script src="{{ asset('js/jquery.flot.js') }}"></script>
    <script src="{{ asset('js/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('js/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('js/jquery.flot.stack.js') }}"></script>

    <script src="{{ asset('js/sparklines.js') }}"></script> <!-- Sparklines -->
    <script src="{{ asset('js/jquery.cleditor.min.js') }}"></script> <!-- CLEditor -->
    <script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script> <!-- Date picker -->
    <script src="{{ asset('js/bootstrap-switch.min.js') }}"></script> <!-- Bootstrap Toggle -->
    <script src="{{ asset('js/filter.js') }}"></script> <!-- Filter for support page -->
    <script src="{{ asset('js/custom.js') }}"></script> <!-- Custom codes -->
    <script src="{{ asset('js/charts.js') }}"></script> <!-- Custom chart codes -->

    </body>
@endsection


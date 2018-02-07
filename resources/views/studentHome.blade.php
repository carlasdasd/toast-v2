@extends('layouts.base')
@section('Title','TOAST - Home')
@section('head')

<?php 
$user = Auth::user();

?>

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
                    document.getElementById('logout-form').submit();"href="login.html"><i class="icon-off"></i> Logout</a></li>         
            </a>
            
            <!-- Dropdown menu -->
            <ul class="dropdown-menu">
              <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="icon-off"></i> Logout</a></li>
            </ul>
          </li>
          
        </ul>

        </nav>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                       {{ csrf_field() }}
                  </form>
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
              <a href="#"><i class="icon-th"></i>Academic A.Y<span class="pull-right"><i class="icon-angle-right"></i></span></a>
            
              <ul>
                <li><a onclick="location.href='course-view.html'">IE415<span class="pull-right in"></span></a></li>
                  <li><a href="#">IE311<span class="pull-right in"></span></a></li>
                 <li><a href="#">ME311<span class="pull-right in"></span></a></li>
              </ul>
            </li>
              

              
              
        
            <!-- Menu with sub menu -->
            </ul>
    
        </div>

        </div>
</main>
    </div>

    <!-- Sidebar ends -->
      	<!-- Main bar -->
  	<div class="mainbar">
      
	    <!-- Page heading -->
	    <div class="page-head">
        <!-- Page heading -->
	        <h2 class="pull-left">Student</h2>
            </div>
	    <!-- Page heading ends -->

        

	    <!-- Matter -->

<div class="matter margin-top-50">
        <div class="container">
				<div class="col-md-12">
						<div class="row fixed-grid">
						  <div class="col-md-4">
                            <div class="widget">
                                <div class="widget-content">
                              <img src="img/img_avatar.png" class="img-responsive" alt="Avatar">
                              <div class="container">
                                <h4><b>{{ $user->first_name ." ". $user->last_name}}</b></h4> 
                                <p>{{ $user->id_number }}</p>
                                    </div>
                              </div>
                            </div>  
                          </div>
                            
                            <div class="col-md-8 margin-top-30">
                            <!-- Bar Chart -->
                              <div class="widget wlightblue">

                                <div class="widget-head">
                                  <div class="pull-left">Bar Chart</div>
                                  <div class="clearfix"></div>
                                </div>            


                                <div class="widget-content">
                                  <div class="padd">
                                    <!-- Barchart. jQuery Flot plugin used. -->
                                    <div id="bar-chart"></div>
                                    <hr />
                                  </div>
                                </div>

                              </div>
                              <!-- Bar chart ends -->
                            </div>
						</div>
                </div>

                    <div class="row margin-top-30">
                        <div class="container">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="widget">
                                        <div class="widget-head">
                                            <div class="pull-left">Student Outcomes</div>
                                            <div class="clearfix"></div>
                                        </div>
                                        
                                        <div class="widget-content">
                                            <div class="container">
                                                <div class="row grey">
                                                    <div class="col-md-4">
                                                        <p>CERTAIN SO - DESCRIPTION BLA BLA BLA</p></div>
                                                    <div class="col-md-4">Grade</div>
                                                    <div class="col-md-4">Weights</div>
                                                </div>
                                                <div class="row">
                                                <div class="col-md-4">Q1</div>
                                                <div class="col-md-4">34</div>
                                                <div class="col-md-4">10%</div>
                                                </div>                        
                                                <div class="row grey">
                                                <div class="col-md-4">Q3</div>
                                                <div class="col-md-4">54</div>
                                                <div class="col-md-4">40%</div>
                                                </div>
                                                <div class="row">
                                                <div class="col-md-4">Q5</div>
                                                <div class="col-md-4">14</div>
                                                <div class="col-md-4">30%</div>
                                                  
                                                <div class="container margin-top-30">
                                                <div class="row grey">
                                                    <div class="col-md-4">
                                                        <p>CERTAIN SO - DESCRIPTION BLA BLA BLA</p></div>
                                                    <div class="col-md-4">Grade</div>
                                                    <div class="col-md-4">Weights</div>
                                                </div>
                                                <div class="row">
                                                <div class="col-md-4">PE</div>
                                                <div class="col-md-4">34</div>
                                                <div class="col-md-4">50%</div>
                                                </div>                        
                                                <div class="row grey">
                                                <div class="col-md-4">FE</div>
                                                <div class="col-md-4">54</div>
                                                <div class="col-md-4">40%</div>
                                                </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					</div>
                </div>
				</div>
		</div>
		<!-- Matter ends -->

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
    
    <script type="text/javascript">

$(function () {

    /* Bar Chart starts */

    var d1 = [];
    for (var i = 0; i <= 30; i += 1)
        d1.push([i, parseInt(Math.random() * 30)]);

    var d2 = [];
    for (var i = 0; i <= 30; i += 1)
        d2.push([i, parseInt(Math.random() * 30)]);


    var stack = 0, bars = true, lines = false, steps = false;
    
    function plotWithOptions() {
        $.plot($("#bar-chart"), [ d1, d2 ], {
            series: {
                stack: stack,
                lines: { show: lines, fill: true, steps: steps },
                bars: { show: bars, barWidth: 0.8 }
            },
            grid: {
                borderWidth: 0, hoverable: true, color: "#777"
            },
            colors: ["#52b9e9", "#0aa4eb"],
            bars: {
                  show: true,
                  lineWidth: 0,
                  fill: true,
                  fillColor: { colors: [ { opacity: 0.9 }, { opacity: 0.8 } ] }
            }
        });
    }

    plotWithOptions();
    
    $(".stackControls input").click(function (e) {
        e.preventDefault();
        stack = $(this).val() == "With stacking" ? true : null;
        plotWithOptions();
    });
    $(".graphControls input").click(function (e) {
        e.preventDefault();
        bars = $(this).val().indexOf("Bars") != -1;
        lines = $(this).val().indexOf("Lines") != -1;
        steps = $(this).val().indexOf("steps") != -1;
        plotWithOptions();
    });

    /* Bar chart ends */

});
    </script>
 
@endsection
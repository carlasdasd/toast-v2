@extends('layouts.base')
@section('Title','View Professors')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans|PT+Sans" rel="stylesheet">
      <script src='https://www.google.com/recaptcha/api.js'>
    </script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

       <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                     <img class="sidenav-img" src="img/TOAsTLOGOText.png" alt="">
                </div>

                <ul class="list-unstyled components margin-top-n40">
                    <li>
                        <a href="admin-db.html">Home</a>
                    </li>
                    <li class="active">
                        <a href="#profSubmenu" data-toggle="collapse" aria-expanded="false">Professor</a>
                        <ul class="collapse list-unstyled" id="profSubmenu">
                            <li><a href="admin-addprofessor.html">Add professor</a></li>
                            <li><a href="admin-professor.html">View professors</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Pages</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="#">Page 1</a></li>
                            <li><a href="#">Page 2</a></li>
                            <li><a href="#">Page 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Portfolio</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
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
                    <h1>View Professors</h1>
                    <div class="line"></div>
                </header>

                    <div class="row">
                        <ul>
                        <li class="service-list">
                            <a href="#" data-toggle="modal" data-target="#myModal"><img src="img/img_avatar.png" alt="icon" class="list-image" />
                            <h4>Engr. Angelo Valte</h4></a>
                        </li>

                        <li class="service-list margin-top-20">
                            <a href=""><img src="img/img_avatar.png" alt="icon" class="list-image" />
                            <h4>Engr. Gab Bucu</h4></a>
                        </li>

                        <li class="service-list margin-top-20">
                            <a href=""><img src="img/img_avatar2.png" alt="icon" class="list-image" />
                            <h4>Engr. Samuel</h4></a>
                        </li>

                        <li class="service-list margin-top-20">
                            <a href=""><img src="img/img_avatar2.png" alt="icon" class="list-image" />
                            <h4>Engr. Paolo </h4></a>
                        </li>
                    </ul>
                  <!-- End  -->
                    </div>

                </div>
            </div>





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
  </body>
</html>
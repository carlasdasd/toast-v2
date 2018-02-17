@extends('layouts.base')
@section('Title','View Professors')
@section('head')

@endsection
@section('body')
<body>

<div class="wrapper">
    <!-- Sidebar Holder -->
@include('sidebar')

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



                @foreach($users as $user)
                    <li class="service-list margin-top-20">
                        <a href="#" data-toggle="modal" data-target="#myModal">


                            <img class="list-image" src=" {{ asset('/uploads/'.$user->display_image)}} ">
                            <h4> {{  $user->first_name .' '. $user->last_name}}</h4></a>
                    </li>
                @endforeach


                {{--<li class="service-list">--}}
                    {{--<a href="#" data-toggle="modal" data-target="#myModal"><img src="{{ asset('img/img_avatar.png') }}" alt="icon" class="list-image" />--}}
                        {{--<h4>Engr. Angelo Valte</h4></a>--}}
                {{--</li>--}}

                {{--<li class="service-list margin-top-20">--}}
                    {{--<a href=""><img src="{{ asset('img/img_avatar.png') }}" alt="icon" class="list-image" />--}}
                        {{--<h4>Engr. Gab Bucu</h4></a>--}}
                {{--</li>--}}

                {{--<li class="service-list margin-top-20">--}}
                    {{--<a href=""><img src="{{ asset('img/img_avatar2.png') }}" alt="icon" class="list-image" />--}}
                        {{--<h4>Engr. Samuel</h4></a>--}}
                {{--</li>--}}

                {{--<li class="service-list margin-top-20">--}}
                    {{--<a href=""><img src="{{ asset('img/img_avatar2.png') }}" alt="icon" class="list-image" />--}}
                        {{--<h4>Engr. Paolo </h4></a>--}}
                {{--</li>--}}
            </ul>
            <!-- End  -->
        </div>

    </div>
</div>

</body>
</html>
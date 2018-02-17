@extends('layouts.base')
@section('Title','Add Course')
@section('head')
@endsection
@section('body')
<body>
<div class="wrapper">
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
            <h1>Add Syllabus</h1>
            <div class="line"></div>
        </header>

        <div class="row">
            <form class="form-reg margin-top-20">
                <div class="col-md-5 col-md-offset-3">
                    <input type="text" class="form-control" placeholder="Course Code" required autofocus>
                    <p>Upload Syllabus</p>
                    <input class="form-control" type="file" multiple>
                </div>
            </form>
        </div>

        <div class="pagi">
            <div class="pagination p6">
                <ul>
                    <a class="is-active" href="#"><li></li></a>
                    <a href="#"><li></li></a>
                    <a href="#"><li></li></a>
                </ul>
            </div>
        </div>

    </div>
</div>
</body>
@endsection

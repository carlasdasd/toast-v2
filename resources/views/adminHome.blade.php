@extends('layouts.base')
@section('Title','Admin Home')
@section('head')

@endsection

@section('body')
<body>

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



    <a href="{{ url('home/sem_settings') }}" >Settings</a>
</div>

</body>

@endsection

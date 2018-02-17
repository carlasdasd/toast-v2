@extends('layouts.base')
@section('Title','View Students')
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
            <h1>View Students</h1>
            <div class="line"></div>
            @include('info.success')
            @include('info.error')
        </header>

        <div class="divTable view">
            <div class="divTableHeading">
                <div class="divTableRow">
                    <div class="divTableHead">Student No.</div>
                    <div class="divTableHead">Last Name</div>
                    <div class="divTableHead">First Name</div>
                    <div class="divTableHead">Middle Name</div>
                    <div class="divTableHead">Birthday</div>
                    <div class="divTableHead">Email</div>
                    <div class="divTableHead">Personal Email</div>

                </div>
            </div>



            <div class="divTableBody">




                    @foreach($users as $user)
                            <div class="divTableRow">
                                <div class="divTableHead">{{ $user->student_number }}</div>
                                <div class="divTableHead">{{ $user->last_name }}</div>
                                <div class="divTableHead">{{ $user->first_name }}</div>
                                <div class="divTableHead">{{ $user->middle_name }}</div>
                                <div class="divTableHead">{{ $user->birthdate }}</div>
                                <div class="divTableHead">{{ $user->users->email }}</div>
                                <div class="divTableHead">{{ $user->personal_email }}</div>
                            </div>
                    @endforeach





            </div>
        </div>


        <div>


        </div>


    </div>
</div>
</body>
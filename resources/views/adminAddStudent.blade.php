@extends('layouts.base')
@section('Title','Add Students')
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
            <h1>Add Student</h1>
            <div class="line"></div>
        </header>

        <div class="row ">

            <form action="{{ route('uploadStudent') }}" method="POST" enctype="multipart/form-data" id="form" name="submitCSV" class="">
                {{ csrf_field() }}
                <div class="col-md-4 margin-top-100">
                    <p>Upload .csv file here</p>
                    <input class="form-control pull-right" id="file" name="file" type="file" accept=".csv" >
                    <input type="submit" class="btn btn-success btn-lg btn-stud" value="Upload"/>
                </div>

            </form>

            <div class="col-md-1 margin-top-145"><p>OR</p></div>

            <form action="{{ route('createStudent') }}" method="POST" name="submitForm" class="form-reg padding-right-90">
                {{ csrf_field() }}


                <div class="col-md-4  margin-top-10">
                    <p>Add a student</p>
                    <div class="{{ $errors->has('first_name') ? ' has-error' : '' }}">
                        <input type="text" class="form-control" value="{{ old('first_name') }}" name="first_name" placeholder="First Name" required autofocus>
                        @if ($errors->has('first_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('first_name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="{{ $errors->has('last_name') ? ' has-error' : '' }}">
                        <input type="text" class="form-control" value="{{ old('last_name') }}" name="last_name" placeholder="Last Name" required>
                        @if ($errors->has('last_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('last_name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="{{ $errors->has('last_name') ? ' has-error' : '' }}">
                        <input type="text" class="form-control" value="{{ old('middle_name') }}" name="middle_name" placeholder="Middle Name" required>
                        @if ($errors->has('middle_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('middle_name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="text" class="form-control"  value="{{ old('email') }}" name="email" placeholder="Email" required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="{{ $errors->has('idNumber') ? ' has-error' : '' }}">
                        <input type="text" class="form-control" value="{{ old('idNumber') }}" name="idNumber" placeholder="ID no." required>
                        @if ($errors->has('idNumber'))
                            <span class="help-block">
                                <strong>{{ $errors->first('idNumber') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="{{ $errors->has('birthdate') ? ' has-error' : '' }}">
                        <input type="date" class="form-control" value="birthdate" name="birthdate" placeholder="Birthdate" required>
                        @if ($errors->has('birthdate'))
                            <span class="help-block">
                                <strong>{{ $errors->first('birthdate') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="{{ $errors->has('birthdate') ? ' has-error' : '' }}">
                        <input type="date" class="form-control" value="birthdate" name="birthdate" placeholder="Birthdate" required>
                        @if ($errors->has('birthdate'))
                            <span class="help-block">
                                <strong>{{ $errors->first('birthdate') }}</strong>
                            </span>
                        @endif
                    </div>
                    <input type="submit" class="btn btn-success btn-lg btn-stud" value="Done"/> <span class="glyphicon glyphicon-send"></span>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
@endsection




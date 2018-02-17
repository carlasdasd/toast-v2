@extends('layouts.base')
@section('Title','Add Rubrics')
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
            <h1>Add Rubrics</h1>
            <div class="line"></div>
        </header>

        <div class="row ">
            <form class="form-reg" name="myForm">
                <div class="row">
                    <div class="col-md-3 margin-left-50 ">
                        <input type="text" id="activity" class="form-control" placeholder="Activities" required autofocus>
                    </div>
                    <div class="col-md-3">
                        <input type="text" id="weight" class="form-control" placeholder="Weights" required>
                    </div>
                    <div class="col-md-3">
                        <select name="inputSelect" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <input type="button" class="add_form_field btn btn-info btn-sm" value="+" onclick="addAllInputs('dynamicInputs', document.myForm.inputSelect.value);">
                    </div>
                </div>

                <div class="row margin-left-100" id="dynamicInputs">

                </div>

            </form>

        </div>
        <div class="pagi">
            <div class="pagination p6">
                <ul>
                    <a href="#"><li></li></a>
                    <a class="is-active"  href="#"><li></li></a>
                    <a href="#"><li></li></a>
                </ul>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
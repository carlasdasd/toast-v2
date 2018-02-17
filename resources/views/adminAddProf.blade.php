@extends('layouts.base')
@section('Title','Add Professors')
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
            <h1>Add Professor</h1>
            <div class="line"></div>


        </header>

        <div class="row ">
            @if(session('info'))

                {{ session('info') }}

            @endif
            <form class="form-reg" method="POST" enctype="multipart/form-data" action="{{  route('createProfessor') }}">
                {{ csrf_field() }}
                <div class="col-md-4 margin-right-50 margin-top-20">

                    <input type="text" class="form-control" name="firstname" placeholder="First Name" required autofocus>
                    <input type="text" class="form-control" name="middlename" placeholder="Middle Name" required>
                    <input type="text" class="form-control" name="lastname" placeholder="Last Name" required>
                    <input type="text" class="form-control" name="email" placeholder="Email" required>
                    <input type="text" class="form-control" name="id_number" placeholder="ID no." required>
                    <input type="date" class="form-control" name="birthdate" placeholder="Birthdate" required>
                </div>
                <div class="col-md-6">
                    <div class="person">
                        <div>
                            <img id="blah" src="{{ asset('img/img_avatar.png') }}" class="img-responsive" alt="Avatar">
                            <input class="form-control" type="file" name="file" id="file" onchange="readURL(this);">
                            <div class="input-group">
                                <input type="submit" class="btn btn-success btn-lg btn-reg" value="Done"/>
                                &nbsp;<i class="glyphicon glyphicon-send"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>



    </div>
</div>



<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
    </body>
@endsection

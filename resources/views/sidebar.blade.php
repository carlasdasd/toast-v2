<div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <img class="sidenav-img" src="{{ asset('img/TOAsTLOGOText.png') }}" alt="">
        </div>

        <ul class="list-unstyled components margin-top-n40">
            <li  class="active">
                <a href="{{ url('home') }}">Home</a>
            </li>
            <li>
                <a href="#profSubmenu" data-toggle="collapse" aria-expanded="false">Professor</a>
                <ul class="collapse list-unstyled" id="profSubmenu">
                    <li><a href="{{ url('home/add_professor') }}">Add professor</a></li>
                    <li><a href="{{ url('home/view_professor') }}">View professors</a></li>
                </ul>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Student</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li><a href="{{ url('home/add_student') }}">Add student</a></li>
                    <li><a href="{{ url('home/view_student') }}">View student</a></li>
                </ul>
            </li>
            <li>
                <a href="#courseSubmenu" data-toggle="collapse" aria-expanded="false">Course</a>
                <ul class="collapse list-unstyled" id="courseSubmenu">
                    <li><a href="{{ url('home/add_course') }}">Add course</a></li>
                    <li><a href="#">View course</a></li>
                </ul>
            </li>
            <li>

                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </nav>
</div>
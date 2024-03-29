<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container d-flex align-content-center">
        <div class="layer">
            <div style="margin-top: 1rem!important;">
                <a class="navbar-brand" href="{{route('home')}}"><img style="height: 40px !important;"
                                                                      src="{{asset('front/img/logo.png')}}"></a>
            </div>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">

                <li class="nav-item">
                        <a class="nav-link {{Request::is('/*') ? 'active' : '' }}" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link">Professions</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link">Locations</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link">About</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link">Team</a>
                </li>

                <li class="nav-item">
                        <a class="nav-link register {{Request::is('login*') ? 'active' : '' }}"
                           href="{{route('login')}}">Login</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link {{Request::is('register*') ? 'active' : '' }}"
                           href="{{route('register')}}">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

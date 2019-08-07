

<nav class="navbar  navbar-expand-md navbar-dark bg-dark sticky-top" >
    <div class="container">
        <a class="navbar-brand " href="{{ url('/') }}">
            Oil|Gas mining
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link " href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                </li>


                <li class="nav-item">
                    <a class="nav-link " href="{{url('students/create')}}" tabindex="-1" aria-disabled="true">Apply Now</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="{{url('/students')}}" aria-haspopup="true" aria-expanded="false">
                        Selections
                    </a>

                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{url('/about')}}" tabindex="-1" aria-disabled="true">About Us</a>
                </li>

            </ul>

            <!-- Right Side Of Navbar -->
            <div class="navbar-nav ml-auto dropdown" >
                <!-- Authentication Links -->
                <a href="#" class="dropdown-toggle " data-toggle="dropdown" id="admin">Admin</a>
                <ul class="dropdown-menu" id="adminDrop">
                    @guest
                    <li class="nav-item dropdown-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item dropdown-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif

                @else
                    <li class="nav-item dropdown-item ">
                        <a id="navbarDropdown" class="" href="/home" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                    </li>
                        <li class="nav-item dropdown-item" aria-labelledby="navbarDropdown">
                            <a class="" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>

                    </ul>@endguest
            </div>
        </div>
    </div>
</nav>
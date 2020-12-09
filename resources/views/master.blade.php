<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}"></link>
    <script src = "{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <title>$okopedia</title>
</head>
<body style="background: OldLace">
    <div class="container-fluid" style="background: White; text-aligh: center;">
        <div class="row d-flex align-items-center" >
            <div class="col-2">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('Pictures/logo.png') }}" style="height: 80px;">    
                </a>
            </div>
            <div class="col-8">
                <form>
                    <input type="text" name="search" placeholder="Search" style="width: 800px;">
                    <input type="submit" value="Search">
                </form>
            </div>
            <div class="col-2">
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                    <a class="btn btn-outline-dark" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="btn btn-outline-dark" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                    
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
        @yield('content')
    </div>    
</body>
</html>
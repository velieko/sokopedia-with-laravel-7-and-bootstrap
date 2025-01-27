<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>@yield('title')</title>
</head>
<body>
    <div class="container-fluid " style="background: White; text-align: center;">
        <div class="row d-flex align-items-center" >
            <div class="col-2">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('Pictures/logo.png') }}" style="height: 80px;">    
                </a>
            </div>
            <div class="col-6 ">
                <form action="/homepage/search" class="form-inline">
                    {{ csrf_field() }}
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" style="width: 500px;" name= "search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
            
            @if(Auth::check())
            <div class="col-1">
                <a class="btn btn-primary" href="{{ url('/cart') }}" role="button">Cart</a>
            </div>

            <div class="col-1">
                <a class="btn btn-primary" href="{{ url('/history') }}" role="button">History</a>
            </div>
            @endif
            
 
            <!-- <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Admin
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{ url('admin/product_list')}}">Product List</a>
                    <a class="dropdown-item" href="{{ url('admin/add_product')}}">Add Product</a>
                    <a class="dropdown-item" href="{{ url('admin/category_list')}}">Category List</a>
                    <a class="dropdown-item" href="{{ url('admin/add_category')}}">Add Category</a>
                </div>
            </div> -->
            <div class="col-1">
                <ul class="navbar-nav ml-1 list-group list-group-horizontal">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                    <a class="btn btn-outline-dark" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    &nbsp;&nbsp;
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

                            @if(Auth::check() && Illuminate\Support\Facades\Auth::user()->role == 'Admin')
                            <a class="dropdown-item" href="{{ url('admin/admin') }}"> 
                                Admin Panel
                            </a>
                            @endif

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
        </div>
        @yield('content')
    </div>  
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
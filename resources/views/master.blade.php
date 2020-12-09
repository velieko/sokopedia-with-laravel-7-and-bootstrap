<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>@yield('title')</title>
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
            <div class="col2">
                <a href="{{ url('/') }}" class="btn btn-outline-dark" style="background: WhiteSmoke; color: black;">Login</a>
            </div>
            <div class="col2 ml-2">
                <a href="{{ url('/') }}" class="btn btn-outline-dark" style="background: WhiteSmoke; color: black;">Register</a>
            </div>
        </div>
        @yield('content')
    </div>  
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
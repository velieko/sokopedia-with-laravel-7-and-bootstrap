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
            <div class="col2">
                <a href="{{ url('/') }}" class="btn btn-outline-dark" style="background: WhiteSmoke; color: black;">Login</a>
            </div>
            <div class="col2">
                <a href="{{ url('/') }}" class="btn btn-outline-dark" style="background: WhiteSmoke; color: black;">Register</a>
            </div>
        </div>
        @yield('content')
    </div>    
</body>
</html>
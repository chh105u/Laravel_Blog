<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
    <nav class="navbar bg-dark navbar-dark navbar-default fixed-top">
        <a class="navbar-brand" href="{{route('crud.index')}}">Blog</a>
        <ul class="nav justify-content-end">
            @if(Auth::check())
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                {{Auth::user()->name}}
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                </div>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{route('register')}}">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">Login</a>
            </li>
            @endif    
        </ul>
    </nav>

    <div class="container-fluid">
        <div style="margin:80px 20px 20px 20px">
            @yield('content')
        </div>
    </div>
    {{-- <nav class="navbar bg-dark navbar-dark navbar-default">
        <a class="navbar-brand" href="{{route('crud.index')}}">你好喔</a>
    </nav> --}}
</body>

</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Bootstrap -->
    <link href="{{ asset('assets/demo-bower/home/bootstrap.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('assets/demo-bower/home/font-awesome.min.css')}}">
	<link href="{{ asset('assets/demo-bower/home/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/demo-bower/home/prettyPhoto.css')}}" rel="stylesheet">      
	<link href="{{ asset('assets/demo-bower/home/main.css')}}" rel="stylesheet">
	<link href="{{ asset('assets/demo-bower/home/responsive.css')}}" rel="stylesheet">     
    
  </head>
  <body class="homepage">   
	<header id="header">
        <nav class="navbar navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{route('home')}}">Laravel</a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- <li class="active"><a href="index.html">Home</a></li> -->
                        <li><a href="{{route('about')}}">Giới thiệu</a></li>
                        <li><a href="{{route('classes')}}">Các khóa học</a></li>
                        <li><a href="{{route('teacher')}}">Giáo viên</a></li>
                        <li><a href="{{route('fee')}}">Học phí</a></li> 
                        <li><a href="{{route('support')}}">Tin tức</a></li>    
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
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
                            </li>
                        @endguest                    
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->
    @yield('content')

    <script src="{{asset('assets/demo-bower/js/home/jquery.js')}}"></script>
    <script src="{{asset('assets/demo-bower/js/home/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/demo-bower/js/home/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('assets/demo-bower/js/home/jquery.isotope.min.js')}}"></script>   
    <script src="{{asset('assets/demo-bower/js/home/wow.min.js')}}"></script>
    <script src="{{asset('assets/demo-bower/js/home/main.js')}}"></script>
</body>
</html>
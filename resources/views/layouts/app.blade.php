{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<!-- the new body !-->
        <div id="app">
        <div class="top_header hidden-xs">

                       
                            <div class="row d-flex container">
                                    <div class="col-md-1">
                                            <div class="header-logo">  <!-- logo -->
                                                <a href="/">
                                                    <img class="td-retina-data img-responsive" src="/images/logo.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                <div class="col-md-3 mr-auto align-self-center">
                                    <div class="top_header_menu_wrap">
                                        <ul class="top-header-menu">
                                              <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('تسجيل الدخول') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('تسجيل ') }}</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{Auth::user()->first_name}} {{Auth::user()->last_name}} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('تسجيل الخروج') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                                        </ul>
                                    </div>
                                </div>
                                
                                
                                
                                
                                
                            </div>
                        </div>
                        @include('includes.messages')

     
            @yield('content')
            
            
    
    

        <div class="sub-footer">  <!-- sub footer -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <p><a href="" class="color-1"></a> موضوع | جميع الحقوق محفوظة 2019</p>
                   
                    </div>
                </div>
            </div>
        </div>

</body>
</html> --}}



<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<!-- the new body !-->
        <div id="app">
        <div class="top_header hidden-xs">

                       
                <header>
       
                        <!-- top header -->
                        <div class="top_banner_wrap">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-md-4 col-sm-4">
                                        <div class="header-logo">  <!-- logo -->
                                            <a href="index.html">
                                                <img class="td-retina-data img-responsive" src="/images/main_logo.jpeg" alt="" style="width:280px; height:90px;">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-8 col-md-8 col-sm-8 hidden-xs">
                                        <div class="header-banner">
                                            <a href="#"><img class="td-retina img-responsive" src="/images/transparent_logo.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- main navber -->
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                  
                                        <ul class="navbar-nav mr-auto">
                                            <li class="active"><a href="/" class="category01">الصفحة الرئيسية</a></li>
                                            <li><a href="{{ route('channels.index')}}" class="category02">الإصدارات </a></li>
                                            <li><a href="#" class="category03">الكتاب </a></li>
                                            <li> <a href="/contact" class="category04">تواصل معنا </a>  </li>
                                            <li><a href="{{route('create_article')}}" class="category05">اضافة مقالة</a></li>



                                        </ul>

                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                                <ul class="navbar-nav mr-auto">
                                            @guest
                                            <li class="nav-item category04">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('تسجيل الدخول') }}</a>
                                            </li>
                                            <li class="nav-item category01">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('تسجيل ') }}</a>
                                            </li>
                                        @else
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    {{Auth::user()->first_name}} {{Auth::user()->last_name}} <span class="caret"></span>
                                                </a>
                    
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                        {{ __('تسجيل الخروج') }}
                                                    </a>
                    
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li>
                                        @endguest
                                        </ul>
                                        </div>
                        </nav>
                    </header>
                                              <!-- Authentication Links -->
         
                
                                   
                                
                            </div>
                        </div>
                        @include('includes.messages')

     
            @yield('content')
            
            
      
    

        <div class="sub-footer">  <!-- sub footer -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <p><a href="" class="color-1"></a> موضوع | جميع الحقوق محفوظة 2019</p>
                   
                    </div>
                </div>
            </div>
        </div>

</body>
</html>
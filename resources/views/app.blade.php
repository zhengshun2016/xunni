<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <title>Laravel App</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">

</head>
<body>
<!-- Static navbar -->
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand"  style="color:mediumslateblue" href="/">寻你</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav ">
                <li><a href="/">首页</a></li>
                <li><a href="/photos">心事墙</a></li>
                <li><a href="/photos">线下活动</a></li>


            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                    <li>
                {{--<ul>--}}
                {{--</ul>--}}

                    <a type="botton" data-toggle="dropdown">
                            <img src="{{ Auth::user()->avatar }}" class="img-circle" width="40">
                    </a>
                        <!-- Link or button to toggle dropdown -->
                        <ul class="dropdown-menu"  aria-labelledby="dLabel">
                            <li><a href="/logout">修改资料</a></li>
                            <li><a href="/logout">登 出</a></li>
                        </ul>
                    </li>


                @else
                    <li class="active"><a href="/user/login">登 录 <span class="sr-only">(current)</span></a></li>
                    <li><a href="/user/register">注 册</a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

@yield('content')
<script src="//cdn.bootcss.com/jquery/3.0.0-alpha1/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>

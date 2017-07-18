<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Interior-Design-Responsive-Website-Templates-Edge">
    <meta name="author" content="">
    <!-- <title>知乎</title> -->
    <link rel="favicon" href="{{ asset('/home/assets/images/favicon.png')}}">
    
   
          @foreach($yy  as $key => $value)
              <link rel="shortcut icon" href="/uploads/avatar/{{$value->logo}}" type="image/x-icon" />
              <title>{{$value->webname}}</title>
             <meta name=keywords content="{{$value->webname}}">
          
         @endforeach
     <script src="{{asset('/home/js/jquery-1.8.3.min.js')}}"></script>
    
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css')}}">
    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-theme.css')}}" media="screen">
    <link rel="stylesheet" href="{{ asset('/css/style.css')}}">
   
</head>

<body>
    
    <!-- 标题-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                         
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                             <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                        </button> <a class="navbar-brand" href="#">知乎</a>
                    </div>
                    
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="#">首页</a>
                            </li>
                            <li>
                                <a href="#">发现</a>
                            </li>
                            <li>
                                <a href="#">话题</a>
                            </li>
                        
                        </ul>
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input class="form-control" type="text">
                            </div> 
                            <button type="submit" class="btn btn-default">
                                搜索
                            </button>
                        </form>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#">消息</a>
                            </li>
                            <li>
                                <a href="#">个人中心</a>
                            </li>
                            <li>
                                <a href="{{url('/home/logout')}}">退出</a>
                            </li>
                            
                        </ul>
                    </div>
                    
                </nav>
            </div>
        </div>
    </div> 
     <!-- container -->
    <section class="container">
        <div class="row">

       
     @yield('content')
    
    <footer id="footer">
        <div class="container">
            <div class="clear"></div>
           
        </div>
        <div class="footer2">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 panel">
                        <div class="panel-body">
                            <p class="simplenav">
                                <a href="index.html">首页</a> | 
                                <a href="about.html">发现</a> |
                                <a href="services.html">话题</a> |
                                
                                <a href="{{url('/home/user/index')}}">个人中心-</a> 
                                
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 panel">
                        <div class="panel-body">
                            <p class="text-right">
                                作者  侯昌衡  2017<a target="_blank" href="http://www.houchangheng.club/">侵权举报  网上有害信息举报专区  违法和不良信息举报：110联系我们 © 2017 知乎
</a>
                            </p>
                        </div>
                    </div>

                </div>
                <!-- /row of panels -->
            </div>
        </div>
    </footer>

    
    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <!-- 拖拉用的script开始
    <script src="{{asset('/js/jquery.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/scripts.js')}}"></script>   -->
    <!-- 拖拉用的script 结束-->

    <script src="{{asset('/js/modernizr-latest.js')}}"></script> 
    <script type='text/javascript' src="{{ asset('/js/jquery.min.js')}}"></script>
    <script type='text/javascript' src="{{ asset('/js/fancybox/jquery.fancybox.pack.js')}}"></script>
    
    <script type='text/javascript' src="{{ asset('/js/jquery.mobile.customized.min.js')}}"></script>
    <script type='text/javascript' src="{{ asset('/js/jquery.easing.1.3.js')}}"></script> 
    <script type='text/javascript' src="{{ asset('/js/camera.min.js')}}"></script> 
    <script src="{{ asset('/js/bootstrap.min.js')}}"></script> 
    <script src="{{ asset('/js/custom.js')}}"></script>
   
   

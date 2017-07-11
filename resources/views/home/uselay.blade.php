<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Interior-Design-Responsive-Website-Templates-Edge">
    <meta name="author" content="">
    <title>About</title>
    <link rel="favicon" href="{{ asset('/home/assets/images/favicon.png')}}">
   
    
    <link rel="stylesheet" href="{{ asset('/admin/adminlte/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/home/assets/css/font-awesome.min.css')}}">
    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="{{ asset('/home/assets/css/bootstrap-theme.css')}}" media="screen">
    <link rel="stylesheet" href="{{ asset('/home/assets/css/style.css')}}">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
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

         <!-- Sidebar -->
            <aside class="col-sm-4 sidebar sidebar-right">

                <div class="panel">
                    <h4>用户中心</h4>
                    <ul class="list-unstyled list-spaces">
                        <li><a href="{{url('/home/user/index')}}">基本信息</a><br>
                           </li>
                        <li><a href="{{url('/home/user/det')}}">详细信息</a><br>
                           </li>
                        <li><a href="">Bootstrap</a><br>
                           </li>
                        <li><a href="">Clean Template</a><br>
                           </li>
                        <li><a href="">Premium Quality</a><br>
                          </li>
                    </ul>
                </div>

            </aside>
            <!-- /Sidebar -->
     @yield('content')
    
    <footer id="footer">
        <div class="container">
            <!-- <div class="social text-center">
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-flickr"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>
            </div> -->

            <div class="clear"></div>
            <!--CLEAR FLOATS-->
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
                                
                                <a href="projects.html">个人中心</a> 
                                <!-- <a href="contact.html">Contact</a> -->
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
    <!-- 拖拉用的script开始 -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <!-- 拖拉用的script 结束-->

    <script src="assets/js/modernizr-latest.js"></script> 
    <script type='text/javascript' src='assets/js/jquery.min.js'></script>
    <script type='text/javascript' src='assets/js/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='assets/js/camera.min.js'></script> 
    <script src="assets/js/bootstrap.min.js"></script> 
    <script src="assets/js/custom.js"></script>
    <script>
        jQuery(function(){
            
            jQuery('#camera_wrap_4').camera({
                height: '600',
                loader: 'bar',
                pagination: false,
                thumbnails: false,
                hover: false,
                opacityOnGrid: false,
                imagePath: 'assets/images/'
            });

        });
    </script>
    <!--  -->
   <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="{{ asset('/home/assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('/home/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('/home/assets/js/custom.js')}}"></script>
</body>
</html>

@extends('home.hou')
@section('content')
    <!-- container -->
    <section class="container">
        
         <!-- <div class="container-fluid"> -->
     <!-- <div class="row" style="height:30px"></div> -->

     <div class="row">
   
	<div class="col-md-8">
			<div class="media">
				
		<!-- <div class="col-md-8"> -->
			<div class="row">
				<!-- <div class="col-md-12"> -->
					<div class="media">
						 <a href="#" class="pull-left">
						 <img height="240" width="240"alt="Bootstrap Image Preview" src="http://lorempixel.com/64/64/" class="media-object">
						 </a>
						<div class="media-body">
							<h2 class="media-heading">
								热门的标题
							</h2> 
								<h4>内容
								内容
								内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</h4>
								<a class="btn" href="#">详情 »</a>
							
						</div>
					</div>
				<!-- </div> -->
			</div>


			


			<div class="row">
				<div class="col-md-2">
					<a href="#"><img height="40" width="40" alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/">
					n条评论</a>
				</div>
				<div class="col-md-2">
					<a href="#"><img height="40" width="40"alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/">
					分享</a>
				</div>
				<div class="col-md-2">
					<a href="#"><img height="40" width="40" alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/">
					邀请回答</a>
				</div>
				<div class="col-md-2">
					<a href=""><img height="40" width="40" alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/">
					举报</a>
				</div>
				<div class="col-md-2">
					
						<a href="#"><img height="40" width="40" alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/">三个点</a>
					
				</div>
				<div class="col-md-2">
				</div>
			</div>
			<div class="row" style="height:50px;border:1 ">
				<a href=""><h4 align="center" >	查看100条评论</h4></a>

			<!-- </div> -->
		</div>
			</div>
		</div>

			<div class="col-md-4">
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<h3>
						关注者
					</h3>
					<h3>
						111
					</h3>
				</div>
				<div class="col-md-4">
					<h3>
						被关注者
					</h3>
					<h3>
						222
					</h3>
				</div>
			</div>


			<div class="row" style="height:30px"></div>
			<div class="col-md-2">
				</div>
			<div class="col-md-10">
				
			<a href="#"><img height="250" width="300" style="margin-right:20" alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/"></a>
			</div>
			
	</div>

     </div>
	<div class="row">

	 @foreach($data as $key => $val)

	<div class="col-md-8">
			<div class="media">
				
		<!-- <div class="col-md-8"> -->
			<div class="row">
				<div class="col-md-12">
					<div class="media">
						 <a href="#" class="pull-left">
						 <img height="160" width="160"alt="Bootstrap Image Preview" src="http://lorempixel.com/64/64/" class="media-object">
						 </a>
						<div class="media-body">

							<h4 class="media-heading">
								{{$val->title}}
							</h4> 
								<p>{{$val->content}}</p>
								<a class="btn" href="{{url('/home/xiangqing')}}/{{$val->id}}">详情 »</a>
							
						</div>
					</div>
				</div>
			</div>


			<div class="row" style="height:20px"></div>


			<div class="row">
				<div class="col-md-2">
					<a href="#"><img height="40" width="40" alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/">
					n条评论</a>
				</div>
				<div class="col-md-2">
					<a href="#"><img height="40" width="40"alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/">
					分享</a>
				</div>
				<div class="col-md-2">
					<a href="#"><img height="40" width="40" alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/">
					邀请回答</a>
				</div>
				<div class="col-md-2">
					<a href="#"><img height="40" width="40" alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/">
					举报</a>
				</div>
				<div class="col-md-2">
					
						<a href="#"><img height="40" width="40" alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/">三个点</a>
					
				</div>
				<div class="col-md-2">
				</div>
			</div>
			<div class="row" style="height:50px;border:1 ">
				<a href=""><h4 align="center" >	查看100条评论</h4></a>

			
		</div>
			</div>
		</div>
		@endforeach
			<!--  -->

			<!--  -->

		
            <!-- main content -->
            
            <!-- /main -->

            <!-- Sidebar -->
            
            <!-- /Sidebar -->

        </div>
    </section>
    <!-- /container -->
    
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

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
@endsection
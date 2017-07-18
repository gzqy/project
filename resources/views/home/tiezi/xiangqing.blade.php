@extends('home.hou')
@section('content')

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-7">
			<div class="row">
				<div class="col-md-8">
				</div>
				<div class="col-md-4">
				</div>
			</div>
			<div class="row">
				<div class="col-md-1">
				</div>
				<div class="col-md-3">
				</div>
				<div class="col-md-1">
				</div>
				<div class="col-md-3">
				</div>
				<div class="col-md-1">
				</div>
				<div class="col-md-3">
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<h3>
						{{$data->title}}
					</h3>
				</div>
				<div class="col-md-9">
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<img height="70px"; width="100%" alt="Bootstrap Image Preview" src="/uploads/avatar/{{ $data->avatar }}">
				</div>
				<div class="col-md-10">
					<a>{{$data->name}}</a>
					<p>名言</p>
				</div>
				
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						
							<div class="thumbnail">
								<img width="100%" alt="Bootstrap Thumbnail Third" src="/uploads/pic/{{ $data->headimg }}">
								<div class="caption">
									
									<p>
										{{$data->content}}
									</p>
									
								</div>
							</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<h4>
					
						{{$data->ctime}}
					</h4>
				</div>
				<div class="col-md-2">
					<h3 class="pinglun">
						<img style="width:40px" src="/images/pinglun1.png">
					</h3>
				</div>
				<div class="col-md-2">
					<h3>
						<img id="zan" src="/images/weidian.png" style="width:40px" value="a" zannum="0">
						
					</h3>
				</div>
				<div class="col-md-2">
					<h3>
						分享
					</h3>
				</div>
				<div class="col-md-2">
					<h3>
						<img id="shoucang" src="/images/shoucang.png" style="width:40px">
					</h3>
				</div>
				<div class="col-md-2">
					<h3>
						举报
					</h3>
				</div>
			</div>
			<div id="ping" class="row" style="display:none">
				<form role="form" method="post" action="{{ url('/home/huitie/pinglun')}}">
				
					{{csrf_field()}}
              		<input type="hidden" name="hid" value="{{session('master')->id}}">
              		<input type="hidden" name="tid" value="{{$data->id}}">

					<textarea name="content" id="" cols="84" rows="4"></textarea>
					<div class="col-md-5"></div><input type="submit"  value="评论">
				</form>

			</div>
			<div><p></p></div>

			@foreach($res as $key=>$val)
			<div class="row">
				<span>
					<img src="/uploads/avatar/{{$val->avatar}}" style="width:60px">
				</span>

				
					<a>
							
						{{$val->name}} 
					

					</a>
				
					<span style="color:#ff9955;border:1px; background:#FFF;width:200px;height:200px; border:1px; background:#FFF">

						{{$val->content}}
					</span>
			</div>
			@endforeach
		</div>
		
		<div class="col-md-3">
			<div class="row">
				<div class="col-md-6">
					<h3>
						关注者
					</h3>
					<h3>222</h3>
				</div>
				<div class="col-md-6">
					<h3>
						被浏览
					</h3>
					<h3>222</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6">
							 
							<button type="button" class="btn btn-default">
								关注问题
							</button>
						</div>
						<div class="col-md-6">
							 
							<button type="button" class="btn btn-default">
								写回答
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h3>
						这里是广告位,遍历之后删除这个标题
					</h3><img width="300px" alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h3>
						关注作者
					</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<img height="70px"; width="100%" alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/">
				</div>
				<div class="col-md-8">
					<a>名字</a>
					<p>名言</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-4">
							<h3>回答</h3>
							<p>数量</p>
						</div>
						<div class="col-md-4">
							<h3>文章</h3>
							<p>数量</p>
						</div>
						<div class="col-md-4">
							<h3>关注者</h3>
							<p>数量</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							 
							<button type="button" class="btn btn-default">
								+关注他
							</button>
						</div>
						<div class="col-md-2">
						</div>
						<div class="col-md-4">
							 
							<button type="button" class="btn btn-default">
								发私信
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h3>
						热门话题
					</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-7">
					<a>知乎热门文章的标题</a>
					<p><a>该文章的作者</a></p>
					
				</div>
				<div class="col-md-1">
				</div>
				<div class="col-md-4">
					333人关注
				</div>
			</div>
		</div>
		<div class="col-md-1">
		</div>
	</div>
</div>

   
	    <script>
	    $(".pinglun").on('click',function(){
	    	// alert('222');
	    	$("#ping").attr({style:'display:""'});
	    });


	    $('#zan').on('click',function(){
	    	//点击之后先判断后修改,最后计数
	    	var x =$("#zan").attr('value');
	    	var zannum =$('#zan').attr('zannum')*1;
	    	
	    	switch(x){
	    		case "a" : 
	    			$('#zan').attr({src:"/images/dian.png"});
	    			$('#zan').attr({value:"b"});
	    			zannum+=1;
	    			console.log(zannum);
	    		
	    			// $.ajax('/home/huitie/dianzan',{

	    			// 	Type:'GET',
	    			// 	Data:{'zannum':zannum},
	    			// 	success:function(data)
	    			// 	{
			    	// 				if (data) 
			    	// 				{
			    	// 					alert("data");
			    	// 				}else{

			    	// 				}
	    			// 	},
	    			// 	error:function()
	    			// 	{
	    			// 		console.log('数据异常');

	    			// 	},
	    			// 	dataType:'json'

	    			// });
	    			 break;
	    		case "b" : 
	    			$('#zan').attr({src:"/images/weidian.png"});
	    			$('#zan').attr({value:"a"});
	    			 break;
	    	}
	    
	    		

	    	
	    });

	    $(".shoucang").on('click',function(){
	    	//前面是ajax改变reply表中的收藏数,然后弹框提示用户收藏成功
	    	// $.ajax('/home/shoucang',{

	    	// 	type:"GET",
	    	// 	data:{}

	    	// });

	    });

    	
	</script>
@endsection
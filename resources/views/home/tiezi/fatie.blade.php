@extends('home.hou')
@section('content')

 

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-1">
		</div>
		@if(session('code') != 1)
		<form id="form_pic" role="form"  action="{{ url('/chuantu')}}" method="post" enctype="multipart/form-data" >
			{{ csrf_field() }}
			<div class="col-md-6">
			<div class="row">
				<div class="col-md-12" id="oneImg">

					<input id="upLoadFile" name="pic" type="file" style="opacity:0;filter:alpha(opacity=0);height: 200px;width: 660px;position: absolute;top: 0;left: 0;z-index: 9">
					<img id="preview" width="100%" height="200px" alt="Bootstrap Image Preview" src="./images/tianjiatu.png">
				</div>
			</div>
		</form>
		 @else 
		<form id="form_pic" role="form"  action="{{ url('/chuantu')}}" method="post" enctype="multipart/form-data" >
			{{ csrf_field() }}
			
			<div class="col-md-6">
			<div class="row">
				<div class="col-md-12" id="oneImg">
				
					<input id="upLoadFile" name="pic" type="file" style="opacity:0;filter:alpha(opacity=0);height: 200px;width: 660px;position: absolute;top: 0;left: 0;z-index: 9">
					<img id="preview" width="100%" height="200px" src="{{ asset('/uploads/pic/'.session('pic')) }}">
				</div>
			</div>
		</form>
		@endif 
		<form role="form"  action="{{ url('/home/tiezi/insert')}}" method="post" enctype="multipart/form-data" >

		{{ csrf_field() }}
							
			<div class="row">
				<div class="col-md-12">
					<h3>
						<input type="text"  id="two" name="title" placeholder="请输入标题">
					</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h3>
						<input type="text" maxlength="6" id="readonlys"  readonly="readonly" name="baikuan" placeholder="请点击右边选择所属板块">
						<input type="hidden" name="headimg" value="{{session('cpic')}}">
						<input type="hidden" name="uid" value="{{session('master')->id}}">
					</h3>
				</div>
			</div>


			<div class="row">
				<div class="col-md-12">
					<script id="container" name="content" type="text/plain">这里写你的初始化内容</script>
				    <!-- 配置文件 -->
				    <script type="text/javascript" src="./ue/utf8-php/ueditor.config.js"></script>
				    <!-- 编辑器源码文件 -->
				    <script type="text/javascript" src="./ue/utf8-php/ueditor.all.js"></script>
				    <!-- 实例化编辑器 -->
				    <script type="text/javascript">
				        var ue = UE.getEditor('container',{toolbars: [['fullscreen', 'source', 'undo', 'redo', 'bold']]});
				    </script>
				</div>
		</div>
		 <div class="row">
				<div class="col-md-3">
				</div>
				
			</div> 


			<div class="row">
				<p></p>
				<div class="col-md-12">
					<div class="col-md-5"></div>
					<input type="submit" class="btn btn-default">
				</div>
			</div>
		</div>
	</form>


		<div class="col-md-1">
		</div>
		<div class="col-md-3">
			<div class="row">
				<div class="col-md-12">
					<table class="table">
						
						<tbody>
							<tr class="active">
								<td>
									<input type="button" name="1a" value="游戏">
								</td>
								<td>
									<input type="button" name="2a" value="运动">
								</td>
								<td>
									<input type="button"name="" name="3a" value="金融">
								</td>
								<td>
									<input type="button" name="4a" value="阅读">
								</td>
							</tr>
						</tbody>
						
						<tbody>
							<tr class="active">
								<td>
									<input type="button" name="5a" value="艺术">
								</td>
								<td>
									<input type="button" name="6a" value="美食">
								</td>
								<td>
									<input type="button" name="7a" value="动漫">
								</td>
								<td>
									<input type="button" name="8a" value="汽车">
								</td>
							</tr>
						</tbody>

						<tbody>
							<tr class="active">
								<td>
									<input type="button" name="9a" value="科技">
								</td>
								<td>
									<input type="button" name="10a" value="教育">
								</td>
								<td>
									<input type="button" name="11a" value="历史">
								</td>
								<td>
									<input type="button" name="12a" value="文化">
								</td>
							</tr>
						</tbody>

						<tbody>
							<tr class="active">
								<td>

									<input type="button" name="13a" value="旅行">
								</td>
								<td>
									<input type="button" name="14a" value="体育">
								</td>
								<td>
									<input type="button" name="15a" value="商业">
								</td>
								<td>
									<input type="button" name="16a" value="足球">
								</td>
							</tr>
						</tbody>

						<tbody>
							<tr class="active">
								<td>
									<input type="button" name="17a" value="篮球">
								</td>
								<td>
									<input type="button" name="18a" value="投资">
								</td>
								<td>
									<input type="button" name="19a" value="音乐">
								</td>
								<td>
									<input type="button" name="20a" value="电影">
								</td>
							</tr>
						</tbody>

						<tbody>
							<tr class="active">
								<td>
									<input type="button" name="21a" value="法律">
								</td>
								<td>
									<input type="button" name="22a" value="健康">
								</td>
								<td>
									<input type="button" name="23a" value="设计">
								</td>
								<td>
									<input type="button" name="24a" value="创业">
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			

			<div class="row">
				<div class="col-md-12">
						<h3>这里是一个广告</h3>
					<img width="100%"alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/">
				</div>
			</div>
		</div>
		<div class="col-md-1">
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
<script>
	$('#upLoadFile').on('change', function(){
		
	var pic = $(this).val();
		
	$('#form_pic').submit();
	});

	//定义一个空字符串
			var arr = [];
	//获取table下的button的值显示在板块中
	$("table input").on('click',function(){
		 var baikuan = $(this).attr('name');
		arr.push(baikuan);
		var len = arr.length;
		
		if (len>1)
		{	
			arr.shift(baikuan);
			$("#readonlys").val(arr);
			alert("最多选择1个板块,亲");
		}else
		{
			$("#readonlys").val(arr);
		}
		
	});



</script>

@endsection  

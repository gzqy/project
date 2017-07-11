<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>发帖页</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">
	<meta name="_token" content="{{ csrf_token() }}"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

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
						<input type="text" name="title" placeholder="请输入标题">
					</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h3>
						<input type="text" maxlength="6" id="readonlys"  readonly="readonly" name="baikuan" placeholder="请点击右边选择所属板块">
						
					</h3>
				</div>
			</div>


			<div class="row">
				<div class="col-md-12">
					<script id="container" name="content" type="text/plain">
				        这里写你的初始化内容
				    </script>
				    <!-- 配置文件 -->
				    <script type="text/javascript" src="./ue/utf8-php/ueditor.config.js"></script>
				    <!-- 编辑器源码文件 -->
				    <script type="text/javascript" src="./ue/utf8-php/ueditor.all.js"></script>
				    <!-- 实例化编辑器 -->
				    <script type="text/javascript">
				        var ue = UE.getEditor('container');
				    </script>
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
									<input type="button" value="游戏">
								</td>
								<td>
									<input type="button" value="运动">
								</td>
								<td>
									<input type="button" value="金融">
								</td>
								<td>
									<input type="button" value="阅读">
								</td>
							</tr>
						</tbody>
						
						<tbody>
							<tr class="active">
								<td>
									<input type="button" value="艺术">
								</td>
								<td>
									<input type="button" value="美食">
								</td>
								<td>
									<input type="button" value="动漫">
								</td>
								<td>
									<input type="button" value="汽车">
								</td>
							</tr>
						</tbody>

						<tbody>
							<tr class="active">
								<td>
									<input type="button" value="科技">
								</td>
								<td>
									<input type="button" value="教育">
								</td>
								<td>
									<input type="button" value="历史">
								</td>
								<td>
									<input type="button" value="文化">
								</td>
							</tr>
						</tbody>

						<tbody>
							<tr class="active">
								<td>
									<input type="button" value="旅行">
								</td>
								<td>
									<input type="button" value="体育">
								</td>
								<td>
									<input type="button" value="商业">
								</td>
								<td>
									<input type="button" value="足球">
								</td>
							</tr>
						</tbody>

						<tbody>
							<tr class="active">
								<td>
									<input type="button" value="篮球">
								</td>
								<td>
									<input type="button" value="投资">
								</td>
								<td>
									<input type="button" value="音乐">
								</td>
								<td>
									<input type="button" value="电影">
								</td>
							</tr>
						</tbody>

						<tbody>
							<tr class="active">
								<td>
									<input type="button" value="法律">
								</td>
								<td>
									<input type="button" value="健康">
								</td>
								<td>
									<input type="button" value="设计">
								</td>
								<td>
									<input type="button" value="创业">
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3">
				</div>
				<input type="button" id="zidingyi" value="点击添加自定义板块">
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
		// console.log(2);
		// alert(2);
	var pic = $(this).val();
		// console.log(pic);
		// $.ajax('{{ url("/ajax") }}', {
		// 	data: {'pic': pic},
		// 	type: 'POST',
		// 	dataType: 'json',
		// 	headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
		// 	success: function(data)
		// 	{
		// 		console.log(data);
		// 	},
		// 	error: function()
		// 	{
		// 		// alert('error');
		// 	}
		// });
	$('#form_pic').submit();
	});

	//定义一个空字符串
			var arr = [];
	//获取table下的button的值显示在板块中
	$("table input").on('click',function(){

		// var array = [1,2,3,4];
		 var str = "";
		 var baikuan = $(this).val();
		 str=baikuan;

		$(arr).each(function(index){
			if (str==this) {
				if (index==0){
					arr.shift(baikuan);
					alert("重复了");
					}else{
					arr.pop(baikuan);
					alert("重复了");	
					}
			}
		});

		arr.push(baikuan);
		var len = arr.length;
		
		if (len>3)
		{
			alert("最多选择三个板块,亲");
		}else
		{
			$(this).attr("style","background:blue");
			$("#readonlys").val(arr);
		}

		



		// var lens =$("#readonlys").val().length;
		// alert(lens);
		// var baikuan = $(this).val();
		// str+=baikuan;
		// var len = str.length;
		// // var lens =$("#readonlys").val().length;
		// if(len>6)
		// {	
		// 	$("#readonlys").removeAttr("readonly");
		// 	alert("最多选择三个板块,亲");

		// }else{
		// 	$(this).attr("style","background:blue");
		// 	$("#readonlys").val(str);
		// }
		
	});

	$("#zidingyi").on('click',function(){
		
		//移除input的只读属性,让用户可以输入
		$("#readonlys").removeAttr("readonly");

		//提示用户现在可以输入了,用户最多输入6个字
		$("#readonlys").attr("placeholder","自定义的板块,最多6个字");
		
		
	});

</script>
  </body>
</html>
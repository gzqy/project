<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>搜索</title>
</head>
<body>
	<h1>搜索</h1>
	<hr>
	@if(session('info'))
		<p>{{ session('info')}}</p>
	@endif
	<form action="{{ url('/home/dose')}}" method="post">
	{{ csrf_field() }}
		标题：<input type="text" name="ftitle">
		<button>搜索</button>
	</form>
	
	
</body>
</html>
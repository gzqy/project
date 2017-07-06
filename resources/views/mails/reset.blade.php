<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>reset</title>
</head>
<body>
	{{ $res->name }}:你好。<br>
	<a href="{{ env('APP_URL')}}/admin/link/{{ $res->remember_token }}">请点击找回密码</a>
</body>
</html>
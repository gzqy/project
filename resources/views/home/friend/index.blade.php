<!DOCTYPE html>
<html lang="zh-CN" class="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="renderer" content="webkit" />
<meta name="description" content="一个真实的网络问答社区，帮助你寻找答案，分享知识。"/>
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
<title>知乎 - 与世界分享你的知识、经验和见解</title>

<link rel="stylesheet" href="css/main.4807c903_2.css">
<meta name="google-site-verification" content="FTeR0c8arOPKh8c5DYh_9uu98_zJbaWw53J-Sch9MTg" />
<meta name="baidu-site-verification" content="KPFppAFoYF4Kkdv9" />
<meta property="qc:admins" content="00544670776201056375" />
<link rel="canonical" href="http://www.zhihu.com" />
<meta id="znonce" name="znonce" content="053344737a594a11ae62a21788046f70">

<script src="{{ asset('home/js/instant.14757a4a_5.js') }}"></script>
</head>
<body class="zhi ">




<div class="index-main">
<div class="index-main-body">


<div class="desk-front sign-flow clearfix sign-flow-simple">




<div class="view view-signin" data-za-module="SignInForm">


</div>
<div class="view view-signup selected" data-za-module="SignUpForm">





	<form class="zu-side-login-box" action="/home/dofr"  method="POST">
	{{csrf_field()}}
	 @if(session('info'))
	        <p class="text-danger">{{session('info')}}</p>
	 @endif
	<div class="group-inputs">

	<div class="name input-wrapper">
	<input required type="text" name="name"  placeholder="用户名">
	</div>

	</div>
	<div class="button-wrapper command">
	<button class="sign-button submit" type="submit">提交</button>

	</div>
</div>
</div>

</div>


<div class="footer">


</div>


<script src="{{ asset('/home/js/vendor.cb14a042_5.js') }}"></script>
<script src="{{ asset('/home/js/base.ecc1e150_2.js') }}"></script>

<script src="{{ asset('home/js/common.d6c46a16_2.js') }}"></script>
<script src="{{ asset('home/js/page-index.352df081_2.js') }}"></script>

</body>


</html>
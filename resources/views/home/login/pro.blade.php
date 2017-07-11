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

<script src="{{ asset('/admin/home/js/instant.14757a4a_5.js') }}"></script>
</head>
<body class="zhi ">




<div class="index-main">
<div class="index-main-body">
<div class="index-header">

<h1 class="logo hide-text">问题提交</h1>

<h2 class="subtitle">与世界分享你的知识、经验和见解</h2>
</div>

<div class="desk-front sign-flow clearfix sign-flow-simple">

<div class="index-tab-navs">
<div class="navs-slider">

<a href="">建议反馈</a>
<span class="navs-slider-bar"></span>
</div>
</div>


<div class="view view-signin" data-za-module="SignInForm">


</div>
<div class="view view-signup selected" data-za-module="SignUpForm">
<form class="zu-side-login-box" action="/home/dopro"  method="POST">
{{csrf_field()}}
 @if(session('info'))
        <p class="text-danger">{{session('info')}}</p>
    @endif
<div class="group-inputs">

<div class="name input-wrapper">
<input required type="text" name="title"  placeholder="标题">
</div>
<div class="input-wrapper">
<input required type="text" name="content"  placeholder="问题内容" autocomplete="off">
</div>



</div>
<div class="button-wrapper command">
<button class="sign-button submit" type="submit">意见提交</button>

</div>
</form>


<p class="agreement-tip"><a href="{{url('/home/regist')}}">注册</a></p>
<p class="agreement-tip"><a href="{{url('/home/login')}}">登录</a></p>

</div>
</div>
</div>

</div>


<div class="footer">

<span>&copy; 2017 知乎</span>
<span class="dot">·</span>
<a target="_blank" href="https://zhuanlan.zhihu.com">知乎专栏</a>
<span class="dot">·</span>
<a target="_blank" href="/roundtable">知乎圆桌</a>
<span class="dot">·</span>
<a target="_blank" href="/explore" data-za-c="explore" data-za-a="visit_explore" data-za-l="home_bottom_explore">发现</a>
<span class="dot">·</span>
<a target="_blank" href="/app">移动应用</a>
<span class="dot">·</span>


<a href="/org/signin" class="footer-mobile-show">使用机构帐号登录</a>

<span class="dot footer-mobile-show">·</span>

<a href="/contact" class="footer-mobile-show">联系我们</a>
<span class="dot">·</span>
<a target="_blank" href="/careers">来知乎工作</a>
<br />
<a href="http://www.miibeian.gov.cn/" target="_blank">京 ICP 证 110745 号</a>
<span class="dot">·</span>
<span>京公网安备 11010802010035 号</span>
<span class="dot">·</span>
<a href="http://zhstatic.zhihu.com/assets/zhihu/publish-license.jpg" target="_blank">出版物经营许可证</a>
<span class="dot">·</span>
<a target="_blank" href="/jubao">侵权投诉</a>
<span class="dot">·</span>
<a target="_blank" href="http://www.12377.cn">网上有害信息举报专区</a>
<span class="dot">·</span>
<span>违法和不良信息举报：010-82716601</span>

</div>


<script src="{{ asset('/admin/home/js/vendor.cb14a042_5.js') }}"></script>
<script src="{{ asset('/admin/home/js/base.ecc1e150_2.js') }}"></script>

<script src="{{ asset('/admin/home/js/common.d6c46a16_2.js') }}"></script>
<script src="{{ asset('/admin/home/js/page-index.352df081_2.js') }}"></script>

</body>


</html>